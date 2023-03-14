<?php   


    class product{

        protected $id;
        protected $title;
        protected $price;

        public function __construct( $id, $title, $price){

            $this->id = $id;
            $this->title = $title;
            $this->price = $price;
        }

        public function setProduct( $id, $title, $price){

            $this->id = $id;
            $this->title = $title;
            $this->price = $price;
        }


        public function showInfo(){
            echo "<br> -- Product Info -- <br>";
            echo "Id : ".$this->id . "<br>";
            echo "Title : ".$this->title . "<br>";
            echo "Title : ".$this->price. "<br>";
        }


    }


    class book extends product{

        protected $bookStore;

        public function __construct($id, $title, $price, $bookStore){
            $this->id = $id;
            $this->title = $title;
            $this->price = $price;
            $this->bookStore = $bookStore;
        }

        public function showInfo(){
            echo "<br> -- Product Info -- <br>";
            echo "Id : ".$this->id . "<br>";
            echo "Title : ".$this->title . "<br>";
            echo "Title : ".$this->price. "<br>";
            echo "Store : ".$this->bookStore. "<br>";
        }

    }

    class CD extends product{
        
    }

    // object book 
    $book = new book(1, "php oop", 450, "Dhaka");
    $book->showInfo();

    // object cd

    $cd = new CD(2, "Enigma McMxc", 9000);
    //$cd->setProduct(2, "Enigma McMxc", 9000);
    $cd->showInfo();

    echo "<pre>"; 
    var_dump($book);
    echo "</pre>";








?>