<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleGoosefishPromotionActivityInfoQueryPromotionActivityInfoVO {

    /**
        当前用户是否参与了营销活动
     **/
    public $joined;


    public function getJoined() : bool{
        return $this->joined;
    }

    public function setJoined(bool $joined){
        $this->joined = $joined;
    }


}

