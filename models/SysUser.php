<?php

namespace app\models;

use \yii\base\BaseObject;

class SysUser extends \yii\db\ActiveRecord
{

    public function getRoles()
    {
//        $roles = $this -> hasMany(SysRole::className(),['uid'=>'id'])->asArray()->all();
        $roles = $this -> hasMany(SysRole::className(),['uid'=>'id'])->asArray();
        return $roles;
    }

}