<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvTradeDisputeQueryTopDisputeQueryDTO;

class AlibabaIdleIsvTradeDisputeQueryRequest {

    /**
        入参
     **/
    private $topDisputeQueryDto;


    public function getTopDisputeQueryDto() : AlibabaIdleIsvTradeDisputeQueryTopDisputeQueryDTO{
        return $this->topDisputeQueryDto;
    }

    public function setTopDisputeQueryDto(AlibabaIdleIsvTradeDisputeQueryTopDisputeQueryDTO $topDisputeQueryDto){
        $this->topDisputeQueryDto = $topDisputeQueryDto;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.trade.dispute.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->topDisputeQueryDto)) {
            $requestParam["top_dispute_query_dto"] = TopUtil::convertStruct($this->topDisputeQueryDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

