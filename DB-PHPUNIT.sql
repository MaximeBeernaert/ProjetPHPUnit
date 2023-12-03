-- MariaDB dump 10.19-11.1.2-MariaDB, for osx10.19 (arm64)
--
-- Host: localhost    Database: projetphpunit
-- ------------------------------------------------------
-- Server version	11.1.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `assocrecingr`
--

DROP TABLE IF EXISTS `assocrecingr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assocrecingr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idRecipe` int(11) NOT NULL,
  `idIngredient` int(11) NOT NULL,
  `quantité` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assocrecingr`
--

LOCK TABLES `assocrecingr` WRITE;
/*!40000 ALTER TABLE `assocrecingr` DISABLE KEYS */;
INSERT INTO `assocrecingr` VALUES
(1,1,1,'Quantité selon besoin'),
(2,1,2,'Quantité selon besoin'),
(3,1,3,'Quantité selon besoin'),
(4,1,10,'Quantité selon besoin'),
(5,1,11,'Quantité selon besoin'),
(6,1,12,'Quantité selon besoin'),
(7,1,13,'Quantité selon besoin'),
(8,1,14,'Quantité selon besoin'),
(9,1,15,'Quantité selon besoin'),
(10,1,16,'Quantité selon besoin'),
(11,1,17,'Quantité selon besoin'),
(12,2,6,'Quantité selon besoin'),
(13,2,7,'Quantité selon besoin'),
(14,2,8,'Quantité selon besoin'),
(15,2,9,'Quantité selon besoin'),
(16,2,16,'Quantité selon besoin'),
(17,2,18,'Quantité selon besoin'),
(18,2,19,'Quantité selon besoin'),
(19,2,20,'Quantité selon besoin'),
(20,3,22,'Quantité selon besoin'),
(21,3,23,'Quantité selon besoin'),
(22,3,24,'Quantité selon besoin'),
(23,3,25,'Quantité selon besoin'),
(24,3,26,'Quantité selon besoin'),
(25,3,27,'Quantité selon besoin'),
(26,3,28,'Quantité selon besoin'),
(27,3,29,'Quantité selon besoin'),
(28,47,1,'13'),
(29,47,4,'321'),
(30,47,8,'321'),
(31,47,12,'651'),
(41,55,1,'250g'),
(42,55,2,'4'),
(43,55,3,'250g'),
(44,55,12,'500g'),
(45,55,1,'200g'),
(46,55,3,'150g'),
(47,55,2,'3'),
(48,55,12,'150g'),
(49,55,6,'120g'),
(50,55,8,'1 sachet'),
(51,56,90,'200g'),
(52,56,71,'1 c.a.C'),
(53,57,44,'300g'),
(54,57,73,'150ml'),
(55,57,45,'1'),
(56,58,1,'200g'),
(57,58,3,'150g'),
(58,58,2,'3'),
(59,58,12,'150g'),
(60,58,6,'120g'),
(61,58,8,'1 sachat');
/*!40000 ALTER TABLE `assocrecingr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES
(1,'Entrée','entree.jpg'),
(2,'Plat principal','plat.jpg'),
(3,'Dessert','dessert.jpg');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredients`
--

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;
INSERT INTO `ingredients` VALUES
(1,'Farine',2.5,'https://cdn.intermarche.com/fr/Content/images/boitmal/produit/zoom/29C8F2214E583DFE9829D779023ADCDE.jpg'),
(2,'Oeufs',1.2,'https://is1-ssl.mzstatic.com/image/thumb/Purple118/v4/35/f9/65/35f9652c-9ddb-4441-8f53-238fa622e32e/mzl.uizifcrn.png/256x256bb.jpg'),
(3,'Sucre',1,'https://www.plantes-et-sante.fr/images/sucre.jpg_720_1000_2'),
(4,'Sel',0.8,'https://img.cuisineaz.com/1200x675/2019/06/17/i147636-gros-sel.jpeg'),
(5,'Poivre',0.5,'https://img-3.journaldesfemmes.fr/NG3vMGK0mq4hfLFexRwSgQeJrkU=/1500x/smart/4d1689b8537441aaa574352c45998cf9/ccmcms-jdf/36993683.jpg'),
(6,'Beurre',2,'https://www.lsa-conso.fr/mediatheque/1/2/6/000591621_896x598_c.jpg'),
(7,'Lait',1.5,'https://i0.wp.com/nouvellesgastronomiques.com/wp-content/uploads/2022/01/lait6.png?fit=1200%2C800&ssl=1'),
(8,'Levure chimique',0.7,'https://media.carrefour.fr/medias/6920ca843e733c64aeada37cfc6139cb/p_540x540/08712100724572-a1n1-s03.jpg'),
(9,'Yaourt',1.8,'https://cdn-s-www.estrepublicain.fr/images/95A10B41-F408-4B27-8E65-2E89F04ECF54/NW_raw/illustration-1583764974.jpg'),
(10,'Miel',3,'https://www.tempsgourmand.fr/wp-content/uploads/2023/07/les-vertus-du-miel_opt.jpg'),
(11,'Vanille',2.2,'https://www.hagengrote.fr/genussmagazin/wp-content/uploads/2017/02/Vanille-1200x900.jpg'),
(12,'Chocolat noir',3.5,'https://neary.fr/cdn/shop/products/tablette-chocolat-noir-65-sans-sucre-100g-alain-batt-chocolats-livraison-nancy-metz-954250.png?v=1664977390'),
(13,'Chocolat au lait',3,'https://www.chocolatleroux.com/606-full_default/tablettes-de-chocolat-au-lait.jpg'),
(14,'Chocolat blanc',3.2,'https://www.manonchocolat.fr/wp-content/uploads/2018/10/Manon2_081.jpg'),
(15,'Amandes',4,'https://mapetiteassiette.com/wp-content/uploads/2020/05/Almond-Ingredients-e1589277661430-800x600.jpg'),
(16,'Noisettes',3.8,'https://www.aprifel.com/wp-content/uploads/2019/02/noisette.jpg'),
(17,'Noix',4.5,'https://img-3.journaldesfemmes.fr/Ob4ZOUzG8tFQhLS9RiSEYN51MP8=/1500x/smart/264a7ff437d54df18588f2899c74c462/ccmcms-jdf/10662444.jpg'),
(18,'Pistaches',5,'https://img.passeportsante.net/1200x675/2021-05-03/i102134-pistache-nu.webp'),
(19,'Raisins secs',2.3,'https://img.cuisineaz.com/2880x1920/2020/12/03/i156395-raisin-sec.jpeg'),
(20,'Cannelle',1.2,'https://static.wixstatic.com/media/2dd969_8c9e0e72b82c4e4cbbf5b162f3033824~mv2.jpg/v1/fill/w_640,h_426,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/2dd969_8c9e0e72b82c4e4cbbf5b162f3033824~mv2.jpg'),
(21,'Gingembre',1.5,'https://amoseeds.com/cdn/shop/products/GingembreenPoudreBio-amoseedsspecialistedessuperalimentsBio_2033ba38-82e8-4da1-ac86-de55efe0b61c_1080x.jpg?v=1682333253'),
(22,'Muscade',1,'https://azmartinique.com/sites/azmartinique.com/files/fruits/noix-de-muscade-2.jpg'),
(23,'Citron',0.8,'https://www.lavieclaire.com/wp-content/uploads/2015/06/citron_jaune.jpg'),
(24,'Orange',1,'https://img-3.journaldesfemmes.fr/a5LFTZ3qU2fUVOmwIVKDJawBJXA=/1500x/smart/83c0e4f55dd846dea2be0be27e715dcd/ccmcms-jdf/10662446.jpg'),
(25,'Fraises',2.5,'https://img.cuisineaz.com/1200x675/2018/06/15/i140414-fraises.jpeg'),
(26,'Framboises',3,'https://www.jaimefruitsetlegumes.ca/wp-content/uploads/2019/09/framboises-scaled-e1644263837892.jpg'),
(27,'Myrtilles',3.2,'https://emmanuellegrenon.com/wp-content/uploads/2020/11/myrtilles-2.jpg'),
(28,'Pommes',2.2,'https://mapetiteassiette.com/wp-content/uploads/2022/11/Design-sans-titre-4.png'),
(29,'Bananes',1.8,'https://assets.afcdn.com/story/20230724/2224514_w4205h3153c1cx2103cy1689cxt0cyt0cxb4205cyb3378.jpg'),
(30,'Ananas',2,'https://www.academiedugout.fr/images/146/1200-auto/ananas_000.jpg?poix=50&poiy=50'),
(31,'Pêches',2.3,'https://www.academiedugout.fr/images/17151/1200-auto/peche-jaune-copy.jpg?poix=50&poiy=50'),
(32,'Abricots',2,'https://www.jaimefruitsetlegumes.ca/wp-content/uploads/2019/07/Abricot-700x700.png'),
(33,'Cerises',3.5,'https://res.cloudinary.com/hv9ssmzrz/image/fetch/c_fill,f_auto,h_630,q_auto,w_1200/https://images-ca-1-0-1-eu.s3-eu-west-1.amazonaws.com/photos/original/735/produit-cerises-AdobeStock_161826394.jpg'),
(34,'Kiwi',1.5,'https://media.istockphoto.com/id/525151431/fr/photo/kiwi-brun-de-l%C3%AEle-du-nord-apteryx-mantelli.jpg?s=612x612&w=0&k=20&c=UUpGTInd5xcKhJcQF3__27xRHNG25qjWd8g1B2Bu1Zg='),
(35,'Melon',2.8,'https://jardinsdevartan.com/wp-content/uploads/2016/03/melon-charentais-jardins-de-vartan.jpg'),
(36,'Pastèque',2,'https://assets.afcdn.com/story/20230727/2224826_w2000h1500c1cx1000cy667cxt0cyt0cxb2000cyb1333.jpg'),
(37,'Courgette',1.2,'https://img-3.journaldesfemmes.fr/qCyan5Hu2LMbSGDay4UcNbFKvhs=/1500x/smart/a36d3c6e1273430d896ae8d3c2634531/ccmcms-jdf/24762747.jpg'),
(38,'Carottes',1.5,'https://i0.wp.com/fermagro.net/wp-content/uploads/2021/01/carrotte.jpg?fit=400%2C400&ssl=1'),
(39,'Poivrons',1,'https://www.semeralafolie.com/wp-content/uploads/2014/07/poivrons.jpg'),
(40,'Tomates',0.8,'https://www.roseedeschamps.fr/wp-content/uploads/2019/01/tomate.jpg'),
(41,'Aubergines',1.2,'https://i.notretemps.com/1400x787/smart/2020/07/30/dietetique-les-bienfaits-de-laubergine.jpeg'),
(42,'Brocolis',1.5,'https://img.cuisineaz.com/1200x675/2018/07/03/i140773-brocoli.jpeg'),
(43,'Haricots verts',1,'https://www.academiedugout.fr/images/16047/1200-auto/haricot-vert_000.jpg?poix=50&poiy=50'),
(44,'Champignons',1.8,'https://iod.keplrstatic.com/api/ar_1.25,g_north,c_fill/ar_1.5,w_800,q_70,c_fill,f_auto,dpr_auto/mon_marche/8302_Champignons_bruns_France.jpg'),
(45,'Oignons',1.2,'https://assets.afcdn.com/story/20190220/1334066_w4912h4912c1cx2464cy1632cxt1084cyt0cxb4287cyb2983.jpg'),
(46,'Ail',0.7,'https://img.passeportsante.net/1200x675/2021-05-03/i101955-ail-nu.jpg'),
(47,'Persil',0.5,'https://www.atelier-des-bons-plants.fr/wp-content/uploads/2019/01/persil_plat-bio2.jpg'),
(48,'Basilic',0.8,'https://rabbits.world/wp-content/uploads/2022/01/Basilic.jpg'),
(49,'Thym',0.7,'https://img.passeportsante.net/1200x675/2019-10-30/i92251-.webp'),
(50,'Romarin',0.6,'https://soriavie.fr/wp-content/uploads/Romarin-1.jpg'),
(51,'Coriandre',0.7,'https://img.passeportsante.net/1200x675/2021-05-03/i102020-coriandre-nu.webp'),
(52,'Menthe',0.6,'https://www.directfinesherbes.fr/wp-content/uploads/2018/04/menthe.jpg'),
(53,'Laurier',0.5,'https://veyrane.com/wp-content/uploads/laurier-noble-bio.jpg'),
(54,'Curcuma',1.2,'https://theoriginalgarden.com/Argazkiak/Fotos/20210220110906.jpg'),
(55,'Cumin',0.8,'https://www.ernest-turc.com/boutique/wp-content/uploads/2021/01/cumin-2.jpg'),
(56,'Paprika',0.7,'https://img.passeportsante.net/1200x675/2021-05-03/i102124-paprika-nu.webp'),
(57,'Curry',0.6,'https://www.academiedugout.fr/images/5290/1200-auto/fotolia_52317494_subscription_xxl-copy.jpg?poix=50&poiy=50'),
(58,'Safran',2,'https://www.epicesanatol.com/media/original/45505-223-d_Retap.jpg'),
(59,'Câpres',1.5,'https://www.bienmanger.com/tinyMceData/images/contents/1506/content_lg.jpg'),
(60,'Olives',1.8,'https://img-3.journaldesfemmes.fr/4MwItaGsyMzcDmAtWmyZjtvvBy0=/1500x/smart/e08ad668a772495f8f78771ba44d03ea/ccmcms-jdf/10660260.jpg'),
(61,'Cornichons',1,'https://img-3.journaldesfemmes.fr/Nv63gCjLli4j5MYAwH1t3gtAO6k=/1500x/smart/e65b2e40e3334349b0903529a85cec26/ccmcms-jdf/26665919.jpg'),
(62,'Mayonnaise',2,'https://upload.wikimedia.org/wikipedia/commons/6/60/Mayonnaise_%281%29.jpg'),
(63,'Ketchup',1.5,'https://www.rozana.fr/medias/images/ketchup.png'),
(64,'Moutarde',1,'https://academiefermentation.com/wp-content/uploads/2021/04/moutarde-scaled.jpg'),
(65,'Sauce soja',2.5,'https://img.cuisineaz.com/2880x1920/2020/09/17/i155093-sauce-soja.jpeg'),
(66,'Vinaigre balsamique',3,'https://www.signorinitartufi.com/wp-content/uploads/2020/11/Creme-de-vinaigre-balsamique-de-Modene-aromatisee-a-la-truffe.jpg'),
(67,'Vinaigre de vin',2,'https://fridg-front.s3.amazonaws.com/media/CACHE/images/products/Maille_Vinaigre_de_Vin_Rouge_Grande_Cuve_50_cl_0000x0000_0/b69caa594ab8c6c76118fdb3adf7a097.jpg'),
(68,'Huile d olive',4,'https://uploads.unify.uno/content/2022/9/24/1666610474520.jpg'),
(69,'Huile de tournesol',2.5,'https://img.passeportsante.net/1200x675/2021-05-03/i103984-huile-tournesol.jpg'),
(70,'Huile de colza',2.8,'https://i0.wp.com/www.greenweez.com/magazine/wp-content/uploads/2023/08/huile-de-colza.png?fit=800%2C578&ssl=1'),
(71,'Huile de noix',3,'https://img.passeportsante.net/1200x675/2021-05-03/i103973-huile-noix.webp'),
(72,'Vin rouge',5,'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Red_Wine_Glass.jpg/170px-Red_Wine_Glass.jpg'),
(73,'Vin blanc',4,'https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/White_Wine_Glas.jpg/170px-White_Wine_Glas.jpg'),
(74,'Bières',2.5,'https://terrabacchus.fr/wp-content/uploads/2023/03/full-beer-mug-foam-biere-mug-1920px-web.jpeg'),
(75,'Jus d orange',2,'https://img.cuisineaz.com/660x660/2017/08/03/i131280-jus-d-orange-au-thermomix.jpeg'),
(76,'Jus de pomme',2.2,'https://assets.afcdn.com/recipe/20131121/1256_w1024h576c1cx1500cy1001.webp'),
(77,'Eau gazeuse',1,'https://images.theconversation.com/files/309728/original/file-20200113-103987-1okubhx.jpg?ixlib=rb-1.1.0&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip'),
(78,'Coca-Cola',1.5,'https://www.paul.fr/media/catalog/product/p/a/paul_boissons_nov_2022105876.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700'),
(79,'Sprite',1.2,'https://m.media-amazon.com/images/I/51xCd2cVqjS.jpg'),
(80,'Glace vanille',3.5,'https://liliebakery.fr/wp-content/uploads/2022/06/Glace-a-la-vanille-facile-Blog-Lilie-Bakery-1024x1534.jpg'),
(81,'Glace chocolat',3,'https://img.cuisineaz.com/660x660/2013/12/20/i16553-recette-de-glace-au-chocolat.jpeg'),
(82,'Glace fraise',3.2,'https://assets.afcdn.com/recipe/20150717/15076_w1024h1024c1cx2016cy2016.jpg'),
(83,'Fromage cheddar',2.8,'https://les-alpages.fr/wp-content/uploads/2014/09/cheddar-2.jpg'),
(84,'Fromage mozzarella',2.5,'https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Mozzarella_cheese_%281%29.jpg/1200px-Mozzarella_cheese_%281%29.jpg'),
(85,'Fromage bleu',3,'https://static.laboxfromage.fr/wp-content/uploads/2020/04/10124958/pa%CC%82te-persille%CC%81e-.jpg'),
(86,'Fromage brie',3.2,'https://www.regal.fr/sites/art-de-vivre/files/Import/brie-fromage_istock.jpg'),
(87,'Saumon',6,'https://cdn5.tompress.com/I-Grande-40344-recette-de-saumon-fume-a-froid.net.jpg'),
(88,'Thon',4,'https://cdn.futura-sciences.com/buildsv6/images/wide1920/8/6/6/86608031e0_106944_thon-poisson.jpg'),
(89,'Crevettes',5,'https://www.boutique-paon.fr/4481-large_default/crevettes-madagascar-cuites-40-60.jpg'),
(90,'Poulet',4.5,'https://img.cuisineaz.com/660x660/2016/02/16/i77610-poulet-laurier.jpg'),
(91,'Boeuf',5,'https://www.laviandedhenri.fr/1-large_default/cote-de-boeuf-1-piece.jpg'),
(92,'Porc',4,'https://www.traditionsarthoise.fr/media/5906/big/viande-porc-caracteristiques.jpg'),
(93,'Agneau',6,'bhttps://img.cuisineaz.com/1200x675/2018/08/11/i141655-agneau.jpeg');
/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `difficulty` float NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `image` varchar(200) DEFAULT NULL,
  `idCategory` int(11) NOT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipes`
--

LOCK TABLES `recipes` WRITE;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` VALUES
(1,'Tarte aux pommes',3.5,'Délicieuse tarte aux pommes faite maison.','2023-11-30 12:03:24','https://assets.afcdn.com/recipe/20220128/128250_w1024h1024c1cx1294cy688cxt0cyt0cxb2037cyb1472.webp',3,'02:30:00'),
(2,'Poulet rôti',4,'Un poulet rôti croustillant et savoureux.','2023-11-30 12:03:24','https://assets.afcdn.com/recipe/20130909/63747_w1024h1024c1cx1872cy2808.webp',2,'01:45:00'),
(3,'Brownie au chocolat',2,'Un bon dessert pour toute la famille','2023-12-03 21:46:32','https://assets.afcdn.com/recipe/20161114/26634_w1024h768c1cx2736cy1824.webp',3,'01:00:00'),
(56,'Salade César',2,'Une salade fraîche et délicieuse avec une vinaigrette crémeuse.','2023-12-03 22:40:07','https://www.galbani.fr/wp-content/uploads/2020/04/AdobeStock_157570276-2.jpeg',1,'00:00:00'),
(57,'Risotto aux champignons',4,'Un risotto crémeux et parfumé aux champignons.','2023-12-03 22:42:45','https://www.bonjourdarling.com/wp-content/uploads/2020/02/risotto_champignon-1600x1200.jpg',2,'00:00:00'),
(58,'Gâteau au chocolat',3,'Un délicieux gâteau au chocolat moelleux et savoureux.','2023-12-03 22:44:42','https://assets.afcdn.com/recipe/20200504/110582_w1024h1024c1cx540cy960cxt0cyt0cxb1080cyb1920.webp',3,'01:00:00');
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `steps`
--

DROP TABLE IF EXISTS `steps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `steps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idRecipe` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `steps`
--

LOCK TABLES `steps` WRITE;
/*!40000 ALTER TABLE `steps` DISABLE KEYS */;
INSERT INTO `steps` VALUES
(1,1,1,'Préparez la pâte et étalez-la dans le moule.'),
(2,1,2,'Épluchez et coupez les pommes, puis disposez-les sur la pâte.'),
(3,1,3,'Saupoudrez de sucre et faites cuire au four.'),
(4,3,1,'Préparez la sauce César et réservez-la.'),
(5,3,2,'Coupez les ingrédients de la salade et mélangez-les dans un grand bol.'),
(6,2,1,'Préparez le poulet en le nettoyant et en le séchant.'),
(7,2,2,'Mélangez le beurre, le lait, la levure chimique et le yaourt pour obtenir une marinade.'),
(8,2,3,'Badigeonnez le poulet avec la marinade et assaisonnez avec les noisettes, la cannelle, le gingembre, et la muscade.'),
(9,2,4,'Faites rôtir le poulet au four jusqu à ce qu il soit doré et croustillant.'),
(10,28,1,'miam miam'),
(11,29,1,'miam miam'),
(12,30,1,'miam miam'),
(13,31,1,'miam miam'),
(14,32,1,'OUI'),
(15,33,1,'étape final'),
(16,33,2,'ou pas'),
(17,34,1,'étape final'),
(18,34,2,'ou pas'),
(19,36,1,'ouiououerbgnh'),
(20,38,1,'ezoezau'),
(21,39,1,'ioj'),
(22,42,1,'Cuire les pâtes'),
(23,42,2,'Manger le tous avec beurre et oeuf'),
(24,43,1,'étape de fou'),
(25,46,1,'oui'),
(26,47,1,'t'),
(27,47,2,'p'),
(28,47,3,'d'),
(33,55,1,'Mélanger la farine, le beurre et le sucre'),
(34,55,2,'Ajouter le chocolat fondu'),
(35,55,1,'Faire fondre le chocolat et le beurre ensemble.'),
(36,55,2,'Mélanger la farine, le sucre et la levure dans un bol.'),
(37,55,3,'Incorporer les œufs au mélange sec.'),
(38,55,4,'Ajouter le chocolat fondu à la pâte'),
(39,55,5,'Verser dans un moule et cuire au four pendant 30 minutes à 180°C.'),
(40,56,1,'Laver et couper la laitue en morceaux.'),
(41,56,2,'Ajouter le poulet grillé, les croûtons et le parmesan.'),
(42,56,3,'Verser la sauce César et mélanger délicatement.'),
(43,57,1,'Faire revenir l\'oignon et les champignons dans une poêle.'),
(44,57,2,'Ajouter le riz et faire revenir jusqu\'à ce qu\'il devienne translucide.'),
(45,57,3,'Verser le vin blanc et laisser réduire.'),
(46,57,4,'Ajouter progressivement le bouillon chaud, en remuant constamment, jusqu\'à absorption complète.'),
(47,57,5,'Incorporer le parmesan et servir chaud.'),
(48,58,1,'Faire fondre le chocolat et le beurre ensemble.'),
(49,58,2,'Mélanger la farine, le sucre et la levure dans un bol.'),
(50,58,3,'Incorporer les œufs au mélange sec.'),
(51,58,4,'Ajouter le chocolat fondu à la pâte.'),
(52,58,5,'Verser dans un moule et cuire au four pendant 30 minutes à 180°C.');
/*!40000 ALTER TABLE `steps` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-03 23:47:46
