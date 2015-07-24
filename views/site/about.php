<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
Yii::$app->layout='page_header';
echo Yii::$app->formatter->asDateTime(time(), 'short');
echo Yii::$app->formatter->asDateTime(time(), 'medium');
echo Yii::$app->formatter->asDateTime(time(), 'long');
echo Yii::$app->formatter->asDateTime(time(), 'full');
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@dixonsatit/agencyTheme/dist');
$this->registerJsFile($directoryAsset.'/js/cbpAnimatedHeader.min.js');
?>

<header style="background-image:url(<?=$directoryAsset.'/img/header-bg2.jpg'?>);">
    <div class="container">
        <div class="intro-text">

            <div class="intro-heading">About</div>
             <div class="intro-lead-in">Yii2 Learning</div>
        </div>
    </div>
</header>

<section class="page" id="about">
<div class="container">
<div class="site-about">
<h1><?= Html::encode($this->title) ?></h1>

<p>
This is the About page. You may modify the following file to customize its content:
</p>

<code><?= __FILE__ ?></code>
</div>

</div>
</section>
