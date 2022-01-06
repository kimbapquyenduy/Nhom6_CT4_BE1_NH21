-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th1 06, 2022 lúc 08:18 AM
-- Phiên bản máy phục vụ: 5.7.28
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom6`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `descripsion` text COLLATE utf8_unicode_ci NOT NULL,
  `feature` int(4) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `descripsion`, `feature`, `created_at`) VALUES
(3, 'MacBook Pro 14 M1 Pro 2021/14 core-GPU', 1, 2, 54990000, 'apple-macbook-pro-14-m1-pro-2021-600x600.jpg', 'Sự đẳng cấp không chỉ ở thiết kế thời thượng, sang trọng mà còn sở hữu sức mạnh siêu năng với con chip Apple M1 Pro phiên bản nâng cấp ấn tượng đến từ nhà Apple, mang đến cho bạn trải nghiệm làm việc chuyên nghiệp nhất dù là các tác vụ đồ họa - kỹ thuật chuyên sâu.', 1, '2021-10-21 17:00:00'),
(4, 'Tai nghe Bluetooth AirPods Pro Wireless Charge Apple MWP22', 1, 4, 4990000, 'airpods-pro-wireless-charge-apple-mwp22-ava-600x600.jpg', 'Thiết kế in-ear hoàn toàn mới và độc đáo.\r\nTích hợp công nghệ chống ồn chủ động (Active Noise Cancellation).\r\nChip H1 mạnh mẽ, xử lý âm thanh kỹ thuật số với độ trễ gần như bằng không.\r\nNghe nhạc đến 4.5 giờ khi bật chống ồn, 5 giờ khi tắt chống ồn.\r\nSử dụng song song với hộp sạc có thể dùng được đến 24 giờ nghe nhạc.\r\nHỗ trợ sạc nhanh, cho thời gian sử dụng đến 1 giờ chỉ với 5 phút sạc.\r\nHộp sạc hỗ trợ sạc không dây chuẩn Qi, tiện lợi khi sạc lại.\r\nTrang bị chuẩn chống nước IPX4, bảo vệ tai nghe an toàn dưới mưa nhỏ và mồ hôi.\r\nSản phẩm chính hãng Apple, nguyên seal 100%.\r\nLưu ý: Thanh toán trước khi mở seal.', 1, '2021-10-02 17:00:00'),
(5, 'Apple Watch Series 7 LTE 41mm dây thép', 1, 3, 22990000, 'apple-watch-s7-lte-41mm-vien-thep-thumb-1-600x600.jpg', 'Apple Watch S7 LTE 41 mm được trang bị khung viền thép không gỉ cứng cáp, trang nhã cùng phần thiết kế bo cong mềm mại quen thuộc của nhà Apple, bên cạnh đó bề mặt đồng hồ có kích thước 1.57 inch (diện tích màn hình tăng 20% so với phiên bản cũ) được bảo vệ bởi lớp kinh cường lực Ion-X strengthened glass cao cấp. Phần viền của đồng hồ được làm trau chuốt hơn với độ dày chỉ 1.7 mm, tạo cảm giác tràn viền nhiều hơn (phần viền mỏng hơn 60% so với Apple Watch S6).', 1, '2021-10-18 17:00:00'),
(7, 'Samsung Galaxy Z Fold3 5G 256GB', 2, 1, 40990000, 'samsung-galaxy-z-fold-3-silver-1-600x600.jpg', 'Galaxy Z Fold3 5G, chiếc điện thoại được nâng cấp toàn diện về nhiều mặt, đặc biệt đây là điện thoại màn hình gập đầu tiên trên thế giới có camera ẩn (08/2021). Sản phẩm sẽ là một “cú hit” của Samsung góp phần mang đến những trải nghiệm mới cho người dùng.\r\n', 1, '2021-10-17 17:00:00'),
(8, 'Bao da Samsung Galaxy S10 Plus Nắp gập Clear View Đen', 2, 5, 1341000, 'op-lung-galaxy-s10-plus-nap-gap-clear-view-samsung-1-1-600x600.jpg', 'Cập nhật nhanh chóng mọi thông báo được hiển thị trên bề mặt bao da.\r\nKiểu dáng thời thượng, sang trọng.\r\nSử dụng điện thoại với sự an tâm tối ưu, bảo vệ toàn diện.\r\nTích hợp ngăn chứa thẻ tiện dụng.\r\nSản phẩm sản xuất chính hãng từ Samsung.', 0, '2021-08-24 17:00:00'),
(51, 'Máy tính bảng Samsung Galaxy Tab S7 FE 4G', 2, 2, 13990000, 'samsung-galaxy-tab-s7-fe-green-600x600.jpg', 'Samsung chính thức trình làng mẫu máy tính bảng có tên Galaxy Tab S7 FE, máy trang bị cấu hình mạnh mẽ, màn hình giải trí siêu lớn và điểm ấn tượng nhất là viên pin siêu khủng được tích hợp bên trong, giúp tăng hiệu suất làm việc nhưng vẫn có tính di động cực cao.\r\nViên pin “khủng long” vượt mốc 10000 mAh\r\nGalaxy Tab S7 FE sẽ khiến bạn choáng ngợp với dụng lượng pin cực khủng 10090 mAh đảm bảo cho cường độ làm việc, giải trí liên tục trong nhiều giờ liề', 1, '2021-12-22 05:56:03'),
(20, 'Samsung Galaxy Watch 4 LTE Classic 46mm', 2, 1, 9990000, 'vi-vn-samsung-galaxy-watch-4-lte-classic-46mm-13.jpg', 'Samsung Galaxy Watch 4 LTE Classic 46mm mang nét sang trọng, hiện đại cùng với bộ khung viền thép không gỉ cứng cáp, màn hình SUPER AMOLED được bao bọc bởi lớp kính cường lực Gorrilla Glass Dx bền bỉ, chịu lực tốt. Dây đeo silicone êm nhẹ, độ đàn hồi cao, không thấm nước, thiết kế đục lỗ cho người dùng sự thông thoáng khi mang', 1, '2020-06-11 17:00:00'),
(11, 'Tai nghe Bluetooth True Wireless Galaxy Buds Pro', 2, 4, 899000, 'tai-nghe-bluetooth-true-wireless-galaxy-buds-pro-ava-1-600x600.jpg', 'Thiết kế thời thượng, cá tính.\r\nChất âm chuẩn studio với loa 2 chiều.\r\nHiệu quả chống ồn lên đến 98%.\r\nĐàm thoại dễ dàng với 3 micro và bộ cảm biến nhận diện giọng nói.\r\nĐồng bộ với các thiết bị Samsung Galaxy.\r\nThời gian nghe nhạc: Khoảng 5 giờ (bật chống ồn), khoảng 7.5 giờ (tắt chống ồn).\r\nThời gian đàm thoại: Khoảng 3.5 giờ (bật chống ồn), khoảng 3.5 giờ (tắt chống ồn).\r\n 5 phút sạc cho 1 giờ chơi nhạc.\r\nĐạt tiêu chuẩn chống nước IPX2.\r\nĐiều khiển cảm ứng dừng/phát, trả lời cuộc gọi, chuyển bài.', 0, '2021-10-17 17:00:00'),
(12, 'Xiaomi 11T 5G 128GB', 3, 1, 10990000, 'xiaomi-11t-white-1-2-600x600.jpg', 'Galaxy Z Fold3 5G, chiếc điện thoại được nâng cấp toàn diện về nhiều mặt, đặc biệt đây là điện thoại màn hình gập đầu tiên trên thế giới có camera ẩn (08/2021). Sản phẩm sẽ là một “cú hit” của Samsung góp phần mang đến những trải nghiệm mới cho người dùng.', 1, '2021-10-03 17:00:00'),
(13, 'Ốp lưng Redmi 8 Nắp gập Flip VI MEEKER Đen', 3, 5, 105000, 'op-lung-redmi-8-nap-gap-flip-vi-meeker-den-1-600x600.jpg', 'Cập nhật nhanh chóng mọi thông báo được hiển thị trên bề mặt bao da.\r\nKiểu dáng thời thượng, sang trọng.\r\nSử dụng điện thoại với sự an tâm tối ưu, bảo vệ toàn diện.\r\nTích hợp ngăn chứa thẻ tiện dụng.\r\nSản phẩm sản xuất chính hãng từ Samsung.', 0, '2021-10-09 17:00:00'),
(14, 'Xiaomi Mi Band 6', 3, 3, 990000, 'mi-band-6-thumb-1-1-600x600.jpg', 'Chế độ luyện tậpTheo dõi giấc ngủTheo dõi mức độ stressTính lượng calories tiêu thụĐo nhịp timĐo nồng độ oxy (SpO2)Đếm số bước chân', 1, '2021-10-18 17:00:00'),
(15, 'Tai nghe Bluetooth True Wireless Earphones 2 Xiaomi', 3, 4, 1864000, '226701-600x600.jpg', 'Kiểu dáng nhỏ gọn cùng thiết kế hiện đại, trẻ trung.\r\nKết nối nhanh chóng và ổn định trong phạm vi 10 m nhờ Bluetooth 5.0.\r\nDễ dàng điều khiển chỉ bằng cảm ứng thao tác chạm.\r\nTrò chuyện điện thoại thoải mái và rõ ràng hơn nhờ công nghệ khử tiếng ồn.\r\nBảo vệ tai nghe khỏi tác hại của nước với chuẩn chống nước IPX5.\r\nChất âm sống động, tận hưởng trọn vẹn các giai điệu.\r\nThời gian sử dụng 4 giờ, kèm hộp sạc 18 giờ và sạc 1 giờ.', 1, '2021-10-16 17:00:00'),
(16, 'Máy tính bảng Samsung Galaxy Tab S6 Lite', 2, 2, 9090000, 'samsung-galaxy-tab-s6-lite-600x600-2-600x600 (1).jpg', 'Sau thành công của Galaxy Tab S6, Samsung tiếp tục chinh phục người dùng với Galaxy Tab S6 Lite có phân khúc giá rẻ hơn. Thiết bị vẫn hỗ trợ bút S Pen thần thánh, thiết kế kim loại cao cấp và màn hình, âm thanh giải trí đỉnh cao.', 1, '2021-10-15 17:00:00'),
(42, 'Apple Watch S6 40mm viền nhôm dây silicone ', 1, 3, 8992000, 'apple-watch-s6-40mm-vien-nhom-day-cao-su-hong-thumb-1-600x600.jpg', 'Apple Watch S6 mang đến những nâng cấp hữu ích để hỗ trợ người dùng một cách tối ưu nhất. Nổi bật trong số đó là chip xử lý S6 cải thiện hiệu năng, hệ điều hành watchOS 7 với nhiều tính năng mới hứa hẹn sẽ mang đến những trải nghiệm tốt hơn, thú vị hơn\r\nThiết kế sang trọng, hiện đại, là phụ kiện thời trang khẳng định đẳng cấp\r\nChiếc Apple Watch S6 40mm viền nhôm dây cao su này vẫn giữ trọn vẹn nét tinh tế và sắc sảo trong thiết kế từ trước đến nay, mặt kính Ion-X strengthened glass ưu việt, viền nhôm được vát gọt công phu và dây đeo cao su co dãn tốt, êm tay.', 0, '2021-12-17 11:21:44'),
(18, 'Oppo Watch 46mm dây silicone đen ', 4, 3, 5752000, 'oppo-watch-46mm-day-silicone-.jpg', 'Đồng hồ thông minh Oppo Watch màu đen phiên bản 46mm sử dụng mặt đồng hồ vuông, bo cong nhẹ ở 4 cạnh, cùng với mặt kính bo cong 2D sang hai bên có chiều sâu tạo cảm giác như mặt kính cong 3D, màn hình AMOLED 1.91 inch độ phân giải 402 x 476 pixels, mật độ điểm ảnh 326 ppi và dải màu rộng chuẩn DCI-P3 cho chất lượng hiển thị sắc nét, sống động. Dây đeo silicone cho cảm giác mang được dễ chịu và thoải mái.\r\n\r\nDù vẻ ngoài khá giống với Apple Watch, tuy nhiên Oppo Watch vẫn có một số điểm khác như:\r\n\r\n- Cạnh phải là nơi đặt hai phím cứng, trong đó phím home có thêm đường chỉ xanh chạy dọc.\r\n\r\n- Cạnh trái là nơi đặt loa ngoài dùng để phát nhạc, cũng như đàm thoại.\r\n\r\n- Mặt sau được trang bị các cảm biến để đo nhịp tim và logo thương hiệu OPPO.', 0, '2021-10-17 17:00:00'),
(19, 'Realme Narzo 30A 4GB - 64GB', 5, 1, 3990000, '637571283753420109_realme-narzo-30a-den-1.jpg', 'realme narzo 30A là chiếc điện thoại có hiệu năng thực sự “khủng” trong tầm giá rẻ. Trang bị chip Helio G85 chuyên game, pin dung lượng lên tới 6000mAh, realme narzo 30A sẽ cùng bạn khai phá sức mạnh hiệu năng cực đỉnh.\r\n\r\n\r\nMô tả sản phẩm', 1, '2021-10-15 17:00:00'),
(32, 'Realme 8 Pro 8GB - 128GB', 5, 1, 7390000, '637547069429810245_realme-8-pro-xanh-1.jpg', 'Realme 8 Pro với camera độ phân giải lên tới 108MP, mang đến cho bạn những hình ảnh và thước phim chân thực nhất. Bên cạnh đó cấu hình ấn tượng nhờ bộ vi xử lý Snapdragon 720G sẽ tạo nên dấu ấn sức mạnh đỉnh cao trong một thiết kế mỏng nhẹ.', 0, '2021-11-15 17:00:00'),
(33, 'Bao da Samsung Galaxy S21 Ultra Clear View', 4, 5, 1190000, '637463871650586967_bao-da-samsung-galaxy-s21-ultra-bac-1.jpg', 'Được chế tác từ da thuộc Châu Âu đem lại vẻ đẹp và cảm nhận sang trọng, tinh tế\r\nNắp gập có cảm ứng thông minh giúp tự động tắt bật màn hình khi đóng mở nắp bao da', 0, '2021-11-01 17:00:00'),
(31, 'Realme C21y 3GB - 32GB', 5, 1, 3490000, '637679929924582036_realme-c21y-xanh-1.jpg', 'Trải nghiệm mượt mà suốt cả ngày nhờ viên pin dung lượng cao 5000mAh, tận hưởng mọi nội dung trên màn hình lớn 6,5 inch cực đã, thỏa sức sáng tạo với bộ 3 camera chất lượng, realme C21Y sẽ khiến cho mỗi ngày của bạn trôi qua đầy hứng khởi.', 1, '2021-10-31 17:00:00'),
(29, 'Ốp lưng iPhone 13 Pro Silicone Case with MagSafe', 1, 5, 1590000, '637680276274009468_op-lung-iphone-13-pro-silicone-case-with-magsafe-xanh-1.jpg', 'Ngoài tác dụng là phụ kiện giúp iPhone 13 Pro tránh khỏi lực tác động khi va đập, ốp lưng Silicone Case with MagSafe do Apple thiết kế và sản xuất còn giúp người dùng cầm nắm bớt trơn trượt hơn, hạn chế sự tác động của mồ hôi và dấu vân tay khi chúng ta trên tay thiết bị', 0, '2021-11-11 12:49:01'),
(30, 'Tai nghe không dây Mi TWS Earphones 2 Basic', 3, 4, 1590000, '637511426745141777_mi-true-wireless-earphones-2-basic-1.jpg', 'Mi True Earphone 2 Basic là mẫu tai nghe không dây lý tưởng nhất hiện tại với thời lượng pin lên đến 20 giờ liên tục, hỗ trợ đàm thoại rõ ràng nhờ micro kép có tính năng khử ồn môi trường. Sản phẩm sẽ tự động ghép đôi và tự động kết nối khi đặt gần smartphone, đồng thời cho chất lượng âm thanh tuyệt vời nhờ loa 14,2mm.', 1, '2021-11-15 17:00:00'),
(26, 'Xiaomi 11 Lite 5G NE 8GB - 256GB', 3, 1, 10490000, '637683424578999139_00773653 - 00773656-1.jpg', 'Không chỉ là một chiếc điện thoại, Xiaomi 11 Lite 5G NE xứng đáng được gọi là biểu tượng thời trang trong giới smartphone, nơi bạn được cảm nhận sự thanh tú và tinh tế đến từng đường nét, cùng với đó là sức mạnh không ngờ, kết nối 5G siêu tốc độ, làm chủ tương lai.', 1, '2021-11-11 12:35:11'),
(27, 'Samsung Galaxy S21 Ultra 128GB', 2, 1, 25990000, '637462630853935725_ss-s21-ultra-den-1.jpg', 'Samsung Galaxy S21 Ultra 5G mang đến cuộc cách mạng trong nhiếp ảnh với khả năng tạo ra kiệt tác dễ dàng hơn bao giờ hết; ngoài ra máy còn sở hữu bộ vi xử lý nhanh nhất, màn hình đẹp nhất, kết nối 5G và thời lượng pin thoải mái suốt cả ngày', 1, '2021-11-15 17:00:00'),
(28, 'iPhone 12 Pro Max 128GB', 1, 1, 30999000, '637382725406081030_ip-12-pro-max-vang-1.jpg', 'Trùm cuối” của dòng iPhone 12 đã xuất hiện. iPhone 12 Pro Max là chiếc iPhone có màn hình lớn nhất từ trước đến nay, mang trên mình bộ vi xử lý mạnh nhất, camera đẳng cấp pro cùng kết nối 5G siêu tốc, cho bạn những trải nghiệm tuyệt vời chưa từng có.', 1, '2021-11-12 17:00:00'),
(35, 'Realme C11 (2021)', 5, 1, 2990000, 'realme-c11-2021-blue-1-600x600.jpg', 'Các dòng smartphone giá rẻ ngày càng được ưa chuộng trên thị trường di động, nắm bắt được nhu cầu đó Realme cũng đã cho ra mắt chiếc điện thoại Realme C11 (2021) là một phiên bản đồng tên gọi với Realme C11 ra mắt trước đó.\r\n \r\nNgắm nhìn mọi thứ qua màn hình rộng lớn\r\nRealme C11 (2021) xuất hiện với thiết kế các cạnh viền cong tròn, ôm gọn thân máy quen thuộc. Mặt trước trang bị công nghệ màn hình IPS LCD kích thước 6.5 inch, tỷ lệ khung hình 20:9 và khả năng mở rộng góc nhìn giúp máy hiển thị mọi thứ sắc nét, rõ ràng.', 0, '2021-11-24 07:37:14'),
(41, 'Điện thoại OPPO Reno6 Z 5G', 4, 1, 9490000, 'oppo-reno6-z-5g-aurora-1-600x600.jpg', 'Reno6 Z 5G đến từ nhà OPPO với hàng loạt sự nâng cấp và cải tiến không chỉ ngoại hình bên ngoài mà còn sức mạnh bên trong. Đặc biệt, chiếc điện thoại được hãng đánh giá “chuyên gia chân dung bắt trọn mọi cảm xúc chân thật nhất”, đây chắc chắn sẽ là một “siêu phẩm\" mà bạn không thể bỏ qua.\r\nBộ 3 camera chuyên nghiệp - Mỗi cảm xúc, một chân dung\r\nHệ thống camera sau được trang bị tối tân, trong đó có camera chính 64 MP, camera góc siêu rộng 8 MP và camera macro 2 MP cùng camera trước 32 MP luôn sẵn sàng bắt trọn mọi cảm xúc trong khung hình, giúp người dùng thoải mái ghi lại những khoảnh khắc trong cuộc sống một cách ấn tượng nhất.', 0, '2021-12-17 11:18:39'),
(43, 'Oppo Watch 41mm dây silicone đen', 4, 3, 4013000, 'oppo-watch-41mm-day-silicone-den-thumb-1-1-600x600.jpg', 'Thiết kế đẹp mắt, sang trọng\r\nĐồng hồ thông minh Oppo Watch màu đen phiên bản 41mm sử dụng mặt đồng hồ dạng hình vuông với 4 góc bo tròn nhẹ, màn hình AMOLED 1.6 inch (320 x 360 pixels) cùng mật độ điểm ảnh 326ppi cho chất lượng hiển thị cực kì rõ nét. Dây đeo silicone tạo cảm giác vô cùng mềm mại, không bị đau khi đeo lâu.\r\n\r\nOppo Watch mang nhiều điểm khá giống với Apple watch, tuy vậy vẫn có một số điểm khác như:\r\n\r\n+ Ở cạnh trái là loa dùng để phát nhạc và thực hiện nghe gọi.\r\n\r\n+ Ở cạnh phải là 2 phím cứng vật lý, không có núm xoay Digital Crown như Apple Watch.\r\n\r\n+ Ở mặt sau trang bị các đèn cảm biến và logo của Oppo.', 1, '2021-12-17 11:23:28'),
(44, 'Ốp lưng iPhone 11 Da Spigen La Manon', 1, 5, 869000, 'op-lung-iphone-11-da-spigen-la-manon-nau-121121-101048-600x600.jpg', 'Đặc điểm nổi bật\r\n\r\nKiểu dáng thời trang và đẹp mắt.\r\nThiết kế vừa vặn và ôm sát thân máy.\r\nDễ dàng tháo/lắp ốp vào máy.', 0, '2021-12-17 11:37:01'),
(52, 'Laptop Apple MacBook Pro M1 2020 8GB/256GB (MYDA2SA/A)', 1, 2, 33490000, 'macbook-pro-m1-2020-silver-600x600.jpg', 'Apple Macbook Pro M1 2020 sở hữu thiết kế sang trọng kế thừa từ các thế hệ trước và bên trong là một cấu hình ấn tượng từ con chip M1 lần đầu tiên xuất hiện trên MacBook Pro, hiệu năng CPU của máy tăng đến 2.8 lần, hiệu năng GPU tăng 5 lần.\r\nThiết kế mỏng nhẹ, cao cấp\r\nVẫn là thiết kế kim loại nguyên khối thường thấy ở các thế hệ trước, phiên bản MacBook Pro luôn mang lại một ngoại hình sang trọng đẳng cấp, mỏng nhẹ chỉ 15.6 mm từ độ dày, trọng lượng 1.4 kg có thể tự tin đồng hành mọi lúc, cùng bạn đến bất cứ đâu mà bạn muốn như đi học, đi chơi, đi công tác,...', 1, '2021-12-22 06:01:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
