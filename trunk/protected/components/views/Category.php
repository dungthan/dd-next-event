<div id="user_panel" class="col_sidebar">
    <span class="col_title">Danh mục sự kiện</span>
    <ul>
    <?php
    foreach ($model as $type):
        $sql = "SELECT COUNT(*) FROM tbl_event WHERE typeevent_id ='".$type['id']."'AND censor = 1";
        $count = Yii::app()->db->createCommand($sql)->queryScalar();
        echo "<li>".CHtml::link($type['name'],array('event/category','type'=>$type['name']),array('class'=>'is_link'))." (".$count.")</li>";
    endforeach ;
    ?>
    </ul>
</div>