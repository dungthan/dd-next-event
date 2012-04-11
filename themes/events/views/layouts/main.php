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

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<!-- Header -->
<div id="header">
<div class="fixed clear">
    <div id="logo" title="D&D PHP Group"></div>
    <div id="icons">
        <ul>
            <li><a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/home.png" /></a></li>
            <li><a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/profile.png" /></a></li>
        </ul>
    </div>
    <div id="search">
        <input type="text" name="search" value="Search" size="50" />
    </div>
    <div id="post">
        <a href="">Đăng sự kiện</a>
    </div>
	
</div>
<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'User', 'url'=>array('/user/index')),
                array('label'=>'UserProfiles', 'url'=>array('/userprofiles/index')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>"Đăng ký", 'url'=>array('/user/register'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>"Tường", 'url'=>array('/me/me', 'id'=>Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>"Create Event", 'url'=>array('/event/create'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>"Total Event", 'url'=>array('/event/totalpost'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'bạn bè', 'url'=>array('friend/friend', 'id'=>Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>"Cấu hình", 'url'=>array('/security/security'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>"My Video", 'url'=>array('/video/video', 'id'=>Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>
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