<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvItemShipTypeIdleVirtualItemShipDO;

class AlibabaIdleIsvItemShipTypeRequest {

    /**
        入参
     **/
    private $idleVirtualItemShipDo;


    public function getIdleVirtualItemShipDo() : AlibabaIdleIsvItemShipTypeIdleVirtualItemShipDO{
        return $this->idleVirtualItemShipDo;
    }

    public function setIdleVirtualItemShipDo(AlibabaIdleIsvItemShipTypeIdleVirtualItemShipDO $idleVirtualItemShipDo){
        $this->idleVirtualItemShipDo = $idleVirtualItemShipDo;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.item.ship.type";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->idleVirtualItemShipDo)) {
            $requestParam["idle_virtual_item_ship_do"] = TopUtil::convertStruct($this->idleVirtualItemShipDo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

