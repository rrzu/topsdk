<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemPublishIdleItemApiAfterSalesDo {

    /**
        是否支持七天无理由
     **/
    public $support_sdr_policy;

    /**
        是否支持描述不符包邮退
     **/
    public $support_nfr_policy;

    /**
        是否支持 虚拟-描述不符包退
     **/
    public $support_vnr_policy;

    /**
        是否支持 极速发货-24小时
     **/
    public $support_fd24hs_policy;

    /**
        是否支持 极速发货-10分钟
     **/
    public $support_fd10ms_policy;


    public function getSupportSdrPolicy() : bool{
        return $this->support_sdr_policy;
    }

    public function setSupportSdrPolicy(bool $supportSdrPolicy){
        $this->support_sdr_policy = $supportSdrPolicy;
    }

    public function getSupportNfrPolicy() : bool{
        return $this->support_nfr_policy;
    }

    public function setSupportNfrPolicy(bool $supportNfrPolicy){
        $this->support_nfr_policy = $supportNfrPolicy;
    }

    public function getSupportVnrPolicy() : bool{
        return $this->support_vnr_policy;
    }

    public function setSupportVnrPolicy(bool $supportVnrPolicy){
        $this->support_vnr_policy = $supportVnrPolicy;
    }

    public function getSupportFd24hsPolicy() : bool{
        return $this->support_fd24hs_policy;
    }

    public function setSupportFd24hsPolicy(bool $supportFd24hsPolicy){
        $this->support_fd24hs_policy = $supportFd24hsPolicy;
    }

    public function getSupportFd10msPolicy() : bool{
        return $this->support_fd10ms_policy;
    }

    public function setSupportFd10msPolicy(bool $supportFd10msPolicy){
        $this->support_fd10ms_policy = $supportFd10msPolicy;
    }


}

