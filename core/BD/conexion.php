<?php
	$conexion=mysql_connect("localhost","root","");
	mysql_select_db("aerolineabd")or die(mysql_error());
	if($conexion)
		echo "Se ha establecido la conexión";
	else
		echo "Falló la conexion";
	mysql_close($conexion);
	/*
	/////////////////////QUERYS BD///////////////////////



create table empleados(id_empleados int primary key auto_increment, nombre varchar(30), apaterno varchar(30), amaterno varchar(30), edad int, telefono varchar(10), direccion varchar(30), id_sexo int, curp varchar(18));
create table sexo(id_sexo int primary key auto_increment, descripcion varchar(10));
create table tipo_empleado(id_tipo_empleado int primary key auto_increment, descripcion varchar(25));
create table puesto_empleado(id_puesto int primary key auto_increment,id_empleado int, id_tipo_empleado int);
create table aeropuerto(id_aeropuerto int primary key auto_increment, nombre varchar(50), id_ciudad int);
create table asignacion_sueldo(id_asignacion_sueldo int primary key auto_increment, descripcion varchar(30), id_sueldo int);
create table sueldo(id_sueldo int primary key auto_increment, cantidad double);
create table pagos(id_pagos int primary key auto_increment, id_asignacion_sueldo int, id_horario int);
create table horario(id_horario int primary key auto_increment, id_puesto int, hora_entrada timestamp, hora_salida timestamp );
create table clientes(id_cliente int primary key auto_increment, nombre varchar(30), apaterno varchar(30), amaterno varchar(30), telefono varchar(10), correo varchar(30), edad int, pasaporte varchar(40));
create table tipo_vuelo(id_tipo_vuelo int primary key auto_increment,descripcion varchar(30), precio double);
create table viajes(id_viajes int primary key auto_increment, id_aeropuerto int, id_aviones int, fecha_salida date, fecha_llegada date, duracion double, id_tipo_vuelo int);
create table num_acompanantes(id_num_acompanante int primary key auto_increment, id_cliente int, id_acompanante int);
create table ciudad(id_ciudad int primary key auto_increment, nombre varchar(30));
create table aviones(id_aviones int primary key auto_increment, nombre varchar(30),id_tipo_avion int);
create table tipo_avion(id_tipo_avion int primary key auto_increment, descripion varchar(100), capacidad_personal int, capacidad_combustible int, capacidad_equipaje int);
create table acompañantes(id_acompañante int primary key auto_increment, nombre varchar(20), apaterno varchar(20), amaterno varchar(20), telefono varchar(10), edad int, pasaporte varchar(30));
create table reservaciones(id_reservaciones int primary key auto_increment, id_cliente int, id_viaje int, id_tipo_pago int);
create table tarjeta(id_tarjeta int primary key auto_increment, id_tipo_tarjeta int ,numero_tarjeta varchar(20), fecha_vencimiento date, titular varchar(50), codigo_seguridad varchar(20), id_cliente int );
create table tipo_tarjeta(id_tipo_tarjeta int primary key auto_increment, descripcion varchar(30));
create table tipo_pago(id_tipo_pago int primary key auto_increment, descripcion varchar(20));
create table deposito(id_deposito int primary key auto_increment, cantidad double, cuenta varchar(20), id_cliente int, fecha date);
create table cancelaciones(id_cancelaciones int primary key auto_increment, id_reservacion int, fecha date);
Create table herramientas(id_herramientas int primary key auto_increment, nombre varchar(30), id_categoria int, precio double, existencia int,codigo varchar(20), modelo varchar(20) );
create table categoria(id_categoria int primary key auto_increment, descripcion varchar(30));
create table encargado_mate(id_encargado_mate int primary key auto_increment, id_puesto int, id_herramienta int);
create table mantenimiento(id_matenimiento int primary key auto_increment, id_aviones int, descripcion_mante varchar(100), id_encargado_mante int, fecha timestamp );
create table piezas(id_piezas int primary key auto_increment, nombre varchar(30), codigo varchar(20), modelo varchar(20), precio double, fecha_compra date);
create table reparacion(id_reparacion int primary key auto_increment, id_mantenimiento int, id_pieza int, cantidad_piezas int);
create table usuarios(id_usuarios int primary key auto_increment, contraseña varchar(10), email varchar(20), tipo_usuario varchar(20), id_registro int);


	*/
?>