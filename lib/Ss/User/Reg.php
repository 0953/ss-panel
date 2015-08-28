<?php

namespace Ss\User;


class Reg {

    private $db;

    private $table = "user";

    function __construct(){
        global $db;
        $this->db = $db;
    }

    function GetLastPort(){
        $datas = $this->db->select('ss_port',"*",[
            "used" => 0,
            "ORDER" => "id AESC",
            "LIMIT" => 1
        ]);
        
        if(count($datas) == 1){
            $this->db->update('ss_port', 
                [
                    "used" => 1
                ], [
                    "id" => $datas['0']['id']
                ]);
            return $datas['0']['port'];
        }else{
            return 0;
        }

    }

    function Reg($username,$email,$pass,$plan,$transfer,$invite_num,$ref_by,$node){

        $sspass = \Ss\Etc\Comm::get_random_char(8);

        $uid = $this->db->insert($this->table,[
            "user_name" => $username,
            "email" => $email,
            "pass" => $pass,
            "passwd" => $sspass,
            "node_id" => $node,
            "t" => '0',
            "u" => '0',
            "d" => '0',
            "plan" => $plan,
            "transfer_enable" => $transfer,
            "port" => $this->GetLastPort(),
            "invite_num" => $invite_num,
            "money" => '0',
            "#reg_date" =>  'NOW()',
            "ref_by" => $ref_by,
            "f_adfilter" => 0
        ]);

        if(true){
            $ssh = new \Ss\User\Ssh();
            $ssh = $ssh->getUnallocated();
            $ssh->allocat($uid);
        }
    }

}