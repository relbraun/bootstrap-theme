<?php
/* @var $this Controller */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="<?php echo Yii::app()->theme->baseUrl . "/js/jquery.js"; ?>"></script>

      <!-- Bootstrap -->
      <link href="<?php echo Yii::app()->theme->baseUrl . "/css/bootstrap.min.css"; ?>" rel="stylesheet">
      <link href="<?php echo Yii::app()->theme->baseUrl . "/css/style.css"; ?>" rel="stylesheet">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <nav id="mainmenu" class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php Yii::app()->name; ?></a>
    </div>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'<span class="glyphicon glyphicon-home" aria-hidden="true"> Home', 'url'=>array('/site/index')),
				array('label'=>'<span class="glyphicon glyphicon-pushpin" aria-hidden="true"> About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'<span class="glyphicon glyphicon-envelope" aria-hidden="true"> Contact', 'url'=>array('/site/contact')),
				array('label'=>'<span class="glyphicon glyphicon-log-in" aria-hidden="true"> Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'<span class="glyphicon glyphicon-log-out" aria-hidden="true"> Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
                    'encodeLabel' => false,
                    'htmlOptions' => array(
                        'class' => 'nav navbar-nav',
                    ),
		)); ?>
          </div>
	</nav><!-- mainmenu -->
      <header id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
                <h1>Hello, world!</h1>
	</header><!-- header -->


    <?php echo $content; ?>

  </body>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo Yii::app()->theme->baseUrl . "/js/bootstrap.min.js"; ?>"></script>
</html>
