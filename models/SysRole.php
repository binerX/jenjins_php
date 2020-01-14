<?php
namespace app\models;
class SysRole extends \yii\db\ActiveRecord{


    public function getUser()
    {
       $user =  $this -> hasOne(SysUser::className(),['id'=>'uid'])->asArray();
       return $user;
    }

}