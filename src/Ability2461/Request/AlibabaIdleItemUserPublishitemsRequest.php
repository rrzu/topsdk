<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleItemUserPublishitemsItemPageQuery;

class AlibabaIdleItemUserPublishitemsRequest {

    /**
        查询参数
     **/
    private $paramItemPageQuery;


    public function getParamItemPageQuery() : AlibabaIdleItemUserPublishitemsItemPageQuery{
        return $this->paramItemPageQuery;
    }

    public function setParamItemPageQuery(AlibabaIdleItemUserPublishitemsItemPageQuery $paramItemPageQuery){
        $this->paramItemPageQuery = $paramItemPageQuery;
    }


    public function getApiName() : string {
        return "alibaba.idle.item.user.publishitems";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramItemPageQuery)) {
            $requestParam["param_item_page_query"] = TopUtil::convertStruct($this->paramItemPageQuery);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

