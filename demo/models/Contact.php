<?php

namespace app\models;

use yii\db\ActiveRecord;

class Contact extends ActiveRecord
{

    private $name;
    private $body;

    public static function getQuery(){
        return (new \yii\db\Query())
        ->select(['name','text'])
        ->from('contact')
        ->all();
    }

    public static function tableName()
    {
        return 'contact';
    }

}
