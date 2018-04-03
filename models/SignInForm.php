<?php
/**
 * Created by PhpStorm.
 * User: братья
 * Date: 03.04.2018
 * Time: 23:26
 */

namespace app\models;
use yii\base\Model;

class SignInForm extends Model
{
    public $login;
    public $password;

    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
//            ['login','unique','targetClass' =>'app\models\Users'],//Что это такое?
            ['password','string','min'=>2, 'max' => 10]

        ];
    }
}