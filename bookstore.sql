-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 06:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publishing_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `publishing_year` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `sup_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `alias`, `publishing_company`, `weight`, `size`, `author`, `pages`, `image`, `price`, `publishing_year`, `description`, `cate_id`, `sup_id`, `created_at`, `updated_at`) VALUES
(1, 'Pierre Và Jean', 'pierre-va-jean', 'Văn Học', '260g', '14 x 21 cm', 'Guy De Maupassant', 234, 'pierreandjean.jpeg', 68000, 2018, '<p><strong>Pierre V&agrave; Jean</strong></p>\r\n\r\n<p>Pierre v&agrave; Jean l&agrave; c&aacute;c con trai của G&eacute;r&ocirc;me Roland, một thợ kim ho&agrave;n đ&atilde; r&uacute;t lui về Le Havre, v&agrave; vợ l&agrave; Louise. Pierre l&agrave;m b&aacute;c sĩ, v&agrave; Jean l&agrave; một luật sư. N&oacute; kể lại c&acirc;u chuyện của một gia đ&igrave;nh người Ph&aacute;p m&agrave; cuộc sống được thay đổi khi L&eacute;on Mar&eacute;chal, một người bạn gia đ&igrave;nh đ&atilde; chết, l&agrave; thừa kế của &ocirc;ng đến Jean.</p>\r\n\r\n<p>Điều n&agrave;y khi&ecirc;u kh&iacute;ch Pierre nghi ngờ sự trung thực của mẹ m&igrave;nh v&agrave; t&iacute;nh hợp ph&aacute;p của anh trai của &ocirc;ng. Pierre ph&aacute;t hiện ra rằng l&yacute; thuyết của &ocirc;ng về t&iacute;nh hợp ph&aacute;p của anh trai l&agrave; ch&iacute;nh x&aacute;c khi &ocirc;ng ph&aacute;t hiện ra mẹ của &ocirc;ng đ&atilde; trốn v&agrave; n&oacute;i dối về một ch&acirc;n dung của Mar&eacute;chal v&agrave; thư t&igrave;nh y&ecirc;u của m&igrave;nh với c&ocirc; ấy.</p>\r\n\r\n<p>Trong l&uacute;c đ&oacute;, sự nghiệp của Jean v&agrave; cuộc sống t&igrave;nh y&ecirc;u cải thiện trong qu&aacute; tr&igrave;nh của cuốn tiểu thuyết trong khi Pierre, cuộc sống trở n&ecirc;n tồi tệ hơn đ&aacute;ng kể. Bởi lời buộc tội của anh trai v&igrave; ganh tỵ, Pierre tiết lộ cho Jean những g&igrave; &ocirc;ng đ&atilde; học được. Tuy nhi&ecirc;n, kh&ocirc;ng giống như Pierre, Jean cung cấp t&igrave;nh y&ecirc;u v&agrave; bảo vệ mẹ m&igrave;nh.</p>\r\n\r\n<p>Cuốn tiểu thuyết đ&oacute;ng cửa với sự khởi đầu của Pierre. V&igrave; vậy, cuốn tiểu thuyết được tổ chức xung quanh sự xuất hiện kh&ocirc;ng mời của một sự thật, đ&agrave;n &aacute;p của n&oacute; v&igrave; lợi &iacute;ch của gia đ&igrave;nh li&ecirc;n tục v&agrave; mua lại của cải, v&agrave; trục xuất từ gia đ&igrave;nh của con trai hợp ph&aacute;p.</p>', 5, 10, '2019-03-24 10:19:28', '2019-03-25 07:10:43'),
(2, 'Sợ nắng ban mai', 'so-nang-ban-mai', 'Kim Đồng', '180g', '20 x 13 cm', 'Châu Hoài Thanh', 211, 'nangbanmai.jpeg', 50000, 2019, '<p>Tuổi thơ l&agrave; v&ugrave;ng đất k&igrave; diệu. Với cậu b&eacute; L&acirc;m, tuổi thơ được chia l&agrave;m hai nửa: Một nửa ở v&ugrave;ng cửa biển ngh&egrave;o quanh năm b&atilde;o tố, nơi cậu trải qua những th&aacute;ng ng&agrave;y v&ocirc; lo với hai người bạn th&acirc;n. Nửa kia ở phố thị hiện đại, nơi L&acirc;m bắt đầu va chạm với những x&uacute;c cảm trưởng th&agrave;nh, học những b&agrave;i học qu&iacute; về t&igrave;nh bạn, t&igrave;nh cảm gia đ&igrave;nh.</p>\r\n\r\n<p>Thế giới trẻ thơ trong Sợi nắng ban mai trong s&aacute;ng, gần gũi v&agrave; cảm động. Mỗi c&acirc;u chuyện nhỏ đều chất chứa c&aacute;c kỉ niệm m&agrave; ch&uacute;ng ta dễ d&agrave;ng đồng cảm. C&oacute; l&uacute;c đầy ắp niềm vui với những tr&ograve; nghịch ngợm, c&oacute; l&uacute;c l&agrave; nỗi buồn khi mắc phải lầm lỗi, c&oacute; l&uacute;c l&agrave; sự tiếc nuối chia xa... Lời văn nhẹ nh&agrave;ng ch&acirc;n thật đưa ta qua những rung động đầu đời, như lắng nghe bản nhạc đẹp đẽ giữa ban mai.</p>', 9, 4, '2019-04-04 01:29:48', '2019-04-04 01:29:48'),
(3, 'Dế mèn phiêu lưu ký', 'de-men-phieu-luu-ky', 'Kim Đồng', '280g', '13 x 21 cm', 'Tô Hoài', 291, 'demen.jpeg', 65000, 2019, '<p>Ch&uacute; Dế M&egrave;n c&ugrave;ng bạn b&egrave; đi ngao du khắp nơi tr&ecirc;n mặt đất. Trải qua nhiều nguy hiểm v&agrave; gian tru&acirc;n tr&ecirc;n mỗi bước đường, Dế M&egrave;n đ&atilde; nhận được những b&agrave;i học s&acirc;u sắc. V&agrave; cũng trong h&agrave;nh tr&igrave;nh n&agrave;y, Dế M&egrave;n đ&atilde; gặp gỡ, kết nghĩa với những người bạn đồng t&acirc;m c&ugrave;ng ch&iacute; hướng, kh&aacute;t vọng tự do v&agrave; hạnh ph&uacute;c.</p>', 9, 4, '2019-04-04 01:31:31', '2019-04-04 01:31:31'),
(4, 'Tết xưa thơ bé', 'tet-xua-tho-be', 'Lao Động', '150g', '12 x 17 cm', 'Hương thị', 154, 'tetxuathobe.jpeg', 36000, 2018, '<p>Tết sắp đến! Trẻ con h&aacute;o hức mong chờ những quần mới, &aacute;o đẹp, gi&agrave;y d&eacute;p, b&oacute;ng bay, tiền mừng tuổi, b&aacute;nh chưng&hellip; m&agrave; đ&acirc;u hay nỗi l&ograve;ng người lớn bộn bề lo toan &ldquo;tết nhất&rdquo;. V&agrave; rồi, d&ugrave; thế n&agrave;o, Tết lu&ocirc;n đ&uacute;ng hẹn, đến c&ugrave;ng năm mới, trong gi&acirc;y ph&uacute;t giao thừa thi&ecirc;ng li&ecirc;ng với ước nguyện lu&ocirc;n c&oacute; thật nhiều niềm vui v&agrave; điều tốt l&agrave;nh&hellip;</p>\r\n\r\n<p>L&agrave; những mảnh k&iacute; ức nhỏ b&eacute;, ri&ecirc;ng tư về những c&aacute;i Tết ấu thơ, nhưng qua từng trang s&aacute;ch, ng&agrave;y Tết v&agrave; m&ugrave;a xu&acirc;n của l&ograve;ng người, của đất trời, của cảnh vật&hellip; vẫn hiển hiện lấp l&aacute;nh&hellip;</p>', 9, 4, '2019-04-04 01:33:32', '2019-04-04 01:33:32'),
(5, 'Nhớ ơi là tết', 'nho-oi-la-tet', 'Kim Đồng', '120g', '12 x 17 cm', 'Thái Hương Lên', 127, 'nhooilatet.jpeg', 28000, 2019, '<p>&ldquo;&hellip; Dưới l&agrave;n nước trong vắt, những phiến l&aacute; xanh được cọ rửa cẩn thận để chờ đến thời điểm quan trọng. C&aacute;i r&eacute;t thấu da của đợt gi&oacute; m&ugrave;a đ&ocirc;ng bắc khiến đ&ocirc;i ch&acirc;n, đ&ocirc;i tay thiếu nữ dầm trong l&agrave;n nước buốt trở n&ecirc;n đỏ rực. Giọng cười trong vắt của c&aacute;c c&ocirc; l&agrave;m bừng s&aacute;ng kh&ocirc;ng gian, xua tan vẻ ảm đạm của bầu trời cuối đ&ocirc;ng u &aacute;m.&rdquo;</p>\r\n\r\n<p>Ng&agrave;y cuối năm, những d&ograve;ng văn dịu &ecirc;m của Th&aacute;i Hương Li&ecirc;n đưa ta rời phố chật, dẫn ta về qu&ecirc; xa, để ta gặp lại m&igrave;nh mỗi độ hương sắc buổi chợ phi&ecirc;n mang c&aacute;i Tết đến từng nh&agrave;, mỗi lần ngang qua c&aacute;nh đồng bảng lảng sương chiều, mỗi khuya nghe tiếng gi&oacute; l&ugrave;a xao x&aacute;c, mỗi sớm mai g&aacute;nh h&agrave;ng rong qua cửa b&aacute;o hiệu m&ugrave;a mới sang&hellip;</p>', 9, 4, '2019-04-04 01:35:10', '2019-04-04 01:35:10'),
(6, 'Công chúa kem dâu', 'cong-chua-kem-dau', 'Kim đồng', '120g', '20 x 13 cm', 'Vân Vũ', 130, 'conchuakemdau.jpg', 35000, 2018, '<p>Những m&oacute;n ăn mẹ nấu l&agrave; nỗi thống khổ của con b&eacute; Kem D&acirc;u. Canh s&uacute;p được c&ocirc; nh&oacute;c gọi l&agrave; D&ograve;ng s&ocirc;ng buồn. Thịt kho mang t&ecirc;n Thảm họa động vật. C&ograve;n m&oacute;n cơm c&oacute; t&ecirc;n Sa mạc kh&ocirc; cằn. Đu đủ tr&aacute;ng miệng ch&iacute;nh l&agrave; C&aacute;i kết đ&aacute;ng sợ.</p>\r\n\r\n<p>B&ugrave; đắp cho &ldquo;nỗi đau&rdquo; của Kem D&acirc;u, &ocirc;ng ngoại Bắp Nổ đ&atilde; m&agrave;y m&ograve; chế tạo hai đ&ocirc;i c&aacute;nh. Kinh ngạc chưa, hai &ocirc;ng ch&aacute;u đ&atilde; bay l&ecirc;n trời.</p>\r\n\r\n<p>Chuyến phi&ecirc;u lưu bất ngờ đ&atilde; đưa hai &ocirc;ng ch&aacute;u đến với thế giới tuyệt vời, nơi m&agrave; ai cũng được sống tự do theo &yacute; m&igrave;nh.</p>\r\n\r\n<p>Nhưng, mọi chuyện kh&ocirc;ng dễ d&agrave;ng như Kem D&acirc;u tưởng&hellip;</p>', 9, 4, '2019-04-04 01:37:37', '2019-04-04 01:37:37'),
(7, 'Xin chào thanh xuân', 'xin-chao-thanh-xuan', 'Kim Đồng', '200g', '13 x 20 cm', 'Quách Thái Di', 158, 'xinchaothanhxuan.jpeg', 40000, 2018, '<p>Thanh xu&acirc;n của ta gắn liền với kỉ niệm g&igrave;? Một &ocirc; cửa sổ mở ra khung trời xanh thẳm. Một đ&ocirc;i mắt d&otilde;i nh&igrave;n khi gi&oacute; biển l&ugrave;a trong t&oacute;c. Một giọng n&oacute;i &ecirc;m nhẹ từ ai đ&oacute; tr&ecirc;n ngọn đồi lấp l&aacute;nh &aacute;nh sao&hellip;</p>\r\n\r\n<p>Ta ngỡ tất cả những điều đẹp đẽ ấy m&atilde;i thuộc về m&igrave;nh. Thế nhưng, chỉ cần một c&aacute;i chớp mắt, người đ&atilde; xa, tr&agrave; đ&atilde; nguội, những đ&oacute;a hoa rực rỡ ch&oacute;i chang rốt cuộc cũng bay về trời. B&aacute;nh răng của cỗ m&aacute;y thời gian cứ lạnh l&ugrave;ng quay. Những v&ocirc; tư của ng&agrave;y h&ocirc;m nay rồi sẽ nhanh ch&oacute;ng trở th&agrave;nh chuyện cũ.</p>\r\n\r\n<p>Xin ch&agrave;o thanh xu&acirc;n đưa ch&uacute;ng ta sống th&ecirc;m một lần th&aacute;ng năm đẹp nhất đời người. Cơn mưa bỏ lại, t&igrave;nh y&ecirc;u bỏ lại, nhưng dư vị tuổi hoa ni&ecirc;n th&igrave; c&ograve;n m&atilde;i. Sẽ nhớ, sẽ buồn, sẽ vấn vương. Nhưng khi tất cả đ&atilde; trở th&agrave;nh k&iacute; ức về ng&agrave;y h&ocirc;m qua, ta sẽ nhận ra rằng: M&igrave;nh đ&atilde; từng c&oacute; qu&atilde;ng đời s&aacute;ng trong v&agrave; tươi đẹp như thế.</p>', 9, 4, '2019-04-04 01:39:38', '2019-04-04 01:39:38'),
(8, 'Đồi Gai', 'doi-gai', 'Kim Đồng', '740g', '21 x15 cm', 'Pam Smy', 552, 'doigai.jpg', 139000, 2018, '<p>Ella vừa chuyển nh&agrave; đến một th&agrave;nh phố mới đầy lạ lẫm. Từ căn ph&ograve;ng ri&ecirc;ng tr&ecirc;n tầng cao nhất, Ella c&oacute; thể thấy r&otilde; to&agrave; nh&agrave; đổ n&aacute;t, bị bỏ hoang của c&ocirc; nhi viện Đồi Gai, nơi b&oacute;ng h&igrave;nh của một c&ocirc; b&eacute; bỗng tho&aacute;ng xuất hiện b&ecirc;n khung cửa sổ. Quyết t&acirc;m kết bạn với c&ocirc; b&eacute; lạ mặt kia, Ella dần kh&aacute;m ph&aacute; ra qu&aacute; khứ đen tối của Đồi Gai.</p>\r\n\r\n<p>1982</p>\r\n\r\n<p>Mary l&agrave; một đứa trẻ mồ c&ocirc;i sống tại c&ocirc; nhi viện Đồi Gai, nơi chuẩn bị đ&oacute;ng cửa để duy tu. Khi tất cả lũ trẻ sống c&ugrave;ng c&ocirc; nhi viện đ&atilde; được nhận nu&ocirc;i hoặc chuyển chỗ ở, Mary bị bỏ lại đơn độc với một kẻ bắt nạt kh&oacute; lường. Kế hoạch trả th&ugrave; của c&ocirc; b&eacute; sẽ c&oacute; t&aacute;c động m&atilde;i m&atilde;i l&ecirc;n kẻ bắt nạt kia, Mary, v&agrave; ch&iacute;nh bản th&acirc;n Đồi Gai.</p>\r\n\r\n<p>&ldquo;Đồi Gai l&agrave; một t&aacute;c phẩm tuyệt vời của Pam Smy. C&aacute;c bức vẽ chất chứa t&acirc;m trạng, những từ ngữ ngập tr&agrave;n căng thẳng, v&agrave; cảm x&uacute;c l&agrave; mạnh mẽ hơn cả - v&igrave; n&oacute; được t&aacute;c giả h&eacute; lộ từng ch&uacute;t, từng ch&uacute;t một&hellip; Thật qu&aacute; đỗi r&ugrave;ng rợn.&rdquo; (Philip Pullman)</p>', 5, 4, '2019-04-04 01:41:31', '2019-04-04 01:41:31'),
(9, 'Cây vĩ cầm Ave Maria', 'cay-vi-cam-ave-maria', 'Kim Đồng', '300g', '15 x 21 cm', 'Yoshiko Kagawa', 230, 'CayViCamAveMaria.jpeg', 70000, 2018, '<p>C&ocirc; b&eacute; 14 tuổi Asuka bắt gặp một c&acirc;y vĩ cầm ph&aacute;t ra &acirc;m thanh k&igrave; lạ ở cửa h&agrave;ng nhạc cụ. Đ&oacute; l&agrave; đồ vật của Hannah, c&ocirc; b&eacute; người Do Th&aacute;i từng l&agrave; th&agrave;nh vi&ecirc;n d&agrave;n nhạc ở Trại tập trung Auschwitz. D&ugrave; trong ho&agrave;n cảnh khắc nghiệt đến thế n&agrave;o, Hannah vẫn lu&ocirc;n nghĩ tới bạn b&egrave; v&agrave; kh&ocirc;ng bao giờ qu&ecirc;n l&ograve;ng nhiệt th&agrave;nh d&agrave;nh cho &acirc;m nhạc. T&igrave;nh cảm của Hannah chạm tới cả tr&aacute;i tim của c&ocirc; b&eacute; Nhật Bản Asuka&hellip;</p>\r\n\r\n<p>Một c&acirc;u chuyện cảm động sinh ra từ một c&acirc;y vĩ cầm đ&atilde; kinh qua ngọn lửa chiến tranh, bị vận mệnh bất hạnh tr&ecirc;u đ&ugrave;a.</p>\r\n\r\n<p>&ldquo;&Acirc;m nhạc cứu rỗi ch&uacute;ng ta khỏi tr&aacute;i tim t&agrave; &aacute;c. Chỉ cần tận hưởng &acirc;m nhạc một c&aacute;ch đơn thuần, ch&uacute;ng ta c&oacute; thể vượt qua mọi r&agrave;o cản ng&ocirc;n ngữ, quốc gia, thậm ch&iacute; l&agrave; cả chiến tranh nữa.&rdquo;</p>', 5, 4, '2019-04-04 01:43:23', '2019-04-04 01:43:23'),
(10, 'Robinson Crusoe', 'robinson-crusoe', 'Kim Đồng', '160g', '13 x 19 cm', 'Daniel Defoe', 203, 'RobinsonCrusoe.jpeg', 35000, 2016, '<p>&ldquo;Robinson Crusoe&rdquo;, người thủy thủ xứ York, sau nhiều h&agrave;nh tr&igrave;nh gian nan tr&ecirc;n biển đ&atilde; phi&ecirc;u bạt đến một h&ograve;n đảo hoang. Anh bắt đầu cuộc sống tr&ecirc;n đảo với sự đe dọa của th&uacute; dữ, b&atilde;o lũ, những con người hoang d&atilde; rất c&oacute; thể l&agrave; kẻ th&ugrave;, ốm đau bệnh tật... V&agrave; Robinson đ&atilde; lưu lạc tr&ecirc;n đảo vắng suốt hai mươi t&aacute;m năm r&ograve;ng. &ldquo;Robinson Crusoe&rdquo; l&agrave; một t&aacute;c phẩm chứa chan tinh thần lạc quan y&ecirc;u đời, l&agrave; b&agrave;i ca ca ngợi sức lao động, ca ngợi sức mạnh của con người trong cuộc đấu tranh sinh tồn với thi&ecirc;n nhi&ecirc;n.</p>', 5, 4, '2019-04-04 01:45:03', '2019-04-04 01:45:03'),
(11, 'Hành Trình Tới Biển Sông', 'hanh-trinh-toi-bien-song', 'Kim Đồng', '300g', '13 x 19 cm', 'Eva Ibbotson', 367, 'hanhtrinhtoibiensong.jpeg', 58000, 2016, '<p>Được gửi đến sống c&ugrave;ng những người họ h&agrave;ng xa ở một đồn điền cao su tại Brazil, Maia phải rời xa ng&ocirc;i trường nội tr&uacute; ấm c&uacute;ng ở Lu&acirc;n Đ&ocirc;n, theo d&ograve;ng Amazon, nơi được gọi l&agrave; Biển S&ocirc;ng, để đến với khu rừng nhiệt đới hoang d&atilde; v&agrave; v&ocirc; c&ugrave;ng b&iacute; hiểm. Đi c&ugrave;ng với c&ocirc; Minton, người gia sư nghi&ecirc;m khắc, Maia tưởng sẽ t&igrave;m thấy những bức r&egrave;m hoa lan v&agrave; những con vẹt đu&ocirc;i d&agrave;i sặc sỡ. Thay v&agrave;o đ&oacute;, c&ocirc; b&eacute; đ&atilde; t&igrave;m thấy những th&agrave;nh vi&ecirc;n c&aacute;u kỉnh v&agrave; độc &aacute;c của gia đ&igrave;nh Carter, những người l&agrave;m cho cuộc sống của c&ocirc; gần như kh&ocirc;ng thể chịu nổi. Chỉ khi bị cuốn v&agrave;o c&acirc;u chuyện b&iacute; mật xoay quanh một cậu b&eacute; da đỏ, một diễn vi&ecirc;n nhỏ tuổi đang nhớ nh&agrave; quay quắt, v&agrave; một người thừa kế t&agrave;i sản bị mất t&iacute;ch, Maia mới thấy m&igrave;nh đang ở giữa chuyến phi&ecirc;u lưu đến Amazon m&agrave; c&ocirc; từng mơ tới.</p>\r\n\r\n<p>T&aacute;c phẩm đoạt Giải V&agrave;ng Giải thưởng S&aacute;ch Netsl&eacute; Smarties Book Prize, giải nh&igrave; Giải thưởng Whitbread d&agrave;nh cho t&aacute;c phẩm xuất sắc viết cho trẻ em năm 2001. T&aacute;c phẩm cũng v&agrave;o v&ograve;ng chung khảo Giải thưởng Carnegie Medal năm 2001.</p>', 5, 4, '2019-04-04 01:46:46', '2019-04-04 01:46:46'),
(12, 'Thầy Thiên Đức', 'thay-thien-duc', 'Kim Đồng', '380g', '14 x 23 cm', 'Trần Việt Trung', 280, 'thaythienduc.jpeg', 63000, 2016, '<p>Cuốn s&aacute;ch Thầy Thi&ecirc;n Đức của t&aacute;c giả Trần Việt Trung kể về vị thầy l&agrave; nguy&ecirc;n mẫu c&oacute; thật, l&agrave;m sống lại một thế hệ tr&iacute; thức của nền văn h&oacute;a xưa - nền văn h&oacute;a dựa tr&ecirc;n nền tảng Nho học với những gi&aacute; trị ri&ecirc;ng. Ở đ&oacute; Nho - Y - L&iacute; - Số l&agrave; bốn bộ m&ocirc;n gắn b&oacute; rất chặt chẽ với đời sống cộng đồng, đ&aacute;p ứng được kh&aacute; đầy đủ những nhu cầu thường gặp trong cuộc sống của mỗi con người cũng như của to&agrave;n x&atilde; hội. V&agrave; thật th&uacute; vị, thầy Thi&ecirc;n Đức l&agrave; một người, c&oacute; thể n&oacute;i, đ&atilde; th&acirc;u t&oacute;m được cả bốn bộ m&ocirc;n ấy trong h&agrave;nh trang cuộc đời m&igrave;nh. V&igrave; vậy, t&igrave;m hiểu về thầy Thi&ecirc;n Đức kh&ocirc;ng chỉ để biết về một con người cụ thể, m&agrave; c&ograve;n l&agrave; dịp để, qua đ&oacute;, ch&uacute;ng ta biết th&ecirc;m nhiều kh&iacute;a cạnh trong đời sống tinh thần của c&aacute;c bậc tiền nh&acirc;n, mang đậm dấu ấn Việt, t&acirc;m thức Việt, bản sắc Việt.</p>\r\n\r\n<p>Đọc cuốn s&aacute;ch, độc giả cũng sẽ t&igrave;m thấy cho ri&ecirc;ng m&igrave;nh những b&agrave;i học l&agrave;m người s&acirc;u sắc &quot;c&aacute;i t&acirc;m của m&igrave;nh phải ch&iacute;nh, kh&ocirc;ng được huyễn hoặc người kh&aacute;c hay tự huyễn hoặc m&igrave;nh, suy ngẫm kĩ lưỡng, ph&aacute;t ng&ocirc;n thận trọng, kh&ocirc;ng khoa trương, ganh đua hơn k&eacute;m&quot;. Cuốn s&aacute;ch cũng khiến ta thấm th&iacute;a &ldquo;trong đời, c&oacute; hai nghề cao qu&yacute; m&agrave; ai cũng trọng l&agrave; thầy gi&aacute;o v&agrave; thầy thuốc&rdquo;, một người thầy chữa cho ta th&acirc;n bệnh v&agrave; một người thầy khiến ta được mở mang tr&iacute; tuệ, đến với ch&acirc;n trời tri thức.</p>', 10, 4, '2019-04-04 01:49:16', '2019-04-04 01:49:16'),
(13, 'Lịch Sử Nước Việt Bằng Tranh', 'lich-su-nuoc-viet-bang-tranh', 'Kim Đồng', '320g', '30 x 18 cm', 'Nhiều tác giả', 75, 'lichsunuocvietbangtranh.jpg', 68000, 2018, '<p>Cuốn s&aacute;ch điểm những mốc cơ bản v&agrave; nổi bật nhất, những h&igrave;nh dung kh&aacute;i qu&aacute;t nhất của lịch sử Việt Nam từ thời hồng hoang dựng nước cho đến tận ng&agrave;y nay. Khu&ocirc;n khổ s&aacute;ch theo dạng paranoma, trải d&agrave;i như một d&ograve;ng chảy li&ecirc;n tục. C&aacute;c tranh minh họa được họa sĩ đầu tư rất c&ocirc;ng phu, kĩ lưỡng, mang đậm chất lịch sử. Với giọng văn kể chuyện nhẹ nh&agrave;ng, s&aacute;ng r&otilde;, Lược sử nước Việt bằng tranh sẽ gi&uacute;p c&aacute;c em hiểu v&agrave; y&ecirc;u th&ecirc;m lịch sử nước nh&agrave;.</p>', 10, 4, '2019-04-04 01:51:33', '2019-04-04 01:51:33'),
(14, 'Trẻ em thời chiến', 'tre-em-thoi-chien', 'Kim Đồng', '600g', '23 x 22 cm', 'Nhiều tác giả', 111, 'treemthoichien.gif', 150000, 2013, '<p>Giới thiệu những bức ảnh tr&agrave;n đầy vẻ hồn nhi&ecirc;n, ng&acirc;y thơ nhưng vẫn rất rắn rỏi của trẻ em, học sinh Việt Nam thời chiến tranh chống Mĩ. Vượt l&ecirc;n những khắc nghiệt của chiến tranh, c&aacute;c em vẫn chăm ngoan v&agrave; học giỏi, nhiều t&agrave;i năng tuổi thơ Việt Nam vẫn vươn l&ecirc;n v&agrave; tỏa s&aacute;ng.</p>', 10, 4, '2019-04-04 01:53:53', '2019-04-04 01:53:53'),
(15, 'Sách tập viết lớp 1 - Tập một', 'sach-tap-viet-lop-1--tap-mot', 'Giáo Dục Việt Nam', '100g', '17 x 24 cm', 'Đặng Thị Lanh', 44, 'sachtapvietlop-tap1.jpeg', 2900, 2019, '<p>Tập Viết Lớp 1 (Tập 1) được bi&ecirc;n soạn b&aacute;m s&aacute;t chương tr&igrave;nh gi&aacute;o khoa Tiếng Việt lớp 1 do Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo ban h&agrave;nh.</p>\r\n\r\n<p>Tập s&aacute;ch giới thiệu những chữ c&aacute;i cơ bản trong bảng chữ c&aacute;i Tiếng Việt v&agrave; một số từ vựng Tiếng Việt quen thuộc. Mỗi chữ viết đều c&oacute; hướng dẫn từng n&eacute;t viết cụ thể gi&uacute;p học sinh dễ d&agrave;ng tập viết.</p>\r\n\r\n<p>Đặc biệt, tập s&aacute;ch c&ograve;n phần hướng dẫn tư thế ngồi viết v&agrave; c&aacute;ch cầm b&uacute;t gi&uacute;p c&aacute;c em học sinh học tập khoa học, hiệu quả m&agrave; kh&ocirc;ng ảnh hưởng đến sức khỏe.</p>', 13, 12, '2019-04-04 01:57:29', '2019-04-04 01:57:29'),
(16, 'Amazing Sciene 1', 'amazing-sciene-1', 'Giáo Dục', '170g', '28 x 21 cm', 'Nhiều tác giả', 60, 'Amazing_Science_1.jpg', 39000, 2018, '<p><a href=\"https://nhanvan.vn/tieng-anh/\">Học tiếng Anh</a>&nbsp;qua s&aacute;ch cho trẻ con gi&uacute;p b&eacute; học tập v&agrave; ph&aacute;t huy c&aacute;c kiến thức nền tảng về x&atilde; hội cũng giống như c&aacute;c m&ocirc;n học kh&aacute;c. Đọc s&aacute;ch gi&uacute;p khơi gơi tr&iacute; tưởng tượng v&agrave; niềm đam m&ecirc; so với ngoại ngữ của trẻ.&nbsp;</p>\r\n\r\n<p>S&aacute;ch tiếng Anh d&agrave;nh cho trẻ Amazing Science 1 cho học sinh lớp 1 l&agrave; tập s&aacute;ch đầu ti&ecirc;n thuộc bộ s&aacute;ch học tiếng Anh trẻ em cho học sinh tiểu học. Bộ s&aacute;ch n&agrave;y cung cấp những kĩ năng căn bản trong tiếng Anh c&ugrave;ng với, sử dụng v&agrave;o c&aacute;c kiến thức khoa học thường ng&agrave;y.</p>', 13, 12, '2019-04-04 01:59:32', '2019-04-04 01:59:32'),
(17, 'Amazing Science 2', 'amazing-science-2', 'Giáo Dục', '240 g', '28 x 21 cm', 'Nhiều tác giả', 94, 'Amazing_Science_2.jpg', 45500, 2018, '<p>Quyển Amazing Science 2 gồm nhiều chủ đề xoay quanh kiến thức khoa học cơ bản th&iacute;ch hợp với trẻ em Việt Nam&nbsp;<a href=\"https://nhanvan.vn/tieng-anh/\">học Tiếng Anh</a>&nbsp;th&ocirc;ng qua ng&ocirc;n từ khoa học. Mỗi b&agrave;i học được bi&ecirc;n soạn theo cấu tr&uacute;c th&ocirc;ng dụng LET&rsquo;S LEARN, LET&rsquo;S PRACTICE v&agrave; LET&rsquo;S MEMORIZE. C&aacute;c kiến thức b&agrave;i được viết theo kiểu nối tiếp từ quyển 1 đến quyển 5, hệ thống kiến thức ph&aacute;t triển liền mạch, theo đ&oacute; c&aacute;c từ ngữ khoa học được sử dụng xuy&ecirc;n suốt gi&uacute;p c&aacute;c em tăng dần vốn từ Tiếng Anh về khoa học tự nhi&ecirc;n một c&aacute;ch nhẹ nh&agrave;ng.</p>\r\n\r\n<p>Điểm mới của quyển Amazing Science 2 l&agrave; ch&uacute; trọng ph&aacute;t triển tư duy, khơi dậy khả năng s&aacute;ng tạo v&agrave; niềm đam m&ecirc; học Tiếng Anh của học sinh Tiểu học qua m&ocirc;n Khoa học. Với từ vựng đơn giản v&agrave; sinh động, c&aacute;c b&agrave;i học đi từ những t&igrave;nh huống thực tiễn trong cuộc sống chuyển ho&aacute; th&agrave;nh những kiến thức khoa học cơ bản ph&ugrave; hợp với nhận thức của học sinh Tiểu học. C&aacute;c dạng b&agrave;i tập, b&agrave;i thực h&agrave;nh phong ph&uacute; gi&uacute;p c&aacute;c em c&oacute; những trải nghiệm th&uacute; vị trong việc t&igrave;m hiểu, kh&aacute;m ph&aacute; v&agrave; giải quyết những vấn đề trong cuộc sống hằng ng&agrave;y.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i hi vọng th&ocirc;ng qua bộ s&aacute;ch Amazing Science, c&aacute;c em c&oacute; thể tự tin sử dụng ng&ocirc;n ngữ tiếng Anh để giải quyết c&aacute;c vấn đề của m&ocirc;n học cũng như ứng dụng v&agrave;o đời sống thực tiễn h&agrave;ng ng&agrave;y.</p>', 13, 12, '2019-04-04 02:01:11', '2019-04-04 02:01:11'),
(18, 'Amazing Science 3', 'amazing-science-3', 'Giáo Dục', '170g', '28 x 21 cm', 'Nhiều tác giả', 71, 'Amazing_Science_3.jpg', 35000, 2018, '<p><a href=\"https://nhanvan.vn/tieng-anh/\">Học tiếng Anh</a>&nbsp;qua s&aacute;ch cho trẻ con gi&uacute;p b&eacute; học tập v&agrave; ph&aacute;t huy c&aacute;c kiến thức nền tảng về x&atilde; hội cũng giống như c&aacute;c m&ocirc;n học kh&aacute;c. Đọc s&aacute;ch gi&uacute;p khơi gơi tr&iacute; tưởng tượng v&agrave; niềm đam m&ecirc; so với ngoại ngữ của trẻ. S&aacute;ch tiếng Anh d&agrave;nh tặng trẻ con Amazing Science 3 cho học tr&ograve; lớp 3 m&agrave; Alokiddy ngay sau đ&acirc;y l&agrave; một v&iacute; dụ điển h&igrave;nh khi dạy tiếng Anh cho trẻ. Alokiddy c&ograve;n chia sẻ rất rất nhiều s&aacute;ch hỗ trợ học tiếng anh mẫu gi&aacute;o bạn c&oacute; thể tham khảo nh&eacute;.</p>\r\n\r\n<p>S&aacute;ch tiếng Anh d&agrave;nh cho trẻ Amazing Science 3 cho học sinh lớp 3 l&agrave; tập s&aacute;ch đầu ti&ecirc;n thuộc bộ s&aacute;ch học tiếng Anh trẻ em cho học sinh tiểu học. Bộ s&aacute;ch n&agrave;y cung cấp những kĩ năng căn bản trong tiếng Anh c&ugrave;ng với, sử dụng v&agrave;o c&aacute;c kiến thức khoa học thường ng&agrave;y.</p>', 13, 12, '2019-04-04 02:02:11', '2019-04-04 02:02:11'),
(19, 'Tiếng Anh 9 Tập 1 - Sách Học Sinh', 'tieng-anh-9-tap-1--sach-hoc-sinh', 'Giáo Dục', '200g', '19 x 27 cm', 'Nhiều tác giả', 75, 'tienganh9tap1.gif', 40300, 2018, '<p>Tiếng Anh 9 - Tập 1 được bi&ecirc;n soạn xoay quanh hai chủ điểm gần gũi với học sinh : Our Lives v&agrave; Our Society. Mỗi chủ điểm được chia th&agrave;nh hai hoặc ba đơn vị b&agrave;i học tương ứng với c&aacute;c chủ đề gợi &yacute; trong chương tr&igrave;nh. Sau mỗi chủ điểm l&agrave; một b&agrave;i &ocirc;n tập trung v&agrave;o kiến thức ng&ocirc;n ngữ v&agrave; kĩ năng ng&ocirc;n ngữ học sinh đ&atilde; được học v&agrave; r&egrave;n luyện.</p>', 14, 12, '2019-04-04 02:04:55', '2019-04-04 02:04:55'),
(20, 'Tiếng Anh 9 Tập 2 - Sách Học Sinh', 'tieng-anh-9-tap-2--sach-hoc-sinh', 'Giáo Dục', '200g', '19 x 27 cm', 'Nhiều tác giả', 87, 'tienganh9tap2.gif', 42000, 2018, '<p><a href=\"https://nhanvan.vn/tieng-anh/\">Tiếng Anh</a>&nbsp;9 - Tập 2 được bi&ecirc;n soạn xoay quanh hai chủ điểm gần gũi với học sinh : Our Lives v&agrave; Our Society. Mỗi chủ điểm được chia th&agrave;nh hai hoặc ba đơn vị b&agrave;i học tương ứng với c&aacute;c chủ đề gợi &yacute; trong chương tr&igrave;nh. Sau mỗi chủ điểm l&agrave; một b&agrave;i &ocirc;n tập trung v&agrave;o kiến thức ng&ocirc;n ngữ v&agrave; kĩ năng ng&ocirc;n ngữ học sinh đ&atilde; được học v&agrave; r&egrave;n luyện.</p>', 14, 12, '2019-04-04 02:05:49', '2019-04-04 02:05:49'),
(21, 'Âm Nhạc Và Mĩ Thuật 6', 'am-nhac-va-mi-thuat-6', 'Giáo Dục', '200g', '17 x 24 cm', 'Nhiều tác giả', 160, 'âm_nhạc_mt_6.jpg', 11000, 2018, '<p>&Acirc;m nhạc l&agrave; nghệ thuật của &acirc;m thanh, c&oacute; t&iacute;nh truyền cảm trực tiếp, gồm &acirc;m thanh của giọng h&aacute;t v&agrave; &acirc;m thanh của c&aacute;c loại nhạc cụ.</p>\r\n\r\n<p>Về t&aacute;c dụng của &acirc;m nhạc, người ta ch&uacute; &yacute; đến t&iacute;nh hấp dẫn, t&iacute;nh tập hợp, t&iacute;nh cỗ vũ động vi&ecirc;n, t&iacute;nh li&ecirc;n tưởng, sự h&ograve;a nhập cộng đồng v&agrave; ph&aacute;t huy &oacute;c tưởng tượng, s&aacute;ng tạo, ...</p>', 14, 12, '2019-04-04 02:07:02', '2019-04-04 02:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Sách Văn Học - Lịch Sử', 0, '2019-03-23 22:40:56', '2019-03-23 22:40:56'),
(2, 'Sách giáo khoa', 0, '2019-03-23 22:41:27', '2019-03-23 22:41:27'),
(3, 'Sách Hay Nên Đọc', 0, '2019-03-23 22:41:43', '2019-03-23 22:41:43'),
(4, 'Sách Kham Thảo ĐH - CĐ', 0, '2019-03-23 22:42:10', '2019-03-23 22:53:12'),
(5, 'Văn Học Nước Ngoài', 1, '2019-03-24 10:10:04', '2019-03-24 10:10:04'),
(6, 'Sách hay mỗi ngày', 3, '2019-04-04 01:14:10', '2019-04-04 01:14:10'),
(7, 'Sách hay trong tuần', 3, '2019-04-04 01:14:40', '2019-04-04 01:14:40'),
(8, 'Sách hay trong tháng', 3, '2019-04-04 01:14:54', '2019-04-04 01:14:54'),
(9, 'Văn học Việt Nam', 1, '2019-04-04 01:15:19', '2019-04-04 01:15:19'),
(10, 'Lịch sử Việt Nam', 1, '2019-04-04 01:15:36', '2019-04-04 01:15:36'),
(11, 'Tiểu sử - hồi ký', 1, '2019-04-04 01:15:53', '2019-04-04 01:16:03'),
(12, 'Lịch sử nước ngoài', 1, '2019-04-04 01:16:31', '2019-04-04 01:16:31'),
(13, 'Sách tiểu học', 2, '2019-04-04 01:16:52', '2019-04-04 01:16:52'),
(14, 'Sách THCS', 2, '2019-04-04 01:17:02', '2019-04-04 01:17:02'),
(16, 'Luyện thi - Ôn thi', 4, '2019-04-04 01:17:54', '2019-04-04 01:17:54'),
(18, 'Cẩm nang tuyển sinh', 4, '2019-04-04 01:18:35', '2019-04-04 01:18:35'),
(19, 'Giáo trình - Chuyên đề', 4, '2019-04-04 01:18:59', '2019-04-04 01:18:59'),
(20, 'Truyện', 0, '2019-04-04 01:19:27', '2019-04-04 01:19:27'),
(21, 'Truyện dân gian', 20, '2019-04-04 01:19:48', '2019-04-04 01:19:48'),
(22, 'Tuyện tuổi teen', 20, '2019-04-04 01:20:00', '2019-04-04 01:20:00'),
(23, 'Truyện kinh dị', 20, '2019-04-04 01:20:19', '2019-04-04 01:20:19'),
(24, 'Truyện tranh', 20, '2019-04-04 01:20:27', '2019-04-04 01:20:27'),
(25, 'Truyện khác', 20, '2019-04-04 01:20:36', '2019-04-04 01:20:36'),
(26, 'Sách ngoại ngữ', 0, '2019-04-04 01:21:01', '2019-04-04 01:21:01'),
(27, 'Từ điển các loại', 26, '2019-04-04 01:21:20', '2019-04-04 01:21:20'),
(28, 'Tiếng anh', 26, '2019-04-04 01:21:36', '2019-04-04 01:21:36'),
(29, 'Tiếng hoa', 26, '2019-04-04 01:21:45', '2019-04-04 01:21:45'),
(30, 'Tiếng hàn', 26, '2019-04-04 01:21:57', '2019-04-04 01:21:57'),
(31, 'Tiếng pháp', 26, '2019-04-04 01:22:12', '2019-04-04 01:22:12'),
(32, 'Sách thiếu nhi', 0, '2019-04-04 01:22:32', '2019-04-04 01:22:32'),
(33, 'Tập tô màu - tập vẽ', 32, '2019-04-04 01:22:51', '2019-04-04 01:22:51'),
(34, 'Phát triển IQ', 32, '2019-04-04 01:23:08', '2019-04-04 01:23:08'),
(35, 'Tranh song ngữ - truyện song ngữ', 32, '2019-04-04 01:23:25', '2019-04-04 01:23:25'),
(36, 'Sách thiếu nhi - truyện thiếu nhi', 32, '2019-04-04 01:23:42', '2019-04-04 01:23:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_24_033956_create_suppliers_table', 1),
(4, '2019_03_24_034128_create_categories_table', 1),
(5, '2019_03_24_034213_create_books_table', 1),
(6, '2019_03_24_041203_create_orders_table', 1),
(7, '2019_03_24_041725_create_oderdetails_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oderdetails`
--

CREATE TABLE `oderdetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `bookName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oderdetails`
--

INSERT INTO `oderdetails` (`id`, `date`, `bookName`, `quantity`, `price`, `book_id`, `order_id`, `created_at`, `updated_at`) VALUES
(26, '2019-04-15', 'Dế mèn phiêu lưu ký', 1, 65000, 3, 24, '2019-04-15 16:22:51', '2019-04-15 16:22:51'),
(27, '2019-04-15', 'Nhớ ơi là tết', 1, 28000, 5, 24, '2019-04-15 16:22:51', '2019-04-15 16:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` double NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `quantity`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(24, '2019-04-15', 2, 93000, 15, '2019-04-15 16:22:51', '2019-04-15 16:22:51'),
(25, '2019-04-15', 3, 99000, 15, '2019-04-15 16:24:37', '2019-04-15 16:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Kim Đồng', '2019-03-24 06:33:32', '2019-03-24 06:33:32'),
(5, 'Cẩm Phong', '2019-03-24 06:33:41', '2019-03-24 06:33:41'),
(6, 'Nhà Xuất Bản Văn Học', '2019-03-24 06:34:04', '2019-03-24 06:34:04'),
(7, 'Nhà Xuất Bản Văn Hóa - Văn Nghệ', '2019-03-24 06:34:25', '2019-03-24 06:34:25'),
(8, 'Bách Việt', '2019-03-24 06:34:38', '2019-03-24 06:34:38'),
(9, 'Hoàng Tiến', '2019-03-24 06:34:50', '2019-03-24 06:42:59'),
(10, 'Văn Học', '2019-03-24 10:09:29', '2019-03-24 10:09:29'),
(11, 'Truyền thông trí việt', '2019-04-04 01:26:10', '2019-04-04 01:26:10'),
(12, 'Giáo dục', '2019-04-04 01:55:29', '2019-04-04 01:55:29'),
(13, 'Khang Viet', '2019-04-04 01:55:37', '2019-04-04 01:55:37'),
(14, 'Nhân Văn', '2019-04-04 01:55:44', '2019-04-04 01:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$z3ZnA75SHjAzJBSjjmftguY0plPMK4yAbZ5Ac9jRgLsPQAI4o2jMG', 'admin1@gmail.com', 1, '2dVeyLhEdlYY9dM1nCo3auBTxin0FboKm9tFFa1zvgCNkdx8pCz3Zn9DBvUD', '2019-03-25 07:50:11', '2019-03-25 07:50:11'),
(3, 'admin1', '$2y$10$pDsKofLVyaptPAdz/311QeLlSg2ImJeB6QvKVrCxoxOglAXkVNUku', 'admin2@gmail.com', 1, 'cT5RnJYWt80mHfUUoi8gUYcEDh6h9mACerkK1pIj', '2019-03-25 07:59:11', '2019-04-16 09:20:34'),
(6, 'admin2', '$2y$10$Ybgvd9uBfW86sO0pPyeQ9uAq4mG/Mp.cybNHP7WZk23zH2yCKU8Ge', 'admin3@gmail.com', 1, 'AC21kdwfMaj6ZPiUIQzGu9Z6nSDnSf3YSNRzGnST', '2019-03-25 20:17:16', '2019-03-25 20:17:16'),
(7, 'admin3', '$2y$10$nCJXYeZhP4pAmismfPHSx.3qUv9QUa8d10Gz1rMK0UmrzqPSmEZZC', 'admin4@gmail.com', 1, 'DhsG180tBEPwXx06nAyfqSfHzSbhQaFzGlODORoXRq1ungzjETUuM8kzq8kd', '2019-03-25 20:17:38', '2019-03-25 20:17:38'),
(12, 'client1', '$2y$10$S1pPORyG97x7LgPq8LEmtOULVXH21DAgnUi2NAJ/VR.3mRyB9H8bK', 'client1@gmail.com', 0, 'oETfgNAbm4RKLCxzfMLDZscOt2AfIC5Bh6PBHzKlcwcSfxUU0RjnHhHCzWMh', '2019-04-14 23:35:40', '2019-04-14 23:35:40'),
(13, 'client2', '$2y$10$3lH7RK7LtllOvS6g.IBWKuJNS5NzCNH8SYC4EXxS75kYQKepgk..6', 'client2@gmail.com', 0, 'nTQfUFobOG5rhmDAVfyk8VXtDui9iNIaFumVhh9g', '2019-04-14 23:36:21', '2019-04-14 23:36:21'),
(15, 'client4', '$2y$10$Rp6m9gl5mVPh7hVJtpejtOm7JgP5i8CXeiJi4IgSnglozElxk.Mv.', 'oudoan1234@gmail.com', 0, 'NipZnw3USD5KP9FC494RzeoChtqXV32bE3IL4rQSmdORf9quhOA91KNQWXgB', '2019-04-15 09:22:15', '2019-04-15 09:22:15'),
(16, 'client5', '$2y$10$YL8Sn6cmJ3ir8Xiert1.AeD6rLFeBhLCo1rg2jIJ.zJiJMYG9KTYS', '1551010051khanh@gmail.com', 0, 'cT5RnJYWt80mHfUUoi8gUYcEDh6h9mACerkK1pIj', '2019-04-16 06:21:49', '2019-04-16 06:21:49'),
(17, 'client6', '$2y$10$Z0yVZuypIU3sq/OmvjVgOOVDIQnt9mAYe0NKbrhYnfPAj8qUOvHZm', '1551010051khanh@ou.edu.vn', 0, 'cT5RnJYWt80mHfUUoi8gUYcEDh6h9mACerkK1pIj', '2019-04-16 06:25:50', '2019-04-16 06:25:50'),
(18, 'client9', '$2y$10$WbKPMEpg0XBWlnP2A/ttIetY7gOlsHv2rm2ST9R/..XF9pELG/Jxi', 'client9@gmail.com', 0, 'cT5RnJYWt80mHfUUoi8gUYcEDh6h9mACerkK1pIj', '2019-04-16 08:37:36', '2019-04-16 08:37:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_cate_id_foreign` (`cate_id`),
  ADD KEY `books_sup_id_foreign` (`sup_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oderdetails`
--
ALTER TABLE `oderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oderdetails_book_id_foreign` (`book_id`),
  ADD KEY `oderdetails_order_id_foreign` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oderdetails`
--
ALTER TABLE `oderdetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_sup_id_foreign` FOREIGN KEY (`sup_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `oderdetails`
--
ALTER TABLE `oderdetails`
  ADD CONSTRAINT `oderdetails_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `oderdetails_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
