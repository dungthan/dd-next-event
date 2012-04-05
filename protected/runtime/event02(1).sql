-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2012 at 06:15 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `event02`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `event_id` int(11) NOT NULL,
  `create_time` datetime NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `user_id` (`user_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment_me`
--

CREATE TABLE IF NOT EXISTS `tbl_comment_me` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_user_id` int(11) NOT NULL,
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `statu_id` int(11) NOT NULL,
  `create_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `create_user_id` (`create_user_id`),
  KEY `statu_id` (`statu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_comment_me`
--

INSERT INTO `tbl_comment_me` (`id`, `create_user_id`, `content`, `statu_id`, `create_time`) VALUES
(1, 2, 'tks nhé demo03, sáng phải dậy sớm chuẩn bị đi học rùi. nghĩ mà chán ', 1, '0000-00-00 00:00:00'),
(2, 1, 'ui, sáng sớm dậy mệt quá. Lại bắt đầu 1 ngày mới thật là tốt nào', 1, '0000-00-00 00:00:00'),
(3, 1, 'học môn đấy chẳng hiểu gì , lên lớp ngồi chém gió tơi bời,', 2, '0000-00-00 00:00:00'),
(4, 4, 'duoc rui', 3, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeevent_id` int(3) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `number_guest` int(5) NOT NULL,
  `dimention` set('nhỏ','lớn') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `view` int(10) NOT NULL,
  `censor` tinyint(1) NOT NULL,
  `e_like` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `typeevent_id` (`typeevent_id`),
  KEY `create_user_id` (`create_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `typeevent_id`, `name`, `content`, `place`, `thumbnail`, `start_time`, `end_time`, `number_guest`, `dimention`, `create_time`, `update_time`, `create_user_id`, `view`, `censor`, `e_like`) VALUES
(34, 11, 'David Beckham và ManU tới Việt Nam trong "MU''s Asian Tour 2012"', '<div class="event-desc">\r\n						<div class="ctitle">Thông tin sự kiện<b> David Beckham và ManU tới Việt Nam trong "MU''s Asian Tour 2012"</b></div>\r\n						<p>\r\n	SUKIENHAY.com - Đây là thông tin chính thức được Câu lạc bộ Manchester \r\nUnited chia sẻ lên trang mạng xã hội Facebook lúc 22 giờ ngày 31/03 (giờ\r\n Việt Nam).</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Theo nguồn tin này, David Beckham cùng dàn sao của MU sẽ có chuyến du \r\nđấu tại Châu Á mùa hè năm nay "MU''s Asian tour".&nbsp; Trong chuyến du đấu \r\nnày, David Beckham và đội tuyển MU sẽ tới các nước là Nhật Bản, Hàn \r\nQuốc, Việt Nam, Brunei, Malaysia</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style="text-align: center;">\r\n	<img alt="Manchester united tới Việt Nam" src="http://sukienhay.com/images/stories/sukien/2012/t4/facebook-link.jpg" style="width: 530px; height: 299px;"></p>\r\n<p style="text-align: center;">\r\n	<em>Thông tin chuyến du đấu Châu Á 2012 được chia sẻ trên facebook của CLB Manchester United</em></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Khi thông tin vừa được chia sẻ lên fanpage của MU, đã rất có nhiều fan \r\nViệt bày tỏ sự vui sướng và háo hức được gặp gỡ thần tượng từ lâu của \r\nmình.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Một fan có nickname là <strong>Thắng MUFan</strong>&nbsp; bình luận "Không thể tin được, lần này phải gặp được Beckham bằng mọi giá, lần trước đã không gặp được a Park rồi..."</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>Sun'' lovely</strong> bình luận "Đây có lẽ là thỏa thuận giữa Beeline và MU, cám ơn ban tổ chức. Sung sướng&nbsp; quá các t.y ơi"</p>\r\n<p>\r\n	Và rất nhiều fan khác cũng bình luận và chia sẻ thông tin này.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Các fan từ nhiều nước khác như Nhật Bản, Hàn Quốc, Malaysia.... cũng rỏ\r\n ra rất phấn khích khi có cơ hội được tận mắt chứng kiến các thần tượng \r\ncủa mình.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Đường link chia sẻ trên facebook dẫn tới website chính thức của câu lạc\r\n bộ Manchester United thì đã có lịch khá cụ thể của chuyến du đấu mùa hè\r\n này. Theo lịch trình này, Việt Nam sẽ là nước thứ 2 mà MU và Beckham sẽ\r\n tới vào này 09/07 sau 2 ngày đội giao lưu tại Brunei từ ngày 07/07. Sau\r\n đó là Nhật Bản, Hàn Quốc, Malaysia.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style="text-align: center;">\r\n	<img alt="Manchester united tới Việt Nam" src="http://sukienhay.com/images/stories/sukien/2012/t4/mu-website.jpg" style="width: 530px; height: 310px;"></p>\r\n<p style="text-align: center;">\r\n	<em>Website chính thức của MU đăng tải lịch trình chuyến du đấu mùa hè 2012.</em></p>\r\n<p style="text-align: center;">\r\n	&nbsp;</p>\r\n<p>\r\n	Trên website của ManU trích dẫn lời&nbsp; Alex Ferguson "Chúng tôi sẽ mang \r\nđến cho MU''S ASIAN TOUR 2012 những điều bất ngờ thú vị và điều đó thật \r\ntuyệt vời"</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Nhiều người nghĩ rằng rất có thể Sir Alex sẽ mang theo chiếc cúp vô \r\nđịch Ngoại Hạng Anh mà đội của ông sẽ giành được trong mùa giải năm nay \r\ntrong chuyến du đấu này (Nếu như MU vô địch).</p>\r\n<p style="text-align: center;">\r\n	&nbsp;</p>\r\n<p>\r\n	Về phía David Beckham, anh chia sẻ trên facebook của mình rằng "Tôi cảm\r\n thấy vô cùng và phấn khích khi được cùng những người đồng đội cũ du đấu\r\n tại Châu Á, chắc chắn nó sẽ mang lại cho tôi nhiều kỷ niệm đẹp".</p>\r\n<p>\r\n	Đây có lẽ là lần cuối cùng cựu cầu thủ điển trai của MU tới Châu Á thi đấu trước khi anh giải nghệ.</p>\r\n<p>\r\n	<img alt="manchester unitde" src="http://sukienhay.com/images/stories/sukien/2012/t4/manu-facebook.jpg" style="width: 530px; height: 234px;"></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Liên đoàn bóng đá Việt Nam chưa có bình luận về thông tin này. Tuy \r\nnhiên phải thấy rằng, để đưa được MU về Việt Nam, LDBDVN đã phải nỗ lực \r\nrất nhiều và đây là thành quả vô cùng lớn của bóng đá nước nhà trong \r\nnhiều năm trở lại đây.&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Người ta hi vọng rằng sau MU sẽ còn nhiều CLB bóng đá lớn trên thế giới\r\n sẽ tới Việt Nam để người hâm mộ được tận mắt chứng kiến, giao lưu với \r\nthần tượng của mình, đây cũng là cơ hội lớn để nền bóng đá Việt Nam được\r\n tiếp cận, học hỏi và tạo đà phát triển ra tầm quốc tế.</p>\r\n<p style="text-align: center;">\r\n	&nbsp;</p>\r\n<p>\r\n	Người hâm mộ bóng đá Việt Nam liên tục đón nhận những tin vui kể từ \r\ngiữa năm 2011 khi mà những ngôi sao lớn của làng túc cầu thế giới có ý \r\nđịnh tới đất nước hình chữ S.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Tháng 6 năm 2011 Park Ji-Sung, Partrice Evra và những người bạn đã tới \r\nViệt nam, đem lại cho người hâm mộ những khoảnh khắc giao hữu không thể \r\nquên. Đây còn là&nbsp; sự kiện đánh dấu sự khởi đầu cho mối quan hệ giữa câu \r\nlạc bộ Manchester United và Liên đoàn bóng đá Việt Nam. Và mọi người \r\nhiểu rằng Beeline chính là cầu nối cho mối quan hệ tốt đẹp này.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Từ đầu năm 2012 đến nay, NHM Việt Nam đã 2 lần được chào đón những cựu \r\ndanh thủ nổi tiếng thế giới. Hồi tháng 1 vừa qua là danh thủ Cannavaro \r\ncủa ĐT Italia, gần đây là 2 ngôi sao một thời Denis Irwin và Gordon \r\nMcQueen của Man United cùng chiếc cúp vô địch giải Ngoại hạng Anh.</p>\r\n<p style="text-align: right;">\r\n	<em>* Nội dung được nhóm biên soạn thực hiện</em></p>			\r\n				</div>', 'Vi?t Nam', 'bb21fe64b218ce51e7d45a36.jpg', '2012-04-09 06:00:00', '2012-04-11 06:00:00', 10000, 'lớn', '2012-04-01 22:04:37', '2012-04-01 22:05:01', 1, 2, 0, 0),
(35, 3, '[Ưu đãi lớn] Bí quyết trình bày từ diễn giả số 1 - Quách Tuấn Khanh', '<div class="event-desc">\r\n						<div class="ctitle">Thông tin sự kiện<b> [Ưu đãi lớn] Bí quyết trình bày từ diễn giả số 1 - Quách Tuấn Khanh</b></div>\r\n						<div class="deal_cont">\r\n	<div class="deal_cont_main">\r\n		<div class="deal_cont_main_left" id="leftcol">\r\n			<p>\r\n				<span style="font-size: small;"><img src="http://datve.sukienhay.com/images/icon/question-icon.png" style="float: left;" width="150" border="0"> Bạn muốn thành công và tạo dựng hình ảnh tích cực cho bản thân?</span><br>\r\n				<span style="font-size: small;">Bạn muốn mọi người dâng hiến trái tim cho bạn?</span><br>\r\n				<span style="font-size: small;">Bạn muốn truyền cảm hứng để mọi người phát huy hết tiềm năng bản thân? </span><br>\r\n				<span style="font-size: small;">Bạn muốn chia sẻ những ước mơ tuyệt vời nhất của mình cho mọi người cùng bạn theo đuổi và biến ước mơ thành hiện thực?</span><br>\r\n				<span style="font-size: small;">Bạn muốn trở thành người có sức hút giữa chốn đông người?</span><br>\r\n				<span style="font-size: small;">Bạn muốn thăng tiến nhanh chóng trong mọi công việc hay sự nghiệp đang theo đuổi?</span></p>\r\n			<p>\r\n				&nbsp;</p>\r\n			<p>\r\n				<strong><span style="font-size: small;">Công ty cổ phần đào tạo Nói Là Làm&nbsp; và Mạng cộng đồng Sự Kiện Hay gửi đến bạn chương trình</span></strong></p>\r\n			<p>\r\n				&nbsp;</p>\r\n			<p style="text-align: center;">\r\n				<span style="font-size: small;"><span style="font-size: large; color: #ff6600;"><strong>"BÍ QUYẾT TRÌNH BÀY CỦA DIỄN GIẢ SỐ 1"</strong></span></span></p>\r\n			<p style="text-align: center;">\r\n				&nbsp;</p>\r\n			<p style="text-align: center;">\r\n				<span style="font-size: small;"><span style="font-size: small;"><img alt="Quách Tuấn Khanh" src="http://datve.sukienhay.com/images/su-kien/hoi-thao/t3/quach-tuan-khanh-2204/trinhbay-quachtuankhanh.jpg" style="border-width: 0pt; border-style: solid; height: 313px; width: 530px;"></span></span></p>\r\n			<p>\r\n				<br>\r\n				<strong><span style="font-size: small;"><span style="font-size: small;"><img alt="micro icon" src="http://datve.sukienhay.com/images/icon/mic-icon.png" style="float: left;" title="micro icon" width="30" border="0"></span> </span></strong></p>\r\n			<p>\r\n				<strong><span style="font-size: small;">&nbsp;<span style="font-size: medium;">Nội dung chương trình:</span></span></strong></p>\r\n			<p>\r\n				<br>\r\n				<strong><span style="font-size: small;"><span style="font-size: small;"><img src="http://datve.sukienhay.com/images/icon/tick-icon.png" width="30" border="0"></span> Phân tích tâm lý thính giả và theo thính giả suốt bài trình bày</span></strong><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Các yếu tố để phân tích thính giả</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Bảy nhu cầu trong tiềm thức của người nghe</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Những rào cản khiến khán giả không lắng nghe bạn</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Ứng dụng nhữn điều mà truyền hình dạy ta</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Các đặc điểm chung của người nghe ngày nay</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Những câu hỏi thường xuyên lởn vởn trong đầu người nghe</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Đừng quên mục tiêu của người nghe: WIIFM?</span></p>\r\n			<p>\r\n				<br>\r\n				<span style="font-size: small;"><strong><span style="font-size: small;"><span style="font-size: small;"><img src="http://datve.sukienhay.com/images/icon/tick-icon.png" width="30" border="0"></span></span></strong> <strong>Soạn một bài trình bày thuyết phục</strong></span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Sáu bước soạn một bài trình bày hiệu quả</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Phác thảo bài trình bày</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Nghiên cứu tài liệu cho bài trình bày</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Chọn kiểu cấu trúc bài trình bày thuyết phục</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Phát triển các chi tiết</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Sử dụng các kỹ thuật thuyết phục như câu chuyện, số liệu, sự kiện, lịch sử…</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Sử dụng câu trích dẫn thật “đắt”</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Kết thúc hứng khởi và thúc giục hành động</span></p>\r\n			<p>\r\n				<br>\r\n				<span style="font-size: small;"><strong><span style="font-size: small;"><span style="font-size: small;"><img src="http://datve.sukienhay.com/images/icon/tick-icon.png" width="30" border="0"></span></span></strong> <strong>Chuẩn bị tâm lý</strong></span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Kiểm soát nỗi sợ</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Làm gì với đôi tay?</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Di chuyển trên sân khấu</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Làm sao tạo hào hứng khi bạn không phải là ca sĩ?</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Làm sao để mọi người không chán mình?</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Là MỘT người nghe</span></p>\r\n			<p>\r\n				<br>\r\n				<span style="font-size: small;"><strong><span style="font-size: small;"><span style="font-size: small;"><img src="http://datve.sukienhay.com/images/icon/tick-icon.png" width="30" border="0"></span></span>&nbsp;&nbsp; Kỹ thuật trình bày</strong></span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Dùng bản đồ trí não để trình bày tự nhiên</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;30 giây đầu tiên ấn tượng</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Các câu hỏi “làm nóng” người nghe</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Xây dựng đối thoai với người nghe</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Phương pháp lôi cuốn người nghe ngay từ đầu</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Các kỹ thuật làm người nghe “nhập cuộc” suốt lúc trình bày</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Tám cách để nhận phản hồi từ người nghe</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Điệu nghệ trong phần Hỏi – Đáp</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Làm gì khi…không ai hỏi?</span></p>\r\n			<p>\r\n				<br>\r\n				<strong><span style="font-size: small;"><span style="font-size: small;"><span style="font-size: small;"><img src="http://datve.sukienhay.com/images/icon/tick-icon.png" width="30" border="0"></span></span> Tuyệt chiêu để tạo hưng phấn và truyền cảm hứng</span></strong><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Tạo hình ảnh vầ phong cách riêng</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Truyền thông khơi khát vọng</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Sử dụng đồ vật minh hoạ</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Các kỹ thuật diễn thuyết và nhấn mạnh quan điểm</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Truyền nhiệt thuyết và hào hứng vào bài giảng</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Thuyết phục và lôi kéo người nghe</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Đừng để người nghe ngồi yên: vận động</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Cách khơi gợi cho mọi người tham gia các hoạt động</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Âm nhac, hình ảnh và video clip tạo hiệu ứng trực quan</span></p>\r\n			<p>\r\n				<br>\r\n				<strong><span style="font-size: small;"><span style="font-size: small;"><span style="font-size: small;"><img src="http://datve.sukienhay.com/images/icon/tick-icon.png" width="30" border="0"></span></span> Điệu nghệ trong giọng nói và ngôn ngữ cơ thể</span></strong></p>\r\n			<p>\r\n				<br>\r\n				<strong><span style="font-size: small;">* Giọng nói</span></strong><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Làm chủ giọng nói</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Im lặng tạo uy lực</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Biến thể giọng nói: sử dụng cường độ, nhịp điệu, trường độ, tông điệu</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Hướng dẫn biểu hiện cảm xúc cho bài nói</span><br>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; •&nbsp;&nbsp; &nbsp;Hướng dẫn tăng giảm tông giọng</span></p>\r\n			<p>\r\n				<strong><span style="font-size: small;">&nbsp;* Ngôn ngữ cơ thể</span></strong></p>\r\n			<p>\r\n				<span style="font-size: small;"><span style="font-size: small;">&nbsp; &nbsp; &nbsp;&nbsp; •&nbsp;&nbsp; </span>Ngôn ngữ cơ thể là ngôn ngữ của tiềm thức</span><span style="font-size: small;"><span style="font-size: small;">&nbsp; </span></span></p>\r\n			<p>\r\n				<span style="font-size: small;"><span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • </span>Dùng ngôn ngữ cơ thể minh hoạ cho nội dung</span></p>\r\n			<p>\r\n				<span style="font-size: small;"><span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • </span>Tạo ấn tượng và nhấn mạnh bằng ngôn ngữ cơ thể</span></p>\r\n			<p>\r\n				<span style="font-size: small;"><span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • </span>Cứ để mọi thứ tự nhiên</span></p>\r\n			<p>\r\n				<span style="font-size: medium;"><strong><img alt="mouse-icon" src="http://datve.sukienhay.com/images/icon/mouse-icon.jpg" style="float: left;" title="mouse-icon" height="38" width="29" border="0"></strong></span></p>\r\n			<p>\r\n				&nbsp;</p>\r\n			<p>\r\n				<span style="font-size: medium;"><strong>&nbsp;Mục tiêu chương trình:</strong></span></p>\r\n			<p>\r\n				<strong>Sau 2 buổi huấn luyện kèm hướng dẫn bí quyết, người tham dự sẽ gặt hái được:</strong><span style="font-size: small;">&nbsp;</span></p>\r\n			<p>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • </span>Tự tin và chiến thắng nỗi sợ khi trình bày</p>\r\n			<p>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • </span>Biết chuẩn bị một bài trình bày có sức thuyết phục, tạo được ấn tượng cho người nghe</p>\r\n			<p>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • </span>Biết cách thu hút và lôi cuốn sự chú ý của người nghe trong lúc trình bày</p>\r\n			<p>\r\n				<span style="font-size: small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • </span>Lên kế hoạch rèn luyện những mặt còn yếu trong kỹ năng trình bày</p>\r\n			<p>\r\n				<strong>Thời gian: </strong>Từ 8h30 - 18h00, Chủ nhật ngày 22/04/2012</p>\r\n			<p>\r\n				<strong>Địa điểm:</strong> Hội trường Hoa Sen 6, Khách sạn Kim Liên, số 7 Đào Duy Anh, Đống Đa, Hà Nội</p>\r\n			<p>\r\n				<strong>Đối tượng tham dự:</strong> Lãnh đạo các cơ quan, người đi làm, sinh viên, học sinh</p>\r\n			<p>\r\n				&nbsp;</p>\r\n			<p>\r\n				Hãy nắm bắt các bí quyết từ <strong>diễn giả</strong> hàng đầu Việt Nam <strong>Quách Tuấn Khanh</strong>,\r\n để được xem những bài diễn thuyết hay nhất thế giới, và nắm bắt cách \r\nbiến mọi bài trình bày – diễn thuyết của mình thành thông điệp chinh \r\nphục lòng người.</p>\r\n			<p>\r\n				&nbsp;</p>\r\n			<p>\r\n				<span style="font-size: small;"><img alt="Quách Tuấn Khanh" src="http://datve.sukienhay.com/images/su-kien/hoi-thao/t3/quach-tuan-khanh-2204/quach_tuan_khanh-dien-gia.jpg" style="display: block; margin-left: auto; margin-right: auto; border-width: 0pt; border-style: solid; height: 368px; width: 550px;"></span></p>\r\n			<p>\r\n				&nbsp;</p>\r\n			<p style="text-align: center;">\r\n				<span style="font-size: medium;"><strong>GIÁ VÉ THAM DỰ: <span style="text-decoration: line-through;">700.000</span> VNĐ</strong></span></p>\r\n			<p style="text-align: center;">\r\n				<span style="font-size: medium;"><strong>DUY NHẤT, ĐĂNG KÝ TẠI SỰ KIỆN HAY GIÁ CHỈ: <span style="color: #ff0000;">280.000 VNĐ</span></strong></span></p>\r\n			<p style="text-align: center;">\r\n				<span style="font-size: medium;">QUÝ KHÁCH ĐƯỢC TẶNG THÊM 01 VÉ THAM DỰ HỘI THẢO INTERNET MARKETING&nbsp; TRỊ GIÁ 100.000 VNĐ</span></p>\r\n			<p style="text-align: center;">\r\n				<span style="font-size:16px;"><strong>Hotline: 0983 15 89 87/ 0948 11 44 71</strong></span></p>\r\n			<p style="text-align: center;">\r\n				&nbsp;<a href="http://datve.sukienhay.com/c/bi-quyet-lam-giau-tu-dien-gia-so-1-quach-tuan-khanh-14.html" target="_blank"><span style="font-size: small;"><strong><img alt="dangky-sukienhay" src="http://sukienhay.com/images/stories/logo/dangky-sukienhay.png" style="border: 0px none currentcolor;" title="dangky-sukienhay" height="75" width="233" border="0"></strong></span></a></p>\r\n			<p>\r\n				<span style="font-size: small;"><strong>&nbsp;Thông tin diễn giả:</strong></span></p>\r\n			<table border="0">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n							<span style="font-size: small;"><img src="http://datve.sukienhay.com/images/su-kien/hoi-thao/t3/quach-tuan-khanh-2204/quach-tuan-khanh.jpg" style="margin: 5px; width: 156px; height: 187px;" border="0"></span></td>\r\n						<td>\r\n							<span style="font-size: small;">&nbsp;</span>\r\n							<p>\r\n								<span style="font-size: small;">Anh là một doanh nhân thành \r\ncông, diễn giả chuyên nghiệp và là chuyên gia về lĩnh vực Phát triển con\r\n người và Phát triển doanh nghiệp. Các đề tài anh huấn luyện: \r\nLeadership, Management, Sale, Corporate culture, Team-building, Work \r\nskills, Personal growth</span></p>\r\n							<p>\r\n								&nbsp;</p>\r\n							<p>\r\n								<span style="font-size: small;">Hiện anh là Chủ tịch Power UP \r\nGroup tiên phong trong lĩnh vực phát triển con người, diễn giả của Công \r\nty d’Oz International (Singapore) &amp; là 1 trong 6 PEP (Personal \r\nEfficiency Program) facilitator đầu tiên được chứng nhận quốc tế ở khu \r\nvực Châu Á. Ngoài bằng MBA của Trường Quản trị Maastricht, Hà Lan, anh \r\ncòn thu gặt được nhiều kinh nghiệm đa ngành sau hơn 20 năm làm việc \r\ntrong các lĩnh vực báo chí, quản lý PR &amp; Marketing, Sale, điều hành \r\ndoanh nghiệp và giảng dạy Đại học.</span></p>\r\n							<p>\r\n								&nbsp;</p>\r\n							<p>\r\n								<span style="font-size: small;">Anh đã giúp đánh thức và truyền \r\ncảm hứng cho hơn 100.000 người mỗi năm bao gồm sinh viên, quản lý, người\r\n hành nghề chuyên nghiệp, giám đốc, chủ doanh nghiệp... phát huy tiềm \r\nnăng để có thể đạt những thành quả xuất sắc trong nhiều lĩnh vực.</span></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<p>\r\n				&nbsp;</p>\r\n			<p>\r\n				<span style="font-size: small;"><span style="font-size: medium;"><strong>Nhận xét của những người tham dự</strong></span></span></p>\r\n			<p>\r\n				&nbsp;</p>\r\n			<p>\r\n				<em><strong>Chị Nguyễn Thị Kim Khánh - Giám Đốc Sale - Marketing Viettel telecom:</strong></em></p>\r\n			<p>\r\n				"Tôi rất ấn tượng về chương trình và phong các giảng dạy của diễn giả - dí dỏm và vô cùng sâu sắc"</p>\r\n			<p>\r\n				&nbsp;</p>\r\n			<p>\r\n				<em><strong>Bà Nguyễn Thị Phùng Thu - Giám đốc nhân sự LG Vina Cosmetic:</strong></em></p>\r\n			<p>\r\n				" Các chương trình của anh Khanh đều cuốn hút, không chỉ giảng dạy \r\nkỹ năng hiệu quả mà còn truyền "lửa" cho học viên - giúp họ có nghị lực \r\nđể dám thay đổi"</p>\r\n			<p>\r\n				&nbsp;</p>\r\n			<p>\r\n				<em><strong>Bà Dương Ngọc Dung - Tổng giám đốc Tổng công ty May Nhà Bè:</strong></em></p>\r\n			<p>\r\n				" Anh Khanh đúng là bậc thầy về khích lệ tinh thần và huấn luyện đội\r\n ngũ - sau mỗi chương trình lại cho tôi những nhận thức mới và cảm hứng \r\nđể tiếp tục hun đúc hoài bão xây dựng nề nếp công ty, lan truyền ước mơ,\r\n tương lai của công ty cho nhân viên."</p>\r\n			<p>\r\n				&nbsp;</p>\r\n			<p>\r\n				<em><strong>Chị Tô Thị Lan Hương - Trưởng phòng HC - NS Canon Viet Nam</strong></em></p>\r\n			<p>\r\n				&nbsp;</p>\r\n			<p>\r\n				"Quả thật đây là một món quà rất lớn cho nhân viên cấp cao của Canon\r\n và của riêng em - một người có rất ít thời gian để đọc sách và thư \r\ngiãn. Em đã được tham dự nhiều khóa học từ khi vào Canon. Tuy nhiên,&nbsp; \r\nkhóa học của anh Quách Tuấn Khanh đã tạo cho em những ấn tượng sâu sắc."</p>\r\n			<p>\r\n				<em><span style="font-size: medium;">....Và hàng chục nghìn người đã thay đổi cuộc sống hoàn toàn nhờ diễn giả số 1 - Quách Tuấn Khanh</span></em></p>\r\n			<p>\r\n				&nbsp;</p>\r\n			<p style="text-align: center;">\r\n				<span style="font-size: medium;"><strong>GIÁ VÉ THAM DỰ: <span style="text-decoration: line-through;">700.000</span> VNĐ</strong></span></p>\r\n			<p style="text-align: center;">\r\n				<span style="font-size: medium;"><strong>DUY NHẤT, ĐĂNG KÝ TẠI SỰ KIỆN HAY GIÁ CHỈ: <span style="color: #ff0000;">280.000 VNĐ</span></strong></span></p>\r\n			<p style="text-align: center;">\r\n				<span style="font-size: medium;">QUÝ KHÁCH ĐƯỢC TẶNG THÊM 01 VÉ THAM DỰ HỘI THẢO INTERNET MARKETING&nbsp; TRỊ GIÁ 100.000 VNĐ</span></p>\r\n			<p style="text-align: center;">\r\n				<span style="font-size:16px;"><strong>Hotline: 0983 15 89 87/ 0948 11 44 71</strong></span></p>\r\n			<p style="color: #cc0000;" align="center">\r\n				<a href="http://datve.sukienhay.com/c/bi-quyet-lam-giau-tu-dien-gia-so-1-quach-tuan-khanh-14.html" target="_blank"><span style="font-size: small;"><strong><img alt="dangky-sukienhay" src="http://sukienhay.com/images/stories/logo/dangky-sukienhay.png" style="border: 0px none currentcolor;" title="dangky-sukienhay" height="75" width="233" border="0"></strong></span></a></p>\r\n			<p style="text-align: center;">\r\n				<span style="font-size: medium; color: #ff0000;"><strong>HÃY THAM DỰ ĐỂ ĐÓN NHẬN VÀ THAY ĐỔI HOÀN TOÀN CUỘC SỐNG CỦA BẠN</strong></span></p>\r\n			<p style="text-align: center;">\r\n				<span style="font-size: medium; color: #ff0000;"><strong><span style="font-size: small;"><img alt="alt" src="http://datve.sukienhay.com/images/su-kien/hoi-thao/t3/quach-tuan-khanh-2204/changelife.jpg" style="border-width: 0pt; border-style: solid; height: 305px; width: 530px;"></span></strong></span></p>\r\n			<p style="text-align: center;">\r\n				&nbsp;</p>\r\n			<p style="text-align: center;">\r\n				<span style="font-size: small;"><strong>MẠNG CỘNG ĐỒNG SỰ KIỆN HAY - NÂNG TẦM GIÁ TRỊ VIỆT</strong></span></p>\r\n			<p style="text-align: center;">\r\n				&nbsp;Địa chỉ : Tòa nhà SuKienHay, Số 20/176 Lê Trọng Tấn, Thanh Xuân, Hà Nội</p>\r\n			<p style="text-align: center;">\r\n				&nbsp;Điện thoại: 04. 3565 1974 – Fax: 04. 6276 4656 – Email: <a href="mailto:info@sukienhay.com" title="Mail hỗ trợ - giải đáp thắc mắc">info@sukienhay.com</a></p>\r\n		</div>\r\n	</div>\r\n</div>\r\n<p>&nbsp;\r\n	<br></p>			\r\n				</div>', 'Hà N?i', '4859e1ac0d2316d3884599c3.jpg', '2012-04-09 06:00:00', '2012-04-10 06:00:00', 10000, 'lớn', '2012-04-01 22:06:31', '2012-04-01 22:06:37', 1, 1, 0, 0),
(36, 13, 'Cơ hội nhận vé xem Liveshow Big Bang ngày 14/04 - Coca-Cola SoundFest 2012', '<div class="event-desc">\r\n						<div class="ctitle">Thông tin sự kiện<b> Cơ hội nhận vé xem Liveshow Big Bang ngày 14/04 - Coca-Cola SoundFest 2012</b></div>\r\n						<div class="dvNoidungtin">Theo kế hoạch Big Bang sẽ tham gia <strong>Coca-Cola SoundFest 2012 - Cực đỉnh âm nhạc quốc tế </strong>do nhãn hàng giải khát Coca Cola tổ chức vào ngày 14/4 tại SVĐ Phú Thọ.</div>\r\n<div class="dvNoidungtin"><span id="ctl00_content_CMSXemtin1_lblNoidung">\r\n<p style="text-align: center;"><img src="http://img2.ngoisao.vn:8001/news/2012/2/6/45/69132850506389120206musikBB012jpg1328524686.jpg" border="0"></p>\r\n<div class="dvNoidungtin" style="text-align: center;"><span id="ctl00_content_CMSXemtin1_lblNoidung"> Big Bang sẽ tham dự Đại nhạc hội do Coca Cola tổ chức vào ngày 14/4</span></div>\r\n<div class="dvNoidungtin">Được biết ngoài Big Bang sẽ còn có 3 nhóm nhạc khác nữa tới từ Châu Âu, hứa hẹn một bữa <span style="border-bottom-style: solid; border-bottom-width: 1px; white-space: nowrap; text-decoration: underline;">tiệc</span> âm nhạc hoành tráng và đầy hấp dẫn sẽ đón đợi các teens khu vực phía Nam.<br> <br>\r\n Hiện đang có thông tin sẽ có khoảng 6.000 vé của Đại nhạc hội&nbsp; “Cực \r\nđỉnh  âm nhạc” được phát ra, trong đó 3.000 vé mời và 3.000 vé còn lại \r\nđược  phát với hình thức cào trúng thưởng.<br> <br> Cụ thể khi mua sản \r\nphẩm của nước giải khát Coca-Cola trong khoảng thời  gian từ 6/2 – 31/3,\r\n teens sẽ có cơ hội cào trúng thưởng đổi vé tham dự  chương trình với \r\nkhu vực phạm vị khuyến mại diễn ra trong 25 tỉnh, thành  phố:</div>\r\n<div class="dvNoidungtin">\r\n<p><strong>1. Tên chương trình khuyến mại:</strong> <span style="color: #ff0000;"><span style="font-size: medium;"><strong>Coca-Cola SoundFest 2012 <strong>- Cực đỉnh âm nhạc quốc tế</strong></strong></span></span></p>\r\n<p><strong>2. Sản phẩm khuyến mại:</strong> Coca-Cola, Fanta  Cam, Fanta\r\n Dâu, Fanta Sarsi, Fanta Trái Cây, Sprite, loại chai nhựa dung  tích \r\n390ml của Công ty TNHH Nước Giải Khát Coca-Cola Việt Nam.</p>\r\n<p><strong>3. Thời gian khuyến mại:</strong> 06/02/2012 đến 31/03/2012</p>\r\n<dl><dt><strong>4. Địa bàn (phạm vi) khuyến mại: </strong>Chương trình được áp dụng tại các tỉnh, thành sau đây:</dt><dt><br></dt><dd>1. TP Hồ Chí Minh <span id="ctl00_content_CMSXemtin1_lblNoidung"><img src="http://hoahoctro.com.vn/upload/20120206/bigbangdenVN.jpg" alt="bigbangdenVN.jpg" style="float: right;" height="216" width="390" border="0"></span></dd><dd>2. Bình Phước</dd><dd>3. Cần Thơ</dd><dd>4. Tây Ninh</dd><dd>5. An Giang</dd><dd>6. Kiên Giang</dd><dd>7. Tiền Giang</dd><dd>8. Bình Thuận</dd><dd>9. Đồng Nai</dd><dd>10. Khánh Hòa</dd><dd>11.	Vũng Tàu</dd><dd>12.	Long An</dd><dd>13.	Đắk Lắk</dd><dd>14.	Lâm Đồng</dd><dd>15.	Vĩnh Long</dd><dd>16.	Cà Mau</dd><dd>17.	Sóc Trăng</dd><dd>18.	Đồng Tháp</dd><dd>19.	Đắk Nông</dd><dd>20.	Ninh Thuận</dd><dd>21.	Bình Dương</dd><dd>22.	Bến Tre</dd><dd>23.	Trà Vinh</dd><dd>24.	Hậu Giang</dd><dd>25.	Bạc Liêu</dd></dl>\r\n<p><strong>5. Hình thức khuyến mại:</strong> Thẻ cào may mắn xác định trúng thưởng (khách hàng cào mặt sau của nhãn chai)</p>\r\n<dl><dt><strong>6. Khách hàng của chương trình khuyến mại </strong><em>(đối tượng hưởng khuyến mại):</em> khách hàng mua sản phẩm và đáp ứng đủ các điều kiện sau đây:</dt><dd>- Là công dân Việt Nam từ 12 tuổi trở lên (xác định bằng CMND, sổ hộ khẩu hoặc giấy khai sinh);</dd><dd>- Cư trú ở các tỉnh thành nơi áp dụng chương trình (xác định bằng CMND hoặc sổ hộ khẩu);</dd><dd>- Có thẻ cào trúng thưởng hợp lệ do Công ty TNHH Nước Giải Khát Coca-Cola Việt Nam phát hành.</dd></dl>\r\n<p><strong>7.	Cơ cấu giải thưởng:</strong></p>\r\n<table border="1" cellpadding="1" cellspacing="1">\r\n<tbody>\r\n<tr>\r\n<th><span style="font-size: small;">STT</span></th> <th><span style="font-size: small;">Cơ cấu giải thưởng</span></th> <th><span style="font-size: small;">Nội dung giải thưởng</span></th> <th><span style="font-size: small;">Số giải</span></th>\r\n</tr>\r\n<tr>\r\n<td><span style="font-size: small;">1.</span></td>\r\n<td><span style="font-size: small;">Giải nước uống miễn phí</span></td>\r\n<td><span style="font-size: small;">Cào và trúng một chai nước giải khát có ga, loại chai nhựa dung tích 390ml</span></td>\r\n<td><span style="font-size: small;">1,000,002</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-size: small;">2.</span></td>\r\n<td><span style="color: #ff0000;"><strong><span style="font-size: small;">Giải vé xem ca nhạc</span></strong></span></td>\r\n<td><span style="font-size: small;">Cào và trúng một vé xem chương trình ca nhạc vào ngày 14/04/2012 tại Trường Đua Phú Thọ TP.HCM</span></td>\r\n<td><span style="font-size: small;">3.000</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>- Giá trị các giải thưởng nêu trên đã bao gồm thuế GTGT.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>8.</strong> Tất cả các giải thưởng đều không có giá  trị quy \r\nđổi thành tiền mặt, trường hợp chương trình ca nhạc vì lý do  khách quan\r\n không tổ chức được thì khách hàng trúng giải vé ca nhạc sẽ  nhận giải \r\nthưởng thay thế là sản phẩm nước giải khát của Coca-Cola</p>\r\n<p>&nbsp;</p>\r\n<dl><dt><strong>9. Nội dung chi tiết thể lệ chương trình khuyến mại:</strong></dt><dd>-\r\n Khách hàng khi mua các sản phẩm nước giải khát  Coca-Cola, Fanta Cam, \r\nFanta Dâu, Fanta Sarsi, Fanta Trái Cây, Sprite  loại chai nhựa dung tích\r\n 390ml sẽ có cơ hội cào trúng thưởng với phần  cào ở mặt sau nhãn của \r\nmỗi sản phẩm. </dd><dd>- Khi khách hàng cào mặt sau nhãn, thông tin hiện ra dưới lớp cào xác định có trúng thưởng hay không:</dd><dd><br></dd><dd> \r\n<ul><li>Đối với giải một chai nước có ga 390ml: <strong>“Bạn đã trúng một chai nước có ga 390ml”</strong></li></ul>\r\n<ul><li>Đối với giải vé xem ca nhạc: <strong>“Bạn đã trúng một vé xem ca nhạc”</strong></li><li>Trường hợp không trúng thưởng: <strong>“Hãy tiếp tục cào và trúng thưởng”</strong></li></ul>\r\n<p>&nbsp;</p>\r\n</dd><dd>- Thẻ cào trúng thưởng hợp lệ phải đáp ứng đủ các điều kiện sau: </dd><dd> \r\n<ul><li>Nhãn trúng thưởng phải được phát hành bởi Công ty TNHH  Nước Giải \r\nKhát Coca-Cola Việt Nam và là nhãn của một trong các sản phẩm  khuyến \r\nmại: Coca-Cola, Fanta Cam, Fanta Dâu, Fanta Sarsi, Fanta Trái  Cây, \r\nSprite 390ml; </li></ul>\r\n<p>&nbsp;</p>\r\n<ul><li>Nhãn trúng thưởng không bị trầy xướt, không có dấu hiệu cắt dán và không bị chắp vá;</li></ul>\r\n<p>&nbsp;</p>\r\n</dd><dd>- Trao thưởng: </dd><dd> \r\n<ul><li><strong>Đối với giải thưởng là nước ngọt có ga, loại chai nhựa dung tích 390ml của Công ty TNHH Nước Giải Khát Coca-Cola Việt Nam: </strong>khách\r\n  hàng trúng thưởng sẽ đổi giải tại bất kỳ điểm bán lẻ nào gần nhất \r\ntrong  khu vực/địa bàn của chương trình khuyến mãi. Thời hạn đổi giải \r\nthưởng  là từ ngày 06/02/2012 đến hết ngày 31/03/2012.</li></ul>\r\n<p>&nbsp;</p>\r\n<ul><li>\r\n<p><strong>Đối với giải thưởng là vé xem chương trình ca nhạc diễn ra vào ngày 14/04/2012 tại Trường Đua Phú Thọ TP.HCM:</strong></p>\r\n</li><li>\r\n<p>Khi cào được thẻ trúng thưởng giải thưởng vé xem ca nhạc, khách hàng sẽ liên hệ đến tổng đài hotline <strong>1900555584</strong>\r\n của chương trình (được in trên nhãn sản phẩm) để cung cấp thông tin cá \r\n nhân và để được hướng dẫn cách thức nhận giải thưởng thưởng. Hạn chót  \r\ntổng đài của chương trình nhận cuộc gọi của khách hàng trúng giải vé ca \r\n nhạc là 17:00 ngày 07/04/2012.</p>\r\n</li><li><br></li><li>\r\n<p>Thông tin tổng đài liên hệ của chương trình về việc nhận vé xem ca nhạc:</p>\r\n<p><strong>Công ty CP Quảng Cáo Trực Tiếp Bình Phương</strong></p>\r\n<p>Địa chỉ: 54-56 Hoa Đào, phường 2, quận Phú Nhuận, TP Hồ Chí Minh</p>\r\n<p>Hotline: 1900555584 (8h00 – 20h00, thứ hai – thứ bảy hàng tuần)</p>\r\n</li><li><br></li><li>\r\n<p><strong>Cách thức nhận giải thưởng:</strong></p>\r\n</li><li>\r\n<p><strong></strong>Vào ngày diễn ra chương trình ca nhạc 14/4/2012,  \r\nkhách hàng mang nhãn trúng giải đến nhận vé trực tiếp tại cổng Trường  \r\nĐua Phú Thọ TP.HCM;</p>\r\n</li><li>\r\n<ul><li>\r\n<p>Khi đến nhận vé, khách hàng mang theo:</p>\r\n<p>+ Thẻ cào trúng thưởng được phát hành bởi Công ty TNHH Nước Giải Khát Coca-Cola Việt Nam;</p>\r\n<p>+ Bản sao CMND hoặc hộ khẩu hoặc giấy khai sinh để xác nhận khách hàng đủ12 tuổi trở lên (không cần sao y bản chính);</p>\r\n</li><li>Trường hợp khách hàng chưa đủ 18 tuổi, khách hàng cần  mang theo \r\ngiấy xác nhận về việc cha, mẹ hoặc người giám hộ hợp pháp  đồng ý cho \r\ncon em mình tham dự chương trình (mẫu giấy xác nhận có thể  được tải về \r\ntừ website <a title="www.coca-cola.zing.vn" href="http://www.coca-cola.zing.vn/"> www.coca-cola.zing.vn</a> của chương trình). </li></ul>\r\n<p>Khách hàng nhận giải phải ký tên xác nhận đã nhận giải. Không chấp nhận việc nhận giải thay trong mọi trường hợp.</p>\r\n</li></ul>\r\n</dd></dl></div>\r\n<p style="text-align: center;"><br> Chương trình cào trúng thưởng vé xem\r\n Đại nhạc hội ngày 14/4 bắt đầu  từ ngày 6/2 – 31/3 đồng nghĩa với những\r\n cơ hội săn vé xem Big Bang bắt  đầu khởi tranh từ hôm nay</p>\r\nTuy thông tin về Đại nhạc hội mới được hé lộ nhưng các fans tại Việt  \r\nNam của Big Bang đã tỏ ra cực kì hào hứng bởi VIP đã chờ quá lâu để mong\r\n  ngóng Big Bang đặt chân tới Việt Nam trong khi đàn em 2NE1 hay SNSD,  \r\nSuper Junior, JYJ, Kim Hyun Joong, 2AM… cũng đều đã ghé thăm mảnh đất  \r\nhình chữ S.</span></div>			\r\n				</div>', 'Hà N?i', '7132a1fdd9ca4a8d276c7868.jpg', '2012-04-17 06:00:00', '2012-04-18 06:00:00', 10000, 'lớn', '2012-04-01 22:08:04', '2012-04-01 22:08:10', 1, 1, 0, 0);
INSERT INTO `tbl_event` (`id`, `typeevent_id`, `name`, `content`, `place`, `thumbnail`, `start_time`, `end_time`, `number_guest`, `dimention`, `create_time`, `update_time`, `create_user_id`, `view`, `censor`, `e_like`) VALUES
(37, 14, 'Khóa học "Tối ưu hóa PR và truyền thông trên mạng xã hội"', '<div class="event-desc">\r\n						<div class="ctitle">Thông tin sự kiện<b> Khóa học "Tối ưu hóa PR và truyền thông trên mạng xã hội"</b></div>\r\n						<div style="text-align: left;">\r\n	<div align="justify">\r\n		<strong><img alt="Social media - mạng xã hội" src="http://datve.sukienhay.com/images/su-kien/dao-tao/2012/t4/le-thuy-hanh/banner-socialmedia.jpg" style="display: block; margin-left: auto; margin-right: auto; border-width: 0pt; border-style: solid; width: 530px; height: 135px;" title="Social media - mạng xã hội"></strong></div>\r\n	<div align="justify">\r\n		&nbsp;</div>\r\n	<div align="justify">\r\n		<strong>Tại sao tham gia các khóa đào tạo này?</strong><br>\r\n		<br>\r\n		<strong><img src="http://datve.sukienhay.com/images/icon/tick-icon.png" height="25" width="25" border="0">Thứ nhất:</strong></div>\r\n	<div align="justify">\r\n		&nbsp;</div>\r\n	<div align="justify">\r\n		<em>Website dù có hay và có đẹp đến mấy, nếu không quảng cáo thì cũng chỉ như một ốc đảo bí mật trên mạng internet vô cùng rộng lớn.</em></div>\r\n	<div align="justify">\r\n		&nbsp;</div>\r\n	<div align="justify">\r\n		<em><em>Thương hiệu dù có nổi tiếng dưới mạng đến mấy, nếu không tham \r\ngia vào quảng cáo trực tuyến thì sớm muộn cũng bị các đối thủ khác vượt \r\nqua.</em></em></div>\r\n	<div align="justify">\r\n		&nbsp;</div>\r\n	<div align="justify">\r\n		<em><em>Quốc gia dù có to lớn đến mấy nếu không biết tận dụng Internet\r\n để quảng bá và phát triển thì chẳng khác nào tự bịt mắt mình trước ánh \r\nsáng của Thế kỷ XXI - kỷ nguyên của công nghệ thông tin và internet.</em></em></div>\r\n	<div align="justify">\r\n		&nbsp;</div>\r\n	<div align="justify">\r\n		<strong><strong><img src="http://datve.sukienhay.com/images/icon/tick-icon.png" height="25" width="25" border="0"></strong>Thứ hai:</strong></div>\r\n	Truyền thông số là một phương thức truyền thông mới dễ ứng dụng và độ \r\nlan tỏa rất cao nhưng không dễ nắm bắt. Đa số các doanh nghiệp hoạt động\r\n marketing theo phương thức truyền thông sẽ gặp rất nhiều bối rối và khó\r\n khăn. Nhiều công ty đang phân vân không biết hướng đi kỹ thuật số nào \r\nlà sự lựa chọn đúng đắn cho mình. Đặc biệt là khi đề cập tới tiến trình \r\nthay đổi, họ tự hỏi đâu là giai đoạn thích hợp để bắt đầu. Nhưng để \r\nthành công trong môi trường này, bạn cần phải sẵn sàng cho một biến \r\nchuyển lớn; những kinh nghiệm nhỏ sẽ không còn đủ đáp ứng. Bạn cần phải \r\nsẵn sàng cho một quan điểm chuyển đổi trong công việc tiếp thị của bạn, \r\nđó là chuyển đổi sang tiếp thị Số.<br>\r\n	&nbsp;<br>\r\n	Giúp những chủ doanh nghiệp, nhà quản lý,phụ trách kinh doanh và \r\nmarketing của doanh nghiệp có cái nhìn tổng quát về truyền thông mới, có\r\n những hướng đi đúng hướng, đầu tư hợp lý vào kế hoạch truyền thông, pr,\r\n quảng cáo trong thời đại số.<br>\r\n	&nbsp;<br>\r\n	<strong><strong><img src="http://datve.sukienhay.com/images/icon/tick-icon.png" height="25" width="25" border="0"></strong>Thứ ba,</strong><br>\r\n	Truyền thông số là một hình thức truyền thông vừa mang tính cá nhân, \r\nvừa mang tính cộng đồng. Một chương trình giảng dạy và chia sẻ của \r\nDigimarketing sẽ đáp ứng tất cả các đối tượng sau:<br>\r\n	<div align="justify">\r\n		&nbsp;</div>\r\n	<div align="justify">\r\n		&nbsp;&nbsp; •&nbsp;&nbsp; Các nhà lãnh đạo quản lý trong doanh nghiệp.</div>\r\n	<div align="justify">\r\n		&nbsp;&nbsp; •&nbsp;&nbsp; Các cán bộ ở vị trí quản lý kinh doanh, marketing, phát triển thị trường, quản lý website, kinh doanh trực tuyến…</div>\r\n	<div align="justify">\r\n		&nbsp;&nbsp; •&nbsp;&nbsp; Các cá nhân quan tâm và muốn hiểu về&nbsp; truyền thông mới.</div>\r\n	<div align="justify">\r\n		&nbsp;</div>\r\n	<div align="justify">\r\n		&nbsp;<strong><strong><img src="http://datve.sukienhay.com/images/icon/tick-icon.png" height="25" width="25" border="0"></strong>Thứ tư,</strong></div>\r\n	<div align="justify">\r\n		Công ty Tiếp thị số sẽ trực tiếp đến văn phòng và cơ quan của doanh \r\nnghiệp để giảng dạy và hướng dẫn. Nhờ đó, tránh cho các doanh nghiệp đi \r\nlại và tiêu tốn nhiều thời gian lãng phí.&nbsp;</div>\r\n	<div align="justify">\r\n		&nbsp;</div>\r\n	<div align="justify">\r\n		Với những kinh nghiệm đã có và tiếp tục đổi mới, Digimarketing hy vọng\r\n sẽ đóng góp tích cực vào sự phát triển của doanh nghiệp, đưa hình ảnh, \r\nthương hiệu doanh nghiệp đến với thị trường toàn cầu cũng như các khách \r\nhàng tiềm năng tại Việt nam.</div>\r\n	<div align="justify">\r\n		&nbsp;</div>\r\n	<div align="justify">\r\n		<strong><strong><img src="http://datve.sukienhay.com/images/icon/tick-icon.png" height="25" width="25" border="0"></strong>Thứ năm,</strong></div>\r\n</div>\r\n<div style="text-align: left;">\r\n	Giảng viên trực tiếp giảng dạy là chị Lê Thúy Hạnh, một người có nhiều \r\nnăm nghiên cứu và đào tạo trong lĩnh vực tiếp thị số. Chị được cộng đồng\r\n đánh giá là người phụ nữ tiên phong trong cách mạng truyền thông mới.</div>\r\n<div style="text-align: left;">\r\n	&nbsp;</div>\r\n<div style="text-align: left;">\r\n	<p style="text-align: center;">\r\n		<span style="font-size: medium;"><strong>GIÁ VÉ THAM DỰ: <span style="text-decoration: line-through;">1200.000</span> VNĐ</strong></span></p>\r\n	<p style="text-align: center;">\r\n		<span style="font-size: medium;"><strong>ĐĂNG KÝ TẠI SỰ KIỆN HAY GIÁ CHỈ: <span style="color: #ff0000;">400.000 VNĐ</span></strong></span></p>\r\n	<p style="text-align: center;">\r\n		<span style="font-size: medium;">QUÝ KHÁCH ĐƯỢC TẶNG THÊM 01 VÉ THAM DỰ HỘI THẢO INTERNET MARKETING </span></p>\r\n	<p style="text-align: center;">\r\n		<span style="font-size: medium;">TRỊ GIÁ 100.000 VNĐ</span></p>\r\n	<p style="text-align: center;">\r\n		<span style="font-size: medium;"><span style="font-size: 16px;"><strong>Hotline:&nbsp; 0948 11 44 71/<span style="font-size: medium;"><span style="font-size: 16px;"><strong>0983 15 89 87</strong></span></span></strong></span></span></p>\r\n	&nbsp;<a href="http://datve.sukienhay.com/c/khoa-hoc-toi-uu-hoa-truyen-thong-tren-mang-xa-hoi-15.html" target="_blank"><span style="font-size: small;"><strong><img alt="dangky-sukienhay" src="http://sukienhay.com/images/stories/logo/dangky-sukienhay.png" style="border: 0px none currentcolor; display: block; margin-left: auto; margin-right: auto;" title="dangky-sukienhay" height="75" width="233" border="0"></strong></span></a></div>\r\n<div style="text-align: left;">\r\n	&nbsp;</div>\r\n<div style="text-align: left;">\r\n	<strong>GIỚI THIỆU KHÓA HỌC“TỐI ƯU HÓA <acronym title="Google Page Ranking">PR</acronym> VÀ TRUYỀN THÔNG TRÊN MẠNG XÃ HỘI ”</strong></div>\r\n<div>\r\n	<br>\r\n	<img alt="Tối ưu hóa PR và truyền thông trên mạng xã hội Lê Thúy Hạnh" src="http://datve.sukienhay.com/images/su-kien/dao-tao/2012/t4/le-thuy-hanh/mang-xa-hoi-le-thuy-hanh.jpg" style="float: right; margin: 5px; width: 275px; height: 367px; border-width: 0pt; border-style: solid;" title="Tối ưu hóa PR và truyền thông trên mạng xã hội Lê Thúy Hạnh"></div>\r\n<div style="text-align: left;">\r\n	<span style="font-size: small;"><strong>Phần 1: Tổng quan về mạng xã hội</strong></span></div>\r\n<div style="text-align: left;">\r\n	<span style="font-size: small;">- Khái niệm và lịch sử hình thành</span><br>\r\n	<span style="font-size: small;">- Các việc nên làm và không nên làm trên mạng xã hội</span><br>\r\n	<span style="font-size: small;">- Các mạng xã hội quốc tế và Việt nam nên sử dụng.</span><br>\r\n	<br>\r\n	<span style="font-size: small;"><strong>Phần 2: Hướng dẫn đăng ký và sử dụng mạng xã hội</strong></span><br>\r\n	<span style="font-size: small;">- Các bước thiết lập mạng xã hội</span><br>\r\n	<span style="font-size: small;">- Các kỹ năng để có ngay hệ thống mạng xã hội trong vòng 30 phút.</span><br>\r\n	<span style="font-size: small;">- Xây dựng thành công 10 mạng xã hội nổi tiếng nhất. </span><br>\r\n	<br>\r\n	<span style="font-size: small;"><strong>Phần 3: Các kỹ năng trong tiếp thị, <acronym title="Google Page Ranking">PR</acronym> và xây dựng thương hiệu trên mạng xã hội</strong></span><br>\r\n	<span style="font-size: small;">- Kỹ năng tạo dấu ấn hình ảnh</span><br>\r\n	<span style="font-size: small;">- Kỹ năng gia tăng giá trị bản thân</span><br>\r\n	<span style="font-size: small;">- Kỹ năng xây dựng thương hiệu cá nhân trực tuyến</span><br>\r\n	<span style="font-size: small;">- Kỹ năng kết nối đối tác và bạn hàng</span><br>\r\n	<span style="font-size: small;">- Kỹ năng tiếp thị sản phẩm</span><br>\r\n	<span style="font-size: small;">- Kỹ năng bán hàng</span><br>\r\n	<span style="font-size: small;">- Kỹ năng viết “status”</span><br>\r\n	<span style="font-size: small;">- Kỹ năng upload và chia sẽ photos</span><br>\r\n	<span style="font-size: small;">- Kỹ năng tags</span><br>\r\n	<span style="font-size: small;">- Kỹ năng viết “Notes”</span>.....<br>\r\n	&nbsp;</div>\r\n<p>\r\n	<strong>Các cam kết khi tham gia khóa học</strong><br>\r\n	<br>\r\n	+ Được hỏi đáp và thực hành trực tiếp.<br>\r\n	+ Biết cách sử dụng các mạng xã hội nổi tiếng nhất cho <acronym title="Google Page Ranking">PR</acronym> và truyền thông số.<br>\r\n	+ Nắm được xu thế của truyền thông mới. Đối tượng tham dự:<br>\r\n	+ Sinh viên đam mê mạng xã hội, khám phá ứng dụng công nghệ thông tin,…<br>\r\n	+ Các trưởng phòng, giám đốc Marketing, <acronym title="Google Page Ranking">PR</acronym> và truyền thông các công ty.<br>\r\n	+ Các marketers, PR, kinh doanh của các công ty.<br>\r\n	+ Các sinh viên của các ngành tiếp thị, CNTT, truyền thông, báo chí, kinh doanh,...</p>\r\n<p>\r\n	<br>\r\n	<strong>Yêu cầu đối tượng tham dự</strong><br>\r\n	<br>\r\n	+ Có mong muốn không bị lạc hậu trong thời đại số, muốn chuyển từ các làm marketing truyền thông sang truyền thông mới.<br>\r\n	+ Có mong muốn khám phá sức mạnh của mạng xã hội cũng như ứng dụng cntt.<br>\r\n	+ Có mong muốn tự giải quyết những khó khăn về marketing của công ty mình.<br>\r\n	+ Có mong muốn xây dựng hình ảnh và thương hiệu cá nhân.<br>\r\n	+ Biết sử dụng máy tính văn phòng.</p>\r\n<p>\r\n	<br>\r\n	<strong>Thời gian học:</strong> thứ 7, ngày 14 tháng 04 năm 2012<br>\r\n	<strong>Thời lượng:</strong> Từ 8h00 - 16h00<br>\r\n	<strong>Địa điểm học:</strong> TT đào tạo Bachkhoa-Aptech - Số 250, đường Hoàng Quốc Việt, Cầu Giấy, Hà Nội</p>\r\n<p>\r\n	&nbsp;</p>\r\n<table style="width: 531px; height: 224px;" border="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style="font-size: medium;"><strong>Thông tin diễn giả:</strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					<img alt="Mrs Lê thúy Hạnh" src="http://datve.sukienhay.com/images/su-kien/dao-tao/2012/t4/le-thuy-hanh/lethuyhanh.jpg" style="float: left; margin: 5px; width: 164px; height: 180px;" title="Mrs Lê thúy Hạnh" border="0"><span style="font-size: small;"><strong>Ms. Lê Thúy Hạnh&nbsp;</strong> - Chuyên gia nghiên cứu về truyền thông mạng xã hội, CEO của Digimarketing JSC, nữ hoàng tên miền Việt Nam.</span></p>\r\n				<p>\r\n					&nbsp;</p>\r\n				<p>\r\n					<span style="font-size: small;">Lê Thúy Hạnh được biết đến như một \r\nnữ doanh nhân thành đạt với lĩnh vực tiếp thị số. Chị đã đưa công ty \r\nDigiMarketing trở thành một công ty chuyên nghiệp về tiếp thị số, truyền\r\n thông trực tuyến. Digimarketing là đơn vị cung cấp các giải pháp tiếp \r\nthị hiệu qủa cho các doanh nghiệp, cá nhân muốn mở rộng quảng bá thương \r\nhiệu trên các môi trường số hoá và internet. Chị đồng thời là tác giả \r\ncủa nhiều bài báo về tiếp thị số trên những tờ báo lớn như Nhịp cầu đầu \r\ntư, Thương hiệu và doanh nghiệp</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n<p style="text-align: center;">\r\n	<span style="font-size: medium;"><strong>GIÁ VÉ THAM DỰ: <span style="text-decoration: line-through;">1200.000</span> VNĐ</strong></span></p>\r\n<p style="text-align: center;">\r\n	<span style="font-size: medium;"><strong>ĐĂNG KÝ TẠI SỰ KIỆN HAY GIÁ CHỈ: <span style="color: #ff0000;">400.000 VNĐ</span></strong></span></p>\r\n<p style="text-align: center;">\r\n	<span style="font-size: medium;">QUÝ KHÁCH ĐƯỢC TẶNG THÊM 01 VÉ THAM DỰ HỘI THẢO INTERNET MARKETING </span></p>\r\n<p style="text-align: center;">\r\n	<span style="font-size: medium;">TRỊ GIÁ 100.000 VNĐ</span></p>\r\n<p style="text-align: center;">\r\n	<span style="font-size: medium;"><span style="font-size: 16px;"><strong>Hotline:&nbsp; 0948 11 44 71/<span style="font-size: medium;"><span style="font-size: 16px;"><strong>0983 15 89 87</strong></span></span></strong></span></span></p>\r\n<p style="text-align: center;">\r\n	&nbsp;<a href="http://datve.sukienhay.com/c/khoa-hoc-toi-uu-hoa-truyen-thong-tren-mang-xa-hoi-15.html" target="_blank"><span style="font-size: small;"><strong><img alt="dangky-sukienhay" src="http://sukienhay.com/images/stories/logo/dangky-sukienhay.png" style="border: 0px none currentcolor;" title="dangky-sukienhay" height="75" width="233" border="0"></strong></span></a></p>\r\n<p style="text-align: center;">\r\n	<span style="font-size: small;"><strong>MẠNG CỘNG ĐỒNG SỰ KIỆN HAY - NÂNG TẦM GIÁ TRỊ VIỆT</strong></span></p>\r\n<p style="text-align: center;">\r\n	&nbsp;Địa chỉ : Tòa nhà SuKienHay, Số 20/176 Lê Trọng Tấn, Thanh Xuân, Hà Nội</p>\r\n<p>\r\n	&nbsp;Điện thoại: 04. 3565 1974 – Fax: 04. 6276 4656 – Email: <a href="mailto:info@sukienhay.com" title="Mail hỗ trợ - giải đáp thắc mắc">info@sukienhay.com</a></p>			\r\n				</div>', 'Hà N?i', '300e77cb833e328bc9f31f72.jpg', '2012-04-16 06:00:00', '2012-04-16 06:00:00', 10000, 'lớn', '2012-04-01 22:09:25', '2012-04-01 22:36:45', 1, 7, 1, 0),
(38, 1, 'XÂY DỰNG HÌNH ẢNH BẢN THÂN', '<div class="event-desc">\r\n						<div class="ctitle">Thông tin sự kiện<b> XÂY DỰNG HÌNH ẢNH BẢN THÂN</b></div>\r\n						<p>\r\n	<em>Bạn thân mến! Nếu như thương hiệu quyết định sự thành bại của một \r\nthương nghiệp thì nhân hiệu là yếu tố quyết định sự thăng trầm của đời \r\nngười. Tuy nhiên để xây dựng một hình ảnh bản thân tốt không phải là một\r\n chuyện dễ. Và đương nhiên việc biến hình ảnh của bản thân thành một vì \r\nsao sáng giữa bao vì sao khác lại càng khó hơn.</em><br>\r\n	<br>\r\n	Đáp ứng nhu cầu cần thiết này, Clb Ngôi nhà trái tim đã tổ chức buổi nói chuyện chuyên đề với đề tài <span style="color:#0000cd;"><strong>"XÂY DỰNG HÌNH ẢNH BẢN THÂN".</strong></span><br>\r\n	<br>\r\n	&nbsp;Với báo cáo viên là <span style="color:#008000;"><strong>PGS.TS tâm lý học Đoàn Văn Điều</strong></span><span style="color:#ff8c00;">,</span>\r\n Giảng viên khoa Tâm lý - Giáo dục, trường &nbsp;ĐH Sư phạm TP.HCM. Là một \r\ngiáo sư, nhà nghiên cứu và là tác giả của nhiều đầu sách rất có giá trị \r\ncủa ngành Tâm lý học.&nbsp;<br>\r\n	<br>\r\n	Thời gian diễn ra: <strong>14h00 - 17h00 ngày 07/04/2012.</strong><br>\r\n	Địa điểm: <strong>Giảng đường D,</strong><em><strong>Trường Đại học Sư phạm TP. HCM</strong></em>: 280 An Dương Vương, P.4, Q.5, TP. Hồ Chí Minh&nbsp;.<br>\r\n	<br>\r\n	Đối tượng tham dự: Mọi người từ 18 - 26 tuổi<br>\r\n	<br>\r\n	Để tham dự chương trình, Xin vui lòng đăng ký qua địa chỉ Email: <a href="mailto:ngoinhatraitim@gmail.com">ngoinhatraitim@gmail.com</a> với những nội dung sau:<br>\r\n	<em>1. Họ, tên:...................................................................<br>\r\n	2. Ngày, tháng, năm sinh:.................................................<br>\r\n	3. Chức vụ/&nbsp;nghề nghiệp:..................................................<br>\r\n	4. Đơn vị công tác/&nbsp;địa chỉ:................................................<br>\r\n	5. Điện thoại: ...............................................................<br>\r\n	6. Email (nếu có):...........................................................</em><br>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="color:#ff0000;"><strong><em><u>* LƯU Ý:</u></em></strong></span><br>\r\n	- VÀO CỔNG TỰ DO<br>\r\n	- Hạn cuối đăng kí: 23h59’, ngày 5/4/2012 (Thời gian đăng kí có thể kết\r\n thúc sớm hơn dự định khi CLB nhận đủ số lượng cho phép).<br>\r\n	- Bạn vui lòng chắc chắn sẽ tham dự chuyên đề, sau đó điền đầy đủ thông\r\n tin đăng kí để CLB tiếp nhận chính xác và sắp xếp cho bạn (vì số lượng \r\nghế có hạn).<br>\r\n	- Vui lòng đi đúng giờ khi bạn đến tham dự chuyên đề.</p>\r\n<p>\r\n	<br>\r\n	<span style="color:#0000cd;"><em>RẤT HÂN HẠNH ĐƯỢC ĐÓN TIẾP!&nbsp;</em></span></p>\r\n<p>\r\n	<span style="color:#800080;"><em>CLB Ngôi nhà trái tim</em></span></p>			\r\n				</div>', 'Hà N?i', '0b1f151b93e88bd23b9c8392.jpg', '2012-04-09 06:00:00', '2012-04-10 06:00:00', 10000, 'lớn', '2012-04-01 22:11:36', '2012-04-01 22:18:52', 1, 7, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_friend`
--

CREATE TABLE IF NOT EXISTS `tbl_friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user1_id` int(11) NOT NULL,
  `user2_id` int(11) NOT NULL,
  `request` int(1) NOT NULL,
  `friendship` tinyint(1) NOT NULL,
  `req_user1` tinyint(4) NOT NULL,
  `req_user2` tinyint(4) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user2_id` (`user2_id`),
  KEY `user1_id` (`user1_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_friend`
--

INSERT INTO `tbl_friend` (`id`, `user1_id`, `user2_id`, `request`, `friendship`, `req_user1`, `req_user2`, `create_time`, `update_time`) VALUES
(19, 3, 1, 1, 2, 0, 0, '0000-00-00 00:00:00', '2012-03-26 17:49:30'),
(20, 2, 1, 1, 3, 0, 0, '0000-00-00 00:00:00', '2012-04-01 22:45:01'),
(21, 1, 4, 0, 0, 0, 0, '2012-03-26 19:24:18', '2012-03-26 19:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like`
--

CREATE TABLE IF NOT EXISTS `tbl_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like_statu`
--

CREATE TABLE IF NOT EXISTS `tbl_like_statu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `statu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `statu_id` (`statu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_me`
--

CREATE TABLE IF NOT EXISTS `tbl_me` (
  `statu_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_time` datetime NOT NULL,
  `permission` set('tôi','bạn bè','mọi người') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`statu_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_me`
--

INSERT INTO `tbl_me` (`statu_id`, `user_id`, `content`, `create_time`, `permission`) VALUES
(1, 3, 'chúc các bạn 1 ngày mới chàn đầy niềm vui và hạnh phúc ', '0000-00-00 00:00:00', 'mọi người'),
(2, 3, 'hum nay học phân tích thiết kế hướng đối tượng (OODA), không thik học môn này, buồn ngủ lắm ', '0000-00-00 00:00:00', 'tôi'),
(3, 4, 'ok men', '0000-00-00 00:00:00', 'tôi'),
(4, 1, 'hom nay bat dau', '0000-00-00 00:00:00', 'mọi người'),
(5, 1, 'status cho minh toi', '0000-00-00 00:00:00', 'tôi'),
(6, 1, 'cho cac ban day', '0000-00-00 00:00:00', 'bạn bè'),
(7, 4, 'cho moi nguoi', '2012-03-25 09:19:21', 'mọi người'),
(8, 4, 'cho ban be', '2012-03-25 09:19:33', 'bạn bè');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_typeevent`
--

CREATE TABLE IF NOT EXISTS `tbl_typeevent` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_typeevent`
--

INSERT INTO `tbl_typeevent` (`id`, `name`) VALUES
(1, 'Đào tạo'),
(2, 'Hội chợ'),
(3, 'Hội thảo'),
(4, 'Triển lãm'),
(5, 'Show Diễn'),
(6, 'Khuyến Mại'),
(7, 'Khai Trương'),
(8, 'Cuộc Thi'),
(9, 'Họp mặt'),
(10, 'Giải Trí'),
(11, 'Thể thao'),
(12, 'HĐ Xã hội'),
(13, 'Văn hóa'),
(14, 'Sự kiện khác'),
(15, 'Du Lịch');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_typevideo`
--

CREATE TABLE IF NOT EXISTS `tbl_typevideo` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_typevideo`
--

INSERT INTO `tbl_typevideo` (`id`, `name`) VALUES
(1, 'Music'),
(2, 'Hài'),
(3, 'Giải Trí'),
(4, 'Phim hài'),
(5, 'Giới Thiệu'),
(6, 'Âm nhạc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `block` tinyint(4) NOT NULL,
  `activation` tinyint(4) NOT NULL,
  `last_login_IP` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_login_time` datetime NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`, `block`, `activation`, `last_login_IP`, `last_login_time`, `create_time`, `update_time`) VALUES
(1, 'admin', '25d55ad283aa400af464c76d713c07ad', 'admin@gmail.com', 0, 0, '', '2012-03-26 17:31:59', '0000-00-00 00:00:00', '2012-03-17 00:00:00'),
(2, 'demo02', 'e10adc3949ba59abbe56e057f20f883e', 'demo02@gmail.com', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'demo03', 'e10adc3949ba59abbe56e057f20f883e', 'demo03@gmail.com', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'tuan', '25d55ad283aa400af464c76d713c07ad', 'tuandm_540@gmail.com', 0, 0, '', '2012-03-23 19:20:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userprofiles`
--

CREATE TABLE IF NOT EXISTS `tbl_userprofiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `display_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bio` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bod` date NOT NULL,
  `gender` set('nam','nữ','khác') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address_line1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address_line2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address_line3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `yim_handle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `skype_handle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebooksite` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `update_on` int(3) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_userprofiles`
--

INSERT INTO `tbl_userprofiles` (`user_id`, `display_name`, `first_name`, `last_name`, `company`, `lang`, `bio`, `bod`, `gender`, `phone`, `mobile`, `address_line1`, `address_line2`, `address_line3`, `yim_handle`, `skype_handle`, `avatar`, `facebooksite`, `update_on`) VALUES
(1, 'admin', 'ad', 'min', 'dhqg', '', 'testing', '2012-03-12', 'nam', '1234567890', '', 'cau giay - ha noi - viet nam', '', '', 'admin', '', 'user6607_pic3989_1240121136.jpg', '', 0),
(2, 'demo02', 'demo', '02', 'dhqg', '', 'sdfguilmnbvcvbn', '2012-03-13', 'nam', '1456786', '', 'wertyuiopp;lkjhgfdsazxcvbnm', '', '', 'wqertyuikjhg', '', 'dung.png', '', 0),
(3, 'demo03', 'demo', '03', 'dhqg', '', 'zxcvbnm', '2012-03-14', 'nam', '1234567890', '', 'qwertyuiop', '', '', 'asdfghjkl', '', 'dung.png', '', 0),
(4, 'minh tuan', 'minh', 'tuan', 'it', '', 'ok men<br>', '2012-03-13', 'nam', '0986812496', '', 'nghe an', '', '', 'tiasetmanh2004', '', 'Koala.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE IF NOT EXISTS `tbl_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typevideo_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `view` int(10) NOT NULL,
  `permission` set('tôi','bạn bè','mọi người') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `typevideo_id` (`typevideo_id`),
  KEY `create_user_id` (`create_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `typevideo_id`, `name`, `link`, `thumbnail`, `create_time`, `update_time`, `create_user_id`, `view`, `permission`) VALUES
(1, 5, 'Nhung hươu Hương Sơn', 'http://www.youtube.com/watch?v=XEZoRxLNR-Y&feature=g-all-u&context=G2be06aaFAAAAAAAANAA', '', '2012-04-01 21:58:30', '2012-04-01 21:58:30', 1, 2, ''),
(2, 6, 'Nhật Ký Của Mẹ - Hiền Thục ST:Nguyễn Văn Chung - Bật khóc khi nghe HD ', 'http://www.youtube.com/watch?v=Pjr0SxcK30Y&feature=context&context=G2be06aaFAAAAAAAANAA', '', '2012-04-01 21:59:34', '2012-04-01 21:59:34', 1, 1, ''),
(3, 6, 'Người mẹ trong mơ - bài hát của cậu bé mồ côi 12 tuổi gây xúc động ', 'http://www.youtube.com/watch?v=ydrfBtkvIdo&feature=fvwrel', '', '2012-04-01 22:00:15', '2012-04-01 22:01:07', 1, 3, 'tôi');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `tbl_comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_comment_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `tbl_event` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_comment_me`
--
ALTER TABLE `tbl_comment_me`
  ADD CONSTRAINT `tbl_comment_me_ibfk_1` FOREIGN KEY (`create_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_comment_me_ibfk_2` FOREIGN KEY (`statu_id`) REFERENCES `tbl_me` (`statu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD CONSTRAINT `tbl_event_ibfk_1` FOREIGN KEY (`typeevent_id`) REFERENCES `tbl_typeevent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_event_ibfk_2` FOREIGN KEY (`create_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_friend`
--
ALTER TABLE `tbl_friend`
  ADD CONSTRAINT `tbl_friend_ibfk_1` FOREIGN KEY (`user2_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_friend_ibfk_2` FOREIGN KEY (`user1_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_like`
--
ALTER TABLE `tbl_like`
  ADD CONSTRAINT `tbl_like_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `tbl_event` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_like_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_like_statu`
--
ALTER TABLE `tbl_like_statu`
  ADD CONSTRAINT `tbl_like_statu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_like_statu_ibfk_2` FOREIGN KEY (`statu_id`) REFERENCES `tbl_me` (`statu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_me`
--
ALTER TABLE `tbl_me`
  ADD CONSTRAINT `tbl_me_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_userprofiles`
--
ALTER TABLE `tbl_userprofiles`
  ADD CONSTRAINT `tbl_userprofiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD CONSTRAINT `tbl_video_ibfk_1` FOREIGN KEY (`typevideo_id`) REFERENCES `tbl_typevideo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_video_ibfk_2` FOREIGN KEY (`create_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
