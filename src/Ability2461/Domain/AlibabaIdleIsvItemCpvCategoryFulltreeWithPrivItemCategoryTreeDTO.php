<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemCpvCategoryFulltreeWithPrivItemCategoryTreeDTO {

    /**
        类目id
     **/
    public $channel_cat_id;

    /**
        类目名称
     **/
    public $channel_cat_name;

    /**
        加密的类目id
     **/
    public $encode_channel_cat_id;

    /**
        四级类目树列表
     **/
    public $children;


    public function getChannelCatId() : int{
        return $this->channel_cat_id;
    }

    public function setChannelCatId(int $channelCatId){
        $this->channel_cat_id = $channelCatId;
    }

    public function getChannelCatName() : string{
        return $this->channel_cat_name;
    }

    public function setChannelCatName(string $channelCatName){
        $this->channel_cat_name = $channelCatName;
    }

    public function getEncodeChannelCatId() : string{
        return $this->encode_channel_cat_id;
    }

    public function setEncodeChannelCatId(string $encodeChannelCatId){
        $this->encode_channel_cat_id = $encodeChannelCatId;
    }

    public function getChildren() : array{
        return $this->children;
    }

    public function setChildren(array $children){
        $this->children = $children;
    }


}

