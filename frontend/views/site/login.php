<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
    <div class="login-logo"><?= Html::encode($this->title) ?></div>

    <div class="login-box-body">
        <div class="login-box-msg">Please fill out the following fields to login:</div>
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?=
        $form->field($model, 'username', ['options' => [
                'tag' => 'div', 'class' => 'form-group has-feedback',
                'template' => '{input}<span class="glyphicon glyphicon-envelope"></span>
            {error}{hint}'
            ]
        ])->textInput()
        ?>

        <?= $form->field($model, 'password')->passwordInput() ?>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                </div>
            </div>
            <div class="col-xs-5">

            </div>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>

    </div>

</div>
