-- phpMyAdmin SQL Dump
-- version 4.1.13
-- http://www.phpmyadmin.net
--
-- Hoszt: 127.0.0.1
-- Létrehozás ideje: 2015. Már 31. 11:27
-- Szerver verzió: 5.5.27
-- PHP verzió: 5.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `bt-portal`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `lead` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `text` text COLLATE utf8_hungarian_ci NOT NULL,
  `date` date NOT NULL,
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=5 ;

--
-- A tábla adatainak kiíratása `news`
--

INSERT INTO `news` (`id`, `title`, `lead`, `text`, `date`, `published`) VALUES
(1, 'Új project', ' Az oldal bővítése hamarosan elkezdődik', 'Weboldalunk a közeljövőben alapos változásokon fog keresztül menni. A következő hónapok nagyobb változtatásai között van, hogy facebookon is követni lehet majd minket, valamint egy körlevelet is útjára indítunk majd, hogy mindenki naprakész legyen az új termékekkel/akciókkal kapcsolatban.', '2015-03-31', 1),
(2, 'Új termékek', 'Hamarosan új árukészlettel várjuk vásárlóinkat', '2015 nyarán cégünk lecseréli árukészletét, teljesen megújult kínálattal várunk mindenkit weboldalunkon és a cég telephelyén azokat, akik személyesen szeretnék megnézni mit vesznek. A képgaléria és terméklista frissítése május végén esedékes, így előfordulhat, hogy néhány órára elérhetetlenné válik az oldal. Ezért előre is elnézést kérünk.', '2015-03-28', 1),
(3, 'Megnyílt weboldalunk', 'Mindenkit szeretettel várunk!', '2015-ben megnyílt weboldalunk, mostantól itt is megtalálhatók vagyunk, várjuk a látogatókat képgalériánkkal, termékmintáinkkal és még sok mással. Az oldal nem csak asztali számítógépről, hanem telefonról és tabletről is megtekinthető.', '2015-03-25', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` varchar(25) COLLATE utf8_hungarian_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `text` text COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`) VALUES
('bemutatkozas', '', 'Cégünk egy kis családi vállalkozásként indult az 1970-es évek közepén. Azóta a folyamatos fejlődésnek köszönhetően a Dél-Dunántúli régió egyik kiemelkedő szereplőjévé nőtte ki magát. Fő profilunk a térkövek értékesítése Leier, Semmelrock, Frühwald valamint Barabás térkövek szinte minden fajtája megtalálható a kínálatunkban. Másik termékünk a Gránitból készült sírkővek, amelyek egyenlőre nem találhatók meg a weboldalon, mivel csak egyéni megrendelésre készítünk, egyéni árszabás alapján. Cégünket rendszeresen láthatja az ország nagyobb rendezvényein kiállítóként, nyugodtan jöjjenek oda, tegyék fel kérdéseiket és mi megpróbálunk legjobb tudásunk szerint válaszolni. További kérdéseiket írják meg nekünk emailben, vagy a kapcsolat oldalt használva.');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `productlist`
--

CREATE TABLE IF NOT EXISTS `productlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(60) CHARACTER SET utf8 NOT NULL,
  `name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `price` varchar(60) CHARACTER SET utf8 NOT NULL,
  `size` varchar(60) CHARACTER SET utf8 NOT NULL,
  `consumption` varchar(60) CHARACTER SET utf8 NOT NULL,
  `img` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=10 ;

--
-- A tábla adatainak kiíratása `productlist`
--

INSERT INTO `productlist` (`id`, `code`, `name`, `price`, `size`, `consumption`, `img`) VALUES
(0, '<b><u>Termékkód</u></b>', '<b><u>Név</u></b>', '<b><u>Ár</u></b>', '<b><u>Méret</u></b>', '<b><u>Anyaghasználat</u></b>', '<b><u>Kép</u></b>'),
(1, '102', 'T&eacute;glakő t&eacute;rburkolat', '8000 FT', '6x12x24 cm', '15 DB / m2', '<a href="imgs/imagegallery/no1.jpg" data-lightbox="roadtrip">Kép megjelenítése</a>'),
(2, '860', 'Semmelrock Nardo t&eacute;rkő', '6000 FT', '8x12x24 cm', '35 DB / m2', '<a href="imgs/imagegallery/no2.jpg" data-lightbox="roadtrip">Kép megjelenítése</a>'),
(3, '163', 'Leier Classic-line', '1500 FT', '5x12x24 cm', '6,1 DB / m2', '<a href="imgs/imagegallery/allinone.jpg" data-lightbox="roadtrip">Kép megjelenítése</a>'),
(5, '199', 'Leier Quadro kocka', '680 FT', '5x12x24 cm', '156 DB / m2', '<a href="imgs/imagegallery/no4.jpg" data-lightbox="roadtrip">Kép megjelenítése</a>'),
(6, '180', 'Leier Centrum nat&uacute;r', '5500 FT', '6x12x24 cm', 'V&aacute;ltoz&oacute;', '<a href="imgs/imagegallery/no7.jpg" data-lightbox="roadtrip">Kép megjelenítése</a>'),
(8, '250', 'Fr&uuml;hwald Parolin', 'X FT', '5x12x24 cm', '42 DB / m2', '<a href="imgs/imagegallery/no6.jpg" data-lightbox="roadtrip">Kép megjelenítése</a>'),
(9, '059', 'Fr&uuml;hwald t&eacute;rbukolat', '5600 FT', '19,2x22,6x6cm', 'V&aacute;ltoz&oacute;', '<a href="imgs/imagegallery/no8.jpg" data-lightbox="roadtrip">Kép megjelenítése</a>');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `id` tinyint(4) NOT NULL,
  `description` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `rights`
--

INSERT INTO `rights` (`id`, `description`) VALUES
(1, 'Fő Adminisztrátor'),
(2, 'Adminisztrátor');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `upass` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_hungarian_ci NOT NULL,
  `rights` tinyint(4) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=4 ;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `uname`, `upass`, `name`, `email`, `rights`, `active`) VALUES
(1, 'Főadmin', '$2y$10$wRx74MF6DCUahZQ8jrnyyePhHnKF6X7YUw7zrznJFAAwD.Oa3Q6Ym', 'Beck Tibor', 'screer@gmail.hu', 1, 1),
(2, 'Admin', '$2y$10$k2Is.d.62/iZCCZV2jqlf.HAWA3gizGVVkvCqxeAo7d6Gzdoq3.Iy', 'Kis Pista', 'kis.pista@gmail.com', 2, 1),
(3, 'Admin2', '$2y$10$dsK8i0mDFyG9RIo5x.IYNufj1nnQKNweqH4C8S5a9fc07H1oRWO96', 'Nagy J&oacute;zsef', 'nagy.jozsef@hotmail.com', 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
