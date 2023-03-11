--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id_nom`, `id_contact`) VALUES
(1, 2),
(2, 1),
(1, 3),
(3, 1),
(1, 4),
(4, 1),
(1, 11),
(11, 1),
(1, 14),
(14, 1),
(2, 14),
(14, 2),
(2, 4),
(4, 2),
(2, 23),
(23, 2),
(2, 69),
(69, 2),
(3, 23),
(23, 3),
(3, 70),
(70, 3);

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `num`, `email`) VALUES
(1, 'Berger', 'Julien', '99', 'julien.berger@free.fr'),
(2, 'Karl', 'Karl', '*9431C7A869750E4D2CEA958867640D290012DA18', 'kerl2@gmail.com'),
(3, 'Pont', 'Hélene', 'd435a6cdd786300dff204ee7c2ef942d3e9034e2', 'helene.pont@parisdescartes.fr'),
(4, 'Sunchine', 'Anna Lisa', '12.34', 'annalisa@parisdescartes.fr'),
(11, 'Dent', 'Arthur', '42', 'sahm75'),
(14, 'Ilié', 'Jean-Michel', '47484950', 'jean-michel.ilie@parisdescartes.fr'),
(23, 'chhaib', 'yacine', 'non', 'yacinehcb@outlook.fr'),
(31, 'kienzler', 'Florent', '95', 'florentk98@gmail.com'),
(32, 'oss', 'John', '117', 'oss@spy.fr'),
(69, 'Granger', 'Texas', 'Poudlard', 'LaBestGriffondor@gmail.com'),
(70, 'Potter', 'Harry', '', 'LeBestGriffondor@gmail.com'),
(72, 'bond', 'james', 'd321d6f7ccf98b51540ec9d933f20898af3bd71e', 'null');