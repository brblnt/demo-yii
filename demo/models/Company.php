<?php

namespace app\models;

use yii\db\ActiveRecord;

class Company extends ActiveRecord
{

    private $text;

    public static function getQuery(){
        return (new \yii\db\Query())
        ->select(['text'])
        ->from('company')
        ->limit(1)
        ->one();
    }

    public static function findText()
    {
        return self::getQuery() ? self::getQuery()['text'] : "";
        
    }

    public static function tableName()
    {
        return 'company';
        
    }


}
