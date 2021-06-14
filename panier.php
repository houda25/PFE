<?php
require '_db.class.php';
class Panier{

    public function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }
    
        if(isset($_SESSION['paniers'])){
            $_SESSION['panier']=array();
    }
}
    public function add($product_id){
           $_SESSION['panier'][$product[0]->id]=1
    }
    public function getPanier(){
        if(isset($_SESSION['paniers'][$this->name]))
           return $_SESSION['paniers'][$this->name];
           return array();
    }
    public function clear(){
        if(isset($_SESSION['paniers'][$this->name]))
           unset ($_SESSION['paniers'][$this->name]);
    }
    

}
?>