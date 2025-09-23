<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvLeaseSellerAddressAddAppraiseIsvReturnAddressDTO;

class AlibabaIdleIsvLeaseSellerAddressAddRequest {

    /**
        输入参数
     **/
    private $param;


    public function getParam() : AlibabaIdleIsvLeaseSellerAddressAddAppraiseIsvReturnAddressDTO{
        return $this->param;
    }

    public function setParam(AlibabaIdleIsvLeaseSellerAddressAddAppraiseIsvReturnAddressDTO $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.lease.seller.address.add";
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

