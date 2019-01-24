<?php
namespace QCloud_WeApp_SDK\Model;

use QCloud_WeApp_SDK\Mysql\Mysql as DB;
use QCloud_WeApp_SDK\Constants;
use \Exception;

class Answer
{
    public static function storeAnswer($data) {
          return  DB::insert('answer', $data);

    }

    public static function findAnswerById ($id) {
        return DB::row('answer', ['*'], compact('id'));
    }

    public static function findAnswerByOpenidId ($openid) {
        return DB::select('answer', ['*'], compact('openid'));
    }
}
