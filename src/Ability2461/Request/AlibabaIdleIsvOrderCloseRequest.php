<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvOrderCloseAppraiseIsvOrderCloseDto;

class AlibabaIdleIsvOrderCloseRequest {

    /**
        输入参数
     **/
    private $isvAppraiseIsvOrderCloseDto;


    public function getIsvAppraiseIsvOrderCloseDto() : AlibabaIdleIsvOrderCloseAppraiseIsvOrderCloseDto{
        return $this->isvAppraiseIsvOrderCloseDto;
    }

    public function setIsvAppraiseIsvOrderCloseDto(AlibabaIdleIsvOrderCloseAppraiseIsvOrderCloseDto $isvAppraiseIsvOrderCloseDto){
        $this->isvAppraiseIsvOrderCloseDto = $isvAppraiseIsvOrderCloseDto;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.order.close";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->isvAppraiseIsvOrderCloseDto)) {
            $requestParam["isv_appraise_isv_order_close_dto"] = TopUtil::convertStruct($this->isvAppraiseIsvOrderCloseDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

