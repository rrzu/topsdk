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

    /**
        是否支持 极速发货-48小时
     **/
    public $support_fd48hs_policy;

    /**
        是否支持 正品保障
     **/
    public $support_gpa_policy;

    /**
        是否支持 不符必赔
     **/
    public $support_nfgc_policy;


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

    public function getSupportFd48hsPolicy() : bool{
        return $this->support_fd48hs_policy;
    }

    public function setSupportFd48hsPolicy(bool $supportFd48hsPolicy){
        $this->support_fd48hs_policy = $supportFd48hsPolicy;
    }

    public function getSupportGpaPolicy() : bool{
        return $this->support_gpa_policy;
    }

    public function setSupportGpaPolicy(bool $supportGpaPolicy){
        $this->support_gpa_policy = $supportGpaPolicy;
    }

    public function getSupportNfgcPolicy() : bool{
        return $this->support_nfgc_policy;
    }

    public function setSupportNfgcPolicy(bool $supportNfgcPolicy){
        $this->support_nfgc_policy = $supportNfgcPolicy;
    }


}

