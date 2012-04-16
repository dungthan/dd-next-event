      <?php $this->beginContent('//layouts/main'); ?>
        <div id="sidebar_left" class="sidebar">
            <div id="user_panel" class="col_sidebar">
                <span class="col_title">Thông tin Thành viên</span>
                <a href=""><img src="images/avatar/01.gif" /></a>
                <p><a class="is_link">Du Dan</a></p>
                <p>Email: <a href="" class="is_link">admin@dsoul.us</a></p>
                <ul>
                    <li><a href="" class="is_link">Thông tin cá nhân</a></li>
                    <li><a href="" class="is_link">Tường</a></li>
                    <li><a href="" class="is_link">Tin nhắn</a></li>
                    <li><a href="" class="is_link">Log Out</a></li>
                </ul>
            </div>
<?php $this->widget("application.components.EventNews");?>
<?php $this->widget("application.components.Event_quantam");?>
            
        </div>
        <div id="primary">
            <div id="primary_content">
                <span class="event_title">Hội thảo: Những gì đã qua D&D Group 2011-2012</span>
                <div class="event_content">
                <span class="col_title">Thông tin chung</span>
                    <p class="event_content_01">Tạo bởi: <a href="" class="is_link">Hội thảo</a></p>
                    <p class="event_content_01">Số lượt xem: 2,542</p>
                    <p class="event_content_01 clear">Loại sự kiện: <a href="" class="is_link">Du Dan</a></p>
                    <table>
                    <tr>
                        <td><img src="images/event_img.jpg" class="clear" /></td>
                        <td><p class="event_content_02">Thời gian: Bắt đầu 22/03/2012 <br />Kết thúc: 22/04/2012</p>
                        <p class="event_content_02">Địa điểm: Tầng 20 tòa nhà Grand Plaza, Trần Duy Hưng, Hà Nội</p>
                        <p class="event_content_02"><a href="" class="like">54</a><a href="" class="dislike">10</a></p>
                        </td>
                    </tr>
                    </table>
                </div>
                <div class="advertisment clear"></div>
                <div class="event_detail">
                <span class="col_title">Giới thiệu</span>
                    <p>So với các sản phẩm đi trước của Meizu, MX khác biệt với cách tân trong thiết kế. Bộ vỏ bằng nhựa trắng cứng cáp trong trẻo, màn hình 4 inch với độ phân giải 960 x 640 pixel cho hình ảnh mịn và góc nhìn tốt.<br /><br />

Meizu MX có cấu hình mạnh với chip xử lý hai nhân, tốc độ 1,4 GHz. Dù chạy Android 2.3, nhưng giao diện sản phẩm được tùy biến khi không có Menu. Các ứng dụng cài đặt nằm hết trên màn hình. Ngoài ra, máy cho phép gom phần mềm vào Folder và giữ để xóa giống như iPhone.<br /><br />

MX mỏng 10,3 mm, máy sử dụng khe cắm thẻ nhớ micro sim phía sau. Thiết bị có bộ nhớ 16 GB, RAM 1 GB, máy ảnh 8 megapixel cho phép mở khẩu f/2.2. Máy bán tại Việt Nam giá 9,99 triệu, trong khi phân phối tại Trung Quốc khoảng 470 USD.<br /><br />

So với các sản phẩm đi trước của Meizu, MX khác biệt với cách tân trong thiết kế. Bộ vỏ bằng nhựa trắng cứng cáp trong trẻo, màn hình 4 inch với độ phân giải 960 x 640 pixel cho hình ảnh mịn và góc nhìn tốt.<br /><br />

Meizu MX có cấu hình mạnh với chip xử lý hai nhân, tốc độ 1,4 GHz. Dù chạy Android 2.3, nhưng giao diện sản phẩm được tùy biến khi không có Menu. Các ứng dụng cài đặt nằm hết trên màn hình. Ngoài ra, máy cho phép gom phần mềm vào Folder và giữ để xóa giống như iPhone.<br /><br />

MX mỏng 10,3 mm, máy sử dụng khe cắm thẻ nhớ micro sim phía sau. Thiết bị có bộ nhớ 16 GB, RAM 1 GB, máy ảnh 8 megapixel cho phép mở khẩu f/2.2. Máy bán tại Việt Nam giá 9,99 triệu, trong khi phân phối tại Trung Quốc khoảng 470 USD.<br /></p>
                </div>
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
                
                <?php $this->widget("application.components.ActionEvent");?>
                
                <div id="hot_event" class="col_sidebar">
                <span class="col_title">Sự kiện được quan tâm</span>
                <ul class="row_event">
                <li class="clear">
                <a href=""><img src="images/avatar/01.gif" /></a>
                <p><a class="is_link">Hội thảo: Vấn đề SEO thời điểm hiện tại</a></p>
                <div class="clear"></div>
                </li>
                
                <li class="clear">
                <a href=""><img src="images/avatar/01.gif" /></a>
                <p><a class="is_link">Hội thảo: Vấn đề SEO thời điểm hiện tại</a></p>
                <div class="clear"></div>
                </li>
                
                <li class="clear">
                <a href=""><img src="images/avatar/01.gif" /></a>
                <p><a class="is_link">Hội thảo: Vấn đề SEO thời điểm hiện tại</a></p>
                <div class="clear"></div>
                </li>
                </ul>

                </div>
            </div>
        </div>

<?php $this->endContent(); ?>