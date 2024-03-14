<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleOrderCompensateRefuseReasonData {

    /**
        卖家选择的拒绝原因
     **/
    public $reason_choices;

    /**
        拒绝的描述
     **/
    public $reason_desc;


    public function getReasonChoices() : array{
        return $this->reason_choices;
    }

    public function setReasonChoices(array $reasonChoices){
        $this->reason_choices = $reasonChoices;
    }

    public function getReasonDesc() : string{
        return $this->reason_desc;
    }

    public function setReasonDesc(string $reasonDesc){
        $this->reason_desc = $reasonDesc;
    }


}

