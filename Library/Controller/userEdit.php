<?php
/**
 * Created by PhpStorm.
 * User: touko
 * Date: 16-8-21
 * Time: 下午4:33
 */
namespace Controller;

use Core\Template;

//Initialize models
@require_once LIBRARY_PATH . 'Model/' . 'user.db.php';


class userEdit{
    /**
     * @DynamicRoute /user/change/{string}
     * @param $planNum
     */
    function changeConfirm($planNum){
        $db = new db_user();
        $data = array(
            'ss' => $db->getUserSsById(1),
            'info' => $db->getUserInfoById(1)
        );
        $data['plan'] = $db->getPlanInfoById($data['info']->plan);
        $thisPlan = $db->getPlanInfoById($planNum);

        if (!isset($thisPlan->name)){
            Template::setView('Misc/Redirect');
            Template::putContext('text', '错误啦，重定向喵～');
            Template::putContext('timeout', '3');
            Template::putContext('link', 'index.php/user/glance');
            return 0;
        }

        // User info
        Template::putContext(
            'userName',
            $data['info']->name
        );
        Template::putContext(
            'regDate',
            $data['info']->reg_date
        );

        // Page initialization
        Template::setView('User/change-confirm');
        Template::putContext('title', '套餐更换确认');
    }
}