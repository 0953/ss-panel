<?php


namespace Ss\User;


 class Ssh {

     public  $id;
     private $db;

     private $table = "ssh_user";
     private $count = 50;

     function __construct($id=0){
         global $db;
         $this->id = $id;
         $this->db  = $db;
     }

    function getCount(){
        $datas = $this->db->select($this->table,"*",[
            "user_id[>]" => 0
        ]);

        return $this->count - count($datas);
    } 

    function getInfo($uid){
        $datas = $this->db->select($this->table,"*",[
            "user_id" => $uid,
            "LIMIT" => "1"
        ]);

        return count($datas) == 0 ? false : $datas['0'];
    }

    function getUnallocated(){
        $datas = $this->db->select($this->table,"*",[
            "user_id" => 0,
            "LIMIT" => "1"
        ]);

        return count($datas) == 0 ? false : new \Ss\User\Ssh($datas['0']['id']);
    }

    function allocat($uid){
        $this->db->update($this->table, [
            'user_id' => $uid
        ], [
            "id" => $this->id
        ]);
    }
 }

