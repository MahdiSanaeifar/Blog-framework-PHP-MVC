-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2021 at 12:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `address` text NOT NULL,
  `amount` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `floor` varchar(191) NOT NULL,
  `year` int(11) NOT NULL,
  `storeroom` tinyint(1) NOT NULL,
  `balcony` tinyint(1) NOT NULL,
  `area` int(11) NOT NULL,
  `room` tinyint(5) NOT NULL,
  `toilet` enum('ایرانی','فرنگی','ایرانی و فرنگی','') NOT NULL,
  `parking` tinyint(5) NOT NULL,
  `tag` varchar(191) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `cat_id` bigint(20) NOT NULL,
  `status` tinyint(5) NOT NULL,
  `sell_status` tinyint(4) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `address`, `amount`, `image`, `floor`, `year`, `storeroom`, `balcony`, `area`, `room`, `toilet`, `parking`, `tag`, `user_id`, `cat_id`, `status`, `sell_status`, `type`, `view`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2 واحد آپارتمان در مجموعه آسیا', '&lt;p&gt;این مجموعه تمام امکانات آپارتمان های امروزی رو داره و خیلی وقته روی اون کار میشه من توصیه میکنم اگر قصد خرید خانه دارید حتما سر بزنید و دیدن کنید&lt;/p&gt;\r\n', 'تهران - خیابان شریعتی - مجموعه آسیا', '42000 تومان', '/images/ads/2021/Feb/01/2021_02_01_18_28_52_34.jpg', 'سرامیک', 127, 1, 1, 114, 3, 'ایرانی و فرنگی', 1, 'مجموعه آسیا, آپارتمان', 1, 13, 0, 1, 0, 0, '0000-00-00 00:00:00', '2021-02-01 21:58:52', NULL),
(2, 'خانه ویلای در نیاوران', '&lt;p&gt;تمام امکانات به روز یک خانه ویلایی مدرن توی این ساختمان پیاده شده و جای بسیار قشنگی برای زندگی کردنه&lt;/p&gt;\r\n', 'تهران - نیاوران - خیابان گلشن ', '650000 تومان', '/images/ads/2021/Feb/01/2021_02_01_18_28_59_87.jpg', 'سرامیک', 127, 1, 1, 127, 5, 'ایرانی و فرنگی', 1, 'ویلایی, نیاوران', 1, 13, 0, 1, 0, 0, '0000-00-00 00:00:00', '2021-02-01 21:58:59', NULL),
(3, 'آپارتمان 65 متری - صادقیه', '&lt;p&gt;جای قشنگی برای زندگی کردنه&lt;/p&gt;\r\n', 'تهران - صادقیه - فلکه دوم صادقیه - کوچه آفتاب شرقی', 'توافقی', '/images/ads/2021/Feb/01/2021_02_01_18_29_07_10.jpg', 'سرامیک', 127, 1, 1, 75, 2, 'ایرانی و فرنگی', 1, 'آپارتمان, صادقیه, 75متری', 1, 14, 0, 1, 0, 0, '2020-07-12 13:09:12', '2021-02-01 21:59:08', NULL),
(4, 'آپارتمان 80 متری در ایران زمین', '&lt;p&gt;جای خیلی قشنگی برای زندگی کردنه&lt;/p&gt;\r\n', 'ارین زمین - مجتمع رویال - بوک A - پلاک 12', 'توافقی', '/images/ads/2021/Feb/01/2021_02_01_18_29_13_92.jpg', 'سرامیک', 127, 1, 1, 127, 2, 'ایرانی و فرنگی', 1, 'آپارتمان, ایران زمین', 1, 14, 0, 0, 0, 0, '2020-07-17 13:48:18', '2021-02-01 21:59:13', NULL),
(6, '2 واحد آپارتمان در مجموعه فلان۲۲۲', '&lt;p&gt;توضیحات تستی برای آگهی اول&lt;/p&gt;\r\n', 'آدرس تستی', '430000', '/images/ads/2021/Feb/01/2021_02_01_18_36_24_31.jpg', 'سرامیک', 1399, 1, 1, 300, 2, 'ایرانی و فرنگی', 1, 'تگ۱,تگ۲,تگ۳', 1, 14, 0, 1, 0, 0, '2021-02-01 22:06:25', '2021-02-01 22:09:18', '2021-02-01 22:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 'ورزشی1', NULL, '2020-12-27 17:50:36', '2020-12-31 19:50:36', NULL),
(14, 'فوتبالی', 13, '2020-12-27 17:51:59', '2021-01-05 19:08:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 0,
  `approved` tinyint(5) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `parent_id`, `status`, `approved`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 27, 2, 'test', NULL, 0, 1, '2020-07-11 00:00:00', '2020-07-18 00:09:20', NULL),
(2, 27, 2, 'پاسخ ادمین', 1, 0, 1, '2020-07-13 00:00:00', '2020-07-18 00:09:26', NULL),
(3, 27, 2, 'پست بسیار عالی بود', NULL, 0, 1, '2020-07-13 23:48:26', NULL, NULL),
(4, 27, 2, 'سپاس از شما!', 1, 0, 1, '2020-07-17 15:51:51', NULL, NULL),
(5, 27, 2, 'بازم ممنون', NULL, 0, 1, '2020-07-17 15:53:16', NULL, NULL),
(6, 27, 2, 'باز هم ممنون از شما', 1, 0, 1, '2020-07-17 15:54:46', '2021-02-17 19:48:04', NULL),
(7, 27, 2, 'این کامنت تستی است\r\n', 1, 0, 0, '2020-07-17 15:56:46', '2021-02-17 19:47:12', NULL),
(8, 27, 2, 'ss', 1, 0, 1, '2021-02-17 19:42:06', '2021-02-17 19:42:26', NULL),
(9, 27, 2, 'ss خودتی', 8, 0, 1, '2021-02-17 19:48:40', '2021-02-17 19:49:07', NULL),
(10, 27, 2, 'test nazar', NULL, 0, 1, '2021-06-14 13:08:53', '2021-06-14 13:09:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) NOT NULL,
  `image` varchar(191) NOT NULL,
  `advertise_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `advertise_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, '/images/gallery/2021/Feb/07/2021_02_07_18_26_50_10.png', 1, '2021-02-07 21:56:50', NULL, '2021-05-17 11:36:57'),
(17, '/images/gallery/2021/Feb/07/2021_02_07_18_26_57_36.png', 1, '2021-02-07 21:56:57', NULL, '2021-02-07 21:58:18'),
(18, '/images/gallery/2021/Feb/07/2021_02_07_18_27_25_23.png', 2, '2021-02-07 21:57:25', NULL, NULL),
(19, '/images/gallery/2021/May/17/2021_05_17_07_07_05_40.jpg', 1, '2021-05-17 11:37:05', NULL, NULL),
(20, '/images/gallery/2021/May/17/2021_05_17_07_07_11_74.jpg', 1, '2021-05-17 11:37:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `title` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `published_at` datetime NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `image`, `user_id`, `cat_id`, `published_at`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ساخت یک میلیون مسکن از آرزو تا واقعیت', '&lt;p&gt;به نظر می رسد هدف&amp;zwnj;گذاری مجلس و دولت برای ساخت سالیانه یک میلیون واحد مسکونی، تنها به پشتوانه تزریق پول پرقدرت توسط بانک مرکزی ارائه شده که آن هم با توجه به اثرات مخرب اقتصادی و همچنین نبود منابع لازم قابل تحقق نیست؛ شاید به همین دلیل است که پس از جلسه امروز وزیر با اعضای کمیسیون عمران مجلس، خروجی خاصی درباره نحوه تامین بودجه این طرح به دست نیامد. به گزارش ایسنا، جلسه&amp;zwnj;ای که روز یکشنبه در خصوص نهایی شدن نحوه تامین مالی طرح احداث سالانه یک میلیون واحد مسکن ملی تا ۶ سال آینده منتظرش بودیم، امروز سه شنبه ۲۴ تیرماه برگزار شد. با این تفاوت که نه خبری از تزریق پول پرقدرت بانک مرکزی و نه جزئیاتی از چگونگی مشارکت بخش خصوصی در این طرح اعلام شد. امروز نمایندگان عضو کمیسیون عمران مجلس با محمد اسلامی وزیر راه و شهرسازی نشستی را برگزار کردند. پیش از این برخی نمایندگان گفته بودند که طرحی را با همکاری دولت تحت عنوان احداث یک میلیون واحد مسکونی در سال مد نظر دارند. محمودزاده معاون وزیر راه و شهرسازی هم ضمن تایید بر این تعامل، به ایسنا گفت که دولت قصد ورود به ساخت و ساز را ندارد و این موضوع توسط بخش خصوصی انجام می&amp;zwnj;شود. قرار بود یکشنبه ۲۲ تیرماه نحوه تامین مالی این طرح نهایی شود. به هر حال امروز سه&amp;zwnj;شنبه نشست کمیسیون عمران با وزیر راه و شهرسازی انجام شد. پس از این جلسه، محمد اسلامی وزیر راه و شهرسازی گفت: طرح ملی مسکن با مدل&amp;zwnj;های گوناگونی تامین مالی خواهد شد که هم&amp;zwnj;اکنون نیز در حال اجراست. در عین حال، این مدل&amp;zwnj;ها با طرحی که در مجلس پیشنهاد شده است می&amp;zwnj;تواند نیاز جامعه به مسکن را تامین کند و التهابات حباب گونه بخش مسکن را که در حال حاضر شاهد آن هستیم، از بین ببرد. شاید منظور اسلامی استفاده از ابزارهایی همچون صندوق سرمایه گذاری زمین و ساختمان، صندوقهای سرمایه گذاری املاک و مستغلات، حسابهای امانی، بازار رهن ثانویه، لیزینگ مسکن، توسعه ای شدن بانک مسکن، موسسات پس انداز و تسهیلات مسکن و صندوق پس انداز یکم باشد که برخی از آنها یا اصلاً اجرا نمی&amp;zwnj;شود و یا کارایی چندانی ندارد. این صحبت&amp;zwnj;های وزیر که البته واقع بینانه تر است دست اندازی به منابع بانک مرکزی است نشان می&amp;zwnj;دهد دولت در شرایط فعلی که رسیدن به تورم ۲۲ درصد را هدف&amp;zwnj;گذاری کرده قصد ندارد همانند آنچه در پروژه مسکن مهر دولت های قبلی انجام شد با تزریق پول پرقدرت، تورم مجددی را به جامعه تحمیل کند. سید البرز حسینی، سخنگوی کمیسیون عمران مجلس هم که درباره جزئیات جلسه امروز صحبت کرد، به موضوع بازآفرینی شهری و تامین قیر برای راهسازی پرداخت و اشاره خاصی به تامین مالی پروژه های بزرگ مقیاس در بخش مسکن نداشت. وی البته گفت: یکی از مسائل مهم اجرای طرح اقدام ملی مسکن است که در این رابطه نمایندگان مجلس نیز طرحی را تدوین کرده&amp;zwnj;اند، از این رو با اجرای این طرح و تولید مسکن امیدواریم که بخشی از التهابات و حباب بازار کاهش یابد. ساخت یک میلیون خانه در سال واقع&amp;zwnj;بینانه نیست مهدی سلطان محمدی - کارشناس اقتصاد مسکن - درباره طرح مجلس و دولت برای احداث سالیانه یک میلیون واحد مسکونی به ایسنا گفت: تولید یک میلیون خانه در سال نیاز به ۲۵۰ هزار میلیارد تومان نقدینگی دارد. کل بودجه عمرانی دولت کمتر از ۵۰ هزار میلیارد تومان است؛ لذا صحبت از طرح&amp;zwnj;های بزرگ مقیاس مسکن در حد شعار خواهد بود و قابلیت تحقق ندارد. وی افزود: دولت به دلیل کاهش درآمدهای نفتی، کاهش صادرات و رکود ناشی از کرونا دچار کمبود منابع شده و نوساناتی که در بازارهای مسکن، بورس، ارز و طلا می&amp;zwnj;بینیم در واقع انعکاسی از خشکی منابع دولتی است. به گفته سلطان محمدی، دولت مجبور است به اطراف شهرها برود که بحث آماده&amp;zwnj;سازی و زیرساخت&amp;zwnj;ها را خواهد داشت؛ لذا در خوشبینانه&amp;zwnj;ترین حالت معادل همین ۲۵۰ هزار میلیارد تومان را باید خرج زیرساخت&amp;zwnj;ها کند. چنین منابعی موجود نیست؛ پس نباید شعارهایی مثل احداث یک میلیون خانه در سال بدهیم که امکان تحقق آن وجود ندارد.&lt;/p&gt;\r\n', 's:52:\"/images/posts/2021/May/17/2021_05_17_07_08_07_99.jpg\";', 27, 14, '2020-07-09 00:00:00', 0, '2020-07-09 23:08:13', '2021-05-17 11:38:07', NULL),
(2, 'تعیین قیمت&zwnj;های دل&zwnj;خواه در بازار مسکن', '&lt;p&gt;راه های جایگزین برای تعیین قیمت در این بین روز ۲۱ اردیبهشت ماه بنا به دستور قضایی، ممنوعیت سایت های فروش ملک از درج قیمت مسکن اجرا شد. هرچند آمار خرداد نشان داد این اقدام در کنترل قیمت ها تاثیر چندانی نداشته است. از طرف دیگر به نظر می رسد سایت ها برای دور زدن قانون و تعیین قیمت، راه های جایگزین مثل استفاده از فضای مجازی و سایر اپلیکیشن ها را در پیش گرفته اند. بر این اساس گروهی از کارشناسان معتقدند با با توجه به گسترش وسایل ارتباط جمعی، حذف قیمت از بازار ها امکان پذیر نیست. مضافاً اینکه برداشتن قیمت، شفافیت را از بازار می گیرد و متعاملین را سردرگم می&amp;zwnj;کند. در سوی مقابل، عده&amp;zwnj;ای دیگر از جمله رئیس اتحادیه مشاوران املاک، هرج و مرج قیمتی در سایت&amp;zwnj;های​ فروش مسکن را از عوامل اصلی التهابات بازار ملک می دانند. مصطفی قلی خسروی می&amp;zwnj;گوید که ممنوعیت نرخ گذاری در سایت ها بازار را در میان مدت به آرامش می رساند. کاهش آگهی های مجازی بعد از حذف قیمت ها اما از زمان آغاز این محدودیت، مدیران سایتها که به نظر می رسد با کاهش عرضه کنندگان و متقاضیان مسکن روبرو شده&amp;zwnj;اند از این دستور قضایی دلخورند. گذشته از اینکه بعضاً تلاش می کنند با تکنیک های مختلف مثل امکان مشاهده قیمت در آگهی های نشان دار یا استفاده از تلگرام و دیگر اپلیکیشن ها برای تعیین قیمت استفاده کنند، محدودیت نرخ گذاری را برای متعاملین دردسرساز می دانند. تا جایی که یکی از اپلیکیشن ها ذیل تمامی آگهی&amp;zwnj;های خود نوشته: &amp;laquo;این موضوع باعث افزایش هزینه&amp;zwnj;های کاربران در جستجو، برقراری تماس های بیهوده و طولانی تر شدن زمان مذاکرات شده که بر خلاف اهداف ما در تسریع و ساده سازی معاملات شما و ایجاد شفافیت در بازار است&amp;raquo;. پایین آگهی&amp;zwnj;های یکی دیگر از سایتها نوشته شده است: &amp;laquo;با توجه به دستور مقام قضایی، امکان نمایش قیمت ها وجود ندارد. با پوزش نسبت به مشکلاتی که این اقدام برای شما به وجود آورده، تا پایان این محدودیت ناخواسته، برای اطلاع از قیمت با فروشنده تماس بگیرید.&amp;raquo; یک نماینده: سایت ها مجددا نرخ&amp;zwnj;گذاری را آغاز کرده&amp;zwnj;اند در این زمینه امروز یک عضو کمیسیون برنامه و بودجه مدعی شد که نرخ گذاری مسکن و خودرو در سایت ها مجدداً آغاز شده است. رحیم زارع اظهار کرد: سودجویان با سوء استفاده از وضعیت افزایش نرخ ارز و طلا در کشور بار دیگر قیمت گذاری را در سایت ها آغاز کرده&amp;zwnj;اند که این اقدام روی التهاب بازار مسکن و خودرو و افزایش قیمت ها تاثیر گذار است اما قوه قضاییه می&amp;zwnj;تواند با چارچوب تعیین شده خود جلوی افزایش قیمت&amp;zwnj;های یک&amp;zwnj;شبه را بگیرد. به دنبال این سخنان، برخی از سایت&amp;zwnj;های مشهور فروش مسکن را بررسی کردیم که نشان می دهد هم اکنون قیمت ها قابل مشاهده نیست. ممکن است برای مدت کوتاهی مشاهده نرخ ها را امکان&amp;zwnj;پذیر کرده باشند. هرچند با استفاده از دیگر فضا ها و ابزارها اقدام به تعیین نرخ می&amp;zwnj;کنند. از طرف دیگر گزارش های میدانی از دفاتر املاک نشان می دهد با وجود آنکه فایل&amp;zwnj;های متعارف از طرف فروشندگان واقعی به وفور دیده می&amp;zwnj;شود، برخی مالکان تحت تاثیر نوسانات بازارهای ارز و طلا نرخ های نجومی برای املاک خود تعیین می کنند. این در حالی است که کارشناسان معتقدند بخش مسکن علاوه بر اینکه باید نسبت به تحولات، دیر واکنش نشان دهد این بازار را فاقد ظرفیت لازم برای رشد قیمت می دانند؛ چراکه سالهاست توان متقاضیان واقعی پایین این بازار پایین آمده است.&lt;/p&gt;\r\n', 's:52:\"/images/posts/2021/May/17/2021_05_17_07_08_01_80.jpg\";', 27, 14, '2020-07-10 00:00:00', 0, '2020-07-10 18:32:48', '2021-05-17 11:38:02', NULL),
(3, 'بررسی راهکارهای ساماندهی بازار مسکن در کمیسیون عمران', '&lt;p&gt;یک عضو کمیسیون عمران مجلس شورای اسلامی از برگزاری چندمین جلسه این کمیسیون برای ساماندهی بازار مسکن و راهکارهای کنترل قیمت&amp;zwnj;ها خبر داد. رحمت الله فیروزی پوربادی در گفت&amp;zwnj;وگو با ایسنا، ضمن تشریح جلسه امروز کمیسیون عمران مجلس بیان کرد: کمیسیون عمران تاکنون چندین جلسه در خصوص ساماندهی بازار مسکن و راه&amp;zwnj;های مختلف برای شکستن قیمت&amp;zwnj;ها برگزار کرده است. در جلسه امروز نیز حول ساماندهی بازار مسکن بحث و بررسی صورت گرفت. این عضو کمیسیون عمران مجلس در ادامه اظهار کرد: تاکنون راهکارهای مختلفی نظیر ارائه تسهیلات یا موظف کردن دستگاه&amp;zwnj;ها برای ساخت مسکن یا بهره گیری از امکانات مختلف برای ساماندهی بازار مسکن در کمیسیون مطرح شده است. نماینده مردم نطنز در مجلس تصریح کرد: ان&amp;zwnj;شاءالله در روز سه&amp;zwnj;شنبه قرار است وزیر راه و شهرسازی نیز در جلسه کمیسیون حضور یابد تا تصمیم نهایی برای ساماندهی بازار مسکن اتخاذ شود. نمایندگان نیز طرحی را برای ساماندهی بازار مسکن آماده کردند که ان&amp;zwnj;شاءالله به زودی نهایی شده و اعلام می&amp;zwnj;شود.&lt;/p&gt;\r\n', 's:52:\"/images/posts/2021/May/17/2021_05_17_07_07_54_76.jpg\";', 27, 14, '2020-07-12 00:00:00', 0, '2020-07-12 15:18:59', '2021-05-17 11:37:54', NULL),
(4, 'اینفوگرافیک / تغییر قیمت مسکن در تهران، از پارسال تا امسال', '&lt;p&gt;بر اساس گزارش مرکز آمار ایران، درصد تغییر قیمت ماهانه مسکن در خرداد پارسال، ۳/۷ درصد بوده که این رقم در خرداد ۱۳۹۹ به ۱۱/۳ درصد رسیده است. همچنین تورم نقطه&amp;zwnj;ای در خردادماه ۱۳۹۹ به عدد ۴۴/۶ درصد رسیده است و این یعنی خریداران مسکن برای خرید یک واحد مسکونی در شهر تهران نسبت به خرداد ۱۳۹۸ باید ۴۴/۶ درصد پول بیشتری پرداخت کنند. اینفوگرافیک پیش رو میزان تغییرات قیمت مسکن در ماه&amp;zwnj;های مختلف تا خرداد ۱۳۹۹ را به روایت آمارهای مرکز آمار ایران نشان می&amp;zwnj;دهد. بر اساس گزارش مرکز آمار ایران، درصد تغییر قیمت ماهانه مسکن در خرداد پارسال، ۳/۷ درصد بوده که این رقم در خرداد ۱۳۹۹ به ۱۱/۳ درصد رسیده است. همچنین تورم نقطه&amp;zwnj;ای در خردادماه ۱۳۹۹ به عدد ۴۴/۶ درصد رسیده است و این یعنی خریداران مسکن برای خرید یک واحد مسکونی در شهر تهران نسبت به خرداد ۱۳۹۸ باید ۴۴/۶ درصد پول بیشتری پرداخت کنند. اینفوگرافیک پیش رو میزان تغییرات قیمت مسکن در ماه&amp;zwnj;های مختلف تا خرداد ۱۳۹۹ را به روایت آمارهای مرکز آمار ایران نشان می&amp;zwnj;دهد. بر اساس گزارش مرکز آمار ایران، درصد تغییر قیمت ماهانه مسکن در خرداد پارسال، ۳/۷ درصد بوده که این رقم در خرداد ۱۳۹۹ به ۱۱/۳ درصد رسیده است. همچنین تورم نقطه&amp;zwnj;ای در خردادماه ۱۳۹۹ به عدد ۴۴/۶ درصد رسیده است و این یعنی خریداران مسکن برای خرید یک واحد مسکونی در شهر تهران نسبت به خرداد ۱۳۹۸ باید ۴۴/۶ درصد پول بیشتری پرداخت کنند. اینفوگرافیک پیش رو میزان تغییرات قیمت مسکن در ماه&amp;zwnj;های مختلف تا خرداد ۱۳۹۹ را به روایت آمارهای مرکز آمار ایران نشان می&amp;zwnj;دهد.&lt;/p&gt;\r\n', 's:52:\"/images/posts/2021/May/17/2021_05_17_07_07_48_67.jpg\";', 27, 14, '2020-07-11 00:00:00', 0, '2020-07-12 15:20:04', '2021-05-17 11:37:48', NULL),
(6, 'title2', '&lt;p&gt;توضیحات برای اخبار اول سایت&lt;/p&gt;\r\n', 's:52:\"/images/posts/2021/May/17/2021_05_17_07_07_43_62.jpg\";', 27, 13, '2021-01-19 00:00:00', 0, '2021-01-19 13:15:37', '2021-05-17 11:37:43', NULL),
(7, 'dexedx', '&lt;p&gt;dexdexdexxedxdexde&lt;/p&gt;\r\n', 's:52:\"/images/posts/2021/Jan/25/2021_01_25_18_30_59_30.png\";', 27, 13, '2021-01-25 00:00:00', 0, '2021-01-25 22:00:59', NULL, '2021-01-25 22:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) NOT NULL,
  `title` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `amount` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `url`, `address`, `amount`, `body`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'خانه ویلای در نیاوران', 'http://localhost:8000', 'تهران - نیاوران - خیابان گلشن', '650000 تومان', '&lt;p&gt;تمام امکانات به روز یک خانه ویلایی مدرن توی این ساختمان پیاده شده و جای بسیار قشنگی برای زندگی کردنه.&lt;/p&gt;\r\n', '/images/slides/2021/Apr/10/2021_04_10_12_30_19_43.jpg', '2020-07-12 13:53:46', '2021-04-10 17:00:19', NULL),
(2, 'آپارتمان 65 متری - صادقیه', 'http://localhost:8000/ads/3', 'تهران - صادقیه - فلکه دوم صادقیه - کوچه آفتاب شرقی', '650000 تومان', '&lt;p&gt;جای قشنگی برای زندگی کردنه. جای قشنگی برای زندگی کردنه. جای قشنگی برای زندگی کردنه&lt;/p&gt;\r\n', '/images/slides/2021/Apr/10/2021_04_10_12_30_25_83.jpg', '2020-07-12 13:54:50', '2021-04-10 17:00:26', NULL),
(3, 'title3', '#2', 'آدرس تستی', '3333', '&lt;p&gt;xdexdexdexdexdexdexdexdexdex&lt;/p&gt;\r\n', '/images/slides/2021/Feb/10/2021_02_10_14_35_21_57.png', '2021-02-10 18:05:21', '2021-02-10 18:05:37', '2021-02-10 18:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `email` varchar(191) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `avatar` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 0,
  `is_active` tinyint(5) NOT NULL DEFAULT 0,
  `verify_token` varchar(191) DEFAULT NULL,
  `user_type` varchar(191) NOT NULL,
  `remember_token` varchar(191) DEFAULT NULL,
  `remember_token_expire` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `avatar`, `password`, `status`, `is_active`, `verify_token`, `user_type`, `remember_token`, `remember_token_expire`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 'hassankhosrojerdi@yahoo.com', 'hassan', 'khosrojerdi', '/images/avatar/2021/Mar/09/2021_03_09_13_56_37_43.png', '$2y$10$uE1SeF1yji36.tvG8Wb/Y.BgpyQTWT5mj.t12ypvmvc/Z8yG5MICi', 0, 1, 'f001ecbe630b3dd15bc4a39d1e78646458bd936055577e904ae879a915eddd7f', 'admin', 'b607a503c1e932e49fb7bb69541b80bcf136d546da4828e5f8cb0470f81d3627', '2021-03-26 17:33:48', '2021-03-09 17:26:37', '2021-03-26 22:02:06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
