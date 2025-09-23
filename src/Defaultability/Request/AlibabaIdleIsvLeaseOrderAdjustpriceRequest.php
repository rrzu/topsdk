<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvLeaseOrderAdjustpriceIsvLeaseAdjustOrderPriceDTO;

class AlibabaIdleIsvLeaseOrderAdjustpriceRequest {

    /**
        输入参数
     **/
    private $paramAdjustOrderPrice;


    public function getParamAdjustOrderPrice() : AlibabaIdleIsvLeaseOrderAdjustpriceIsvLeaseAdjustOrderPriceDTO{
        return $this->paramAdjustOrderPrice;
    }

    public function setParamAdjustOrderPrice(AlibabaIdleIsvLeaseOrderAdjustpriceIsvLeaseAdjustOrderPriceDTO $paramAdjustOrderPrice){
        $this->paramAdjustOrderPrice = $paramAdjustOrderPrice;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.lease.order.adjustprice";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramAdjustOrderPrice)) {
            $requestParam["param_adjust_order_price"] = TopUtil::convertStruct($this->paramAdjustOrderPrice);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

