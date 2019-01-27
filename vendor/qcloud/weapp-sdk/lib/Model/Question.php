<?php
namespace QCloud_WeApp_SDK\Model;

use QCloud_WeApp_SDK\Mysql\Mysql as DB;
use QCloud_WeApp_SDK\Constants;
use \Exception;

class Question
{
    public static function storeQuestion ($data) {

          return  DB::insert('question', $data);

    }

    public static function findQuestionById ($id) {
        return DB::row('question', ['*'], compact('id'));
    }
    public static function findLast ($openid,$create_time) {
        return DB::row('question', ['id'], compact('openid','create_time'));
    }
    public static function findMyList($openid,$status=1){
        return DB::select('question',['*'],compact('openid','status'));
    }
}
