<?php
namespace Bank\Operations;

/**
 *
 */



class Transaction
{   private $Accountno;
    public function __Construct($Accountno){
        $this->Accountno=$Accountno;
    }
    public function statement()
    {$d = $this->Accountno;
        $json = file_get_contents('Bank.json');
        $json_data = json_decode($json, true);
        file_put_contents('Transaction.json',$json_data);
        return $json_data;





    }
}
