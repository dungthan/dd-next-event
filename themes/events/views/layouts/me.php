      <?php $this->beginContent('//layouts/main'); ?>
        <div id="sidebar_left" class="sidebar">
            <?php $this->widget("application.components.Profiles");?>
            <?php $this->widget("application.components.EventNews");?>
            
            
        </div>
        <div id="primary">
            <div id="primary_content">
                <?php echo $content; ?>
            </div>
            <div id="sidebar_right" class="sidebar">
                <div id="search_event" class="col_sidebar">
                <span class="col_title">Tìm kiếm</span>
                <?php $this->widget("application.components.SearchFriend");?>
                </div>
                <?php $this->widget("application.components.AddFriend");?>
                <?php $this->widget("application.components.NewMember");?>
                <?php $this->widget("application.components.Event_quantam");?>
                <?php $this->widget("application.components.ActionEvent");?>
                
            </div>
        </div>

<?php $this->endContent(); ?>