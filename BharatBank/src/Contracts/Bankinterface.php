<?php

namespace Bank\Contracts;



interface Bankinterface
{


    function cash($accountNo, $amt): int;


    function getBalance($accountNo): int;


    function getStatement($accountNo): int;


    function atoa($source, $destination, $amount): array;
}