<?php

Yii::import('application.models._common.CommonUser');

class User extends CommonUser
{
    /**
     * Returns the static model of the specified AR class.
     * @return \models\frontend\User the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
} 