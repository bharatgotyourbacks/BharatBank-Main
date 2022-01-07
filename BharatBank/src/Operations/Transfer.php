<?php

namespace  Bank\Operations;
class Transfer{
    private $Accountno;
    private $amt;
    public function __Construct($Accountno,$amt){
        $this->Accountno=$Accountno;
        $this->amt=$amt;
    }
    function addcash()
    {
        $json = file_get_contents('Bank.json');

        $json_data = json_decode($json, true);




            $json_data['users'][$this->Accountno]['Amount'] = $json_data['users'][$this->Accountno]['Amount'] + $this->amt;
            $json_newdata =  json_encode($json_data);
            file_put_contents('Bank.json',$json_newdata);



            return $json_data['users'][$this->Accountno]['Amount'];





    }
}
