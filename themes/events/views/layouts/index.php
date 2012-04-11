 <?php $this->beginContent('//layouts/main'); ?>

        <div id="sidebar_left" class="sidebar">
            <div id="login">
                <?php echo CHtml::link('Đăng nhập',array('site/login'),array('class'=>'as_button')) ; ?>
                <?php echo CHtml::link('Đăng ký',array('/user/register'),array('class'=>'as_button')) ; ?>
            </div>
			<?php $this->widget("application.components.NewMember");?>
            
            <?php $this->widget("application.components.ActionEvent");?>
            <?php $this->widget("application.components.EventCensor");?>
        </div>
        <div id="primary">
            <div id="slider"></div>
            <div id="primary_content">
                <?php $this->widget("application.components.Top_Event");?>
                <?php $this->widget("application.components.Event_now");?>
            </div>
            <div id="sidebar_right" class="sidebar">
                <?php $this->widget("application.components.EventNews");?>
                <?php $this->widget("application.components.Event_quantam");?>
            </div>
        </div>
    
    
<?php $this->endContent(); ?>