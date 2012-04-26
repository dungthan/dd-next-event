<div id="new_mem" class="col_sidebar">
    <span class="col_title">Bạn bè</span>
    <ul class="list_mem ">
        <?php
        if (!isset($_GET['id'])) {
            $YourId = Yii::app()->user->id;
        }else
            $YourId = $_GET['id'];
        $UserId2 = $id;
        $model1 = Friend::model()->findAll();
        if ($UserId2 == $YourId) {
    $Ids = Friend::model()->findAllByAttributes(array('user2_id' => $UserId2, 'request' => '1'));
            foreach ($Ids as $Id) {
                echo '<li>';
                $name1 = Userprofiles::model()->findByPk($Id['user1_id']);
                if ($name1->avatar == 'unknown') {
                    $link1 = CHtml::link('<img alt="' . $name1->display_name . '" src="' . Yii::app()->request->baseUrl . '/avatar/noavatar.gif" width = 35px height = 34px/>', array('/me/me', 'id' => $name1->user_id), array('class' => 'is_link'));
                    echo $link1;
                } else {
                    $link1 = CHtml::link('<img alt="' . $name1->display_name . '" src="' . Yii::app()->request->baseUrl . '/avatar/' . $name1->avatar . '" width = 35px height = 34px/>', array('/me/me', 'id' => $name1->user_id), array('class' => 'is_link'));
                    echo $link1;
                }
                echo '</li>';
            }

            $Ids1 = Friend::model()->findAllByAttributes(array('user1_id' => $UserId2, 'request' => '1'));
            foreach ($Ids1 as $Id1) {
                echo '<li>';
                $name2 = Userprofiles::model()->findByPk($Id1['user2_id']);
                if ($name2->avatar == 'unknown') {
                    $link2 = CHtml::link('<img alt="' . $name2->display_name . '" src="' . Yii::app()->request->baseUrl . '/avatar/noavatar.gif" width = 35px height = 34px/>', array('/me/me', 'id' => $name2->user_id), array('class' => 'is_link'));
                    echo $link2;
                } else {
                    $link2 = CHtml::link('<img alt="' . $name2->display_name . '" src="' . Yii::app()->request->baseUrl . '/avatar/' . $name2->avatar . '" width = 35px height = 34px/>', array('/me/me', 'id' => $name2->user_id), array('class' => 'is_link'));
                    echo $link2;
                }
                echo '</li>';
            }
        } else {
            $Ids = Friend::model()->findAllByAttributes(array('user2_id' => $UserId2, 'request' => '1'));
            foreach ($Ids as $Id) {
                echo '<li>';
                $name2 = Userprofiles::model()->findByPk($Id['user2_id']);
                if ($name2->avatar == 'unknown') {
                    $link2 = CHtml::link('<img alt="' . $name2->display_name . '" src="' . Yii::app()->request->baseUrl . '/avatar/noavatar.gif" width = 35px height = 34px/>', array('/me/me', 'id' => $name2->user_id), array('class' => 'is_link'));
                    echo $link2;
                } else {
                    $link2 = CHtml::link('<img alt="' . $name2->display_name . '" src="' . Yii::app()->request->baseUrl . '/avatar/' . $name2->avatar . '" width = 35px height = 34px/>', array('/me/me', 'id' => $name2->user_id), array('class' => 'is_link'));
                    echo $link2;
                }
                echo '</li>';
            }

            $Ids1 = Friend::model()->findAllByAttributes(array('user1_id' => $UserId2, 'request' => '1'));
            foreach ($Ids1 as $Id1) {
                echo '<li>';
                $name2 = Userprofiles::model()->findByPk($Id1['user2_id']);
                if ($name2->avatar == 'unknown') {
                    $link2 = CHtml::link('<img alt="' . $name2->display_name . '" src="' . Yii::app()->request->baseUrl . '/avatar/noavatar.gif" width = 35px height = 34px/>', array('/me/me', 'id' => $name2->user_id), array('class' => 'is_link'));
                    echo $link2;
                } else {
                    $link2 = CHtml::link('<img alt="' . $name2->display_name . '" src="' . Yii::app()->request->baseUrl . '/avatar/' . $name2->avatar . '" width = 35px height = 34px/>', array('/me/me', 'id' => $name2->user_id), array('class' => 'is_link'));
                    echo $link2;
                }
                echo '</li>';
            }
        }
        ?>

    </ul>
</div>
