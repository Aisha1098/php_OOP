<?php

require('product.php');

class Cart{
    private $products = array();

    public function add(Product $product){
        $this->products[] = $product;
    }
    public function remove(Product $product){
        foreach($this->products as $key => $p){
            if($p->getId() === $product->getId()){
                unset($this->products[$key]);
                break;
            }
        }
    }
    public function totalPrice($price='price'){
        return array_sum(array_column($this->products, $price));
    }
    public function clear(){
        $this->products = array();
    }
}
