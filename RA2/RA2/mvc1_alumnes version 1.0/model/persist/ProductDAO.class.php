<?php
require_once "model/Product.class.php";
require_once "model/persist/DBConnect.class.php";
require_once "model/persist/ModelInterface.php";


//class to handle a category
class ProductDAO implements ModelInterface
{

    //propietat que tenen tots els DAO per connectar-se a l'arxiu i poder fer les accions bàsiques generals
    private $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect("model/resources/products.txt");
    }

    /**
     * Recull totes les categories
     * @param void
     * @return vector amb tots els objectes de categories
     */
    public function listAll()
    {

        $response = array();
        $linesToFile = array();
        $linesToFile = $this->dbConnect->realAllLines();
        if (count($linesToFile) > 0) {
            foreach ($linesToFile as $line) {
                if (!empty($line)) {
                    $pieces = explode(";", $line);
                    $product = new Product($pieces[0], $pieces[1], $pieces[2], $pieces[3], $pieces[4]);
                    $response[] = $product;
                }
            }
        }

        return $response;
    }


    public function add($category)
    {

        //to do

    }


    public function modify($category)
    {

        // to do

    }

    public function delete($id)
    {

        //to do

    }

    public function searchById($id) {
    $products = $this->listAll();

    foreach ($products as $product) {
        // trim() para elimina los saltos de linea del archivo txt
        if (trim($product->getId()) == trim($id)) {
            return $product;
        }
    }
    return null;
}
}
