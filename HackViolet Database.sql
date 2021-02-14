CREATE DATABASE  IF NOT EXISTS `hackvlt` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `hackvlt`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: hackvlt
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.14-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `busy_8`
--

DROP TABLE IF EXISTS `busy_8`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `busy_8` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(305) DEFAULT NULL,
  `comm_author` varchar(45) DEFAULT NULL,
  `post_time` datetime DEFAULT NULL,
  `post_subject` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `busy_8`
--

LOCK TABLES `busy_8` WRITE;
/*!40000 ALTER TABLE `busy_8` DISABLE KEYS */;
INSERT INTO `busy_8` VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Gayatri','2021-01-13 10:47:05','Finibus Bonorum et Malorum'),(2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Priyanka','2021-01-18 18:07:15','Finibus Bonorum et Malorum'),(3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Prachi','2021-01-24 20:15:10','Finibus Bonorum et Malorum'),(4,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Vaishnavi','2021-01-28 13:21:05','Finibus Bonorum et Malorum');
/*!40000 ALTER TABLE `busy_8` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `choose_3`
--

DROP TABLE IF EXISTS `choose_3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choose_3` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(305) DEFAULT NULL,
  `comm_author` varchar(45) DEFAULT NULL,
  `post_time` datetime DEFAULT NULL,
  `post_subject` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choose_3`
--

LOCK TABLES `choose_3` WRITE;
/*!40000 ALTER TABLE `choose_3` DISABLE KEYS */;
INSERT INTO `choose_3` VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Gayatri','2021-01-13 10:47:05','Finibus Bonorum et Malorum'),(2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Priyanka','2021-01-18 18:07:15','Finibus Bonorum et Malorum'),(4,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Vaishnavi','2021-01-28 13:21:05','Finibus Bonorum et Malorum');
/*!40000 ALTER TABLE `choose_3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `erase_1`
--

DROP TABLE IF EXISTS `erase_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `erase_1` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(305) DEFAULT NULL,
  `comm_author` varchar(45) DEFAULT NULL,
  `post_time` datetime DEFAULT NULL,
  `post_subject` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `erase_1`
--

LOCK TABLES `erase_1` WRITE;
/*!40000 ALTER TABLE `erase_1` DISABLE KEYS */;
INSERT INTO `erase_1` VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Gayatri','2021-01-13 10:47:05','Finibus Bonorum et Malorum'),(2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Priyanka','2021-01-18 18:07:15','Finibus Bonorum et Malorum'),(3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Prachi','2021-01-24 20:15:10','Finibus Bonorum et Malorum'),(4,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Vaishnavi','2021-01-28 13:21:05','Finibus Bonorum et Malorum');
/*!40000 ALTER TABLE `erase_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_catgry`
--

DROP TABLE IF EXISTS `forum_catgry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_catgry` (
  `catg_id` int(11) NOT NULL AUTO_INCREMENT,
  `catg_name` varchar(45) DEFAULT NULL,
  `catg_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`catg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_catgry`
--

LOCK TABLES `forum_catgry` WRITE;
/*!40000 ALTER TABLE `forum_catgry` DISABLE KEYS */;
INSERT INTO `forum_catgry` VALUES (1,'Self Help','Self guided improvement with a psychological basis'),(2,'Stories','Learn from stories of people like you and even share yours'),(3,'Motivation','Get motivation to move forward and live your life to its full potential');
/*!40000 ALTER TABLE `forum_catgry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forums`
--

DROP TABLE IF EXISTS `forums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forums` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `catg_id` int(11) DEFAULT NULL,
  `forum_desc` varchar(255) DEFAULT NULL,
  `forum_topics` varchar(85) DEFAULT NULL,
  `table_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forums`
--

LOCK TABLES `forums` WRITE;
/*!40000 ALTER TABLE `forums` DISABLE KEYS */;
INSERT INTO `forums` VALUES (1,1,'Overcoming Hatred and Intolerance with Love and Tolerance','Erase Hate – One Person at a Time','Erase_1'),(2,1,'To reinforce is to “award more strength or power” to a particular thought or belief','Use Your Superpowers to Change Your Life!','Use_2'),(3,1,'Dwell more and more upon thoughts of what you really want in your life','Choose Your Thoughts Carefully','Choose_3'),(4,2,'Share your pain with fellow women who went through the same and gain inspiration from each other','Survivor Stories','Survivor_4'),(5,2,'Find inspiration and confide in each other','From nothing to Something','From_5'),(7,3,'Life moves pretty fast. If you don’t stop and look around once in a while, you could miss it','Quantity vs Quality of Life','Quantity_7'),(8,3,'Instead of using \"I\'ve been busy\" as an excuse for your lack of responsiveness, instead simply say \"it\'s not a priority for me\"','Busy is the New Stupid','Busy_8'),(9,3,'It\'s the barrier that keeps you from trying new things and going out of your comfort zone.','Overcoming the Frustration Barrier','Overcoming_9');
/*!40000 ALTER TABLE `forums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `from_5`
--

DROP TABLE IF EXISTS `from_5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `from_5` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(305) DEFAULT NULL,
  `comm_author` varchar(45) DEFAULT NULL,
  `post_time` datetime DEFAULT NULL,
  `post_subject` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `from_5`
--

LOCK TABLES `from_5` WRITE;
/*!40000 ALTER TABLE `from_5` DISABLE KEYS */;
INSERT INTO `from_5` VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Gayatri','2021-01-13 10:47:05','Finibus Bonorum et Malorum'),(2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Priyanka','2021-01-18 18:07:15','Finibus Bonorum et Malorum'),(4,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Vaishnavi','2021-01-28 13:21:05','Finibus Bonorum et Malorum');
/*!40000 ALTER TABLE `from_5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs_master`
--

DROP TABLE IF EXISTS `jobs_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs_master` (
  `j_id` int(11) NOT NULL AUTO_INCREMENT,
  `j_flag` varchar(45) DEFAULT NULL,
  `j_comp` varchar(155) DEFAULT NULL,
  `j_pos` varchar(85) DEFAULT NULL,
  `j_desc` varchar(2005) DEFAULT NULL,
  `j_webs` varchar(105) DEFAULT NULL,
  `j_location` varchar(45) DEFAULT NULL,
  `j_date` date DEFAULT NULL,
  `j_image` varchar(205) DEFAULT NULL,
  PRIMARY KEY (`j_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs_master`
--

LOCK TABLES `jobs_master` WRITE;
/*!40000 ALTER TABLE `jobs_master` DISABLE KEYS */;
INSERT INTO `jobs_master` VALUES (1,'Individual',' HDFC Bank','Accountant','QUALIFICATION :- 10th, 12th, B. com & Graduations, Computer Diploma SKILLS :- Must have the knowledge of Basic computer. EXPERIENCE :- Fresher/ Experience','https://www.quikr.com/jobs/urgent-vacancy-for-female-candidate-in-hdfc-bank-mumbai-mumbai/p/326529322?utm','Mumbai','2021-01-24',NULL),(2,'Individual','Women Entrepreneur Network','Data and Statistical Analyst','Stakeholder facing role across different functions of the organizations (e.g., Marketing, Finance, Logistics, Procurement, Customer, Supply Chain) to develop analyses that lead to actionable insights that accelerate profitable growth','https://in.linkedin.com/jobs/view/sales-marketing-branding-executive-for-gcp-and-cyber-security-projects-','Mumbai','2021-01-23',NULL),(3,'Individual','GCP and Cyber Security Projects','Sales, Marketing & Branding Executive ','\nThe prospective candidate should have basic sales skills such as researching, cold calling, prospecting, networking, relationship building and comply with sales processes.\n\n','https://in.talent.com/view?id=d58cc463614a&source=linkedin-standard&utm_medium=linkedin-standard','Mumbai','2020-12-27',NULL),(4,'Individual','SNEHA ','Consultant English Teacher','OPENING FOR: ENGLISH TEACHER\nNAME OF THE PROGRAM: SNEHA SHAKTI\nROLE REPORTS TO: PROGRAM COORDINATOR\nNUMBER HOURS- 40 HOURS PER MONTH\nJOB LOCATION: KURLA','https://socialservicesindia.com/?job_listing=consultant-english-teacher&utm_campaign=google_jobs_apply&ut','Mumbai','2021-01-11',NULL),(5,'Website','Internshala','','In India, about 65-70% women who take a career break fail to return to work, and a large number of women who are well educated & have potential to become a valuable part of the workforce do not even get a chance to begin their career. \"Internships for Women\" brings amazing women employment opportunities, in the form of internship jobs for women, to help them restart their career. With flexible working options like work from home options & part-time options, women can now manage both - their career and household responsibilities. Further, if women want to go back to the workplace, they can opt for office-based internships and make a gradual switch to professional life.','https://internshala.com/internships-for-women','Mumbai','2021-01-11','https://internshala.com//static/images/internshala_og_image.jpg'),(6,'Website','JobsForHer','',' JobsForHer is the largest online career platform for women','https://www.jobsforher.com/','Mumbai','2021-01-19','https://media-exp1.licdn.com/dms/image/C4E0BAQE8jJkKAPLegQ/company-logo_200_200/0/1536640990885?e=2159024400&v=beta&t=FTy6Ld50-UXTg2gSyvkMk4on9SUbbfrm9PHyBwNz4a4'),(7,'Individual',' Invest India','Specialist, Women Entrepreneurship','Job Description\n• Working on facilitating women entrepreneurship ecosystem across India by managing an in- house capacity development programme\n• Develop and implement new initiatives for improving the ecosystem for women entrepreneurs in the country\n','https://recruiterflow.com/invest-india/jobs/32?utm_campaign=google_jobs_apply&utm_source=google_jobs_appl','Delhi ','2021-01-24',NULL),(8,'Individual','UN Women','Training and Logistics coordinator','Protection of Women and Girls fromSexual and Gender Based Violence (Open to Indian Nationals Only)\nOrganization: United Nations Entity for Gender Equality and the Empowerment of Women (UN Women)\nProject: Intergovernmental Process and UN Inter-agency Coordination; Ending Violence Against Women and Girls\n','https://socialservicesindia.com/?job_listing=training-and-logistics-coordinator-2&utm_campaign=google_job','Delhi ','2021-01-22',NULL),(9,'Individual','WhiteHatJr','Online Tutor/Teacher','\n• You\'ll teach students aged 6-14 coding (logic, sequence, structure) to generate creative outcomes like websites, animations and apps.\nAll classes are taught live 1:1 online. Work on weekends to maximize your earnings.\n','https://www.mncjobsindia.com/jobs/online-tutor-teachers-women-candidates-only-across-india-delhi-1120660?','Delhi ','2021-01-13',NULL),(10,'Individual','International Center for Research on Women','Communication Coordinator','\nThe Communication Coordinator is expected to gel and seamlessly work with various project teams at the Asia office. The Coordinator will work on ICRW Asia\'s projects-related publications, research collateral and communication needs — briefs, reports, website content, newsletters, dissemination events, conferences (as needed), etc. ','https://intellijobs.ai/job/International-Center-for-Research-on-WomenCommunication-Coordinator-nViZaFR9lY','Delhi ','2020-12-08',NULL),(11,'Website','Internshala','','In India, about 65-70% women who take a career break fail to return to work, and a large number of women who are well educated & have potential to become a valuable part of the workforce do not even get a chance to begin their career. \"Internships for Women\" brings amazing women employment opportunities, in the form of internship jobs for women, to help them restart their career. With flexible working options like work from home options & part-time options, women can now manage both - their career and household responsibilities. Further, if women want to go back to the workplace, they can opt for office-based internships and make a gradual switch to professional life.','https://internshala.com/internships-for-women','Delhi ','2021-01-02','https://internshala.com//static/images/internshala_og_image.jpg'),(12,'Website','JobsForHer','',' JobsForHer is the largest online career platform for women','https://www.jobsforher.com/','Delhi ','2021-01-17','https://media-exp1.licdn.com/dms/image/C4E0BAQE8jJkKAPLegQ/company-logo_200_200/0/1536640990885?e=2159024400&v=beta&t=FTy6Ld50-UXTg2gSyvkMk4on9SUbbfrm9PHyBwNz4a4'),(13,'Individual','Volvo','Application Developer','Who are we looking for?\n• Female candidates currently on a career break (minimum 1 year).\n• Candidates having prior relevant experience within any of the following areas: Android (Kotlin), MI/AL, Mobile application development, Front end development, HTML5, JSON, CSS and Typescript/JavaScript etc.','https://xjobs.brassring.com/TGnewUI/Search/home/HomeWithPreLoad?partnerid=25079&siteid=5171&PageType=JobD','Bangalore','2021-01-24',NULL),(14,'Individual','NOS Returnee Program At Northern Trust','Women Career Restart','Who we are looking for?\n• Female candidates currently on a career break(minimum of 1 years).\n• Candidates having prior relevant experience within any of the following areas: Investment Banking and Capital Markets, Asset Servicing, Wealth and Asset Management, Finance, Legal and Compliance, Audit, Risk, Technology, Human Resources.','https://recruiterflow.com/invest-india/jobs/32?utm_campaign=google_jobs_apply&utm_source=google_jobs_appl','Bangalore','2021-01-29',NULL),(15,'Individual','Ally-executive HR consulting','Software Engineering Manager','Job Description\nSoftware Manager, CPE UI (Pub Admin and Inventory Tools)\nAs a manager of the engineering team responsible for producing the Convex internal Inventory Tools, you will manage the development process and lifecycle of our internal publisher and inventory management tools.','https://jobs.smartrecruiters.com/Ally-eXecutiveHRConsulting/743999715363717-software-engineering-manager-','Bangalore','2021-01-11',NULL),(16,'Individual','Women\'s Ethnic','Designer','Managing design & product development for category.\n• Own trend forecasting, understand market gaps, and be capable of managing technical aspects of product development on their assigned categories\n• Building relationships with vendors/manufacturers,','https://www.monsterindia.com/amp/job-vacancy-designer-women-s-ethnic-udaan-bengaluru-bangalore-26014171.h','Bangalore','2021-01-15',NULL),(17,'Website','JobsForHer','',' JobsForHer is the largest online career platform for women','https://www.jobsforher.com/','Bangalore','2020-12-28','https://media-exp1.licdn.com/dms/image/C4E0BAQE8jJkKAPLegQ/company-logo_200_200/0/1536640990885?e=2159024400&v=beta&t=FTy6Ld50-UXTg2gSyvkMk4on9SUbbfrm9PHyBwNz4a4'),(18,'Website','Internshala','','In India, about 65-70% women who take a career break fail to return to work, and a large number of women who are well educated & have potential to become a valuable part of the workforce do not even get a chance to begin their career. \"Internships for Women\" brings amazing women employment opportunities, in the form of internship jobs for women, to help them restart their career. With flexible working options like work from home options & part-time options, women can now manage both - their career and household responsibilities. Further, if women want to go back to the workplace, they can opt for office-based internships and make a gradual switch to professional life.','https://internshala.com/internships-for-women','Bangalore','2021-01-01','https://internshala.com//static/images/internshala_og_image.jpg'),(19,'Individual','Sun Dew Solutions Pvt Ltd','Business Development Executives','Skills Required- Business Development, Client Servicing, Sales, Presales, Inside Sales, Lead Generation, Digital Marketing','https://cutshort.io/job/Business-Development-Executive-Female-Candidates-Preferred-Kolkata-Sun-Dew-Soluti','Kolkata','2021-01-21',NULL),(20,'Individual','Square 1 Consulting','Women\'s wear designer','We are looking to hire a Fashion Designer with panache and flair to capture the mood on the street in our ready-to-wear line. ','https://www.mncjobsindia.com/jobs/women39s-wear-designer-kolkata-1155191?utm_campaign=google_jobs_apply&u','Kolkata','2021-01-29',NULL),(21,'Individual','ARC','HR Assistant','We are looking for candidates for HR Assistant (Fresher Female preferred) for a FMCG company for Kolkata. Fresher or experienced both can apply','https://www.mncjobsindia.com/jobs/hr-assistant-female-only-required-for-kolkata-kolkata-1353504?utm_campa','Kolkata','2021-01-10',NULL),(22,'Individual','WhiteHatJr','Online Tutor','','https://www.mncjobsindia.com/jobs/online-tutor-women-candidates-only-us-market-night-shift-kolkata-113259','Kolkata','2021-01-18',NULL),(23,'Website','Internshala','','In India, about 65-70% women who take a career break fail to return to work, and a large number of women who are well educated & have potential to become a valuable part of the workforce do not even get a chance to begin their career. \"Internships for Women\" brings amazing women employment opportunities, in the form of internship jobs for women, to help them restart their career. With flexible working options like work from home options & part-time options, women can now manage both - their career and household responsibilities. Further, if women want to go back to the workplace, they can opt for office-based internships and make a gradual switch to professional life.','https://internshala.com/internships-for-women','Kolkata','2021-01-02','https://internshala.com//static/images/internshala_og_image.jpg'),(24,'Website','JobsForHer','',' JobsForHer is the largest online career platform for women','https://www.jobsforher.com/','Kolkata','2021-01-25','https://media-exp1.licdn.com/dms/image/C4E0BAQE8jJkKAPLegQ/company-logo_200_200/0/1536640990885?e=2159024400&v=beta&t=FTy6Ld50-UXTg2gSyvkMk4on9SUbbfrm9PHyBwNz4a4');
/*!40000 ALTER TABLE `jobs_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_master`
--

DROP TABLE IF EXISTS `login_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_master` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) DEFAULT NULL,
  `email` varchar(65) DEFAULT NULL,
  `pswd` varchar(45) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_master`
--

LOCK TABLES `login_master` WRITE;
/*!40000 ALTER TABLE `login_master` DISABLE KEYS */;
INSERT INTO `login_master` VALUES (1,'Gayatri','patilgayatri086@gmail.com','gvp','8452048219','2021-01-30'),(2,'Prachi','prachi.randeria@gmail.com','prd','8745837583','2021-01-31'),(3,'Priyanka','priyanka@gmail.com','phch','9873266723','2021-01-31'),(4,'Vaishnavi','vaishnavi.vsp@gmail.com','vsp','9173647324','2021-01-30');
/*!40000 ALTER TABLE `login_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `overcoming_9`
--

DROP TABLE IF EXISTS `overcoming_9`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `overcoming_9` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(305) DEFAULT NULL,
  `comm_author` varchar(45) DEFAULT NULL,
  `post_time` datetime DEFAULT NULL,
  `post_subject` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `overcoming_9`
--

LOCK TABLES `overcoming_9` WRITE;
/*!40000 ALTER TABLE `overcoming_9` DISABLE KEYS */;
INSERT INTO `overcoming_9` VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Gayatri','2021-01-13 10:47:05','Finibus Bonorum et Malorum'),(2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Priyanka','2021-01-18 18:07:15','Finibus Bonorum et Malorum'),(3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Prachi','2021-01-24 20:15:10','Finibus Bonorum et Malorum');
/*!40000 ALTER TABLE `overcoming_9` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quantity_7`
--

DROP TABLE IF EXISTS `quantity_7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quantity_7` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(305) DEFAULT NULL,
  `comm_author` varchar(45) DEFAULT NULL,
  `post_time` datetime DEFAULT NULL,
  `post_subject` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quantity_7`
--

LOCK TABLES `quantity_7` WRITE;
/*!40000 ALTER TABLE `quantity_7` DISABLE KEYS */;
INSERT INTO `quantity_7` VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Gayatri','2021-01-13 10:47:05','Finibus Bonorum et Malorum');
/*!40000 ALTER TABLE `quantity_7` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survivor_4`
--

DROP TABLE IF EXISTS `survivor_4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `survivor_4` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(305) DEFAULT NULL,
  `comm_author` varchar(45) DEFAULT NULL,
  `post_time` datetime DEFAULT NULL,
  `post_subject` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survivor_4`
--

LOCK TABLES `survivor_4` WRITE;
/*!40000 ALTER TABLE `survivor_4` DISABLE KEYS */;
INSERT INTO `survivor_4` VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Gayatri','2021-01-13 10:47:05','Finibus Bonorum et Malorum'),(2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Priyanka','2021-01-18 18:07:15','Finibus Bonorum et Malorum');
/*!40000 ALTER TABLE `survivor_4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `therapy_clients`
--

DROP TABLE IF EXISTS `therapy_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `therapy_clients` (
  `cl_id` int(11) NOT NULL AUTO_INCREMENT,
  `cl_name` varchar(45) DEFAULT NULL,
  `cl_exper` varchar(3005) DEFAULT NULL,
  `cl_city` varchar(45) DEFAULT NULL,
  `cl_date` date DEFAULT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `therapy_clients`
--

LOCK TABLES `therapy_clients` WRITE;
/*!40000 ALTER TABLE `therapy_clients` DISABLE KEYS */;
INSERT INTO `therapy_clients` VALUES (2,'Rutuja Sawant','She’s been there for me for more than 1 year now. She’s a really fun person to talk to and I know for a fact that she won’t judge me for the things I do and say. She’ll explain stuff to me in a nice way and that’s how it should be I guess? We’re more like friends at this point.','Mumbai','2021-01-24'),(3,'Roshni Goradia ','She really puts in all the effort to try and help you and you can have a logical, scientific or a philosophical conversation with her.','Mumbai','2021-01-11'),(4,'Pratibha Seth','I went to Dr. Pradnya as a last resort to my depression and other family problems. She has helped me make some really positive changes. These changes have not benefitted to me only but all my loved ones closest to me and she showed me how I can treat myself when needed. Thank you, Dr. Pradnya. I would recommend her to anyone.','Mumbai','2021-01-18'),(7,'Apraajita Datta','A very warm & comfortable environment. The people here are very sweet and welcoming. Highly recommended!','Mumbai','2021-01-01'),(10,'Sushmita Pedaprolu','I will be forever indebted to this beautiful and compassionate space for helping me meet sadia at Inner Space! The staff, the ambience (oh, how can I forget the wonderful collection of books?) and everything else is filled with devotion and love. I am able to review this place publicly without the shame of admitting that I go for therapy because of Inner Space! Sadia\'s aura is beautiful and her passion is infectious. Her team imbibes the values that she believes in, with grace. I have already recommended and will keep recommending this place to anyone who is suffering.','Mumbai','2020-11-22'),(11,'Kanika Patel','I have changed in ways I did not think I was capable of. Small things that irked me to no end have lost all power over me. Big problems that seemed insurmountable are now very, very manageable. Ten weeks ago, my only dedication in life was to hurt myself and now, here I am a hopeful and confident woman. Hope is the best thing that Shrradha has given me.','Mumbai','2021-01-29'),(12,'Nibedita Upadhyai','I am really grateful to have discovered Betterlyf when I needed it the most and so far I have been having a really smooth ride with you guys and I am glad to have found a counselor like Medha. Keep up the good work guys.','Delhi','2020-12-24'),(13,'Oindrila duttagupta','I have attended many different sessions and workshops that Aqseer has organized as Aaina and many have helped me deal with trauma and finding release. Aqseer is a warm presence who quietly eases you into her surroundings without pushing you. I highly recommend Aaina.','Delhi','2021-01-11'),(14,'Ruhee Kakkar','Milinder Ma\'am is highly professional ,at the same time her personal concerns towards me have helped me alot .She did magic and made my life a better place to live .. Ma\'am has changed my perspective towards life , and the way she is teaching me techniques to control my thoughts is a cake walk for me.Still a lot to do with my behavior but I have complete trust that before end of my threapy I will be a complete transformed person.','Delhi','2021-01-01'),(15,'Kavita Bisht','Really helped me navigate through difficult times in life. Listening to oneself, gives fresh perspective and courage to take on challenges. My therapist Shivakshi has been Godsend and is still helping me move forward in life... I feel extremely grateful towards BetterLyf for enabling and empowering me on my life\'s journey','Delhi','2021-01-21'),(16,'Saisha Kakumani','You have to think multiple times before deciding to consult a psychologist. Once you decided to consult a psychologist, you need not to think much to consult Dr.Divya. She is more than good.','Bangalore','2021-01-24'),(17,'Sakhi B.','Dr.Jina has been very helpful in counselling in matters of anger management and self-awareness. She is a great listener and her inputs in matters of professional and personal growth has helped me a lot. She has suggested some exercises and techniques that work like magic','Bangalore','2021-01-22'),(18,'Seema Kalyan','She really listened and is actually honest about her feedback. Also suggested a few healthy choices for me. The way she explained what I am going through and the steps I need to take to get back is also very insightful and thoughtful','Bangalore','2020-12-01'),(19,'Mahi Jain','Very professional and gives good time to understand , listen and then providing therapy. Proper process is being followed and regular follow up to ensure that problem gets resolved. I highly recommend Dr Mamta Jain and she is best psychologist in Bangalore . Very humble , polite and knowledgeable.','Bangalore','2021-01-10'),(20,'Yashasvi Jaiswal','I am experiencing my life in a whole new way. Dr. Snehal Saraf is best person whom i have ever met, she reminded me of who i am. Its much more then just therapy and i\'d acknowledge her for the rest of my life. Thank you to the whole team @ Mansi Therapy','Kolkata','2021-01-24'),(21,'Dipanwita Goswami','Miss. Moumita Ganguly listens to my problems with great patience.I feel myself really lucky to find her as a guide.She has a charming personality.Although she\'s much younger than me,she has revitalized my lost confidence which is of paramount importance to patients. She is an unconventionally n amazingly caring specialist who can sense your problem at once n her helping hand would surely boost up your confidence. Even after a single session with her you would feel much better.','Kolkata','2020-11-01'),(22,'Snigdha Roy','Dr. Ankhee is very friendly, she will listen to you and understand you and help you to come out of it. She\'s very motivating and positive. I would recommend her highly if you are facing anything in your personal/professional life which you cannot talk about. She\'s always there for her patients.','Kolkata','2021-01-16'),(23,'Muskan Mantri','I have been dealing with severe depression and anxiety since a long time but I am greatly thankful to my Dr. Poulomee Shaw. It\'s been maybe 2 months since I have started my counselling with her, and within no time I have become so better. She has helped me take baby steps towards progress and self love. She never made me feel alone at any point of time, I am so blessed to have someone like her who knows both professionalism and how to make someone at home. Thank You so much.','Kolkata','2021-01-08');
/*!40000 ALTER TABLE `therapy_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `therapy_master`
--

DROP TABLE IF EXISTS `therapy_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `therapy_master` (
  `th_id` int(11) NOT NULL AUTO_INCREMENT,
  `th_flag` varchar(15) DEFAULT NULL,
  `th_name` varchar(45) DEFAULT NULL,
  `th_mobile` varchar(25) DEFAULT NULL,
  `th_email` varchar(85) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `descp` varchar(3005) DEFAULT NULL,
  `web_link` varchar(155) DEFAULT NULL,
  `th_image` varchar(205) DEFAULT NULL,
  PRIMARY KEY (`th_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `therapy_master`
--

LOCK TABLES `therapy_master` WRITE;
/*!40000 ALTER TABLE `therapy_master` DISABLE KEYS */;
INSERT INTO `therapy_master` VALUES (1,'Individual','Tanu Choksi','8291677131','','Mumbai','What is therapy according to Dr. Tanu Choksi?Therapy or Psychotherapy is not just visiting your therapist once a week to talk about your problems. It is a process of working together with your therapist to resolve unhealthy feelings, relationship issues, troublesome behaviours, faulty habits, irrational beliefs and/or somatic responses (sensations in the body).','http://www.tanuchoksi.in/',NULL),(2,'Individual','Shrradha Sidhwani','9920812638','shrradha@gmail.com','Mumbai','In a limited amount of time, problems related to anger, addiction, anxiety, depression in children, adolescents and marital discord among adults are addressed by the patients, she specialises in providing this comfort to her patients\n','https://shrradhasidhwani.com',NULL),(3,'Individual','Dr. Pradnya J Ajinkya','95948 80606','','Mumbai','You will be treated as a person rather than a case study. I tend to avoid labelling people with psychological diagnoses such as being \"anxious\", \"depressed\" or \"psychosomatic\" etc. I find that many clients have been previously (mis)labelled by someone else and that it is counter-productive. Instead, I take each person individually and regard their problem as a unique theme. I try to understand what it must feel like from the inside. I am then concerned to help you unravel whatever keeps the problem going and to help you identify ways of changing things for the better','http://www.psychologicalcounsellor.com/',NULL),(4,'Individual','Nutan Lohiya','1800 208 9607','','Mumbai','With years of experience with different issues,across age groups ,in medical and private practice settings,I offer personalised sessions designed to meet individual needs. Whether in my counselling room or on virtual platforms, I offer a non judgmental,confidential and a safe space to my clients to work on the goals defined by them. My specialty lies in using various techniques from therapies that I\'m trained in to make the processes more effective and create lasting positive change.','https://nutanlohiya.com/',NULL),(6,'Organisation','Trijog Foundation','9833983406','info@trijog.com ','Mumbai','We see counselling as a process that develops positive coping skills and leads to long term happier states of being and existing.','https://trijog.com/','https://images.yourstory.com/cs/images/companies/718652132165762776861054631504834125627392n-1597896768435.jpg?fm=png&auto=formatar=1:1&mode=fill&fill=solid'),(7,'Individual','Dr. Preeti Sethi','9810686642','sethipreeti@hotmail.com','Delhi','Preeti Sethi is a trained clinical psychologist, hypnotherapist, healer and counselor. She is highly regarded for her motivational and inspirational style.','facebook.com/drpreetisethi/',NULL),(8,'Individual','Dr.Nisha Khanna','9711011474','drnishakhanna@gmail.com','Delhi','She dealt with clients having emotional, mental, and physical & adjustment problems in their love, friendship, live-in, pre-marital, post-marital/post-marriage, family, professional life. She deals with the parent-child relationship, depression, insomnia, anxiety and all other kinds of moods, emotions, temperament, personality and behavioral issues. Her professional services are unsurpassed in the city of Delhi.','https://www.drnishakhanna.com/',NULL),(9,'Individual','Dr. Harsheen K Arora','9811575040','harsheenarora@gmail.com','Delhi','\'You\' are Important!\" Harsheen K Arora, a practicing psychologist since 2008 brings her experience outside the hospital set-up teaching workshops, working with clients - individual and corporate and writing articles.','http://www.harsheenkarora.com/',NULL),(10,'Individual','Ms. Milinder Kaur Bedi','9818578933','bedi.milinder@gmail.com','Delhi','Ms. Milinder Kaur Bedi is a counseling psychologist with expertise in dealing with clinical disorders and issues relating to stress, anxiety, mood disorders, child and teenage issues, marital and relationship issues, crisis interventions and family therapies.','https://milinderkaur.com/',NULL),(11,'Organisation','Aaina Therapy','sodhiaqseer@gmail.com​  (','aainatherapy@gmail.com','Delhi','I’m Aqseer, a body-awareness based psychotherapist in New Delhi. I offer individual therapy, art therapy workshops, listening training and meditation + sharing sessions.\n\nI experienced a tough yet profound journey through mental illness between 2013 and 2017. This taught me valuable lessons that I want to share with you.\nI don’t want you to just survive, I want you to thrive.','https://aainatherapy.com/','https://photo.isu.pub/aainatherapyonline/photo_large.jpg'),(12,'Organisation','BetterLyf','092666 26435','help@betterlyf.com','Delhi','Betterlyf was founded with a vision to foster a happier and healthier world. Over half a million individuals from various age groups, genders, countries, diverse cultures and unique challenges have proved that counseling is NOT just for some, but for ALL of us, just like fitness is.','https://www.betterlyf.com/','https://d1hl0z0ja1o93t.cloudfront.net/wp-content/uploads/2019/06/27104608/betterLYF-Logo.png'),(13,'Individual','Dr. Geetha Appachu','9448617789','geetaka03@gmail.com','Bangalore','Being one of the famous psychology counseling in Bangalore, she has treated so many counseling sessions to help people for the betterment of Life. Not only Dr. Geetha is famously known as a lady psychologist in Bangalore but also she is very popular for other activities like motivational skills, personality development skills, enhancing the quality of life, etc.','https://www.swapreran.com/',NULL),(14,'Individual','Dr. Divya Kumawat','9900208056','kalpari@outlook.com','Bangalore','KALPARI has been created by Dr Divya Kumawat. It is a concept that talks about psychological well being, happiness, art for personal growth and therapy','https://www.kalpariartandmind.com/',NULL),(15,'Individual','Dr. Rachna Sharma','963 234 9666','thebodycliinic@gmail.com','Bangalore','Dr Sharma is of the view that only a mentally fit individual can create a mentally healthy family and society. Thus one needs to visit a psychologist not only for mental disorders or illnesses, but on a regular basis as maintenance,to ensure we have mental health at all points.','https://www.thebodycliinic.com/',NULL),(16,'Individual','Dr. Mamta Jain','073488 97071','','Bangalore','I am a happiness expert with research on personality, happiness and hedonic field of psychology using software SPSS for data analysis. Skilled in psychometrics and data analysis to provide inputs for result oriented results in organizations.','https://www.drmamtajain.in/',NULL),(17,'Organisation','Smile N More Counselling','93410 78979','smilesnmorecounselling@gmail.com','Bangalore','I believe that every individual has an innate capability for happiness and with self-awareness and few skills can reach that potential. A self-aware person values self, accepts responsibility and constantly unlearns & relearns to manage problems in life. I feel counselling is an aid in this transformation and would like to do my best in this process. -Dr. Jinashree','http://jinashree.com/','https://dcassetcdn.com/design_img/2889272/517402/517402_15912582_2889272_374a40af_image.jpg'),(18,'Organisation','The Mind Research Foundation','80-2520-2055','info@themindresearchfoundation.org','Bangalore','The Mind Research Foundation\'s endeavour is to encourage those living with Behavioural health conditions to get the help they need, and ensure those who need help or are vulnerable have access to excellent support, acceptance, and resources they deserve.','https://themindresearchfoundation.org/','https://images1-fabric.practo.com/practices/705061/the-mind-research-foundation-bangalore-5a0d547c88c2d.jpg'),(19,'Individual','Dr. Poulomee Shaw','9903328052','info@mindscc.com','Kolkata','MIND’S is a multispeciality psychological care unit. We provide a highly specialized psychological and therapeutic treatment to children, adolescents, adults, couples and families. We offer long term individual, group, family and couple therapy to address a wide variety of psychological problems, personal concerns, and relationship issues. Additionally we offer psychometric assessment services for every age group (children, adults, old age).','http://www.mindscc.com/',NULL),(20,'Individual','Dr. Sayan Ganguly','9433702300','','Kolkata','I prefer to take a holistic perspective while dealing with my client\'s problems and try to mobilize familial support and resources so that the problems could be solved effectively and efficiently. However I also try to maintain focus on my clients individual needs so that they can experience growth by using the supportive resources.','https://sites.google.com/view/counselorsayan/home?authuser=0',NULL),(21,'Individual','Indrani Banerjee Sarangi','98741 16990','indrani.therapy@gmail.com','Kolkata','Indrani primarily follows ‘client-centric’ approach, but also works in an \'eclectic\' way, which means, she takes elements of several different models and combine them while working with clients. She strongly advocates Positive Psychology and is passionate about enhancing her client’s well-being and helping them to live a more fulfilling life. She believes in the humanistic view that every person has the right to and has the potential of ‘self-actualization’; and can definitely achieve that with the help of counselling.','indrani-therapy.com',NULL),(22,'Individual','Dr. Ankhee Gupta','98741 78318','counsellor.ankhee@gmail.com','Kolkata','Ankhee believes  in healthy communication skills,providing the counsellee with a safe and comfortable environment, she speaks in three different languages and apart from this she also takes special interest in face reading and Vastu Shastra. Ankhee is a voracious reader, she observes human beings and studies them to gain a better knowledge of the human psyche.','https://ankheecounselling.net/',NULL),(23,'Organisation','Mansi Therapy','9830015724',' mansitherapy@gmail.com','Kolkata','We are a full-service psychotherapy private practice based in kolkata but providing therapy globally. We help clients make authentic, meaningful and mindful choices about how to live. We believe that psychotherapy can provide fertile ground to nurture growth.','http://www.mansitherapy.com/','https://content3.jdmagicbox.com/comp/kolkata/h7/033pxx33.xx33.180108143244.i9h7/catalogue/mansi-therapy-park-street-kolkata-psychologist-doctors-8xsmjww2ou.jpg'),(24,'Organisation','M\'s Clinic','9903478519','mm.ganguly89@gmail.com','Kolkata','We offer Psychological Counseling & Therapy, Career Counseling for Students, Marital Relationship Counseling, Psychometric Assessment & Diagnosis, Client Psycho-education, Group Therapy, Psycho-social Rehabilitation and follow up and Special Education Classes which are done in a proven, scientific structured process','http://msclinickolkata.com/','https://msclinickolkata.com/images/header-teamwork.svg');
/*!40000 ALTER TABLE `therapy_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `use_2`
--

DROP TABLE IF EXISTS `use_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `use_2` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(305) DEFAULT NULL,
  `comm_author` varchar(45) DEFAULT NULL,
  `post_time` datetime DEFAULT NULL,
  `post_subject` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `use_2`
--

LOCK TABLES `use_2` WRITE;
/*!40000 ALTER TABLE `use_2` DISABLE KEYS */;
INSERT INTO `use_2` VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Gayatri','2021-01-13 10:47:05','Finibus Bonorum et Malorum'),(2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dol','Priyanka','2021-01-18 18:07:15','Finibus Bonorum et Malorum');
/*!40000 ALTER TABLE `use_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'hackvlt'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-31 19:28:21
