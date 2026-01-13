<?php
//crido de manera general tot el que necessitaré cridar

//to do

require_once "controller/ControllerInterface.php";
require_once "view/ProductView.class.php";
require_once "model/persist/ProductDAO.class.php";
require_once "model/Product.class.php";
require_once "util/CategoryMessage.class.php";
require_once "util/CategoryFormValidation.class.php";

class ProductController implements ControllerInterface
{

    //atributs que segur que tindran tots els controladors
    private $view;
    private $model;

    //constructor del controlador. Instancia objectes de les classes de la vista i el model necessàries per poder 
    //comunicar aquest controlador amb la resta
    /**
     * Constructor del controlador. Instancia objectes de les classes de la vista i el model 
     * que són necessaris per poder comunicar aquest controlador amb la resta de l'aplicació
     * @param none
     * @return none
     **/
    public function __construct()
    {

        // càrrega de la vista
        $this->view = new ProductView();

        // càrrega del model de dades
        $this->model = new ProductDAO();
    }


    /**
     * Aquest mètode el tenen tots els nostres controladors
     * Serveix per saber què fer per cada opció demanada per l'usuari: llistar, afegir, eliminar,...
     * @param none
     * @return none
     **/
    public function processRequest()
    {

        $request = NULL;

        if (isset($_GET["option"])) {
            $request = $_GET["option"];
        } else if (isset($_GET["option"])) {
            $request = $_GET["option"];
        }

        switch ($request) {
            case "list_all":
                $this->listAll();
                break;
            case "form_search": // Añade este caso
                $this->view->display("view/form/ProductSearchForm.php");
                break;
            case "search_by_id":
                $this->searchById();
                break;
            default:
                $this->view->display();
        }
    }

    /**
     * Aquest mètode ens mostra tots els productes
     * @param none
     * @return none
     **/

    public function listAll()
    {
        $products = array();
        //llamamos al modelo, es obligatorio
        $products = $this->model->listAll();

        if (!empty($products)) {
            $this->view->display(template: "view/form/ProductList.php", content: $products);
        }
    }

    /**
     * Aquest mètode ens mostra el formulari necessari per afegir un nou 
     * producte
     * @param none
     * @return none
     **/
    public function formAdd()
    {
        //to do
    }

    /**
     * Aquest mètode ens afegeix el producte al fitxer
     * @param none
     * @return none
     **/
    public function add()
    {
        //to do
    }

    //altres mètodes necessaris: to do
    public function modify()
    {
        //to do
    }
    public function delete()
    {
        //to do
    }
    public function searchById()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : null;

        if ($id) {
            $product = $this->model->searchById($id);

            if ($product) {
                $this->view->display("view/form/ProductList.php", array($product));
            } else {
                $this->view->display("view/form/ProductSearchForm.php");
                echo "El ID $id no existe en el archivo productos.txt";
            }
        }
    }
}
