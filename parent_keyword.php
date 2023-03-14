<?php
      
      class User{
        
        public function __construct(){
          echo "In User Construction \n";
        }
      }
      
      
      
      class Employee extends User{
        
        public function __construct(){
          parent :: __construct();
          echo "In Employee Construction \n";
        }
      }
      
       class Manager extends Employee{
        
        public function __construct(){
          parent :: __construct();
          echo "In Manager Construction \n";
        }
      }
      
      
      $user = new User();
      $employee = new Employee();
      $manager = new Manager();
      
      
      
      
?>