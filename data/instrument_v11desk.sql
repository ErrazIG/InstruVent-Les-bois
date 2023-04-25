-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mar. 25 avr. 2023 à 14:12
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `instrument_project`
--

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

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD CONSTRAINT `fk_instrument_category_instrument1` FOREIGN KEY (`category_instrument_categoryID`) REFERENCES `category_instrument` (`categoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
