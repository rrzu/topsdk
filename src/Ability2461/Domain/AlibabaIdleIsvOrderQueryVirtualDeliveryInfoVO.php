<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryVirtualDeliveryInfoVO {

    /**
        虚拟收货账号
     **/
    public $account;

    /**
        买家下单ip
     **/
    public $ip;


    public function getAccount() : string{
        return $this->account;
    }

    public function setAccount(string $account){
        $this->account = $account;
    }

    public function getIp() : string{
        return $this->ip;
    }

    public function setIp(string $ip){
        $this->ip = $ip;
    }


}

