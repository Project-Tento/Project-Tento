-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 04:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tentodatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `QuestionID` int(11) NOT NULL,
  `ChoiceAText` longtext DEFAULT NULL,
  `ChoiceBText` longtext DEFAULT NULL,
  `ChoiceCText` longtext DEFAULT NULL,
  `ChoiceDText` longtext DEFAULT NULL,
  `ChoiceAPic` longtext DEFAULT NULL,
  `ChoiceBPic` longtext DEFAULT NULL,
  `ChoiceCPic` longtext DEFAULT NULL,
  `ChoiceDPic` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`QuestionID`, `ChoiceAText`, `ChoiceBText`, `ChoiceCText`, `ChoiceDText`, `ChoiceAPic`, `ChoiceBPic`, `ChoiceCPic`, `ChoiceDPic`) VALUES
(40240101, '0.071', '0.072', '0.07', '0.0', NULL, NULL, NULL, NULL),
(40240102, '24', '16', '12', '144', NULL, NULL, NULL, NULL),
(40240103, '64000', '63800', '64000000', '63800000', NULL, NULL, NULL, NULL),
(40240104, '75', '86', '77', '92', NULL, NULL, NULL, NULL),
(40240105, '4', '2', '1', '5', NULL, NULL, NULL, NULL),
(40240106, '5', '6', '15', '12', NULL, NULL, NULL, NULL),
(40240107, '112', '117', '117.6', '115.6', NULL, NULL, NULL, NULL),
(40240108, '$106', '$107', '$108', '$109', NULL, NULL, NULL, NULL),
(40240109, '3', '4', '5', '6', NULL, NULL, NULL, NULL),
(40240110, '20400', '25540', '20436', '25545', NULL, NULL, NULL, NULL),
(40240111, '$10.56', '$19.63', '$3.84', '$54.00', NULL, NULL, NULL, NULL),
(40240112, '$19', '$38', '$35', '$12', NULL, NULL, NULL, NULL),
(40240113, '168g', '70g', '72g', '170g', NULL, NULL, NULL, NULL),
(40240114, '0.072', '720', '48', '0.0048', NULL, NULL, NULL, NULL),
(40240115, '70 mins', '156 mins', '144 mins', '72 mins', NULL, NULL, NULL, NULL),
(40240116, '180g', '90g', '360g', '150g', NULL, NULL, NULL, NULL),
(40240117, '0.27', '0.54', '54 000', '27 000', NULL, NULL, NULL, NULL),
(40240118, '1:1.5', '1:3.375', '1:3 375 000', '1:150', NULL, NULL, NULL, NULL),
(40240119, '34.4', '344', '0.00344', '0.344', NULL, NULL, NULL, NULL),
(40240120, '350', '38', '19', '31', NULL, NULL, NULL, NULL),
(40240121, '$18858.85', '$19858.85', '$18958.85', '$28858.85', NULL, NULL, NULL, NULL),
(40240122, '36.6%', '26.7%', '0.267%', '0.366%', NULL, NULL, NULL, NULL),
(40240123, '99/280', '2475/7000', '990/2800', '198/560', NULL, NULL, NULL, NULL),
(40240124, '9605', '9650', '9500', '9550', NULL, NULL, NULL, NULL),
(40240125, '28.05 cm', '28 cm', '28.2 cm', '28.35 cm', NULL, NULL, NULL, NULL),
(40240201, '41', '35', '40', '36', NULL, NULL, NULL, NULL),
(40240202, '90', '110', '100', '150', NULL, NULL, NULL, NULL),
(40240203, '105', '15', '35', '5', NULL, NULL, NULL, NULL),
(40240204, '1', '1.5', '2.5', '0.5', NULL, NULL, NULL, NULL),
(40240205, '5 - u', 'u - 5', '1 - u + 4', '5 + u', NULL, NULL, NULL, NULL),
(40240206, '22', '36', '14', '42', NULL, NULL, NULL, NULL),
(40240207, '2.67', '1.76', '6.71', '2.42', NULL, NULL, NULL, NULL),
(40240208, '8', '9', '11', '5', NULL, NULL, NULL, NULL),
(40240209, '3x=y+15', 'x=3y-5', 'x=3y-15', 'x=3y+15', NULL, NULL, NULL, NULL),
(40240210, '1', '-1', '2', '-2', NULL, NULL, NULL, NULL),
(40240211, '5k+1', '5k+5', '5k', '25k', NULL, NULL, NULL, NULL),
(40240212, '7(2x+3y)', '14(x-2y)', '14(x+2y)', '7(2x-3y)', NULL, NULL, NULL, NULL),
(40240213, '3x-1', '2x-3', 'x-1', '2', NULL, NULL, NULL, NULL),
(40240214, 'a=3.5, b=7.25', 'a=3.5, b=-7.25', 'a=-3.5, b=7.25', 'a=-3.5, b=-7.25', NULL, NULL, NULL, NULL),
(40240215, '-17', '-170', '170', '230', NULL, NULL, NULL, NULL),
(40240216, 'y=3, x=5', 'x=7, y=-9', 'x=-7, y=9', 'x=7, y=-9', NULL, NULL, NULL, NULL),
(40240217, '-9', '8', '-8', '9', NULL, NULL, NULL, NULL),
(40240218, '115', '120', '110', '125', NULL, NULL, NULL, NULL),
(40240219, 'x < 3', 'x < 9', 'x > -9', 'x > -3', NULL, NULL, NULL, NULL),
(40240220, '3, 4', '-1.5, 4', '2.5, 3', '1.5, 4', NULL, NULL, NULL, NULL),
(40240221, '-0.3, -11.7', '-0.32, -11.68', '0.3, 11.7', '0.32, 11.68', NULL, NULL, NULL, NULL),
(40240222, '3', '1/3', '2/3', '1', NULL, NULL, NULL, NULL),
(40240223, '5x-14', '14-5x', '5x+14', '5x-15', NULL, NULL, NULL, NULL),
(40240224, '-1.1, 3.5', '1.14, -3.48', '1.1, -3.5', '-1.14, 3.48', NULL, NULL, NULL, NULL),
(40240225, 'x=2/3, y=-3', 'x=-3, y=2/3', 'x=-2/3, y=3', 'x=3, y=-2/3', NULL, NULL, NULL, NULL),
(40240801, '0.15', '0.1', '0.25', '0.3', NULL, NULL, NULL, NULL),
(40240802, '2/25', '4/25', '4/5', '3/5', NULL, NULL, NULL, NULL),
(40240803, 'Both will complete at same time.', 'Someone else.', 'Sammy', 'Paul', NULL, NULL, NULL, NULL),
(40240804, '10/300', '40/300', '20/300', '30/300', NULL, NULL, NULL, NULL),
(40240805, '6/72', '9/81', '9/72', '6/81', NULL, NULL, NULL, NULL),
(40240806, '0.128', '0.512', '0.032', '0.008', NULL, NULL, NULL, NULL),
(40240807, '0.4', '0.5', '0.6', '0.7', NULL, NULL, NULL, NULL),
(40240808, '1/3', '4/3', '2/4', '2/3', NULL, NULL, NULL, NULL),
(40240809, '8/19', '9/19', '8/20', '10/19', NULL, NULL, NULL, NULL),
(40240810, '87', '88', '89', '86', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `motivationalquotes`
--

CREATE TABLE `motivationalquotes` (
  `QuoteID` int(11) NOT NULL,
  `Quote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motivationalquotes`
--

INSERT INTO `motivationalquotes` (`QuoteID`, `Quote`) VALUES
(0, 'Are you sure that you studied on the topic at least once before attempting?'),
(1, 'You are definitely capable of performing better than this! You just need more practice.'),
(2, 'This is surely not the best that you have got, is it?'),
(3, 'Not bad, but a little more effort is definitely worth it.'),
(4, 'Well done. keep up the good performance and you can surely ace the actual exams.'),
(5, 'You are not an average student, are you? Keep this up and the world highest/country highest awards might surely be yours.');

-- --------------------------------------------------------

--
-- Table structure for table `pfp`
--

CREATE TABLE `pfp` (
  `pfp_id` int(11) NOT NULL,
  `pfp_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pfp`
--

INSERT INTO `pfp` (`pfp_id`, `pfp_link`) VALUES
(1, 'https://images2.imgbox.com/cc/e1/5TkM3gaq_o.png'),
(2, 'https://images2.imgbox.com/d2/77/FmH43vYU_o.png'),
(3, 'https://images2.imgbox.com/2b/05/Vbul8JVi_o.png'),
(4, 'https://images2.imgbox.com/ff/7c/NdM5IF7S_o.png'),
(5, 'https://images2.imgbox.com/04/92/ZgZsKRI1_o.png'),
(6, 'https://images2.imgbox.com/97/c2/ObQnqMsL_o.png'),
(7, 'https://images2.imgbox.com/7c/6f/n1PVVBsZ_o.png'),
(8, 'https://images2.imgbox.com/60/c6/USIBECH4_o.png'),
(9, 'https://images2.imgbox.com/d1/13/c1t6zo5u_o.png'),
(10, 'https://images2.imgbox.com/f8/ca/eGkrIsQu_o.png'),
(11, 'https://images2.imgbox.com/e6/26/QVAtGVEY_o.png'),
(12, 'https://images2.imgbox.com/c7/2d/voAJbcS3_o.png'),
(13, 'https://images2.imgbox.com/6d/e0/nmXXBCEy_o.png'),
(14, 'https://images2.imgbox.com/46/da/BeoWETHG_o.png'),
(15, 'https://images2.imgbox.com/17/d4/TgzO6Kwz_o.png'),
(16, 'https://images2.imgbox.com/40/c4/zJODpLAo_o.png'),
(17, 'https://images2.imgbox.com/2f/9e/RLxiGtzq_o.png'),
(18, 'https://images2.imgbox.com/fe/0d/rpPIKMG6_o.png'),
(19, 'https://images2.imgbox.com/53/f1/FRTZx91p_o.png'),
(20, 'https://images2.imgbox.com/68/60/ZqIBTFKh_o.png'),
(21, 'https://images2.imgbox.com/ee/f6/Sjx3YM1x_o.png'),
(22, 'https://images2.imgbox.com/46/e2/n3t6wwDx_o.png'),
(23, 'https://images2.imgbox.com/c9/7f/KwkBp9mJ_o.png'),
(24, 'https://images2.imgbox.com/43/6f/oNZqnpmo_o.png'),
(25, 'https://images2.imgbox.com/81/ca/LXEUzgP4_o.png'),
(26, 'https://images2.imgbox.com/6b/86/DS4MFpDj_o.png'),
(27, 'https://images2.imgbox.com/cf/6b/shYS26zi_o.png'),
(28, 'https://images2.imgbox.com/c3/30/uToN2brC_o.png'),
(29, 'https://images2.imgbox.com/e0/71/eFysI9gV_o.png'),
(30, 'https://images2.imgbox.com/26/b9/szcDPJqR_o.png'),
(31, 'https://images2.imgbox.com/cc/eb/fk8D3fEP_o.png'),
(32, 'https://images2.imgbox.com/3a/db/52Tbhwtn_o.png'),
(33, 'https://images2.imgbox.com/0d/15/1BqcSGs5_o.png'),
(34, 'https://images2.imgbox.com/aa/c3/eJMdCo2c_o.png'),
(35, 'https://images2.imgbox.com/a1/7c/JD7pG6Hk_o.png'),
(36, 'https://images2.imgbox.com/ca/b2/ae18pSKy_o.png'),
(37, 'https://images2.imgbox.com/b3/54/Hl2CHkWu_o.png'),
(38, 'https://images2.imgbox.com/2b/8a/xkdQTZGt_o.png'),
(39, 'https://images2.imgbox.com/73/0f/koAwodQP_o.png'),
(40, 'https://images2.imgbox.com/76/72/PqGgP7ui_o.png'),
(41, 'https://images2.imgbox.com/5b/e6/TgoDTEcM_o.png'),
(42, 'https://images2.imgbox.com/9c/fd/wyLq7dlw_o.png'),
(43, 'https://images2.imgbox.com/3b/cf/qf4ZW3ZW_o.png'),
(44, 'https://images2.imgbox.com/8c/53/0yFyxhJh_o.png'),
(45, 'https://images2.imgbox.com/2e/05/UxX22Zxk_o.png'),
(46, 'https://images2.imgbox.com/1c/a5/AZCImPSz_o.png'),
(47, 'https://images2.imgbox.com/5c/a9/SQutU1pg_o.png'),
(48, 'https://images2.imgbox.com/9f/cb/X7iF7fOs_o.png'),
(49, 'https://images2.imgbox.com/a9/f2/vYV8zMxx_o.png'),
(50, 'https://images2.imgbox.com/1d/3c/PyrVIwT2_o.png'),
(51, 'https://images2.imgbox.com/c5/8c/GftPmLFp_o.png'),
(52, 'https://images2.imgbox.com/8b/d1/cCw4R4q7_o.png'),
(53, 'https://images2.imgbox.com/f7/b2/LWXYM318_o.png'),
(54, 'https://images2.imgbox.com/42/89/SBghlzQg_o.png'),
(55, 'https://images2.imgbox.com/74/ae/TYCpX89D_o.png'),
(56, 'https://images2.imgbox.com/8f/35/93nygk5b_o.png'),
(57, 'https://images2.imgbox.com/89/01/Y9QnQIsW_o.png'),
(58, 'https://images2.imgbox.com/07/b7/Vwtppvls_o.png'),
(59, 'https://images2.imgbox.com/da/02/dTd4Tgvi_o.png'),
(60, 'https://images2.imgbox.com/c7/1c/REzwlVAG_o.png'),
(61, 'https://images2.imgbox.com/f8/1e/9efI11Rf_o.png'),
(62, 'https://images2.imgbox.com/c9/58/cRtSNB8y_o.png'),
(63, 'https://images2.imgbox.com/e2/af/MnqT594G_o.png'),
(64, 'https://images2.imgbox.com/0a/85/Eb7lWFEp_o.png'),
(65, 'https://images2.imgbox.com/ef/11/JNDvmVuY_o.png'),
(66, 'https://images2.imgbox.com/db/6a/1SryW7jH_o.png'),
(67, 'https://images2.imgbox.com/85/c0/XxlupTJp_o.png'),
(68, 'https://images2.imgbox.com/89/df/ktz648re_o.png'),
(69, 'https://images2.imgbox.com/64/40/879R8OEe_o.png'),
(70, 'https://images2.imgbox.com/58/33/XiZpK9PD_o.png'),
(71, 'https://images2.imgbox.com/1d/e3/tLhujQcA_o.png'),
(72, 'https://images2.imgbox.com/51/b2/GuntvPkM_o.png'),
(73, 'https://images2.imgbox.com/e1/99/mmarybL6_o.png'),
(74, 'https://images2.imgbox.com/e1/46/BFuVtx4P_o.png'),
(75, 'https://images2.imgbox.com/4f/7e/jesnDCNP_o.png'),
(76, 'https://images2.imgbox.com/dd/80/d6BmArqM_o.png'),
(77, 'https://images2.imgbox.com/32/18/VF0sj9ee_o.png'),
(78, 'https://images2.imgbox.com/2b/0a/afSMXWzH_o.png'),
(79, 'https://images2.imgbox.com/c1/ff/ksaRDuHC_o.png'),
(80, 'https://images2.imgbox.com/ae/20/xX0pEPn5_o.png'),
(81, 'https://images2.imgbox.com/d3/d5/UAatRllU_o.png'),
(82, 'https://images2.imgbox.com/ba/e4/2JowjBJ2_o.png'),
(83, 'https://images2.imgbox.com/6f/20/Qzfnjf0i_o.png'),
(84, 'https://images2.imgbox.com/e9/d2/ZM5kXO1b_o.png'),
(85, 'https://images2.imgbox.com/a7/52/EcnaEViB_o.png'),
(86, 'https://images2.imgbox.com/7d/bd/07uRVEd0_o.png'),
(87, 'https://images2.imgbox.com/92/80/Oehs0wY8_o.png'),
(88, 'https://images2.imgbox.com/3b/89/j9KlePsU_o.png'),
(89, 'https://images2.imgbox.com/53/aa/FXx1y6SX_o.png'),
(90, 'https://images2.imgbox.com/4b/38/ptX1I8Cw_o.png'),
(91, 'https://images2.imgbox.com/b0/85/LkdvRP21_o.png'),
(92, 'https://images2.imgbox.com/73/dc/QZEAe3Hu_o.png'),
(93, 'https://images2.imgbox.com/2c/b4/H6si1zt8_o.png'),
(94, 'https://images2.imgbox.com/54/17/17FgLBsE_o.png'),
(95, 'https://images2.imgbox.com/f8/dd/6JuKqT5C_o.png'),
(96, 'https://images2.imgbox.com/86/d4/nhDipQVi_o.png'),
(97, 'https://images2.imgbox.com/5b/24/pPW7XxYY_o.png'),
(98, 'https://images2.imgbox.com/4d/05/HHmzA7zC_o.png'),
(99, 'https://images2.imgbox.com/af/a5/I2Fem0rK_o.png'),
(100, 'https://images2.imgbox.com/2e/95/Fenkf2o8_o.png'),
(101, 'https://images2.imgbox.com/9d/ad/mKfrXbTp_o.png'),
(102, 'https://images2.imgbox.com/eb/fd/CSq7sJIW_o.png'),
(103, 'https://images2.imgbox.com/e1/a8/XtsvZOWx_o.png'),
(104, 'https://images2.imgbox.com/c8/d0/Nd7ozl7e_o.png'),
(105, 'https://images2.imgbox.com/80/12/hWHQ1zns_o.png'),
(106, 'https://images2.imgbox.com/1c/16/hzFSuSDR_o.png'),
(107, 'https://images2.imgbox.com/ee/39/qyC5tjle_o.png'),
(108, 'https://images2.imgbox.com/38/46/mmWl4O2q_o.png'),
(109, 'https://images2.imgbox.com/1f/5a/vKEMjwlL_o.png'),
(110, 'https://images2.imgbox.com/e7/3a/51U7Z9U0_o.png'),
(111, 'https://images2.imgbox.com/cb/6a/DOMDy1W3_o.png'),
(112, 'https://images2.imgbox.com/63/96/964esEm7_o.png'),
(113, 'https://images2.imgbox.com/94/66/BFSs2zvf_o.png'),
(114, 'https://images2.imgbox.com/b3/b6/d2cLZNGd_o.png'),
(115, 'https://images2.imgbox.com/2f/37/z9TO5X7P_o.png'),
(116, 'https://images2.imgbox.com/d9/b2/mmKKHz3W_o.png'),
(117, 'https://images2.imgbox.com/6d/aa/1vs1cPl7_o.png'),
(118, 'https://images2.imgbox.com/f9/e8/uULcT8c4_o.png'),
(119, 'https://images2.imgbox.com/b8/97/yAoXEfSm_o.png'),
(120, 'https://images2.imgbox.com/44/8d/9IJLprGs_o.png'),
(121, 'https://images2.imgbox.com/25/57/oSyUnkWk_o.png'),
(122, 'https://images2.imgbox.com/ad/29/BLEVVD9T_o.png'),
(123, 'https://images2.imgbox.com/98/12/ElBIGKR0_o.png'),
(124, 'https://images2.imgbox.com/69/5f/b6zEbQVb_o.png'),
(125, 'https://images2.imgbox.com/68/4b/aR5dW3g8_o.png'),
(126, 'https://images2.imgbox.com/0b/f4/oBK9TwNB_o.png'),
(127, 'https://images2.imgbox.com/a0/8f/IEyNeqbd_o.png'),
(128, 'https://images2.imgbox.com/19/6f/xmefYdLW_o.png'),
(129, 'https://images2.imgbox.com/33/40/CzDcEX2B_o.png'),
(130, 'https://images2.imgbox.com/fb/e8/T4givbGV_o.png'),
(131, 'https://images2.imgbox.com/71/62/mdifeVy0_o.png'),
(132, 'https://images2.imgbox.com/70/93/NWfMuSNm_o.png'),
(133, 'https://images2.imgbox.com/18/05/iey85Fjp_o.png'),
(134, 'https://images2.imgbox.com/0e/32/YWL7H79i_o.png'),
(135, 'https://images2.imgbox.com/3d/91/qhS6VTTN_o.png'),
(136, 'https://images2.imgbox.com/27/3b/scCBFiQy_o.png'),
(137, 'https://images2.imgbox.com/85/7d/za4LhjAT_o.png'),
(138, 'https://images2.imgbox.com/bd/4f/O9t9oJgg_o.png'),
(139, 'https://images2.imgbox.com/36/49/YES9i4pl_o.png'),
(140, 'https://images2.imgbox.com/d1/11/UD6ZGVr0_o.png'),
(141, 'https://images2.imgbox.com/02/0a/xUc3JrLM_o.png'),
(142, 'https://images2.imgbox.com/32/02/3qUgaKBr_o.png'),
(143, 'https://images2.imgbox.com/36/b5/7efDxICR_o.png'),
(144, 'https://images2.imgbox.com/bd/7a/sauhwhEJ_o.png'),
(145, 'https://images2.imgbox.com/98/65/d7sCqNGh_o.png'),
(146, 'https://images2.imgbox.com/22/eb/ysm9Oxz6_o.png'),
(147, 'https://images2.imgbox.com/2f/b2/EoEv2R7P_o.png'),
(148, 'https://images2.imgbox.com/8d/7d/muE9ObCy_o.png'),
(149, 'https://images2.imgbox.com/28/d5/pdSRoVPC_o.png'),
(150, 'https://images2.imgbox.com/05/d1/ljuIbhP9_o.png'),
(151, 'https://images2.imgbox.com/68/64/oZCYFd1j_o.png'),
(152, 'https://images2.imgbox.com/4f/c2/uJpLUJhd_o.png'),
(153, 'https://images2.imgbox.com/0f/40/GqS7rrUp_o.png'),
(154, 'https://images2.imgbox.com/b3/ba/eLbt7oqK_o.png'),
(155, 'https://images2.imgbox.com/d0/8f/jEBREkNB_o.png'),
(156, 'https://images2.imgbox.com/8b/a5/IggjXmMV_o.png'),
(157, 'https://images2.imgbox.com/97/74/uddIX69x_o.png'),
(158, 'https://images2.imgbox.com/a5/5e/T87MM7jD_o.png'),
(159, 'https://images2.imgbox.com/ff/dc/D2NBLM10_o.png'),
(160, 'https://images2.imgbox.com/1c/a3/iSmXZM3m_o.png'),
(161, 'https://images2.imgbox.com/e7/39/w1PDRr0k_o.png'),
(162, 'https://images2.imgbox.com/40/9f/apBGtrra_o.png'),
(163, 'https://images2.imgbox.com/0b/3c/qMr6Lb1B_o.png'),
(164, 'https://images2.imgbox.com/60/44/IxA65IYN_o.png'),
(165, 'https://images2.imgbox.com/08/cb/hvzI4afk_o.png'),
(166, 'https://images2.imgbox.com/ec/d0/gXTwFpIy_o.png'),
(167, 'https://images2.imgbox.com/95/8d/5QXI0nFi_o.png'),
(168, 'https://images2.imgbox.com/11/1b/Mhq1Ui4D_o.png'),
(169, 'https://images2.imgbox.com/38/18/2AuH5BcE_o.png'),
(170, 'https://images2.imgbox.com/84/d3/P5kEtgPD_o.png'),
(171, 'https://images2.imgbox.com/95/8a/zQBCUOtq_o.png'),
(172, 'https://images2.imgbox.com/65/fb/1gnzX0DS_o.png'),
(173, 'https://images2.imgbox.com/b0/be/JsWd9CIq_o.png'),
(174, 'https://images2.imgbox.com/67/34/Bw2ckRwn_o.png'),
(175, 'https://images2.imgbox.com/98/2f/OVXUxTMa_o.png'),
(176, 'https://images2.imgbox.com/8c/34/HHl9oDnk_o.png'),
(177, 'https://images2.imgbox.com/0f/70/hZJOnOyT_o.png'),
(178, 'https://images2.imgbox.com/35/ab/Ql5MHbhN_o.png'),
(179, 'https://images2.imgbox.com/fc/8d/q4SBaVA4_o.png'),
(180, 'https://images2.imgbox.com/9e/fd/B3jWGlX1_o.png'),
(181, 'https://images2.imgbox.com/1b/f7/SvZMSNwn_o.png'),
(182, 'https://images2.imgbox.com/a1/09/TxvUcXEc_o.png'),
(183, 'https://images2.imgbox.com/7e/f0/kH6betZB_o.png'),
(184, 'https://images2.imgbox.com/51/e0/uj17hBS2_o.png'),
(185, 'https://images2.imgbox.com/f5/7a/O2WE7ySo_o.png'),
(186, 'https://images2.imgbox.com/18/26/B2KogiUq_o.png'),
(187, 'https://images2.imgbox.com/59/87/dUGpaIZe_o.png'),
(188, 'https://images2.imgbox.com/fa/80/4CSnIBcJ_o.png'),
(189, 'https://images2.imgbox.com/53/58/TX9XrR31_o.png'),
(190, 'https://images2.imgbox.com/1c/60/qiXH0lNF_o.png'),
(191, 'https://images2.imgbox.com/4b/a3/NYm7JHjq_o.png'),
(192, 'https://images2.imgbox.com/da/12/secW8iGt_o.png'),
(193, 'https://images2.imgbox.com/ae/94/AJRyCRFD_o.png'),
(194, 'https://images2.imgbox.com/b2/e3/NGCovqDX_o.png'),
(195, 'https://images2.imgbox.com/b6/73/GAL0uhJ0_o.png'),
(196, 'https://images2.imgbox.com/cc/89/T1hU8TLU_o.png'),
(197, 'https://images2.imgbox.com/02/32/dBSryPn7_o.png'),
(198, 'https://images2.imgbox.com/a0/9c/YInaPgZ8_o.png'),
(199, 'https://images2.imgbox.com/98/aa/27Wyy9NI_o.png'),
(200, 'https://images2.imgbox.com/2e/cf/Inms8Qhh_o.png'),
(201, 'https://images2.imgbox.com/e4/f8/NeUkj0Zx_o.png'),
(202, 'https://images2.imgbox.com/03/91/9WpGOSgm_o.png'),
(203, 'https://images2.imgbox.com/a4/6a/COK91kkp_o.png'),
(204, 'https://images2.imgbox.com/ad/6c/meIkoPry_o.png'),
(205, 'https://images2.imgbox.com/80/06/4SIMpZ7v_o.png'),
(206, 'https://images2.imgbox.com/29/37/mq7TXdl9_o.png'),
(207, 'https://images2.imgbox.com/8d/fb/u7PZXYcT_o.png'),
(208, 'https://images2.imgbox.com/59/c2/3yRZLizi_o.png'),
(209, 'https://images2.imgbox.com/7d/52/sAObDFmb_o.png'),
(210, 'https://images2.imgbox.com/7c/54/uhwBa1Vs_o.png'),
(211, 'https://images2.imgbox.com/50/77/0IILVDmk_o.png'),
(212, 'https://images2.imgbox.com/c5/1b/fiyX9Efe_o.png'),
(213, 'https://images2.imgbox.com/b6/af/IOpipf5G_o.png'),
(214, 'https://images2.imgbox.com/e3/6d/cw9Wi8Kk_o.png'),
(215, 'https://images2.imgbox.com/5b/27/v60EVetg_o.png'),
(216, 'https://images2.imgbox.com/77/43/oeS7jU27_o.png'),
(217, 'https://images2.imgbox.com/53/42/o5G5nD0M_o.png'),
(218, 'https://images2.imgbox.com/ae/b8/rGNutkPi_o.png'),
(219, 'https://images2.imgbox.com/fb/bf/PvdKhXtf_o.png'),
(220, 'https://images2.imgbox.com/c8/4c/zbiTsXLj_o.png'),
(221, 'https://images2.imgbox.com/e3/f0/BmWBveZ7_o.png'),
(222, 'https://images2.imgbox.com/8a/6f/2PxJr50l_o.png'),
(223, 'https://images2.imgbox.com/69/d7/I5w24CDn_o.png'),
(224, 'https://images2.imgbox.com/0e/d5/W8sGjl06_o.png'),
(225, 'https://images2.imgbox.com/07/b9/uSMBgx2W_o.png'),
(226, 'https://images2.imgbox.com/ab/6e/XKBZk0M7_o.png'),
(227, 'https://images2.imgbox.com/f0/5f/4QAav8ov_o.png'),
(228, 'https://images2.imgbox.com/99/fc/UH4vjrGD_o.png'),
(229, 'https://images2.imgbox.com/29/58/fxNI5sbB_o.png'),
(230, 'https://images2.imgbox.com/5a/95/1Jpwz3SV_o.png'),
(231, 'https://images2.imgbox.com/32/46/EslbUrj0_o.png'),
(232, 'https://images2.imgbox.com/97/a8/ll3ocjvt_o.png'),
(233, 'https://images2.imgbox.com/e8/c8/rfOS5IYv_o.png'),
(234, 'https://images2.imgbox.com/46/78/R7BioVkM_o.png'),
(235, 'https://images2.imgbox.com/93/58/SNUOjW9i_o.png'),
(236, 'https://images2.imgbox.com/3e/1c/1ZQlUYhW_o.png'),
(237, 'https://images2.imgbox.com/8b/75/S1onenYG_o.png'),
(238, 'https://images2.imgbox.com/a5/14/QXFkOblo_o.png'),
(239, 'https://images2.imgbox.com/27/35/5g0hknyf_o.png'),
(240, 'https://images2.imgbox.com/c2/c8/OBlg796f_o.png'),
(241, 'https://images2.imgbox.com/cb/e9/n8xLuk7P_o.png'),
(242, 'https://images2.imgbox.com/ce/c1/7nvMX71b_o.png'),
(243, 'https://images2.imgbox.com/1e/9f/Gfe3lFJv_o.png'),
(244, 'https://images2.imgbox.com/7f/46/qcTCQyHp_o.png'),
(245, 'https://images2.imgbox.com/8b/0e/gCBr1obx_o.png'),
(246, 'https://images2.imgbox.com/e5/02/t7labD9v_o.png'),
(247, 'https://images2.imgbox.com/76/e8/jRa1EGPH_o.png'),
(248, 'https://images2.imgbox.com/e6/79/GMLjPYg4_o.png'),
(249, 'https://images2.imgbox.com/21/6a/2GkhRHbn_o.png'),
(250, 'https://images2.imgbox.com/9c/67/W3CWJG2N_o.png'),
(251, 'https://images2.imgbox.com/7b/71/EdPha8uh_o.png'),
(252, 'https://images2.imgbox.com/a0/2d/7qwtlAJk_o.png'),
(253, 'https://images2.imgbox.com/96/c7/tio5X0AH_o.png'),
(254, 'https://images2.imgbox.com/5e/54/qszyCJNi_o.png'),
(255, 'https://images2.imgbox.com/16/43/dNJ6ZXu4_o.png'),
(256, 'https://images2.imgbox.com/85/00/Nf9DwELv_o.png'),
(257, 'https://images2.imgbox.com/aa/ae/cAWfkNij_o.png'),
(258, 'https://images2.imgbox.com/c1/69/D91w6SMU_o.png'),
(259, 'https://images2.imgbox.com/c9/ba/XHxIe6lz_o.png'),
(260, 'https://images2.imgbox.com/2a/76/5WzgXMMT_o.png'),
(261, 'https://images2.imgbox.com/17/0c/ZUfmPl4O_o.png'),
(262, 'https://images2.imgbox.com/99/89/BWeKMEdC_o.png'),
(263, 'https://images2.imgbox.com/86/52/JLB6b5nC_o.png'),
(264, 'https://images2.imgbox.com/09/9c/Qw3AYOSu_o.png'),
(265, 'https://images2.imgbox.com/da/8f/CDpi1cK2_o.png'),
(266, 'https://images2.imgbox.com/cb/e0/fYxMa80N_o.png'),
(267, 'https://images2.imgbox.com/8d/cd/5q6w1VpS_o.png'),
(268, 'https://images2.imgbox.com/fb/7a/worvYijS_o.png'),
(269, 'https://images2.imgbox.com/60/1d/gG561cwK_o.png'),
(270, 'https://images2.imgbox.com/ef/8d/cCjoi4PI_o.png'),
(271, 'https://images2.imgbox.com/5c/f7/DgmA3uEv_o.png'),
(272, 'https://images2.imgbox.com/3c/95/uAN6scRD_o.png'),
(273, 'https://images2.imgbox.com/24/89/9XT1drW5_o.png'),
(274, 'https://images2.imgbox.com/6a/b7/kQRIZEYy_o.png'),
(275, 'https://images2.imgbox.com/94/96/ccHQ5Kqg_o.png'),
(276, 'https://images2.imgbox.com/71/b9/Zz4HZRg1_o.png'),
(277, 'https://images2.imgbox.com/50/4d/QgXrMA7h_o.png'),
(278, 'https://images2.imgbox.com/9e/bd/Pq9gIHlw_o.png'),
(279, 'https://images2.imgbox.com/b9/d5/Kaf3WLph_o.png'),
(280, 'https://images2.imgbox.com/a9/97/2EecduCh_o.png'),
(281, 'https://images2.imgbox.com/b9/6e/aGZhyi90_o.png'),
(282, 'https://images2.imgbox.com/4a/df/cFdkZMop_o.png'),
(283, 'https://images2.imgbox.com/8e/12/fflNKYgq_o.png'),
(284, 'https://images2.imgbox.com/27/a4/7zVxpXGq_o.png'),
(285, 'https://images2.imgbox.com/82/1a/4RdpzexB_o.png');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QuestionID` int(11) NOT NULL,
  `QuestionText` longtext NOT NULL,
  `QuestionPicture` longtext DEFAULT NULL,
  `TopicID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QuestionID`, `QuestionText`, `QuestionPicture`, `TopicID`) VALUES
(40240101, 'Write 0.07164 correct to 2 significant figures.', NULL, 402401),
(40240102, 'Find the lowest common multiple ( LCM) of 36 and 48.', NULL, 402401),
(40240103, 'A lake has an area of 63 800 000 000 square metres. Write this area in square kilometres, correct to 2 significant figures.', NULL, 402401),
(40240104, 'Find the sum of the prime numbers less than 21.', NULL, 402401),
(40240105, 'Find the highest common factor (HCF) of 20 and 24.', NULL, 402401),
(40240106, 'The probability that it will rain on any day is 1/5. Calculate an estimate of the number of days it will rain in a month with 30 days.', NULL, 402401),
(40240107, 'Increase $105 by 12%.', NULL, 402401),
(40240108, 'Priya buys a bicycle for $250. Each year the value of the bicycle decreases by 8% of its value at the beginning of that year. Calculate the value of Priya’s bicycle after 10 years. ', NULL, 402401),
(40240109, 'One bottle contains 1.5 litres of fruit juice. Calculate the number of 330 ml glasses that can be filled completely from one bottle.', NULL, 402401),
(40240110, '5/9 of 45981 bottles are recycled. Find the number of bottles that are recycled.', NULL, 402401),
(40240111, 'Jason receives some money for his birthday. He spends <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>11</mn><mn>15</mn></mfrac></math> of the money and has $14.40 left. Calculate how much money he received for his birthday', NULL, 402401),
(40240112, 'Ralf and Susie share $57 in the ratio 2 : 1.  Calculate the amount Ralf receives', NULL, 402401),
(40240113, 'Ahmed and Babar share 240g of sweets in the ratio 7:3. Calculate the amount Ahmed receives.', NULL, 402401),
(40240114, 'Hans draws a plan of a field using a scale of 1 centimetre to represent 15 metres. The actual area of the field is 10800 <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>m</mi><mn>2</mn></msup></math>. Calculate the area of the field on the plan in <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>c</mi><msup><mi>m</mi><mn>2</mn></msup></math>.', NULL, 402401),
(40240115, 'Pedro takes 84 minutes to do his homework. The ratio Pedro’s time : Eva’s time = 7 : 6. Work out the number of minutes Eva takes to do her homework.', NULL, 402401),
(40240116, 'Jamie needs 300 g of flour to make 20 cakes. How much flour does he need to make 12 cakes?', NULL, 402401),
(40240117, 'The scale on a map is 1: 20 000.  Calculate the actual distance between two points which are 2.7 cm apart on the map in km.', NULL, 402401),
(40240118, 'The volume of a child’s model plane is 1200 <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>c</mi><msup><mi>m</mi><mn>3</mn></msup></math>. The volume of the full size plane is 4050 <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>m</mi><mn>3</mn></msup></math>. Find the scale of the model in the form 1:n ', NULL, 402401),
(40240119, 'The scale of a map is 1 : 500000. The actual distance between two towns is 172 km. Calculate the distance, in centimetres, between the towns on the map.', NULL, 402401),
(40240120, 'The ratios of teachers : male students : female students in a school are 2 : 17  : 18. The total number of students is 665. Find the number of teachers. ', NULL, 402401),
(40240121, 'The value of a motorbike is $12400. Each year, the value of the motorbike decreases exponentially by 15%. Calculate the value of the motorbike after 3 years.', NULL, 402401),
(40240122, 'The population of a town in the year 1990 was 15600. The population is now 11420. Calculate the percentage decrease in the population.', NULL, 402401),
(40240123, 'Find $24.75 as a fraction of $70. Give your answer in its lowest terms.', NULL, 402401),
(40240124, 'In 2016, a company sold 9600 cars, correct to the nearest hundred. Write down the lower bound for the number of cars sold.', NULL, 402401),
(40240125, 'The sides of an equilateral triangle are 9.4 cm, correct to the nearest millimetre. Work out the upper bound of the perimeter of this triangle.', NULL, 402401),
(40240201, 'Find the value of 5a - 3b when a = 7 and b =-2.', NULL, 402402),
(40240202, 'For the equation: <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>s</mi><mo>=</mo><mo>&#xA0;</mo><mi>u</mi><mi>t</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>16</mn><msup><mi>t</mi><mn>2</mn></msup></math>, find the value of s when u = 2 and t = 3.\n', NULL, 402402),
(40240203, 'Find V when A = 15 and h = 7 for the equation: <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>V</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>1</mn><mn>3</mn></mfrac><mi>A</mi><mi>h</mi></math>', NULL, 402402),
(40240204, 'Solve the equation. 6(y + 1) = 9', NULL, 402402),
(40240205, 'Simplify. 1 – 2u + u + 4', NULL, 402402),
(40240206, 'Find the value of <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>a</mi><mn>2</mn></msup><mo>+</mo><mo>&#xA0;</mo><msup><mi>b</mi><mn>2</mn></msup></math> when a + b = 6 and ab = 7', NULL, 402402),
(40240207, 'A sphere has a volume of 80<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>c</mi><msup><mi>m</mi><mn>3</mn></msup></math>. Calculate the radius of the sphere in cm. [The volume, V, of a sphere with radius r is <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>V</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>4</mn><mn>3</mn></mfrac><mi>&#x3a0;</mi><msup><mi>r</mi><mn>3</mn></msup></math>.]', NULL, 402402),
(40240208, 'Find r when <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mn>5</mn><mfrac><mi>r</mi><mn>3</mn></mfrac></msup></math> = 125', NULL, 402402),
(40240209, 'Make x the subject of the formula: <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>=</mo><mfrac><mi>x</mi><mn>3</mn></mfrac><mo>+</mo><mn>5</mn></math>', NULL, 402402),
(40240210, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mn>3</mn><mi>x</mi></msup><mo>=</mo><mfrac><mn>1</mn><mn>3</mn></mfrac></math> Write down the value of x.', NULL, 402402),
(40240211, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mn>5</mn><mi>y</mi></msup><mo>=</mo><mi>k</mi></math> Find <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mn>5</mn><mrow><mi>y</mi><mo>+</mo><mn>1</mn></mrow></msup></math> in terms of k.', NULL, 402402),
(40240212, 'Factorise 14x- 21y', NULL, 402402),
(40240213, 'Expand the brackets and simplify: <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mspace linebreak=\"newline\"/><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>(</mo><mn>6</mn><mi>x</mi><mo>-</mo><mn>2</mn><mo>)</mo><mo>-</mo><mn>3</mn><mo>(</mo><mi>x</mi><mo>-</mo><mn>1</mn><mo>)</mo></math>', NULL, 402402),
(40240214, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>7</mn><mi>x</mi><mo>&#xA0;</mo><mi>&#x2013;</mi><mo>&#xA0;</mo><mn>5</mn></math> can be written in the form <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>(</mo><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>a</mi><msup><mo>)</mo><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>b</mi></math> Find the values of a and b.', NULL, 402402),
(40240215, 'Two quantities c and d are connected by the formula c = 2d + 30. Find c when d = −100 ', NULL, 402402),
(40240216, 'Solve the simultaneous equations: <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mspace linebreak=\"newline\"/><mspace linebreak=\"newline\"/><mn>3</mn><mi mathvariant=\"normal\">x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>5</mn><mi mathvariant=\"normal\">y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>24</mn><mo>&#xA0;</mo><mspace linebreak=\"newline\"/><mo>&#xA0;</mo><mi mathvariant=\"normal\">x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>7</mn><mi mathvariant=\"normal\">y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>56</mn><mo>&#xa0;</mo></math>', NULL, 402402),
(40240217, 'Solve the equation 1 + 2x = –15', NULL, 402402),
(40240218, 'The cost of a cup of tea is t cents. The cost of a cup of coffee is (t + 5) cents. The total cost of 7 cups of tea and 11 cups of coffee is 2215 cents. Find the cost of one cup of tea.', NULL, 402402),
(40240219, 'Solve the inequality <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mi>x</mi><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>5</mn><mo>&#xA0;</mo><mo>&gt;</mo><mo>&#xA0;</mo><mn>2</mn></math>', NULL, 402402),
(40240220, 'Solve the equation <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mi>&#x2013;</mi><mo>&#xA0;</mo><mn>11</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>12</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn><mo>&#xa0;</mo></math>', NULL, 402402),
(40240221, 'Solve <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>&#xa0;</mo><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>12</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>3</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math> , giving your answers correct to 1 decimal place.', NULL, 402402),
(40240222, 'The area of the rectangle and the area of the triangle are equal. Find the value of y.', 'https://images2.imgbox.com/e3/89/41n3QLhp_o.jpg', 402402),
(40240223, 'Write an expression, in terms of x, for the perimeter of the quadrilateral. Give your answer in its simplest form.', NULL, 402402),
(40240224, 'Solve <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mi>&#x2013;</mi><mo>&#xA0;</mo><mn>7</mn><mi>x</mi><mo>&#xA0;</mo><mi>&#x2013;</mi><mo>&#xA0;</mo><mn>12</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>. Give your answers correct to 2 decimal places.', NULL, 402402),
(40240225, 'Solve the simultaneous equations. 9x – 2y = 12, 3x + 4y = –10.', NULL, 402402),
(40240801, 'The probability that Stephanie wins her next tennis match is 0.85. Find the probability that Stephanie does not win her next tennis match.', NULL, 402408),
(40240802, 'The probability that Pedro scores a goal in any match is 2/5. Calculate the probability that Pedro scores a goal in each of the next two matches.', NULL, 402408),
(40240803, 'Paul and Sammy take part in a race. The probability that Paul wins the race is 9/35. The probability that Sammy wins the race is 26%. who is more likely towin the race?\r\n', NULL, 402408),
(40240804, 'The Ocean View Hotel has 300 rooms numbered from 100 to 399. A room is chosen at random. Find the probability that the room number ends in zero.', NULL, 402408),
(40240805, 'A box contains 3 red pencils, 2 blue pencils and 4 green pencils. Raj chooses 2 pencils at random, without replacement. Calculate the probability that they are both red.', NULL, 402408),
(40240806, 'Xsara throws a ball three times at a target. Each time she throws the ball, the probability that she hits the target is 0.2. Calculate the probability that she does not hit the target in any of the three throws.', NULL, 402408),
(40240807, 'Hattie has a box of coloured pens. She takes a pen at random from the box. The probability that she takes a red pen is 0.4. Work out the probability that she does not take a red pen.', NULL, 402408),
(40240808, 'Dan either walks or cycles to school.\r\nThe probability that he cycles to school is 1/3.  Write down the probability that Dan walks to school.\r\n', NULL, 402408),
(40240809, 'Rooms in a hotel are numbered from 1 to 19.\r\nRooms are allocated at random as guests arrive. What is the probability that the first guest to arrive is given a room which is a prime number?', NULL, 402408),
(40240810, 'Amber’s mean mark on five tests is 80.\r\nHer marks on four of these tests are 68, 81, 74 and 89.\r\nWork out her mark on the fifth test.', NULL, 402408);

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `QuestionID` int(11) NOT NULL,
  `SolutionText` longtext NOT NULL,
  `SolutionPicture` longtext DEFAULT NULL,
  `Hint` longtext NOT NULL,
  `AnswerText` longtext DEFAULT NULL,
  `AnswerPic` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`QuestionID`, `SolutionText`, `SolutionPicture`, `Hint`, `AnswerText`, `AnswerPic`) VALUES
(40240101, 'The second significant figure is 1, and there is a 6 after that, so we round up 1. Answer is 0.072', NULL, 'Leading zeros are not significant', '0.072', NULL),
(40240102, '36 x 4 = 144. 48 x 3 = 144. 3 is a prime number.', NULL, 'Prime factorise the two numbers', '144', NULL),
(40240103, 'Divide by 1 000 000 to get 63 800. 63 800 correct to 2 significant figures is 64 000. ', NULL, '1 sq km = 1 000 000 sq m.', '64000', NULL),
(40240104, 'The prime numbers addition = 2+3+5+7+11+13+17+19 = 77', NULL, '2 is a prime number', '77', NULL),
(40240105, 'The common factors are 4, 2 and 1. 4 is the highest.', NULL, 'Prime factorise the numbers', '4', NULL),
(40240106, 'Multiply 1/5 with 30 to get 6, which is the estimated frequency of rainy days.', NULL, 'Probability is given in reduced form', '6', NULL),
(40240107, 'Additional value = 0.12 x 105 = 12.6. 105 + 12.6 = 117.6', NULL, 'Percentage/100= added value', '117.6', NULL),
(40240108, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>$</mi><mn>250</mn><mo>&#xA0;</mo><mo>&#xd7;</mo><mo>&#xA0;</mo><mo>(</mo><mn>1</mn><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>0.08</mn><msup><mo>)</mo><mn>10</mn></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mi>$</mi><mn>108</mn></math>', NULL, 'depreciation= percentage x value', '$108', NULL),
(40240109, '1500 ml / 330 ml = 4.5. but we must round down to ensure complete number of bottles.', NULL, '1 litre = 1000 ml', '4', NULL),
(40240110, '5/9 x 45 981 = 25 545', NULL, 'Find fraction of the given value', '25545', NULL),
(40240111, 'Let x be the amount. <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>4</mn><mn>15</mn></mfrac></math> is the fraction of $14.40. So, <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>4</mn><mn>15</mn></mfrac></math>x = $14.40 should be solved to get x = $54', NULL, 'Find fraction of $14.40', '$54.00', NULL),
(40240112, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xd7;</mo><mn>57</mn><mo>=</mo><mn>38</mn></math>', NULL, 'Ralf gets <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>2</mn><mn>3</mn></mfrac></math> rd of the share.', '$38', NULL),
(40240113, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>7</mn><mn>10</mn></mfrac><mo>&#xd7;</mo><mn>240</mn><mo>=</mo><mn>168</mn></math>', NULL, 'Ahmed gets <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>7</mn><mn>10</mn></mfrac></math> of 240g.', '$168g', NULL),
(40240114, 'Area = <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mrow><mo>&#xa0;</mo><mn>10800</mn></mrow><mn>225</mn></mfrac></math> = 48', NULL, 'Area is directly proportional to square to map length.', '48', NULL),
(40240115, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mi>t</mi><mn>6</mn></mfrac><mo>=</mo><mfrac><mn>84</mn><mn>7</mn></mfrac><mo>&#xA0;</mo><mo>&#x21d2;</mo><mi>t</mi><mo>=</mo><mn>72</mn></math>', NULL, 'Time taken is directly proportional the ratio number of each student', '72 mins', NULL),
(40240116, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mi>m</mi><mn>12</mn></mfrac><mo>=</mo><mfrac><mn>300</mn><mn>20</mn></mfrac><mo>&#xA0;</mo><mo>&#x21d2;</mo><mi>m</mi><mo>=</mo><mn>180</mn></math>', NULL, 'Unitary method can be used here.', '180g', NULL),
(40240117, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mrow><mn>20</mn><mo>&#xA0;</mo><mn>000</mn></mrow></mfrac><mo>=</mo><mfrac><mrow><mn>2.7</mn><mo>&#xA0;</mo><mi>c</mi><mi>m</mi></mrow><mi>d</mi></mfrac><mo>&#xA0;</mo><mo>&#x21d2;</mo><mi>d</mi><mo>=</mo><mn>54</mn><mo>&#xA0;</mo><mn>000</mn><mo>&#xA0;</mo><mi>c</mi><mi>m</mi><mo>=</mo><mn>0.54</mn><mo>&#xa0;</mo><mi>k</mi><mi>m</mi><mo>&#xa0;</mo></math>', NULL, '1 cm = 100 000 km', '0.54', NULL),
(40240118, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mi>n</mi></mfrac><mo>=</mo><mroot><mfrac><mn>1200</mn><mrow><mn>4050</mn><mo>&#xd7;</mo><mn>100</mn><mo>&#xd7;</mo><mn>100</mn><mo>&#xd7;</mo><mn>100</mn></mrow></mfrac><mn>3</mn></mroot><mo>=</mo><mfrac><mn>1</mn><mn>150</mn></mfrac></math>', NULL, 'Units must be consistent', '1:150', NULL),
(40240119, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mrow><mn>500</mn><mo>&#xA0;</mo><mn>000</mn></mrow></mfrac><mo>=</mo><mfrac><mi>d</mi><mrow><mn>172</mn><mo>&#xA0;</mo><mo>&#xd7;</mo><mo>&#xA0;</mo><mn>100</mn><mo>&#xA0;</mo><mn>000</mn></mrow></mfrac><mo>&#xA0;</mo><mo>&#x21d2;</mo><mo>&#xA0;</mo><mi>d</mi><mo>=</mo><mn>34.4</mn></math>', NULL, '1 km = 100 000 cm', '34.4', NULL),
(40240120, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mi>n</mi><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>665</mn><mrow><mn>17</mn><mo>+</mo><mn>18</mn></mrow></mfrac><mo>&#xA0;</mo><mo>&#x21d2;</mo><mo>&#xA0;</mo><mi>n</mi><mo>=</mo><mn>38</mn></math>', NULL, 'The number of teachers is directly proportional to the ratio number of teachers.', '38', NULL),
(40240121, 'After 1 year, <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>0.15</mn><mo>&#xd7;</mo><mn>12400</mn><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>12400</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1.15</mn><mo>&#xd7;</mo><mn>12400</mn></math> . So after 3 years, <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>(</mo><mn>1.15</mn><msup><mo>)</mo><mn>3</mn></msup><mo>&#xd7;</mo><mn>12400</mn><mo>=</mo><mo>&#xA0;</mo><mn>18858.85</mn></math>', NULL, 'Use formulae for geometric progression.', '$18858.85', NULL),
(40240122, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mrow><mn>15600</mn><mo>-</mo><mn>11420</mn></mrow><mn>15600</mn></mfrac><mo>&#xd7;</mo><mn>100</mn><mo>%</mo><mo>=</mo><mn>26.7</mn><mo>%</mo></math>', NULL, 'Percentage decrease is always with respect to initial value.', '26.7%', NULL),
(40240123, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mrow><mn>24.75</mn><mo>&#xA0;</mo><mo>&#xd7;</mo><mn>100</mn></mrow><mrow><mn>70</mn><mo>&#xd7;</mo><mn>100</mn></mrow></mfrac><mo>=</mo><mfrac><mn>2475</mn><mn>7000</mn></mfrac><mo>=</mo><mfrac><mrow><mn>2475</mn><mo>/</mo><mn>25</mn></mrow><mrow><mn>7000</mn><mo>/</mo><mn>25</mn></mrow></mfrac><mo>=</mo><mfrac><mn>99</mn><mn>280</mn></mfrac></math>', NULL, 'Reduce fractions using common multiples.', '99/280', NULL),
(40240124, 'Since lower bound, we subtract 50 from 9600 to get 9550', NULL, 'Divide 100 by 2 to get the bound.', '9550', NULL),
(40240125, 'Upper bound of a side = 9.45 cm. Perimeter = 9.45 + 9.45 + 9.45 cm = 28.35 cm.', NULL, 'You will require the upper bound of each sides', '28.35 cm', NULL),
(40240201, '5(7) - 3(-2) = 41', NULL, 'Substitute values of a and b int the expression.', '41', NULL),
(40240202, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>s</mi><mo>=</mo><mo>&#xa0;</mo><mn>2</mn><mo>&#xd7;</mo><mn>3</mn><mo>&#xa0;</mo><mo>+</mo><mo>&#xa0;</mo><mn>16</mn><mo>&#xd7;</mo><msup><mn>3</mn><mn>2</mn></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>150</mn></math>', NULL, 'Substitute the values of u and t in the given equation', '150', NULL),
(40240203, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>V</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>1</mn><mn>3</mn></mfrac><mo>&#xd7;</mo><mn>15</mn><mo>&#xd7;</mo><mn>7</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>35</mn></math>', NULL, 'Substitute values of A and h in the given equation', '35', NULL),
(40240204, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>+</mo><mn>1</mn><mo>=</mo><mfrac><mn>9</mn><mn>6</mn></mfrac><mspace linebreak=\"newline\"/><mi>y</mi><mo>=</mo><mfrac><mn>9</mn><mn>6</mn></mfrac><mo>-</mo><mn>1</mn><mo>=</mo><mn>0.5</mn></math>', NULL, 'Make y the subject of formula', '0.5', NULL),
(40240205, '(1+4) + (-2u+u) = 5 - u', NULL, 'Numeric terms can only be added to numeric terms', '5 - u', NULL),
(40240206, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>a</mi><mn>2</mn></msup><mo>+</mo><msup><mi>b</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>(</mo><mi>a</mi><mo>+</mo><mi>b</mi><msup><mo>)</mo><mn>2</mn></msup><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>2</mn><mi>a</mi><mi>b</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><msup><mn>6</mn><mn>2</mn></msup><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>2</mn><mo>&#xA0;</mo><mo>(</mo><mn>7</mn><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>36</mn><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>14</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>22</mn></math>', NULL, 'Recall the formula of <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>(</mo><mi>a</mi><mo>+</mo><mi>b</mi><msup><mo>)</mo><mn>2</mn></msup><mo>&#xA0;</mo></math>', '22', NULL),
(40240207, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>4</mn><mn>3</mn></mfrac><mi>&#x3a0;</mi><msup><mi>r</mi><mn>3</mn></msup><mo>=</mo><mo>&#xA0;</mo><mn>80</mn><mo>&#xa0;</mo><mspace linebreak=\"newline\"/><mi>&#x3a0;</mi><msup><mi>r</mi><mn>3</mn></msup><mo>=</mo><mo>&#xA0;</mo><mn>60</mn><mo>&#xa0;</mo><mspace linebreak=\"newline\"/><mi>r</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2.67</mn><mi>c</mi><mi>m</mi></math>', NULL, 'Substitute the value of volume in V of the given equation and solve for r', '2.67', NULL),
(40240208, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mn>5</mn><mfrac><mi>r</mi><mn>3</mn></mfrac></msup><mo>=</mo><msup><mn>5</mn><mn>3</mn></msup><mspace linebreak=\"newline\"/><mfrac><mi>r</mi><mn>3</mn></mfrac><mo>=</mo><mn>3</mn><mspace linebreak=\"newline\"/><mi>r</mi><mo>=</mo><mn>9</mn></math>', NULL, 'Try to use indices to match right side with the left side and solve for r', '9', NULL),
(40240209, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mi>y</mi><mo>=</mo><mi>x</mi><mo>+</mo><mn>15</mn><mspace linebreak=\"newline\"/><mi>x</mi><mo>=</mo><mn>3</mn><mi>y</mi><mo>-</mo><mn>15</mn></math>', NULL, 'Multiply by 3 on both sides to get rid of the fraction.', 'x=3y-15', NULL),
(40240210, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mn>3</mn><mi>x</mi></msup><mo>=</mo><msup><mn>3</mn><mrow><mo>-</mo><mn>1</mn></mrow></msup><mspace linebreak=\"newline\"/><mi>x</mi><mo>=</mo><mo>-</mo><mn>1</mn></math>', NULL, 'Take common base to both sides', '-1', NULL),
(40240211, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mn>5</mn><mrow><mi>x</mi><mo>+</mo><mn>1</mn></mrow></msup><mo>=</mo><msup><mn>5</mn><mi>x</mi></msup><mo>&#xd7;</mo><mn>5</mn><mo>=</mo><mn>5</mn><mi>k</mi></math>', NULL, 'Adding 1 to the power means multiplication', '5k', NULL),
(40240212, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>7</mn><mo>&#xd7;</mo><mn>2</mn><mi>x</mi><mo>-</mo><mn>7</mn><mo>&#xd7;</mo><mn>3</mn><mi>y</mi><mspace linebreak=\"newline\"/><mn>7</mn><mo>(</mo><mn>2</mn><mi>x</mi><mo>-</mo><mn>3</mn><mi>y</mi><mo>)</mo></math>', NULL, 'What is the HCF of 14 and 21?', '7(2x-3y)', NULL),
(40240213, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mspace linebreak=\"newline\"/><mo>(</mo><mn>3</mn><mi>x</mi><mo>-</mo><mn>1</mn><mo>)</mo><mo>-</mo><mo>(</mo><mn>3</mn><mi>x</mi><mo>-</mo><mn>3</mn><mo>)</mo><mspace linebreak=\"newline\"/><mo>=</mo><mn>3</mn><mi>x</mi><mo>-</mo><mn>1</mn><mo>-</mo><mn>3</mn><mi>x</mi><mo>+</mo><mn>3</mn><mspace linebreak=\"newline\"/><mo>=</mo><mn>2</mn></math>', NULL, 'Expand the brackets using BODMAS rule', '2', NULL),
(40240214, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>2</mn><mi>a</mi><mi>x</mi><mo>+</mo><msup><mi>a</mi><mn>2</mn></msup><mo>+</mo><mi>b</mi><mo>&#xA0;</mo><mo>&#x2261;</mo><mi>\n</mi><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>7</mn><mi>x</mi><mo>+</mo><mn>5</mn><mspace linebreak=\"newline\"/><mi>a</mi><mo>=</mo><mfrac><mn>7</mn><mn>2</mn></mfrac><mspace linebreak=\"newline\"/><mi>b</mi><mo>=</mo><mn>5</mn><mo>-</mo><mo>(</mo><mfrac><mn>7</mn><mn>2</mn></mfrac><msup><mo>)</mo><mn>2</mn></msup><mo>=</mo><mo>-</mo><mn>7.25</mn></math>', NULL, 'Compare coeffiecients by evaluating equivalent form', 'a=3.5, b=-7.25', NULL),
(40240215, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"normal\">c</mi><mo>=</mo><mn>2</mn><mo>&#xA0;</mo><mo>(</mo><mo>-</mo><mn>100</mn><mo>)</mo><mo>+</mo><mn>30</mn><mspace linebreak=\"newline\"/><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>=</mo><mo>-</mo><mn>200</mn><mo>+</mo><mn>30</mn><mspace linebreak=\"newline\"/><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>=</mo><mo>-</mo><mn>170</mn><mspace linebreak=\"newline\"/></math>', NULL, 'Substitute the value of d into the given formula', '-170', NULL),
(40240216, 'Multiply equation (2) by 3: 3x + 21y = 168. Next, subtract equation (1) from it: <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mspace linebreak=\"newline\"/><mn>3</mn><mi mathvariant=\"normal\">x</mi><mo>+</mo><mn>21</mn><mi mathvariant=\"normal\">y</mi><mo>-</mo><mn>3</mn><mi mathvariant=\"normal\">x</mi><mo>-</mo><mn>5</mn><mi mathvariant=\"normal\">y</mi><mo>=</mo><mn>168</mn><mo>-</mo><mn>24</mn><mspace linebreak=\"newline\"/><mn>16</mn><mi mathvariant=\"normal\">y</mi><mo>=</mo><mn>144</mn><mspace linebreak=\"newline\"/><mi mathvariant=\"normal\">y</mi><mo>=</mo><mn>9</mn><mspace linebreak=\"newline\"/><mi mathvariant=\"normal\">x</mi><mo>=</mo><mn>56</mn><mo>-</mo><mn>7</mn><mo>&#xd7;</mo><mn>9</mn><mo>=</mo><mo>-</mo><mn>7</mn><mspace linebreak=\"newline\"/></math>', NULL, 'Try to find a suitable multiple for the x in the second equation to cancel out with the first equation', 'x=-7, y=9', NULL),
(40240217, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn><mi>x</mi><mo>=</mo><mo>-</mo><mn>15</mn><mo>-</mo><mn>1</mn><mspace linebreak=\"newline\"/><mi>x</mi><mo>=</mo><mfrac><mrow><mo>-</mo><mn>16</mn></mrow><mn>2</mn></mfrac><mo>=</mo><mo>-</mo><mn>8</mn></math>', NULL, 'Make x the subject of formula', '-8', NULL),
(40240218, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>7</mn><mo>&#xd7;</mo><mi>t</mi><mo>+</mo><mn>11</mn><mo>(</mo><mi>t</mi><mo>+</mo><mn>5</mn><mo>)</mo><mo>=</mo><mn>2215</mn><mspace linebreak=\"newline\"/><mn>7</mn><mi>t</mi><mo>+</mo><mn>11</mn><mi>t</mi><mo>+</mo><mn>55</mn><mo>=</mo><mn>2215</mn><mspace linebreak=\"newline\"/><mn>18</mn><mi>t</mi><mo>=</mo><mn>2160</mn><mspace linebreak=\"newline\"/><mi>t</mi><mo>=</mo><mn>120</mn></math>', NULL, 'form an equation from the given statement.', '120', NULL),
(40240219, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mi>x</mi><mn>3</mn></mfrac><mo>&gt;</mo><mn>2</mn><mo>-</mo><mn>5</mn><mspace linebreak=\"newline\"/><mi>x</mi><mo>&gt;</mo><mn>3</mn><mo>(</mo><mo>-</mo><mn>3</mn><mo>)</mo><mspace linebreak=\"newline\"/><mi>x</mi><mo>&gt;</mo><mo>-</mo><mn>9</mn></math>', NULL, 'Make x the subject of formula', 'x > -9', NULL),
(40240220, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>8</mn><mi>x</mi><mo>-</mo><mn>3</mn><mi>x</mi><mo>+</mo><mn>12</mn><mo>=</mo><mn>0</mn><mspace linebreak=\"newline\"/><mn>2</mn><mi>x</mi><mo>(</mo><mi>x</mi><mo>-</mo><mn>4</mn><mo>)</mo><mo>-</mo><mn>3</mn><mo>(</mo><mi>x</mi><mo>-</mo><mn>4</mn><mo>)</mo><mo>=</mo><mn>0</mn><mspace linebreak=\"newline\"/><mo>(</mo><mn>2</mn><mi>x</mi><mo>-</mo><mn>3</mn><mo>)</mo><mo>(</mo><mi>x</mi><mo>-</mo><mn>4</mn><mo>)</mo><mo>=</mo><mn>0</mn><mspace linebreak=\"newline\"/><mi>x</mi><mo>=</mo><mn>1.5</mn><mo>,</mo><mo>&#xA0;</mo><mn>4</mn></math>', NULL, 'Middle term breaking can be useful here.', '1.5, 4', NULL),
(40240221, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mfrac><mrow><mo>-</mo><mn>12</mn><mo>&#xb1;</mo><msqrt><mrow><msup><mn>12</mn><mn>2</mn></msup><mo>-</mo><mn>4</mn><mo>(</mo><mn>1</mn><mo>)</mo><mo>(</mo><mn>3</mn><mo>)</mo></mrow></msqrt></mrow><mn>2</mn></mfrac><mo>=</mo><mo>-</mo><mn>0.3</mn><mo>,</mo><mo>&#xA0;</mo><mo>-</mo><mn>11.7</mn></math>', NULL, 'Use formula for quadratic equation', '-0.3, -11.7', NULL),
(40240222, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&#xd7;</mo><mo>(</mo><mi>y</mi><mo>+</mo><mn>3</mn><mo>)</mo><mo>=</mo><mn>0.5</mn><mo>&#xd7;</mo><mo>(</mo><mi>y</mi><mo>+</mo><mn>1</mn><mo>)</mo><mo>(</mo><mn>2</mn><mi>y</mi><mo>+</mo><mn>1</mn><mo>)</mo><mspace linebreak=\"newline\"/><mn>2</mn><mo>&#xd7;</mo><mo>(</mo><msup><mi>y</mi><mn>2</mn></msup><mo>+</mo><mn>3</mn><mi>y</mi><mo>)</mo><mo>=</mo><mn>2</mn><msup><mi>y</mi><mn>2</mn></msup><mo>+</mo><mn>3</mn><mi>y</mi><mo>+</mo><mn>1</mn><mspace linebreak=\"newline\"/><mn>2</mn><msup><mi>y</mi><mn>2</mn></msup><mo>+</mo><mn>6</mn><mi>y</mi><mo>=</mo><mn>2</mn><msup><mi>y</mi><mn>2</mn></msup><mo>+</mo><mn>3</mn><mi>y</mi><mo>+</mo><mn>1</mn><mspace linebreak=\"newline\"/><mn>3</mn><mi>y</mi><mo>=</mo><mn>1</mn><mspace linebreak=\"newline\"/><mi>y</mi><mo>=</mo><mfrac><mn>1</mn><mn>3</mn></mfrac></math>', NULL, 'Form a suitable equation from the given information.', '1/3', NULL),
(40240223, '15-2x + 3x-5 + 2x-3 + 2x+7 = 5x+14', NULL, 'Perimeter is the sum of sides', '5x+14', NULL),
(40240224, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mfrac><mrow><mn>7</mn><mo>&#xb1;</mo><msqrt><mrow><mo>(</mo><mo>-</mo><mn>7</mn><msup><mo>)</mo><mn>2</mn></msup><mo>-</mo><mn>4</mn><mo>(</mo><mn>3</mn><mo>)</mo><mo>(</mo><mo>-</mo><mn>12</mn><mo>)</mo></mrow></msqrt></mrow><mrow><mn>2</mn><mo>(</mo><mn>3</mn><mo>)</mo></mrow></mfrac><mo>=</mo><mo>-</mo><mn>1.14</mn><mo>,</mo><mo>&#xA0;</mo><mn>3.48</mn></math>', NULL, 'Use formula for quadratic equations', '-1.14, 3.48', NULL),
(40240225, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>9</mn><mi>x</mi><mo>-</mo><mn>2</mn><mi>y</mi><mo>=</mo><mn>12</mn><mo>&#xA0;</mo><mo>&#xd7;</mo><mn>2</mn><mspace linebreak=\"newline\"/><mn>18</mn><mi>x</mi><mo>-</mo><mn>4</mn><mi>y</mi><mo>=</mo><mn>24</mn><mo>&#xA0;</mo><mi>e</mi><mi>q</mi><mi>n</mi><mo>&#xA0;</mo><mn>1</mn><mspace linebreak=\"newline\"/><mn>3</mn><mi>x</mi><mo>+</mo><mn>4</mn><mi>y</mi><mo>=</mo><mo>-</mo><mn>10</mn><mo>&#xA0;</mo><mi>e</mi><mi>q</mi><mi>n</mi><mo>&#xA0;</mo><mn>2</mn><mspace linebreak=\"newline\"/><mi>e</mi><mi>q</mi><mi>n</mi><mo>&#xA0;</mo><mn>1</mn><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>e</mi><mi>q</mi><mi>n</mi><mo>&#xA0;</mo><mn>2</mn><mspace linebreak=\"newline\"/><mn>18</mn><mi>x</mi><mo>+</mo><mn>3</mn><mi>y</mi><mo>=</mo><mn>24</mn><mo>-</mo><mn>10</mn><mspace linebreak=\"newline\"/><mn>21</mn><mi>x</mi><mo>=</mo><mn>14</mn><mspace linebreak=\"newline\"/><mi>x</mi><mo>=</mo><mfrac><mn>2</mn><mn>3</mn></mfrac><mspace linebreak=\"newline\"/><mn>3</mn><mo>(</mo><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>)</mo><mo>+</mo><mn>4</mn><mi>y</mi><mo>=</mo><mo>-</mo><mn>10</mn><mspace linebreak=\"newline\"/><mi>y</mi><mo>=</mo><mo>-</mo><mn>3</mn></math>', NULL, 'Use elimination/substitution', 'x=2/3, y=-3', NULL),
(40240801, '0.85 + x = 1\r\nx = 1 - 0.85 = 0.15', NULL, 'The total possible probability is 1.', '0.15', NULL),
(40240802, '2/5 * 2/5 = 4/25', NULL, 'Consecutive probabilities may require multiplication.', '4/25', NULL),
(40240803, '9/35 in decimal is approximately 0.257, which is less than 0.26, thus Sammy wins', NULL, 'Convert both probabilities to decimal', 'Sammy', NULL),
(40240804, 'The number of rooms ending in zero is 30, thus probability is 30/300.', NULL, 'Count the number of room ending in zero', '30/300', NULL),
(40240805, '3/9 * 2/8 = 6/72', NULL, 'Without replacement means that during the second pick, there\'ll be less number of pencils available.', '6/72', NULL),
(40240806, '(1-0.2)*(1-0.2)*(1-0.2)=0.512', NULL, 'Find the probability that Xsara misses in one of the throws.', '', NULL),
(40240807, '0.4 + x = 1\r\nx = 1 - 0.4 = 0.6', NULL, 'The total possible probability is 1.', '0.6', NULL),
(40240808, '1/3 + x = 1\r\nx = 1 - 1/3 = 2/3', NULL, 'The total possible probability is 1.', '2/3', NULL),
(40240809, '8/19', NULL, '1 is not a prime number', '8/19', NULL),
(40240810, '(68 + 81 + 74 + 89 + x)/5 = 80\r\n312 + x = 400\r\nx = 88', NULL, 'Recall the formula for calculating mean', '88', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `ProfilePicture` longtext DEFAULT NULL,
  `Bio` longtext DEFAULT NULL,
  `Institution` varchar(30) DEFAULT NULL,
  `Level` varchar(30) DEFAULT NULL,
  `Status` tinyint(4) DEFAULT NULL,
  `Code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`UserID`, `Name`, `Email`, `Password`, `ProfilePicture`, `Bio`, `Institution`, `Level`, `Status`, `Code`) VALUES
(1, 'Mariam', 'ssmtjak@iut-dhaka.edu', '$2y$10$1EjqbpYez3iBCqnS/Ak/nOWu8BfNUiq2V905qTaY/HZP7C.A5OAD.', './uploads/Xiao 2.png', 'Hwhwiskjdias', 'IUT', 'O Level', 1, 0),
(12, 'Alice', 'someonerand98@gmail.com', '$2y$10$YJFtdN8BjC.aFJ8WtZ4Yb.DGnkpPSs4zKu8xNS9g.THqBXLLoocpO', './uploads/Ayato 1.png', '', '', 'O Level', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `SubjectCode` int(11) NOT NULL,
  `SubjectName` varchar(30) NOT NULL,
  `Level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`SubjectCode`, `SubjectName`, `Level`) VALUES
(4024, 'General Mathematics', 'O'),
(4037, 'Additional Mathematics', 'O');

-- --------------------------------------------------------

--
-- Table structure for table `testsessions`
--

CREATE TABLE `testsessions` (
  `SessionID` int(11) NOT NULL,
  `Score` varchar(11) NOT NULL,
  `DateTime` datetime NOT NULL,
  `UserID` int(11) NOT NULL,
  `TopicID` int(11) NOT NULL,
  `Percent` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testsessions`
--

INSERT INTO `testsessions` (`SessionID`, `Score`, `DateTime`, `UserID`, `TopicID`, `Percent`) VALUES
(24, '3/10', '2022-12-29 18:59:41', 12, 402401, 30),
(25, '10/10', '2022-12-29 20:35:57', 12, 402405, 100),
(26, '10/10', '2022-12-29 20:37:24', 12, 402405, 100),
(27, '10/10', '2022-12-29 20:40:58', 12, 402405, 100),
(28, '2/10', '2022-12-29 21:11:28', 12, 402401, 20),
(29, '0/10', '2022-12-29 21:15:40', 12, 402401, 0),
(30, '0/10', '2022-12-29 21:17:24', 12, 402401, 0),
(31, '2/10', '2022-12-29 22:28:24', 1, 402401, 20),
(32, '4/5', '2022-12-29 23:38:12', 1, 402401, 80),
(33, '1/10', '2022-12-29 23:43:43', 1, 402401, 10),
(34, '5/10', '2022-12-29 23:45:36', 1, 402402, 50),
(35, '10/10', '2022-12-30 01:30:30', 1, 402408, 100),
(36, '0/25', '2022-12-30 02:20:06', 1, 402402, 0),
(37, '3/10', '2022-12-30 02:29:31', 1, 402402, 30),
(38, '3/10', '2022-12-30 02:29:46', 1, 402402, 30),
(39, '2/5', '2022-12-30 02:30:45', 1, 402401, 40),
(40, '0/10', '2022-12-30 02:42:03', 1, 402401, 0),
(41, '0/10', '2022-12-30 02:42:10', 1, 402401, 0),
(42, '0/10', '2022-12-30 02:42:28', 1, 402401, 0),
(43, '0/5', '2022-12-30 02:51:36', 1, 402401, 0),
(44, '1/5', '2022-12-30 02:59:25', 1, 402401, 20),
(45, '1/5', '2022-12-30 03:01:29', 1, 402401, 20),
(46, '2/10', '2022-12-30 12:32:26', 1, 402408, 20),
(47, '0/10', '2022-12-30 12:34:11', 1, 402401, 0),
(48, '0/5', '2022-12-30 12:34:39', 1, 402408, 0),
(49, '3/10', '2022-12-30 13:20:37', 1, 402401, 30),
(50, '0/10', '2022-12-30 14:44:14', 1, 402401, 0),
(51, '0/10', '2022-12-30 14:44:41', 1, 402401, 0),
(52, '0/10', '2022-12-30 14:45:01', 1, 402401, 0);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `TopicID` int(11) NOT NULL,
  `TopicName` varchar(30) NOT NULL,
  `SubjectCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`TopicID`, `TopicName`, `SubjectCode`) VALUES
(402401, 'Numbers', 4024),
(402402, 'Algebra', 4024),
(402403, 'Geometry', 4024),
(402404, 'Mensuration', 4024),
(402405, 'Coordinate Geometry', 4024),
(402406, 'Trigonometry', 4024),
(402407, 'Matrices and Transformations', 4024),
(402408, 'Probability and Statistics', 4024),
(403701, 'Quadratics', 4037),
(403702, 'Functions', 4037);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD KEY `QuestionID` (`QuestionID`);

--
-- Indexes for table `motivationalquotes`
--
ALTER TABLE `motivationalquotes`
  ADD PRIMARY KEY (`QuoteID`);

--
-- Indexes for table `pfp`
--
ALTER TABLE `pfp`
  ADD PRIMARY KEY (`pfp_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QuestionID`),
  ADD KEY `TopicID` (`TopicID`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD KEY `QuestionID` (`QuestionID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`SubjectCode`);

--
-- Indexes for table `testsessions`
--
ALTER TABLE `testsessions`
  ADD PRIMARY KEY (`SessionID`),
  ADD KEY `TopicID` (`TopicID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`TopicID`),
  ADD KEY `SubjectCode` (`SubjectCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pfp`
--
ALTER TABLE `pfp`
  MODIFY `pfp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testsessions`
--
ALTER TABLE `testsessions`
  MODIFY `SessionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `choices`
--
ALTER TABLE `choices`
  ADD CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`QuestionID`) REFERENCES `questions` (`QuestionID`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`TopicID`) REFERENCES `topics` (`TopicID`);

--
-- Constraints for table `solutions`
--
ALTER TABLE `solutions`
  ADD CONSTRAINT `solutions_ibfk_1` FOREIGN KEY (`QuestionID`) REFERENCES `questions` (`QuestionID`);

--
-- Constraints for table `testsessions`
--
ALTER TABLE `testsessions`
  ADD CONSTRAINT `testsessions_ibfk_1` FOREIGN KEY (`TopicID`) REFERENCES `topics` (`TopicID`),
  ADD CONSTRAINT `testsessions_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `students` (`UserID`);

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`SubjectCode`) REFERENCES `subjects` (`SubjectCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
