<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvPriceStrengthCheckIsvItemPriceStrengthCheckCmd {

    /**
        商品类型。"15":严选免检
     **/
    public $biz_type;

    /**
        商品四级类目
     **/
    public $channel_category_id4;

    /**
        验货报告ID
     **/
    public $inspection_report_id;

    /**
        商品价格
     **/
    public $input_price;

    /**
        商品上传至图片空间生成的数字标识
     **/
    public $image_id_list;

    /**
        商品属性列表
     **/
    public $cpv_list;


    public function getBizType() : string{
        return $this->biz_type;
    }

    public function setBizType(string $bizType){
        $this->biz_type = $bizType;
    }

    public function getChannelCategoryId4() : string{
        return $this->channel_category_id4;
    }

    public function setChannelCategoryId4(string $channelCategoryId4){
        $this->channel_category_id4 = $channelCategoryId4;
    }

    public function getInspectionReportId() : int{
        return $this->inspection_report_id;
    }

    public function setInspectionReportId(int $inspectionReportId){
        $this->inspection_report_id = $inspectionReportId;
    }

    public function getInputPrice() : string{
        return $this->input_price;
    }

    public function setInputPrice(string $inputPrice){
        $this->input_price = $inputPrice;
    }

    public function getImageIdList() : array{
        return $this->image_id_list;
    }

    public function setImageIdList(array $imageIdList){
        $this->image_id_list = $imageIdList;
    }

    public function getCpvList() : array{
        return $this->cpv_list;
    }

    public function setCpvList(array $cpvList){
        $this->cpv_list = $cpvList;
    }


}

