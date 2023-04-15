<?php
namespace micro\controllers;
use yii\rest\ActiveController;

class PostController extends ActiveController
{
    public $modelClass = 'micro\models\Post';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        unset($behaviors['rateLimiter']);
        return $behaviors;
    }
}