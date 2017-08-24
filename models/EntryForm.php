<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'], //name and email field is required
            ['email', 'email'],				 // email must be a valid email
        ];
    }
}