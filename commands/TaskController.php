<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TaskController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionAddTask($name, $description, $status, $time_finished)
    {
       $task =  new Task();
       $task->name = $name;
       $task->description = $description;
       $task->status = $status;
       $task->time_finished = $time_finished;
       $task->time_added = date("Y-m-d");
       if($task->save()){
         var_dump($task);
         Console::output("saved");
       }else{
          var_dump($task->error);
          Console::output("not saved");
       }

    }
}
