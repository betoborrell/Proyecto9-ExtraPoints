-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2012 at 01:08 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `extrapoints`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnoclase`
--

CREATE TABLE `alumnoclase` (
  `idAlumno` int(10) unsigned NOT NULL,
  `idClase` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idAlumno`,`idClase`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumnoclase`
--


-- --------------------------------------------------------

--
-- Table structure for table `alumnoequipo`
--

CREATE TABLE `alumnoequipo` (
  `idAlumno` int(10) unsigned NOT NULL,
  `idEquipo` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idAlumno`,`idEquipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumnoequipo`
--


-- --------------------------------------------------------

--
-- Table structure for table `alumnopuntos`
--

CREATE TABLE `alumnopuntos` (
  `idAlumno` int(10) unsigned NOT NULL,
  `idPunto` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idAlumno`,`idPunto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumnopuntos`
--


-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--


-- --------------------------------------------------------

--
-- Table structure for table `clase`
--

CREATE TABLE `clase` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `clave` varchar(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `horario` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `clase`
--


-- --------------------------------------------------------

--
-- Table structure for table `equipo`
--

CREATE TABLE `equipo` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `numIntegrantes` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipo`
--


-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Dumping data for table `login_attempts`
--


-- --------------------------------------------------------

--
-- Table structure for table `maestroclase`
--

CREATE TABLE `maestroclase` (
  `idMaestro` int(10) unsigned NOT NULL,
  `idClase` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idMaestro`,`idClase`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maestroclase`
--


-- --------------------------------------------------------

--
-- Table structure for table `maestropuntos`
--

CREATE TABLE `maestropuntos` (
  `idMaestro` int(10) unsigned NOT NULL,
  `idPunto` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idMaestro`,`idPunto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maestropuntos`
--


-- --------------------------------------------------------

--
-- Table structure for table `puntos`
--

CREATE TABLE `puntos` (
  `idPunto` int(10) unsigned NOT NULL,
  `idPersona` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(50) NOT NULL,
  PRIMARY KEY (`idPunto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puntos`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(3, 'A01086745', '$2a$08$R2oDlTCPbr8BLtQ3KmXeW.0fuoDRxqGnUwZmKhKsJp2r.wm3/M0GS', 'jav.forzza@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '192.168.0.115', '2012-02-09 23:26:56', '2012-02-02 17:38:34', '2012-02-09 23:26:56');
INSERT INTO `users` VALUES(5, 'A01031357', '$2a$08$E93rSW5ECpQttxW9Sqg4LOY0qowYvjosleeRBtWgOk5fhmeV9DvMu', 'a01031357@itesm.mx', 1, 0, NULL, NULL, NULL, NULL, NULL, '192.168.0.115', '0000-00-00 00:00:00', '2012-02-10 00:43:11', '2012-02-10 00:43:11');
INSERT INTO `users` VALUES(6, 'A01031358', '$2a$08$msoUSlslScmguS7yGPtHj.ADETthxyJM5blnPKWo/Eth0II5VeemG', 'a01031358@itesm.mx', 1, 0, NULL, NULL, NULL, NULL, NULL, '192.168.0.115', '0000-00-00 00:00:00', '2012-02-10 00:43:11', '2012-02-10 00:43:11');
INSERT INTO `users` VALUES(7, 'A01031359', '$2a$08$j.4F8AxRTu3dA8ZV6y29ReZpuJA7qupplp9q2DtzyLC/zVQ9vI.Nu', 'a01031359@itesm.mx', 1, 0, NULL, NULL, NULL, NULL, NULL, '192.168.0.115', '0000-00-00 00:00:00', '2012-02-10 00:43:11', '2012-02-10 00:43:11');
INSERT INTO `users` VALUES(8, 'A01031360', '$2a$08$G9IT9MX4pweUm4scJIKS7uZtc.03h7LRmLSqDt18DsyzzPYHD5.f2', 'a01031360@itesm.mx', 1, 0, NULL, NULL, NULL, NULL, NULL, '192.168.0.115', '0000-00-00 00:00:00', '2012-02-10 00:43:11', '2012-02-10 00:43:11');
INSERT INTO `users` VALUES(9, 'A01031361', '$2a$08$EHcHOPy7/8wtzX7t8VQFxu2m.zUF8yMnjv1TcMXF4cwDJGmhJ5iau', 'a01031361@itesm.mx', 1, 0, NULL, NULL, NULL, NULL, NULL, '192.168.0.115', '0000-00-00 00:00:00', '2012-02-10 00:43:11', '2012-02-10 00:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_autologin`
--

INSERT INTO `user_autologin` VALUES('02baf1e3bafdaabe981c043198f243ad', 1, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_2) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.46 Safari/535.11', '192.168.0.115', '2012-02-10 00:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellido_m` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `apellido_p` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `fechaNac` date DEFAULT NULL,
  `level` tinyint(3) NOT NULL,
  `puntos` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` VALUES(1, 3, 'Javier', 'Ayala', 'Araujo', '1988-11-10', 1, 1234);
INSERT INTO `user_profiles` VALUES(3, 5, 'Alberto', 'García', 'Borrell', '1988-09-26', 3, 0);
INSERT INTO `user_profiles` VALUES(4, 6, 'Juan', 'Garza', 'Pérez', '1989-02-01', 3, 0);
INSERT INTO `user_profiles` VALUES(5, 7, 'Roberto', 'Ramos', 'Jiménez', '1987-12-12', 3, 0);
INSERT INTO `user_profiles` VALUES(6, 8, 'Alejandro', 'Garza', 'Garza', '1988-10-23', 3, 0);
INSERT INTO `user_profiles` VALUES(7, 9, 'Ricardo', 'Ibarra', 'García', '1989-06-23', 3, 0);
