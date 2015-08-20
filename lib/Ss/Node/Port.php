<?php

namespace Ss\Node;
// extends Ss\Etc\Db
 class Port {

     public  $id;
     public  $db;
     private $table = "ss_port";

     function __construct($id=0){
         global $db;
         $this->id  = $id;
         $this->db  = $db;
     }

     function AllPort(){
         $node_array = $this->db->select($this->table,"*",[
             "ORDER" => "port"
         ]);
         return $node_array;
     }

    function AllPortAvailable(){
         $node_array = $this->db->select($this->table,"*",[
             "used" => 0,
             "ORDER" => "port"
         ]);
         return $node_array;
     }

     function RevertPort($node_id, $port){
        $this->db->update($this->table, [
            'used' => 0
        ], [
            "AND" => [
                'node_id' => $node_id,
                'port' => $port
            ]
        ]);
     }
}