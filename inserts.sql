INSERT INTO projetphpunit.recipes (name,difficulty,description,`time`,image,idCategory,`date`) VALUES
	 ('Tarte aux pommes',3.5,'Délicieuse tarte aux pommes faite maison.','02:30:00',NULL,3,'2023-11-30 13:03:24'),
	 ('Poulet rôti',4.0,'Un poulet rôti croustillant et savoureux.','01:45:00',NULL,2,'2023-11-30 13:03:24'),
	 ('Salade César',2.0,'Une salade fraîche et délicieuse avec sa sauce César.','00:30:00',NULL,1,'2023-11-30 13:03:24');
INSERT INTO projetphpunit.ingredients (name,price,image) VALUES
	 ('Farine',2.5,''),
	 ('Oeufs',1.2,''),
	 ('Sucre',1.0,''),
	 ('Sel',0.8,NULL),
	 ('Poivre',0.5,NULL),
	 ('Beurre',2.0,NULL),
	 ('Lait',1.5,NULL),
	 ('Levure chimique',0.7,NULL),
	 ('Yaourt',1.8,NULL),
	 ('Miel',3.0,NULL);
INSERT INTO projetphpunit.ingredients (name,price,image) VALUES
	 ('Vanille',2.2,NULL),
	 ('Chocolat noir',3.5,NULL),
	 ('Chocolat au lait',3.0,NULL),
	 ('Chocolat blanc',3.2,NULL),
	 ('Amandes',4.0,NULL),
	 ('Noisettes',3.8,NULL),
	 ('Noix',4.5,NULL),
	 ('Pistaches',5.0,NULL),
	 ('Raisins secs',2.3,NULL),
	 ('Cannelle',1.2,NULL);
INSERT INTO projetphpunit.ingredients (name,price,image) VALUES
	 ('Gingembre',1.5,NULL),
	 ('Muscade',1.0,NULL),
	 ('Citron',0.8,NULL),
	 ('Orange',1.0,NULL),
	 ('Fraises',2.5,NULL),
	 ('Framboises',3.0,NULL),
	 ('Myrtilles',3.2,NULL),
	 ('Pommes',2.2,NULL),
	 ('Bananes',1.8,NULL),
	 ('Ananas',2.0,NULL);
INSERT INTO projetphpunit.ingredients (name,price,image) VALUES
	 ('Pêches',2.3,NULL),
	 ('Abricots',2.0,NULL),
	 ('Cerises',3.5,NULL),
	 ('Kiwi',1.5,NULL),
	 ('Melon',2.8,NULL),
	 ('Pastèque',2.0,NULL),
	 ('Courgette',1.2,NULL),
	 ('Carottes',1.5,NULL),
	 ('Poivrons',1.0,NULL),
	 ('Tomates',0.8,NULL);
INSERT INTO projetphpunit.ingredients (name,price,image) VALUES
	 ('Aubergines',1.2,NULL),
	 ('Brocolis',1.5,NULL),
	 ('Haricots verts',1.0,NULL),
	 ('Champignons',1.8,NULL),
	 ('Oignons',1.2,NULL),
	 ('Ail',0.7,NULL),
	 ('Persil',0.5,NULL),
	 ('Basilic',0.8,NULL),
	 ('Thym',0.7,NULL),
	 ('Romarin',0.6,NULL);
INSERT INTO projetphpunit.ingredients (name,price,image) VALUES
	 ('Coriandre',0.7,NULL),
	 ('Menthe',0.6,NULL),
	 ('Laurier',0.5,NULL),
	 ('Curcuma',1.2,NULL),
	 ('Cumin',0.8,NULL),
	 ('Paprika',0.7,NULL),
	 ('Curry',0.6,NULL),
	 ('Safran',2.0,NULL),
	 ('Câpres',1.5,NULL),
	 ('Olives',1.8,NULL);
INSERT INTO projetphpunit.ingredients (name,price,image) VALUES
	 ('Cornichons',1.0,NULL),
	 ('Mayonnaise',2.0,NULL),
	 ('Ketchup',1.5,NULL),
	 ('Moutarde',1.0,NULL),
	 ('Sauce soja',2.5,NULL),
	 ('Vinaigre balsamique',3.0,NULL),
	 ('Vinaigre de vin',2.0,NULL),
	 ('Huile d olive',4.0,NULL),
	 ('Huile de tournesol',2.5,NULL),
	 ('Huile de colza',2.8,NULL);
INSERT INTO projetphpunit.ingredients (name,price,image) VALUES
	 ('Huile de noix',3.0,NULL),
	 ('Vin rouge',5.0,NULL),
	 ('Vin blanc',4.0,NULL),
	 ('Bières',2.5,NULL),
	 ('Jus d orange',2.0,NULL),
	 ('Jus de pomme',2.2,NULL),
	 ('Eau gazeuse',1.0,NULL),
	 ('Coca-Cola',1.5,NULL),
	 ('Sprite',1.2,NULL),
	 ('Glace vanille',3.5,NULL);
INSERT INTO projetphpunit.ingredients (name,price,image) VALUES
	 ('Glace chocolat',3.0,NULL),
	 ('Glace fraise',3.2,NULL),
	 ('Fromage cheddar',2.8,NULL),
	 ('Fromage mozzarella',2.5,NULL),
	 ('Fromage bleu',3.0,NULL),
	 ('Fromage brie',3.2,NULL),
	 ('Saumon',6.0,NULL),
	 ('Thon',4.0,NULL),
	 ('Crevettes',5.0,NULL),
	 ('Poulet',4.5,NULL);
INSERT INTO projetphpunit.ingredients (name,price,image) VALUES
	 ('Boeuf',5.0,NULL),
	 ('Porc',4.0,NULL),
	 ('Agneau',6.0,NULL);
INSERT INTO projetphpunit.categories (name,image) VALUES
	 ('Entrée','entree.jpg'),
	 ('Plat principal','plat.jpg'),
	 ('Dessert','dessert.jpg');
INSERT INTO projetphpunit.steps (idRecipe,`number`,description) VALUES
	 (1,1,'Préparez la pâte et étalez-la dans le moule.'),
	 (1,2,'Épluchez et coupez les pommes, puis disposez-les sur la pâte.'),
	 (1,3,'Saupoudrez de sucre et faites cuire au four.'),
	 (3,1,'Préparez la sauce César et réservez-la.'),
	 (3,2,'Coupez les ingrédients de la salade et mélangez-les dans un grand bol.'),
	 (2,1,'Préparez le poulet en le nettoyant et en le séchant.'),
	 (2,2,'Mélangez le beurre, le lait, la levure chimique et le yaourt pour obtenir une marinade.'),
	 (2,3,'Badigeonnez le poulet avec la marinade et assaisonnez avec les noisettes, la cannelle, le gingembre, et la muscade.'),
	 (2,4,'Faites rôtir le poulet au four jusqu à ce qu il soit doré et croustillant.');
INSERT INTO projetphpunit.assocrecingr (idRecipe,idIngredient,quantité) VALUES
	 (1,1,'Quantité selon besoin'),
	 (1,2,'Quantité selon besoin'),
	 (1,3,'Quantité selon besoin'),
	 (1,10,'Quantité selon besoin'),
	 (1,11,'Quantité selon besoin'),
	 (1,12,'Quantité selon besoin'),
	 (1,13,'Quantité selon besoin'),
	 (1,14,'Quantité selon besoin'),
	 (1,15,'Quantité selon besoin'),
	 (1,16,'Quantité selon besoin');
INSERT INTO projetphpunit.assocrecingr (idRecipe,idIngredient,quantité) VALUES
	 (1,17,'Quantité selon besoin'),
	 (2,6,'Quantité selon besoin'),
	 (2,7,'Quantité selon besoin'),
	 (2,8,'Quantité selon besoin'),
	 (2,9,'Quantité selon besoin'),
	 (2,16,'Quantité selon besoin'),
	 (2,18,'Quantité selon besoin'),
	 (2,19,'Quantité selon besoin'),
	 (2,20,'Quantité selon besoin'),
	 (3,22,'Quantité selon besoin');
INSERT INTO projetphpunit.assocrecingr (idRecipe,idIngredient,quantité) VALUES
	 (3,23,'Quantité selon besoin'),
	 (3,24,'Quantité selon besoin'),
	 (3,25,'Quantité selon besoin'),
	 (3,26,'Quantité selon besoin'),
	 (3,27,'Quantité selon besoin'),
	 (3,28,'Quantité selon besoin'),
	 (3,29,'Quantité selon besoin');
