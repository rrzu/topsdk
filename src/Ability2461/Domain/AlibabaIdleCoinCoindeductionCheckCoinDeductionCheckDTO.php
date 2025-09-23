<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionCheckCoinDeductionCheckDTO {

    /**
        是否可开启
     **/
    public $can_open;


    public function getCanOpen() : bool{
        return $this->can_open;
    }

    public function setCanOpen(bool $canOpen){
        $this->can_open = $canOpen;
    }


}

