
<?php

    class Product{
        protected $id;
        protected $title;
        protected $price ;


        public function __construct($id, $title, $price){

            echo "\n__ Product Constructor __\n";
            $this->id = $id;
            $this->title = $title;
            $this->price = $price;

        }

        public function setProduct($id, $title, $price){

            echo "<br> ___Product Constructor__   <br>" ;
            $this->id = $id;
            $this->title = $title;
            $this->price = $price;

        }

        public final function UserInformation(){ //final prevent the methaods
            echo "Alauddin Najim";
        }


        public function showInfo(){
            echo  "<br>";
            echo "ID : {$this->id} <br>";
            echo "Title  : {$this->title} <br>";
            echo "Price : {$this->price} <br>";
        }
    }




?>