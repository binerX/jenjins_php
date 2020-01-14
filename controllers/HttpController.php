<?php

namespace app\controllers;

use yii\rbac\Role;
use yii\web\Controller;

/**
 * Class HttpController
 * @package app\controllers
 */
class HttpController extends Controller
{

    public function actionIndex()
    {
        $post_data = array(
            'page_no' => 1,
            'page_size' => 10
        );

        $json_data = json_encode($post_data);
        $data = $this->send_post("http://49.232.56.143/external/home/GuanYiApi/getItems", $json_data);

        return $data;
    }

    public function send_post($url, $post_data)
    {
        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-type:application/json; charset=utf-8',
                'content' => $post_data,
                'timeout' => 15 * 60 // 超时时间（单位:s）
            )
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        return $result;
    }

    public function id()
    {


        new Role();


        new Role();
    }
}







