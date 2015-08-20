<?php

namespace Ss\Node;
// extends Ss\Etc\Db
 class Node {

     public  $id;
     public  $db;

     function __construct($id=0){
         global $db;
         $this->id  = $id;
         $this->db  = $db;
     }

     function AllNode(){
         $node_array = $this->db->select("ss_node","*",[
             "ORDER" => "node_order"
             //"LIMIT" => 21
         ]);
         return $node_array;
     }

    function AllNodeAvailable(){
         $node_array = $this->db->select("ss_node","*",[
            "node_state[>]" => 0,
             "ORDER" => "node_order"
             //"LIMIT" => 21
         ]);
         return $node_array;
     }

     function Add($node_name,$node_type,$node_server,$node_method,$node_info,$node_status,$node_state,$node_order){
         $this->db->insert("ss_node", [
             "node_name" => $node_name,
             "node_type" => $node_type,
             "node_server" => $node_server,
             "node_method" => $node_method,
             "node_info" => $node_info,
             "node_status" => $node_status,
             "node_state" => $node_state,
             "node_order" =>  $node_order
         ]);
         return 1;
     }

     function NodesArray($node_type){
         $node_array = $this->db->select("ss_node","*",[
             "node_type[=]" => $node_type,
             "ORDER" => "node_order",
             //"LIMIT" => 21
         ]);
         return $node_array;
     }
}