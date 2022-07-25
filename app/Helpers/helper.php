<?php 
    function cardArray(){
        $collectionCart = \Cart::getContent();
        return $collectionCart->toArray();
    }

?>