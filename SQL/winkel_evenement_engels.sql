-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 sep 2019 om 00:15
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `winkel_evenement_engels`
--

CREATE TABLE `winkel_evenement_engels` (
  `id` int(10) NOT NULL,
  `evenement_naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dag` int(11) NOT NULL,
  `datum` date NOT NULL,
  `tijd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plaats` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving_kort` longtext COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving` longtext COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving_engels` longtext COLLATE utf8_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `winkel_evenement_engels`
--

INSERT INTO `winkel_evenement_engels` (`id`, `evenement_naam`, `dag`, `datum`, `tijd`, `plaats`, `adres`, `kost`, `beschrijving_kort`, `beschrijving`, `beschrijving_engels`, `facebook_link`) VALUES
(1, 'Workshop Indoor Gardening', 28, '2019-09-28', '16.00 - 17.30', 'Lust', 'Oude Kijk in Het Jatstraat 58, 9712 EL Groningen', 'Entrance &#8364;3,50 (incl. a pastry with coffee/tea)', 'Dit evenement is Engelstalig. We beginnen met het praten over duurzaamheid, dan een discussiepanel over tuinieren en we eindigen met een quiz.', 'Dit evenement is Engelstalig.\r\n<br/><br/>\r\nWe beginnen met het praten over duurzaamheid, dan hebben we een discussiepanel met 2 tuinliefhebbers, praten we over de do\'s en don\'ts van tuinieren en aan het einde hebben we een quiz over het onderwerp. Voor de winnaars hebben we 4 verrassingsprijzen om hen te helpen hun eigen tuin te beginnen.', 'This event will be held in English.\r\n<br/><br/>\r\nWe\'ll start by talking about sustainability, then we have a discussion panel with 2 gardening lovers, we talk about dos and don\'ts of gardening and finally we have a quiz about the topic. For the winners, we have 4 surprise prizes to help them start their own garden.\r\n', 'https://www.facebook.com/events/666118010560372/'),
(2, 'Oddity: Oddity kleding inlevering', 28, '2019-09-28', '10.00 - 17.00', 'Oddity', 'Oosterstraat 16, 9711 NT Groningen', 'Gratis toegang/Free entrance', 'Bij Oddity zijn duurzaamheid en fair fashion belangrijke onderwerpen. Tijdens SuMoFest krijg je bij inlevering van oude Oddity kleding korting op je nieuwe aanschaf.', 'Bij Oddity zijn duurzaamheid en fair fashion belangrijke onderwerpen. Ze blijven zoeken naar prachtige, trendsettende en duurzame merken. Tijdens (SuMoFest en) het Oosterstraatfeest krijg je bij inlevering van oude Oddity kleding -mits in goede staat- 30% van het verkoopbedrag als korting op je nieuwe aanschaf. Nieuwe klanten zullen een mooie korting ontvangen op een kleurworkshop bij besteding van &#8364;100,-  of meer. Kom dus langs in deze prachtige winkel!', 'No English translation', 'https://www.facebook.com/odditywear.nl'),
(3, 'Artishock & Part of Art: Kleuranalyse', 28, '2019-09-28', '13.00 - 17.00', 'Artishock & Part of Art', 'Zwanestraat 8/10, 9712 CL Groningen', 'Gratis toegang/Free entrance', 'De dameszaken Artichock & Part of Art kopen kleding in van hoogwaardige kwaliteit. Kom tijdens het SuMoFest langs en laat je informeren door een kleuranalyst die jou kan vertellen welke kleur het beste bij je past.', 'De dameszaken Artichock & Part of Art kopen kleding in van hoogwaardige kwaliteit. Zij vinden het belangrijk dat een prachtig kledingstuk meerdere seizoenen meegaat. Ook zij zijn altijd op zoek naar duurzame merken. Het merk Filippa K is daar een goed voorbeeld van en zit dan ook al jaren in hun collectie. Kom op de zaterdag tijdens het SuMoFest naar deze mooie zaken en laat je informeren door een kleuranalyst die jou kan vertellen welke kleur het beste bij je past. Daarbij zal er een waardebon van &#8364;150,- worden verloot onder alle klanten die die dag een aankoop doen in de winkel. Dit alles onder het genot van een hapje en een drankje. Zeker een bezoekje waard dus!', 'No English translation', 'https://www.facebook.com/PartofArtArtishock'),
(4, 'Diezijner: \"Het leuke omruilrekje\"', 29, '2019-09-29', '10.00 - 17.00', 'Diezijner', 'Zwanestraat 29, 9712 CJ Groningen', 'Gratis toegang/Free entrance', 'Bij DieZijner vind je tijdloze kleding die met aandacht is gemaakt. Tijdens SuMoFest zul je bij DieZijner \"Het leuke omruilrekje\" vinden.', 'Bij DieZijner vind je tijdloze kleding die met aandacht is gemaakt. Alle kleding bij DieZijner is dan ook van natuurlijke materialen gemaakt. Tijdens SuMoFest zul je bij DieZijner \"Het leuke omruilrekje\" vinden. Hier kun je een mooi kledingstuk -passend bij het DieZijner assortiment- achterlaten en je mag er vervolgens een ander kledingstuk van het rek voor meenemen. Daarbij krijg je -in het weekend van 28 en 29 september-  eenmalig 15% korting op 1 item naar keuze uit het nieuwe assortiment, wanneer je een mooi kledingstuk achterlaat. Na dit weekend kan dit nog steeds, dan krijg je 10% korting. Deze actie loopt tot 31 oktober. \r\n<br/><br/>\r\nDiezijner doet ook mee aan de duurzame modeshow op de Grote markt en heeft een grabbelton in de winkel, vol mooi duurzame cadeaus, waar iedereen die een aankoop heeft gedaan een cadeau uit mag grabbelen. \r\n<br/><br/>\r\nDaarbij komt op zondag 29 september schrijfster Karen Kammeraat een lezing geven. Ze zal tijdens de lezing veel handvatten geven voor een duurzame lifestyle. Het zal een motiverende lezing worden met volop praktische tips. Aansluitend zal er een heerlijke vegan lunch buffet geserveerd worden.\r\nDe lezing begint om 11:00u (inloop vanaf 10:30u). De lunch zal aansluitend zijn om 12:00u.\r\n<br/><br/>\r\nSchuif je aan? De kosten voor de lunch met lezing zijn &#8364;7,50. Geef je op voor 25 september door een mail te sturen naar <a href=\"mailto:info@diezijner.eu\" class=\"a-leesmeer\" target=\"_blank\">info@diezijner.eu</a>\r\n', 'No English translation', 'https://www.facebook.com/events/375754169762465/'),
(5, 'Heksenketel: Closet Sale', 28, '2019-09-28', '10.00 - 17.30', 'Heksenketel', 'Folkingestraat 12b, 9711 JW Groningen', 'Gratis toegang/Free entrance', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale.', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale: een rek met prettig geprijsde kleding, uniek en handgemaakt door henzelf! Zoals ze zelf zeggen: \'Het mes snijdt aan twee kanten: jij een uniek, handgemaakt item voor weinig, wij geen dumping in de kledingcontainer. Samen zijn we duurzaam!\'', 'No English translation', 'https://www.facebook.com/heksenketelmode'),
(6, 'Heksenketel: Closet Sale', 29, '2019-09-29', '12.30 - 16.30', 'Heksenketel', 'Folkingestraat 12b, 9711 JW Groningen', 'Gratis toegang/Free entrance', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale.', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale: een rek met prettig geprijsde kleding, uniek en handgemaakt door henzelf! Zoals ze zelf zeggen: \'Het mes snijdt aan twee kanten: jij een uniek, handgemaakt item voor weinig, wij geen dumping in de kledingcontainer. Samen zijn we duurzaam!\'', 'No English translation', 'https://www.facebook.com/heksenketelmode'),
(7, 'Heksenketel: Closet Sale', 30, '2019-09-30', '13.00 - 17.00', 'Heksenketel', 'Folkingestraat 12b, 9711 JW Groningen', 'Gratis toegang/Free entrance', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale.', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale: een rek met prettig geprijsde kleding, uniek en handgemaakt door henzelf! Zoals ze zelf zeggen: \'Het mes snijdt aan twee kanten: jij een uniek, handgemaakt item voor weinig, wij geen dumping in de kledingcontainer. Samen zijn we duurzaam!\'', 'No English translation', 'https://www.facebook.com/heksenketelmode'),
(8, 'Heksenketel: Closet Sale', 1, '2019-10-01', '10.00 - 18.00', 'Heksenketel', 'Folkingestraat 12b, 9711 JW Groningen', 'Gratis toegang/Free entrance', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale.', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale: een rek met prettig geprijsde kleding, uniek en handgemaakt door henzelf! Zoals ze zelf zeggen: \'Het mes snijdt aan twee kanten: jij een uniek, handgemaakt item voor weinig, wij geen dumping in de kledingcontainer. Samen zijn we duurzaam!\'', 'No English translation', 'https://www.facebook.com/heksenketelmode'),
(9, 'Heksenketel: Closet Sale', 2, '2019-10-02', '10.00 - 18.00', 'Heksenketel', 'Folkingestraat 12b, 9711 JW Groningen', 'Gratis toegang/Free entrance', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale.', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale: een rek met prettig geprijsde kleding, uniek en handgemaakt door henzelf! Zoals ze zelf zeggen: \'Het mes snijdt aan twee kanten: jij een uniek, handgemaakt item voor weinig, wij geen dumping in de kledingcontainer. Samen zijn we duurzaam!\'', 'No English translation', 'https://www.facebook.com/heksenketelmode'),
(10, 'Heksenketel: Closet Sale', 3, '2019-10-03', '10.00 - 18.00', 'Heksenketel', 'Folkingestraat 12b, 9711 JW Groningen', 'Gratis toegang/Free entrance', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale.', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale: een rek met prettig geprijsde kleding, uniek en handgemaakt door henzelf! Zoals ze zelf zeggen: \'Het mes snijdt aan twee kanten: jij een uniek, handgemaakt item voor weinig, wij geen dumping in de kledingcontainer. Samen zijn we duurzaam!\'', 'No English translation', 'https://www.facebook.com/heksenketelmode'),
(12, 'Heksenketel: Closet Sale', 4, '2019-10-04', '10.00 - 18.00', 'Heksenketel', 'Folkingestraat 12b, 9711 JW Groningen', 'Gratis toegang/Free entrance', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale.', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale: een rek met prettig geprijsde kleding, uniek en handgemaakt door henzelf! Zoals ze zelf zeggen: \'Het mes snijdt aan twee kanten: jij een uniek, handgemaakt item voor weinig, wij geen dumping in de kledingcontainer. Samen zijn we duurzaam!\'', 'No English translation', 'https://www.facebook.com/heksenketelmode'),
(13, 'Heksenketel: Closet Sale', 5, '2019-10-05', '10.00 - 17.30', 'Heksenketel', 'Folkingestraat 12b, 9711 JW Groningen', 'Gratis toegang/Free entrance', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale.', 'De Heksenketel verkoopt met een team van 11 mensen hun unieke, lokaal gemaakte kleding, op een prachtige plek in Groningen: De Folkingestraat! Tijdens SuMoFEST introduceren zij een closet sale: een rek met prettig geprijsde kleding, uniek en handgemaakt door henzelf! Zoals ze zelf zeggen: \'Het mes snijdt aan twee kanten: jij een uniek, handgemaakt item voor weinig, wij geen dumping in de kledingcontainer. Samen zijn we duurzaam!\'', 'No English translation', 'https://www.facebook.com/heksenketelmode');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `winkel_evenement_engels`
--
ALTER TABLE `winkel_evenement_engels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `winkel_evenement_engels`
--
ALTER TABLE `winkel_evenement_engels`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
