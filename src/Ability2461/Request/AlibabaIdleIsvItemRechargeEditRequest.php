<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvItemRechargeEditIdleItemApiAutoRechargeDO;

class AlibabaIdleIsvItemRechargeEditRequest {

    /**
        商品id
     **/
    private $itemId;

    /**
        直充信息
     **/
    private $idleItemApiAutoRechargeDo;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getIdleItemApiAutoRechargeDo() : AlibabaIdleIsvItemRechargeEditIdleItemApiAutoRechargeDO{
        return $this->idleItemApiAutoRechargeDo;
    }

    public function setIdleItemApiAutoRechargeDo(AlibabaIdleIsvItemRechargeEditIdleItemApiAutoRechargeDO $idleItemApiAutoRechargeDo){
        $this->idleItemApiAutoRechargeDo = $idleItemApiAutoRechargeDo;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.item.recharge.edit";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->idleItemApiAutoRechargeDo)) {
            $requestParam["idle_item_api_auto_recharge_do"] = TopUtil::convertStruct($this->idleItemApiAutoRechargeDo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

