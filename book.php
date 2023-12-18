
<?php

class Book {
    private $ISBN; 
    private $title;
    private $genra;
    private $price;
    private $nbrofpages;
    private $Auhor;

    public function __construct($ISBN , $title , $genra , $price , $nbrofpages , $Auhor) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->genra = $genra;
        $this->price = $price;
        $this->nbrofpages = $nbrofpages;
        $this->Auhor = $Auhor;
    }
    

    /**
     * Get the value of ISBN
     */ 
    public function getISBN()
    {
        return $this->ISBN;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of genra
     */ 
    public function getGenra()
    {
        return $this->genra;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of nbrofpages
     */ 
    public function getNbrofpages()
    {
        return $this->nbrofpages;
    }

    /**
     * Get the value of Auhor
     */ 
    public function getAuhor()
    {
        return $this->Auhor;
    }
}