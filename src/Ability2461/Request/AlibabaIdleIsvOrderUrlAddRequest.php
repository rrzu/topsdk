<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvOrderUrlAddIdleCouponSuperLinkRequest;

class AlibabaIdleIsvOrderUrlAddRequest {

    /**
        入参
     **/
    private $idleCouponSuperLinkRequest;


    public function getIdleCouponSuperLinkRequest() : AlibabaIdleIsvOrderUrlAddIdleCouponSuperLinkRequest{
        return $this->idleCouponSuperLinkRequest;
    }

    public function setIdleCouponSuperLinkRequest(AlibabaIdleIsvOrderUrlAddIdleCouponSuperLinkRequest $idleCouponSuperLinkRequest){
        $this->idleCouponSuperLinkRequest = $idleCouponSuperLinkRequest;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.order.url.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->idleCouponSuperLinkRequest)) {
            $requestParam["idle_coupon_super_link_request"] = TopUtil::convertStruct($this->idleCouponSuperLinkRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

