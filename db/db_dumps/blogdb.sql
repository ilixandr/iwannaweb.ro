-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2019 at 09:23 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `language` enum('ro','en','fr') DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `language`, `title`, `slug`, `image`, `body`, `published`, `created`) VALUES
(1, 1, 'ro', 'Dupa munc&#259;...', 'dupa-munca', 'webdesign_indian.jpg', '<p>Dupa ce am adus pe lume iwanna.web, cu truda multor ore de codare si incercari, am ales sa profitam de week-endul prelungit undeva departe de Cluj. Cele 2 zile au trecut de parca se intreceau cu lumea, iar acum ne vedem nevoiti sa cautam o solutie de intoarcere in civilizatia agitata a Clujului. Slava www-ului ca CFR are un sait web de unde putem afla ce alternative avem, dar pacat ca trebuie sa stam la ghiseu pentru bilete in loc sa le cumparam "de pe internet". Acum stam in tren, cu o melodie ce rasuna in casti si sorbim din privire verdele plai ardelenesc, uitat de Dumnezeu in timp, cu farmecul sau aparte, dar atat de deprimat.<br/>Timpul nu a avut mila, iar oamenii nu i s-au adaptat. Societate informationala ziceam? Aici nu pare sa fi ajuns decat in mainile agitate, dibace in tastat, dar nu si in lucrat, ale tinerilor - cei ce vor prelua controlul asupra lumii, peste atat de putin timp! Ce dezamagire! Trenul mai are inca 3 ore, sunt multi oameni tristi, ar vrea sa ii facem sa zambeasca. Sunt asa pentru ca tara lor si a noastra a fost condusa ca in bancul cu tanarul sef de trib...<br/><br/><em>"Dupa moartea sefului de trib, fiul sau este promovat in locul sau. Un fiu ce nu a studiat dupa regulile spiritului vantului si padurii, ci la Harvard. Iar in prima zi, indianul responsabil pentru provizii vine sa ii ceara pretiosul sfat:<br/>- Marite sef de trib, cum va fi iarna aceasta? Usoara sau grea? Oare sa nu ne apucam sa adunam lemne?<br/>Gandind el ca nu are nimic de pierdut sa fie preventiv, tanarul sef de trib aproba, cu gandul sa verifice intr-o saptamana la Administratia de Meteorologie. Iar cand a sunat, acestia i-au comunicat ca va fi o iarna foarte grea. Dupa ceva timp, din nou batranul indian ce se ocupa de provizii:<br/>- Marite sef de trib, oare iarna va fi chiar foarte grea? Sa mai adunam lemne?<br/>- Numai putin, sa merg sa intreb vantul! spune tanarul sef de trib, mergand sa mai dea un telefon. Primeste din nou confirmarea ca va fi o iarna grea, ceea ce ii comunica si batranului indian.<br/>Dupa inca alte 2 saptamani, batranul vine din nou, cu aceeasi intrebare: va fi iarna nemaivazut de apriga? Tanarul suna din nou la Administratia de Meteorologie, considerand ca deja e destul de grav.<br/>- Iarna aceasta va fi chiar asa de grea?<br/>- Oribila! i se raspunde.<br/>- Sigur?<br/>- Absolut, domnule, suntem 100% siguri!<br/>- Si de unde stiti atat de sigur?<br/>Raspunsul vine taios, nepregatit, plin de "intelepciune":<br/>- Pai... indienii, strang lemne in draci!"</em><br/><br/>Se pare ca asa e si cu tara asta... Dar e timpul sa trecem la codat, trebuie sa mai facem un sait care sa ne duca in rand cu lumea, ne-am bazat destul pe indieni!</p>', 1, '2013-05-30 13:17:14'),
(2, 1, 'ro', 'Securitatea re&#355;elelor wireless', 'securitatea-retelelor-wireless', 'webdesign_wifi_securitate.jpg', '<p>De la crearea saiturilor web si otpimizarea lor, as vrea sa trec la modul de accesare a unui website. Cei mai multi dintre noi dispun de o retea wireless, pentru a ne conecta dispozitivele mobile la internet. Ceea ce nu stiu cei mai multi este ca o parolare a retelei nu inseamna neaparat securitate. Retelele criptate WEP (Wired Equivalent Privacy) sunt victime sigure in fata celor care cauta sa se conecteze in mod fraudulos la un AP (Access Point) care nu le apartine. Ati auzit probabil ca o metoda buna de a va tine "securizata" reteaua criptata cu WEP ar fi sa schimbati in mod regulat parola, dar din pacate acest lucru este departe de a fi unul adevarat. Ar putea fi, insa numai daca sunteti dispusi sa va schimbati parola la fiecare 20-30 de minute, intrucat cam acesta este intervalul de timp de care un expert in informatica ar avea nevoie pentru a afla parola. Defectul provine din faptul ca acest tip de criptare permite unor surse externe sa insereze pachete in traficul retelei si apoi sa decripteze parola, care este aceeasi pentru toate gazdele conectate si, in plus, are o lungime de doar 40 de biti (rezonabil ar fi de la 128 de biti in sus).</p><p>Am sa revin intr-un post ulterior cu 2-3 exemple de metode de atac a retelelor WEP (chiar si cele WPA / WPA2 pot fi atacate), strict in scop educativ, pentru a va ajuta in configurarea unui WLAN (Wireless Local Area Network) cat mai sigur.</p><p><em>Pentru a va proteja reteaua wireless de intrusi, va sfatuiesc sa utilizati cripate de tip WPA / WPA2, avand grija insa sa dezactivati functia WPS (WiFi Protected Setup). Daca aveti nelamuriri legate despre cum ati putea face asta, nu ezitati sa ne contactati la <a href="mailto:helpdesk@iwannaweb.ro">helpdesk@iwannaweb.ro</a>. Un sfat e intotdeauna gratuit!</em></p>', 1, '2013-08-02 17:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Admin','Contributor') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created`) VALUES
(1, 'iwwblogger', 'contact@iwannaweb.ro', 'Admin', '$2y$10$oFMZ076N43Nyrr.bg/l4JONQy0GZ6BJI4Nd46CBHWAuKtNVUv0KhS', '2013-05-30 12:52:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
