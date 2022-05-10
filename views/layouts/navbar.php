<?php

use yii\bootstrap4\Nav;
use yii\bootstrap4\Html;
use yii\bootstrap4\NavBar;
use webvimark\modules\UserManagement\UserManagementModule;
?>

<?php NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
    ],
]); ?>

<?= Nav::widget([
    'options' => ['class' => 'navbar-nav'],
    'encodeLabels'=>false,
    'items' => [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
        [
            'label' => 'Backend routes',
            'items' => UserManagementModule::menuItems()
        ],
        [
            'label' => 'Frontend routes',
            'items' => [
                ['label' => 'Login', 'url' => ['/user-management/auth/login']],
                ['label' => 'Logout', 'url' => ['/user-management/auth/logout']],
                ['label' => 'Registration', 'url' => ['/user-management/auth/registration']],
                ['label' => 'Change own password', 'url' => ['/user-management/auth/change-own-password']],
                ['label' => 'Password recovery', 'url' => ['/user-management/auth/password-recovery']],
                ['label' => 'E-mail confirmation', 'url' => ['/user-management/auth/confirm-email']],
            ],
        ],

        Yii::$app->user->isGuest ? (['label' => 'Login', 'url' => ['/site/login']]
        ) : ('<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>'
        )
    ],
]); ?>

<?php
NavBar::end();
