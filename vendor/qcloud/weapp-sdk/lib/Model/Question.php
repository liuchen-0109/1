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

}
