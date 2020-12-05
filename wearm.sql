DROP DATABASE IF EXISTS wearm;
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

CREATE TABLE categoria(
idCategoria int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre varchar(45)
);

CREATE TABLE venta(
idVenta int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
idCliente int(5),
FOREIGN KEY(idCliente) REFERENCES cliente(idCliente),
idEmpleado int(5),
FOREIGN KEY (idEmpleado) REFERENCES empleado(idEmpleado),
fecha date,
total float(7,2)
);

CREATE TABLE compra(
idCompra int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
idEmpleado int(5),
FOREIGN KEY(idEmpleado) REFERENCES empleado(idEmpleado),
fecha date,
total float(7,2)
);

CREATE TABLE producto(
idProducto int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
idCategoria int(5),
FOREIGN KEY(idCategoria) REFERENCES categoria(idCategoria),
nombre varchar(60),
descripcion varchar(100),
talla_ropa set('CH','MD','G'),
talla_zapato set('20','21','22','23','24','25','26','27','28','29','30'),
costo float(7,2),
precio float(7,2),
stock int(5),
disponibilidad boolean
);

CREATE TABLE pedidoVenta(
idPedidoVenta int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
idVenta int(5),
idProducto int(5),
cantidad int(5),
descuento float(7,2),
total float(7,2)
);

CREATE TABLE imagen(
idImagen int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
idProducto int(5),
FOREIGN KEY(idProducto) REFERENCES producto(idProducto),
nombre varchar(60)
);

CREATE TABLE pedidoCompra(
idPedidoCompra int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
idCompra int(5),
FOREIGN KEY(idCompra) REFERENCES compra(idCompra),
idProducto int(5),
FOREIGN KEY(idProducto) REFERENCES producto(idProducto),
cantidad int(5),
total float(7,2)
);

