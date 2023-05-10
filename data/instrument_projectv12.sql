-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mer. 10 mai 2023 à 09:12
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `instrument_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE IF NOT EXISTS `artiste` (
  `artisteID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `wiki_url` varchar(250) DEFAULT NULL,
  `website_url` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`artisteID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`artisteID`, `nom`, `wiki_url`, `website_url`) VALUES
(1, 'Vincent Lauzer', 'https://fr.wikipedia.org/wiki/Vincent_Lauzer', 'http://www.vincentlauzer.com/'),
(2, 'Georges Barrère', 'https://fr.wikipedia.org/wiki/Georges_Barr%C3%A8re', NULL),
(3, 'Nathalie Boucheix', 'https://fr.wikipedia.org/wiki/Nathalie_Boucheix', NULL),
(4, 'James Cotton', 'https://fr.wikipedia.org/wiki/James_Cotton', 'http://jamescottonsuperharp.com/'),
(5, 'Buddy DeFranco', 'https://fr.wikipedia.org/wiki/Buddy_DeFranco', 'http://www.buddydefranco.com/'),
(6, 'Josef Horák', 'https://fr.wikipedia.org/wiki/Josef_Hor%C3%A1k', 'http://www.horakbasscl.cz/'),
(7, 'Sophie Alour', 'https://fr.wikipedia.org/wiki/Sophie_Alour', 'http://www.sophiealour.com/'),
(8, 'Timothée de Thèbes', 'https://fr.wikipedia.org/wiki/Timoth%C3%A9e_de_Th%C3%A8bes', NULL),
(9, 'Bruno Giner', 'https://fr.wikipedia.org/wiki/Bruno_Giner', 'https://brunoginer.wixsite.com/brunoginer'),
(10, 'Yusef Lateef', 'https://fr.wikipedia.org/wiki/Yusef_Lateef', 'https://yuseflateef.com/');

-- --------------------------------------------------------

--
-- Structure de la table `category_instrument`
--

DROP TABLE IF EXISTS `category_instrument`;
CREATE TABLE IF NOT EXISTS `category_instrument` (
  `categoryID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat_instrument` varchar(30) NOT NULL,
  `cat_description` text NOT NULL,
  `cat_img` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category_instrument`
--

INSERT INTO `category_instrument` (`categoryID`, `cat_instrument`, `cat_description`, `cat_img`) VALUES
(5, 'Biseau', 'La flûte est un instrument de musique à vent qui produit des sons grâce à l\'oscillation d\'un jet d\'air autour d\'un biseau droit, en encoche ou en anneau. Selon le type de flûte, le souffle peut être dirigé librement par l\'instrumentiste ou canalisé par un conduit. Les flûtes traversières, les quenas et les flûtes de Pan font partie des instruments dont le souffle est dirigé librement par l\'instrumentiste. Quant aux flûtes à bec, elles nécessitent que le musicien émette lui-même le souffle, tandis que les jeux d\'orgue utilisent une soufflerie mécanique pour produire le son.\r\nLes flûtes sont généralement de forme tubulaire, mais elles peuvent aussi être globulaires et fabriquées à partir de divers matériaux tels que la graminée, le bois, l\'os, la corne, la pierre, la terre cuite, le plastique, le métal, l\'ivoire ou le cristal. Elles peuvent être formées d\'un ou de plusieurs tuyaux, avec ou sans trous, ou encore posséder une coulisse.\r\nLa flûte est un instrument de musique très ancien, qui a été utilisé dans de nombreuses cultures à travers l\'histoire. Elle est appréciée pour sa sonorité douce et mélodieuse, ainsi que pour sa polyvalence. Elle est souvent utilisée en musique classique, mais elle est également présente dans de nombreux autres genres musicaux, tels que le jazz, la musique traditionnelle, la musique populaire et la musique du monde. La flûte est un instrument de musique fascinant qui continue d\'être utilisé et apprécié par les musiciens et les auditeurs du monde entier.', 'https://mimo-international.com/media/CM/IMAGE/CMIM000029065.jpg'),
(6, 'Anche Libre', 'Les instruments à anche libre sont des instruments à vent qui utilisent une anche libre, c\'est-à-dire une anche qui peut se déplacer librement de part et d\'autre de sa position de repos. Le déplacement de la colonne d\'air pour mettre cette anche en vibration peut être produit par le souffle de l\'instrumentiste, comme dans le cas des harmonicas et des mélodicas, par un mécanisme à bras ou à pieds, comme dans le cas des accordéons et des harmoniums, ou encore par une soufflerie mécanique, comme dans certains tuyaux d\'orgues, de positifs et de limonaires. La taille de l\'anche joue un rôle important dans la hauteur de la note produite.\r\nLe sheng, un orgue à bouche chinois datant de 1100 ans avant J.-C., est le plus ancien instrument à anche libre connu. Les instruments à anche libre sont très répandus et populaires dans de nombreuses cultures à travers le monde et sont utilisés dans de nombreux genres musicaux, tels que la musique classique, la musique traditionnelle, le jazz et la musique populaire.\r\nEn outre, certains diapasons acoustiques utilisent également un système à anche libre pour produire des sons. Les instruments à anche libre offrent une grande variété de sonorités et sont souvent appréciés pour leur expressivité et leur capacité à produire une large gamme de nuances et de timbres.', 'https://mimo-international.com/mimo/image.ashx?q=http://www.mimo-international.com/media/MDMB/IMAGE/MDMB001615_ID_20150402_000_002_02.jpg'),
(7, 'Anche Simple', 'Un instrument à anche simple est un instrument à vent qui utilise une anche en bois, en roseau, en matériau composite ou en métal. Cette anche est immobilisée d\'un côté sur un bec, qui peut être en métal, en cristal, en matière plastique ou en ébonite, avec une ligature, et dont l\'autre côté vient battre l\'ouverture présente dans ce bec sous l\'effet de la colonne d\'air. On parle alors d\'anche simple battante, également connue sous le nom d\'anche hétéroglotte. Dans ce système, un seul élément est mobile, contrairement à l\'anche double.\r\nDans le cas des instruments primitifs ou traditionnels, l\'anche simple était taillée directement dans le corps de l\'instrument, ce qui est connu sous le nom d\'anche idioglotte. Les instruments à anche simple comprennent la clarinette, le saxophone, le hautbois et le basson, pour n\'en citer que quelques-uns. Ces instruments sont populaires dans de nombreux genres de musique, notamment le jazz, la musique classique et la musique traditionnelle. La taille et la forme de l\'anche jouent un rôle important dans le son produit par l\'instrument', 'https://mimo-international.com/mimo/image.ashx?q=http://www.mimo-international.com/media/MINIM/UEDIN/IMAGE/0032094c.jpg'),
(8, 'Anche Double', 'Les instruments à anches doubles utilisent une anche formée de deux lamelles, généralement en roseau finement grattées, pour produire des sons doux et mélancoliques. Ils peuvent produire une variété de sons grâce à plusieurs modes de création de la colonne d\'air, tels que le souffle du musicien ou une soufflerie mécanique. Le système de l\'anche double est composé de deux éléments flexibles mobiles, ce qui permet aux musiciens de créer des nuances subtiles et des variations de ton. Les instruments à anches doubles sont utilisés dans de nombreux genres musicaux, de la musique classique à la musique folklorique. Les hautbois, les bassons et les cors anglais sont couramment utilisés dans les orchestres et les ensembles de chambre, tandis que les musettes, les veuzes et les cornemuses sont utilisées en musique folklorique. Leur son unique et leur élégance visuelle en font des instruments fascinants et polyvalents qui ont résisté à l\'épreuve du temps.', 'https://mimo-international.com/mimo/image.ashx?q=http://www.mimo-international.com/media/MINIM/BTNRP/IMAGE/f425ef1c747066384844190d7ee01be2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contactID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL,
  `datemsg` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email_contact` varchar(250) NOT NULL,
  PRIMARY KEY (`contactID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

DROP TABLE IF EXISTS `instrument`;
CREATE TABLE IF NOT EXISTS `instrument` (
  `instrumentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `date_instrument` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category_instrument_categoryID` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`instrumentID`),
  KEY `fk_instrument_category_instrument1_idx` (`category_instrument_categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `instrument`
--

INSERT INTO `instrument` (`instrumentID`, `titre`, `description`, `date_instrument`, `category_instrument_categoryID`) VALUES
(1, 'Flûte à bec', 'La flûte à bec est un instrument de musique à vent très ancien, connu depuis l\'Antiquité. Elle est constituée d\'un tube cylindrique en bois avec huit trous et une embouchure en forme de bec. Il existe plusieurs tailles de flûtes à bec, allant de la flûte soprano la plus courante, à la flûte contrebasse la plus grande.\r\n\r\nLa flûte à bec est souvent utilisée pour l\'enseignement de la musique à l\'école, car elle est facile à jouer et peu coûteuse à acheter. Elle est également très populaire dans la musique baroque, où elle était souvent utilisée comme instrument principal ou d\'accompagnement.\r\n\r\nCependant, la flûte à bec a connu une période de déclin à partir du XVIIIe siècle, car elle était considérée comme un instrument \"populaire\" et non \"sérieux\". Cependant, au cours du XXe siècle, elle a connu un renouveau grâce aux mouvements de musique ancienne et à l\'intérêt croissant pour les instruments historiques.\r\n\r\nAujourd\'hui, la flûte à bec est jouée dans une grande variété de genres musicaux, allant de la musique baroque et classique à la musique folklorique et contemporaine. Les flûtistes à bec professionnels peuvent être trouvés dans des orchestres, des ensembles de musique ancienne et des groupes de musique folklorique.\r\n\r\nEn résumé, la flûte à bec est un instrument de musique à vent polyvalent qui a une longue histoire et qui continue d\'être apprécié dans le monde entier. Que ce soit pour l\'enseignement de la musique à l\'école ou pour jouer de la musique professionnelle, la flûte à bec offre une belle sonorité et une grande variété de possibilités musicales.', '2023-04-25 15:06:51', 5),
(2, 'Flûte traversière', 'La flûte traversière est un instrument à vent qui est composé d\'un tube cylindrique percé de plusieurs trous et équipé d\'un bec en forme d\'embouchure. Elle est jouée en soufflant de l\'air dans le bec et en utilisant les doigts pour boucher et ouvrir les trous afin de produire des notes différentes.\r\n\r\nLes flûtes traversières modernes sont généralement en métal, en argent ou en bois, bien que des matériaux tels que le plastique et la fibre de carbone soient également utilisés. Elles sont disponibles dans différents tailles, allant de la petite flûte piccolo à la flûte basse. Les flûtes traversières ont une tessiture large et peuvent produire des sons doux et mélodieux ainsi que des sons puissants et percutants.\r\n\r\nLes flûtes traversières sont souvent utilisées dans les orchestres, les ensembles de musique de chambre, les groupes de jazz et les groupes de musique pop. Elles sont également utilisées en solo et sont populaires auprès des musiciens professionnels et amateurs. Les flûtistes traversiers peuvent jouer une grande variété de styles musicaux, allant de la musique classique à la musique contemporaine.\r\n\r\nPour jouer de la flûte traversière, il faut avoir une bonne technique de respiration et de souffle, ainsi qu\'une bonne coordination des doigts pour jouer les notes avec précision. Les flûtistes traversiers peuvent également utiliser des techniques spéciales, telles que le vibrato et le trille, pour ajouter de l\'expression à leur jeu.', '2023-04-25 15:10:02', 5),
(3, 'Accordéon', 'L\'accordéon est un instrument de musique à clavier et à anches libres. Il se compose généralement d\'un soufflet en forme de boîte et de deux claviers, un pour chaque main. Les touches du clavier sont reliées à des anches libres, qui produisent le son lorsque le soufflet est actionné. L\'accordéon est souvent utilisé dans les musiques populaires comme le tango, la valse, le musette ou encore le folk, mais il peut également être utilisé dans les musiques classiques contemporaines. C\'est un instrument polyvalent qui peut être joué en solo, en duo ou en groupe. Le joueur d\'accordéon doit être capable de contrôler la pression du soufflet pour produire une variété de nuances dynamiques, allant du pianissimo au fortissimo. Il doit également avoir une bonne maîtrise des claviers pour jouer des mélodies rapides et complexes. L\'accordéon est un instrument à la fois mélodique et harmonique, capable de produire des accords complexes et des lignes mélodiques expressives. Son timbre unique et son style de jeu dynamique en font un instrument apprécié dans de nombreux genres musicaux.', '2023-04-25 15:12:36', 6),
(4, 'Harmonica', 'La harmonica, également connue sous le nom de \"harmo\" ou d\'harmonica à bouche, est un petit instrument à vent portatif. Elle se compose d\'un boîtier en métal ou en plastique contenant une série de lames de métal, appelées anches, qui sont maintenues en place par des plaques de fixation et qui vibrent lorsqu\'on souffle dans l\'instrument.\r\n\r\nLes harmonicas sont généralement classées en deux catégories principales : les diatoniques et les chromatiques. Les harmonicas diatoniques sont conçues pour jouer dans une seule tonalité, tandis que les chromatiques ont une série de boutons sur le côté pour modifier la hauteur des notes et jouer dans différentes tonalités.\r\n\r\nLes harmonicas ont un son unique et distinctif, qui peut varier de doux et mélodique à fort et percutant. Elles sont utilisées dans une variété de genres musicaux, notamment le blues, le rock, la country et la musique folklorique.\r\n\r\nJouer de l\'harmonica peut être un excellent moyen de se détendre et de s\'exprimer. Il existe de nombreux tutoriels en ligne et des livres d\'apprentissage pour les débutants, ce qui en fait un instrument accessible à tous les niveaux de compétence musicale.', '2023-04-25 15:15:51', 6),
(5, 'Clarinette', 'Les clarinettes sont des instruments à vent de la famille des bois, qui produisent du son à travers une anche simple. Leur son est produit lorsque l\'air soufflé par le musicien traverse l\'anche, créant ainsi des vibrations qui sont amplifiées par l\'instrument. Les clarinettes ont une grande flexibilité de son, permettant aux musiciens de produire une gamme de nuances et de tonalités différentes.\r\n\r\nLes clarinettes modernes sont souvent fabriquées en bois, en ébonite ou en matériau synthétique, avec un corps cylindrique percé de trous qui sont couverts ou découverts par les doigts du musicien pour produire différentes notes. Les clarinettes ont également des clés pour aider à produire des notes supplémentaires et des altérations, ce qui leur permet de jouer dans une grande variété de styles et de genres musicaux.\r\n\r\nLes clarinettes sont souvent utilisées dans les orchestres classiques et les ensembles de musique de chambre, mais elles peuvent également être entendues dans la musique de jazz, de klezmer et de musique populaire. Les clarinettes sont également populaires dans les fanfares militaires et les ensembles de musique traditionnelle, tels que les bandas et les bandes de gaitas.\r\n\r\nLes différentes tailles de clarinettes incluent la clarinette soprano, la clarinette alto, la clarinette basse et la clarinette contrebasse. Les clarinettes soprano et alto sont les plus courantes, tandis que les clarinettes basse et contrebasse sont souvent utilisées pour leur son riche et profond dans les sections de basse des orchestres.', '2023-04-25 15:18:47', 7),
(6, 'Clarinette basse', 'Les clarinettes basses sont des instruments à vent de la famille des clarinettes, qui produisent des sons graves et profonds. Elles ont une longueur considérablement plus longue que les clarinettes standard, ce qui leur permet de produire des notes plus basses. La clarinette basse est souvent utilisée dans les orchestres symphoniques et les ensembles de jazz pour produire des notes graves et puissantes.\r\n\r\nLa clarinette basse est un instrument polyvalent, capable de jouer une large gamme de genres musicaux allant de la musique classique au jazz, en passant par le blues et la musique du monde. Le son riche et profond qu\'elle produit peut être utilisé pour ajouter de la profondeur et de la puissance à une pièce musicale, ou pour créer des mélodies douces et expressives.\r\n\r\nLes clarinettes basses sont souvent fabriquées en bois, bien qu\'il existe également des modèles en résine ou en matières synthétiques. Elles disposent également d\'un système de clés complexe, avec plusieurs clés supplémentaires par rapport aux clarinettes standard pour permettre de jouer des notes plus basses.\r\n\r\nJouer de la clarinette basse nécessite une technique particulière, car l\'instrument est assez lourd et volumineux. Les joueurs doivent également avoir une bonne maîtrise de leur respiration pour produire des notes claires et précises.', '2023-04-25 15:20:27', 7),
(7, 'Saxophone', 'Le saxophone est un instrument à vent populaire qui a été inventé par Adolphe Sax en 1840. Cet instrument se compose d\'un corps principal avec un bec en métal et des clés qui sont actionnées pour produire différentes notes. Il existe plusieurs types de saxophones, allant du plus petit, le sopranino, au plus grand, le sousaphone.\r\n\r\nLe son du saxophone est chaud, doux et expressif, et peut être utilisé dans une variété de genres musicaux, notamment le jazz, le blues, la pop et le classique. Les saxophonistes célèbres incluent John Coltrane, Charlie Parker, Sonny Rollins et Stan Getz, entre autres.\r\n\r\nLe saxophone est fabriqué à partir de matériaux de haute qualité tels que le laiton, l\'argent et l\'or. Le laiton est le matériau le plus courant pour la fabrication de saxophones, car il est durable et a une belle sonorité. Les saxophones en argent et en or sont souvent utilisés par les professionnels pour leur qualité sonore supérieure.\r\n\r\nLe saxophone est un instrument polyvalent qui peut être utilisé dans une variété de contextes musicaux. Les saxophonistes peuvent jouer en solo, en duo ou en groupe, et peuvent également jouer avec d\'autres instruments tels que la guitare, la basse, la batterie et les claviers.\r\n\r\nLa technique de jeu du saxophone nécessite une bonne respiration, une bonne posture et un contrôle précis des doigts pour produire une belle sonorité. Les saxophonistes doivent également être capables de jouer des gammes, des arpèges et des notes en altération avec fluidité et précision.', '2023-04-25 16:01:08', 7),
(8, 'Aulos', 'L\'aulos est un ancien instrument de musique à vent, utilisé dans la Grèce antique. Cet instrument était souvent utilisé en duo, avec deux joueurs produisant des notes simultanément. L\'aulos est considéré comme l\'un des ancêtres des instruments à vent modernes tels que la flûte et le saxophone.\r\n\r\nL\'aulos se compose d\'un corps en bois avec deux tuyaux parallèles, chacun avec une anche double. Les joueurs de l\'aulos doivent souffler dans les deux tuyaux simultanément pour produire des sons harmonieux. Les anches doubles produisent une sonorité forte et expressive qui était utilisée pour accompagner les cérémonies religieuses, les jeux olympiques et les théâtres.\r\n\r\nLe son de l\'aulos peut être comparé à celui d\'une clarinette ou d\'un hautbois. Cet instrument peut produire une large gamme de notes, allant du grave au aigu. Les joueurs d\'aulos utilisent souvent des techniques de respiration et de doigté pour produire des notes en altération.\r\n\r\nL\'aulos était un instrument important dans la musique antique grecque et était souvent utilisé pour accompagner des poèmes épiques.', '2023-04-25 16:12:07', 8),
(9, 'Basson', '', '2023-04-25 13:29:11', 8),
(10, 'Hautbois', '', '2023-04-25 13:29:21', 8);

-- --------------------------------------------------------

--
-- Structure de la table `instrument_has_artiste`
--

DROP TABLE IF EXISTS `instrument_has_artiste`;
CREATE TABLE IF NOT EXISTS `instrument_has_artiste` (
  `instrument_instrumentID` int(10) UNSIGNED NOT NULL,
  `artiste_artisteID` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`instrument_instrumentID`,`artiste_artisteID`),
  KEY `fk_instrument_has_artiste_artiste1_idx` (`artiste_artisteID`),
  KEY `fk_instrument_has_artiste_instrument1_idx` (`instrument_instrumentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `instrument_has_artiste`
--

INSERT INTO `instrument_has_artiste` (`instrument_instrumentID`, `artiste_artisteID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `idmedias` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `instrumentID` int(10) UNSIGNED NOT NULL,
  `type_media` int(3) NOT NULL COMMENT '1.Image \\\\\\\\r\\\\\\\\n2.Video\\\\\\\\r\\\\\\\\n3.Audio',
  `media_url` varchar(250) NOT NULL,
  PRIMARY KEY (`idmedias`),
  KEY `instrumentID` (`instrumentID`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`idmedias`, `instrumentID`, `type_media`, `media_url`) VALUES
(7, 1, 1, 'https://mimo-international.com/mimo/image.ashx?q=https://mimo-international.com/media/CM/IMAGE/CMIM000013828.jpg'),
(10, 2, 1, 'https://mimo-international.com/mimo/image.ashx?q=http://www.mimo-international.com/media/ULEI/IMAGE/1246.jpg'),
(13, 3, 1, 'https://mimo-international.com/mimo/image.ashx?q=https://mimo-international.com/media/CM/IMAGE/CMIM000022838.jpg'),
(16, 4, 1, 'https://mimo-international.com/mimo/image.ashx?q=http://www.mimo-international.com/media/MDMB/IMAGE/MDMB001581_ID_20150402_000_002_02.jpg'),
(19, 5, 1, 'https://mimo-international.com/mimo/image.ashx?q=http://www.mimo-international.com/media/AF/IMAGE/1988_166_f.jpg'),
(22, 6, 1, 'https://mimo-international.com/mimo/image.ashx?q=https://mimo-international.com/media/CM/IMAGE/CMIM000013568.jpg'),
(25, 7, 1, 'https://mimo-international.com/mimo/image.ashx?q=https://mimo-international.com/media/MF-NIC/IMAGE/MFIM000027405.jpg'),
(28, 8, 1, 'https://mimo-international.com/mimo/image.ashx?q=https://mimo-international.com/media/CM/IMAGE/CMIM000029485.jpg'),
(31, 9, 1, 'https://mimo-international.com/mimo/image.ashx?q=https://mimo-international.com/media/CM/IMAGE/CMIM000014281.jpg'),
(34, 10, 1, 'https://mimo-international.com/mimo/image.ashx?q=https://mimo-international.com/media/CM/IMAGE/CMIM000013383.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `mail_user` varchar(250) NOT NULL,
  `user_pwd` varchar(250) NOT NULL,
  `uniqID` varchar(100) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userID`, `username`, `mail_user`, `user_pwd`, `uniqID`) VALUES
(1, 'admin', 'fredcraft97@hotmail.fr', '$2y$10$61FishRonkmg9yRIupkXWeA35YCujTT.xwxpwTfrN/msN49fLOgr.', 'bois6440ecfb5f8868.17680220');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD CONSTRAINT `fk_instrument_category_instrument1` FOREIGN KEY (`category_instrument_categoryID`) REFERENCES `category_instrument` (`categoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `instrument_has_artiste`
--
ALTER TABLE `instrument_has_artiste`
  ADD CONSTRAINT `fk_instrument_has_artiste_artiste1` FOREIGN KEY (`artiste_artisteID`) REFERENCES `artiste` (`artisteID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_instrument_has_artiste_instrument1` FOREIGN KEY (`instrument_instrumentID`) REFERENCES `instrument` (`instrumentID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`instrumentID`) REFERENCES `instrument` (`instrumentID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;