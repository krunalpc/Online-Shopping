-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2014 at 03:10 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `CategoryID` int(11) DEFAULT NULL,
  `CategoryName` tinytext,
  `Description` longtext,
  `Active` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `CustomerID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT '0',
  `FirstName` tinytext,
  `LastName` tinytext,
  `Address1` tinytext,
  `Address2` tinytext,
  `City` tinytext,
  `State` tinytext,
  `Zip` int(11) DEFAULT '0',
  `phone` tinytext,
  `Email` tinytext,
  `Shipping_Address1` tinytext,
  `Shipping_Address2` tinytext,
  `Shipping_City` tinytext,
  `Shipping_State` tinytext,
  `Shipping_Zip` int(11) DEFAULT '0',
  `StartDate` datetime DEFAULT NULL,
  `Grade` tinytext,
  `Notes` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE IF NOT EXISTS `distributors` (
  `DistributorID` int(11) DEFAULT NULL,
  `CompanyName` tinytext,
  `Phone` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `EmpID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT '0',
  `WorkGroup` tinytext,
  `FirstName` tinytext,
  `LastName` tinytext,
  `Address1` tinytext,
  `Address2` tinytext,
  `City` tinytext,
  `State` tinytext,
  `Zip` int(11) DEFAULT '0',
  `Phone` tinytext,
  `Email` tinytext,
  `StartDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE IF NOT EXISTS `orderitems` (
  `OrderItemID` int(11) DEFAULT NULL,
  `OrderID` int(11) DEFAULT '0',
  `ProductID` int(11) DEFAULT '0',
  `OrderNumber` int(11) DEFAULT '0',
  `Quantity` int(11) DEFAULT '0',
  `Price` decimal(15,2) DEFAULT '0.00',
  `Discount` decimal(15,2) DEFAULT '0.00',
  `FinalAmount` decimal(15,2) DEFAULT '0.00',
  `Size` tinytext,
  `Color` tinytext,
  `OrderStatus` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderID` int(11) DEFAULT NULL,
  `CustomerID` int(11) DEFAULT '0',
  `OrderNumber` int(11) DEFAULT '0',
  `PaymentID` int(11) DEFAULT '0',
  `OrderDate` datetime DEFAULT NULL,
  `ShipDate` datetime DEFAULT NULL,
  `DistributorID` int(11) DEFAULT '0',
  `TransactionStatus` tinytext,
  `PaidAmount` decimal(15,2) DEFAULT '0.00',
  `Notes` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `PaymentID` int(11) DEFAULT NULL,
  `PaymentType` tinytext,
  `PaymentDate` datetime DEFAULT NULL,
  `Allowed` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` int(11) DEFAULT NULL,
  `SKU` tinytext,
  `ProductNAme` tinytext,
  `ProductDescriptions` longtext,
  `SupplierID` int(11) DEFAULT '0',
  `CategoryID` int(11) DEFAULT '0',
  `Active` bit(1) DEFAULT b'0',
  `Available` int(11) DEFAULT '0',
  `QuantityPerUnit` int(11) DEFAULT '0',
  `UnitPrice` decimal(15,2) DEFAULT '0.00',
  `MSRP` decimal(15,2) DEFAULT '0.00',
  `AvailableSize` tinytext,
  `AvailableColors` tinytext,
  `Size` tinytext,
  `Color` tinytext,
  `PicureID` int(11) DEFAULT '0',
  `Discount` tinytext,
  `UnitsInStock` int(11) DEFAULT '0',
  `UnitsOnOrder` int(11) DEFAULT '0',
  `Weight` tinytext,
  `Availability` bit(1) DEFAULT b'0',
  `Ranking` int(11) DEFAULT '0',
  `Reviews` tinytext,
  `Notes` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `RoleID` int(11) DEFAULT NULL,
  `RoleName` tinytext,
  `RoleDescription` longtext,
  `AccessPrivileges` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `SupplierID` int(11) DEFAULT NULL,
  `CompanyName` tinytext,
  `ContactName` tinytext,
  `ContactTitle` tinytext,
  `Address1` tinytext,
  `Address2` tinytext,
  `City` tinytext,
  `State` tinytext,
  `Zip` int(11) DEFAULT '0',
  `Phone` tinytext,
  `Fax` tinytext,
  `Email` tinytext,
  `URL` tinytext,
  `PaymentMethod` tinytext,
  `Notes` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supportcases`
--

CREATE TABLE IF NOT EXISTS `supportcases` (
  `CaseID` int(11) DEFAULT NULL,
  `CustomerID` int(11) DEFAULT '0',
  `EmpID` int(11) DEFAULT '0',
  `Status` tinytext,
  `DateCreated` datetime DEFAULT NULL,
  `DateClosed` datetime DEFAULT NULL,
  `Closed` bit(1) DEFAULT b'0',
  `Notes` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) DEFAULT NULL,
  `UserName` tinytext,
  `PasswordDigest` longtext,
  `Active` bit(1) DEFAULT b'0',
  `RoleID` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD UNIQUE KEY `PrimaryKey` (`CategoryID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD UNIQUE KEY `PrimaryKey` (`CustomerID`), ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
 ADD UNIQUE KEY `PrimaryKey` (`DistributorID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
 ADD UNIQUE KEY `PrimaryKey` (`EmpID`), ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
 ADD UNIQUE KEY `OrderID` (`OrderID`), ADD UNIQUE KEY `PrimaryKey` (`OrderItemID`), ADD UNIQUE KEY `ProductID` (`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD UNIQUE KEY `PrimaryKey` (`OrderID`), ADD KEY `CustomerID` (`CustomerID`), ADD KEY `DistributorID` (`DistributorID`), ADD KEY `PaymentID` (`PaymentID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
 ADD UNIQUE KEY `PrimaryKey` (`PaymentID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD UNIQUE KEY `PrimaryKey` (`ProductID`), ADD KEY `CategoryID` (`CategoryID`), ADD KEY `PicureID` (`PicureID`), ADD KEY `SupplierID` (`SupplierID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
 ADD UNIQUE KEY `PrimaryKey` (`RoleID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
 ADD UNIQUE KEY `PrimaryKey` (`SupplierID`);

--
-- Indexes for table `supportcases`
--
ALTER TABLE `supportcases`
 ADD UNIQUE KEY `PrimaryKey` (`CaseID`), ADD KEY `CustomerID` (`CustomerID`), ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD UNIQUE KEY `PrimaryKey` (`UserID`), ADD KEY `RoleID` (`RoleID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
ADD CONSTRAINT `UsersCustomers` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
ADD CONSTRAINT `UsersEmployees` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
ADD CONSTRAINT `OrdersOrderItems` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
ADD CONSTRAINT `ProductsOrderItems` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
ADD CONSTRAINT `CustomersOrders` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`),
ADD CONSTRAINT `DistributorsOrders` FOREIGN KEY (`DistributorID`) REFERENCES `distributors` (`DistributorID`),
ADD CONSTRAINT `PaymentsOrders` FOREIGN KEY (`PaymentID`) REFERENCES `payments` (`PaymentID`);

--
-- Constraints for table `supportcases`
--
ALTER TABLE `supportcases`
ADD CONSTRAINT `CustomersSupportCases` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`),
ADD CONSTRAINT `EmployeesSupportCases` FOREIGN KEY (`EmpID`) REFERENCES `employees` (`EmpID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `RolesUsers` FOREIGN KEY (`RoleID`) REFERENCES `roles` (`RoleID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
