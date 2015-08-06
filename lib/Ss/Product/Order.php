<?php


namespace Ss\Product;


 class Order {

     public  $id;
     private $db;

     private $table = "ss_order";

     function __construct($id=0){
         global $db;
         $this->id = $id;
         $this->db  = $db;
     }

     function Create($p_id, $p_price, $p_number, $total, $user_id, $status){
        $this->db->insert("ss_order",[
            "p_id" => $p_id,
            "p_price" => $p_price,
            "p_number" => $p_number,
            "total" => $total,
            "user_id" => $user_id,
            "status" => $status,
            "create_time" => (new \DateTime())->format('Y-m-d H:i:s'),
        ]);
     }

     function AllOrder(){
        $datas = $this->db->select($this->table,"*", [
             "ORDER" => "create_time DESC"
         ]);
        return $datas;
     }

    function AllNotPaiedOrder(){
        $datas = $this->db->select($this->table,"*", [
            "status" => 0,
            "ORDER" => "create_time DESC"
         ]);
        return $datas;
     }

     function del(){
         $this->db->delete($this->table,[
             "id" => $this->id
         ]);
         return 1;
     }
 }
