-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 10:58 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `univ_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `homepage` tinyint(1) NOT NULL DEFAULT '0',
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `content`, `description`, `image`, `banner_image`, `category`, `sort`, `status`, `homepage`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(15, 'about us', 'about-us', '<div class="row">\r\n<div class="col-md-6">\r\n<div class="kode-thumb"><img class="img-responsive" src="../../tinymce/source/undefinedintro.png" alt="" /></div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="kode-taxt">\r\n<h2>COMPANY INTRODUCTION</h2>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>\r\n<p>otam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia .voluptatem sequi nesciunt.</p>\r\n</div>\r\n</div>\r\n</div>', 'about us', '1pngubfnw.png', NULL, NULL, NULL, 1, 0, NULL, NULL, '2017-11-18 03:07:47', '2017-11-18 03:08:56'),
(16, 'संक्षिप्त परिचय', 'संक्षिप्त-परिचय', '<div class="row">\r\n<div class="col-md-6">\r\n<div class="kode-thumb"><img src="../../tinymce/source/undefinedintro.png" alt="" /></div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="kode-taxt">\r\n<h2>संक्षिप्त परिचय</h2>\r\n<p><span class="translation">&nbsp;</span></p>\r\n<p class="text-justify">क्यान्सर कोशिकाहरु को एक असामान्य वृद्धि हो जो एक अनियंत्रित तरिका मा फैलन्छ। क्यान्सर एक रोग होइन। यो 100 भन्दा धेरै र विशिष्ट रोगहरूको एक समूह हो। क्यान्सरले शरीरको कुनै पनि ऊतक समावेश गर्न सक्छ र प्रत्येक शरीर क्षेत्रमा धेरै प्रकारका हुन्छन्।<br />जब स्तन मा कोशिकाहरु नियन्त्रण देखि बाहिर जान्छ तब स्तन क्यान्सर शुरू हुन्छ। यी कक्षहरू प्रायः एक ट्यूमरको रूपमा बनाउँछ जुन प्रायः एक्स- रेमा देख्न सकिन्छ वा लम्पको रूपमा महसुस गर्न सकिन्छ। स्तनको क्यान्सर प्रायः सम्पूर्ण महिलाहरुमा हुन्छ, तर पुरुषले पनि स्तन क्यान्सर पाउन सक्छन्। <br />विश्वव्यापी रूपमा क्यान्सर मृत्युको एक प्रमुख कारण बनेको छ। नेपालमा फोक्सोको क्यान्सर पछि स्तन क्यान्सर दोस्रो सबैभन्दा बढी हुन्छ। जानकारीको कमी, जागरूकता, विशेष गरी ग्रामीण क्षेत्रहरूमा महिलाहरु बीच गरीबी र अपरिपक्वताका कारण स्तन क्यान्सर हरेक वर्ष बढ्दै गएको छ।<br />तथ्याङ्कअनुसार 1,200 भन्दा बढी रोगीहरू नेपालका प्रमुख अस्पतालहरूमा बीपी कोइराला मेमोरियल क्यान्सर अस्पताल,भक्तपुर क्यान्सर अस्पताल, टीयू शिक्षण अस्पताल र नेपाल क्यान्सर अस्पताल र अनुसन्धान केन्द्रमा उपचार गरिरहेका छन्। विश्व स्वास्थ्य संगठनको रिपोर्ट अनुसार, क्यान्सर देश प्रोफाइल 2014, हरेक वर्ष कुल मिलाएर 186,000 मान्छे, 6,900 पुरुष र 7,400 महिलाहरु, क्यान्सरको कारणले मरेका छन। 7,400 महिलाहरूमध्ये 11.6 प्रतिशत स्तनको क्यान्सर र 7 प्रतिशत ओभररी क्यान्सरबाट मृत्यु भएको छ।</p>\r\n</div>\r\n</div>\r\n</div>', 'संक्षिप्त परिचय', '1pngivdji.png', NULL, NULL, NULL, 1, 0, NULL, NULL, '2017-11-18 03:36:03', '2017-11-18 04:18:49'),
(17, 'स्तन क्यान्सर को संक्षिप्त परिचय', 'स्तन-क्यान्सर-को-संक्षिप्त-परिचय', '<p class="text-justify">क्यान्सर कोशिकाहरु को एक असामान्य वृद्धि हो जो एक अनियंत्रित तरिका मा फैलन्छ। क्यान्सर एक रोग होइन। यो 100 भन्दा धेरै र विशिष्ट रोगहरूको एक समूह हो। क्यान्सरले शरीरको कुनै पनि ऊतक समावेश गर्न सक्छ र प्रत्येक शरीर क्षेत्रमा धेरै प्रकारका हुन्छन्।<br />जब स्तन मा कोशिकाहरु नियन्त्रण देखि बाहिर जान्छ तब स्तन क्यान्सर शुरू हुन्छ। यी कक्षहरू प्रायः एक ट्यूमरको रूपमा बनाउँछ जुन प्रायः एक्स- रेमा देख्न सकिन्छ वा लम्पको रूपमा महसुस गर्न सकिन्छ। स्तनको क्यान्सर प्रायः सम्पूर्ण महिलाहरुमा हुन्छ, तर पुरुषले पनि स्तन क्यान्सर पाउन सक्छन्। <br />विश्वव्यापी रूपमा क्यान्सर मृत्युको एक प्रमुख कारण बनेको छ। नेपालमा फोक्सोको क्यान्सर पछि स्तन क्यान्सर दोस्रो सबैभन्दा बढी हुन्छ। जानकारीको कमी, जागरूकता, विशेष गरी ग्रामीण क्षेत्रहरूमा महिलाहरु बीच गरीबी र अपरिपक्वताका कारण स्तन क्यान्सर हरेक वर्ष बढ्दै गएको छ।<br />तथ्याङ्कअनुसार 1,200 भन्दा बढी रोगीहरू नेपालका प्रमुख अस्पतालहरूमा बीपी कोइराला मेमोरियल क्यान्सर अस्पताल,भक्तपुर क्यान्सर अस्पताल, टीयू शिक्षण अस्पताल र नेपाल क्यान्सर अस्पताल र अनुसन्धान केन्द्रमा उपचार गरिरहेका छन्।</p>', 'क्यान्सर कोशिकाहरु को एक असामान्य वृद्धि हो जो एक अनियंत्रित तरिका मा फैलन्छ', 'top-logo-eduoverallpngijb70.png', NULL, NULL, NULL, 1, 1, NULL, NULL, '2017-11-18 04:23:53', '2017-11-18 04:25:37'),
(18, 'जोखिम कारकहरू', 'जोखिम-कारकहरू', '<div class="row">\r\n<div class="col-md-6">\r\n<div class="kode-thumb"><img src="../../../tinymce/source/undefinedcauses.jpg" alt="" /></div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="kode-taxt">\r\n<h3>जोखिम कारकहरू</h3>\r\n<ul class="list-group">\r\n<li class="list-group-item">माहिला हुनु स्तन कैंसरको ठुलो काराक हो। पुरुसमा भन्दा माहिलामा यो रोग १०० गुना बढी हुनछ।</li>\r\n<li class="list-group-item">उमेर सानगाि जोकिम पानि बढ्दै जानछ।</li>\r\n<li class="list-group-item">पारिवारमा कुनाि माहिलामा पहिला कैंसर हुनु</li>\r\n<li class="list-group-item">प्रारम्भिक मीनारचे (&lt;12yrs) र ढिलो रजोनिवृत्ति (&gt; 55yrs) ले स्तन कैंसरको लागि जोखिम बढ्छ।</li>\r\n<li class="list-group-item">जन्म नदिने वा 30 वर्ष को उमेरपछि पहिलो बच्चालाई जन्म दिने गर्नाले स्तन क्यान्सरको खतरा बढाउँछ</li>\r\n<li class="list-group-item">मोटी महिलाहरुमा स्तन क्यान्सरको बढि जोखिम छ।</li>\r\n<li class="list-group-item">धूम्रपान, शराब उपभोग र उच्च फैटी आहारले स्तन कैंसरको जोखिम बढ्छ।</li>\r\n<li class="list-group-item">गर्भनिरोधक गोलीहरुको लामो समय सम्म प्रयोग।</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', 'जोखिम कारकहरू', '1pngxgcra.png', NULL, NULL, NULL, 1, 0, NULL, NULL, '2017-11-18 07:39:06', '2017-11-18 12:01:21'),
(19, 'लक्षणहरू', 'लक्षणहरू', '<div class="row">\r\n<div class="col-md-6">\r\n<div class="kode-thumb"><img src="../../../tinymce/source/undefinedNipple-Symptoms.jpg" alt="" /></div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="kode-taxt">\r\n<ul class="list-group">\r\n<li class="list-group-item">स्तन मा लम्प वा मास</li>\r\n<li class="list-group-item">स्तनको सूजन</li>\r\n<li class="list-group-item">छाला आयोम</li>\r\n<li class="list-group-item">निपल उलटा</li>\r\n<li class="list-group-item">छातीमा धैर्यता वा स्केलेपन</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', 'लक्षणहरू', '1pnguqrju.png', NULL, NULL, NULL, 1, 1, NULL, NULL, '2017-11-18 10:05:57', '2017-11-18 12:07:11'),
(20, 'जोगिने उपायहरू', 'जोगिने-उपायहरू', '<div class="row">\r\n<div class="col-md-2">&nbsp;</div>\r\n<div class="col-md-8">\r\n<div class="row">\r\n<div class="col-md-6">\r\n<div class="kode-event-list-2">\r\n<div class="kode-thumb"><img src="../../../tinymce/source/undefinedBreast-Cancer-Prevention.jpg" alt="" /></div>\r\n<div class="kode-text">\r\n<h4 style="color: #cc3367;">जीवनशैली परिमार्जन</h4>\r\n<p class="title">Wednesday Januaur 19th, 2015</p>\r\n<a class="btn-filled" href="जीवनशैली-परिमार्जन">Read more</a></div>\r\n</div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="kode-event-list-2">\r\n<div class="kode-thumb"><img src="../../../tinymce/source/undefinedmethods.jpg" alt="" /></div>\r\n<div class="kode-text">\r\n<h4 style="color: #cc3367;">स्तन स्क्रीनिंग विधिहरू</h4>\r\n<p class="title">Wednesday Januaur 19th, 2015</p>\r\n<a class="btn-filled" href="स्तन-स्क्रीनिंग-विधिहरू">Read more</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'जोगिने उपायहरू', '1png6gbjy.png', NULL, NULL, NULL, 1, 1, NULL, NULL, '2017-11-18 10:11:55', '2017-11-18 12:10:48'),
(21, 'जीवनशैली परिमार्जन', 'जीवनशैली-परिमार्जन', '<div class="row">\r\n<div class="col-md-6">\r\n<div class="kode-thumb"><img src="../../../tinymce/source/undefinedlifestyle%20modification.jpg" alt="" /></div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="kode-taxt">\r\n<h2>जीवनशैली परिमार्जन</h2>\r\n<ul class="list-group">\r\n<li class="list-group-item">कम्तीमा 30 मिनेटमा महिलाहरु लाई दैनिक जीवनको भागको रूपमा नियमित रूपमा शारीरिक व्यायाम हुनुपर्छ।</li>\r\n<li class="list-group-item">शराब, धुम्रपान र उच्च फैटी आहार खपतबाट बचाउनु</li>\r\n<li class="list-group-item">कम फ्याट र उच्च फाइबर आहार को उपभोग गर्नु</li>\r\n<li class="list-group-item">स्वस्थ शरीरको वजन राख्नु</li>\r\n<li class="list-group-item">30 वर्ष को उमेर देखि पहिले बच्चा जन्म</li>\r\n<li class="list-group-item">१.५ देखी २ वर्षसम्म बच्चालाई स्तनपान गराउने</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', 'जीवनशैली परिमार्जन', '1pngjbnze.png', NULL, NULL, NULL, 1, 1, NULL, NULL, '2017-11-18 10:18:05', '2017-11-18 12:13:11'),
(22, 'स्तन स्क्रीनिंग विधिहरू', 'स्तन-स्क्रीनिंग-विधिहरू', '<div class="row">\r\n<div class="col-md-6">\r\n<div class="kode-thumb"><img src="../../tinymce/source/undefinedintro.png" alt="" /></div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="kode-taxt">\r\n<h2>स्तन स्क्रीनिंग विधिहरू</h2>\r\n<ul class="list-group">\r\n<li class="list-group-item">स्तन आत्म परीक्षा</li>\r\n<li class="list-group-item">क्लिनिकल स्तन परीक्षा</li>\r\n<li class="list-group-item">म्यामोग्राफी</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', 'स्तन स्क्रीनिंग विधिहरू', '1pngfbpib.png', NULL, NULL, NULL, 1, 1, NULL, NULL, '2017-11-18 10:20:05', '2017-11-18 11:09:56'),
(28, 'स्तन आत्म परीक्षा', 'स्तन-आत्म-परीक्षा', '<section class="text-6_img-6">\r\n<div class="max_width">\r\n<div class="row">\r\n<div class="bottom_section_divider">\r\n<div class="col-md-8">\r\n<h2>महिनामा एक पटक</h2>\r\n<p>हरेक उमेरको वयस्क महिलाहरूलाई कम्तिमा महिनामा स्तनपान-परीक्षाहरू प्रदर्शन गर्न उत्प्रेरित गरिन्छ।</p>\r\n<p><em>&ldquo;चालीस प्रतिशत निदान गरिएको स्तन क्यान्सर्स महिलाहरु द्वारा एक लुम्प लगाउने पत्ता लगाइयो, त्यसैले नियमित स्तनपान आत्म-परीक्षण स्थापना गर्नु निकै महत्त्वपूर्ण छ।&rdquo; </em></p>\r\n<p>स्तनपानमा तपाईले स्तन कसरी हेर्नु भएको छ र तपाईसँग कुनै परिवर्तन भएमा तपाईले तपाइँको स्वास्थ्य सेवालाई सचेत गराउन सजिलो हुन मद्दत पुर्याउन म्यासेग्रामले क्यान्सर पत्ता लगाउन मद्दत पुर्याउन सक्छ।</p>\r\n</div>\r\n<div class="col-md-4">\r\n<div class="relative"><img class="img-responsive" src="../../tinymce/source/undefinedself1.jpg" alt="" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<hr />\r\n<section class="text-6_img-6">\r\n<div class="max_width">\r\n<div class="row">\r\n<div class="bottom_section_divider reverse">\r\n<div class="col-md-4">\r\n<div class="relative reverse">\r\n<div class="">\r\n<div data-alt="breast cancer self-exam instructions" data-picture=""><img class="img-responsive" src="../../tinymce/source/undefinedself2.jpg" alt="" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="col-md-8">\r\n<h2>छाती स्व-परीक्षा कसरी गर्ने?</h2>\r\n<h3>1)शावरमा&nbsp;</h3>\r\n<p>आफ्नो औंलाहरु को पैड को उपयोग गरेर, आफ्नो पुरा स्तन को चारै ओर एक परिपत्र पैटर्न मा केन्द्र को बाहिर को बाहिर जाँदैछ, पुरा स्तन र आंगन क्षेत्र को जांच। प्रत्येक महिना कुनै पनि लम्प, मोटोलिङ्ग, वा कडा गाँटको लागि भ्याएसम्म दुवै जाँच गर्नुहोस्। कुनै पनि परिवर्तनलाई ध्यान दिनुहोस् र तपाईंको स्वास्थ्य सेवा प्रदायक द्वारा मूल्यांकन गरिएको लम्पहरू पाउनुहोस्।</p>\r\n<h3>2)ऐना अगाडिको&nbsp;</h3>\r\n<p>तपाईंको सेतोहरू आफ्नो पक्षमा आफ्नो हातले निरीक्षण गर्नुहोस्। अर्को, आफ्नो हात उच्च माथि उठाउनुहोस्।</p>\r\n<p>सम्वन्धमा कुनै पनि परिवर्तनको लागि हेर्नुहोस्, कुनै पनि सूजन, छालाको आयाम, वा निप्पलमा परिवर्तनहरू। अर्को, आफ्नो हड्डीहरू आफ्नो हिप्समा बाकी र आफ्नो छाती मांसपेशिहरु लाई फ्लेक्स गर्न दृढतापूर्वक थिच्नुहोस्। बायाँ र दायाँ सेतोहरू ठीकसँग मेल खाँदैन र mdash; केही महिला का सेन्सहरूले गर्छन, त्यसैले कुनै पनि आयाम, पछाडी वा परिवर्तनहरू हेर्छन्, विशेष गरी एक पक्षमा।</p>\r\n<h3>3) पल्टिनु</h3>\r\n<p>तल झर्दा, छातीको ऊतक छाती पर्खालको साथमा उभिन्छ। तपाईंको दाँया पछाडि तपाईंको दाहिने क्यान्सर र दाहिने हातमा एक तकरी राख्नुहोस्। तपाईंको बाँया हात प्रयोग गरेर, तपाईंको औंलाका पैडहरू तपाईंको दायाँ स्तनको वरिपरि धीरे सानो सर्कुलर गतिहरूमा सम्पूर्ण छातीको क्षेत्रमा राख्छ र तीर ।</p>\r\n<p>हल्का, मध्यम, र फर्म दबाव प्रयोग गर्नुहोस्। निपल निचोड; छुट र लम्पहरूको जाँच गर्नुहोस्। तपाईंको बाँया स्तनको लागि यी चरणहरू दोहोर्याउनुहोस्।</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', 'स्तन आत्म परीक्षा', '1pnghh3zw.png', NULL, NULL, NULL, 1, 0, NULL, NULL, '2017-11-18 11:46:15', '2017-11-18 12:01:35'),
(31, 'क्लिनिकल स्तन परीक्षा', 'क्लिनिकल-स्तन-परीक्षा', '<section class="text-6_im">\r\n<div class="max_width">\r\n<div class="row">\r\n<div class="bottom_section_divider reverse">\r\n<div class="">\r\n<div class="col-md-8">\r\n<h2>छाला र ऊतकको भिजुअल चेक</h2>\r\n<p>एक नैदानिक ​​छाती परीक्षाले हेल्थकेयर प्रोफेशनल द्वारा प्रदर्शन गरेको छ जसले धेरै प्रकारका असामान्य वस्तुहरू र चेतावनी चिन्हहरू पहिचान गर्न प्रशिक्षण दिएको छ। यो ई-अफिस परीक्षा तपाइँको वार्षिक चिकित्सक वा स्त्री रोग विशेषज्ञ द्वारा तपाइँको वार्षिक परीक्षामा पूर्णतया पूरा हुनेछ, जबकि तपाईंको छाती स्व-परीक्षा घरमा एकैचोटि एकैचोटि प्रत्येक हुनुपर्दछ भन्ने कुरा हो। एक नैदानिक ​​छाती परीक्षाको समयमा, तपाईंको स्वास्थ्य सेवा प्रदायकले तपाईंको छातीको उपस्थिति जाँच गर्दछ। तपाईं आफ्नो टाउको मा आफ्नो हातहरू उठाउन सोध्न सकिन्छ, तिनीहरूलाई तपाईंको पक्षले फाँस्न, वा आफ्नो हिप्स विरुद्ध आफ्नो हात थिच्नुहोस्। यी पोषणहरूले तपाईंको स्वास्थ्य सेवा प्रदायकलाई तपाईंको छातीका बीच आकार वा आकृतिमा भिन्नता खोज्न अनुमति दिन्छ। तपाईंको छातीहरू समातेको छाला कुनै भीला, आयाम, वा अन्यको लागि जाँच गरिएको छ। तपाईंको निपल्स जाँच गर्न सकिन्छ कि यदि हल्का निचोड हुँदा द्रव व्यक्त गरिन्छ।</p>\r\n</div>\r\n<div class="col-md-4">\r\n<div class="relative reverse">\r\n<div class="shadow_box_img ">\r\n<div data-alt="" data-picture=""><img class="img-responsive" src="../../tinymce/source/undefinedcli.jpg" alt="" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<hr />\r\n<section class="text-6_img-6">\r\n<div class="max_width">\r\n<div class="row">\r\n<div class="bottom_section_divider">\r\n<div class="col-md-4">\r\n<div class="relative">\r\n<div class="">\r\n<div data-alt="manual clinical breast exam" data-picture=""><img class="img-responsive" src="../../tinymce/source/undefinedclin1.jpg" alt="" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="col-md-8">\r\n<p><strong>असामान्य बनावट वा लम्पको लागि एक म्यानुअल जाँच </strong></p>\r\n<p>औंलाहरूका पैडहरू प्रयोग गर्दै, तपाईंको हेल्थकेयर प्रदायकले तपाईंको सम्पूर्ण स्तन, कमर र कलरबोन क्षेत्रको कुनै पनि लम्प वा असामान्य वस्तुहरूको जाँच गर्दछ। यो उल्लेखनीय छ कि केहि महिलाहरु संग स्तन छाती छ जो सानो फ्रिबस बम्प्स या पतली माथी को स्तन भरने वाला छ, जो फाइब्रोस्स्टिक स्तनों को रूप मा जानिन्छ। समग्र लम्पी ऊतक भनेको तपाईंको प्रदायकलाई नोट गर्न चाहानुहुन्छ तर क्यान्सरसँग सम्बन्धित छ।</p>\r\n<p>एक संदिग्ध लम्प - तपाईंको चिकित्सक को प्रकार जाँच को लागी छ - सामान्यतया एक माउ आकार को बारे मा पहिले कुनै को यो स्तन ऊतक मा महसूस गर्न सक्छन्। म्यानुअल परीक्षा एक तरफ र त्यसपछि अर्कोमा गरिन्छ। तपाईंको स्वास्थ्य सेवा प्रदायक पनि स्तन बढि लिम्फ नोड्स को जाँच गर्न को लागी कि उनि बढे भएका हो ।</p>\r\n<p><strong>कुनै पनि शंकास्पद क्षेत्रको एक आकलन</strong></p>\r\n<p>यदि लम्प पत्ता लाग्यो भने, तपाईंको हेल्थकेयर प्रदायकले यसको साइज, आकार, र बनावटलाई ध्यान दिनेछ। उनले या त्यो पनि जाँच गर्न को लागी कि यदि लम्प सजिलै संग चल्छ। बेनाग lumps प्रायः क्यान्सरयुक्त व्यक्तिबाट अलग महसुस हुन्छ, तर कुनै पनि ढोका भेट्टाउन सम्भवतः थप निदान उपायहरूको साथ परीक्षण गर्न आवश्यक छ।.</p>\r\n<p>यो उपयोगी हुन सक्छ कि नरम, चिकनी, राउन्ड र चलिरहेको लम्प्स जुन बेनामी ट्यूमर या सिस्ट हुन सक्छ। कठोर र अजीब आकारको एक ढोका र छाती भित्र दृढतापूर्वक संलग्न हुन्छ कि क्यान्सर हुने सम्भव छ, तर समस्या निदान गर्न थप परीक्षण आवश्यक पर्दछ।</p>\r\n<p><strong>क्लिनिकल स्तन परीक्षण को मूल्य </strong></p>\r\n<p>क्लिनिकल स्तन परीक्षा प्रारम्भिक पत्ता लगाउने एक महत्त्वपूर्ण भाग हो। यद्यपि अधिकांश स्तनहरू स्तनपान-परीक्षामार्फत पत्ता लगाउँछन्, एक अनुभवी पेशेवरले एक संदिग्ध स्थानलाई ध्यान दिन सक्छ जसले रोगीको मनमा चेतावनीको रूपमा दर्ता गर्न असफल भयो।</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', 'क्लिनिकल स्तन परीक्षा', '1pngkaktr.png', NULL, NULL, NULL, 1, 0, NULL, NULL, '2017-11-18 16:03:35', '2017-11-18 16:16:49'),
(32, 'म्यामोग्रराम', 'म्यामोग्रराम', '<section class="text-6_img-6">\r\n<div class="max_width">\r\n<div class="row">\r\n<div class="bottom_section_divider">\r\n<div class="col-md-8">\r\n<h2>म्यामोग्रराम के हो?</h2>\r\n<p>एक म्यामोग्रराम एक्स-रे हो जसले योग्य विशेषज्ञलाई कुनै संदिग्ध क्षेत्रका लागि स्तन ऊतकको जाँच गर्न अनुमति दिन्छ। स्तन ईयनकरण विकिरण को एक सानो खुराक लाई स्तन को ऊतक को चित्रण गर्दछ</p>\r\n<p>&nbsp;</p>\r\n<h2>मलाई म्यामोग्रराम किन आवश्यकता छ?</h2>\r\n<p>म्यामोग्रराम प्राय स्तन छाला देखाउन सक्नु अघि यो हुन सक्छ। तिनीहरू पनि माइक्रिकेलेशनको नामले क्याल्सियमको साना समूहहरू देखाउन सक्छन्। लम्प्स वा चक्कुहरू क्यान्सर, फैटी कोशिकाहरू, वा अन्य अवस्थाहरू जस्तै सिस्ट्सको कारण हुन सक्छ। थप परीक्षणहरू खोज्न आवश्यक छ कि यदि असामान्य कक्षहरू उपस्थित छन् भने ।</p>\r\n</div>\r\n<div class="col-md-4">\r\n<div class="relative">\r\n<div class="">\r\n<div data-alt="mammogram machine" data-picture=""><img class="img-responsive" src="../../tinymce/source/undefinedmamo.jpg" alt="" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class="img-12">\r\n<div class="max_width">\r\n<div class="row">\r\n<div class="bottom_section_divider">\r\n<div class="grid_12 mobile_grid_4">\r\n<div class="relative">\r\n<div class="">&nbsp;</div>\r\n<p><strong>सबै महिलाहरूको लागि सिफारिसहरू::</strong></p>\r\n<ul>\r\n<li>40 बर्ष र माथिका महिलाहरु हरेक 1 वा 2 वर्षमा मेमोग्राममा हुनुपर्दछ।</li>\r\n<li>महिलाहरु लाई 40 बर्ष भन्दा कम उमेर र स्तनपानको लागी खतरा कारकहरु लाई आफ्नो स्वास्थ्य सेवा को पेशेवर ले सोध्नु पर्छ कि क्यामेमेम्बर सल्लाहकार हो र कतिपय प्रायः उनलाई।</li>\r\n</ul>\r\n<p>यहां सम्म कि महिलाहरु को लागी कुनै लक्षण छैन र स्तनपान को लागि कुनै ज्ञात जोखिम को नियमित रूप देखि म्यागोग्राफ निर्धारित गर्न को लागी संभव छ कि संभवतः संभवतः स्तन कैंसर को ठेगाना लगाना चाहिए।.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', 'म्यामोग्रराम', '1pnggcxt5.png', NULL, NULL, NULL, 1, 0, NULL, NULL, '2017-11-18 16:41:06', '2017-11-18 16:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `homepage` tinyint(1) NOT NULL DEFAULT '0',
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `slug`, `author`, `st_date`, `end_date`, `content`, `description`, `image`, `banner_image`, `category`, `sort`, `status`, `homepage`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(6, 'अन्तर्राष्ट्रिय क्यान्सर सम्मेलन बैठक', 'अन्तर्राष्ट्रिय-क्यान्सर-सम्मेलन-बैठक', 'काठमाडौं', '06/30/2017', '11/07/2017', '<div class="row">\r\n<div class="col-md-6">\r\n<div class="kode-thumb"><img src="../../../tinymce/source/undefined_J_03709.jpg" /></div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="kode-taxt">\r\n<h2>विश्व क्यान्सर दिवस समारोह 2017</h2>\r\n<p class="&rdquo;text-justify&rdquo;">विश्व क्यान्सर दिवसको अवसरमा 2017, "नेपाल क्यान्सर राहत सोसाइटी" (एनसीआरएस) "हामी कर सकते हो, मई 2016" हुन सक्छ "लाइन्स क्लब इन्टरनेशनल, जिल्ला 325 ए 1 र ए 2" को साथमा गर्व संगठित मास मोटर रैली चौथो फेब्रुअरी, शनिवार (22 औँघ, 2073)। रैली भर्कुटिमंदापबाट सुरु भएको र भक्तपुर क्यान्सर अस्पतालमा समाप्त भयो। त्यसपछि मोटर रैली नटापोलम म्यानपावरमा जानु भएको थियो जहाँ सांस्कृतिक कार्यक्रम र मोमबत्तीको हल्का समारोहले फलफूल ढंगले पूरा गरेको थियो।</p>\r\n</div>\r\n</div>\r\n</div>', 'अन्तर्राष्ट्रिय क्यान्सर सम्मेलन बैठक', 'img-2682jpg4ybaf.JPG', NULL, NULL, NULL, 1, 1, NULL, NULL, '2017-11-18 06:10:28', '2017-11-18 06:32:10'),
(7, 'विश्व क्यान्सर दिवस समारोह 2017', 'विश्व-क्यान्सर-दिवस-समारोह-2017', 'काठमाडौं', '02/04/2017', '05/05/2017', '<div class="row">\r\n<div class="col-md-6">\r\n<div class="kode-thumb"><img src="../../tinymce/source/undefined_J_03709.jpg" alt="" /></div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="kode-taxt">\r\n<h2>विश्व क्यान्सर दिवस समारोह 2017</h2>\r\n<p class="&rdquo;text-justify&rdquo;">विश्व क्यान्सर दिवसको अवसरमा 2017, "नेपाल क्यान्सर राहत सोसाइटी" (एनसीआरएस) "हामी कर सकते हो, मई 2016" हुन सक्छ "लाइन्स क्लब इन्टरनेशनल, जिल्ला 325 ए 1 र ए 2" को साथमा गर्व संगठित मास मोटर रैली चौथो फेब्रुअरी, शनिवार (22 औँघ, 2073)। रैली भर्कुटिमंदापबाट सुरु भएको र भक्तपुर क्यान्सर अस्पतालमा समाप्त भयो। त्यसपछि मोटर रैली नटापोलम म्यानपावरमा जानु भएको थियो जहाँ सांस्कृतिक कार्यक्रम र मोमबत्तीको हल्का समारोहले फलफूल ढंगले पूरा गरेको थियो।</p>\r\n</div>\r\n</div>\r\n</div>', 'विश्व क्यान्सर दिवस समारोह 2017', '1pngahykm.png', NULL, NULL, NULL, 1, 1, NULL, NULL, '2017-11-18 06:39:44', '2017-11-18 06:39:44'),
(8, 'स्तन र गर्भाशय क्यान्सरमा जागरूकता', 'स्तन-र-गर्भाशय-क्यान्सरमा-जागरूकता', 'काठमाडौं', '11/14/2017', '11/29/2017', '<div class="row">\r\n<div class="col-md-6">\r\n<div class="kode-thumb"><img src="../../tinymce/source/undefined12.jpg" alt="" /></div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="kode-taxt">\r\n<h2>स्तन र गर्भाशय क्यान्सरमा जागरूकता</h2>\r\n<p class="&rdquo;text-justify&rdquo;">माघ 5, 2073 नेपाल क्यान्सर राहत सोसाइटी र भक्तपुर क्यान्सर अस्पतालका साथ बाइस एड्हराज समुजले सफलतापूर्वक स्तन कैंसर र नक्सलका गर्भाशय क्यान्सरको जागरण कार्यक्रमलाई नंदी विद्यालय परिसरमा आयोजित गरेको छ। प्रजनन स्वास्थ्य र क्यान्सरको बारेमा भक्तपुर क्यान्सर अस्पतालबाट डा। अन्नाता थापासँग कुराकानी गर्न धेरै सहभागीहरू थिए।</p>\r\n</div>\r\n</div>\r\n</div>', 'माघ 5, 2073 नेपाल क्यान्सर राहत सोसाइटी र भक्तपुर क्यान्सर अस्पतालका साथ', '12jpgmpcja.jpg', NULL, NULL, NULL, 1, 1, NULL, NULL, '2017-11-18 06:53:52', '2017-11-18 06:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `homepage` tinyint(1) NOT NULL DEFAULT '0',
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `slug`, `content`, `description`, `image`, `banner_image`, `category`, `sort`, `status`, `homepage`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(27, 'testvideo2', 'testvideo2', '<p class="text-center"><video controls="controls" width="80%" height="auto">\r\n<source src="../../tinymce/source/undefinedvideo1%20(1).mp4" type="video/mp4" /></video></p>', 'testvideo2', '1pngm5sfo.png', NULL, NULL, NULL, 1, 0, NULL, NULL, '2017-11-18 12:02:18', '2017-11-18 13:26:37'),
(28, 'testvideo1', 'testvideo1', '<p><video controls="controls" width="80%" height="auto">\r\n<source src="../../tinymce/source/undefinedHow%20to%20Recognize%20Breast%20Cancer%20Symptoms%5Bvia%20torchbrowser.com%5D.mp4" type="video/mp4" /></video></p>', 'testvideo1', '1pngliffy.png', NULL, NULL, NULL, 1, 0, NULL, NULL, '2017-11-18 19:49:50', '2017-11-18 20:15:35'),
(29, 'testvideo3', 'testvideo3', '<p><video controls="controls" width="80%" height="auto">\r\n<source src="../../tinymce/source/undefinedvideo1%20(1).mp4" type="video/mp4" /></video></p>', 'testvideo3', '1pngdbc84.png', NULL, NULL, NULL, 1, 1, NULL, NULL, '2017-11-19 03:16:33', '2017-11-19 03:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linksrc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `parentOf` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `linksrc`, `type`, `sort`, `status`, `parentOf`, `created_at`, `updated_at`) VALUES
(1, 'Home', '/home', 1, NULL, 1, 0, '2017-09-12 12:30:00', '2017-09-12 13:23:56'),
(2, 'Contact Us', '/contact', 1, NULL, 0, 0, '2017-09-12 12:30:20', '2017-10-08 10:18:15'),
(9, 'apple', 'aplple', 0, NULL, 1, 0, '2017-09-23 12:26:49', '2017-09-23 12:26:49'),
(10, '1asd', 'asd', 1, NULL, 1, 1, '2017-09-23 12:29:13', '2017-09-23 12:59:07'),
(11, 'test', 'test', 1, NULL, 1, 9, '2017-09-23 12:41:22', '2017-09-23 12:41:22'),
(12, 'test', '/test', 1, NULL, 1, 2, '2017-10-10 02:21:17', '2017-10-10 02:21:17'),
(13, 'ghhj', 'kj', 1, NULL, 1, 11, '2017-10-10 02:22:42', '2017-10-10 02:22:42');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2017_08_21_083534_create_menus_table', 1),
(8, '2017_08_22_044247_create_modules_table', 1),
(9, '2017_09_24_045444_create_articles_table', 2),
(10, '2017_11_14_172642_create_news_table', 3),
(11, '2017_11_18_051652_create_events_table', 4),
(12, '2017_11_18_124929_create_galleries_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linksrc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `sort` int(11) NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `linksrc`, `status`, `sort`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Menu', '/admin/menu', 1, 1, 'fa fa-bars', NULL, NULL),
(2, 'Article', '/admin/article', 1, 2, 'fa fa-external-link', NULL, NULL),
(3, 'Gallery', '/admin/gallery', 1, 3, 'fa fa-picture-o', NULL, NULL),
(4, 'News', '/admin/news', 1, 4, 'fa fa-newspaper-o', NULL, NULL),
(6, 'Events', '/admin/events', 1, 5, 'fa fa-calendar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `homepage` tinyint(1) NOT NULL DEFAULT '0',
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `author`, `date`, `content`, `description`, `image`, `banner_image`, `category`, `sort`, `status`, `homepage`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(9, 'स्वस्थ जीवनशैलीको लागि महिलाहरु', 'स्वस्थ-जीवनशैलीको-लागि-महिलाहरु', 'jes', '11/08/2017', '<div class="row">\r\n<div class="col-md-6">\r\n<div class="kode-thumb"><img class="img-responsive" src="../../tinymce/source/undefinedintro.png" alt="" /></div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="kode-taxt">\r\n<h2>&nbsp;</h2>\r\n<p class="text-justify">काठमाडौं, 24 सेप्टेम्बर (- सिन्धुपाल्चोक) - शुक्रवार बिहान 2,000 नेपाली महिलाहरूले नेपालकै राजधानीमा गिलासथोनको सबैभन्दा ठूलो महिला महिलाको भागमा भाग लिइन्। यो कार्यक्रम नेपालमा पहिलो महिला विश्वकप पिन्लाथनको अन्तरराष्ट्रिय संस्करणको रूपमा आयोजित गरिएको थियो "महिला सशक्तीकरणको लागि हिड वा जोग"। उमेर र व्यवसायको बावजूद, शहरी महिलाहरूले मरुथनमा भाग लिनुभयो स्वस्थ जीवनशैली अपनाउने सन्देश फैलाउँदै। राजधानीको दशरथथ स्टेडियमबाट शुरु हुने 21 किमी आधा-मराथन, 10 किलोमिटर, 5 किलोमिटर र 3 किलोमिटरको दौडमा सबै उमेरका महिलाहरु। यसको प्रकारको पहिलो, पिन्जेनाथले जवान केटीहरूको सेतो र गुलाबी पहाइरहेका थिए जसलाई टी-शर्टले "म एक गुलाबी बहिनी हुँ" लेखे। सामाजिक घटनाले महिलाको स्वास्थ्य र फिटनेसलाई प्रोत्साहित गर्न र कैंसरको लागि जागरूकता सिर्जना गर्न उद्देश्य राखेको छ, विशेष गरी स्तन क्यान्सर। "पिन्ताथन भारतमा एक सक्रिय जीवन उठाउन र आफ्नै स्वास्थ्यको हेरचाह गर्न प्रोत्साहित गर्न शुरु भएको थियो। र यही कारण हामी नेपालमा छौं," पिन्केथोनको संस्थापक मिलिन्ड सोमनले सिन्हाउलाई भने। कार्यक्रम एक समय मा आयोजित गरिएको छ जब शहरी महिलाहरु अत्यधिक काम र घरेलू दबाव र अस्वस्थ जीवनशैली को कारण विभिन्न रोगहरु देखि पीडित छन्। क्यान्सर विश्वभर मृत्युको एक प्रमुख कारण बनेको छ, नेपालमा फेफड़ोंको क्यान्सर पछि स्तनको क्यान्सर दोस्रो सबैभन्दा बढी हुन्छ। विश्व स्वास्थ्य संगठनको अनुसार, हरेक वर्ष 4000 स्तनपान र गर्भ निरोधक क्यान्सर बिरामी हुन्छन्। पाँच महिनाको उमेर अन्नाशा भमिरार्य मराथन को सबै भन्दा कम सहभागी थिए, जो उनको आमा खुसुबु भमिचरिया संग थियो। "म यहाँ आज मेरो छोरी केटी संग अन्य घरहरु जो घरहरुमा रहन को लागी उत्प्रेरित गर्न को लागी र जीवन शैली र भविष्य को बारे मा चिंतित हुन को लागि यहाँ हूँ। म आफ्नो मासु को स्तन कैंसर को कारण खो दिए ताकि म को प्रोत्साहित गर्न चाहन्छु सबै महिलाहरूले उनीहरूको स्वास्थ्य हेरचाह गरिरहेका छन्, "भमचरले सिन्हुआलाई भने। कार्यक्रम नेपाल एथलेटिक्स एसोसिएशन र नेपाल क्यान्सर राहत सोसाइटी द्वारा समर्थित भएको थियो.</p>\r\n</div>\r\n</div>\r\n</div>', '2000 देखि अधिक नेपाली महिलाहरु नेपाल मा स्वस्थ जीवनशैली को बढावा दिन को लागि', 'a1.jpg', NULL, NULL, NULL, 1, 0, NULL, NULL, '2017-11-18 04:51:11', '2017-11-18 06:25:13'),
(10, 'एक प्रतिशत पुरुषमा स्तन क्यान्सर', 'एक-प्रतिशत-पुरुषमा-स्तन-क्यान्सर', 'jes', '25/08/2017', '<div class="row">\r\n<div class="col-md-6">\r\n<div class="kode-thumb"><img class="img-responsive" src="../../tinymce/source/undefinedintro.png" alt="" /></div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="kode-taxt">\r\n<p class="text-justify">नेपालमा स्तन क्यान्सर रोगहरू मध्ये 1 प्रतिशत पुरुष हुन् काठमाडौं, 24 अक्टोबर: स्तनपानको जागिर कार्यक्रममा काम गर्ने विशेषज्ञहरूको अनुसार, हरेक वर्ष नेपालमा स्तनपान गर्ने केही पाँच देखि सात हजार घटनाहरू रिपोर्ट गरिन्छ। शनिबार गुलाब फाउण्डेसन नेपाल द्वारा आयोजित प्रकार्यको क्रममा, डा कपडे एस अमृयाले भने, "मानिसहरूसँग यो धारणा छ कि महिलाहरूले स्तन क्यान्सर पाउन सक्छन्, जो साँचो हुँदैनन्। हाम्रो छातीको क्यान्सरका रोगहरू मध्ये एक प्रतिशत पुरुष हुन्। " यस वर्षको स्तन क्यान्सर जागरूकता महिनाको सुरुवात गर्न आधारको आधारमा ''आशाको साथसाथै'' सँगै एक सैरथोनको आयोजना गरियो। त्यसबाहेक, भ्यालेथोनको उद्देश्यले स्तनपानको आत्म परीक्षणमा जागरूकता फैलाउने उद्देश्य थियो। विद्यार्थीहरू, मिडिया प्रतिनिधिहरू, बैंक नियोक्ताहरू, स्तन क्यान्सर डाक्टरहरू, नेपाली अभिनेताहरू र गायकहरू, र धेरै अधिक सक्रिय रूपमा भ्यागुनामा भाग लिन्थे। प्रकार्यको समयमा, नेपाल क्यान्सर अस्पतालबाट डाक्टरहरूको टोली क्यान्सरको विभिन्न पक्षमा वार्ता गरिसकेको छ। तिनीहरूले भनेका छन् कि पहिले सेकेन्डको तुलनामा स्तनपानको बारेमा कुरा गर्न अब मानिसहरू खुल्ला छन् र क्रेडिट त्यस्ता अभियानहरूमा जान्छ जसले मानिसहरूलाई त्यसो गर्न प्रोत्साहन दिन्छ। सभाध्यक्ष डा सुपिप श्रेष्ठले भने कि नेपालमा स्तनपानको उपचार सम्भव छ। "यो दु: खी छ कि मानिसहरूसँग हाम्रो चिकित्सा प्रणालीमा कुनै विश्वास छैन। मैले मान्छेलाई स्तन कैंसर रोगीहरूलाई उपचारको लागि भारत जान लागेका व्यक्तिहरूलाई हेर्छु, "उनले भने। "किन विदेश जान्छ र विशाल व्यतीत गर्दछु जब तपाइँ नेपालमा उत्कृष्ट सुविधा प्राप्त गर्न सक्नुहुन्छ कुनै पनि क्यान्सरको उपचार गर्ने?" क्यान्सर विशेषज्ञ चिकित्सकहरूसँग अन्तरक्रियाको बावजूद, आयोजकहरू पनि संगीत प्रदर्शन र खाना र पेय स्टलहरूको व्यवस्था गर्नका लागि थप व्यक्तिहरूलाई आकर्षित गर्न। आकर्षक भूकम्पहरू जस्तै "भूखा" संग भोजन स्टलहरू? एक कारणको लागि खाओ "तिनीहरूको दर्शन स्वादको लागि अदृश्यहरूलाई निम्ताउने जमीनको एक पक्षमा प्रदर्शन गरियो। साथै प्रदर्शनमा टी-शर्टहरू क्यान्सरको निदानमा बच्चाहरु द्वारा डिजाइन गरिएको डिजाइनमा थिए। गुलाफ फाउण्डेसन नेपालका सल्लाहकार सत्य प्रशंसाले भने कि मान्छे जसलाई सम्भव भएमा यस कारणले योगदान पुर्याउँछ। "यो प्रभावशाली छ कि युवाहरु यस कारणको लागि अधिक पहल गरिरहेका छन्। नींव आफैलाई जस्तै युवाहरूको आधारमा स्थापना गरिएको थियो, "उनले थपिन्। उनको अनुसार, नींव बच्चाहरु र महिला रोगहरु को क्यान्सर उपचार को लागि घटना देखि उठाएको कोष को दान गर्दछ जसले आफ्नै मा उपचार नहीं गरेर सकते। उनको प्राथमिक प्राथमिकता मध्ये एक कोटी बालबालिकाको अस्पताल हो, जहाँ उनीहरूले धेरै क्यान्सर रोगीहरूलाई फसाउन पाएका छन्। घटनाका क्रममा उपस्थित थिए पहिलो शताब्दीमा पनि भाग लिन सफल भयो। उनले सोचेका थिए कि घटनाले अधिक व्यक्तिलाई आकर्षित गर्न सक्दछ यदि आयोजकले यसलाई अझ प्रभावकारी बनाएको थियो। "हामी टिभीमा धेरै राजनीतिक समाचारहरू दौडिरहेका छौं, तर स्तन क्यान्सर जागरूकता जस्ता महत्त्वपूर्ण कारणमा निकै कवरेज छ।" त्यो आधार को एक सक्रिय समर्थक हो।</p>\r\n</div>\r\n</div>\r\n</div>', 'नेपालमा स्तन क्यान्सर रोगहरू मध्ये 1 प्रतिशत पुरुष हुन्', 'a3.png', NULL, NULL, NULL, 1, 0, NULL, NULL, '2017-11-18 04:51:11', '2017-11-18 06:28:53'),
(11, 'स्तनको क्यान्सर वाइकथोन', 'स्तनको-क्यान्सर-वाइकथोन', 'jes', '25/09/2017', '<div class="row">\r\n<div class="col-md-6">\r\n<div class="kode-thumb"><img class="img-responsive" src="../../tinymce/source/undefinedintro.png" alt="" /></div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="kode-taxt">\r\n<p class="&rdquo;text-justify&rdquo;">काठमाण्डौ: शनिबार राति फाउण्डेसन नेपाल द्वारा नेदरथनको राष्ट्रिय सम्मेलनमा राष्ट्रिय स्तनपान क्यान्सर जागरूकताको एक महिनाको रूपमा आयोजित गरिएको थियो। स्तन क्यान्सरको बारे मा जागरूकता फैलाउने को लागि चलथान को शुरुवात गर्यो। संगठनको सदस्य श्रीजा पौडेलले हजारौ सहभागीहरूले आफ्नो समर्थन देखाउने कार्यक्रममा भाग लिइन्। पतन डरबार स्क्वायरबाट सुरु भएको रैलीले पुल्चोक तिर गएर आदर्श मोडेल स्कूलमा पुग्यो। विद्यालयमा कार्यक्रमको भागको रूपमा एक फ्लैश मोब्याक र कन्सर्ट पनि आयोजित गरियो। क्यान्सर रिसर्च यूके अनुसार, स्तन कैंसर विकास गर्ने जीवनभरको जोखिम महिलाहरुमध्ये 8 मा 8 हो। स्वैच्छिकहरूले मानव लोगो, एक स्तन क्यामेराको जागरूकता कार्यक्रममा आदर्श मोडेल स्कूलमा एक सर्कलमा भेला हुन्छन् जब भाग। रोजगारी नेपाल नेपाल, काठमाडौंमा शनिवार, 11 अक्टोबर, 2015 मा आयोजित। शिष्टाचार: डेकिंग रे स्वैच्छिकहरूले मानव लोगो, एक स्तन क्यामेराको जागरूकता कार्यक्रममा आदर्श मोडेल स्कूलमा एक सर्कलमा भेला हुन्छन् जब भाग। रोजगारी नेपाल नेपाल, काठमाडौंमा शनिवार, 11 अक्टोबर, 2015 मा आयोजित। .</p>\r\n</div>\r\n</div>\r\n</div>', 'स्तनको क्यान्सरको बारेमा जागरूकता बढाउन वाइकथोन व्यवस्थित गरियो', 'a2.jpg', NULL, NULL, NULL, 1, 0, NULL, NULL, '2017-11-18 04:51:11', '2017-11-18 06:27:41');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jes', 'jayesshakya@gmail.com', '$2y$10$nTAPCwTTYM1.3d/ZDwdN6uxlOZzIWz2n5yhScgrZtPcdR46Ks8hgG', 'SKS8NS5pthQyiENVD5DRxWQVhlxoUXz0vgPfnsfjf3ENBZlgUTC7smLCGbPm', '2017-09-12 21:26:10', '2017-09-12 21:26:10'),
(2, 'jayess', 'apple@gmail.com', '$2y$10$9qbi5sNp7STq04PY.03AQ.ZnCWuVDLE9chv/LCrFvNe8I6zasICtO', 's8SSBimGs4BmAjC6KlAs6wnB7nh0033VjcbSk6nmbEbtWsXl19815BF8FNsm', '2017-09-27 02:23:31', '2017-09-27 02:23:31'),
(3, 'nikita', 'nikita@acd.edu.np', '$2y$10$PNa6elX9XSuynZZDQm9hcOi1MNzIYQqEXYDXrUD5ktmdY3wWmcKmq', NULL, '2017-11-17 21:32:02', '2017-11-17 21:32:02'),
(4, 'Rujan Shakya', 'rujanshakya3@live.com', '$2y$10$4iLe58IUW79O7IlnCVlLieRoFZoVxfAb7wSWXjeHrdyg.IEpXUcgu', '4irhLAb6jZn6hgYYudnYbRJmKE1blYlrsLJb5XrjQt0fA998qBrOyOmvGamP', '2017-11-18 02:58:01', '2017-11-18 02:58:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
