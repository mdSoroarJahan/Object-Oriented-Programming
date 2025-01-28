<?php

class Fund{
    public $fund;
    function __construct($initialFund = 0){
        $this->fund = $initialFund;
    }

    public function addFund($money){
        $this->fund += $money;
        $this->totalFund();
    }

    public function deductFund($money){
        $this->fund -= $money;
        $this->totalFund();
    }

    public function totalFund(){
        echo "Total fund is {$this->fund}\n";
    }
}

$companyFund = new Fund(1000);
 $companyFund->addFund(250);
$companyFund->deductFund(50);



?>