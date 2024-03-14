<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2461\Domain\AlibabaIdleIsvItemDownshelfIdleItemBaseApiDo;

class AlibabaIdleIsvItemDownshelfRequest {

    /**
        返回结果result
     **/
    private $param;


    public function getParam() : AlibabaIdleIsvItemDownshelfIdleItemBaseApiDo{
        return $this->param;
    }

    public function setParam(AlibabaIdleIsvItemDownshelfIdleItemBaseApiDo $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.item.downshelf";
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

