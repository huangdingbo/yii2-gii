<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $generators \yii\gii\Generator[] */
/* @var $content string */

$generators = Yii::$app->controller->module->generators;
$this->title = 'Welcome to Gii';
?>
<div class="default-index">
    <div class="page-header">
        <h1>欢迎使用代码生成器 <small>一个神奇的工具，可以为你写代码</small></h1>
    </div>

    <p class="lead">用以下代码生成器开始有趣的工作:</p>

    <div class="row">
        <?php foreach ($generators as $id => $generator): ?>
        <div class="generator col-lg-4">
            <h3><?= Html::encode($generator->getName()) ?></h3>
            <p><?= $generator->getDescription() ?></p>
            <p><?= Html::a('开始 &raquo;', ['default/view', 'id' => $id], ['class' => 'btn btn-default']) ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <p><a class="btn btn-success" href="http://www.yiiframework.com/extensions/?tag=gii">获取更多的官方生成器</a></p>

</div>
