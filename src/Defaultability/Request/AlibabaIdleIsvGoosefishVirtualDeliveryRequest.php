<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvGoosefishVirtualDeliveryIdleOpenIsvVirtualDeliveryParam;

class AlibabaIdleIsvGoosefishVirtualDeliveryRequest {

    /**
        虚拟发货入参
     **/
    private $idleOpenIsvVirtualDeliveryParam;


    public function getIdleOpenIsvVirtualDeliveryParam() : AlibabaIdleIsvGoosefishVirtualDeliveryIdleOpenIsvVirtualDeliveryParam{
        return $this->idleOpenIsvVirtualDeliveryParam;
    }

    public function setIdleOpenIsvVirtualDeliveryParam(AlibabaIdleIsvGoosefishVirtualDeliveryIdleOpenIsvVirtualDeliveryParam $idleOpenIsvVirtualDeliveryParam){
        $this->idleOpenIsvVirtualDeliveryParam = $idleOpenIsvVirtualDeliveryParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.goosefish.virtual.delivery";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->idleOpenIsvVirtualDeliveryParam)) {
            $requestParam["idle_open_isv_virtual_delivery_param"] = TopUtil::convertStruct($this->idleOpenIsvVirtualDeliveryParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

