<?php
$this->breadcrumbs = array(
    'Users' => array('index'),
    $model->id,
);
?>
<!---Show message---->
<?php
Yii::app()->clientScript->registerScript(
        'myHideEffect', '$(".flash-success").animate({opacity: 3.0}, 3000).fadeOut("view");', CClientScript::POS_READY
);
?>

<?php if (Yii::app()->user->hasFlash('success')): ?>
    <div class="flash-success">
    <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>      
    <?php else :
        if (Yii::app()->user->hasFlash('error')): ?>
        <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('error'); ?>
        </div>  
        <?php
        else :
// check user login? Compare user , and whow button friend  , Yes or No ^^ mr.richdad
            if ($CountRequest == 0) {
                if (Yii::app()->user->id != $model->id and $CountRequest1 == 0 and $modelUser->block == 1) {
                    ?>
                <div class="buttons">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'friend-form',
                    'enableAjaxValidation' => false,
                        ));
                echo $form->hiddenField($Friends, 'user1_id', array('value' => Yii::app()->user->id));
                echo $form->hiddenField($Friends, 'user2_id', array('value' => $model->id));
                echo CHtml::submitButton($Friends->isNewRecord ? 'Kết Bạn' : 'Kết Bạn', array('class' => 'small blue button'));

                $this->endWidget();
                ?>
                </div>
                    <?php
                }
            }

        endif;
    endif;
    ?><!------END IF----->
<!--SHOW ---->
<?php
if (Yii::app()->user->id != $model->id) {
    if ($CountRequest != 0)
        echo "<h1>Đợi Xác Nhận</h1>";
}
if ($StatusFriend == 1)
    echo "<h1>Bạn Bè</h1>";
if ($StatusFriend == 2)
    echo "<h1>Bạn Thân<h1/>";
if ($StatusFriend == 3)
    echo "<h1>Gia Đình<h1/>";

$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'username',
        'password',
        'email',
        'block',
        'activation',
        'last_login_time',
        'create_time',
    ),
));
?>
<!--Load button Friend-->
<script type="text/javascript"src="http://code.jquery.com/jquery-latest.js"> </script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#buttons').click(function() {
            location.reload();
        });
    });     
</script>




