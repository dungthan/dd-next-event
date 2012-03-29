-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 28 Mars 2012 à 17:24
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `events`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_comment`
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

--
-- Contenu de la table `tbl_comment`
--


-- --------------------------------------------------------

--
-- Structure de la table `tbl_comment_me`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `tbl_comment_me`
--


-- --------------------------------------------------------

--
-- Structure de la table `tbl_event`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `typeevent_id`, `name`, `content`, `place`, `thumbnail`, `start_time`, `end_time`, `number_guest`, `dimention`, `create_time`, `update_time`, `create_user_id`, `view`, `censor`, `e_like`) VALUES
(1, 8, 'Đá bóng', 'trận chung kết giữa K54CD - K54CC<br><div><embed id="lingoes_plugin_object" type="application/lingoes-npruntime-capture-word-plugin" height="0" hidden="true" width="0"></div>', 'sân fpt', 'user6607_pic3989_1240121136.jpg', '2012-03-28 07:00:00', '2012-03-28 08:00:00', 100, 'lớn', '2012-03-28 07:28:50', '2012-03-28 07:29:32', 1, 9, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_friend`
--

CREATE TABLE IF NOT EXISTS `tbl_friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user1_id` int(11) NOT NULL,
  `user2_id` int(11) NOT NULL,
  `request` int(1) NOT NULL,
  `friendship` tinyint(1) NOT NULL,
  `req_user1` set('đồng ý','không đồng ý','chờ') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `req_user2` set('đồng ý','không đồng ý','chờ') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user2_id` (`user2_id`),
  KEY `user1_id` (`user1_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbl_friend`
--

INSERT INTO `tbl_friend` (`id`, `user1_id`, `user2_id`, `request`, `friendship`, `req_user1`, `req_user2`, `create_time`, `update_time`) VALUES
(1, 1, 2, 1, 2, 'đồng ý', 'đồng ý', '0000-00-00 00:00:00', '2012-03-28 22:10:06');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_like`
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

--
-- Contenu de la table `tbl_like`
--

INSERT INTO `tbl_like` (`id`, `event_id`, `user_id`, `create_time`) VALUES
(1, 1, 2, '0000-00-00 00:00:00'),
(3, 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_like_statu`
--

CREATE TABLE IF NOT EXISTS `tbl_like_statu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `statu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `statu_id` (`statu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `tbl_like_statu`
--


-- --------------------------------------------------------

--
-- Structure de la table `tbl_me`
--

CREATE TABLE IF NOT EXISTS `tbl_me` (
  `statu_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_time` datetime NOT NULL,
  `permission` set('tôi','bạn bè','mọi người') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`statu_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `tbl_me`
--


-- --------------------------------------------------------

--
-- Structure de la table `tbl_typeevent`
--

CREATE TABLE IF NOT EXISTS `tbl_typeevent` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `tbl_typeevent`
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
-- Structure de la table `tbl_typevideo`
--

CREATE TABLE IF NOT EXISTS `tbl_typevideo` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `tbl_typevideo`
--

INSERT INTO `tbl_typevideo` (`id`, `name`) VALUES
(1, 'Âm nhạc'),
(2, 'Phóng sự'),
(3, 'Hài hước'),
(4, 'Tổng hợp'),
(5, 'Công nghệ'),
(6, 'Học tập'),
(7, 'Sự kiện'),
(8, 'Game'),
(9, 'Thể thao'),
(10, 'Phát triển con người'),
(11, 'Giải trí'),
(12, 'Phim'),
(13, 'Thời trang');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_user`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`, `block`, `activation`, `last_login_IP`, `last_login_time`, `create_time`, `update_time`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@bodd.biz', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'demo02', 'e10adc3949ba59abbe56e057f20f883e', 'demo02@bodd.biz', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_userprofiles`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `tbl_userprofiles`
--

INSERT INTO `tbl_userprofiles` (`user_id`, `display_name`, `first_name`, `last_name`, `company`, `lang`, `bio`, `bod`, `gender`, `phone`, `mobile`, `address_line1`, `address_line2`, `address_line3`, `yim_handle`, `skype_handle`, `avatar`, `facebooksite`, `update_on`) VALUES
(1, 'admin', 'ad', 'min', 'bodd', '', 'không có gì để nói cả&nbsp;', '2012-03-28', 'nam', '123456789', '', 'cầu giấy - hà nội', '', '', 'a_9993388_e', '', 'user6607_pic3989_1240121136.jpg', '', 0),
(2, 'demo02', 'demo', '02', 'bodd', '', 'không cần nói gì cả<br><div><embed id="lingoes_plugin_object" type="application/lingoes-npruntime-capture-word-plugin" height="0" hidden="true" width="0"></div>', '2012-03-28', 'nam', '12345789', '', 'hà nội', '', '', 'etc', '', 'user6607_pic3989_1240121136.jpg', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_video`
--

CREATE TABLE IF NOT EXISTS `tbl_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typevideo_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `permission` set('tôi','bạn bè','mọi người') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `view` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `typevideo_id` (`typevideo_id`),
  KEY `create_user_id` (`create_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `typevideo_id`, `name`, `link`, `permission`, `create_time`, `update_time`, `create_user_id`, `view`) VALUES
(1, 1, 't-are', 'http://www.youtube.com/watch?v=OFXT3AQBKzg', 'tôi', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(2, 1, 'test riêng tôi', 'http://www.youtube.com/watch?v=saorSn49gnI&feature=related', 'tôi', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(3, 1, 'test bạn bè', 'http://www.youtube.com/watch?v=BdEY7QsL4yY&feature=related', 'bạn bè', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(4, 1, 'test mọi người ', 'http://www.youtube.com/watch?v=R7AhJ8OAn1k&feature=related', 'mọi người', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(5, 1, 'tesst mọi người', 'http://www.youtube.com/watch?v=lbw6_VdVWH8&feature=related', 'mọi người', '2012-03-28 21:59:08', '2012-03-28 21:59:08', 2, 4);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `tbl_comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_comment_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `tbl_event` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_comment_me`
--
ALTER TABLE `tbl_comment_me`
  ADD CONSTRAINT `tbl_comment_me_ibfk_1` FOREIGN KEY (`create_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_comment_me_ibfk_2` FOREIGN KEY (`statu_id`) REFERENCES `tbl_me` (`statu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD CONSTRAINT `tbl_event_ibfk_1` FOREIGN KEY (`typeevent_id`) REFERENCES `tbl_typeevent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_event_ibfk_2` FOREIGN KEY (`create_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_friend`
--
ALTER TABLE `tbl_friend`
  ADD CONSTRAINT `tbl_friend_ibfk_1` FOREIGN KEY (`user2_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_friend_ibfk_2` FOREIGN KEY (`user1_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_like`
--
ALTER TABLE `tbl_like`
  ADD CONSTRAINT `tbl_like_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `tbl_event` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_like_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_like_statu`
--
ALTER TABLE `tbl_like_statu`
  ADD CONSTRAINT `tbl_like_statu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_like_statu_ibfk_2` FOREIGN KEY (`statu_id`) REFERENCES `tbl_me` (`statu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_me`
--
ALTER TABLE `tbl_me`
  ADD CONSTRAINT `tbl_me_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_userprofiles`
--
ALTER TABLE `tbl_userprofiles`
  ADD CONSTRAINT `tbl_userprofiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD CONSTRAINT `tbl_video_ibfk_1` FOREIGN KEY (`typevideo_id`) REFERENCES `tbl_typevideo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_video_ibfk_2` FOREIGN KEY (`create_user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
