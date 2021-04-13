<?php

namespace tests\unit\models;

use app\models\GameForm;
use yii\mail\MessageInterface;

class GameFormTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    public $tester;

    public function testNumber()
    {
        $model = new GameForm();

        $model->attributes = [
            'number' => 100,
        ];

        $model->validateNumber('number', $model->attributes);
        expect_not($model->hasErrors());
        
        $model->attributes = [
            'number' => "abc",
        ];

        $model->validateNumber('number', $model->attributes);
        expect_that($model->hasErrors());
    }
}
