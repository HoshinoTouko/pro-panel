<?php
/**
 * Created by PhpStorm.
 * User: touko
 * Date: 16-8-10
 * Time: 下午10:25
 */

namespace Controller;

use Core\Template;

//Initialize models
@include LIBRARY_PATH . 'Model/' . 'user.db.php';

class user{

    /**
     * @DynamicRoute /user/{string}
     * @param $block
     */
    function user($block){
        // Database initialization
        $db = new db_user();
        $data = array(
            'ss' => $db->getUserSsById(1),
            'info' => $db->getUserInfoById(1)
        );
        $data['plan'] = $db->getPlanInfoById($data['info']->plan );

        // User info
        Template::putContext(
            'userName',
            $data['info']->name
        );
        Template::putContext(
            'regDate',
            $data['info']->reg_date
        );

        switch ($block){
            case 'glance':
                // Page initialization
                Template::setView('User/glance');
                Template::putContext('title', '概览');

                // Free transfer percent
                Template::putContext(
                    'transferLeft',
                    sprintf("%.2f", 100 *( 1- $data['ss']->t / $data['ss']->transfer_enable) )
                );
                // Days left
                Template::putContext(
                    'daysLeft',
                    $data['info']->days_left
                );
                // Plan name
                Template::putContext(
                    'planName',
                    $data['plan']->name
                );
                // Money left
                Template::putContext(
                    'currencyLeft',
                    $data['info']->currency_left
                );
                break;

            case 'usage':
                // Page initialization
                Template::setView('User/usage');
                Template::putContext('title', '节点信息');
                break;

            case 'pay':
                // Page initialization
                Template::setView('User/pay');
                Template::putContext('title', '账户充值');
                break;

            case 'change':
                // Page initialization
                Template::setView('User/change');
                Template::putContext('title', '套餐更换');
                break;

            case 'setting':
                // Page initialization
                Template::setView('User/setting');
                Template::putContext('title', '账户设置');
                break;

            case 'ticket':
                // Page initialization
                Template::setView('User/ticket');
                Template::putContext('title', '提交工单');
                break;

            default:
                Template::setView('Misc/Redirect');
                Template::putContext('text', '错误啦，重定向喵～');
                Template::putContext('timeout', '3');
                Template::putContext('link', 'index.php/user/glance');
                break;
        }
    }
    /**
     * @DynamicRoute /user
     */
    function index(){
        Template::setView('Misc/Redirect');
        Template::putContext('text', 'Hello!');
        Template::putContext('timeout', '0');
        Template::putContext('link', 'index.php/user/glance');
    }




}