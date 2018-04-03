<?php
/**
 * Created by PhpStorm.
 * User: братья
 * Date: 03.04.2018
 * Time: 23:15
 */

namespace app\models;


use yii\db\ActiveRecord;
use app\models\Users;
use app\models\AuthInter;
use Yii;

class Auth extends ActiveRecord implements AuthInter
{
    public static function identityById ($id)
    {
        if(Users::find()->where(['id' => $id])->one()){
            return true;
        }else{
            return false;
        }
    }
    public static function identityByUserName ($username)
    {
        if(Users::find()->where(['login' => $username])->one()){
            return true;
        }else{
            return false;
        }
    }



    public static function identityByPassword ($password)
    {
        if(Users::find()->where(['password' => Yii::$app->getSecurity()->generatePasswordHash($password)])->one()){
            return true;
        }else{
            return false;
        }
    }
}