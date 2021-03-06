<?php
/**
 * KK-Framework
 * Author: kookxiang <r18@ikk.me>
 */

namespace Controller;

use Core\Template;


class Index{
    /**
     * @Route /User-old
     */
    function dynamicRouteTest()
    {
        Template::setView('User/glance');
        Template::putContext('test', 'Hello World');
    }

    /**
     * @Home
     * @Route /Index
     */
    function index()
    {
        include Template::load('Demo');
    }

    /**
     * This method can be call by /index/test.json
     * @Route /Test
     * @JSON
     */
    function test()
    {
        return array(
            'hello' => 1,
            'world' => 2
        );
    }
}
