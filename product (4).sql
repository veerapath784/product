-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 01:22 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `user_id`, `title`, `detail`, `thumbnail`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'แค่เต้นก็ได้บุญ! ‘ช้อปปี้เต้นเพื่อน้อง’ ทุกๆ 1 คลิป ช้อปปี้บริจาค 100 บาทให้มูลนิธิเด็กโสสะฯ', '<h5 style=\"box-sizing: inherit; clear: both; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: &quot;Noto Sans Thai&quot;, &quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; font-weight: 700; color: rgb(10, 10, 10); text-rendering: optimizelegibility; line-height: 1.4; background-color: rgb(254, 254, 254);\"><span style=\"box-sizing: inherit; color: rgb(255, 0, 0);\">แค่เต้นก็ได้บุญ! “ช้อปปี้เต้นเพื่อน้อง” ทุกๆ 1 คลิป ช้อปปี้บริจาค 100 บาทให้มูลนิธิเด็กโสสะฯ</span></h5><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\">อากาธา โซห์ หัวหน้าฝ่ายการตลาด พร้อมคณะผู้บริหารช้อปปี้ (Shopee) ผู้นำตลาดอีคอมเมิร์ซที่ใหญ่ที่สุดในเอเชียตะวันออกเฉียงใต้และไต้หวัน จัดงาน #ShopeeDanceTH “ช้อปปี้เต้นเพื่อน้อง” เพื่อเฉลิมฉลองการมีส่วนร่วมของผู้ใช้งานชาวไทยในการบริจาคและตอบแทนกลับคืนสู่สังคม</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\"><a href=\"https://news.mthai.com/pr-news/629708.html/attachment/30-03-18-5\" rel=\"attachment wp-att-629711\" style=\"box-sizing: inherit; color: purple; line-height: inherit; cursor: pointer; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.3);\"><img class=\"aligncenter size-full wp-image-629711\" src=\"https://news.mthai.com/app/uploads/2018/03/30-03-18-5.jpg\" alt=\"\" width=\"640\" height=\"358\" srcset=\"https://news.mthai.com/app/uploads/2018/03/30-03-18-5.jpg 640w, https://news.mthai.com/app/uploads/2018/03/30-03-18-5-300x168.jpg 300w\" sizes=\"(max-width: 640px) 100vw, 640px\" style=\"box-sizing: inherit; border: 0px; display: table; max-width: 100%; height: auto; clear: both; margin-left: auto; margin-right: auto;\"></a></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\">โดยสมทบทุนมูลนิธิเด็กโสสะแห่งประเทศไทย ในพระบรมราชินูปถัมภ์ เพื่อช่วยสนับสนุนทางด้านการศึกษา และการเลี้ยงดูเด็กและเยาวชน ภายในงาน ได้รับเกียรติจากสองแบรนด์แอมบาสเดอร์คู่ขวัญจากช้อปปี้ ณเดชน์ คูกิมิยะ และญาญ่า อุรัสยา เสปอร์บันด์ มาเชิญชวนชาวไทยร่วมกิจกรรมเพื่อสังคมพร้อมกัน ตั้งแต่วันนี้ถึง 4 เมษายน 2561 งานจัดขึ้น ณ ศูนย์การค้าเซ็นทรัลเวิลด์ เมื่อเร็วๆ นี้</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\">สำหรับ Shopee เป็นผู้นำแพลทฟอร์มอีคอมเมิร์ซในเอเชียตะวันออกเฉียงใต้และไต้หวัน โดยเป็นแพลทฟอร์มที่ออกแบบขึ้นเพื่อชาวเอเชียตะวันออกเฉียงใต้ ด้วยระบบการชำระเงินและการสนับสนุนด้านโลจิสติกส์ Shopee มุ่งมั่นที่จะพัฒนาแพลทฟอร์มของเราให้ดีขึ้นอย่างต่อเนื่อง เพื่อก้าวขึ้นเป็นแพลทฟอร์มอีคอมเมิร์ซอันดับหนึ่งในภูมิภาค และเป็นอันดับหนึ่งในใจผู้ใช้งาน เพราะมีสินค้าหลากหลายประเภท ตั้งแต่สินค้าประเภทอิเล็กทรอนิกส์ ไปจนถึงของตกแต่งบ้าน สินค้าสุขภาพและความงาม สินค้าแม่และเด็ก แฟชั่น และอุปกรณ์กีฬา</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\"><a href=\"https://news.mthai.com/pr-news/629708.html/attachment/30-03-18-7\" rel=\"attachment wp-att-629719\" style=\"box-sizing: inherit; color: purple; line-height: inherit; cursor: pointer; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.3);\"><img class=\"aligncenter size-full wp-image-629719\" src=\"https://news.mthai.com/app/uploads/2018/03/30-03-18-7.jpg\" alt=\"\" width=\"640\" height=\"383\" srcset=\"https://news.mthai.com/app/uploads/2018/03/30-03-18-7.jpg 640w, https://news.mthai.com/app/uploads/2018/03/30-03-18-7-300x180.jpg 300w\" sizes=\"(max-width: 640px) 100vw, 640px\" style=\"box-sizing: inherit; border: 0px; display: table; max-width: 100%; height: auto; clear: both; margin-left: auto; margin-right: auto;\"></a></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\">ทั้งนี้ Shopee อยู่ในกลุ่มของ บริษัท Sea และได้เปิดตัวเป็นครั้งแรกอย่างเป็นทางการในปี พ.ศ. 2558 ในประเทศสิงคโปร์ และขยายไปยังประเทศมาเลเซีย ไทย ไต้หวัน อินโดนีเซีย เวียดนาม และฟิลิปปินส์ บริษัท Sea เป็นผู้นำทางด้านดิจิตัล เอนเตอร์เทนเมนท์ อีคอมเมิร์ซ และ บริการด้านการเงินแบบดิจิตัล ครอบคลุมทั่วภูมิภาคเอเชียตะวันออกเฉียงใต้ บริษัท Sea มีพันธกิจที่จะมุ่งมั่นพัฒนาคุณภาพชีวิตของผู้บริโภค และผู้ประกอบการรายย่อยให้ดียิ่งขึ้นด้วยเทคโนโลยีอันล้ำหน้า บริษัท Sea ได้จดทะเบียนเข้าสู่ตลาดหลักทรัพย์ที่นิวยอร์ก ภายใต้สัญลักษณ์ SE</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 2.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\"><a href=\"https://news.mthai.com/pr-news/629708.html/attachment/30-03-18-8\" rel=\"attachment wp-att-629720\" style=\"box-sizing: inherit; color: purple; line-height: inherit; cursor: pointer; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.3);\"><img class=\"aligncenter size-full wp-image-629720\" src=\"https://news.mthai.com/app/uploads/2018/03/30-03-18-8.jpg\" alt=\"\" width=\"640\" height=\"331\" srcset=\"https://news.mthai.com/app/uploads/2018/03/30-03-18-8.jpg 640w, https://news.mthai.com/app/uploads/2018/03/30-03-18-8-300x155.jpg 300w\" sizes=\"(max-width: 640px) 100vw, 640px\" style=\"box-sizing: inherit; border: 0px; display: table; max-width: 100%; height: auto; clear: both; margin-left: auto; margin-right: auto;\"></a></p><div><br></div>', '/images/article/eaa32b80ecf297bd60f70f7a34ee2ba772e5dac2.jpg', 'อากาธา โซห์ หัวหน้าฝ่ายการตลาด พร้อมคณะผู้บริหารช้อปปี้ (Shopee) ผู้นำตลาดอีคอมเมิร์ซที่ใหญ่ที่สุดในเอเชียตะวันออกเฉียงใต้และไต้หวัน จัดงาน #ShopeeDanceTH', '2019-05-20 16:45:48', '2019-07-09 15:09:03'),
(2, 2, 1, 'Shopee ขึ้นแท่นแชมป์อีคอมเมิร์ซใหญ่ที่สุดในเอเชียตะวันออกเฉียงใต้', '<p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(88, 88, 88); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; background-color: rgb(254, 254, 254);\"><img class=\"alignnone size-full wp-image-107161\" src=\"https://thumbsup.in.th/wp-content/uploads/2018/12/shopee630.jpg\" alt=\"\" width=\"1200\" height=\"630\" srcset=\"https://thumbsup.in.th/wp-content/uploads/2018/12/shopee630.jpg 1200w, https://thumbsup.in.th/wp-content/uploads/2018/12/shopee630-760x399.jpg 760w, https://thumbsup.in.th/wp-content/uploads/2018/12/shopee630-1024x538.jpg 1024w\" sizes=\"(max-width: 1200px) 100vw, 1200px\" style=\"box-sizing: inherit; border: 0px; max-width: 100%; height: auto; display: inline-block;\"></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(88, 88, 88); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; background-color: rgb(254, 254, 254);\">ไม่ใช่ Lazada หรือ Tokopedia แต่เป็น Shopee ที่สำนักข่าว Tech in Asia ยกให้เป็นแชมป์อีคอมเมิร์ซแห่งอาเซียน ทำให้ Shopee ถูกขนานนามเป็นราชาเว็บไซต์อีคอมเมิร์ซคนใหม่ในตลาดเอเชียตะวันออกเฉียงใต้</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(88, 88, 88); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; background-color: rgb(254, 254, 254);\"><span id=\"more-107137\" style=\"box-sizing: inherit;\"></span></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(88, 88, 88); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; background-color: rgb(254, 254, 254);\">Shopee ในเครือบริษัทแม่ “Sea” นั้นเปิดตัวเป็นครั้งแรกอย่างเป็นทางการใน 2015 ที่สิงคโปร์ และขยายไปยังประเทศมาเลเซีย, ไทย, ไต้หวัน, อินโดนีเซีย, เวียดนาม และฟิลิปปินส์ เพียง 3 ปี วันนี้ Shopee สามารถแซง Lazada ของ Alibaba ที่เปิดบริการมาก่อน 3 ปีและ Tokopedia ของ Softbank ที่ปักธงมานานกว่า 6 ปี จุดนี้นักวิเคราะห์มองว่า Shopee ขึ้นสู่แถวหน้าของเวทีอีคอมเมิร์ซในเอเชียตะวันออกเฉียงใต้เพราะกลยุทธ์เน้น mobile marketing บนการทุ่มงบการตลาดอย่างหนักเพื่อซื้อพื้นทีี่สื่อออฟไลน์และการจ้างพรีเซนเตอร์</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(88, 88, 88); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; background-color: rgb(254, 254, 254);\">ล่าสุด AppAnnie บริษัทวิเคราะห์ตลาดแอปพลิเคชันพบว่า Shopee คือแอปสำหรับช็อปปิ้งที่มีการดาวน์โหลดมากที่สุด แซงหน้า Lazada ที่นั่งอันดับ 2 ในขณะนี้ นอกจากนี้ ยังมีข้อมูลว่า Shopee มีมูลค่ายอดขายพุ่งทยานในไตรมาสที่สามของปี 2018 ที่ผ่านมา</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(88, 88, 88); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; background-color: rgb(254, 254, 254);\">จุดนี้ Shopee รายงานมูลค่าการขายสินค้ารวมหรือ gross merchandising value ไว้ที่ 2,700 ล้านเหรียญสหรัฐซึ่งเพิ่มขึ้น 153% เมื่อเทียบกับไตรมาส 3 ของปีที่แล้ว ทั้งหมดนี้ Shopee คาดว่าสถิติมูลค่าการขายรวมทั้งหมดจะเติบโตต่อไป เป็น 6,900-7,300 ล้านเหรียญ ซึ่งคิดเป็น 1 ใน 3 ของมูลค่าการขายอีคอมเมิร์ซโดยรวมที่งานวิจัย Google-Temasek เคยรายงานไว้</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(88, 88, 88); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; background-color: rgb(254, 254, 254);\">ความสำเร็จนี้ถูกมองว่าเป็นผลมาจากแนวทางหลักของ Shopee ที่เน้นการตลาดบนอุปกรณ์พกพา จนทำให้ Shopee มีอัตราการใช้งานบนอุปกรณ์มือถือที่สูงในเอเชียตะวันออกเฉียงใต้ จุดที่น่าสนใจคือแอป Shopee มีการพัฒนาแบบแยกต่างหากและแปลเป็นภาษาท้องถิ่นทั้งในอินโดนีเซีย มาเลเซีย สิงคโปร์ ไทย เวียดนาม ไต้หวัน และฟิลิปปินส์ จุดนี้ตรงกันข้ามกับแอปของ Lazada ที่ใช้แอปเดียวแต่ตั้งค่าให้เข้าถึงได้หลายประเทศ</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(88, 88, 88); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; background-color: rgb(254, 254, 254);\">รายงานระบุว่า Shopee ได้รับความนิยมในสินค้ากลุ่มแฟชั่น สุขภาพ และความงาม ซึ่งเป็นกลุ่มสินค้าที่มีการใช้เวลาค้นหาผลิตภัณฑ์นานกว่าสินค้ากลุ่มอื่น ทำให้สถิติผู้ใช้ของ Shopee ต่างจากอีคอมเมิร์ซอื่น เนื่องจากสถิติชี้ว่า 58 ของลูกค้า Shopee เป็นเพศหญิง ต่างจากผู้ใช้ Lazada ที่ 57% เป็นเพศชาย</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(88, 88, 88); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; background-color: rgb(254, 254, 254);\">อย่างไรก็ตาม 1 ปีหลังจากการเสนอขายหุ้น IPO ของ Shopee บริษัทแม่อย่าง Sea Group ยังคงไม่ได้กำไร โดยธุรกิจ Shopee ยังขาดทุนเกือบ 700 ล้านเหรียญสหรัฐ แม้ว่า Shopee ในไตรมาสที่ 3 ของปี 2018 จะทำรายได้รวม 71.2 ล้านเหรียญสหรัฐ ซึ่งเพิ่มขึ้นเกือบ 1,000% เทียบกับไตรมาสที่สามของปี 2017</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(88, 88, 88); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; background-color: rgb(254, 254, 254);\">เหตุที่เป็นเช่นนี้เพราะค่าใช้จ่าย ซึ่ง Shopee ย้ำว่าได้ลดค่าใช้จ่ายด้านการตลาดลงแล้วจาก 9.7% ในปี 2017 เหลือ 5.7 ในปี 2018</p>', '/images/article/efc30b4269b2d2c9eb7f6d7fc3541b9f60f372f9.jpg', 'Shopee ในเครือบริษัทแม่ “Sea” นั้นเปิดตัวเป็นครั้งแรกอย่างเป็นทางการใน 2015 ...', '2019-05-20 18:59:35', '2019-07-09 15:08:37'),
(3, 2, 1, 'เทียบฟอร์ม LAZADA VS Shopee ลูกค้าใครจ่ายหนักกว่ากัน?', '<div id=\"leftcol\" class=\"col c9\" style=\"float: left; width: calc(100% - 320px); font-family: Verdana, Geneva, sans-serif; font-size: medium;\"><div class=\"content\" style=\"font-size: 15px; line-height: 26px;\"><a href=\"https://positioningmag.com/wp-content/uploads/2018/12/open_lazada3.png\" class=\"td-modal-image\"><img src=\"https://positioningmag.com/wp-content/uploads/2018/12/open_lazada3.png\" style=\"text-align: justify; display: block; width: 660px; height: 436.712px;\"></a><p class=\"p1\" style=\"text-align: justify;\"><span style=\"color: rgb(128, 0, 0);\"><strong><span class=\"s1\">LAZADA&nbsp;</span>และ<span class=\"s1\">&nbsp;Shopee&nbsp;</span>สองแพลตฟอร์มช้อปปิ้งออนไลน์ที่แข่งขันกันมาชนิดไม่มีใครยอมใคร ลาซาด้ามี<span class=\"s1\">&nbsp;11.11&nbsp;</span>เทศกาลช้อปปิ้ง เป็นไฮไลต์ให้ช้อปกันกระจาย มาช่วงหลัง<span class=\"s1\">&nbsp;Shopee&nbsp;</span>สร้างวันที่<span class=\"s1\">12.12&nbsp;</span>เป็นเทศกาลช้อปปิ้งของตัวเอง</strong></span></p><p class=\"p1\" style=\"text-align: justify;\">มาดูกันว่า ใครจะมีสัดส่วนยอดซื้อเฉลี่ยต่อการสั่งซื้อ<span class=\"s1\">&nbsp;(AOV – Average Order Value)&nbsp;</span>ที่นักช้อปออนไลน์ชาวไทยซื้อผ่านแพลตฟอร์มอีคอมเมิร์ซของลาซาด้า<span class=\"s1\">&nbsp;(LAZADA)&nbsp;</span>และ ช้อปปี้<span class=\"s1\">&nbsp;(Shopee)</span></p><p class=\"p1\"><a href=\"https://positioningmag.com/wp-content/uploads/2018/12/info1_lazada.png\"><img class=\"alignnone size-full wp-image-1203564\" src=\"https://positioningmag.com/wp-content/uploads/2018/12/info1_lazada.png\" alt=\"\" width=\"800\" height=\"892\" style=\"text-align: justify; display: block; width: 660px; height: 735.9px;\"></a></p><p class=\"p1\"><a href=\"https://positioningmag.com/wp-content/uploads/2018/12/info2_lazada.png\"><img class=\"alignnone size-full wp-image-1203563\" src=\"https://positioningmag.com/wp-content/uploads/2018/12/info2_lazada.png\" alt=\"\" width=\"800\" height=\"1238\" style=\"text-align: justify; display: block; width: 660px; height: 1021.35px; float: none;\"></a></p><p class=\"p1\"></p><h2 class=\"p1\" style=\"text-align: justify; font-family: Prompt; color: rgb(17, 17, 17); line-height: 36px; margin-top: 5px; margin-bottom: 5px;\"><span style=\"color: rgb(51, 102, 255);\"><span class=\"s1\"><b>นักช้อปออนไลน์ไทยยังฮิตจ่ายเงินด้วยระบบ</b></span><span class=\"s2\"><b>&nbsp;COD</b></span></span></h2><p class=\"p1\" style=\"text-align: justify;\"><span class=\"s3\">Cash-on-delivery&nbsp;</span>หรือการชำระเงินเมื่อสินค้าส่งถึงมือ กลายเป็นจุดแข็งของลาซาด้าที่วางระบบมาก่อน ทำให้ได้เปรียบในการรับชำระเงินในแบบที่นักช้อปออนไลน์ไทยนิยม และลดช่องว่างให้กับนักช้อป ซึ่งปัจจุบันคนไทยมียอดถือบัตรเครดิตเพียงแค่<span class=\"s3\">&nbsp;6%&nbsp;</span>ของประชากรทั้งประเทศ ต่างจากสิงคโปร์ที่มียอดผู้ใช้บัตรเครดิตสูงถึง<span class=\"s3\">&nbsp;35%&nbsp;</span>และเมื่อเทียบแล้วในภาพรวมนักช้อปทุกประเทศในอาเซียน นิยมชำระผ่านเงินผ่านบัญชีธนาคารมากกว่าผ่านบัตรเครดิต</p><p class=\"p1\"><a href=\"https://positioningmag.com/wp-content/uploads/2018/12/info3_lazada.png\"><img class=\"alignnone size-full wp-image-1203561\" src=\"https://positioningmag.com/wp-content/uploads/2018/12/info3_lazada.png\" alt=\"\" width=\"800\" height=\"1044\" style=\"text-align: justify; display: block; width: 660px; height: 861.3px;\"></a></p><p class=\"p1\"><a href=\"https://positioningmag.com/wp-content/uploads/2018/12/info4_lazada.png\"><img class=\"alignnone size-full wp-image-1203693\" src=\"https://positioningmag.com/wp-content/uploads/2018/12/info4_lazada.png\" alt=\"\" width=\"800\" height=\"579\" style=\"text-align: justify; display: block; width: 660px; height: 477.675px;\"></a></p></div></div>', '/images/article/3adb3a6c4fd1367a3861d0ccb03d928dd8d1ed00.png', 'LAZADA และ Shopee สองแพลตฟอร์มช้อปปิ้งออนไลน์ที่แข่งขันกันมาชนิดไม่มีใครยอมใคร...', '2019-05-20 19:02:03', '2019-07-09 15:08:17'),
(4, 1, 1, 'สดใส! ‘ช้อปปิ้งออนไลน์’ โตต่อเนื่อง เตรียมงัดโปรพิเศษลดสูงสุด 80%', '<p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\"><span style=\"box-sizing: inherit; color: rgb(255, 0, 0);\">ผู้บริหารช้อปปี้ แอพพลิเคชั่นตลาด<span style=\"box-sizing: inherit; font-weight: 700; line-height: inherit;\">&nbsp;‘ช้อปปิ้งออนไลน์’</span>&nbsp;เผย อัตราการเติบโตของผู้ใช้โทรศัพท์มือถือในไทยเติบโตกว่า 122%&nbsp;</span></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\">นายเทเรนซ์ แพง ประธานฝ่ายปฏิบัติการ ช้อปปี้ แอพลิเคชั่นตลาดออนไลน์บนมือถือแบบ C2C เปิดเผย ปัจจุบันยอดผู้ใช้แอพลิเคชั่นในทุกประเทศรวมกันสูงกว่า 20 ล้านคนแล้ว ว่า นับตั้งแต่เปิดตัวในเอเชียตะวันออกเฉียงใต้และในไต้หวันในเดือนธันวาคมปีที่ผ่านมา</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\"></p><div class=\"flex-video widescreen\" style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px 0px 358.112px; position: relative; height: 0px; overflow: hidden;\"><iframe src=\"https://video.mthai.com/embed.php?m=MMTQ3MjkwMzI1OHwyNmZiNjFhZmU0ZmIyNDc5MjZmMWVhM2M3MmQzOWViNA==M&amp;cn=matichon\" width=\"600\" height=\"338\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\" style=\"box-sizing: inherit; max-width: 100%; position: absolute; top: 0px; left: 0px; width: 636.662px; height: 358.112px; border-width: 0px; border-style: initial;\"></iframe></div><p></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\">โดยมีการทำรายการสั่งซื้อสินค้ากว่า 250,000 รายการต่อวัน มูลค่าซื้อขายสินค้าต่อปีสูงถึง 1,300 ล้านบาท ในส่วนของช้อปปี้ ประเทศไทย ปัจจุบันมีผู้ใช้งานแอพแล้วกว่า 3 ล้านคน ปัจจัยสนับสนุนมาจากเพิ่มความนิยมในการใช้สมาร์ทโฟนและสื่อสังคมออนไลน์อย่างต่อเนื่อง</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\">ทั้งนี้ ผลการสำรวจของสมาคมโฆษณาดิจิทัล (ประเทศไทย) ระบุว่า ประเทศไทยมีฐานผู้ใช้งานสมาร์ทโฟนกว่า 20 ล้านคน มีอัตราการเติบโต ของผู้ใช้โทรศัพท์มือถืออยู่ที่ 122% ขณะที่ 25.8% ของผู้ใช้อินเทอร์เน็ตผ่านโทรศัพท์มือถือ เป็นการใช้งานเพื่อซื้อสินค้าออนไลน์ และมีค่าเฉลี่ยการใช้อินเทอร์เน็ตผ่านโทรศัพท์มือถือต่อวัน อยู่ที่ 5.7 ชั่วโมง</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\"></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\">สะท้อนถึงเทรนด์การช้อปปิ้งออนไลน์ผ่านโทรศัพท์มือถือ ที่มีแนวโน้มว่าจะเพิ่มจำนวนขึ้นอย่างต่อเนื่อง ในส่วน ของชอบปี้ที่มีจุดเด่นในคุณสมบัติ ด้านโซเชียลมีเดีย พบว่าหนึ่งในคุณสมบัติที่ได้รับความนิยมสูงสุด คือการพูดคุยแบบ live chat ได้ภายในแอพ</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5rem; margin-left: 0px; padding: 0px; font-size: 18px; line-height: 1.6; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: &quot;Noto Serif Thai&quot;, &quot;Noto Serif&quot;, &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; background-color: rgb(254, 254, 254);\">ทำให้ผู้ซื้อสามารถสื่อสารกับผู้ขายไม่ว่าจะเป็นการขอข้อมูลเพิ่มเติมเกี่ยว กับผลิตภัณฑ์ หรือตรวจสอบสถานะคำสั่งซื้อได้โดยตรง และ ในวันที่ 1 กันยายนนี้ ชอปปี้จะเริ่มนับถอยหลังสู่แคมเปญ “ชอบปี้ ไนน์ไนน์ โมบาย Shopping เดย์” นำเสนอผลิตภัณฑ์ พร้อมส่วนลดสูงสุด 80% และในวันที่ 9 กันยายน จะมีการกระหน่ำข้อเสนอสุดพิเศษและโปรโมชั่นโดนใจตลอด 24 ชั่วโมง อาทิตย์โปรโมชั่น 99 บาททุกชิ้น และลุ้นรับรางวัลใหญ่ อาทิ ไอโฟน 6s ด้วย</p>', '/images/article/8194f9b9ff89417196f88fd12b834050fb70641c.jpg', 'ผู้บริหารช้อปปี้ แอพพลิเคชั่นตลาด ‘ช้อปปิ้งออนไลน์’ เผย อัตราการเติบโตของผู้ใช้โทรศัพท์มือถือในไทยเติบโตกว่า 122%', '2019-05-20 19:03:28', '2019-07-09 15:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'ใครเป็นคนแอ๊ด',
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ที่อยู่รูป',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'หัวข้อ',
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ลิงค์',
  `start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'เริ่มเมื่อไหร่',
  `end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'จบเมื่อไหร่',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `user_id`, `thumbnail`, `title`, `link`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 1, '/images/banner/b726c39a1ad183a644b177905c5dea4b174c6172.jpg', 'Shopee ขึ้นแท่นแชมป์อีคอมเมิร์ซใหญ่ที่สุดในเอเชียตะวันออกเฉียงใต้', 'https://shopee.co.th/', '2539-09-07', '2539-09-10', '2019-05-20 16:46:49', '2019-06-26 09:42:24'),
(2, 1, '/images/banner/72e8067071b7bba48f509b98c3b9611bc57772e7.jpg', 'แค่เต้นก็ได้บุญ! ‘ช้อปปี้เต้นเพื่อน้อง’ ทุกๆ 1 คลิป ช้อปปี้บริจาค 100 บาทให้มูลนิธิเด็กโสสะฯ', 'https://shopee.co.th/', '2539-09-07', '92561-02-10', '2019-05-20 16:57:50', '2019-06-26 09:42:16'),
(3, 1, '/images/banner/50221d885ad4baa50b24ad3a8423fb1fa6eb53bc.jpg', 'สดใส! ‘ช้อปปิ้งออนไลน์’ โตต่อเนื่อง เตรียมงัดโปรพิเศษลดสูงสุด 80%', 'https://shopee.co.th/', '2562-05-07', '2562-06-25', '2019-05-20 19:04:14', '2019-06-26 09:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ชื่อหมวดหมู่สินค้า',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ข่าวกิจกรรม', '2019-05-20 16:44:36', '2019-05-20 16:44:36'),
(2, 'ข่าวประชาสัมพันธ์', '2019-05-20 16:44:41', '2019-05-20 16:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'หัวข้อ',
  `link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ลิงค์',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'email',
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `link`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'มหาวิทยาลัยราชภัฏเชียงใหม่', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3776.8016230360868!2d98.98455566469464!3d18.806992065260534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3aeb73575db7%3A0xa61747978750d27c!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lij4Liy4LiK4Lig4Lix4LiP4LmA4LiK4Li14Lii4LiH4LmD4Lir4Lih4LmI!5e0!3m2!1sth!2sth!4v1562684247869!5m2!1sth!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'stephenza784@hotmail.com', '202 ถนน ช้างเผือก ตำบล ช้างเผือก อำเภอเมืองเชียงใหม่ เชียงใหม่ 50300', '053 885 555', '2019-05-20 18:47:03', '2019-05-20 18:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `fbpages`
--

CREATE TABLE `fbpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ลิงค์',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fbpages`
--

INSERT INTO `fbpages` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/ShopeeTH/', '2019-05-20 16:42:40', '2019-05-21 02:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ที่อยู่รูป',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, '/images/logo/2d4e6e5505e2854185906c22338d4c3dc87c49f4.png', '2019-06-26 09:29:00', '2019-07-09 16:16:52');

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
(3, '2019_04_28_015857_create_products_table', 1),
(4, '2019_04_28_015912_create_categories_table', 1),
(5, '2019_04_28_015924_create_sales_table', 1),
(6, '2019_04_28_015945_create_sale_details_table', 1),
(7, '2019_04_28_020110_create_user_types_table', 1),
(8, '2019_04_28_034036_create_articles_table', 1),
(9, '2019_04_28_034110_create_banners_table', 1),
(10, '2019_05_16_040304_create_fbpages_table', 1),
(11, '2019_05_20_170123_create_contacts_table', 1),
(12, '2019_06_26_145600_create_logos_table', 1),
(13, '2019_06_26_162700_create_logos_table', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL COMMENT 'หมวดหมู่สินค้า',
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รูปสินค้า',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ชื่อสินค้า',
  `quantity` int(11) NOT NULL COMMENT 'จำนวน',
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รายละเอียดสินค้า',
  `price` double(8,2) NOT NULL COMMENT 'ราคาสินค้า',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_details`
--

CREATE TABLE `sale_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type_id` tinyint(4) NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type_id`, `fullname`, `email`, `email_verified_at`, `password`, `remember_token`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 1, 'Veerapath Pothayee', 'veerapath784@gmail.com', NULL, '$2y$10$BuItNxQ1YOAfvAbuUOYkb.ZKZ/a2oaAVJNDQxRwdtnqiAmMzsSTi2', NULL, '', '', '2019-06-26 09:21:16', '2019-06-26 09:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fbpages`
--
ALTER TABLE `fbpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_details`
--
ALTER TABLE `sale_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fbpages`
--
ALTER TABLE `fbpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_details`
--
ALTER TABLE `sale_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
