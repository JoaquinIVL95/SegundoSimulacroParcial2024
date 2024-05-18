<?php

Class MotoImportada extends Moto{


    private $paisOrigen;
    private $impuesto_imp;

    public function __construct($codigo, $costo, $anoFabricado, $caracteristicas, $increAnual, $activa, $paisOrigen, $impuesto_imp)
    {
        parent::__construct($codigo, $costo, $anoFabricado, $caracteristicas, $increAnual, $activa);
        $this->paisOrigen = $paisOrigen;
        $this->impuesto_imp = $impuesto_imp;
    }


    public function getPaisOrigen()
    {
        return $this->paisOrigen;
    }
    public function setPaisOrigen($paisOrigen)
    {
        $this->paisOrigen = $paisOrigen;
    }

    public function getImpuesto_imp()
    {
        return $this->impuesto_imp;
    }
    public function setImpuesto_imp($impuesto_imp)
    {
        $this->impuesto_imp = $impuesto_imp;

    }

    public function darPrecioVenta()
    {
        $precio = parent::darPrecioVenta();
        if($precio >=0){
            $precio = $precio + $this->getImpuesto_imp();

        }

        return $precio;
    }



    public function __toString()
    {
        return
        parent::__toString(). "\n" . 
        "Importada desde: " . $this->getPaisOrigen() . "\n" . 
        "Costo por importacion: " . $this->getImpuesto_imp();
    }
}