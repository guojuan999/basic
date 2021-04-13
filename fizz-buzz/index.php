<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Fizz Buzz Game';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile("/css/fizzbuzz.css");
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us.
        Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'game-form']); ?>

            <?= $form->field($model, 'number')->textInput(['autofocus' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'game-button']) ?>
                <?= Html::resetButton('Reset', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
            
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
    <?php if (Yii::$app->session->hasFlash('gameFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for playing the game. Please check the result below.
        </div>

    <div class="row">
        <?php
            foreach ($results as $index => $value) {
        ?>
                <span class="col-sm-1 item"><?php echo $value; ?></span>
        <?php
            }
        ?>
    </div>
    <?php endif; ?>
</div>
