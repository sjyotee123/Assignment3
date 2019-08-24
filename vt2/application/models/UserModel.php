<?php
class UserModel extends CI_Model {

    private $reg_table = 'reg';

    function __construct() {
        parent::__construct();
    }

    function insert_reg($companyname, $companywebsite, $companydescription, $dateofinception, $cinnumber, $uamnumber, $address, $founder, $contactperson, $contactnumber, $sdg, $projrep, $projimg, $projvideo, $projectname, $projectdescription, $companyawards, $membership) {
        $data = array('companyname' => $companyname, 'companywebsite' => $companywebsite, 'companydescription' => $companydescription, 'dateofinception' => $dateofinception, 'cinnumber' => $cinnumber, 'uamnumber' => $uamnumber, 'address' => $address,'founder' => $founder,'contactperson' => $contactperson,'contactnumber' => $contactnumber,'sdg' => $sdg,'projrep' => $projrep,'projimg' => $projimg,'projvideo' => $projvideo,'projectname' => $projectname,'projectdescription' => $projectdescription,'companyawards' => $companyawards,'membership' => $membership);
        $result = $this->db->insert($this->reg_table, $data);
        if ($result !== NULL) {
            return TRUE;
        }
        return FALSE;
    }

}