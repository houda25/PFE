<?php
<script src="js/script.js"></script>
require '_db.class.php';
if(isset($_GET['id']))}
$product=$DB->query('SELECT id FROM products WHERE id=:id', array('id'=>$_GET['id']));
if(empty($product)){
    die(" Ce produit n'existe pas ");
    $panier->add($product[0]->id);
    die(" Le produit a été bien ajouté" );
}else{
    die(" Vous n avez pas sélectionné de produit à ajouter au panier ");
}
?>