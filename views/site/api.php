<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'API';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about lead">
    <h1><?= Html::encode($this->title) ?></h1>



    <p>
        Запросы нужно отправлять по адресу:<br>
        <code>site_name/web/api/index</code>
    </p>

    <p>Отправлять нужно json следующего формата:</p>
    <p>
        Для вставки<br>
        <b>Post</b><br>
        <code>&lt;do='insert', name='Max', score=100, data='some data'&gt;</code>
    </p><br>

    <p>
        Для удаления записи из базы<br>
        <b>Post</b><br>
        <code>&lt;do='delete', id=2&gt;</code>
    </p><br>

    <p>
        Для получения топ N игроков<br>
        <b>Get</b><br>
        <code>site_name/web/api/index?count=1</code><br>
        Вернет<br>
        <?php
            echo '<pre>';
            echo '[<br>';
            echo '  {id=1, date=\'2018-05-03 02:20:38\', name=\'Ubivator666\', score=300, info=\'some data\'},<br>';
            echo '  {id=1, date=\'2018-05-03 02:23:23\', name=\'Lolko\', score=200, info=\'some data\'},<br>';
            echo '  {id=1, date=\'2018-05-03 02:27:44\', name=\'Max\', score=100, info=\'some data\'}<br>';
            echo ']';
            echo '</pre>';
        ?>
    </p><br>
</div>
