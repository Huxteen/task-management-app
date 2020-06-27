<?php

namespace app\modules\api\controllers;
use app\models\Task;
use app\modules\api\resources\NoteResource;
use yii\rest\ActiveController;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex(){
        echo "Hello World";
        // return $this->renderContent('Hello');
    }
}
// class TaskController extends ActiveController
// {
//     public $modelClass = Task::class;
// }




?>