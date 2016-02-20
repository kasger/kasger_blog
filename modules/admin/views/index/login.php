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
    
    <div class="top-content">
       
       <div class="inner-bg">
             <div class="container">
                   <div class="row">
                   <?php Html::beginTag("div",['class' => "col-sm-8 col-sm-offset-2 text"]); ?>
                         <h1><strong>Bootstrap</strong> Login Form</h1>
                            <div class="description">
                            	<p>
	                            	This is a free responsive login form made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                            	</p>
                            </div>           
                   <?php Html::endTag("div"); ?>
                   </div>
                   
                   <div class="row">
                    <?php Html::beginTag("div",['class'=>'col-sm-6 col-sm-offset-3 form-box']); ?>
                    		<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                        
                    <?php Html::endTag("div"); ?>
                   </div>
             </div>
       </div>
       
    </div>

    <?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>