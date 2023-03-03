CREATE DATABASE pizzeria;

USE pizzeria;

CREATE TABLE pedidos (
id_pedido	INT AUTO_INCREMENT,
id_cliente	INT,
fecha		DATE,
hora		TIME,
importe		FLOAT,
PRIMARY KEY (id_pedido));

CREATE TABLE detalles (
id_pedido	INT,
id_pizza	INT,
cantidad	INT);

CREATE TABLE clientes (
id_cliente	INT AUTO_INCREMENT,
nombre		VARCHAR(20),
direccion	VARCHAR(50),
telefono	VARCHAR(20),
email		VARCHAR(50),
PRIMARY KEY (id_cliente)
);

CREATE TABLE pizzas (
id_pizza	INT AUTO_INCREMENT,
nombre		VARCHAR(20),
ingredientes VARCHAR(70),
tamaño		VARCHAR(15),
precio		FLOAT,
PRIMARY KEY (id_pizza));

DELETE FROM pizzas;
INSERT INTO pizzas VALUES
(1,'Muzzarella','Muzzarella, salsa, orÃ©gano, aceitunas',NULL,60),
(2,'Muzza con JamÃ³n','Muzzarella, salsa, orÃ©gano, aceitunas, jamÃ³n',NULL,70),
(3,'Calabresa','Muzzarella, salsa, longaniza y ajÃ­ molido.',NULL,100),
(4,'Primavera','Pizza primavera grande  JamÃ³n, muzzarella, salsa, rodajas de tomate ',NULL,110);

DELETE FROM clientes;
INSERT INTO clientes VALUES
(1,'Alejandro','123','Rivadavia 1234','4567-7654','asd@asd.com'),
(2,'Javier','321','Sarasa 333','4567-8910','notengo@hotmail.com');