<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionListCardDataDTO {

    /**
        商品id
     **/
    public $id;

    /**
        商品标题
     **/
    public $title;

    /**
        主图链接
     **/
    public $pic_url;

    /**
        是否有视频
     **/
    public $has_video;

    /**
        价格
     **/
    public $price;

    /**
        * 单sku，extraPrice为null      * 多sku，extraPrice为较大的值      
     **/
    public $extra_price;

    /**
        想要量
     **/
    public $want_num;

    /**
        浏览量
     **/
    public $browse_count;

    /**
        曝光量
     **/
    public $exposure_num;

    /**
        是否可以开启抵扣
     **/
    public $can_open;

    /**
        闲鱼币抵扣信息
     **/
    public $coin_deduction_info;

    /**
        闲鱼币可抵扣的金额列表
     **/
    public $coin_deduction_info_list;


    public function getId() : string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getPicUrl() : string{
        return $this->pic_url;
    }

    public function setPicUrl(string $picUrl){
        $this->pic_url = $picUrl;
    }

    public function getHasVideo() : bool{
        return $this->has_video;
    }

    public function setHasVideo(bool $hasVideo){
        $this->has_video = $hasVideo;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getExtraPrice() : string{
        return $this->extra_price;
    }

    public function setExtraPrice(string $extraPrice){
        $this->extra_price = $extraPrice;
    }

    public function getWantNum() : string{
        return $this->want_num;
    }

    public function setWantNum(string $wantNum){
        $this->want_num = $wantNum;
    }

    public function getBrowseCount() : string{
        return $this->browse_count;
    }

    public function setBrowseCount(string $browseCount){
        $this->browse_count = $browseCount;
    }

    public function getExposureNum() : string{
        return $this->exposure_num;
    }

    public function setExposureNum(string $exposureNum){
        $this->exposure_num = $exposureNum;
    }

    public function getCanOpen() : bool{
        return $this->can_open;
    }

    public function setCanOpen(bool $canOpen){
        $this->can_open = $canOpen;
    }

    public function getCoinDeductionInfo() : AlibabaIdleCoinCoindeductionListCoinDeductionInfoDTO{
        return $this->coin_deduction_info;
    }

    public function setCoinDeductionInfo(AlibabaIdleCoinCoindeductionListCoinDeductionInfoDTO $coinDeductionInfo){
        $this->coin_deduction_info = $coinDeductionInfo;
    }

    public function getCoinDeductionInfoList() : array{
        return $this->coin_deduction_info_list;
    }

    public function setCoinDeductionInfoList(array $coinDeductionInfoList){
        $this->coin_deduction_info_list = $coinDeductionInfoList;
    }


}

