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
        $statement = db::getInstance()->prepare('SELECT * FROM `plan` WHERE pid = ?');
        $statement->bindValue(1, $id);
        $statement->execute();
        return $statement->fetchObject(__CLASS__);
    }
    function getAllVisiblePlanInfo(){
        $statement = db::getInstance()->prepare('SELECT * FROM `plan` WHERE visible = ?');
        $statement->bindValue(1, '1');
        $statement->execute();
        $result = [];
        while( $row = $statement->fetchObject(__CLASS__) ){
            array_push($result, $row);
        }
        return $result;
    }
    function getAllNodeInfoByLevel($level){
        $statement = db::getInstance()->prepare('SELECT * FROM `node` WHERE level >= ?');
        $statement->bindValue(1, $level);
        $statement->execute();
        $result = [];
        while( $row = $statement->fetchObject(__CLASS__) ){
            array_push($result, $row);
        }
        return $result;
    }
    function getNodeInfoByNid($nid){
        $statement = db::getInstance()->prepare('SELECT * FROM `node` WHERE nid = ?');
        $statement->bindValue(1, $nid);
        $statement->execute();
        return $statement->fetchObject(__CLASS__);
    }
}