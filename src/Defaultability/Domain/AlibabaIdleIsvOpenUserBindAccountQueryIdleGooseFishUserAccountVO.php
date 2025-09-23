<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvOpenUserBindAccountQueryIdleGooseFishUserAccountVO {

    /**
        是否绑定了支付宝
     **/
    public $bind_account;


    public function getBindAccount() : bool{
        return $this->bind_account;
    }

    public function setBindAccount(bool $bindAccount){
        $this->bind_account = $bindAccount;
    }


}

