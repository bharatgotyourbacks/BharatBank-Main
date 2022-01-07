<?php
namespace Bank\Operations;

class Balance
{   private $Accountno;
    public function __Construct($Accountno){
        $this->Accountno=$Accountno;
    }
    public function bal()
    {
        $json = file_get_contents('Bank.json');

        $json_data = json_decode($json, true);

            return ($json_data['users'][$this->Accountno]['Amount']);


    }
}


