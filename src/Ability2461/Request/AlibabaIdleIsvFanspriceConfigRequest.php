<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaIdleIsvFanspriceConfigRequest {

    /**
        商品ID
     **/
    private $itemId;

    /**
        粉丝价配置信息JSON
     **/
    private $fansPriceConfig;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getFansPriceConfig() : string{
        return $this->fansPriceConfig;
    }

    public function setFansPriceConfig(string $fansPriceConfig){
        $this->fansPriceConfig = $fansPriceConfig;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.fansprice.config";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->fansPriceConfig)) {
            $requestParam["fans_price_config"] = TopUtil::convertBasic($this->fansPriceConfig);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

