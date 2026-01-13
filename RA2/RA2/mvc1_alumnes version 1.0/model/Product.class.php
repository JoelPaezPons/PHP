<?php

class Product
{

    private $id;

    private $marca;

    private $name;

    private $description;

    private $precio;

    private $productList = array();


    public function __construct($id = NULL, $marca = NULL, $name = NULL, $description = NULL, $precio = NULL)
    {
        $this->id = $id;
        $this->marca = $marca;
        $this->name = $name;
        $this->description = $description;
        $this->precio = $precio;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getMarca()
    {
        return $this->marca;
    }


    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function setProductList($productList)
    {
        $this->productList[] = $productList;
    }

    public function writingNewLine()
    {
        return "\n$this->id;$this->name;"; // podríem volem algun mètode extrar de la classe que ens fos interessant i general
    }
}
