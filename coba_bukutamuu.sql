

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `bukutamu` (
  `nama` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `komentar` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `bukutamu` (`nama`, `email`, `komentar`) VALUES
('sheli', 'sheli@gmail.com', 'haloo'),
('arif', 'arif@gmail.com', 'whow are you'),
('indri', 'indri@gmail.com', 'any questions ?'),
('ani', 'ani@gmail.com', 'i am fine'),
('aii', 'aii9@gmail.com', 'miss needed'),
('uii', 'uii88@gmail.com', 'do you like me wkwk');
COMMIT;

/