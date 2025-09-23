<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionUserCheckCoinDeductionUserDTO {

    /**
        是否是白名单用户
     **/
    public $is_white_user;

    /**
        是否透出抵扣模块
     **/
    public $can_show;


    public function getIsWhiteUser() : bool{
        return $this->is_white_user;
    }

    public function setIsWhiteUser(bool $isWhiteUser){
        $this->is_white_user = $isWhiteUser;
    }

    public function getCanShow() : bool{
        return $this->can_show;
    }

    public function setCanShow(bool $canShow){
        $this->can_show = $canShow;
    }


}

