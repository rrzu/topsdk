<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvLeaseSellerAddressDeleteAppraiseIsvReturnAddressDTO;

class AlibabaIdleIsvLeaseSellerAddressDeleteRequest {

    /**
        输入参数
     **/
    private $param;


    public function getParam() : AlibabaIdleIsvLeaseSellerAddressDeleteAppraiseIsvReturnAddressDTO{
        return $this->param;
    }

    public function setParam(AlibabaIdleIsvLeaseSellerAddressDeleteAppraiseIsvReturnAddressDTO $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.lease.seller.address.delete";
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

