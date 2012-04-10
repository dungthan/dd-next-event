<div id="latest_event">
                    <span class="col_title">Sự kiện sắp diễn ra</span>
					<?php foreach ($model as $row):?>
                    <div class="col_lastest_event clear">
                        <ul class="event_time">
							<?php $time = getdate(strtotime($row['start_time']));
								if ($time["hours"] < 10)
									$hour = "0".$time["hours"];
								if ($time["minutes"] < 10)
									$minute = "0".$time["minutes"];
								if ($time["mday"] < 10)
									$date = "0".$time["mday"];
								else
									$date = $time["mday"];
								$current = $hour . ":" . $minute;
								$month = $time["mon"];
							?>
                            <li class="event_time_time"><?php echo $current;?></li>
                            <li class="event_time_date"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/date/<?php echo $date;?>.gif" /></li>
                            <li class="event_time_month"><?php echo "Tháng $month";?></li>
                        </ul>
						<p><?php echo CHtml::link($row['name'], array('/event/view', 'id'=>$row['id']), array('class'=>'is_link event_title'));?></p>
                        <p><?php echo $row['place'];?></p>
						<p><?php echo CHtml::link($row->createUser->username , array('/userprofiles/view', 'id'=>$row['create_user_id']), array('class'=>'is_link is_creator'));?>  |  <?php echo $row->typeevent->name;?>  |  <?php echo $row['view']." lượt xem";?></p>
                    </div>
					<?php endforeach;?>
                </div>