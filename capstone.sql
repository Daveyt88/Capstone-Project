-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2015 at 09:30 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a7301978_team1`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `addressID` int(11) NOT NULL AUTO_INCREMENT,
  `UniversityID` int(11) DEFAULT NULL,
  `line1` varchar(60) NOT NULL,
  `line2` varchar(60) DEFAULT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  PRIMARY KEY (`addressID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` VALUES(84, 1234567, '125 Wellington Road', '', 'Mineola', 'NY', '11501');
INSERT INTO `addresses` VALUES(113, 1883251, '4034 Hartway Street', '', 'Bridgewater', 'SD', '57319');
INSERT INTO `addresses` VALUES(150, 8547265, '800 Florida AVE NE', '', 'Washington', 'DC', '20002');
INSERT INTO `addresses` VALUES(149, 6523489, '8865 SW Culver HWY', '', 'Culver', 'OR', '97734');
INSERT INTO `addresses` VALUES(148, 3475468, '100 Jadewood Dr', '', 'Chicago', 'IN', '60601');
INSERT INTO `addresses` VALUES(147, 2534689, '800 Florida AVE NE', '', 'Washington', 'DC', '20002');
INSERT INTO `addresses` VALUES(146, 157443, '1852 Lowes Alley', '', 'Coshocton', 'OH', '43812');
INSERT INTO `addresses` VALUES(145, 2582475, '4183 Raintree Boulevard', '', 'Richmond', 'IN', '47374');
INSERT INTO `addresses` VALUES(144, 154766, '800 Florida AVE NE', '', 'Washington', 'DC', '20002');
INSERT INTO `addresses` VALUES(143, 1105522, '4389 Highland Dr', '', 'Appleton', 'WI', '54911');
INSERT INTO `addresses` VALUES(142, 154896, '800 Florida AVE NE', '', 'Washington', 'DC', '20002');
INSERT INTO `addresses` VALUES(141, 118279, '4069 Rainy Day Dr', '', 'Charlestown', 'MA', '02129');
INSERT INTO `addresses` VALUES(151, 1859521, '1253 Short St', '', 'Georgetown', 'TX', '78626');
INSERT INTO `addresses` VALUES(152, 5428796, '800 Florida AVE NE', '', 'Washington', 'DC', '20002');
INSERT INTO `addresses` VALUES(153, 5426788, '800 Florida AVE NE', '', 'Washington', 'DC', '20002');
INSERT INTO `addresses` VALUES(154, 2621654, '253 Metz Ln', '', 'Gloucester City', 'NJ', '08030');
INSERT INTO `addresses` VALUES(155, 5623574, '3403 Emily Dr', '', 'Columbia', 'SC', '29201');
INSERT INTO `addresses` VALUES(156, 8752469, '8865 SW Culver HWY', '', 'Culver', 'OR', '97734');
INSERT INTO `addresses` VALUES(157, 2546789, '800 Florida AVE NE', '', 'Washington', 'DC', '20002');
INSERT INTO `addresses` VALUES(158, 4578215, '800 Florida AVE NE', '', 'Washington', 'DC', '20002');
INSERT INTO `addresses` VALUES(159, 3456489, '4745 Berkley St', '', 'Philadelphia', 'PA', '19108');
INSERT INTO `addresses` VALUES(160, 5546548, '2185 Bedford St', '', 'Huntington', 'CT', '06484');
INSERT INTO `addresses` VALUES(161, 8759786, '800 Florida AVE NE', '', 'Washington', 'DC', '20002');
INSERT INTO `addresses` VALUES(162, 4265749, '4766 Rinehart Rd', '', 'Sunrise', 'FL', '33323');
INSERT INTO `addresses` VALUES(163, 7412548, '8865 SW Culver HWY', '', 'Culver', 'OR', '97734');
INSERT INTO `addresses` VALUES(164, 3456951, '1149 Hoffman Avenue', '', 'New York', 'NY', '10016');
INSERT INTO `addresses` VALUES(165, 1831381, '570 Fairmont Avenue', '', 'Rushville', 'MN', '64484');
INSERT INTO `addresses` VALUES(166, 4684684, '12th street NW', '', 'Portland', 'OR', '95487');
INSERT INTO `addresses` VALUES(167, 2214652, '1052 Wiseman St', '', 'Knoxville', 'TN', '37902');
INSERT INTO `addresses` VALUES(168, 2149658, '160 Memory Ln', '', 'Hickory Hills', 'IL', '60457');
INSERT INTO `addresses` VALUES(169, 5555555, '9th Street SW', '', 'Portland', 'OR', '95487');
INSERT INTO `addresses` VALUES(170, 2454895, '3387 Lynn Ogden Ln', '', 'Beaumont', 'TX', '77708');
INSERT INTO `addresses` VALUES(171, 2355478, '9th Street SW', '', 'Chicago', 'IL', '77777');
INSERT INTO `addresses` VALUES(172, 4535496, '291 Armbrester Dr', '', 'Los Angeles', 'CA', '90017');
INSERT INTO `addresses` VALUES(173, 3564878, '11th Street NW', '', 'Houston', 'TX', '54278');
INSERT INTO `addresses` VALUES(174, 3246954, '1080 Pooh Bear Ln', '', 'Laurens', 'SC', '29360');
INSERT INTO `addresses` VALUES(175, 2416546, '1225 Pinewood Dr', '', 'Arlington Heights', 'IL', '60004');
INSERT INTO `addresses` VALUES(176, 524879, '666 street sw', '', 'Portland', 'OR', '95487');
INSERT INTO `addresses` VALUES(177, 9999999, '9th Street SW', '', 'Portland', 'OR', '95487');
INSERT INTO `addresses` VALUES(178, 2465675, '2155 Ash St', '', 'Farmers Branch', 'TX', '75244');
INSERT INTO `addresses` VALUES(179, 2465644, '2447 Grand Ave', '', 'Orlando', 'FL', '32801');
INSERT INTO `addresses` VALUES(180, 8888888, '77th street nw', '', 'seattle', 'WA', '54278');
INSERT INTO `addresses` VALUES(181, 1554795, '199 Fort St', '', 'Seattle', 'WA', '98101');
INSERT INTO `addresses` VALUES(182, 2222222, '8th street SW', '', 'tacoma', 'WA', '44444');
INSERT INTO `addresses` VALUES(183, 4444444, '2nd street nw', '', 'Portland', 'OR', '95487');
INSERT INTO `addresses` VALUES(184, 1111111, '4th Street AVE NE', '', 'Washington', 'DC', '20002');
INSERT INTO `addresses` VALUES(185, 5241111, '7th Street NW', '', 'Washington', 'DC', '20002');
INSERT INTO `addresses` VALUES(186, 156596, '800 Florida Ave', '', 'Washington', 'DC', '20002');

-- --------------------------------------------------------

--
-- Table structure for table `mentees`
--

CREATE TABLE `mentees` (
  `UniversityID` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `Role` varchar(10) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `Skills` varchar(255) DEFAULT NULL,
  `activation_code` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`UniversityID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentees`
--

INSERT INTO `mentees` VALUES(5623574, 'Kim', 'Crain', 'Mentee', '803-931-2176', 'KimRCrain@armyspy.com', 'Knoreek1933', 'f8f5b044affeb9381bb93bc8a195422e', NULL, NULL);
INSERT INTO `mentees` VALUES(1234567, 'David', 'Torrance', 'Mentee', '123-123-4845', 'daveyt88@gmail.com', 'test', '098f6bcd4621d373cade4e832627b4f6', NULL, '6469215510124881ef0');
INSERT INTO `mentees` VALUES(5428796, 'Nick', 'Grimm', 'Mentee', '541-856-8763', 'Grimm@dayrep.com', 'The Grimm', '86985e105f79b95d6bc918fb45ec7727', NULL, NULL);
INSERT INTO `mentees` VALUES(2621654, 'Jason', 'Graves', 'Mentee', '856-933-2812', 'JasonSGraves@jourrapide.com', 'Saingstood', '5231d112c5d0db93b200e71809179d24', NULL, NULL);
INSERT INTO `mentees` VALUES(1859521, 'Louis', 'Chappell', 'Mentee', '512-948-7314', 'LouisJChappell@rhyta.com', 'Oripsensfuld', '2dfbb9fcd6ce4705596c81a6528e2cf2', NULL, NULL);
INSERT INTO `mentees` VALUES(8547265, 'Monroe', 'Calvert', 'Mentee', '541-752-8452', 'bs@hotmail.com', 'Blutbad', 'e3d704f3542b44a621ebed70dc0efe13', NULL, NULL);
INSERT INTO `mentees` VALUES(6523489, 'Juilette', 'Silverton', 'Mentee', '541-856-7852', 'js@rhyta.com', 'Hexenbiest', '86985e105f79b95d6bc918fb45ec7727', NULL, NULL);
INSERT INTO `mentees` VALUES(3475468, 'Leonardo', 'Martin', 'Mentee', '219-979-8950', 'LeonardoSMartin@armyspy.com', 'Goor1957', '6ebc0ed2e32ae0b765d7b2a4aa67cfda', NULL, NULL);
INSERT INTO `mentees` VALUES(2534689, 'Nick', 'Grimm', 'Mentee', '235-849-7852', 'Grimm@hotmail.com', 'Grimm', '8ad8757baa8564dc136c1e07507f4a98', NULL, NULL);
INSERT INTO `mentees` VALUES(157443, 'Larry', 'Gates', 'Mentee', '740-295-2580', 'LarryLGates@dayrep.com', 'Pereadesen', 'ab1acb9d0deab2c29cb354d2655b287e', NULL, NULL);
INSERT INTO `mentees` VALUES(118279, 'Francisco', 'Ruiz', 'Mentee', '617-902-1263', 'FranciscoNRuiz@jourrapide.com', 'Marted', '6ac250ea3d3801701dab03c2a29498bb', NULL, NULL);
INSERT INTO `mentees` VALUES(1105522, 'Bill', 'Hughes', 'Mentee', '920-738-7729', 'BillEHughes@teleworm.us', 'Neper1975', 'a6e52389dbab0f81a7c8e462ae94a2fe', NULL, NULL);
INSERT INTO `mentees` VALUES(2582475, 'Clyde', 'Taylor', 'Mentee', '765-265-5179', 'ClydeJTaylor@armyspy.com', 'Apst1956', '7c6b995f82a8edd6a067e81c05c0693a', NULL, NULL);
INSERT INTO `mentees` VALUES(3456489, 'John', 'Faulkner', 'Mentee', '484-843-6252', 'JohnLFaulkner@jourrapide.com', 'Hiscre', '33b2ccf76ab84d4ab877d13ec440edae', NULL, NULL);
INSERT INTO `mentees` VALUES(5546548, 'Alice', 'Robinson', 'Mentee', '203-929-9967', 'AliceTRobinson@teleworm.us', 'Foussongin', '5fe2b042f4d60a12c02c5ffae2ac06bf', NULL, NULL);
INSERT INTO `mentees` VALUES(4265749, 'Franklin', 'Kuhn', 'Mentee', '786-486-2911', 'FranklinJKuhn@jourrapide.com', 'Woreirsis', 'cfe4664ca4b9612ac51305ac12b989df', NULL, NULL);
INSERT INTO `mentees` VALUES(3456951, 'Dale', 'Flanagan', 'Mentee', '917-898-3851', 'DaleTFlanagan@jourrapide.com', 'Offlus1968', '473a79c61436d96a66f8b88714f97e4c', NULL, NULL);
INSERT INTO `mentees` VALUES(2214652, 'Christopher', 'Moulton', 'Mentee', '865-292-8207', 'ChristopherCMoulton@rhyta.com', 'Fecou1993', 'b01f82cac861119b37fd8794a8d7ce32', NULL, NULL);
INSERT INTO `mentees` VALUES(2149658, 'John', 'Hager', 'Mentee', '815-922-1184', 'JohnJHager@teleworm.us', 'Yousyllook', 'ee63c359e37c23540ac4c274c6cc2e3a', NULL, NULL);
INSERT INTO `mentees` VALUES(2454895, 'Diana', 'Moore', 'Mentee', '409-892-3136', 'DianaBMoore@jourrapide.com', 'Witepheres', '08ada7947f1123552d82865a47f7d48e', NULL, NULL);
INSERT INTO `mentees` VALUES(4535496, 'Bruce', 'Stover', 'Mentee', '310-493-2978', 'BruceDStover@jourrapide.com', 'Moull1972', '5a407cc11e496207feaba777081b4c00', NULL, NULL);
INSERT INTO `mentees` VALUES(3246954, 'Rose', 'Glass', 'Mentee', '864-682-9599', 'RoseTGlass@armyspy.com', 'Whatiall', '5d6d5000102d648c757844098ae31c0f', NULL, NULL);
INSERT INTO `mentees` VALUES(2416546, 'Wm', 'Foust', 'Mentee', '847-858-7213', 'WmRFoust@rhyta.com', 'Ounge1932', 'c23d7635a08e77b1ffb2dd004e786dd8', NULL, NULL);
INSERT INTO `mentees` VALUES(2465675, 'Toni', 'Latham', 'Mentee', '972-877-6044', 'ToniJLatham@teleworm.us', 'Thicamewyn', 'f0a575fe1fa48521b264f7e4232e1140', NULL, NULL);
INSERT INTO `mentees` VALUES(2465644, 'Rachele', 'Amaral', 'Mentee', '407-649-6407', 'RacheleRAmaral@rhyta.com', 'Twoulted', 'b635ea3a3f4798385db023e30a87bbc8', NULL, NULL);
INSERT INTO `mentees` VALUES(1554795, 'Josie', 'Jackson', 'Mentee', '253-246-8756', 'JosieJJackson@armyspy.com', 'Fornoth1961', 'c54b011bb68b350302ca6800530b5665', NULL, NULL);
INSERT INTO `mentees` VALUES(156596, 'Shuxu', 'Tian', 'Mentee', '999-999-1223', 'shuxu.tian@gallaudet.edu', 'Shuxu', '202cb962ac59075b964b07152d234b70', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `UniversityID` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `Role` varchar(10) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `Skills` varchar(255) NOT NULL,
  `activation_code` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`UniversityID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` VALUES(2546789, 'Monroe', 'Calvert', 'Mentor', '541-875-7777', 'mc@dayrep.com', 'The Blutbad', '4cfad7076129962ee70c36839a1e3e15', 'Web programming', NULL);
INSERT INTO `mentors` VALUES(8752469, 'Juilette', 'Silverton', 'Mentor', '541-856-7852', 'js@dayrep.com', 'The Hexenbiest', 'e3d704f3542b44a621ebed70dc0efe13', 'Web design', NULL);
INSERT INTO `mentors` VALUES(5426788, 'Nick', 'Grimm', 'Mentor', '854-869-7852', 'ng@hotmail.com', 'The Grimms', '86985e105f79b95d6bc918fb45ec7727', 'Computer security', NULL);
INSERT INTO `mentors` VALUES(1883251, 'Brandi', 'Gates', 'Mentor', '605-729-9048', 'BrandiCGates@dayrep.com', 'Malithe89', '05f394b46df45b051e2f07999b5054c0', 'Discrete mathematics', NULL);
INSERT INTO `mentors` VALUES(154896, 'Stefan', 'Salvatore', 'Mentor', '455-897-8695', 'stefansalvatore@dayrep.com', 'Steffie', '5a105e8b9d40e1329780d62ea2265d8a', 'Discrete mathematics', NULL);
INSERT INTO `mentors` VALUES(154766, 'Damon', 'Salvatore', 'Mentor', '455-862-7552', 'damonsalvatore@dayrep.com', 'damony', 'ad0234829205b9033196ba818f7a872b', 'Computer security', NULL);
INSERT INTO `mentors` VALUES(4578215, 'Rosalee', 'Calvert', 'Mentor', '541-854-7896', 'rc@dayrep.com', 'Fuschau', 'b04083e53e242626595e2b8ea327e525', 'Web programming', NULL);
INSERT INTO `mentors` VALUES(8759786, 'Bobby', 'Franks', 'Mentor', '854-867-8965', 'bf@dayrep.com', 'Eisbiber', '5e40d09fa0529781afd1254a42913847', 'Database', NULL);
INSERT INTO `mentors` VALUES(7412548, 'Elijah', 'Mikaelson', 'Mentor', '752-356-8888', 'em@bs.com', 'Original', '739969b53246b2c727850dbb3490ede6', 'Web design', NULL);
INSERT INTO `mentors` VALUES(1831381, 'John', 'Collins', 'Mentor', '660-235-8876', 'JohnSCollins@rhyta.com', 'Diseld', 'a2c23aad88deda2b3c0b307102b5a539', 'Database', NULL);
INSERT INTO `mentors` VALUES(4684684, 'Hank', 'Griffin', 'Mentor', '541-524-9999', 'hg@hotmail.com', 'Kehrseite-GentrÃ¤ger', 'c1a8e059bfd1e911cf10b626340c9a54', 'Web programming', NULL);
INSERT INTO `mentors` VALUES(5555555, 'Bjorn', 'Stark', 'Mentor', '541-865-8632', 'bs@gmail.com', 'Kehrseite', 'f696282aa4cd4f614aa995190cf442fe', 'Network', NULL);
INSERT INTO `mentors` VALUES(2355478, 'Yetta', 'Stark', 'Mentor', '578-785-8642', 'ls@gmail.com', 'RiÃŸfleisch', '60474c9c10d7142b7508ce7a50acf414', 'Web design', NULL);
INSERT INTO `mentors` VALUES(3564878, 'Merlin', 'Embrys', 'Mentor', '549-875-9999', 'me@derp.com', 'Supreme Wizard', 'f37011db4bf483a0510db132c8571bd3', 'Computer security', NULL);
INSERT INTO `mentors` VALUES(524879, 'Sean', 'Renard', 'Mentor', '785-777-7777', 'sr@grimm.com', 'Zauberbiest', '1afdf8245eec8939d9ec0a90aa8a478a', 'Network', NULL);
INSERT INTO `mentors` VALUES(9999999, 'Adalind', 'Schade', 'Mentor', '541-777-7898', 'as@witchy.com', 'Hexenbiest1', '5555eabad2dd977d00738ee3ff211af1', 'Web programming', NULL);
INSERT INTO `mentors` VALUES(8888888, 'Katerina', 'Petrova', 'Mentor', '522-666-6666', 'kp@gmail.com', 'PetrovaFire', '3ab481ee1969b811773b72289d9b5c84', 'Web design', NULL);
INSERT INTO `mentors` VALUES(2222222, 'Tatia', 'Petrova', 'Mentor', '444-444-4444', 'tp@gmail.com', 'OriginalPetrova', 'bc29dda8af4f22dd6ca04826c6c3b4ec', 'Web programming', NULL);
INSERT INTO `mentors` VALUES(4444444, 'Theresa', 'Rubel', 'Mentor', '888-999-1111', 'tr@gmail.com', 'Badass Grimm', 'edbff35510e848376c49b380f0d51c2c', 'Network', NULL);
INSERT INTO `mentors` VALUES(1111111, 'Rickon', 'Henderson', 'Mentor', '666-222-2586', 'rh@hotmail.com', 'Star-Lord', 'fc19bc28f68abbda828a83700b7b2af1', 'Network', NULL);
INSERT INTO `mentors` VALUES(5241111, 'Eric', 'Northman', 'Mentor', '233-356-9852', 'en@hotmail.com', 'Fuchsteufelwild', 'c108dd45533016ce7ae685e03673e3b3', 'Web design', NULL);
