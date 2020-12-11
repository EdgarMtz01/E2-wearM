DROP DATABASE IF EXISTS wearm DEFAULT CHARACTER SET utf8;
CREATE DATABASE wearm;
USE wearm;

CREATE TABLE cliente(
idCliente int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre varchar(60),
apellidos varchar(80),
correo varchar(60),
contrasenia varchar(15),
calle varchar(100) NULL,
codigoPostal varchar(5) NULL,
estado varchar(70) NULL,
ciudad varchar(70) NULL,
colonia varchar(70) NULL
);

INSERT INTO cliente VALUES(1,'Jose Angel','Peréz Cruz','jose12@gmail.com','jose1221','Zaragoza',2341,'Hidalgo','Pachuca','Tulipanes');

CREATE TABLE empleado(
idEmpleado int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre varchar(60),
apellidos varchar(80),
correo varchar(60),
contrasenia varchar(15),
calle varchar(100) NULL,
codigoPostal varchar(5) NULL,
estado varchar(70) NULL,
ciudad varchar(70) NULL,
colonia varchar(70) NULL
);

INSERT INTO empleado VALUES(1,'Edgar','Martinez Sanjuan','edgar32@wearm.com','edgar345','Juaréz',2849,'Hidalgo','Zempoala','Zempoala');
INSERT INTO empleado VALUES(2,'Cristian','Hernandez Bautista','cris78@wearm.com','cris568','Morelos',2840,'Hidalgo','Pachuca','Pachuca');


CREATE TABLE categoria(
idCategoria int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre varchar(45)
);

INSERT INTO categoria VALUES(1,'Hombre'),(2,'Mujer'),(3,'Niño');

CREATE TABLE venta(
idVenta int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
idCliente int(5),
FOREIGN KEY(idCliente) REFERENCES cliente(idCliente),
idEmpleado int(5),
FOREIGN KEY (idEmpleado) REFERENCES empleado(idEmpleado),
fecha date,
total float(7,2)
);

INSERT INTO venta VALUES(1,1,1,'2020-12-08',1234.89),(2,1,1,'2020-11-20',567.4);

CREATE TABLE compra(
idCompra int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
idEmpleado int(5),
FOREIGN KEY(idEmpleado) REFERENCES empleado(idEmpleado),
fecha date,
total float(7,2)
);

INSERT INTO compra VALUES(1,2,'2020-12-04',895.32),(2,2,'2020-12-03',2948.7),(3,2,'2020-12-06',7182.5);

CREATE TABLE producto(
idProducto int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
categoria enum('Hombre','Mujer','Niños'),
imagen varchar(60),
nombre varchar(60),
descripcion varchar(100),
talla varchar(3),
costo float(7,2),
precio float(7,2),
stock int(5),
deleted_at tinyint(1)
);

INSERT INTO producto VALUES
(1,'Hombre',"zapato1.PNG",'Flexi Jeremy 92401','Zapatos de Cordones Brogue para Hombre','26',735.6,815.15,5,null),
(2,'Hombre',"zapato2.PNG",'Flexi 50805','Botín Casual para Hombre','27',399,499.50,10,null),
(3,'Hombre',"zapato3.PNG",'GLOBALWIN M16666769','Zapatillas de Moda para Hombre','25',250.70,382.44,11,null),
(4,'Hombre',"zapato4.PNG",'Bruno Marc','Zapatos de Vestir Oxford de Ante para Hombre, Marino','28',630,799,7,null),
(5,'Hombre',"zapato5.PNG",'Flexi Salamanca 90701','Zapatos de Cordones Brogue para Hombre','26',730.80,862.05,8,null),
(6,'Hombre',"zapato6.PNG",'Crocs Santa Cruz','Mocasines cómodos para Hombre, Zapatos sin Cordones','28',890.10,1167.20,7,null),
(7,'Hombre',"ropaHombre1.jpg","Fruit of the loom Men's",'Playera de cuello redondo de bolsillo, Varios Azules','G',350.20,403.59,9,null),
(8,'Hombre',"ropaHombre2.jpg","Hanes Men's",'Jersey Short with Pockets','MD',190,245,15,null),
(9,'Hombre',"ropaHombre3.jpg","Dickies Men's",'Big Short-Sleeve Pique Polo Shirt','MD',210.30,274.87,13,null),
(10,'Hombre',"ropaHombre4.jpg","Jerzees",'Polo de Manga Corta para Hombre','CH',750.40,884.99,6,null),
(11,'Hombre',"ropaHombre5.jpg","G.H. Bass & Co. Sunblocker",'Playera de Manga Corta con Cuello Redondo para Hombre, Azul Jaspeado','MD',391.50,463.71,8,null),
(12,'Hombre',"ropaHombre6.jpg","Nautica",'Camiseta de Manga Corta con Cuello Redondo para Hombre','G',247.50,388.41,9,null),
(13,'Hombre',"topHom1.webp","BLAZER LANA UNIT 04","Blazer relaxed fit confeccionado en tejido con mezcla de lana y cashmere. Cuello con solapas de pico",'G',2000.99,2499,6,null),
(14,'Hombre',"topHom2.webp","JEANS SLIM FIT MAN UNIT. 04","Jeans slim fit con cinco bolsillos. Efecto lavado. Cierre frontal con botones",'32',659.50,799,8,null),
(15,'Hombre',"topHom3.webp","PANTALON TAILORED MAN UNIT. 02","Pantalón confeccionado en tejido con estructura de algodón. Perneras rectas.",'34',699,799,7,null),
(16,'Hombre',"topHom4.webp","JERSEY BULKY UNISEX UNIT. 03","Jersey tejido en hilatura con mezcla de lana y lyocell. Cuello",'G',720.40,799,9,null),
(17,'Hombre',"topHom5.webp","JEANS REGULAR FIT MAN UNIT. 03","Jeans regular fit de efecto lavado. Cinco bolsillos. Cierre frontal con cremallera y botón",'36',710.30,799,6,null),
(18,'Hombre',"topHom6.webp","BOTIN PIEL VOLUMEN","Botín de piel tipo chelsea. Color negro. Dispone de un elástico y tirador en la zona trasera que facilitan el calce",'27',1859,1999,5,null),
(19,'Mujer',"zapatoMujer1.webp","BOTA ALTA PIEL PUNTA CUADRADA","Zapato tipo bota alta plana de piel de color negro. Corte de piel con vivos en contaste de color",'26',2999,3299,4,null),
(20,'Mujer',"zapatoMujer2.webp","DEPORTIVAS PIEL SOFT","Zapatillas deportivas de piel disponible en varios colores. Corte de piel soft",'26',1110,1299,8,null),
(21,'Mujer',"zapatoMujer3.webp","DEPORTIVO PIEL COMBINADO","Deportivo tipo bamba marrón. Combinación de materiales y tonos en el corte con partes en piel.",'25',1099,1299,7,null),
(22,'Mujer',"zapatoMujer4.webp","DEPORTIVAS ELÁSTICAS CALCETÍN","Zapato tipo deportivo disponible en varios colores. Corte elástico efecto calcetín",'27',899,999,5,null),
(23,'Mujer',"zapatoMujer5.webp","DEPORTIVAS COMBINADAS TEJIDO ACOLCHADO","Zapato tipo deportivo de color verde caqui. Corte acolchado en combinación de piezas y materiales",'25',1000,1299,9,null),
(24,'Mujer',"zapatoMujer6.webp","DEPORTIVAS CANVAS SUELA VULCANIZADA","Zapatillas deportivas de piel disponible en varios colores. Corte de piel soft. Suela vulcanizada",'26',489,599,9,null),
(25,'Mujer',"ropaMujer1.webp","PANTALÓN JOGGER CARGO","Pantalón de tiro alto con cintura elástica. Bolsillos laterales y de plastrón con solapa en pernera",'30',489,599,8,null),
(26,'Mujer',"ropaMujer2.webp","PANTALÓN FELPA ANCHO","Pantalón de tiro alto con cintura elástica ajustable con cordones. Pernera ancha",'28',589,699,7,null),
(27,'Mujer',"ropaMujer3.webp","SUDADERA CAPUCHA","Pantalón de tiro alto con cintura elástica. Bolsillos laterales y de plastrón con solapa en pernera",'MD',400,499,10,null),
(28,'Mujer',"ropaMujer4.webp","CHALECO REVERSIBLE WATER REPELLENT","Chaleco acolchado de cuello subido con capucha ajustable con cordón y manga sisa",'G',1199,1299,6,null),
(29,'Mujer',"ropaMujer5.webp","CHALECO REVERSIBLE","Chaleco acolchado water repellent. Cuello subido y manga sisa. Bajo ajustable con cordones elásticos",'G',689,749,7,null),
(30,'Mujer',"ropaMujer6.webp","VESTIDO PUNTO MIDI","Vestido con escote pico cruzado y manga larga",'30',691,799,8,null),
(31,'Mujer',"topMujer1.webp","BLAZER VESTIDO LIMITED EDITION","Blazer vestido de cuello solapa y escote pico cruzado. Manga larga con hombreras",'28',2699,2799,5,null),
(32,'Mujer',"topMujer2.webp","ABRIGO LARGO LIMITED EDITION","Abrigo entallado confeccionado con tejido en mezcla de lana. Cuello solapa y manga larga",'MD',3000,3299,4,null),
(33,'Mujer',"topMujer3.webp","FALDA DRAPEADA TERCIOPELO","Falda tubo de tiro alto. Detalle tejido drapeado en lateral. Cierre con cremallera oculta en espalda",'G',691,749,8,null),
(34,'Mujer',"topMujer4.webp","VESTIDO MIDI PLISADO","Vestido con escote pico cruzado y manga larga. Cierre frontal cruzado con botones metálicos a presión",'MD',1200,1299,8,null),
(35,'Mujer',"topMujer5.webp","ABRIGO CON LANA","Abrigo confeccionado con tejido en mezcla de lana. Cuello solapa y manga larga.",'G',2200,2299,8,null),
(36,'Mujer',"topMujer6.webp","JERSEY CASHMERE","Jersey confeccionado con tejido 100% cashmere. Cuello redondo y manga larga.",'28',2699,2799,8,null),
(37,'Niños',"zapatoNiño1.webp","DEPORTIVO COMBINADO","Deportivo en combinación de colores y materiales. Cierre mediante cordones ajustables.",'20',649,749,8,null),
(38,'Niños',"zapatoNiño2.webp","BOTÍN DEPORTIVO ELÁSTICO","Botín deportivo de calce fácil con elástico en la parte frontal. Cierre mediante cinta adhesiva.",'22',699,749,8,null),
(39,'Niños',"zapatoNiño3.webp","BOTA PIEL FORRADA MONTAÑA","Bota forrada tipo montaña 100% piel vacuna. Cierre mediante cordones ajustables.",'21',1300,1399,8,null),
(40,'Niños',"zapatoNiño4.webp","BOTÍN DEPORTIVO MICKEY & FRIENDS ©DISNEY","Botín deportivo con estampado ©DISNEY. Cierre mediante cordones y cremallera lateral.",'19',599,699,8,null),
(41,'Niños',"zapatoNiño5.webp","DEPORTIVO SOCK","Deportivo de tejido elástico. Construcción estilo calcetín con cierre mediante cordones elásticos decorativos.",'20',599,699,8,null),
(42,'Niños',"zapatoNiño6.webp","DEPORTIVO PLAYSTATION © SONY INTERACTIVE ENTERTAINMENT","Deportivo de construcción tipo calcetín con estampado y detalles PLAYSTATION.",'22',899,999,8,null),
(43,'Niños',"ropaNiño1.webp","SOBRECAMISA PANA BORREGUILLO","Sobrecamisa de pana con cuello solapas y manga larga.",'CH',700,749,8,null),
(44,'Niños',"ropaNiño2.webp","CAMISA CUADROS BOLSILLO","Camisa cuello solapas y manga larga. Cierre botonadura y bolsillo tipo plastrón en delantero.",'CH',400,469,10,null),
(45,'Niños',"ropaNiño3.webp","SOBRECAMISA BORREGUILLO","Sobrecamisa con cuello solapas y manga larga. Cierre botonadura tipo presión y bolsillo en delantero.",'CH',520,599,7,null),
(46,'Niños',"ropaNiño4.webp","CAMISA PLISADA CON PAJARITA","Camisa cuello solapas y manga larga. Cierre botonadura frontal.",'CH',199,269,15,null),
(47,'Niños',"ropaNiño5.webp","CAMISA SLIM FIT ESTRUCTURA","Camisa slim fit con cuello solapas y manga larga. Cierre botonadura frontal.",'CH',439,529,9,null),
(48,'Niños',"ropaNiño6.webp","PANTALÓN SPORTY COLOR BLOCK","Pantalón cinturilla elástica con cordones ajustables frontal. Bolsillos delanteros.",'CH',400,469,8,null),
(49,'Niños',"topNiño1.webp","CHAQUETA NEOPRENO SPORTY ACOLCHADA","Chaqueta con capucha y manga larga. Cierre cremallera frontal y bolsillos delanteros.",'CH',700,749,8,null),
(50,'Niños',"topNiño2.webp","CAMISETA SPORTY FLÚOR","Camiseta cuello redondo a contraste y manga larga. Estampado en delantero.",'CH',299,329,8,null),
(51,'Niños',"topNiño3.webp","BOTÍN DEPORTIVO CALCETÍN","Botín deportivo calcetín monocolor con cámara de aire. Tiradores delantero y trasero.",'20',799,899,8,null),
(52,'Niños',"topNiño4.webp","PANTALÓN SPORTY LOGO EMBOSSED","Pantalón con cinturilla elástica ajustable cordón. Bolsillos delanteros.",'CH',499,529,8,null),
(53,'Niños',"topNiño5.webp","GORRO PUNTO FLÚOR","Gorro de punto acabado vuelta en bajo con aplique etiqueta.",'CH',200,249,8,null),
(54,'Niños',"topNiño6.webp","SUDADERA POLAR SPORTY FLÚOR","Sudadera con capucha y manga larga. Bolsillo tipo canguro frontal. Estampado texto en pecho y en manga.",'CH',499,599,8,null);


CREATE TABLE pedidoVenta(
idPedidoVenta int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
idVenta int(5),
idProducto int(5),
cantidad int(5),
descuento float(7,2),
total float(7,2)
);

INSERT INTO pedidoVenta VALUES(1,1,1,2,15.6,567.52),(2,2,2,1,20.61,435.52),(3,1,3,1,6.7,325.6);

CREATE TABLE imagen(
idImagen int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
idProducto int(5),
FOREIGN KEY(idProducto) REFERENCES producto(idProducto),
nombre varchar(60)
);

INSERT INTO imagen VALUES(1,1,'Zapato bogue'),(2,2,'Bota alta'),(3,3,'Btín elástico');

CREATE TABLE pedidoCompra(
idPedidoCompra int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
idCompra int(5),
FOREIGN KEY(idCompra) REFERENCES compra(idCompra),
idProducto int(5),
FOREIGN KEY(idProducto) REFERENCES producto(idProducto),
cantidad int(5),
total float(7,2)
);

INSERT INTO pedidoCompra VALUES(1,1,1,5,5739.5),(2,2,2,1,7349.5),(3,3,3,2,4564.5);

