-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 04:49 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `square_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact-uses`
--

CREATE TABLE `contact-uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact-uses`
--

INSERT INTO `contact-uses` (`id`, `Heading`, `Description`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', 'We\'ll write rarely, but only the best content.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqheading`
--

CREATE TABLE `faqheading` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqheading`
--

INSERT INTO `faqheading` (`id`, `Heading`, `created_at`, `updated_at`) VALUES
(1, 'Frequently Asked Questions', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `Question`, `Answer`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'Do you pay fair prices for properties?', 'Many of the houses we purchase are below market value (we do this so we can resell it at a profit to another homeowner). We are looking to get a fair discount on a property. However, in our experience, many sellers aren’t necessarily expecting a large “windfall” on the property but rather appreciate that we can offer cash, we close very quickly (no waiting for financing), and no time or effort or expense is required on your part of fix up the property or pay agent fees. If that’s what you’re looking for and you see the value in getting your house sold fast… let’s see if we can come to a fair win-win price. (Besides, our no-obligation pricing commitment means that you do not have to move forward with the offer we give… but it’s good to know what we’re offering!)', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s1_Title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s1_Description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s1_Image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_Title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_Heading1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_Description1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_Heading2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_Description2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_Heading3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_Description3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_Heading4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_Description4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_Image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s3_Title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s3_Description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s3_Image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s4_Title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s5_Title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s5_Heading1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s5_Description1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s5_Image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s5_Heading2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s5_Description2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s5_Image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s5_Heading3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s5_Description3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s5_Image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Paragraph` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Description1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Description2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Description3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Image4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Description4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Image5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Description5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Image6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s6_Description6` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s7_Heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s7_Description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s7_Image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `s1_Title`, `s1_Description`, `s1_Image`, `s2_Title`, `s2_Heading1`, `s2_Description1`, `s2_Heading2`, `s2_Description2`, `s2_Heading3`, `s2_Description3`, `s2_Heading4`, `s2_Description4`, `s2_Image`, `s3_Title`, `s3_Description`, `s3_Image`, `s4_Title`, `s5_Title`, `s5_Heading1`, `s5_Description1`, `s5_Image1`, `s5_Heading2`, `s5_Description2`, `s5_Image2`, `s5_Heading3`, `s5_Description3`, `s5_Image3`, `s6_Title`, `s6_Paragraph`, `s6_Image1`, `s6_Description1`, `s6_Image2`, `s6_Description2`, `s6_Image3`, `s6_Description3`, `s6_Image4`, `s6_Description4`, `s6_Image5`, `s6_Description5`, `s6_Image6`, `s6_Description6`, `s7_Heading`, `s7_Description`, `s7_Image`, `created_at`, `updated_at`) VALUES
(1, 'Sell Your House Today With Properdeed For The Best Price.', 'No commissions or fees, sell your house ”AS IS”.', 'main-background-2.png', 'Why Sell Your Home To Us At Properdeed?', 'Experience And Reliable', 'We have over 10 years experience buying properties. We will treat you professionally.', 'We Never Charge Fees Or Closing Cost', 'Save your money. We will pay all closing costs.', 'We Buy Houses In AS-IS Condition', 'You don\'t have to worry about clean-up or repairs. Leave any unwanted items behind. We\'ll take care of it for you, while you focus on your future.', 'Convenience', 'We can close in as little as 10 days or you can pick your move out date. We make your life easy.', '-oCcrsTU.jpeg', 'Meet James and Donna', '“We had a distress property that was costing us money. James contacted Properdeed to see if they might be interested in buying our property. The staff was professional and responsive and we were pleased with the offer. Selling was a seamless process. Properdeed team made this a very pleasent experience.\"', 'Testimonial.jpg', 'Ready To Move On?\n            Get a Fair Cash Offer Today', 'Our Process Is Fast And Easy', 'Contact Us', ' Get My Cash Offer Now Form', 'shutterstock_1625233630__1_-removebg-preview.png', 'Get An Offer', 'We present you with highest cash offer possible within 24 hours. No obligation and no fees.', 'N_CDigfQ-removebg-preview.png', 'Get Paid', 'We close at a local reputable title company.', 'hMXKA53g-removebg-preview.png', 'We’ve helped homeowners get a fresh start', 'We help property owners just like you, in all kinds of situations. We purchase outdated and distressed homes ‘as-is’ and we pay for all the repairs and for all your real estate fees. If you simply don’t want to put up with the hassle of owning that house any longer, and if you don’t want to put up with the hassle and time-consuming expense of selling your property the traditional way , let us know we ca provide you with cash in as little as 10 days. We promise to deliver peace of mind and support throughout the process.', 'repair_image-removebg-preview.png', 'Property in Need of Repairs', 'bills-removebg-preview.png', 'Financial Distress', 'events.png', 'Unexpected Life Events', 'relocation.png', 'Downsizing Or Relocation', 'property.png', 'Inherited Property', 'alert.jpg', 'Problematic Property', 'Over 10,000 Offers Received.', 'Each day homeowners get their offers on Properdeed.', 'crop-sky-image.jpg', NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_05_074912_create_homes_table', 1),
(6, '2022_01_05_075000_create_contact-uses_table', 1),
(7, '2022_01_05_075025_create_f_a_q_s_table', 1),
(8, '2022_01_05_075052_create_privacy_policies_table', 1),
(9, '2022_01_06_145534_create_settings_table', 1),
(10, '2022_01_07_163105_faq_heading', 1),
(11, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(12, '2022_01_10_161504_create_sessions_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `Description`, `created_at`, `updated_at`) VALUES
(1, '<div class=\"gtco-container\">\n\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h3>PRIVACY POLICY</h3>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                            This Privacy Policy is part of the Terms of Use and describes how Tarek Buys Houses LLC handle information collected and received from or through our websites, associated applications, including mobile apps, as well as any other source such as social media. This Policy does not govern the activities of any third party.                        </span></p></div>\n\n                </div>\n            </div>\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Collection and Use of Personally Identifying Information</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> We collect and use personally identifying information that you provide to us in the course of seeking offerings or information from us. This personally identifying information may include your name, address, e-mail\n                            address, contact information, and information about a property you seek to sell. <br> <br> We use this information (and other information we collect from you as described in this Policy) for our business purposes, including\n                            to contact you, evaluate and value any property you seek to sell, and formulate proposed transactions. We will also seek to match you to a franchisee, send you communications, including from a franchisee, contact you about\n                            changes to our Terms of Use and provide transaction related information. We may also communicate with you via text, including communications concerning franchisees. We will also monitor your compliance with our Terms of\n                            Use. We may also provide you with offers based upon the information we collect including your location.\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>We do not sell any of the personal information we collect about you to third parties.‎</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span>Your personally identifying information will not be shared with any third party, with the following exceptions: A. information that Tarek Buys Houses LLC in good faith determines is legally required to be revealed\n                            by any relevant statute, regulation, ordinance, rule, administrative or court order, decree, or subpoena; B. information revealed during the course of Tarek Buys Houses LLC’ enforcement of its policies and procedures, its\n                            Terms of Use, the terms of this Policy, the Online User Agreement, or any other agreement with us, or during the course of any disciplinary actions; C. information in a manner expressly permitted by the provisions of this\n                            Policy; D. information that Tarek Buys Houses LLC in good faith determines must be disclosed to correct what it believes to be false or misleading information or to address activities that Tarek Buys Houses LLC believes\n                            to be manipulative, deceptive or otherwise a violation of law; or E. unless you are otherwise notified at the time we collect the data. <br> Within the last twelve (12) months, we have shared each of the categories of personal\n                            ‎information collected in connection with this website with affiliates and service providers as set ‎forth herein.‎ We may also share your personal information with third parties in connection with a merger, sale, acquisition,\n                            assignment, bankruptcy proceeding, reorganization or other disposition ‎of some or all aspects of our business or assets.‎\n                            <br> <br> “Nonpublic Personal Information” is the nonpublic information about you that is obtained by Tarek Buys Houses LLC from you. Tarek Buys Houses LLC and its advertisers may collect Nonpublic Personal Information\n                            from the online forms you complete, from information collected as a result of your transactions with Tarek Buys Houses LLC, our advertisers, or others, and from consumer reporting agencies. Tarek Buys Houses LLC will not\n                            disclose any Nonpublic Personal Information except as permitted or required by law or as described in this Policy. We may disclose all of the Nonpublic Personal Information we collect about you, as well as other information\n                            collected as described in this Policy, to our affiliates who offer related goods and services, and to nonaffiliated third parties that perform services on our behalf, including marketing services, or financial institutions\n                            with whom we have joint marketing agreements.\n\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Other Information You Provide or Post</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span>In addition to the practices described above, we may also use information we collect to, at your election, provide you with information and advertisements about goods and services we believe may be of interest to\n                            you. <br> You may provide us with testimonials about your experience with us (including a picture of yourself), and with feedback about our services. We may use any such information you provide to enhance our services and\n                            for public-facing marketing purposes, such as through online or public display of your testimonial, feedback, and/or picture. We may also incorporate information you provide through messages, e-mails, or other means (though\n                            not your personally identifying information) into our materials or offerings.\n\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Accessing the Websites and Information Collection</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span>When you access the Websites without actively providing any personal information we collect limited technical information, such as your IP address. We also use cookies as described below.As a registered user, we collect\n                            information about your use of the Websites including homes viewed, photos viewed, pages visited, information about your location and preferences for offerings. We will maintain your login information. Records of your use\n                            of the Websites are the sole property of Tarek Buys Houses LLC. Tarek Buys Houses LLC reserves the right to use such information for its marketing, franchising, and membership endeavors.\n\n\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Cookies</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span>We, like most major websites, use cookies (text files placed on your hard drive by a web server) to help personalize and maximize your experience and time online. Cookies are not used to run programs or deliver viruses\n                            to your computer. They are uniquely assigned to your computer and can only be read by a web server in the domain that issued the cookie to you. We use cookies to improve the Websites and to facilitate your use of the Websites.\n\n\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Location-Based Services</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span>To provide location-based services, it may be necessary to collect, use, and share precise location data, including the real-time geographic location of your computer or device. Where available, location-based services\n                            may use GPS, Bluetooth, and your IP Address, along with crowd-sourced Wi-Fi hotspot and cell tower locations, and other technologies to determine the location of your device. Unless you provide consent, such location data\n                            is collected anonymously in a form that does not personally identify you and is used to provide location-based services..\n                            <br> For example, your device may share its geographic location with a Service that selects and displays properties relative to the location of your device. Some location-based services may require your personal information\n                            for the service to be provided.\n\n\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Links</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> The Websites contain links to other websites. Tarek Buys Houses LLC is not responsible for the privacy practices of sites other than our own. We encourage you to be aware of the privacy statements on other websites\n                            and to read those statements.\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Protection of Information</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> Some areas of the Websites are secured and can only be accessed using unique login credentials. You must have a specific user identifier (user ID) and password to access resources through any password-protected portions\n                            of the Websites. Your login credentials and password are for your use only and strictly confidential. You are responsible for maintaining the confidentiality and security of those credentials, and are responsible for all\n                            activity occurring on the Websites using your login credentials and password. You are strictly prohibited from any sharing of your login credentials and/or password with any other person(s) and from any use of your login\n                            credentials other than for your use of the Websites in compliance with the Online User Agreement.\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Third-Party Data Collection/Online Tracking</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> We use service providers such as Google Analytics to help us understand and improve the usage of the Websites and the effectiveness of our marketing efforts. We, Google Analytics, and/or our other analytics providers\n                            may use cookies, your IP address or an anonymous identifier as well as certain information from your browser, together with other non-personal information about your visits to the Websites (this may include information\n                            like page views and visit times; app store views; app downloads; user engagement information like active devices and location; app crashes; and behavior metrics) and other websites, so that we, Google Analytics, or third\n                            parties may improve the Websites and provide you with advertisements about goods and services of interest to you on the Websites and other websites (including through search engine results pages) and/or to provide analytical\n                            information about our Websites. If you would like more information about advertising networks, including choices about the use of information by Google Analytics and other companies for multi-site advertising purposes,\n                            go to www.networkadvertising.org and www.networkadvertising.org/choices/. Also, Google offers a Google Analytics browser add-on (designed to be compatible only with certain browsers) to provide website visitors the ability\n                            to prevent their data from being collected and used by Google Analytics. That add-on may be obtained here. credentials other than for your use of the Websites in compliance with the Online User Agreement.\n\n                            <br> Currently, various Internet browsers offer a “do not track” or “DNT” option that uses a DNT header to indicate the DNT preference setting on the browser. Tarek Buys Houses LLC does not track your activity over time\n                            and across different websites or online services other than as set forth herein, and we do not currently respond to browsers’ DNT signals with respect to the Websites. We do not permit our third-party service providers\n                            to collect information from the Websites for other websites or for their own purposes other than as described in this Policy.\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Social Media; Third-Party Applications</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> The collection and use of information on social media websites and applications are governed by their own privacy policies and terms. Please remember that any information posted on or through the Tarek Buys Houses\n                            LLC pages such as Facebook, Twitter, Google+, or on other social media pages or channels, is subject to the policies and practices of the applicable social media channel.\n\n                            <br> <br> We may receive personal information from a social media site platform or application when you connect through a social media feed, post content, or otherwise interact with us using social media tools. For example,\n                            we may receive basic Facebook account information (name, e mail, gender, birthday, current city, and profile picture URL) through Facebook. Also, when you “like” us, or send a “Tweet” to us through a social media channel,\n                            we may receive your username, handle, and any other available personal information from the social media site or application. All information received from social media sites and applications is treated and used in the\n                            same manner and for the same purposes as described in this Policy with respect to similar information we obtain through the Site.\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Children’s Privacy</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> We are committed to complying with all applicable laws and regulations regarding the collection, storage, and use of personal information of minors under the age of 18, including the Children’s Online Privacy Protection\n                            Act of 1998.\n\n                            <br> <br> We do not collect personal information from minors under the age of 18. Individuals under the age of 18 are not permitted to use the Websites without the supervision of a parent or legal guardian. We do not knowingly\n                            collect or solicit personal information from children under the age of 18 or knowingly allow such persons to register for an online account or to place orders or provide personal information through the Websites. If we\n                            learn that someone under the age of 18 has provided any personal information through the Websites, we will remove and permanently delete that information as soon as reasonably possible. <br> <br> If you are a parent or\n                            guardian who believes that your minor under the age of 18 has submitted personal information or other information to us without your consent, please contact us using the contact information provided below. Once we verify\n                            that you are the parent or legal guardian, we will cooperate with you to discuss what, if any, personal information we have collected about your child and how that information may have been shared or used.\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Changes to This Statement</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> Tarek Buys Houses LLC reserves the right to change this Privacy Policy at any time. Notification of changes will be posted on the Websites. Because these changes may affect your personal information, we suggest that\n                            you look for information regarding changes on a regular basis and review the changes as soon as they are published on the website.\n\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Disclosures for Compliance with Law</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> Notwithstanding the provisions of this Privacy Policy or the Online User Agreement, information may be and will be disclosed as needed in order to comply with law, respond to facially valid process or subpoena, to\n                            stop or mitigate illegal activity or potential harm, to protect the security of information, and to protect against fraud.\n\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Maintenance of Information Collected</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> We may maintain the information that we collect indefinitely or may delete it at any time in our sole discretion.\n\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Jurisdiction-specific Provisions and New Laws</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> This Privacy Policy is intended to comply with all legal requirements including the requirements of any jurisdiction having unique laws regarding the collection and use of personal data (e.g., the California Consumer\n                            Privacy Act or “CCPA”). Should you be a resident of any such jurisdiction, this policy is hereby deemed to be amended as appropriate to comply with any such laws. Moreover, to the extent there is any conflict with this\n                            Privacy Policy and any ‎and all privacy requirements under the law, including the CCPA and laws that may be enacted after this policy has been updated, this Privacy Policy is to be ‎deemed amended and updated to conform\n                            with any and all such legal requirements.‎\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>How do we keep your personal information secure?‎</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> We have implemented reasonable safeguards to protect your personal information from unauthorized access and improper use. If the CCPA applies to you, then you have the following additional rights:\n\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Deletion Rights:</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> You have the right to request that we delete any of your personal information ‎that we retain, subject to certain legal exceptions, such as U.S., state, local and non-U.S. laws, rules and regulations.\n\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>Disclosure and Access Rights:</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> You have the right to request that we disclose to you certain ‎information regarding our collection and use of personal information specific to you over the last ‎twelve (12) months. Such information includes:‎ the\n                            categories of personal information we collected about you;‎the categories of sources from which the personal information is collected;‎our business or commercial purpose for collecting such personal information;‎the categories\n                            of third parties with whom we share the personal information;‎the specific pieces of personal information we have collected about you; and‎whether we disclosed your personal information to a third party, and, if yes, the\n                            categories of ‎personal information that each recipient obtained.No Discrimination: We will not discriminate against you for exercising your rights under the ‎CCPA, including by denying service, suggesting that you will\n                            receive, or charging, different rates ‎for services or suggesting that you will receive, or providing, a different level or quality of service ‎to you.‎\n\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"row \">\n                <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                    <h5>How to Exercise Your Rights:</h5>\n                    <div class=\"bg_p\">\n                        <p style=\"color: #777;\"><span>\n                           </span> To exercise any of your rights under the CCPA, or to access this ‎notice in an alternative format, please submit a request on your behalf using any of the methods ‎set forth in the Contact Us section below. ‎ For\n                            any requests relating to the exercise of your rights under this Privacy Policy, including the CCPA, or questions regarding ‎our processing of your personal information, please submit or have your authorized representative\n                            ‎submit a request using any of the methods set forth below. ‎ We will contact you to confirm receipt of your request, including under the CCPA and request any ‎additional information necessary to verify your request. We\n                            verify requests by matching ‎information provided in connection with your request to information contained in our records. ‎Depending on the sensitivity of the request and the varying levels of risk in responding to such\n                            ‎requests (for example, the risk of responding to fraudulent or malicious requests), we may request ‎further information, if applicable, in order to verify your ‎request. You may designate an authorized agent to make a\n                            request under the CCPA on your ‎behalf, provided that you provide a signed agreement verifying such authorized agent’s authority ‎to make requests on your behalf, and we may verify such authorized person’s identity using\n                            the ‎procedures above.‎ We will respond to a consumer request within forty-five (45) days of our receipt thereof.‎ We will notify you in ‎writing if we cannot comply with the request and provide an ‎‎explanation of the\n                            reasons.\n\n\n\n                        </p>\n                    </div>\n\n                </div>\n            </div>\n\n            <div class=\"col-md-12  text-center gtco-heading nimate-box et_pb_text_2 fadeInUp animated-fast\" data-animate-effect=\"fadeInUp\">\n                <h5>Changes to this Privacy Policy</h5>\n                <div class=\"bg_p\">\n                    <p style=\"color: #777;\"><span>\n                       </span> We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.We will let You know via email and/or a prominent notice on Our Service, prior to the\n                        change becoming effective and update the \"Last updated\" date at the top of this Privacy Policy.You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they\n                        are posted on this page.\n\n\n                    </p>\n                </div>\n\n            </div>\n        </div>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('H7LFsPqs51C6TKiHAzBffobf8wdwMoIK2IpaEYHf', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWpNTldWWVlNZXBMak9oYkNiTGdicTBNZmhvR3JtODlzdUt5SmFoSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3QvU0hhcHAvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1641899065),
('iIPKlU5r4eZ2E68TbhkQPAPaHAMRKBy7CArfuGKa', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidVBjZkNFUlR1M0lpZEZsZ2pLaWZXZE5kVUF4WHIwZFVOWGxjMVBQZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkWWZSTDlnaHpJalNwOUhzdklLZVlOLlNBVUQ4OHVhV3NmQXFFdi93ZWhtcU10MkQwSE1YdVciO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFlmUkw5Z2h6SWpTcDlIc3ZJS2VZTi5TQVVEODh1YVdzZkFxRXYvd2VobXFNdDJEMEhNWHVXIjtzOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4iO319', 1641835016);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Timings` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Footer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `Image`, `Contact`, `Address`, `Phone`, `Timings`, `Email`, `Email2`, `Footer`, `created_at`, `updated_at`) VALUES
(1, 'LOGO-C7.png', '(949) 520-1924', 'San Francisco, CA 94126,\n            United States', '+ 01 234 567 89,', 'Mon - Fri, 8:00-22:00', 'info@gmail.com', 'sale@gmail.com', 'Copyrights   © Properdeed | All Rights Reserved | Privacy policy | Faq | Contact Us', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$YfRL9ghzIjSp9HsvIKeYN.SAUD88uaWsfAqEv/wehmqMt2D0HMXuW', NULL, NULL, NULL, '2022-01-10 11:28:34', '2022-01-10 11:28:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact-uses`
--
ALTER TABLE `contact-uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqheading`
--
ALTER TABLE `faqheading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `contact-uses`
--
ALTER TABLE `contact-uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqheading`
--
ALTER TABLE `faqheading`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
