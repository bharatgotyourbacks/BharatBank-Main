<?php

namespace Bank\Contracts;


/**
 *
 */
interface Bankinterface
{

    /**
     * @param $Accountno
     * @param $amt
     * @return int
     *  We will take one account holder by entering the account number and then amount too
     * Now that corresponding account will open and
     *Then whatever the amount we enter that will be added to that account in json file
     * so the amount in json file will get update
     */
    function cash($Accountno, $amt): int;

    /**
     * @param $Accountno
     * @return int
     * To get the particular balance of  an account we have to enter the Account number,
     * If it matches then we can see the balance of that account
     */
    function getBalance($Accountno): int;

    /**
     * @param $Accountno
     * @return int
     * To get the statements we enter the Account number,then we will get the transactions done through the account
     *
     */
    function getStatement($Accountno): int;

    /**
     * @param $source
     * @param $destination
     * @param $amount
     * @return int
     * We transfer amount from one account to another account by entering both account numbers
     * If accounts found then the money get transfered to source account to destination account
     * Final results will get updated
     */
    function a2a($source, $destination, $amount): int;
}