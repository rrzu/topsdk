<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvUserInfoIdleDepositTopSubVO {

    /**
        保证金余额是否足够
     **/
    public $balance_enough;


    public function getBalanceEnough() : bool{
        return $this->balance_enough;
    }

    public function setBalanceEnough(bool $balanceEnough){
        $this->balance_enough = $balanceEnough;
    }


}

