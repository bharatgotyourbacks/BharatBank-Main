<?php
namespace Bank\Operations;

class Account2account
{   private $source, $destination, $amount;
    public function __Construct($source, $destination, $amount){
        $this->source=$source;
        $this->destination=$destination;
        $this->amount=$amount;

    }
    public function a2a()
    {
        $json = file_get_contents('Bank.json');


        $json_data = json_decode($json, true);


            $json_data['users'][$this->source]['Amount'] = $json_data['users'][$this->source]['Amount'] - $this->amount;
            $json_data['users'][$this->destination]['Amount'] = $json_data['users'][$this->destination]['Amount'] + $this->amount;
            $json_newdata =  json_encode($json_data);
            file_put_contents('Bank.json',$json_newdata);
            $r = $json_data['users'][$this->source];
            $t = $json_data['users'][$this->destination];
            $rt = array($r,$t);
        return ($rt);
    }




}

