<?php

namespace Bank\Contracts;



interface Bankinterface
{

<<<<<<< HEAD
    /**
     * @param $accountNo
     * @param $amt
     * returns the Amount after deposit<br>
     * We will take one account holder by entering the account number and then amount too
     * Now that corresponding account will open and
     * Then whatever the amount we enter that will be added to that account in json file.<br>
     * so the amount in json file will get update.<br>
     * <br><br>
     * EXAMPLE:
     * initial amount in account is 2000<br>
     * $Account no :123456<br>
     * $amt :200<br>
     * Output :20200
     * @return int
     */
    function cash($accountNo, $amt): int;

    /**
     * @param $accountNo  account number of user
     * @return int returns the amount<br>
     * To get the particular balance of  an account we have to enter the Account number,
     * If it matches then we can see the balance of that account.<br>
     * EXAMPLE: enter account number 456738 and will get the balance of that account.<br>
     * Balance is: 20200
     * @return int
     *
     */
    function getBalance($accountNo): int;

    /**
     * @param $accountNo
     * @return array
     */
    function getStatement($accountNo): array;

    /**
     * @param $source
     * @param $destination
     * @param $amount
     * @return int
     */
    function Account2($source, $destination, $amount): int;
=======

    function cash($accountNo, $amt): int;


    function getBalance($accountNo): int;


    function getStatement($accountNo): int;


    function atoa($source, $destination, $amount): array;
>>>>>>> 9322c44d74f300cb74955634c30b53f2dfc9f616
}