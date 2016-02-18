<?php

 use yii\helpers\Html;
 use yii\bootstrap\Nav;
 use yii\bootstrap\NavBar;
 use app\assets\AdminAsset;
 
 $this->title = "My First Yii View";
 AdminAsset::register($this);
?>

<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?= Html::csrfMetaTags(); ?>
<title><?= Html::encode($this->title); ?></title>
<?php $this->head(); ?>
</head>

<body>
    <?php $this->beginBody(); ?>
    
        <?php 

        Html::beginTag('div',['id'=>'wrapper']); 
        NavBar::begin([
             'brandLabel' => 'Blog-Admin',
             'brandUrl' => Yii::$app->homeUrl,
             'options' => [
                  'class' => 'navbar navbar-inverse navbar-fixed-top',
             ],
        ]);

        echo Nav::widget([
             'options' => ['class' => 'nav navbar-right top-nav'],
             'items' => [
                 ['label' => 'Home', 'url' => [Yii::$app->homeUrl]],
                 [
                   'label' => 'User', 
                   'items' => [
                     ['label' => 'status', 'url' => [Yii::$app->homeUrl]],
                     ['label' => 'logout', 'url' => [Yii::$app->homeUrl]] 
                   ],
                 ]
             ]
        ]);
        
        Html::beginTag('div',['class'=>'collapse navbar-collapse navbar-ex1-collapse']);       
        echo Nav::widget([
            'options' => ['class' => 'nav navbar-nav side-nav'],
            'items' => [
                 ['label'=>'Menu1','url'=>'#'],
                 ['label'=>'Menu2','url'=>'#']
            ]
        ]);
        

        Html::endTag('div');
        NavBar::end(); 
        
        ?>

	    <?= $content ?>

        <?php Html::endTag('div') ?>

    	<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>