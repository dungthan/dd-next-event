      <?php $this->beginContent('//layouts/main'); ?>
        <div id="sidebar_left" class="sidebar">
            <?php $this->widget("application.components.Category");?>
            <?php $this->widget("application.components.EventNews");?>
            
            
        </div>
        <div id="primary">
            <div id="primary_content">
                <?php echo $content; ?>
            </div>
            <div id="sidebar_right" class="sidebar">
                <div id="search_event" class="col_sidebar">
                <span class="col_title">Tìm kiếm</span>
                    <label for="name">Tên:</label>
                    <input type="text" placeholder="Name events..." size="30" />
                    <label for="name">Time:</label>
                    <input type="text" placeholder="time events..." size="30" />
                    <label for="name">Category:</label>
                    <select>
                        <option value="">Category #1</option>
                        <option value="">Category #1</option>
                        <option value="">Category #1</option>
                        <option value="">Category #1</option>
                    </select>
                    <br /><br />
                    <a href="" class="as_button">Tìm kiếm</a>
                </div>
                
                <?php $this->widget("application.components.NewMember");?>
                <?php $this->widget("application.components.Event_quantam");?>
                <?php $this->widget("application.components.ActionEvent");?>
                
            </div>
        </div>

<?php $this->endContent(); ?>