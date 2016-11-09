<?php
/**
 * Created by PhpStorm.
 * User: naffiq
 * Date: 11/9/2016
 * Time: 7:04 PM
 */

namespace console\controllers;


use common\models\User;
use yii\console\Controller;
use yii\helpers\Console;

class InitController extends Controller
{
    public function actionAdmin($password, $email = 'me@naffiq.com')
    {
        Console::output(Console::renderColoredString("%UCreating admin user%n"));

        $admin = User::findOne(['username' => 'admin']);
        if (empty($admin)) {
            $admin = new User([
                'username' => 'admin', 'email' => $email
            ]);
            $admin->setPassword($password);

            if ($admin->save()) {
                Console::output(Console::renderColoredString("%gAdmin successfully created"));
            }
        } else {
            $updatePassword = Console::input(
                Console::renderColoredString("%YAdmin user already exists! Do you want to update password? [No/yes]")
            );

            if ($updatePassword === 'yes') {
                $admin->setPassword($password);
                $admin->save();
                Console::output(Console::renderColoredString("%gPassword successfully updated"));
            }
        }

        if ($admin->hasErrors()) {
            $errors = implode(',', $admin->getErrors()) ;
            Console::output(Console::renderColoredString("%r Error saving: {$errors}"));
        }
    }
}