<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleItemMerchantDataDO {

    /**
        招商活动 id
     **/
    public $merchant_act_id;


    public function getMerchantActId() : int{
        return $this->merchant_act_id;
    }

    public function setMerchantActId(int $merchantActId){
        $this->merchant_act_id = $merchantActId;
    }


}

