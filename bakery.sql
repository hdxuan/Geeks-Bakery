/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : bakery

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 25/07/2021 22:04:50
*/

drop database if exists bakery;
create database bakery;
use bakery;

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for banners
-- ----------------------------
DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners`  (
  `id` int(10) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of banners
-- ----------------------------

-- ----------------------------
-- Table structure for cake_type
-- ----------------------------
DROP TABLE IF EXISTS `cake_type`;
CREATE TABLE `cake_type`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1753 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cake_type
-- ----------------------------
INSERT INTO `cake_type` VALUES (1, 'Chocolate', 'For Choco Addicts');
INSERT INTO `cake_type` VALUES (2, 'Fruits', 'A taste of tropics');
INSERT INTO `cake_type` VALUES (3, 'Exotic', 'Oreo, Rochers & more');
INSERT INTO `cake_type` VALUES (4, 'Blackforest', 'The all time Favourite');
INSERT INTO `cake_type` VALUES (5, 'Butterscotch', 'For Candy Fans');
INSERT INTO `cake_type` VALUES (6, 'Vanilla', 'The Evergreen');
INSERT INTO `cake_type` VALUES (7, 'Coffee', 'For Expresso Lover');
INSERT INTO `cake_type` VALUES (8, 'Strawberry', 'An ideal Complement');

-- ----------------------------
-- Table structure for cakes
-- ----------------------------
DROP TABLE IF EXISTS `cakes`;
CREATE TABLE `cakes`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10, 0) NOT NULL DEFAULT 0,
  `size` double NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `id_cake_type` int(10) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_id_type_cake_cakes`(`id_cake_type`) USING BTREE,
  CONSTRAINT `fk_id_type_cake_cakes` FOREIGN KEY (`id_cake_type`) REFERENCES `cake_type` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1475 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cakes
-- ----------------------------
INSERT INTO `cakes` VALUES (1, 'Blue bery mousse', 300000, 19, 'Blueberry, Kem cheese, Kem tươi. ', 3, '1.1.jpg');
INSERT INTO `cakes` VALUES (2, 'Caramel mousse', 250000, 21, 'Caramel, Socola', 3, '2.1.jpg');
INSERT INTO `cakes` VALUES (3, 'Cherry cheese mousse', 150000, 25, 'Cherry, Kem cheese ,Kem tươi.', 3, '1.3.jpg');
INSERT INTO `cakes` VALUES (4, 'Red chocolate mousse', 400000, 21, 'Kem tươi, Socola,Trà xanh,', 3, '1.4.jpg');
INSERT INTO `cakes` VALUES (5, 'Bánh sinh nhật doremon', 250000, 21, 'Phần kem nhiều màu sắc trên bánh chỉ để trang trí', 1, '2.1.jpg');
INSERT INTO `cakes` VALUES (6, 'Dark chocolate cake', 300000, 21, 'Gato, kem bơ vị rượu rum, socola', 1, '2.2.jpg');
INSERT INTO `cakes` VALUES (7, 'White chocolate and coconut cake', 250000, 19, 'Gato, kem bơ vị rượu rum, socola bào trắng, dừa sấy', 1, '2.3.jpg');
INSERT INTO `cakes` VALUES (8, 'Car dollar cake', 200000, 21, 'Gato, kem, có phụ kiện trên mặt bánh', 1, '2.4.jpg');
INSERT INTO `cakes` VALUES (9, 'Green tea four love', 300000, 23, 'Gato, kem vị trà xanh', 1, '3.1.jpg');
INSERT INTO `cakes` VALUES (10, 'Tiramisu', 220000, 19, 'Gato, kem tươi vị coffee', 1, '3.2.jpg');
INSERT INTO `cakes` VALUES (11, 'Bánh su kem ', 50000, 23, 'Vỏ bánh giòn, xốp, vị kem béo', 5, '3.3.jpg');
INSERT INTO `cakes` VALUES (12, 'Bánh quy mix 4 vị', 100000, 19, 'Vị bánh thơm béo, giòn', 4, '3.4.jpg');
INSERT INTO `cakes` VALUES (13, 'Tiramisu chậu cây', 50000, 19, 'Gato vị socola và trái cây', 4, '4.1.jfif');
INSERT INTO `cakes` VALUES (14, 'Bánh donut tiramisu', 50000, 19, 'Chocolate trắng', 6, '4.2.jfif');
INSERT INTO `cakes` VALUES (15, 'Bánh donut cheese', 20000, 19, 'Phô mai tan chảy, chà bông', 6, '4.3.jfif');
INSERT INTO `cakes` VALUES (16, 'Bánh donut queen', 20000, 19, 'Chocolate trắng, hạnh nhân', 6, '4.4.jfif');
INSERT INTO `cakes` VALUES (17, 'Bánh donut scoopy doo', 20000, 25, 'Chocolate đen, cốm chocolate', 6, '5.1.jpg');
INSERT INTO `cakes` VALUES (18, 'Bánh donut green tea', 20000, 25, 'Socola trà xanh, nhân socolate', 6, '5.2.jpg');
INSERT INTO `cakes` VALUES (19, 'Bánh donut coconut lemon', 20000, 19, 'Chocolate chanh, dừa sấy', 6, '5.3.jpg');
INSERT INTO `cakes` VALUES (20, 'Bánh lúa mạch nẩy mầm', 59000, 23, 'Bột lúa mạch, hạt bí\n', 2, '5.4.jpg');
INSERT INTO `cakes` VALUES (21, 'Baked ham & cheese sw', 45000, 25, 'Bánh Sandwich Kẹp Thịt Ham Và Phô Mai', 2, '6.1.jpg');
INSERT INTO `cakes` VALUES (22, 'Tuna sandwich', 45000, 23, 'Bánh Sandwich Nhân Cá Ngừ', 2, '6.2.jpg');

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `id_cake` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `amount` int(10) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_cake`, `id_user`) USING BTREE,
  INDEX `fk_id_users_cart`(`id_user`) USING BTREE,
  CONSTRAINT `fk_id_cakes_cart` FOREIGN KEY (`id_cake`) REFERENCES `cakes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_id_users_cart` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES (1, 2, 1);
INSERT INTO `cart` VALUES (1, 11, 1);
INSERT INTO `cart` VALUES (2, 3, 3);
INSERT INTO `cart` VALUES (3, 4, 1);
INSERT INTO `cart` VALUES (4, 4, 2);
INSERT INTO `cart` VALUES (5, 5, 1);
INSERT INTO `cart` VALUES (6, 3, 2);
INSERT INTO `cart` VALUES (7, 8, 1);
INSERT INTO `cart` VALUES (8, 11, 3);

-- ----------------------------
-- Table structure for order_details
-- ----------------------------
DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details`  (
  `id_order` int(10) NOT NULL,
  `id_cake` int(10) NOT NULL,
  `amount` int(10) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_order`, `id_cake`) USING BTREE,
  INDEX `fk_id_cakes_order_details`(`id_cake`) USING BTREE,
  CONSTRAINT `fk_id_cakes_order_details` FOREIGN KEY (`id_cake`) REFERENCES `cakes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_id_order_order_details` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of order_details
-- ----------------------------
INSERT INTO `order_details` VALUES (1, 1, 1);
INSERT INTO `order_details` VALUES (1, 3, 2);
INSERT INTO `order_details` VALUES (2, 5, 3);
INSERT INTO `order_details` VALUES (3, 4, 1);
INSERT INTO `order_details` VALUES (4, 8, 3);
INSERT INTO `order_details` VALUES (5, 12, 3);
INSERT INTO `order_details` VALUES (6, 22, 4);
INSERT INTO `order_details` VALUES (7, 5, 5);
INSERT INTO `order_details` VALUES (7, 13, 2);
INSERT INTO `order_details` VALUES (8, 15, 3);
INSERT INTO `order_details` VALUES (9, 16, 2);
INSERT INTO `order_details` VALUES (10, 12, 3);
INSERT INTO `order_details` VALUES (11, 14, 3);
INSERT INTO `order_details` VALUES (12, 19, 3);
INSERT INTO `order_details` VALUES (12, 20, 3);
INSERT INTO `order_details` VALUES (12, 21, 1);
INSERT INTO `order_details` VALUES (13, 17, 2);
INSERT INTO `order_details` VALUES (14, 18, 2);
INSERT INTO `order_details` VALUES (15, 1, 1);
INSERT INTO `order_details` VALUES (15, 4, 3);

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `order_date` date NULL DEFAULT NULL,
  `delivery_date` date NULL DEFAULT NULL,
  `id_user` int(10) NOT NULL,
  `id_status` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_id_statues_order`(`id_status`) USING BTREE,
  INDEX `fk_id_users_orders`(`id_user`) USING BTREE,
  CONSTRAINT `fk_id_statues_order` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_id_users_orders` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1838 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (1, '2021-05-20', '2021-05-20', 3, 'DG');
INSERT INTO `orders` VALUES (2, '2021-05-21', '2021-05-21', 3, 'DG');
INSERT INTO `orders` VALUES (3, '2021-05-21', '2021-05-22', 4, 'DG');
INSERT INTO `orders` VALUES (4, '2021-05-21', '2021-05-21', 4, 'DG');
INSERT INTO `orders` VALUES (5, '2021-05-24', '2021-05-24', 5, 'DG');
INSERT INTO `orders` VALUES (6, '2021-05-24', '2021-05-25', 2, 'DG');
INSERT INTO `orders` VALUES (7, '2021-05-24', '2021-05-25', 8, 'DG');
INSERT INTO `orders` VALUES (8, '2021-05-25', '2021-05-26', 11, 'DG');
INSERT INTO `orders` VALUES (9, '2021-05-25', '2021-05-26', 11, 'DG');
INSERT INTO `orders` VALUES (10, '2021-05-25', NULL, 8, 'DGH');
INSERT INTO `orders` VALUES (11, '2021-05-26', NULL, 3, 'DGH');
INSERT INTO `orders` VALUES (12, '2021-05-26', NULL, 9, 'DGH');
INSERT INTO `orders` VALUES (13, '2021-05-26', NULL, 5, 'DCB');
INSERT INTO `orders` VALUES (14, '2021-05-27', NULL, 3, 'DCB');
INSERT INTO `orders` VALUES (15, '2021-05-28', NULL, 9, 'CXL');
INSERT INTO `orders` VALUES (16, '2021-05-28', '2021-05-01', 7, 'CXL');

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status`  (
  `id` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES ('CXL', 'Chưa xử lý');
INSERT INTO `status` VALUES ('DCB', 'Đang chuẩn bị đơn hàng');
INSERT INTO `status` VALUES ('DG', 'Đã giao');
INSERT INTO `status` VALUES ('DGH', 'Đang giao hàng');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `role` int(2) NOT NULL DEFAULT 1,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1723 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (-9999, 'Quản trị viên', '0000000000', '0000000000', '12345', 'admin', 0, NULL);
INSERT INTO `users` VALUES (2, 'Nguyễn Tùng Lâm', '0338309523', '124 đường Mạc Thiên Tích, phường Xuân Khánh, quận Ninh Kiều, TP.Cần Thơ', '12345', 'lam@gmail.com', 1, NULL);
INSERT INTO `users` VALUES (3, 'Nguyễn Hoàng Thông', '0358309329', '12 đường Lý Tự Trọng, phường An Lạc, quận Ninh Kiều, TP.Cần Thơ', '12345', 'thong@gmail.com', 1, NULL);
INSERT INTO `users` VALUES (4, 'Hầu Diễm Xuân', '0123763585', '45 đường Trần Hưng Đạo, phường Xuân Khánh, quận Ninh Kiều, TP.Cần Thơ', '12345', 'xuan@gmail.com', 1, NULL);
INSERT INTO `users` VALUES (5, 'Phạm Chí Trung', '0925385162', '82 đường Trần Văn Hoài, phường Xuân Khánh, quận Ninh Kiều, TP.Cần Thơ', '12345', 'trung@gmail.com', 1, NULL);
INSERT INTO `users` VALUES (6, 'Đoàn Duy Thanh', '0873174284', '97 đường Hùng Vương, phường An Cư, quận Ninh Kiều, TP.Cần Thơ', '12345', 'thanh@gmail.com', 1, NULL);
INSERT INTO `users` VALUES (7, 'Nguyễn Huỳnh Hoàng Phúc', '0836109481', '48 đường Trần Ngọc Quế, phường Xuân Khánh, quận Ninh Kiều, TP.Cần Thơ', '12345', 'phuc@gmail.com', 1, NULL);
INSERT INTO `users` VALUES (8, 'Trần Văn Thiệt', '0927385387', '178 đường Nguyễn Việt Hồng, phường Xuân Khánh, quận Ninh Kiều, TP.Cần Thơ', '12345', 'thiet@gmail.com', 1, NULL);
INSERT INTO `users` VALUES (9, 'Nguyễn Thị Thúy Lựu', '0391278359', '132 đường Mậu Thân, phường Xuân Khánh, quận Ninh Kiều, TP.Cần Thơ', '12345', 'luu@gmail.com', 1, NULL);
INSERT INTO `users` VALUES (10, 'Trịnh Kim Chi', '0331489511', '228 đường Nguyễn Trãi, phường Cái Khế, quận Ninh Kiều, TP.Cần Thơ', '12345', 'chi@gmail.com', 1, NULL);
INSERT INTO `users` VALUES (11, 'Trần Phương Thảo', '0702137273', '312 đường Nguyễn Văn Linh, phường Hưng Lợi, quận Ninh Kiều, TP.Cần Thơ', '12345', 'thao@gmail.com', 1, NULL);

-- ----------------------------
-- View structure for v_userlist
-- ----------------------------
DROP VIEW IF EXISTS `v_userlist`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_userlist` AS SELECT U.id as userID, U.address AS address, U.email as email, U.phone as phone, U.NAME AS username, U.avatar as avatar 
FROM USERS U ;

-- ----------------------------
-- Procedure structure for sp_itemsInCart
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_itemsInCart`;
delimiter ;;
CREATE PROCEDURE `sp_itemsInCart`(userID int)
begin
	select C.name as cakeName, C.price, C.size, C.description, C.id_cake_type as cakeTypeID, ct.name as cakeType, image 
	from cart join cakes c on c.id = cart.id_cake
						join cake_type ct on ct.id = c.id_cake_type
	where id_user = userID;
end
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sp_selectUserByID
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_selectUserByID`;
delimiter ;;
CREATE PROCEDURE `sp_selectUserByID`(userID int)
begin
		SELECT U.id as userID, U.address AS address, U.email as email, U.phone as phone, U.NAME AS username, U.avatar as avatar
		from users U
		where U.id =  userID;
 end
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sp_updateState
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_updateState`;
delimiter ;;
CREATE PROCEDURE `sp_updateState`(orderID int, stateID char(10))
begin
	UPDATE orders SET id_status = stateID
	where id = orderID;
end
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table orders
-- ----------------------------
DROP TRIGGER IF EXISTS `trg_checkDate`;
delimiter ;;
CREATE TRIGGER `trg_checkDate` BEFORE INSERT ON `orders` FOR EACH ROW begin
	if (new.delivery_date < new.order_date)
	THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Ngay dat hang khong the lon hon ngay giao hang';
  END IF;
end
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table orders
-- ----------------------------
DROP TRIGGER IF EXISTS `trg_checkDateInsert`;
delimiter ;;
CREATE TRIGGER `trg_checkDateInsert` BEFORE INSERT ON `orders` FOR EACH ROW begin
	if (new.delivery_date < new.order_date)
	THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Ngay dat hang khong the lon hon ngay giao hang';
  END IF;
end
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table orders
-- ----------------------------
DROP TRIGGER IF EXISTS `trg_checkDateUpdate`;
delimiter ;;
CREATE TRIGGER `trg_checkDateUpdate` BEFORE UPDATE ON `orders` FOR EACH ROW begin
	if (new.delivery_date < new.order_date)
	THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Ngay dat hang khong the lon hon ngay giao hang';
  END IF;
end
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
