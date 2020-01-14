<?php
namespace app\controllers;

use app\models\SysRole;
use app\models\SysUser;
use app\models\SysUserRole;
use \yii\base\Controller;
use yii\helpers\Json;


class ModelController extends Controller
{
    public function actionModel()
    {
//        $request = \Yii::$app->request;
//
//        $id = $request->get("id");
//
//        $sql = "select * from sys_user where id=:id";
//
//        $a = SysUser::findBySql($sql,[':id' => $id]) -> all();

//
//        $a = SysUser::findBySql($sql) -> all();

//        $a = UserModel::findBySql($sql) -> all();

        // 获取全部数据
//        $data =  SysUser::find()->all();

        // 查询 ID=5
//        $data = SysUser::find()->where(['id'=>5])->all();

        //id 大于3 的数据
//        $data = SysUser::find()->where(['>','id',3])->all();

        // id 在 2 和 5 之间的
//        $data = SysUser::find()->where(['between','id',2,5])->all();

        // 模糊查询
//        $data = SysUser::find()->where(['like','nickname','张三'])->all();

        // 查询一条数据返回对象
//        $data = SysUser::find()->where(['id'=>5])->one();

        // 查询所有数据
//        $data = SysUser::findAll([1,3,5]);

        // 数组输出
//        $data = SysUser::find()->asArray()->all();
        foreach (SysUser::find()->batch(5) as $batch){
            echo count($batch),"-";
            $data[] = $batch;
        }
        vd($data);
    }

    public function actionAdd(){
        $user = new SysUser();
        $user->username = 'sfgfsfdsfds';
        $user->nickname= 'laojfdsfsfiu';
        $data = $user->save();
        $id = $user->attributes['id'];
        vd($id);
    }

    public function actionUpdate()
    {
//        $user = SysUser::findOne(9);
//        $user->username = '7654';
//        $user->nickname = '7654';
//        $data = $user->update();
//        $data = $user->save();

        // 更新单个字段
        $data = SysUser::updateAllCounters(['count'=>1],['id'=>9]);
        vd($data);
    }

    public function actionDelete()
    {
//        $user = SysUser::findOne(11);
//        $user = SysUser::find()->where(['id'=>12])->one();
//        $data = $user->delete();
//        $user = SysUser::find()->where(['id'=>12])->all();
//        $data = $user[0]->delete();

        //删除单个数据
//        $data = SysUser::deleteAll('id=:id',[':id'=>15]);

        // 删除 ID 大于 10 的数据
//        $data = SysUser::deleteAll('id> :id',[':id'=>10]);

        $data = SysUser::deleteAll('id> :id AND count < :num',[':id'=>10,':num'=>5]);
        vd($data);
    }

    public function actionIndex()
    {
        $user = SysUser::findOne(1);
//        $data = SysRole::find()->where(['uid'=>$user->attributes['id']])->all();

        $data = $user->hasMany(SysRole::className(),['uid'=>'id'])->all();

        vd($data);
    }

    // 一对多
    public function actionLinks()
    {
        $user = SysUser::findOne(2);
//        $data = SysRole::find()->where(['uid'=>$user->attributes['id']])->all();

//        $data = $user->getRoles();
        $data = $user->roles;

        vd($data);
    }
    //一对一
    public function actionFindOne()
    {
        // join
        $role = SysRole::find()->with('user')->asArray()->all();

        return Json::encode($role);

    }
}