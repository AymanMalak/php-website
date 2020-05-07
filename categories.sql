-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 01:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `categories`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_table`
--

CREATE TABLE `cat_table` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(200) NOT NULL,
  `categoryDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_table`
--

INSERT INTO `cat_table` (`id`, `categoryName`, `categoryDate`) VALUES
(1, 'Front End Web Development', '2020-05-03 18:48:55'),
(2, 'Back End Web Development', '2020-05-03 18:51:16'),
(3, 'Android Development', '2020-05-03 18:54:00'),
(4, 'IOS Development', '2020-05-03 18:54:19'),
(5, 'Cloud Computing', '2020-05-03 18:57:18'),
(6, 'Artificial Intelligence', '2020-05-03 18:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `emailAdress` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `emailAdress`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `postTitle` varchar(200) NOT NULL,
  `postCategory` varchar(200) NOT NULL,
  `postImage` varchar(200) NOT NULL,
  `postContent` mediumtext NOT NULL,
  `postDate` datetime NOT NULL DEFAULT current_timestamp(),
  `postAuthor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `postTitle`, `postCategory`, `postImage`, `postContent`, `postDate`, `postAuthor`) VALUES
(72, 'html', 'Front End Web Development', '147_html1.png', 'HTML. لغة HTML هي لغة توصيفية لإنشاء صفحات الويب وتطبيقات الويب، وترمز إلى Hypertext Markup Language (أي لغة النص الفائق). تُستخدَم مع لغة CSS و JavaScript لإنشاء صفحات ويب تفاعلية. تستقبل متصفحات الويب مستندات HTML من خادم الويب أو من نظام الملفات وتعرضها، ووظيفة لغة HTML هي وصف بنية صفحات الويب هيكليً', '2020-05-07 23:57:20', 'ايمن عبدالملاك'),
(73, 'cloud ', 'Cloud Computing', '666_cloud1.jpg', 'Cloud computing is the on-demand availability of computer system resources, especially data storage and computing power, without direct active management by the user. The term is generally used to describe data centers available to many users over the Internet. Large clouds, predominant today, often have functions distributed over multiple locations from central servers. If the connection to the user is relatively close, it may be designated an edge server', '2020-05-07 23:58:40', 'ايمن عبدالملاك'),
(74, 'Android', 'Android Development', '700_android.webp', 'Android is an open-source operating system based on Linux with a Java programming interface for mobile devices such as Smartphone (Touch Screen Devices who supports Android OS) as well for Tablets too. Android was developed by the Open Handset Alliance (OHA), which is led by Google. The Open Handset Alliance (OHA) is a consortium of multiple companies like Samsung, Sony, Intel and many more to provide services and deploy handsets using the android platform.', '2020-05-08 00:00:22', 'ايمن عبدالملاك'),
(75, 'Html', 'Front End Web Development', '831_html2.png', 'HTML stands for Hyper Text Markup Language HTML describes the structure of a Web page HTML consists of a series of elements HTML elements tell the browser how to display the content HTML elements are represented by tags HTML tags label pieces of content such as \"heading\", \"paragraph\", \"table\", and so on Browsers do not display the HTML tags, but use them to render the content of the page', '2020-05-08 00:02:13', 'ايمن عبدالملاك'),
(76, 'php7', 'Back End Web Development', '353_php2.png', 'بي اتش بي هي لغة برمجة تتم معالجتها بالسيرفر لعمل مواقع الكترونية تفاعلية ومتطورة وهي تستخدم على نطاق واسع , مجانية الإستخدام , سهلة التعلم ايضا هي لغة ذات مصدر مفتوح يستطيع اي مطور المشاركة بتطويرها و تحسينها للأفضل', '2020-05-08 00:03:24', 'ايمن عبدالملاك'),
(77, 'css', 'Front End Web Development', '490_css1.jpg', 'CSS stands for Cascading Style Sheets CSS describes how HTML elements are to be displayed on screen, paper, or in other media CSS saves a lot of work. It can control the layout of multiple web pages all at once External stylesheets are stored in CSS files', '2020-05-08 00:04:03', 'ايمن عبدالملاك'),
(78, 'javascript', 'Front End Web Development', '968_javascript1.jpg', 'الجافاسكريبت هي لغة برمجة كائنية التوجة ومتعددة المنصات. هي لغة صغيرة وخفيفة الوزن. داخل بيئة المضيف (على سبيل المثال، متصفح ويب)، في هذه البيئة يمكنك استخدامها على الكائنات. تحتوي جافاسكريبت على مكتبة قياسية من الكائنات، مثل Array، Date، وMath، ومجموعة أساسية من العناصر اللغوية مثل العوامل، بنى التحكم، والتصريحات. جوهر جافا سكريبت هو قابليتها للتعامل مع مجموعة متنوعة من الكائنات التي تكون مكملة مع كائنات إضافية', '2020-05-08 00:05:33', 'ايمن عبدالملاك'),
(79, 'laravel', 'Back End Web Development', '52_laravel1.png', 'Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.', '2020-05-08 00:06:14', 'ايمن عبدالملاك'),
(80, 'ios', 'IOS Development', '912_ios2.png', 'iOS is a mobile operating system developed and distributed by Apple Inc. that runs on iPad, iPhone, and iPod touch devices. The operating system manages the device hardware and provides the technologies required to implement native apps. The operating system also ships with various system apps, such as Phone, Mail, and Safari that provide standard system services to the user.The iOS Software Development Kit (SDK) contains the tools and interfaces needed to develop, install, run, and test native apps that appear on an iOS device’s Home screen.', '2020-05-08 00:07:12', 'ايمن عبدالملاك'),
(81, 'mysql', 'Back End Web Development', '375_MySQL.svg.png', 'ماي إس كيو إل وتلفظ أحيانا ماي سيكويل (بالإنجليزية: MySQL)‏ هو نظام إدارة قواعد البيانات علائقي يعتمد التعامل معه على لغة إس كيو إل. وسمي بهذا الاسم تبعا لابنة مبرمجه الأصلي Michael Widenius، والتي اسمها My. ماي إس كيو إل هو من المنتجات مفتوحة المصدر ينشر كوده المصدري تحت رخصة جنو العمومية بالإضافة إلى بعض الاتفاقيات الاحتكارية. كانت تملكه وترعاه الشركة الربحية السويدية MySQL AB، لكن تملكه الآن صن ميكروسيستمز (والتي هي حاليا فرع من أوراكل). يتميز خادم ماي إس كيو إل بسرعته الكبيرة؛ لأنه خادم قواعد بيانات متعدد المسالك (بالإنجليزية: multi-threaded)‏ مما جعل إمكانية الاستعلام من قاعدة البيانات سريعة جدا؛ ويتميز بسهولة ربط جداوله بواجهة المستخدم التي تصمم بلغات البرمجة، فمثلا يمكنك ربطها بالبرامج المكتوبة بلغة فيجوال بيسك من خلال واجهة ODBC الخاص بها، كذلك له مكتبة خاصة به للتعامل معه من خلال أدو دوت نت.', '2020-05-08 00:07:43', 'ايمن عبدالملاك'),
(82, 'A I', 'Artificial Intelligence', '674_Ai2.jpg', 'Arificial Intellegence is intelligence demonstrated by machines, in contrast to the natural intelligence displayed by humans and animals. Leading AI textbooks define the field as the study of \"intelligent agents\": any device that perceives its environment and takes actions that maximize its chance of successfully achieving its goals.[1] Colloquially,', '2020-05-08 00:08:17', 'ايمن عبدالملاك');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_table`
--
ALTER TABLE `cat_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_table`
--
ALTER TABLE `cat_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
