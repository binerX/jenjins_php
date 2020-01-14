<?php


namespace app\controllers;


use yii\web\Controller;

class HomeController extends Controller
{
//    public $enableCsrfValidation=false;

      public $layout ="home";

//    public function actionIndex()
//    {
//
//        $date = [
//            'name' => 'bin.yang',
//            'age' => 54
//        ];
//        vd($date);
//
//    }

//    public function actionIndex()
//    {
//
//        $request = \yii::$app -> request;
//
////        $id = $request -> get('id', 1);
//
////        vd($id);
//
////        $name = $request -> post('name');
//
////        p($name);
//
////        $is = $request -> isGet;
////
////        vd($is);
//        $ip = $request -> userIP;
//
//        vd($ip);
//    }

//    public function actionIndex()
//    {
//
//        $request = \yii::$app -> request;
//
////        $data = 'zhang';
////
////        $name = '张三';
//
//        $user = [
//
//            'name' => '张三',
//
//            'ip' => $request -> userIP,
//
//            'arr' => [
//
//                'age' => 55,
//
//                'class' => 'p3'
//
//                ]
//
//        ];
//
//        $data = [
//
//            'title' => '司法局第三方'
//
//        ];
//
//        $object  = [
//
//            'user' => $user,
//
//            'data' => $data
//
//        ];
//
////        compact($data,$user);
//
////     return $this -> renderPartial('index',compact('user','data'));
//
//     return $this -> render('index',compact('user','data'));
//
//
//
//    }

    public function actionIndex()
    {
        $data = 'hello world <script> alert(1) </script>';

     return $this -> renderPartial('index',compact('data'));

    }

    public function actionAbout()
    {
        return $this -> render("about");

    }

}