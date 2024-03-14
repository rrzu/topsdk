<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvUserInfoIdleUserTopVO {

    /**
        加密用户id
     **/
    public $encrypt_userid;

    /**
        服务保障金信息
     **/
    public $service_deposit;

    /**
        用户选项信息: IDLE_UP（闲鱼升级用户），SDR（已开通七天无理由服务），NFR（已开通描述不符包邮退服务），VNR（已开通虚拟-描述不符包退），FD_24HS（已开通极速发货-24小时），FD_10MS（已开通极速发货-10分钟）
     **/
    public $options;


    public function getEncryptUserid() : string{
        return $this->encrypt_userid;
    }

    public function setEncryptUserid(string $encryptUserid){
        $this->encrypt_userid = $encryptUserid;
    }

    public function getServiceDeposit() : AlibabaIdleIsvUserInfoIdleDepositTopSubVO{
        return $this->service_deposit;
    }

    public function setServiceDeposit(AlibabaIdleIsvUserInfoIdleDepositTopSubVO $serviceDeposit){
        $this->service_deposit = $serviceDeposit;
    }

    public function getOptions() : array{
        return $this->options;
    }

    public function setOptions(array $options){
        $this->options = $options;
    }


}

