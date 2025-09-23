<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvAddressModifyQueryAddressModifyParam;

class AlibabaIdleIsvAddressModifyQueryRequest {

    /**
        地址修改入参
     **/
    private $addressModifyParam;


    public function getAddressModifyParam() : AlibabaIdleIsvAddressModifyQueryAddressModifyParam{
        return $this->addressModifyParam;
    }

    public function setAddressModifyParam(AlibabaIdleIsvAddressModifyQueryAddressModifyParam $addressModifyParam){
        $this->addressModifyParam = $addressModifyParam;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.address.modify.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->addressModifyParam)) {
            $requestParam["address_modify_param"] = TopUtil::convertStruct($this->addressModifyParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

