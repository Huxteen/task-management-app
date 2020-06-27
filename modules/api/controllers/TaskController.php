<?php

namespace app\modules\api\controllers;
use app\models\Task;
use app\modules\api\resources\TaskResource;
use yii\rest\ActiveController;
use yii\web\Controller;

// class TaskController extends Controller
// {
//     public function actionIndex(){
//         echo "Hello Austin";
//     }
// }
class TaskController extends ActiveController
{
    public $modelClass = Task::class;
    
    public function behaviors()
      {
          $behaviors = parent::behaviors();
          $behaviors['corsFilter'] = [
              'class' => \yii\filters\Cors::className(),
          ];
          return $behaviors;
      }

  }




?>