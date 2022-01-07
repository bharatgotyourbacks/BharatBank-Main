<?php

namespace Bank;
require ("vendor/autoload.php");

use Bank\Contracts\Bankinterface;
use Bank\Operations\Transfer;
use Bank\Operations\Balance;
use Bank\Operations\Transaction;
use Bank\Operations\Account2account;


 class Bank implements Bankinterface
 {

     /**
      * @param $accountNo
      * @param $amt
      * @return int
      */

    function cash($accountNo, $amt): int
    {
        $obj = new Transfer($accountNo,$amt);
        return ($obj->addcash());
    }


    function getBalance($accountNo): int
    {
        $obj = new Balance($accountNo);
        return $obj->bal();
    }


    function getStatement($accountNo): int
    {
        $obj = new Transaction($accountNo);
        return $obj->statement();
    }


    function atoa($source, $destination, $amount): array

    {
        $obj = new Account2account($source, $destination, $amount);
        return $obj->a2a();
    }
}
