<?php
/**
 * Create minimal classes
 */

 class Mobile{
    private $display_size;
    private $brand;
    private $price;

    public function __construct($display_size, $brand,  $price){
        $this->display_size = $display_size;
        $this->brand        = $brand;
        $this->price        = $price;
    }

    public function display(){
        return $this->display_size . "inc";
    }

    public function brand_name(){
        return $this->brand;
    }

    public function price(){
        return $this->price;
    }

    public function mobile_data(){
        return [
            'brand'     => $this->brand_name(),
            'display'   => $this->display(),
            'price'     => $this->price()
        ];
    }

 }