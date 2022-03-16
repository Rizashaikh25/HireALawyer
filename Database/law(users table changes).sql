-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 10:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `law`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `security_question` varchar(50) NOT NULL,
  `security_answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `contact`, `email`, `admin_username`, `password`, `security_question`, `security_answer`) VALUES
(1, 'Riza', '8796986035', 'rizashaikh25@gmail.com', 'Riza25', '25d55ad283aa400af464c76d713c07ad', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `advocates_details`
--

CREATE TABLE `advocates_details` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `area_of_practice` varchar(55) NOT NULL,
  `experience` varchar(55) NOT NULL,
  `aadhar_card` varchar(55) NOT NULL,
  `pan_card` varchar(55) NOT NULL,
  `bar_council_license` varchar(55) NOT NULL,
  `bank_details` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advocates_details`
--

INSERT INTO `advocates_details` (`id`, `name`, `email`, `phone_no`, `address`, `area_of_practice`, `experience`, `aadhar_card`, `pan_card`, `bar_council_license`, `bank_details`) VALUES
(1, 'ss', 'aa@gmail.com', '1234567890', 'ajhasdjhj                                                                            ', 'jdsjad', '12 years', '1234567899', '0987654321', 'dkljsak', 'sdjas');

-- --------------------------------------------------------

--
-- Table structure for table `basic_details`
--

CREATE TABLE `basic_details` (
  `id` int(11) NOT NULL,
  `Numbers1` varchar(255) NOT NULL,
  `number2` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `About_Us` varchar(255) NOT NULL,
  `Mission` varchar(1000) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `insta` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `youtube` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_details`
--

INSERT INTO `basic_details` (`id`, `Numbers1`, `number2`, `email`, `address`, `About_Us`, `Mission`, `linkedin`, `insta`, `facebook`, `twitter`, `youtube`) VALUES
(1, '70 66 66 88 00', '87 96 98 60 35', 'shaikhriza25@gmail.com', 'Kondhwa                                                                                                                                                                                                                                                        ', 'An Hire A Lawyer! An interactive online platform that makes it faster and easier to find and hire Top Rated Lawyers in India, because you deserve access to first-rate, professional legal advice from Top Rated Lawyers out there.                            ', 'Hire A Lawyer! is one of the pioneers of online legal Services. Launched in the year 2022, we provide exemplary services initially to the Indian market. Hire A Lawyer focuses on providing legal information and credible lawyers and law firm references to the users in any part of India. All information available on this portal is in easy to understand language focused on laymen rather than lawyers. We also make our utmost efforts to ensure all lawyers and law firms are duly screened before they are listed with us. We aim to provide all legal services at an ease to the users. fhdv                                                                                                                                                                                                                                                                                                                                                                                                                                ', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `subject` varchar(125) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created`) VALUES
(1, 'Efron Riza', 'rizashaikh25@gmail.com', 'TESTING', 'heyya ', '2021-04-04 10:01:01'),
(7, 'Riza Shaikh', 'shaikhriza25@gmail.com', 'Testing', 'hey', '2021-06-27 09:14:29'),
(8, 'djh', 'hhh@gmail.com', 'HHUUGG', 'Yo kjk', '2021-11-03 08:19:53'),
(9, 'Hussain ', 'hussainsp15@gmail.com', 'h', 'ndjh', '2022-01-01 13:47:11'),
(10, 'Hussain Patrawala', 'hussainsp15@gmail.com', 'hh', 'hh', '2022-01-01 14:08:07'),
(11, 'hh', 'hussainsp15@gmail.com', 'h', 'h\r\n\r\n', '2022-01-01 14:08:19'),
(12, 'hh', 'hussainsp15@gmail.com', 'hh', 'hh', '2022-01-01 17:17:43'),
(13, 'hh', 'hussainsp15@gmail.com', 'hh', 'hh', '2022-01-01 17:18:36'),
(14, 'h', 'hussainsp15@gmail.com', 'h', 'h', '2022-01-01 17:23:32'),
(15, 'h', 'hussainsp15@gmail.com', 'j', 'j', '2022-01-01 17:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `id` int(11) NOT NULL,
  `lawyer_name` varchar(255) NOT NULL,
  `lawyer_number` varchar(255) NOT NULL,
  `LawyerGender` varchar(255) NOT NULL,
  `lawyer_email` varchar(255) NOT NULL,
  `LawyerAddress` varchar(255) NOT NULL,
  `LawyerCity` varchar(255) NOT NULL,
  `LawyerState` varchar(255) NOT NULL,
  `LawyerZip` varchar(255) NOT NULL,
  `LawyerLicenseNumber` varchar(255) NOT NULL,
  `BarCouncilDate` date NOT NULL,
  `LawyerAboutMe` varchar(255) NOT NULL,
  `LawyerAwards` varchar(255) NOT NULL,
  `LawyerImage` blob NOT NULL,
  `practice_courts` varchar(255) NOT NULL,
  `lawyer_password` varchar(255) NOT NULL,
  `lawyer_cpassword` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ltoken` varchar(255) NOT NULL,
  `acc_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `lawyer_name`, `lawyer_number`, `LawyerGender`, `lawyer_email`, `LawyerAddress`, `LawyerCity`, `LawyerState`, `LawyerZip`, `LawyerLicenseNumber`, `BarCouncilDate`, `LawyerAboutMe`, `LawyerAwards`, `LawyerImage`, `practice_courts`, `lawyer_password`, `lawyer_cpassword`, `status`, `ltoken`, `acc_status`) VALUES
(13, 'hh', '1234567890', '', 'hussainsp15@gmail.com', '', '', '', '', '', '0000-00-00', '', '', '', '', '$2y$10$etJiK4V9ptbVakBKh0doD.Fc/IrbMVWUleHyj939DKU6M.YC/L796', '$2y$10$kO7PrNlRsmusxxyP3K1Vg.lATKEo8JSHxzk7XXwpWijddoSU3.sCq', 'Pending', '4adc4318c909849db3c78c01196403', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `practice_area`
--

CREATE TABLE `practice_area` (
  `id` int(11) NOT NULL,
  `service_area` varchar(100) NOT NULL,
  `service_area_description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practice_area`
--

INSERT INTO `practice_area` (`id`, `service_area`, `service_area_description`) VALUES
(1, 'Civil', 'The civil law of a country or state is the body of rules, relevant judicial precedents, regulations, and procedures, which help the government or the legal system to resolve diverse non-criminal disputes between individuals and organizations, over a variety of ordinary private matters and issues\r\n<p>Civil law comprises of substantive and procedural law, Civil Court Cases, the Judicial & Quasi-Judicial Courts & Fora, the Petition and Documents comprising of Legal Notice, Police Complaint, Court Complaint, Suit, Plaint, Petition, Reply, Written Statement, Rejoinder, Replication, Affidavit, Application, Settlement, Agreement, Memorandum of Settlement (MOU), Family Settlement, Will, Gift Deed, Partition Deed, Adoption Document, Custody Settlement, etc. </p>\r\n<p>\r\nThe stages of the proceeding before the Court of law are well set in the Code of Civil Procedure, 1908 for the following tasks: Filing Of Documents, Framing Of Issues, filing List Of Witness, examination and cross examination of plaintiff witnesses [PE], examination and cross examination of Defendant witnesses [DE], Final Hearing, etc, passing of final order and judgment.\r\n</p>\r\n<p>\r\nEither of the parties- Plaintiff  or Defendant could resort to the appellate avenues- Appeal, Reference, Review & Revision, all well laid down under the Code of Civil Procedure, 1908. There is a well set procedure for filing of Appeal, Review and Revision, etc., like what should accompany an Appeal, Reference, Review & Revision, and in what time limit they got to be filed.  \r\n</p>\r\n<p>\r\nThe law in regard to the Execution of the Court Orders/ Judgments/ Decree is distinctly laid down in the Code of Civil Procedure, 1908. </p>'),
(2, 'Family', 'Family law is a legal practice area that focuses on issues involving family relationships, such as adoption, divorce, and child custody, among others\r\n<p>\r\nFamily Laws encompass the broad set of rules that are in practice regarding family matters, such as marriage, divorce, inheritance etc. There are some legally enforceable rights and duties that arise when one gives legal validation to the status of interpersonal relationships. </p>\r\n<p>States have the right to determine \"reasonable formal requirements\" for marriage, including age and legal capacity, as well as the rules and procedures for divorce and other family law matters. Prior to the Supreme Court ruling legalizing same-sex marriage, some states restricted marriage (and divorce) to opposite-sex couples only. </p>\r\n\r\n<p>\r\nFamily law often intersects with a wide range of other legal practice areas. For example, instances of domestic violence and child abuse typically involve criminal investigations (and may result in arrests and charges), while family courts are tasked with determining how to best protect the victims and ensure a relatively safe environment for those involved. Other related legal practice areas include the following:\r\n\r\nMediation and Collaborative Law\r\nEstate Planning\r\nImmigration and Naturalization Law\r\n</p>'),
(3, 'Buisness', 'Running your own business demands a lot of perseverance and determination. This often leaves little time to deal with the legal issues that constantly plague small businesses. Having a business law attorney on your side can make a huge difference in the day-to-day operations of your business, helping you deal with a wide range of issues related to taxes, finance, business formations, acquisitions, mergers, employment/labor laws, contract negotiations, and litigation.\r\n<p>There are many different ways that you can structure your business. If you are just starting out and aren\'t sure what structure would be best for your circumstances, or have been in business for awhile and need to restructure your business, an experienced business law attorney can help. Major types of business structures in the United States include: </p>\r\n<ul>\r\n<li>Sole proprietorship </li>\r\n<li>Partnership</li>\r\n<li>Corporation</li>\r\n<li>Limited Liability Company: </li>\r\n</ul>'),
(4, 'Education', 'The Education law is a branch of Civil Law, and deals with the laws, regulations, policies, and instructions which govern and regulate Federal and State Education, and also the education provided by the private institutions, from the pre-nursery school level to the higher education in universities.\r\n<p>\r\nEducating children is one of society\'s most important functions. As a result, there is a robust area of law dedicated to education. Education law is particularly fascinating because it constantly seeks to strike balances: the balance between ensuring each child receives a standard education, while maintaining a parent\'s right to decide what her child should learn; the balance between maintaining student safety, while respecting individual constitutional rights; the balance between accommodating students with disabilities and strict budgetary concerns; and the balance between giving teachers job security and intellectual freedom, while ensuring that they competently educate their students. This section has articles with in-depth information on education law for parents, teachers, student, and school administrators. </p>\r\n<p>Although it is not recognized as a federal constitutional right, given the significance of education there is a federal constitutional right to have the laws providing education treat all equally.This was the basis for the decision to desegregate schools in the Brown decision, and also the basis for a number of statutes intended to provide equal educational opportunities for all children irrespective of race, religion, sex and disability. There also is a strong federal interest in providing states with assistance in meeting the states own obligations to provide public education </p>'),
(5, 'Criminal', 'What we call criminal law broadly refers to federal and state laws that make certain behavior illegal and punishable by imprisonment and/or fines. Our legal system is largely comprised of two different types of cases: civil and criminal. Civil cases are disputes between people regarding the legal duties and responsibilities they owe each other. Criminal cases, meanwhile, are charges pursued by prosecutors for violations of criminal statutes.\r\n<p>Criminal Codes\r\nEach state decides what conduct to designate a crime. Thus, each state has its own criminal code. Congress has also chosen to punish certain conduct, codifying federal criminal law in Title 18 of the U.S. Code. Criminal laws vary significantly among the states and the federal government. While some statutes resemble the common law criminal code, others, like the New York Penal Law, closely mimic the Model Penal Code (MPC). </p>\r\n<p> Crimes are classified by their severity in two main categories: felonies and misdemeanors. A third category, infractions, often involves the criminal process but is a fine-only offense. </p>'),
(6, 'Consumer', ' Consumer law provides protection to the consumer against issues like fraud or mis-selling when they purchase a product or service. Consumer markets have to abide by the rules and regulations of this directive.\r\n<p>Consumer law provides protection to the consumer against issues like fraud or mis-selling when they purchase a product or service. Consumer markets have to abide by the rules and regulations of this directive. </p>\r\n<p>This practice area also protects organisations regarding issues like copyright or intellectual property rights theft </p>\r\nThe Consumer Protection Act, 1986 (CPA) is an Act that provides for effective protection of interests of consumers and as such makes provision for the establishment of consumer councils and other authorities that help in settlement of consumer disputes and matters connected therewith.\r\n\r\nThe CPA seeks to protect the interests of individual consumers by prescribing specific remedies to make good the loss or damage caused to consumers as a result of unfair trade practices.</p>'),
(7, 'Constitutional ', 'Constitutional law, the body of rules, doctrines, and practices that govern the operation of political communities. In modern times the most important political community has been the state.\r\n<p>Constitutional law refers to rights carved out in the federal and state constitutions. The majority of this body of law has developed from state and federal supreme court rulings, which interpret their respective constitutions and ensure that the laws passed by the legislature do not violate constitutional limits </p>\r\n<p>\r\nMost constitutional legal issues involve the Bill of Rights, which contains the first 10 amendments to the U.S. Constitution. These amendments contain such rights as the freedom of speech, the right to a fair trial, and the right to be free from certain types of discrimination. </p>\r\n<p>Constitutional law also involves the rights and powers of the branches of government. Both the federal and state constitutions outline three branches of government and give distinct powers and responsibilities to each one. Constitutional lawyers also help resolve disputes among the branches. </P'),
(8, 'Cyber', 'Cyber law, also known as Internet Law or Cyber Law, is the part of the overall legal system thet is related to legal informatics and supervises the digital circulation of information, e-commerce, software and information security. <p>Cyber Law or IT Law is referred to as the Law of the Internet. The Cyber law definition says it is a legal system designed to deal with the Internet, computing, Cyberspace, and related legal issues. The apt introduction to Cyber Law is: It is paper laws in the paperless world.</p> <p>Cyber law encompasses aspects of intellectual property, contract, jurisdiction, data protection laws, privacy, and freedom of expression. It directs the digital circulation of software, information, online security, and e-commerce. The area of Cyber Law provides legal recognition to e-documents. It also creates a structure for e-commerce transactions and e-filling. Hence, to simply understand the Cyber laws meaning, it is a legal infrastructure to deal with Cybercrimes. An increase in the usage of E-commerce has made it pivotal that there are proper regulatory practices set up to ensure no malpractices take place </p>'),
(9, 'Labour', 'Labour law (also known as labor law or employment law) mediates the relationship between workers, employing entities, trade unions and the government. ... Individual labour law concerns employees\' rights at work also through the contract for work.\r\n<p>The major challenge in labour reforms is to facilitate employment growth while protecting workers rights.  Key debates relate to the coverage of small firms, deciding thresholds for prior permission for retrenchment, strengthening labour enforcement, allowing flexible forms of labour, and promoting collective bargaining.   </p>\r\n<p><b>Context:</b> Most labour laws apply to establishments over a certain size (typically 10 or over).  Low numeric thresholds may create adverse incentives for establishments sizes to remain small, in order to avoid complying with labour regulation.  Further, these laws only cover the organised sector (around 7% of the workforce).9  </p>');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_area` varchar(255) NOT NULL,
  `service_area_description` varchar(255) NOT NULL,
  `service_area_category` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_details` varchar(255) NOT NULL,
  `documents` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_req`
--

CREATE TABLE `service_req` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `photo` blob NOT NULL,
  `document_1` blob NOT NULL,
  `document_2` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_req`
--

INSERT INTO `service_req` (`id`, `name`, `email`, `service_name`, `message`, `photo`, `document_1`, `document_2`) VALUES
(12, 'Riza Sameer', 'shaikhriza25@gmail.com', 'agreement', 'Test', 0x64313837363232363462373665386538376639343037643931633338306532642e6a7067, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `created`) VALUES
(24, 'hussainsp15@gmail.com', '2021-10-25 18:28:28'),
(25, 'hi@gmail.com', '2021-11-03 08:19:23'),
(26, 'hussainsp15@gmail.com', '2021-11-10 07:00:28');

-- --------------------------------------------------------

--
-- Stand-in structure for view `test`
-- (See below for the actual view)
--
CREATE TABLE `test` (
`user_id` int(11)
,`user_fname` varchar(255)
,`user_lname` varchar(255)
,`contact_no` varchar(255)
,`email` varchar(255)
,`username` varchar(255)
,`password` varchar(255)
,`cpassword` varchar(255)
,`token` varchar(255)
,`status` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `UserGender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `UserAddress` varchar(255) NOT NULL,
  `UserCity` varchar(255) NOT NULL,
  `UserState` varchar(255) NOT NULL,
  `UserZip` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `contact_no`, `UserGender`, `email`, `UserAddress`, `UserCity`, `UserState`, `UserZip`, `username`, `password`, `cpassword`, `token`, `status`) VALUES
(21, 'Arman', 'Malik', '5055245567', 'Male', 'hussainsp15@gmail.com', 'abc', 'PUNE', 'MAHARASHTRA', '411048', 'ProjextGod:)', '$2y$10$MibOAMivfNPjLhurA.yr2OZpZmJpIXsPFeabb4fhJBd6QPYDApY7y', '$2y$10$JtXtrlF5RNS8pAlnYPnu7u4xavegP.HeHkq7y.78DJBg6EiSS3ycC', 'cbbf683d208041519830139acb9136', 'active');

-- --------------------------------------------------------

--
-- Structure for view `test`
--
DROP TABLE IF EXISTS `test`;

CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `test`  AS SELECT `users`.`user_id` AS `user_id`, `users`.`user_fname` AS `user_fname`, `users`.`user_lname` AS `user_lname`, `users`.`contact_no` AS `contact_no`, `users`.`email` AS `email`, `users`.`username` AS `username`, `users`.`password` AS `password`, `users`.`cpassword` AS `cpassword`, `users`.`token` AS `token`, `users`.`status` AS `status` FROM `users` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advocates_details`
--
ALTER TABLE `advocates_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_details`
--
ALTER TABLE `basic_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practice_area`
--
ALTER TABLE `practice_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_req`
--
ALTER TABLE `service_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `advocates_details`
--
ALTER TABLE `advocates_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basic_details`
--
ALTER TABLE `basic_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `practice_area`
--
ALTER TABLE `practice_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_req`
--
ALTER TABLE `service_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
