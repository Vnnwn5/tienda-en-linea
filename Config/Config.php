<?php

const BASE_URL = "http://localhost/Tienda_en_linea";


//Zona horaria
date_default_timezone_set('America/Tijuana');


//Administrador rol
const ADMIN_ROLE = 9;

//Datos de conexion a base de datos
const DB_HOST = "localhost";
const DB_NAME = "db_tiendavirtual";
const DB_USER = "root";
const DB_PASSWORD = "root";
const DB_CHARSET = "charset=utf8";

//Deliminadores decimal y millar Ej. 24,1989.00
const SPD = ".";
const SPM = ",";

//Simbolo de moneda
const SMONEY = "$";

//datos envio de correo
const NOMBRE_REMITENTE = "Tienda Virtual";
const EMAIL_REMITENTE = "no-reply@abelosh.com";
const NOMBRE_EMPRESA = "Vnnwn";
const WEB_EMPRESA = "www.abelosh.com";