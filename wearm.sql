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
(14,'Hombre',"topHom2.jpg","JEANS SLIM FIT MAN UNIT. 04","Jeans slim fit con cinco bolsillos. Efecto lavado. Cierre frontal con botones",'32',659.50,799,8,null),
(15,'Hombre',"topHom3.jpg","PANTALON TAILORED MAN UNIT. 02","Pantalón confeccionado en tejido con estructura de algodón. Perneras rectas.",'34',699,799,7,null),
(16,'Hombre',"topHom4.jpg","JERSEY BULKY UNISEX UNIT. 03","Jersey tejido en hilatura con mezcla de lana y lyocell. Cuello",'G',720.40,799,9,null),
(17,'Hombre',"topHom5.jpg","JEANS REGULAR FIT MAN UNIT. 03","Jeans regular fit de efecto lavado. Cinco bolsillos. Cierre frontal con cremallera y botón",'36',710.30,799,6,null),
(18,'Hombre',"topHom6.jpg","BOTIN PIEL VOLUMEN","Botín de piel tipo chelsea. Color negro. Dispone de un elástico y tirador en la zona trasera que facilitan el calce",'27',1859,1999,5,null),
(16,'Mujer',"topHom4.jpg","BOTA ALTA PIEL PUNTA CUADRADA","Zapato tipo bota alta plana de piel de color negro. Corte de piel con vivos en contaste de color",'25',720.40,799,9,null),
(16,'Mujer',"topHom4.jpg","DEPORTIVAS PIEL SOFT","Zapatillas deportivas de piel disponible en varios colores. Corte de piel soft",'25',720.40,799,9,null),
(16,'Mujer',"topHom4.jpg","DEPORTIVO PIEL COMBINADO","Deportivo tipo bamba marrón. Combinación de materiales y tonos en el corte con partes en piel.",'25',720.40,799,9,null),
(16,'Mujer',"topHom4.jpg","DEPORTIVAS ELÁSTICAS CALCETÍN","Zapato tipo deportivo disponible en varios colores. Corte elástico efecto calcetín",'25',720.40,799,9,null),
(16,'Mujer',"topHom4.jpg","BOTA ALTA PIEL PUNTA CUADRADA","Zapato tipo bota alta plana de piel de color negro. Corte de piel con vivos en contaste de color",'25',720.40,799,9,null),
(16,'Mujer',"topHom4.jpg","BOTA ALTA PIEL PUNTA CUADRADA","Zapato tipo bota alta plana de piel de color negro. Corte de piel con vivos en contaste de color",'25',720.40,799,9,null),


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

