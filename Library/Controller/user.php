<?php
/**
 * Created by PhpStorm.
 * User: touko
 * Date: 16-8-10
 * Time: 下午10:25
 */

namespace Controller;

use Core\Template;

class user{

    /**
     * @DynamicRoute /user
     */
    function index()
    {
        Template::setView('User/glance');
        Template::putContext('title', '概览');
    }

    /**
     * @DynamicRoute /user/glance
     */
    function glance()
    {
        Template::setView('User/glance');
        Template::putContext('title', '概览');
    }

    /**
     * @Route /user/usage
     */
    function usage()
    {
        Template::setView('User/usage');
        Template::putContext('title', '节点信息');
    }

    /**
     * @Route /user/pay
     */
    function pay()
    {
        Template::setView('User/pay');
        Template::putContext('title', '账户充值');
    }

}