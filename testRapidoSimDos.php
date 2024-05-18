<?php

include 'Cliente.php';
include 'Moto.php';
include 'MotoImportada.php';
include 'MotoNacional.php';
include 'Venta.php';
include 'Empresa.php';

$objCliente1 = new Cliente ("Jorge" , "Gonzalez" , true , "DNI" , "38892401");
$objCliente2 = new Cliente ("karen" , "Ramirez" , true , "DNI" , "28394921");

$colObjClientes = [$objCliente1, $objCliente2];

$objMoto1 = new MotoNacional (11, 400, 2022 , "Benelli Imperiale 400" , 85 , true, 10);
$objMoto2 = new MotoNacional (12, 250, 2021, "Zanella Zr 150 Ohc", 70, true, 10);
$objMoto3 = new MotoNacional (13, 500, 2023, "Zanella Patagonian Eagle 250", 55, false, null);
$objMoto4 = new MotoImportada(14, 1000, 2020, "Pitbike EnduroMotocross Apollo Aiii 190cc Plr" , 100, true, "Francia", 6244400);

$colObjMotos = [$objMoto1, $objMoto2, $objMoto3, $objMoto4 ];
$colVentas=[];

$objEmpresa = new Empresa ("Alta Gama", "Av Argenetina 123", $colObjClientes, $colObjMotos, $colVentas);
echo "\n-------------Ventas----------------------\n\n";

$colCodMotos1= [11, 12,13, 14];
$venta1 = $objEmpresa->registrarVenta($colCodMotos1, $objCliente2);
echo $venta1;

echo "\n-----------------------------------\n\n";

$colCodMotos2= [13, 14];
$venta2 = $objEmpresa->registrarVenta($colCodMotos2, $objCliente2);
echo $venta2;

echo "\n-----------------------------------\n\n";

$colCodMotos3= [14];
$venta3 = $objEmpresa->registrarVenta($colCodMotos3, $objCliente2);
echo $venta3;

echo "\n----------------Informes-------------------\n\n";

echo $objEmpresa ->informarSumaVentasNacionales();

echo "\n-----------------------------------\n\n";

echo $objEmpresa->informarVentasImportadas();

echo "\n-----------------------------------\n\n";

// echo $objEmpresa;
