<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\Event\UserRegistered;
use App\Model\TblUser;
use App\Service\QueueService;
use App\Service\UserService;
use Carbon\Carbon;
use Hyperf\DbConnection\Db;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;
use Psr\EventDispatcher\EventDispatcherInterface;

/**
 * Class DbController.
 * @AutoController
 */
class DbController extends AbstractController
{
    /**
     * @Inject
     * @var EventDispatcherInterface
     */
    public $eventDispatcher;

    /**
     * @Inject
     * @var QueueService
     */
    protected $service;

    /**
     * @Inject
     * @var UserService
     */
    protected $userService;

    public function mul_db()
    {
        $data = Db::connection()->select('select * from tbl_user limit 1');
        $aff_data = Db::connection('db_aff')->select('select * from aff_user limit 1');

        return [
            'db_A9' => $data,
            'db_A9_Aff' => $aff_data,
        ];
    }

    public function exec()
    {
        $update = Db::update('UPDATE tbl_user set update_time=? where id=?', [date('Y-m-d H:i:s'), 168587866]);
        $insert = Db::insert('INSERT into tbl_tmp(id) value(?)', [date('Y-m-d H:i:s')]);
        return [
            'update' => $update,
            'insert' => $insert,
        ];
    }

    public function transaction()
    {
        /*Db::transaction(function (){
            $update = Db::update('UPDATE tbl_user set update_time=? where id=?',[date('Y-m-d H:i:s'), 168587866]);
            $insert = Db::insert('INSERT into tbl_tmp(id) value(?)', [date('Y-m-d H:i:s')]);
        });*/

        Db::beginTransaction();
        try {
            $update = Db::update('UPDATE tbl_user set update_time=? where id=?', [date('Y-m-d H:i:s'), 168587866]);
            $insert = Db::insert('INSERT into tbl_tmp(id) value(?)', [date('Y-m-d H:i:s')]);
            throw new \Swoole\Exception('ssss');
            Db::commit();
        } catch (\Throwable $e) {
            Db::rollBack();
        }
        return [
            'update' => $update,
            'insert' => $insert,
        ];
    }

    public function get()
    {
        $query = Db::table('tbl_user')->select(['id', 'username', 'nick_name', 'update_time']);
        return [
            'count' => $query->count(),
            'exist' => (clone $query)->where('username', 'user1031')->exists(),
            'data' => $query->limit(3)->get(),
            'names' => $query->pluck('username'), //获取所有username的列
            'username' => $query->value('username'), //获取第一行的单个值
        ];
    }

    //遍历user表每次读取N条数据，可以回调函数中做具体业务
    public function chunk()
    {
        $query = Db::table('tbl_user')->select(['id', 'username', 'nick_name', 'update_time'])->orderBy('id');
        $i = 0;
        $tmp = [];
        $query->chunk(2, function ($users) use (&$tmp, &$i) {
            ++$i;
            $tmp[] = $users;
            if ($i == 5) {
                return false;
            }
        });
        return $tmp;
    }

    public function raw()
    {
        $query = Db::table('tbl_user as u')->select(['group_id', Db::raw('count(1) num')])->groupBy('group_id');
        return $query->get();
    }

    public function join()
    {
        return Db::table('tbl_user as u')->select(['u.id', 'u.username', 'u.nick_name', 'u.update_time', 'e.ip', 'e.odds_name', 'c.card_num', 'c.bank_id'])
            ->leftJoin('tbl_user_extend as e', 'u.id', '=', 'e.user_id')
            ->leftJoin('tbl_user_card as c', 'u.id', '=', 'c.user_id')
            ->limit(3)
            ->get();
    }

    public function model()
    {
        $model = TblUser::query()->where('username', '=', 'user001')->first();
        $model->email = time() . '@gg.cc';
        $model->last_note = ['note1' => '111111', 'note2' => '22222']; //会在casts里自动转为jason存储到db
        return [
            'first' => $model,
            'save' => $model->save(),
            'refresh' => $model->refresh(),
        ];
    }

    public function hasOne()
    {
        return TblUser::query()->find(1100000006)->userCard;
    }

    //预加载
    public function with()
    {
        //不使用with 会查询数据库11次
        //$users =  TblUser::query()->limit(10)->get();

        //使用with，会预先加载userCard,只查询2次
        $users = TblUser::query()->limit(10)->with('userCard')->get();
        $card = [];
        foreach ($users as $user) {
            $card[] = $user->userCard;
        }
        return $card;
    }

    public function page()
    {
        return TblUser::paginate(3);
    }

    public function cache()
    {
        return TblUser::findFromCache(1100000006);
    }

    /**
     * @return \Hyperf\Utils\HigherOrderCollectionProxy|\Hyperf\Utils\HigherOrderTapProxy|mixed|void
     *                                                                                               会调用 getUsernameAttribute 来格式化字段
     */
    public function attr()
    {
        $obj = TblUser::query()->find(1100000006);
        return [
            'obj' => $obj,
            'username' => $obj->username,
            'fullname' => $obj->full_name,
            'is_tcg' => $obj->is_tcg, //格式化 boolean
            'last_note' => $obj->last_note,
            'update_time' => $obj->update_time->addMonth(24)->addWeek(1)->toDateTimeString(),
        ];

        //$d = Carbon::now()->toDateTimeString()
    }

    //注册时异步任务处理积分等业务
    public function reg()
    {
        $obj = TblUser::query()->find(1100000006)->toArray();
        $this->service->push($obj);
        return 'success';
    }

    public function event()
    {
        return $this->userService->register();
        /*$user_id = rand(10000,99999);
        $this->eventDispatcher->dispatch(new UserRegistered($user_id));
        return $user_id;*/
    }
}
