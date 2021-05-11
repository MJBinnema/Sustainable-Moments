-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 sep 2019 om 16:50
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
-- Database: `sustainablemoments`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `evenement_engels`
--

CREATE TABLE `evenement_engels` (
  `id` int(10) NOT NULL,
  `evenement_naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dag` int(11) NOT NULL,
  `datum` date NOT NULL,
  `tijd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plaats` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving_kort` longtext COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving_engels` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `evenement_engels`
--

INSERT INTO `evenement_engels` (`id`, `evenement_naam`, `dag`, `datum`, `tijd`, `plaats`, `adres`, `kost`, `beschrijving_kort`, `beschrijving`, `beschrijving_engels`, `facebook_link`) VALUES
(1, 'Mary Jane Presents Shoes for Thought', 27, '2019-09-27', '19.00 - 21.00', 'Mary Jane \r\nschoenenboetiek', 'Oosterstraat 23, Groningen', 'Free entrance', 'Autumn is coming, so it&#39;s time for us to welcome the new collection. In addition to our regular brands, we are adding Ballūta to our collection this season.', 'Autumn is coming, so it&#39;s time for us to welcome the new collection. In addition to our\r\nregular brands, we are adding Ballūta to our collection this season. Durable and vegan shoes boring? Ballūta proves the opposite! A special collection developed from recycled and new materials made in a traditional way. The shoes are designed by Catarina Pedrosco from Portugal who chooses in her collections between a mix of high fashion, sustainability and art. Mary Jane has the honor to be the first store to work with her.\r\n<br/><br/>\r\nCurious? Visit us on the 27th for a snack, drink, the latest collection and a fashion show in collaboration with <a href=\"https://www.facebook.com/kokotoko050/\" class=\"a-leesmeer\" target=\"_blank\">KOKO TOKO Store for happy products & people</a> and <a href=\"https://www.facebook.com/odditywear.nl/\" class=\"a-leesmeer\" target=\"_blank\">Oddity</a>', 'No English translation', 'https://www.facebook.com/events/746477069116864/'),
(2, '050&Mode ft. Sustainable Moments', 28, '2019-09-28', 'Hele dag', 'Groningen City Centre', '', 'Free entrance', 'After last year\'s Avant-Gardistic show, 050&Mode is going sustainable in 2019. How? By collaborating with Sustainable Moments. The result is a sustainable shopping route.', 'After last year\'s Avant-Gardistic show, <a href=\"https://050enmode.nl/\" class=\"a-leesmeer\" target=\"_blank\">050&Mode</a> is going sustainable in 2019. How? By collaborating with Sustainable Moments. The result is a sustainable shopping route along the surprising shops of Groningen. Most shops will also organize a fun, sustainable event. And, for the first time, a main stage will rise at Groningen\'s Grote Markt. Among others, students of Noorderpoort College and Alfa College will present sustainable fashion collections.', 'After last year\'s Avant-Gardistic show, <a href=\"https://050enmode.nl/\" class=\"a-leesmeer\" target=\"_blank\">050&Mode</a> is going sustainable in 2019. How? By collaborating with Sustainable Moments. The result is a sustainable shopping route along the surprising shops of Groningen. Most shops will also organize a fun, sustainable event. And, for the first time, a main stage will rise at Groningen\'s Grote Markt. Among others, students of Noorderpoort College and Alfa College will present sustainable fashion collections.', 'https://www.facebook.com/events/624341991390919/'),
(3, 'Klein Berlijn', 29, '2019-09-29', '10.00 - 17.00', 'Grote Markt', '', 'Free intrance', 'Already known for five years in Groningen: Klein Berlijn. Like every year, on the last day of September, Groningen\'s Grote Markt will be the large vintage place-to-be.', 'Already known for five years in Groningen: Klein Berlijn. Like every year, on the last day of September, Groningen\'s Grote Markt will be the large vintage place-to-be. Expect a mix of clothing and accessories, furniture, and other curiosities. Plus, Klein Berlijn wouldn\'t be complete without our local DJ\'s playing music and delicious snacks from local food trucks. <a href=\"https://www.facebook.com/kleinberlijngroningen/\" class=\"a-leesmeer\" target=\"_blank\">https://www.facebook.com/kleinberlijngroningen/</a>', 'Already known for five years in Groningen: Klein Berlijn. Like every year, on the last day of September, Groningen\'s Grote Markt will be the large vintage place-to-be. Expect a mix of clothing and accessories, furniture, and other curiosities. Plus, Klein Berlijn wouldn\'t be complete without our local DJ\'s playing music and delicious snacks from local food trucks. <a href=\"https://www.facebook.com/kleinberlijngroningen/\" class=\"a-leesmeer\" target=\"_blank\">https://www.facebook.com/kleinberlijngroningen/</a>', 'https://www.facebook.com/events/643796782776531/'),
(4, 'Docu Night + Dinner', 30, '2019-09-30', '18.30 - 21.30', 'Lust', 'Oude Kijk in Het Jatstraat 58, Groningen', 'Free entrance', 'Enjoy an evening with drinks while watching Before the Flood, a documentary by Leonardo DiCaprio. It gives shocking insights in the world of climate change.', 'Enjoy an evening with drinks while watching Before the Flood, a documentary by Leonardo DiCaprio. It gives shocking insights in the world of climate change and the effects on nature and society. Afterwards, there will be time to discuss, a lowkey opportunity to exchange your ideas. Please join us for this evening with lots of fun, good conversations and eye openers and find out what you can do for the day after tomorrow. \r\n<br/><br/>\r\nBefore the movie starts, you can also join our sustainable dinner, made by Lust. Would you like to join us? Please make a reservation at <a href=\"https://www.facebook.com/LustGroningen/\" class=\"a-leesmeer\" target=\"_blank\">Lust</a>.', 'Enjoy an evening with drinks while watching Before the Flood, a documentary by Leonardo DiCaprio. It gives shocking insights in the world of climate change and the effects on nature and society. Afterwards, there will be time to discuss, a lowkey opportunity to exchange your ideas. Please join us for this evening with lots of fun, good conversations and eye openers and find out what you can do for the day after tomorrow. \r\n<br/><br/>\r\nBefore the movie starts, you can also join our sustainable dinner, made by Lust. Would you like to join us? Please make a reservation at <a href=\"https://www.facebook.com/LustGroningen/\" class=\"a-leesmeer\" target=\"_blank\">Lust</a>.', 'https://www.facebook.com/events/1102490293289919/'),
(5, 'Tweedehandswinkel DenkTank', 30, '2019-09-30', '09.00 - 11.00', 'The Student Hotel', 'Boterdiep 9, 9712 LH Groningen\r\n', 'Only for invitees', 'English translation of this event will be available soon.', 'Naast het inspireren van consumenten zetten we ons ook graag in voor ondernemers. Tijdens deze bijeenkomst gaan we ontdekken of we de tweedehandswinkels in de stad kunnen ondersteunen. Wat zijn de verbindingen tussen de winkels? Zijn er kansen voor samenwerking? Hoe wordt omgegaan met textielafval? \r\n<br/><br/>\r\nWil je graag een uitnodiging ontvangen? Stuur ons dan een berichtje. ', 'No English translation', 'https://www.facebook.com/SustainableMoments/'),
(6, 'Denim Day: Sustainable Raw', 1, '2019-10-01', '16.00 - 22.00', 'The Student Hotel', 'Boterdiep 9, Groningen', 'Free entrance', 'Finally in Groningen: an evening that will be completely devoted to denim! How well do you know the world of denim?', 'Finally in Groningen: an evening that will be completely devoted to denim!\r\n<br/><br/>\r\nHow well do you know the world of denim? What do you know about the fabric, where it\'s made, and what effect that has on our planet? And even more important: what are the sustainable options for denim? \r\n<br/><br/>\r\nIt will be an inspiring evening where everything will be about denim, including drinks and some snacks. There will be a small market with local and sustainable denim. You will also be able to participate in workshops about different ways to customize your denim, to give your old jeans a second life. So don\'t forget to bring your old ones to this event. \r\n<br/><br/>\r\nBesides the market and workshops we\'ll organize (bed) talks with fantastic icons from the world of denim. Who? We\'ll keep you in the dark for a little while longer. Check out our Facebook page <a href=\"https://www.facebook.com/pg/SustainableMoments/posts/\" class=\"a-leesmeer\" target=\"_blank\">https://www.facebook.com/pg/SustainableMoments/posts/</a>  for the most recent updates! ', 'Finally in Groningen: an evening that will be completely devoted to denim!\r\n<br/><br/>\r\nHow well do you know the world of denim? What do you know about the fabric, where it\'s made, and what effect that has on our planet? And even more important: what are the sustainable options for denim? \r\n<br/><br/>\r\nIt will be an inspiring evening where everything will be about denim, including drinks and some snacks. There will be a small market with local and sustainable denim. You will also be able to participate in workshops about different ways to customize your denim, to give your old jeans a second life. So don\'t forget to bring your old ones to this event. \r\n<br/><br/>\r\nBesides the market and workshops we\'ll organize (bed) talks with fantastic icons from the world of denim. Who? We\'ll keep you in the dark for a little while longer. Check out our Facebook page <a href=\"https://www.facebook.com/pg/SustainableMoments/posts/\" class=\"a-leesmeer\" target=\"_blank\">https://www.facebook.com/pg/SustainableMoments/posts/</a>  for the most recent updates! ', 'https://www.facebook.com/events/664635807336697/'),
(7, 'Closet Sale', 3, '2019-10-03', '18.00 - 21.00', 'The Student Hotel', 'Boterdiep 9, Groningen', 'Free entrance', 'This evening, we\'ll transform the foyer of the Student Hotel into an amazing vintage boutique. During the Closet Sale, a group of young fashion lovers will bring their wardrobe to sell. ', 'This evening, we\'ll transform the foyer of the Student Hotel into an amazing vintage boutique. During the Closet Sale, a group of young fashion lovers (boys and girls) will bring their wardrobe to sell. You will find sizes from S to XL. These fashion lovers all have their own style, which means there will definitely be something for everyone. Vintage gems, but also classic and chic items of clothing. There won\'t be any set prices, so feel free to negotiate a good price for you and give the items a new life. \r\n', 'This evening, we\'ll transform the foyer of the Student Hotel into an amazing vintage boutique. During the Closet Sale, a group of young fashion lovers (boys and girls) will bring their wardrobe to sell. You will find sizes from S to XL. These fashion lovers all have their own style, which means there will definitely be something for everyone. Vintage gems, but also classic and chic items of clothing. There won\'t be any set prices, so feel free to negotiate a good price for you and give the items a new life. \r\n', 'https://www.facebook.com/events/2287351551387596/'),
(8, 'Docu Night + Drinks', 4, '2019-10-04', '19.30 - 22.30', 'Lust', 'Oude Kijk in Het Jatstraat 58, Groningen', 'Free entrance', 'Join us this evening to watch the documentary Before the Flood. Before and after the documentary, there will be time to enjoy drinks and discuss ideas and experiences.', 'Join us this evening to watch the documentary <a href=\"https://www.imdb.com/title/tt5929776/\" class=\"a-leesmeer\" target=\"_blank\">Before the Flood</a>, by none other than Leonardo DiCaprio. Everyone\'s welcome this evening, since this topic is relevant for everyone. Before and after the documentary, there will be time to enjoy drinks and discuss ideas and experiences. You\'re not the only one with questions and uncertainties. We\'re looking forward to meet you, exchange ideas and go home filled with new energy. ', 'Join us this evening to watch the documentary Before the Flood, by none other than Leonardo DiCaprio. Everyone\'s welcome this evening, since this topic is relevant for everyone. Before and after the documentary, there will be time to enjoy drinks and discuss ideas and experiences. You\'re not the only one with questions and uncertainties. We\'re looking forward to meet you, exchange ideas and go home filled with new energy. ', 'https://www.facebook.com/events/383709849009862/'),
(9, 'Clothing Swap', 5, '2019-10-05', '11.00 - 17.00', 'Het Floreshuis', 'Floresplein 19, Groningen', 'Entrance &#8364;1,- (incl. one free drink)', 'Heb jij pareltjes van kledingstukken in je kast hangen, maar draag je deze nooit meer? Neem jouw gedragen (maar schone!) kleding mee naar onze kledingruildag. ', 'Heb jij pareltjes van kledingstukken in je kast hangen, maar draag je deze nooit meer? En vind je het zonde om ze weg te gooien? Dit is je kans! Neem jouw gedragen (maar schone!) kleding mee naar onze kledingruildag. Maak iemand anders blij met jouw kleding en vul op een duurzame manier jouw kledingkast met \'nieuwe\' items. Of je nou 1 of 10 items meeneemt: je kan met een volle tas naar huis. Neem vooral ook schoenen, hoeden en andere accessoires mee waarvan je denkt een ander blij mee te kunnen maken. \r\n<br/><br/>\r\nVoor de ouders: Drop je kind in onze speelhoek en struin lekker door al het moois dat wordt aangeboden.\r\n<br/><br/>\r\nJe bent de hele dag vrij om kleding in te brengen en mee te nemen. ', 'Do you have some beautiful pieces in your wardrobe that you don\'t wear anymore? but are too good to just throw away? And do you think it\'s a shame to throw them away? This is your chance! Take your worn (but clean!) clothes with you to our Sustainable ClothingSwap. Make someone else happy with your golden oldies and and fill your wardrobe with \'new\' items in a sustainable way. Whether you bring 1 or 10 items: you can go home with a full bag. Be sure to bring shoes, hats and other accessories that you think can make someone else happy. \r\n<br/><br/>\r\nFor the parents: Drop your child in our play corner and stroll through all the beauties that are offered.\r\n<br/><br/>\r\nYou are free to bring in and take along clothes all day long.', 'https://www.facebook.com/events/490441804856060/'),
(10, 'Oosterstraatfeest', 28, '2019-09-28', '11.00 - 17.00', 'Oosterkwartier Groningen', 'Oosterstraat, Groningen', 'Free entrance', 'The Oosterstraatfeest is slightly different every year. All shops and organizations on the Oosterstraat get a stall at their disposal and decide themselves whether and how they want to make use of it. ', 'The Oosterstraatfeest is slightly different every year. All shops and organizations on the Oosterstraat get a stall at their disposal and decide themselves whether and how they want to make use of it.\r\n<br/><br/>\r\nIn addition to the market, there is plenty of entertainment for all ages in the Oosterkwartier this year. There will be many performances, and children can for example, meet their heroes Elsa and Spiderman.\r\n<br/><br/>\r\nThis year, the Oosterstraatfeest coincides with the first edition of the SuMoFest, which is why several retailers have joined. Together we stand stronger! Come and experience the cosiness of the Oosterkwartier and see what many retailers in Oosterstraat are already doing in terms of sustainability. See you there?\r\n', 'No English translation', 'https://www.facebook.com/OosterkwartierGroningen/'),
(11, 'Het Goede Doel van de Groene Stoel', 2, '2019-10-02', '17.30 - 22.00', 'De Groene Stoel', 'Gedempte Zuiderdiep 26, 9711 HH Groningen', 'Entrance &#8364;25,-', 'Would you like to meet the New Citizens of Groningen, taste their delicious food and\r\nsupport the BeHoCa children&#39;s home in Kenya with your visit? Then you are at the right place at The Groene Stoel, on Wednesday 2 October from 5:30 pm.', 'Would you like to meet the New Citizens of Groningen, taste their delicious food and support the BeHoCa children&#39;s home in Kenya with your visit? Then you are at the right place\r\nat The Groene Stoel, on Wednesday 2 October from 5:30 pm.\r\nOur trainees make a delicious three-course dinner with all kinds of small bites. The proceeds of this dinner go to BeHoCa.\r\n<br/><br/>\r\nDo you want to know more about the wonderful work BeHoCa does and how they help young men on their way to a better future, go to <a href=\"http://www.behoca.nl/\" class=\"a-leesmeer\" target=\"_blank\">www.behoca.nl</a>. The dinner costs &#8364;25,-.\r\nBook a table via our website or call us.\r\n', 'No English translation', 'https://www.facebook.com/events/2403257276628469/'),
(12, 'Crafting with waste', 28, '2019-09-28', '10.00 - 17.00', 'Grote Markt', '', 'Children of all ages', 'The Groningen City Club organizes in collaboration with the four streets: Oude Kijk in \'t Jatstraat / Stoelenraaierstraat / Zwanestraat and Kromme Elleboog the \"Knutselen met Afval\" activity. With children we therefore connect with the themes of sustainability and the circular economy that are central during Sustainable Moments.', '<h5 class=\"p-donkergroen font-weight-bold\">Update 27 september 2019</h5>\r\n<p>\r\nToday the waste was collected from a total of 26 participating entrepreneurs. We collected a small truck full of fun craft materials. Overview of one of the participating stores:</p>\r\n<div class=\"row py-3\">\r\n<div class=\"col col-6 col-sm-6 col-md-4 col-lg-4 py-1\">\r\n    <img src=\"../images/evenementen/Knustelenmetafval_1.png\" class=\"w-100 h-100 img-responsive\">\r\n</div>\r\n<div class=\"col col-6 col-sm-6 col-md-4 col-lg-4 py-1\">\r\n    <img src=\"../images/evenementen/Knustelenmetafval_2.png\" class=\"w-100 h-100 img-responsive\">\r\n</div>\r\n<div class=\"col col-6 col-sm-6 col-md-4 col-lg-4 py-1\">\r\n    <img src=\"../images/evenementen/Knustelenmetafval_3.png\" class=\"w-100 h-100 img-responsive\">\r\n</div>\r\n</div>\r\n<table class=\"table mt-3\">\r\n  <tbody>\r\n    <tr>\r\n        <td>Dille & Kamille</td>\r\n        <td>Kromme Elleboog</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Boekhandel Kunst en Vliegwerk</td>\r\n        <td>Oude Kijk in\'t Jatstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>DAD Design Stories</td>\r\n        <td>Oude Kijk in\'t Jatstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td class=\"pr-2\">De Ganze Fietsen</td>\r\n        <td>Oude Kijk in\'t Jatstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>De Soepwinkel</td>\r\n        <td>Oude Kijk in\'t Jatstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Kastanje Wonen</td>\r\n        <td>Oude Kijk in\'t Jatstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Lust</td>\r\n        <td>Oude Kijk in\'t Jatstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>No25</td>\r\n        <td>Oude Kijk in\'t Jatstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>PS Koffie</td>\r\n        <td>Oude Kijk in\'t Jatstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Reisboekwinkel De Zwerver</td>\r\n        <td>Oude Kijk in\'t Jatstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Stadsakker</td>\r\n        <td>Oude Kijk in\'t Jatstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Wirwar</td>\r\n        <td>Oude Kijk in\'t Jatstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>ART</td>\r\n        <td>Stoeldraaierstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Wereldwinkel</td>\r\n        <td>Stoeldraaierstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>ART</td>\r\n        <td>Stoeldraaierstraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Boutique Busquet</td>\r\n        <td>Zwanestraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Catwalk</td>\r\n        <td>Zwanestraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>De Kaaskop</td>\r\n        <td>Zwanestraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Diezijner</td>\r\n        <td>Zwanestraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Het Bakkerscafe</td>\r\n        <td>Zwanestraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Musjes</td>\r\n        <td>Zwanestraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Newlands</td>\r\n        <td>Zwanestraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>OUI</td>\r\n        <td>Zwanestraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plein 1410</td>\r\n        <td>Zwanestraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Schoenenzaken</td>\r\n        <td>Zwanestraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Simon Levelt</td>\r\n        <td>Zwanestraat</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Woonzooi</td>\r\n        <td>Zwanestraat</td>\r\n    </tr>\r\n  </tbody>\r\n</table>\r\n<br/><br/>\r\n<h5 class=\"p-donkergroen font-weight-bold\">Update 24 September 2019</h5>\r\nAll participating entrepreneurs are already busy collecting waste. Cardboard, plastic, caps, clothes hangers. In total, more than 20 entrepreneurs are already participating and that number is likely to increase. On Friday 27 September we will collect all the waste, so that everyone can enjoy themselves on Friday the 28th on the Grote Markt in the craft shack. Childcare SKSG is also going to craft with waste at their center location. The artworks will be displayed in the shop windows next week! Wondering which entrepreneurs are all participating? Keep an eye on our reporting!\r\n<br/><br/>\r\n<br/><br/>\r\n<h5 class=\"p-donkergroen font-weight-bold\">Crafting with waste</h5>\r\nThe Groningen City Club organizes in collaboration with the four streets: Oude Kijk in \'t Jatstraat / Stoelenraaierstraat / Zwanestraat and Kromme Elleboog the \"Crafting with waste\" activity. With children we therefore connect with the themes of sustainability and the circular economy that are central during Sustainable Moments.\r\n<br/><br/>\r\nChildren of all ages can enjoy themselves on this day with the (clean) waste that entrepreneurs have collected in the four aforementioned streets. We select the most beautiful, best and most creative from all the artworks and they are placed in the windows of one of the participating stores. A professional jury will then compile a top 3 from all these works of art and we have great prizes for that! We also have a nice consolation prize for children who are not among the winners. So come and tinker nicely on the Grote Markt and who knows, maybe your artwork will be in one of the participating stores soon!', '', 'https://www.facebook.com/pages/category/Social-Club/Groningen-City-Club-201538606580319/');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `evenement_engels`
--
ALTER TABLE `evenement_engels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `evenement_engels`
--
ALTER TABLE `evenement_engels`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
