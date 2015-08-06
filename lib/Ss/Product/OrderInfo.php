<?php


namespace Ss\Product;


class OrderInfo {

    public $id;
    private $table = "ss_order";

    function __construct($id=0){
        global $db;
        $this->id = $id;
        $this->db  = $db;
    }

    function OrderArray(){
        $datas = $this->db->select($this->table,"*",[
            "id" => $this->id,
            "LIMIT" => "1"
        ]);
        return $datas['0'];
    }

    function Del(){
        $this->db->delete($this->table,[
            "id" => $this->id
        ]);
    }
}