<?php


namespace Ss\Product;


 class Product {

     public  $id;
     private $db;

     private $table = "ss_product";

     function __construct($id=0){
         global $db;
         $this->id = $id;
         $this->db  = $db;
     }

     function AllProduct(){
        $datas = $this->db->select($this->table,"*");
        return $datas;
     }

     //del user
     function del(){
         $this->db->delete($this->table,[
             "id" => $this->id
         ]);
         return 1;
     }
 }
