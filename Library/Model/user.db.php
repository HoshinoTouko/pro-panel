<?php
/**
 * Created by PhpStorm.
 * User: touko
 * Date: 16-8-12
 * Time: 下午4:48
 */
namespace Controller;

use Core\Database as db;

class db_user{
    function getUserSsById($id){
        $statement = db::getInstance()->prepare('SELECT * FROM `user` WHERE uid = ?');
        $statement->bindValue(1, $id);
        $statement->execute();
        return $statement->fetchObject(__CLASS__);
    }
    function getUserInfoById($id){
        $statement = db::getInstance()->prepare('SELECT * FROM `user_info` WHERE uid = ?');
        $statement->bindValue(1, $id);
        $statement->execute();
        return $statement->fetchObject(__CLASS__);
    }
    function getPlanInfoById($id){
        $statement = db::getInstance()->prepare('SELECT * FROM `plan` WHERE uid = ?');
        $statement->bindValue(1, $id);
        $statement->execute();
        return $statement->fetchObject(__CLASS__);
    }
}