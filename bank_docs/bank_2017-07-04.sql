# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: bank
# Generation Time: 2017-07-04 17:32:03 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `details`;

CREATE TABLE `details` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `BRANCH_NAME` varchar(50) DEFAULT NULL,
  `EMPNUMBER` int(11) unsigned NOT NULL,
  `EMPNAME` varchar(50) DEFAULT NULL,
  `CATEGORY_CODE` int(11) DEFAULT NULL,
  `SUB_CATEGORY` int(11) DEFAULT NULL,
  `DESIGNATION` varchar(50) DEFAULT NULL,
  `DEPT_CODE` varchar(20) DEFAULT NULL,
  `DEPT_NAME` varchar(50) DEFAULT NULL,
  `EMP_DOJ` date DEFAULT NULL,
  `EMP_DOB` date DEFAULT NULL,
  `ACCOUNT_NUMBER` varchar(50) DEFAULT NULL,
  `EMP_GENDER` varchar(5) DEFAULT NULL,
  `PF_INDEX` varchar(50) DEFAULT NULL,
  `NEW_JOINEE` varchar(50) DEFAULT NULL,
  `PROMOTION` varchar(50) DEFAULT NULL,
  `RESIGNEE` varchar(50) DEFAULT NULL,
  `TRANSFER` varchar(50) DEFAULT NULL,
  `EMP_TRANSFER_DT` date DEFAULT NULL,
  `EMP_TERMINATION_DT` date DEFAULT NULL,
  `EMP_PROMOTION_DT` date DEFAULT NULL,
  `EMP_PAY_SCALE` varchar(50) DEFAULT NULL,
  `PAID_DAYS` varchar(50) DEFAULT NULL,
  `BASIC` float DEFAULT NULL,
  `D.A` float DEFAULT NULL,
  `CON_ALL` float DEFAULT NULL,
  `HRA` varchar(50) DEFAULT '',
  `SP_ALL` varchar(50) DEFAULT NULL,
  `BONUS` varchar(50) DEFAULT NULL,
  `EDU_ALL` varchar(50) DEFAULT NULL,
  `CCA` varchar(50) DEFAULT NULL,
  `MED_ALL` varchar(50) DEFAULT NULL,
  `OTH_ALL` varchar(50) DEFAULT NULL,
  `PTAX` varchar(50) DEFAULT NULL,
  `ITAX` varchar(50) DEFAULT NULL,
  `EPF` varchar(50) DEFAULT NULL,
  `LIC` varchar(50) DEFAULT NULL,
  `CREDIT_SOC_LN` varchar(50) DEFAULT NULL,
  `HSG_LN1` varchar(50) DEFAULT NULL,
  `HSG_LN2` varchar(50) DEFAULT NULL,
  `HSG_LN3` varchar(50) DEFAULT NULL,
  `HSG_REP_LN1` varchar(50) DEFAULT NULL,
  `HSG_REP_LN2` varchar(50) DEFAULT NULL,
  `HSG_EXT_LN` varchar(50) DEFAULT NULL,
  `VEH_LN` varchar(50) DEFAULT NULL,
  `FURNT_LN1` varchar(50) DEFAULT NULL,
  `FURNT_LN2` varchar(50) DEFAULT NULL,
  `FMY_CAR_LN` varchar(50) DEFAULT NULL,
  `EDU_LOAN1` varchar(50) DEFAULT NULL,
  `EDU_LOAN2` varchar(50) DEFAULT NULL,
  `OTH_DED_1` varchar(50) DEFAULT NULL,
  `OTH_DED_2` varchar(50) DEFAULT NULL,
  `ECOD_INT` varchar(50) DEFAULT NULL,
  `GROSS_EARNING` varchar(50) DEFAULT NULL,
  `TOTAL_DEDUCTION` varchar(50) DEFAULT NULL,
  `NET_SALARY_PAYABLE` varchar(50) DEFAULT NULL,
  `UPDATE_DATE` varchar(50) DEFAULT NULL,
  `PAYSLIPS_REMARKS` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `EMPNUMBER` (`EMPNUMBER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `details` WRITE;
/*!40000 ALTER TABLE `details` DISABLE KEYS */;

INSERT INTO `details` (`id`, `BRANCH_NAME`, `EMPNUMBER`, `EMPNAME`, `CATEGORY_CODE`, `SUB_CATEGORY`, `DESIGNATION`, `DEPT_CODE`, `DEPT_NAME`, `EMP_DOJ`, `EMP_DOB`, `ACCOUNT_NUMBER`, `EMP_GENDER`, `PF_INDEX`, `NEW_JOINEE`, `PROMOTION`, `RESIGNEE`, `TRANSFER`, `EMP_TRANSFER_DT`, `EMP_TERMINATION_DT`, `EMP_PROMOTION_DT`, `EMP_PAY_SCALE`, `PAID_DAYS`, `BASIC`, `D.A`, `CON_ALL`, `HRA`, `SP_ALL`, `BONUS`, `EDU_ALL`, `CCA`, `MED_ALL`, `OTH_ALL`, `PTAX`, `ITAX`, `EPF`, `LIC`, `CREDIT_SOC_LN`, `HSG_LN1`, `HSG_LN2`, `HSG_LN3`, `HSG_REP_LN1`, `HSG_REP_LN2`, `HSG_EXT_LN`, `VEH_LN`, `FURNT_LN1`, `FURNT_LN2`, `FMY_CAR_LN`, `EDU_LOAN1`, `EDU_LOAN2`, `OTH_DED_1`, `OTH_DED_2`, `ECOD_INT`, `GROSS_EARNING`, `TOTAL_DEDUCTION`, `NET_SALARY_PAYABLE`, `UPDATE_DATE`, `PAYSLIPS_REMARKS`)
VALUES
	(1,' ',387,'NAMRATA BHAVIN CHAUHAN',0,0,'FRONT DESK OFFICER','1','-','0000-00-00','0000-00-00','1.08E+11','F','516','','','','','0000-00-00','0000-00-00','0000-00-00','7275-320/6-9195-535/6-12405-740/5-16105-825/4-1940','30',8235,14927,412,'988','2703','0','0','412','0','0','200','0','2779','0','200','0','0','0','0','0','0','0','0','0','0','0','0','0','840','1191','27677','5210','22467','25-Apr-17',''),
	(2,' ',418,'ARPIT JAGADISHBHAI PATEL',0,0,'FRONT DESK OFFICER','1','-','0000-00-00','0000-00-00','1.08E+11','M','547','','','','','0000-00-00','0000-00-00','0000-00-00','7275-320/6-9195-535/6-12405-740/5-16105-825/4-1940','30',8235,14927,412,'988','2703','0','0','412','0','0','200','0','2779','0','750','0','0','0','0','0','0','0','0','0','0','0','0','0','840','0','27677','4569','23108','25-Apr-17',''),
	(3,' ',250,'YOGESH REVANDAS MAKWANA',0,0,'SR. OFFICE ASSISTANT','1','-','0000-00-00','0000-00-00','6.08001E+11','M','366','','','','','0000-00-00','0000-00-00','0000-00-00','10475-455/5-12750-530/5-15400-735/4-18340-755/3-20','30',16135,28133,807,'1936','5166','0','0','807','0','0','200','1000','5312','918','3650','0','0','0','0','0','0','0','0','0','0','0','0','0','840','0','52984','11920','41064','25-Apr-17','');

/*!40000 ALTER TABLE `details` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
