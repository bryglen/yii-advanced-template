<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/style.css?v=110220120632'); ?>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<?php $this->renderPartial('//layouts/_header') ?>
<?php echo $content; ?>
<?php $this->renderPartial('//layouts/_footer') ?>
</body>
</html>