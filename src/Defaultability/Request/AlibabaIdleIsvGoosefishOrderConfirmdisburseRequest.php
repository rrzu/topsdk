<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvGoosefishOrderConfirmdisburseConfirmDisburseParamForOpen;

class AlibabaIdleIsvGoosefishOrderConfirmdisburseRequest {

    /**
        确认收货请求参数
     **/
    private $confirmDisburseParamForOpen;


    public function getConfirmDisburseParamForOpen() : AlibabaIdleIsvGoosefishOrderConfirmdisburseConfirmDisburseParamForOpen{
        return $this->confirmDisburseParamForOpen;
    }

    public function setConfirmDisburseParamForOpen(AlibabaIdleIsvGoosefishOrderConfirmdisburseConfirmDisburseParamForOpen $confirmDisburseParamForOpen){
        $this->confirmDisburseParamForOpen = $confirmDisburseParamForOpen;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.goosefish.order.confirmdisburse";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->confirmDisburseParamForOpen)) {
            $requestParam["confirm_disburse_param_for_open"] = TopUtil::convertStruct($this->confirmDisburseParamForOpen);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

