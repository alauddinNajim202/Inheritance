<?php   

    class Controller{

        private $model;
    

    public function __construct(){
        $this->model = new Model();
    }

    public function invoke(){
        if(!isset($_GET['book'])){
            $books = $this->model->getBooklist();
            include 'booklist.php';
        }else{
            $book = $this->model->getBook($_GET['book']);
            include 'viewbook.php';
        }
    }


}

?>