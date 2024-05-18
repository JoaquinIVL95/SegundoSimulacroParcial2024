<?php


Class MotoNacional extends Moto{

    private $porcDesc;

    public function __construct($codigo, $costo, $anoFabricado, $caracteristicas, $increAnual, $activa, $porcDesc)
    {
        parent::__construct($codigo, $costo, $anoFabricado, $caracteristicas, $increAnual, $activa);
        $this->porcDesc = $porcDesc;
    }

    public function getPorcDesc(){
        return $this->porcDesc;
    }
    public function setPorcDesc($porcDesc){
        $this->porcDesc = $porcDesc;
    }

    public function darPrecioVenta()
    {
        $precio = parent::darPrecioVenta();
        if($precio >=0){
            $precio = ($precio * $this->getPorcDesc()) /100;
        }
        return $precio;
    }



    public function __toString()
    {
        return parent::__toString()."\nPorcentaje de descuento: ".$this->porcDesc;
    }

}