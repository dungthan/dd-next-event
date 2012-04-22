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

<?php 

print('<div id="latest_event">');
if($model->id== Yii::app()->user->id) {
    print('<span class="col_title">Yêu cầu kết bạn : '.$model->userprofiles->display_name.'</span>');
    
     if ($CountRequest!= 0) {
        //echo "<h1>Danh sach nguoi gui yeu cau ket ban</h1>";
        echo $this->renderPartial('_friend',array('id'=>$model->id,'model'=>$model));  
 }else {echo "Chưa Có Yêu Cầu Kết Bạn";}
}
 print('</div>');
 
 print('<div id="latest_event">
            <span class="col_title">   Bạn bè : '.$model->userprofiles->display_name.' </span>');
 if ($CountRequest1!= 0 ||$CountRequest2!= 0 ) {
    echo $this->renderPartial('_friendship',array('id'=>$model->id,'model'=>$model));
 }
 print('</div>');
  ?>

