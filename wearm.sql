DROP DATABASE IF EXISTS wearm DEFAULT CHARACTER SET utf8;
CREATE DATABASE wearm;
USE wearm;

CREATE TABLE cliente(
idCliente int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre varchar(60),
apellidos varchar(80),
correo varchar(60),
contrasenia varchar(15),
calle varchar(100),
codigoPostal varchar(5),
estado varchar(70),
ciudad varchar(70),
colonia varchar(70)
);

INSERT INTO cliente VALUES(1,'Jose Angel','Peréz Cruz','jose12@gmail.com','jose1221','Zaragoza',2341,'Hidalgo','Pachuca','Tulipanes');

CREATE TABLE empleado(
idEmpleado int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre varchar(60),
apellidos varchar(80),
correo varchar(60),
contrasenia varchar(15),
calle varchar(100),
codigoPostal varchar(5),
estado varchar(70),
ciudad varchar(70),
colonia varchar(70)
);

INSERT INTO empleado VALUES(1,'Edgar','Martinez Sanjuan','edgar32@gmail.com','edgar345','Juaréz',2849,'Hidalgo','Zempoala','Zempoala');
INSERT INTO empleado VALUES(2,'Cristian','Hernandez Bautista','cris78@gmail.com','cris568','Morelos',2840,'Hidalgo','Pachuca','Pachuca');


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
idCategoria int(5),
FOREIGN KEY(idCategoria) REFERENCES categoria(idCategoria),
nombre varchar(60),
descripcion varchar(100),
talla_ropa set('CH','MD','G') NULL,
talla_zapato set('20','21','22','23','24','25','26','27','28','29','30') NULL,
costo float(7,2),
precio float(7,2),
stock int(5),
disponibilidad boolean
);

INSERT INTO producto VALUES(1,1,'Jeremy Zapatos de Cordones Brogue','Zapatos Hombre','','26',435.6,535.67,5,'true'),
							(2,2,'BOTA ALTA PIEL PUNTA CUADRADA','Zapatos Mujer','','24',345.1,455.7,1,'true');
							(3,3,'BOTÍN ELÁSTICOS','Zapatos Niño','','23',245.2,34.8,6,'true');

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

