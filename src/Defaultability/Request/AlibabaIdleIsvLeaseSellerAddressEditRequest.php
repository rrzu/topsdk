<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvLeaseSellerAddressEditAppraiseIsvReturnAddressDTO;

class AlibabaIdleIsvLeaseSellerAddressEditRequest {

    /**
        输入参数
     **/
    private $param;


    public function getParam() : AlibabaIdleIsvLeaseSellerAddressEditAppraiseIsvReturnAddressDTO{
        return $this->param;
    }

    public function setParam(AlibabaIdleIsvLeaseSellerAddressEditAppraiseIsvReturnAddressDTO $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.lease.seller.address.edit";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param)) {
            $requestParam["param"] = TopUtil::convertStruct($this->param);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

