<?php

/**
 * @author MrDan
 * @copyright 2012
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <meta name="author" content="MrDan" />
    <link rel="Shortcut icon" type="image/x-icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/e-icon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/css-buttons.css" />   
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style4.css" />
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.easing.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/script.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryslide.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<!-- Header -->
<div id="header">
<div class="fixed clear">
    <div id="logo" title="D&D PHP Group"></div>
    <div id="icons">
        <ul>
            <li>
            <?php $home = '<img src="'.Yii::app()->theme->baseUrl.'/images/icons/home.png" />' ?>
            <?php echo CHtml::link($home,array('site/index')) ;?>
            </li>
            <li>
            <?php if(!Yii::app()->user->isGuest):
                 $profile ='<img src="'.Yii::app()->theme->baseUrl.'/images/icons/profile.png" />'; ?>
            <?php echo CHtml::link($profile,array('me/me','id'=>Yii::app()->user->id)) ;
                endif;
            ?>
            </li>
        </ul>
    </div>
    <div id="search">
        <?php $this->widget("application.components.SearchEvent");?>
    </div>
    
    <?php if(!Yii::app()->user->isGuest):?>
    <div id="post">
        <?php echo CHtml::link('Đăng sự kiện',array('event/create')) ;?>
    </div>
	<?php endif ;?>
</div>

</div>

<!-- Content -->
<div id="content">
    <div id="main_content" class="fixed">
	
       	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
    </div>
    <p class="clear"></p>
</div>


<!-- Footer -->
<div id="footer">
    <div id="footer_content" class="fixed">
    <div class="col_footer">
        <span>Company</span>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Products</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </div>
    
    <div class="col_footer">
        <span>Company</span>
        <p>Find us with these sites:</p>
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/social.png" />
    </div>
    
    <div class="col_footer">
        <span>Location</span>
        <p>144 Xuan Thuy Str<br />
        Cau Giay, Ha Noi</p>
    </div>
    
    </div>
    <div class="clear"></div>
    <div id="copyright"><p>Allright Reserve @ D&D Group 2012</p></div>
</div>
</body>
</html>