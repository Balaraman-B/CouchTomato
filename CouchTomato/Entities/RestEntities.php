<?php

class RestEntities {
   
    
    public $name;
    public $type;
    public $price;
    public $city;
    public $Address;
    public $image;
    public $review;
    
    function __construct($name, $type, $price, $city, $Address, $image, $review) {
        
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->roast = $city;
        $this->country = $Address;
        $this->image = $image;
        $this->review = $review;
    }

}

?>
