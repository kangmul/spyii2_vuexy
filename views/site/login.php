<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Login | My Starter Apps';

?>

<!-- Section: Design Block -->
<section class="text-center ">
    <style>
        .cascading-right {
            margin-right: -50px;
        }

        @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }
        }

        body{
            font-size: 1rem !important;
        }

        .labeloptions{
            display: flex !important;
        }
    </style>

    <!-- Jumbotron -->
    <div class="container py-2 mx-auto mt-5">
        <div class="row g-0 align-items-center mt-5">
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
                    <div class="card-body p-3 shadow-5 text-center">
                        <h4 class="fw-bold mb-1">Please Login.</h4>
                        <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
                        <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'fieldConfig' => [
                                'template' => "{label}\n{input}\n{error}",
                                'labelOptions' => ['class' => 'col-lg-5 col-form-label mr-lg-3 labeloptions'],
                                'inputOptions' => ['class' => 'col-lg-3 form-control'],
                                'errorOptions' => ['class' => 'col-lg-7 invalid-feedback labeloptions'],
                            ],
                            'options' => [
                                'class' => 'mb-1'
                            ]
                        ]); ?>
            
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            
                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-12">{input}</div></div>',
                        ]) ?>
            
                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        ]) ?>
            
                        <div class="form-group">
                            <div>
                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-sm', 'name' => 'login-button']) ?>
                            </div>
                        </div>
            
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 mb-5 mb-lg-0 d-none d-sm-block">
                <img src="<?= Yii::getAlias('@web') ?>/themes/vuexy/img/login.png" class="w-80 rounded-4 shadow-4" alt="" height="600px" />
                <!-- <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4" alt="" height="600px" /> -->
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->


<script>
    $(document).ready(function(){
        $('footer').hide();
    })
</script>