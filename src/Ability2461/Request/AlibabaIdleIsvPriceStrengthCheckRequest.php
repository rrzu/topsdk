<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvPriceStrengthCheckIsvItemPriceStrengthCheckCmd;

class AlibabaIdleIsvPriceStrengthCheckRequest {

    /**
        价格检测入参
     **/
    private $isvItemPriceStrengthCheckCmd;


    public function getIsvItemPriceStrengthCheckCmd() : AlibabaIdleIsvPriceStrengthCheckIsvItemPriceStrengthCheckCmd{
        return $this->isvItemPriceStrengthCheckCmd;
    }

    public function setIsvItemPriceStrengthCheckCmd(AlibabaIdleIsvPriceStrengthCheckIsvItemPriceStrengthCheckCmd $isvItemPriceStrengthCheckCmd){
        $this->isvItemPriceStrengthCheckCmd = $isvItemPriceStrengthCheckCmd;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.price.strength.check";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->isvItemPriceStrengthCheckCmd)) {
            $requestParam["isv_item_price_strength_check_cmd"] = TopUtil::convertStruct($this->isvItemPriceStrengthCheckCmd);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

