<?php
namespace Topsdk\Topapi\Ability2461\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaIdleIsvSpuSearchRequest {

    /**
        闲鱼渠道类目的id
     **/
    private $channelCatId;

    /**
        搜索的文本
     **/
    private $searchText;


    public function getChannelCatId() : string{
        return $this->channelCatId;
    }

    public function setChannelCatId(string $channelCatId){
        $this->channelCatId = $channelCatId;
    }

    public function getSearchText() : string{
        return $this->searchText;
    }

    public function setSearchText(string $searchText){
        $this->searchText = $searchText;
    }


    public function getApiName() : string {
        return "alibaba.idle.isv.spu.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->channelCatId)) {
            $requestParam["channel_cat_id"] = TopUtil::convertBasic($this->channelCatId);
        }

        if (!TopUtil::checkEmpty($this->searchText)) {
            $requestParam["search_text"] = TopUtil::convertBasic($this->searchText);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

