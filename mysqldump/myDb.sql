CREATE DATABASE IF NOT EXISTS myDb;
USE myDb;

CREATE TABLE `Person` (
    `id` int(11) NOT NULL,
    `name` varchar(20) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = latin1;
INSERT INTO
  `Person` (`id`, `name`)
VALUES
  (1, 'Conf'),
  (2, 'Nipsu'),
  (3, 'Beyar');