<?php
$this->breadcrumbs=array(
	'Friends'=>array('index'),
	'Danh Sách Bạn',
);

$this->menu=array(
	array('label'=>'List Friend', 'url'=>array('index')),
	array('label'=>'Manage Friend', 'url'=>array('admin')),
);
?>

<?php $this->widget("application.components.SearchFriend");?>
<?php 
 if ($CountRequest!= 0) {
    echo "<h1>Danh sach nguoi gui yeu cau ket ban</h1>";
    echo $this->renderPartial('_friend',array('id'=>$model->id));  
 }else {echo "Bạn Chưa Có Yêu Cầu Kết Bạn";}
 if ($CountRequest1!= 0 ||$CountRequest2!= 0 ) {
    echo "<h1>Danh sach ban be</h1>";
    echo $this->renderPartial('_friendship',array('id'=>$model->id));
 } ?>

