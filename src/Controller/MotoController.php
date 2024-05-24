<?php

namespace Src\Controller;

use Src\Manager\DatabaseManager;
use Src\Manager\MotoManager;
use Src\entity\Moto;

class MotoController
{
    private MotoManager $motoManager;
    public function __construct()
    {
        //J'injecte un nouvelle objet ServiceManager dans mon constructeur 
        
        $this->motoManager = new MotoManager();
    }

    // Route: /moto
    public function getAll()
    {
        $motos = ($this->motoManager->findAll());
       
        include(__DIR__ . "/../../Templates/moto/index.php");
    }

    // Route: /moto/$id
    public function getById($id)
    {
        $moto = $this->motoManager->findById($id);

        if ($moto) {
            var_dump ($moto);
        } else {
            echo ("Moto not found!");
        }
    echo "ROUTE: /moto/$id   (getById)";
    include(__DIR__ . "/../../Templates/moto/show.php");
    }
        
    

    // Route: /moto/$type
    public function getByType($type)
    {
        echo "ROUTE: /moto/$type   (getByType)";
    }

    // Route: /moto/add/
    public function add($id)
    {
        //Verif SI form valider ( methode POST )
        //SI tous les champs sont fournies
        //add en BDD
        //Verify method
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $brand = isset($_POST['brand']) && strlen(trim($_POST["brand"])) != 0 ? $_POST['brand'] : false;
            $model = isset($_POST['model']) && strlen(trim($_POST["model"])) != 0 ? $_POST['model'] : false;
            $type = isset($_POST['type']) && strlen(trim($_POST["type"])) != 0 ? $_POST['type'] : false;
            $price = isset($_POST['price']) ? $_POST['price'] : false;
            $image = isset($_POST['image']) && strlen(trim($_POST["brand"])) != 0 ? $_POST['image'] : '/img/placeholder.jpg';
           
            var_dump($_POST);

            if ($brand != false && $model != false && $type != false && $price != false) {
                
                $newMoto = new Moto(0, $brand, $model, $type, $price, $image);
                
                $this->motoManager->add($newMoto);
                header("http://localhost/exampoo/index.php/moto/");
            } else {
                echo ("parametres invalide");
            }

        } else {
            
        }
       
       
        echo "ROUTE: /moto/add/$id  (add)";
        include(__DIR__ . "/../../Templates/moto/add.php");
    
        }
        //redirection index

        //Afficher formulaire
        

    // Route: /moto/edit/$id
    public function edit(int $id)
    {
        //Verif si form valider ( methode POST )
        // Tout les champs sont fournies
        //edit en BDD
        //redirection index
        $moto = $this->motoManager->findById($id);
        var_dump($moto);

        if ($moto) {

                echo ("moto updated successfully!");
                var_dump($_POST);
        } else {
            echo ("moto not found!");
        } 
        echo "ROUTE: /moto/edit/$id   (edit)";
        include(__DIR__ . "/../../Templates/moto/edit.php");
    }


       
    

    // Route: /moto/delete/$id
    public function delete(int $id)
    {
        $moto = $this->motoManager->findById($id); 
        if ($moto) {

            echo ("moto deleted successfully!");
            var_dump($_POST);
    } else {
        echo ("moto not found!");
    } 
        echo "ROUTE: /moto/delete/$id   (delete)";
        include(__DIR__ . "/../../Templates/moto/delete.php");
    }
}
