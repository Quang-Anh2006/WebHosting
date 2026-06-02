-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2026 at 11:45 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `th2915`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(100) CHARACTER SET utf8 NOT NULL,
  `anh_sp` varchar(100) NOT NULL,
  `gia_sp` double NOT NULL,
  `ma_sp` varchar(100) NOT NULL,
  `danhmuc_sp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `anh_sp`, `gia_sp`, `ma_sp`, `danhmuc_sp`) VALUES
(1, 'Máy xay sinh tố SUNHOUSE SHD5112, cs 350W, 2 cối xay', 'img/sp/1.jpg', 700000, 'SHD5112', ''),
(2, 'Máy xay sinh tố SUNHOUSE SHD5112, cs 350W, 2 cối xay', 'img/sp/1.jpg', 700000, 'SHD5112', ''),
(3, 'Tivi Led LG 4K 55 inch 55UA7350PSB', 'img/sp/2.jpg', 14900000, '55UA7350PSB', ''),
(4, 'Tủ lạnh Casper RM-E432PBS 4 cửa 432 lít màu đen', 'img/sp/3.jpg', 13990000, 'RM-E432PBS', ''),
(5, 'Tủ lạnh Casper RM-E432PBS 4 cửa 432 lít màu đen', 'img/sp/3.jpg', 13990000, 'RM-E432PBS', '');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id_tt` int(11) NOT NULL,
  `ten_tt` varchar(100) CHARACTER SET utf8 NOT NULL,
  `anh_tt` varchar(100) NOT NULL,
  `tomtat_tt` varchar(200) CHARACTER SET utf8 NOT NULL,
  `chitiet_tt` text CHARACTER SET utf8 NOT NULL,
  `tacgia_tt` varchar(50) CHARACTER SET utf8 NOT NULL,
  `chuyenmuc_tt` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id_tt`, `ten_tt`, `anh_tt`, `tomtat_tt`, `chitiet_tt`, `tacgia_tt`, `chuyenmuc_tt`) VALUES
(1, 'Tình hình thời tiết cả nước dịp nghỉ lễ Giỗ Tổ Hùng Vương và 30/4-1/5', 'img/tintuc/1.jpg', '(Dân trí) - Trong dịp nghỉ lễ Giỗ Tổ Hùng Vương, Bắc Bộ có mưa dông vài nơi, từ ngày 26/4 mưa tăng về chiều tối và đêm. Dịp 30/4-1/5, khu vực này tiếp tục có mưa dông, cục bộ mưa to.', 'Trung tâm Dự báo khí tượng thủy văn quốc gia mới đưa ra nhận định về tình hình thời tiết cả nước dịp nghỉ lễ Giỗ Tổ Hùng Vương ngày 25-27/4.\r\n\r\nCụ thể, từ ngày 25 đến 27/4 (tức ngày 9-11 tháng 3 âm lịch) khu vực Bắc Bộ nhiều mây, có mưa rào và dông vài nơi, trưa chiều giảm mây trời nắng. Từ ngày 26 đến 27/4, khu vực này nhiều mây, có mưa, mưa rào rải rác và có nơi có dông (mưa tập trung vào chiều tối và đêm).\r\n\r\nKhu vực từ Thanh Hóa đến Huế có mây, có mưa rào và dông vài nơi; riêng ngày 25/4 có mưa rào và dông rải rác.\r\n\r\nKhu vực duyên hải Nam Trung Bộ, cao nguyên Trung Bộ và Nam Bộ có mây, chiều tối và đêm có mưa rào và dông vài nơi; ngày nắng, có nơi nắng nóng.\r\n\r\nRiêng phía Bắc khu vực Duyên hải Nam Trung Bộ ngày và đêm 25/4 nhiều mây, có mưa rào và dông rải rác, cục bộ có nơi mưa to. Cảnh báo trong mưa dông có khả năng xảy ra lốc, sét, mưa đá và gió giật mạnh.\r\n\r\nNhận định xu thế thời tiết cả nước trong dịp nghỉ lễ 30/4-3/5, cơ quan khí tượng cho biết khu vực Bắc Bộ ngày và đêm 30/4 có mưa rào và rải rác có dông, cục bộ có nơi mưa to.\r\n\r\nTừ ngày 1 đến 3/5, khu vực này có mưa rào và dông vài nơi, trưa chiều trời nắng.\r\n\r\nKhu vực Trung Bộ và Nam Bộ chiều tối và đêm có mưa rào và dông vài nơi, ngày nắng, có nơi nắng nóng.\r\n\r\nTình hình thời tiết cả nước dịp nghỉ lễ Giỗ Tổ Hùng Vương và 30/4-1/5 - 1\r\nDịp nghỉ Giỗ Tổ Hùng Vương miền Bắc mưa dông (Ảnh: Thành Đông).\r\n\r\nTIN LIÊN QUAN\r\nKhông khí lạnh bao trùm, Bắc Bộ mưa dông, vùng núi có nơi dưới 20 độ C\r\nRiêng tại khu vực Việt Trì, tỉnh Phú Thọ, ngày 25/4 (ngày 9/3 âm lịch) xác xuất mưa 30%, nhiệt độ dao động 23-29 độ C; ngày 26/4 (ngày 10/3 âm lịch) xác xuất mưa 70%, nhiệt độ dao động 23-28 độ C; ngày 27/4 (ngày 11/3 âm lịch) xác xuất mưa 65%, nhiệt độ dao động 24-29 độ C.\r\n\r\nTheo ông Nguyễn Văn Hưởng, Trưởng phòng Dự báo thời tiết (Trung tâm Dự báo khí tượng thủy văn quốc gia) thời điểm này đang trong thời kỳ chuyển mùa, các hiện tượng thời tiết cực đoan như dông, lốc, sét, mưa đá, gió giật mạnh có thể xảy ra, đặc biệt vào chiều tối.\r\n\r\nĐồng thời, nắng nóng trong những ngày tới có thể gây tác động bất lợi đến sức khỏe người dân, làm gia tăng nguy cơ cháy nổ, cháy rừng và ảnh hưởng đến sản xuất, sinh hoạt.\r\n\r\nNgười dân cần theo dõi thường xuyên các bản tin dự báo thời tiết để chủ động phòng tránh, đảm bảo an toàn cho các hoạt động sản xuất, sinh hoạt và du lịch trong dịp nghỉ lễ.', 'Quang Anh', 'thời sự'),
(2, 'Vỡ nắp cống trên đường Khuất Duy Tiến, xe taxi tụt bánh xuống hố', 'img/tintuc/2.jpg', '(Dân trí) - Chiếc taxi đang di chuyển trên đường Khuất Duy Tiến bất ngờ bị tụt bánh trước xuống hố sâu, nguyên nhân do nắp cống bị vỡ.', 'Khoảng 7h43 ngày 24/4, tại đường Khuất Duy Tiến (đoạn gần nút giao Khuất Duy Tiến - Nguyễn Trãi), địa phận phường Thanh Xuân, TP Hà Nội, xảy ra sự việc ô tô con bị sụt bánh xe xuống hố cống.\r\n\r\nCụ thể vào thời gian trên, chiếc taxi mang BKS 18H-040.xx do một tài xế điều khiển di chuyển trên đường Khuất Duy Tiến hướng Đại lộ Thăng Long, bất ngờ bánh trước bên phải xe bị tụt qua nắp cống xuống hố, khiến chiếc xe không thể di chuyển.\r\n\r\nTại hiện trường, miệng cống rộng khoảng 50cm, rất may vụ việc không làm ai bị thương.\r\n\r\nVỡ nắp cống trên đường Khuất Duy Tiến, xe taxi tụt bánh xuống hố - 1\r\nChiếc xe taxi bị tụt xuống cống trên đường Khuất Duy Tiến (Ảnh: Viet Tiep).\r\n\r\nSau khi nắm được thông tin, Đội CSGT đường bộ số 7 (Phòng CSGT Hà Nội) phối hợp với Công an phường Thanh Xuân cử cán bộ tới hiện trường phân luồng, hỗ trợ chiếc xe di chuyển, làm rõ nguyên nhân vụ việc. \r\n\r\nVỡ nắp cống trên đường Khuất Duy Tiến, xe taxi tụt bánh xuống hố - 2\r\nLực lượng chức năng đặt biển cảnh báo tại khu vực nắp cống bị vỡ (Ảnh: Công an cung cấp).\r\n\r\nNhà chức trách cho biết, tới khoảng 8h10, chiếc taxi nêu trên đã di chuyển khỏi hiện trường, lực lượng chức năng có mặt để khắc phục sự cố.\r\n\r\nVỡ nắp cống trên đường Khuất Duy Tiến, xe taxi tụt bánh xuống hố - 3\r\nPhần nắp cống bị vỡ khiến bánh xe tụt xuống hố (Ảnh: Công an cung cấp).\r\n\r\nTIN LIÊN QUAN\r\nHà Nội: Xe tải sụt xuống hố trên đường Nguyễn Trãi\r\nCách đây gần 1 ngày, khoảng 14h ngày 23/4, ô tô tải mang BKS 89C-291.xx do một tài xế điều khiển đang di chuyển trên đường Nguyễn Trãi (hướng Ngã Tư Sở - Khuất Duy Tiến), khi tới trước số nhà 108 Nguyễn Trãi (phường Thanh Xuân) bất ngờ bánh bên phải phía sau bị sụt lún xuống hố; chiếc xe nghiêng hẳn về một bên.\r\n\r\nTại hiện trường, miệng hố sụt rộng khoảng 0,5m, sâu khoảng 1m, chiếc ô tô kẹt bánh sau không thể di chuyển.\r\n\r\nCảnh sát cho hay, khu vực xảy ra sự việc nằm ở vị trí thi công dự án chống úng ngập khu vực nội đô của Sở Xây dựng Hà Nội. Có thể do đơn vị thi công chưa lu lại đường sau khi hoàn thành công việc nên dẫn tới tình trạng sụt lún. Đây cũng không phải lần đầu xảy ra sụt lún trên đường Nguyễn Trãi.', 'Quang Anh 2', 'thời sự'),
(3, 'Bài toán điện rác ở Đà Nẵng, chuyên gia cảnh báo nguy cơ lãng phí lớn', 'img/tintuc/3.jpg', '(Dân trí) - Đà Nẵng đang quy hoạch thêm nhà máy điện rác công suất lớn, nhưng nhiều ý kiến cảnh báo nguy cơ thiếu rác đầu vào, khiến dự án có thể hoạt động kém hiệu quả và phát sinh gánh nặng tài chín', 'Tại bãi rác Khánh Sơn (phường Hòa Khánh, Đà Nẵng), nhà máy điện rác của Công ty cổ phần Môi trường Việt Nam với công suất 1.100 tấn rác/ngày đêm đang được triển khai, dự kiến vận hành vào quý I/2027.\r\n\r\nTrong khi đó, dự án điện rác thứ hai cũng quy hoạch tại đây theo hình thức đối tác công tư (PPP) với công suất 1.000 tấn/ngày đêm. Năm 2020, HĐND thành phố Đà Nẵng thông qua chủ trương đầu tư, đến tháng 2/2025 chủ trương đầu tư ban đầu bị hủy để thực hiện lại các thủ tục, đến tháng 6/2025 có động thái mời gọi các nhà đầu tư đăng ký quan tâm dự án.\r\n\r\nNỗi lo thiếu rác?\r\nTheo quy hoạch, thành phố Đà Nẵng có 6 dự án xử lý rác thải sinh hoạt. Trong đó, dự án nhà máy đốt rác phát điện tại Khu liên hợp xử lý rác thải Khánh Sơn có công suất 1.100 tấn/ngày đêm đang trong giai đoạn xây dựng; nhà máy xử lý chất thải rắn sinh hoạt Bắc Quảng Nam công suất 300 tấn/ngày đêm đã đi vào hoạt động; nhà máy xử lý rác Hội An công suất 120 tấn/ngày đêm đang được triển khai.\r\n\r\nBài toán điện rác ở Đà Nẵng, chuyên gia cảnh báo nguy cơ lãng phí lớn - 1\r\nNhà máy điện rác của Công ty cổ phần Môi trường Việt Nam đang được triển khai (Ảnh: Núi Thành).\r\n\r\nNgoài ra, dự án nhà máy xử lý rác thải kết hợp phát điện tại khu xử lý chất thải rắn Nam Quảng Nam (xã Núi Thành) có công suất 800 tấn/ngày đêm hiện đang kêu gọi đầu tư. Cùng với đó là dự án nhà máy điện rác tại Khánh Sơn theo hình thức đối tác công tư (PPP), công suất 1.000 tấn/ngày đêm, cũng đang trong giai đoạn mời gọi nhà đầu tư.\r\n\r\nTổng công suất xử lý theo quy hoạch của các dự án này khoảng 3.330 tấn/ngày đêm.\r\n\r\nTheo số liệu từ Công ty Cổ phần Môi trường Đô thị Đà Nẵng và Công ty TNHH MTV Môi trường đô thị Hà Nội - Chi nhánh miền Trung (URENCO15), lượng rác sinh hoạt thu gom tại khu vực Đà Nẵng (cũ) hiện trung bình khoảng 1.400-1.700 tấn/ngày, chủ yếu là rác chưa phân loại. Như vậy, chỉ riêng nhà máy điện rác của Công ty Cổ phần Môi trường Việt Nam tại Khánh Sơn với công suất 1.100 tấn/ngày đêm đã có thể xử lý phần lớn lượng rác sinh hoạt của khu vực này.\r\n\r\nTại hội thảo ngày 6/3, ông Võ Như Toàn, Phó Giám đốc Sở Nông nghiệp và Môi trường thành phố Đà Nẵng, cho biết đến năm 2030, tổng khối lượng chất thải rắn sinh hoạt trên địa bàn thành phố dự kiến đạt khoảng 3.600 tấn/ngày. Trong đó, khu vực Đà Nẵng (cũ) khoảng 1.900 tấn/ngày, còn khu vực Quảng Nam (cũ) khoảng 1.700 tấn/ngày.\r\n\r\nTheo phân tích của chuyên gia môi trường, dự án nhà máy điện rác PPP công suất 1.000 tấn/ngày tại Khánh Sơn được xây dựng dựa trên dự báo lượng rác khu vực Đà Nẵng (cũ) đến năm 2030 sẽ tăng lên 1.900 tấn/ngày. Thực tế đến năm 2026 cho thấy lượng rác phát sinh trong 3 năm gần đây tại khu vực này gần như không tăng, chỉ dao động quanh mức hơn 1.400 tấn/ngày.\r\n\r\nSố liệu này cũng phù hợp với thống kê của Công ty Cổ phần Môi trường Đô thị Đà Nẵng khi giai đoạn 2023-2025, lượng rác thu gom hằng ngày không biến động lớn, duy trì trong khoảng 1.400 đến hơn 1.500 tấn/ngày.\r\n\r\nTheo chuyên gia, giai đoạn 2023-2024, thời điểm đề xuất dự án PPP, mức tăng lượng rác chủ yếu đến từ việc nâng cao hiệu quả thu gom, chứ không phải do dân số tăng hay phát triển kinh tế. Khi công tác thu gom đã được thực hiện triệt để, lượng rác phát sinh thực tế gần như không còn tăng thêm.\r\n\r\nTrong 10 năm qua, dân số khu vực Đà Nẵng và Quảng Nam không biến động đáng kể. Các số liệu hiện có cho thấy tổng lượng rác phát sinh thực tế của toàn vùng hiện khoảng hơn 2.200 tấn/ngày, tương ứng với quy mô dân số khoảng 3,06 triệu người.\r\n\r\nBên cạnh đó, việc đẩy mạnh phân loại rác tại nguồn cũng sẽ làm giảm đáng kể lượng rác thải sinh hoạt phải xử lý bằng phương pháp đốt.\r\n\r\nCác chuyên gia cho rằng quy mô phát sinh rác thực tế đã dần chạm ngưỡng bão hòa, không còn nhiều dư địa tăng trưởng. Lượng rác hiện nay chỉ khoảng 2.200 tấn, tối đa khoảng 2.400 tấn/ngày đêm. Nếu tiếp tục triển khai thêm các nhà máy điện rác quy mô lớn như đề xuất, nguy cơ thiếu khoảng 1.000 tấn rác/ngày là hoàn toàn có thể xảy ra.\r\n\r\nTrong khi đó, công nghệ điện rác đòi hỏi lò đốt phải vận hành ở mức công suất ổn định. Nếu hoạt động dưới khoảng 70% công suất thiết kế, nhiệt độ trong lò sẽ không đạt ngưỡng bắt buộc theo tiêu chuẩn kỹ thuật, dẫn đến nguy cơ không xử lý triệt để các hợp chất độc hại phát sinh trong quá trình đốt rác.', 'Quang Anh 3', 'Môi trường'),
(4, 'Khách Việt chụp ảnh, người Hàn đổ đến quán phở Tổng thống Hàn Quốc từng ăn', 'img/tintuc/4.jpg', '(Dân trí) - Sáng 24/4, nhiều khách đến trải nghiệm, thử ngồi tại vị trí Tổng thống Hàn Quốc và Phu nhân từng ngồi ăn phở ở Hà Nội.', 'Ngày thứ tư trong chuyến công tác tại Hà Nội, ông Kim Demian - doanh nhân đến từ Seoul - bất ngờ nhận được cuộc gọi của đồng hương, rủ thưởng thức phở tại quán ăn trên phố Đinh Liệt.\r\n\r\nBiết đây là địa điểm từng đón Tổng thống Hàn Quốc Lee Jae Myung cùng Phu nhân đến ăn tối, nam doanh nhân đồng ý ngay. Từ khách sạn, cả nhóm nhanh chóng di chuyển vào khu vực phố cổ.\r\n\r\nKhách Việt chụp ảnh, người Hàn đổ đến quán phở Tổng thống Hàn Quốc từng ăn - 1\r\nÔng Kim Demian (bên phải) cùng 2 người bạn thưởng thức phở bò chín tại quán sáng 24/4 (Ảnh: Quỳnh Anh).\r\n\r\nBước vào quán, ông Kim và 2 người bạn lựa chọn vị trí Tổng thống và Phu nhân từng ngồi rồi tranh thủ chụp vài bức ảnh làm kỷ niệm.\r\n\r\n\"Cảm giác thật đặc biệt khi được dùng bữa tại chiếc bàn Tổng thống và Phu nhân từng ngồi. Ở Hàn Quốc, tôi thỉnh thoảng ăn phở Việt nhưng phải đến Hà Nội, hương vị đó mới thực sự trọn vẹn\", ông Kim Demian chia sẻ với phóng viên Dân trí.\r\n\r\nGọi 3 bát phở chín, nhóm khách cho thêm tương ớt, vắt chanh rưới đều lên bề mặt tô phở còn bốc khói. Ngay từ những miếng đầu tiên, nhóm doanh nhân Hàn Quốc đều tấm tắc khen ngon, nở nụ cười thích thú. \r\n\r\nPhát Video\r\nQuán phở đông nghịt khách sau khi Tổng thống Hàn Quốc và phu nhân tới ăn (Video: Thành Công - Quỳnh Anh).\r\n\r\nPhở bò là số 1 trong lòng khách Hàn Quốc\r\nTheo ghi nhận của phóng viên Dân trí, sáng 24/4, nhiều khách Việt Nam và Hàn Quốc tìm đến quán phở ở số 40 Đinh Liệt ăn phở, sau khi đọc được thông tin Tổng thống Lee Jae Myung và Phu nhân đến đây ăn tối.\r\n\r\nKhách Việt chụp ảnh, người Hàn đổ đến quán phở Tổng thống Hàn Quốc từng ăn - 2\r\nCác bàn ăn trong quán liên tục kín chỗ buổi sáng 24/4 (Ảnh: Quỳnh Anh).\r\n\r\nÔng Chang sống ở Việt Nam đã 13 năm cùng một người bạn lần đầu tiên đến ăn phở ở đây. Dù quen với ẩm thực Việt, ông vẫn háo hức như một thực khách mới, giới thiệu cho người bạn về hương vị đặc trưng của phở Hà Nội. \r\n\r\n\"Với tôi, phở bò là số 1, phở gà là số 2 về độ ngon. Nhiều năm sống ở Việt Nam, tôi nhận thấy, người Hàn Quốc rất thích món ăn này\", ông Chang cho biết. \r\n\r\nTrong khi đó, nhiều khách Việt cảm thấy tự hào vì món phở một lần nữa được nhắc đến nhiều lần trên truyền thông Hàn Quốc và quốc tế. \r\n\r\nKhách Việt chụp ảnh, người Hàn đổ đến quán phở Tổng thống Hàn Quốc từng ăn - 3\r\nAnh Hoàng Long chụp ảnh khi ngồi tại bàn Tổng thống Hàn Quốc và Phu nhân từng ngồi (Ảnh Trần Thành Công).\r\n\r\nAnh Hoàng Long (sống ở Hà Nội) mong muốn được trải nghiệm cảm giác ngồi tại chiếc bàn mà vị nguyên thủ quốc gia của nước bạn từng dùng bữa.\r\n\r\nChọn được chỗ ngồi ưng ý, anh Hoàng Long cầm điện thoại chụp vài bức ảnh selfie, lưu lại khoảnh khắc đặc biệt để chia sẻ với bạn bè trên mạng xã hội.\r\n\r\nLà khách quen của quán suốt nhiều năm, món anh yêu thích nhất vẫn là phở chín nạm. Bởi, phần thịt mềm xen lẫn những thớ gân dai nhẹ, tạo cảm giác sần sật khi thưởng thức. Miếng nạm được thái vừa phải, khi ăn vừa có độ ngậy, không bị khô, quyện cùng nước dùng ngọt thanh khiến hương vị càng thêm đậm đà. \r\n\r\n\"Tôi cảm thấy rất tự hào khi món phở Việt có thể chinh phục được thực khách nước ngoài. Ẩm thực giống như một cầu nối, giúp con người xích lại gần nhau hơn, tăng thêm sự thấu hiểu giữa các quốc gia\", anh Hoàng Long chia sẻ.\r\n\r\nSang Việt Nam du lịch, khách Tây ăn phở mỗi ngày\r\nChọn ăn sáng tại quán phở số 40 Đinh Liệt, vợ chồng chị Johanna Selander (người Thụy Điển, gốc Việt) bất ngờ khi biết nơi đây từng đón nguyên thủ quốc gia Hàn Quốc đến ăn tối. \r\n\r\nChị Johanna kể, tối 23/4, trong lúc dạo quanh hồ Hoàn Kiếm, vợ chồng thấy Tổng thống Hàn Quốc cùng Phu nhân ghé thăm khu phố cổ. Chị không nghĩ hai vị thượng khách lựa chọn phở và cơm rang dưa bò cho bữa tối. \r\n\r\nVợ chồng chị và hai con gái đang có chuyến du lịch kéo dài 3 tuần tại Việt Nam. Trong những ngày qua, phở đã trở thành món ăn sáng quen thuộc của cả nhà.\r\n\r\nKhách Việt chụp ảnh, người Hàn đổ đến quán phở Tổng thống Hàn Quốc từng ăn - 4\r\nBát phở chín tương tự suất mà Tổng thống Hàn Quốc và Phu nhân đã thưởng thức (Ảnh: Trần Thành Công).\r\n\r\n\"Tại Thụy Điển, tôi từng ăn phở với giá khoảng 20 USD một tô (hơn 540.000 đồng) nhưng hương vị không thực sự ấn tượng. Ở Hà Nội, phở có giá rẻ hơn, nước dùng đậm đà, rất ngon miệng\", chị chia sẻ.\r\n\r\nTrao đổi với phóng viên Dân trí, anh Thiều Văn Mùi - chủ quán - cho biết, sau một đêm, anh vẫn nguyên cảm giác lâng lâng, xen lẫn niềm vui và sự tự hào khi được đón Tổng thống Lee Jae Myung cùng Phu nhân.\r\n\r\n\"Sáng 24/4, nhiều thực khách Việt Nam và Hàn Quốc tìm đến quán, không chỉ để thưởng thức phở mà còn muốn trải nghiệm cảm giác ngồi tại vị trí Tổng thống và Phu nhân từng dùng bữa. Một số người hỏi thăm quá trình chuẩn bị bữa tối cho hai vị khách quý\", anh Mùi cho hay.\r\n\r\nKhách Việt chụp ảnh, người Hàn đổ đến quán phở Tổng thống Hàn Quốc từng ăn - 5\r\nAnh Thiều Văn Mùi đặt ra nguyên tắc đeo khẩu trang khi chế biến món phở (Ảnh: Trần Thành Công).\r\n\r\nNhờ hiệu ứng từ thông tin được chia sẻ trên mạng xã hội, lượng khách đến quán có tăng hơn những ngày trước. Anh hy vọng thời gian tới việc kinh doanh sẽ tiếp tục phát triển.\r\n\r\n\"Trong 3-5 ngày tới, chúng tôi sẽ in xong bức ảnh chụp chung cùng Tổng thống và Phu nhân để treo trên tường, lưu giữ kỷ niệm đẹp\", anh bày tỏ. \r\n\r\nQuán hoạt động từ 7h30 đến 23h mỗi ngày. Trung bình các ngày trong tuần, anh bán khoảng 300 bát phở, còn cuối tuần lên đến 350-400 bát. Giá mỗi bát phở chín khoảng 55.000 đồng.\r\n\r\nTrước đó, như Dân trí đã thông tin, Tổng thống Hàn Quốc Lee Jae Myung và Phu nhân Kim Hae Kyung ăn phở bò và cơm rang dưa bò tại quán phở của anh Mùi.\r\n\r\nCả đoàn gọi 17 bát phở và 2 suất cơm rang dưa bò. Toàn bộ nguyên liệu làm món ăn được giữ nguyên như thường ngày.\r\n\r\nĐứng từ xa quan sát, chủ quán phở nhận thấy, Tổng thống Hàn Quốc và Phu nhân cho nhiều chanh và ớt vào tô rồi cầm đũa, chậm rãi thưởng thức món phở. Trong quá trình ăn, hai vị khách nở nụ cười tươi, gật đầu khen ngon. ', 'Quang Anh 4', 'Ngoại giao'),
(5, 'Tài xế kể chuyện chở nữ hành khách 64 tuổi \"đang yêu\" đến thẳng công an', 'img/tintuc/5.jpg', '(Dân trí) - Tài xế taxi ở Hà Tĩnh phát hiện nữ hành khách rơi vào bẫy lừa đảo khi bà nói sai địa chỉ ngân hàng, tỏ ra vội vàng và có tin nhắn bất thường.', 'Sáng 24/4, trao đổi với phóng viên Dân trí, anh Nguyễn Hữu Phước (42 tuổi, trú tại phường Sông Trí) xác nhận là người chở bà H.T.V. (64 tuổi, trú tại phường Hải Ninh, Hà Tĩnh) đến trụ sở công an thay vì ngân hàng, qua đó giúp nạn nhân thoát khỏi vụ lừa đảo chiếm đoạt tài sản qua mạng.\r\n\r\nTheo lời kể, sáng 22/4, anh Phước nhận cuốc xe đón bà V. từ nhà đến một chi nhánh ngân hàng trên địa bàn. Quá trình di chuyển, anh thấy hành khách liên tục giục chạy nhanh nên đề nghị cung cấp địa chỉ cụ thể để tìm lộ trình ngắn nhất.\r\n\r\nTài xế kể chuyện chở nữ hành khách 64 tuổi đang yêu đến thẳng công an - 1\r\nTài xế Phước (bên phải) chở nữ hành khách đến công an trình báo (Ảnh: Công an cung cấp).\r\n\r\nKhi đó, người phụ nữ đưa điện thoại cho tài xế xem đoạn tin nhắn với một người lạ, trong đó có tên chi nhánh ngân hàng.\r\n\r\n\"Tôi chỉ lướt nhanh phần cuối cuộc trò chuyện để nắm thông tin vì nghĩ đó là chuyện riêng tư. Tuy nhiên, các chi tiết trong tin nhắn có nhiều điểm bất thường, thậm chí mâu thuẫn với địa chỉ bà cung cấp. Tôi hỏi và được biết bà đi chuyển tiền để nhận quà\", anh Phước kể.\r\n\r\nTừ những dấu hiệu đáng ngờ và kinh nghiệm theo dõi các cảnh báo về lừa đảo, anh Phước nhận định người phụ nữ có thể đang bị thao túng tâm lý. Ngay sau đó, anh đề nghị hành khách ngồi yên và quyết định chở thẳng đến trụ sở Công an phường Sông Trí.\r\n\r\n\"Ban đầu bà không đồng ý, nhưng tôi cố gắng trấn an, động viên. Tôi nói nếu việc làm của mình đúng, sau này bác có thể cảm ơn cháu, còn không cũng không sao, tiền xe bác cũng không cần trả\", tài xế nhớ lại.\r\n\r\nTài xế kể chuyện chở nữ hành khách 64 tuổi đang yêu đến thẳng công an - 2\r\nDòng tin nhắn kẻ lừa đảo gửi cho người phụ nữ (Ảnh: Công an cung cấp).\r\n\r\nTIN LIÊN QUAN\r\nNghe nữ khách kể chuyện đang yêu qua mạng, tài xế chở thẳng đến công an\r\nTại trụ sở công an, lực lượng chức năng bố trí cán bộ nữ tiếp cận, trò chuyện để ổn định tâm lý cho công dân. Qua đó, mọi người được biết bà V. sống một mình, chồng đã mất, con cái ở xa.\r\n\r\nTrong quá trình sử dụng mạng xã hội, bà quen một tài khoản Facebook tên \"Trường Thuận\". Người này tự xưng đang sinh sống ở nước ngoài, thường xuyên nhắn tin tình cảm, gọi bà là \"em yêu\", \"vợ yêu\".\r\n\r\nĐối tượng sau đó gửi hình ảnh các món quà giá trị như dây chuyền vàng, hàng hiệu, điện thoại iPhone, đồng thời hứa tặng kèm 50.000 USD (hơn 1,3 tỷ đồng) và ngỏ ý về Việt Nam chung sống. Khi tạo được lòng tin, người này thông báo đã gửi quà và yêu cầu bà V. chuyển 5.000 USD (hơn 130 triệu đồng) để làm thủ tục nhận.\r\n\r\nSau khi được cán bộ công an giải thích, bà V. nhận ra thủ đoạn của đối tượng lừa đảo và từ bỏ ý định chuyển tiền.\r\n\r\nLãnh đạo Công an phường Sông Trí đánh giá hành động nhanh trí của tài xế Phước không chỉ giúp bảo vệ tài sản cho nạn nhân mà còn góp phần lan tỏa tinh thần cảnh giác, trách nhiệm trong cộng đồng.', 'Quang Anh 5', 'Pháp luật');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tt`),
  ADD UNIQUE KEY `id_tt` (`id_tt`,`ten_tt`,`anh_tt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
