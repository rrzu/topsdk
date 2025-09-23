<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\AlibabaIdleIsvLeaseSellerAddressQueryAppraiseIsvReturnAddressQuery;

class AlibabaIdleIsvLeaseSellerAddressQueryRequest {

    /**
        输入参数
     **/
    private $param;


    public function getParam() : AlibabaIdleIsvLeaseSellerAddressQueryAppraiseIsvReturnAddressQuery{
        return $this->param;
    }

    public function setParam(AlibabaIdleIsvLeaseSellerAddressQueryAppraiseIsvReturnAddressQuery $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.lease.seller.address.query";
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

