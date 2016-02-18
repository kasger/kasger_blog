<?php

 use yii\helpers\Html;
 use yii\bootstrap\ActiveForm;
 use app\assets\LoginAsset;

 $this->title = 'blog-admin-login';
 $this->context->layout = false;
 
 LoginAsset::register($this);

?>

<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language; ?>">
<head>
<meta charset="<?= Yii::$app->charset; ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?= Html::csrfMetaTags(); ?>
<title><?= Html::encode($this->title); ?></title>
<?php $this->head(); ?>

<?php 

 $this->registerLinkTag([
     'rel' => 'shortcut icon',
     'href' => Yii::getAlias("@web/loginassets/ico/favicon.png")
 ]);
 
 $icos = ['144x144'=>'144','114x114'=>'114','72x72'=>'72'];
 
 foreach($icos as $size => $ico):
 $this->registerLinkTag([
     'rel' => 'apple-touch-icon-precomposed',
     'sizes' => $size,
     'href' => Yii::getAlias("@web/loginassets/ico/apple-touch-icon-".$ico."-precomposed.png")
 ]);
 endforeach;

 $this->registerLinkTag([
     'rel' => 'apple-touch-icon-precomposed',
     'href' => Yii::getAlias("@web/loginassets/ico/apple-touch-icon-57-precomposed.png")
 ]);
?>

</head>

<body>
    <?php $this->beginBody(); ?>
    
    <?php 

     Html::beginTag("div",['class'=>"top-content"]); 
     Html::beginTag("div",['class'=>'inner-bg']);
     
     

     Html::endTag("div");
     Html::endTag("div"); 

    ?>

    <?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>