<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvOrderAdjustpriceIsvAdjustOrderPriceDto;

class AlibabaIdleIsvOrderAdjustpriceRequest {

    /**
        输入参数
     **/
    private $paramAdjustOrderPrice;


    public function getParamAdjustOrderPrice() : AlibabaIdleIsvOrderAdjustpriceIsvAdjustOrderPriceDto{
        return $this->paramAdjustOrderPrice;
    }

    public function setParamAdjustOrderPrice(AlibabaIdleIsvOrderAdjustpriceIsvAdjustOrderPriceDto $paramAdjustOrderPrice){
        $this->paramAdjustOrderPrice = $paramAdjustOrderPrice;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.order.adjustprice";
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

