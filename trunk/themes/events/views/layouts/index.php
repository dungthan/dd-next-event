 <?php $this->beginContent('//layouts/main'); ?>

        <div id="sidebar_left" class="sidebar">
            <div id="login">
                <?php echo CHtml::link('Đăng nhập',array('site/login'),array('class'=>'as_button')) ; ?>
                <?php echo CHtml::link('Đăng ký',array('/user/register'),array('class'=>'as_button')) ; ?>
            </div>
            
            <div id="new_mem" class="col_sidebar">
                <span class="col_title">Thành viên mới nhất</span>
                <ul class="list_mem">
                    <li><a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a></li>
                    <li><a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/02.gif" /></a></li>
                    <li><a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/03.gif" /></a></li>
                    <li><a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/03.gif" /></a></li>
                    
                    <li><a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/03.gif" /></a></li>
                    <li><a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/03.gif" /></a></li>
                    <li><a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/02.gif" /></a></li>
                    <li><a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a></li>
                </ul>
            </div>
            
            <div id="active_event" class="col_sidebar">
                <span class="col_title">Hoạt động vừa diễn ra</span>
                <ul>
                <li class="active_content clear">
                <a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a>
                <p><a class="is_link">Du Dan</a> has create an event <a class="is_link">Khi nao moi cuoi vo day??? :|</a></p>
                </li>
                
                <li class="active_content clear">
                <a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a>
                <p><a class="is_link">Du Dan</a> has create an event <a class="is_link">Khi nao moi cuoi vo day??? :|</a></p>
                </li>
                
                <li class="active_content clear">
                <a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a>
                <p><a class="is_link">Du Dan</a> has create an event <a class="is_link">Khi nao moi cuoi vo day??? :|</a></p>
                </li>
                </ul>

            </div>
            
            <div id="pending_event" class="col_sidebar">
                <span class="col_title">Sự kiện chờ xét duyệt</span>
                <ul class="row_event">
                <li class="clear">
                <a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a>
                <p><a class="is_link">Hội thảo: Vấn đề SEO thời điểm hiện tại</a></p>
                <div class="clear"></div>
                </li>
                
                <li class="clear">
                <a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a>
                <p><a class="is_link">Hội thảo: Vấn đề SEO thời điểm hiện tại</a></p>
                <div class="clear"></div>
                </li>
                
                <li class="clear">
                <a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a>
                <p><a class="is_link">Hội thảo: Vấn đề SEO thời điểm hiện tại</a></p>
                <div class="clear"></div>
                </li>
                </ul>

            </div>
        </div>
        <div id="primary">
            <div id="slider"></div>
            <div id="primary_content">
                <div id="top_event" class="clear">
                    <div class="col_top_event">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/top_event.jpg" />
                        <p><a class="is_link">WorlCup 2014 Brazil Welcome</a></p>
                        <p class="date">Ngày 21 tháng 6 năm 2014</p>
                    </div>
                    
                    <div class="col_top_event">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/top_event.jpg" />
                        <p><a class="is_link">WorlCup 2014 Brazil Welcome</a></p>
                        <p class="date">Ngày 21 tháng 6 năm 2014</p>
                    </div>
                    
                    <div class="col_top_event">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/top_event.jpg" />
                        <p><a class="is_link">WorlCup 2014 Brazil Welcome</a></p>
                        <p class="date">Ngày 21 tháng 6 năm 2014</p>
                    </div>
                </div>
                
                <div id="latest_event">
                    <span class="col_title">Sự kiện sắp diễn ra</span>
                    <div class="col_lastest_event clear">
                        <ul class="event_time">
                            <li class="event_time_time">20:00</li>
                            <li class="event_time_date"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/date/10.gif" /></li>
                            <li class="event_time_month">Tháng 4</li>
                        </ul>
                        <p><a class="is_link event_title">Hội thảo: Những việc làm hấp dẫn cho ITer 2012</a></p>
                        <p>Tầng 12 Grand Plaza - Trần Duy Hưng - Hà Nội</p>
                        <p><a class="is_link is_creator">Du Dan</a> | Hội thảo: Miễn phí!!! | 89 lượt xem</p>
                    </div>
                    
                    <div class="col_lastest_event clear">
                        <ul class="event_time">
                            <li class="event_time_time">20:00</li>
                            <li class="event_time_date"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/date/10.gif" /></li>
                            <li class="event_time_month">Tháng 4</li>
                        </ul>
                        <p><a class="is_link event_title">Hội thảo: Những việc làm hấp dẫn cho ITer 2012</a></p>
                        <p>Tầng 12 Grand Plaza - Trần Duy Hưng - Hà Nội</p>
                        <p><a class="is_link is_creator">Du Dan</a> | Hội thảo: Miễn phí!!! | 89 lượt xem</p>
                    </div>
                    
                    <div class="col_lastest_event clear">
                        <ul class="event_time">
                            <li class="event_time_time">20:00</li>
                            <li class="event_time_date"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/date/10.gif" /></li>
                            <li class="event_time_month">Tháng 4</li>
                        </ul>
                        <p><a class="is_link event_title">Hội thảo: Những việc làm hấp dẫn cho ITer 2012</a></p>
                        <p>Tầng 12 Grand Plaza - Trần Duy Hưng - Hà Nội</p>
                        <p><a class="is_link is_creator">Du Dan</a> | Hội thảo: Miễn phí!!! | 89 lượt xem</p>
                    </div>
                    
                    <div class="col_lastest_event clear">
                        <ul class="event_time">
                            <li class="event_time_time">20:00</li>
                            <li class="event_time_date"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/date/10.gif" /></li>
                            <li class="event_time_month">Tháng 4</li>
                        </ul>
                        <p><a class="is_link event_title">Hội thảo: Những việc làm hấp dẫn cho ITer 2012</a></p>
                        <p>Tầng 12 Grand Plaza - Trần Duy Hưng - Hà Nội</p>
                        <p><a class="is_link is_creator">Du Dan</a> | Hội thảo: Miễn phí!!! | 89 lượt xem</p>
                    </div>
                    
                    <div class="col_lastest_event clear">
                        <ul class="event_time">
                            <li class="event_time_time">20:00</li>
                            <li class="event_time_date"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/date/10.gif" /></li>
                            <li class="event_time_month">Tháng 4</li>
                        </ul>
                        <p><a class="is_link event_title">Hội thảo: Những việc làm hấp dẫn cho ITer 2012</a></p>
                        <p>Tầng 12 Grand Plaza - Trần Duy Hưng - Hà Nội</p>
                        <p><a class="is_link is_creator">Du Dan</a> | Hội thảo: Miễn phí!!! | 89 lượt xem</p>
                    </div>
                
                </div>
            
            </div>
            <div id="sidebar_right" class="sidebar">
                <div id="new_event" class="col_sidebar">
                <span class="col_title">Sự kiện mới</span>
                <ul class="row_event">
                <li class="clear">
                <a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a>
                <p><a class="is_link">Hội thảo: Vấn đề SEO thời điểm hiện tại</a></p>
                <div class="clear"></div>
                </li>
                
                <li class="clear">
                <a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a>
                <p><a class="is_link">Hội thảo: Vấn đề SEO thời điểm hiện tại</a></p>
                <div class="clear"></div>
                </li>
                
                <li class="clear">
                <a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a>
                <p><a class="is_link">Hội thảo: Vấn đề SEO thời điểm hiện tại</a></p>
                <div class="clear"></div>
                </li>
                </ul>

                </div>
                
                <div id="hot_event" class="col_sidebar">
                <span class="col_title">Sự kiện được quan tâm</span>
                <ul class="row_event">
                <li class="clear">
                <a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a>
                <p><a class="is_link">Hội thảo: Vấn đề SEO thời điểm hiện tại</a></p>
                <div class="clear"></div>
                </li>
                
                <li class="clear">
                <a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a>
                <p><a class="is_link">Hội thảo: Vấn đề SEO thời điểm hiện tại</a></p>
                <div class="clear"></div>
                </li>
                
                <li class="clear">
                <a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/avatar/01.gif" /></a>
                <p><a class="is_link">Hội thảo: Vấn đề SEO thời điểm hiện tại</a></p>
                <div class="clear"></div>
                </li>
                </ul>

                </div>
            </div>
        </div>
    
    
<?php $this->endContent(); ?>