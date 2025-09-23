<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaIdleIsvLogisticsResendRequest {

    /**
        订单号
     **/
    private $tid;

    /**
        运单号
     **/
    private $outSid;

    /**
        物流公司代号
     **/
    private $companyCode;

    /**
        物流公司名称
     **/
    private $companyName;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getOutSid() : string{
        return $this->outSid;
    }

    public function setOutSid(string $outSid){
        $this->outSid = $outSid;
    }

    public function getCompanyCode() : string{
        return $this->companyCode;
    }

    public function setCompanyCode(string $companyCode){
        $this->companyCode = $companyCode;
    }

    public function getCompanyName() : string{
        return $this->companyName;
    }

    public function setCompanyName(string $companyName){
        $this->companyName = $companyName;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.logistics.resend";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->outSid)) {
            $requestParam["out_sid"] = TopUtil::convertBasic($this->outSid);
        }

        if (!TopUtil::checkEmpty($this->companyCode)) {
            $requestParam["company_code"] = TopUtil::convertBasic($this->companyCode);
        }

        if (!TopUtil::checkEmpty($this->companyName)) {
            $requestParam["company_name"] = TopUtil::convertBasic($this->companyName);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

