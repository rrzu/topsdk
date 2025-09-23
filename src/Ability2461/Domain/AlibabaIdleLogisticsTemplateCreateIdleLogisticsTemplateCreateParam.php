<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLogisticsTemplateCreateIdleLogisticsTemplateCreateParam {

    /**
        子模版详情
     **/
    public $template_details;

    /**
        发货省
     **/
    public $item_prov;

    /**
        计费维度，按件0按重量1按体积2
     **/
    public $valuation;

    /**
        运费模版名称
     **/
    public $template_name;

    /**
        发货区域
     **/
    public $item_area;

    /**
        发货城市
     **/
    public $item_city;

    /**
        发货地id
     **/
    public $item_division_id;


    public function getTemplateDetails() : array{
        return $this->template_details;
    }

    public function setTemplateDetails(array $templateDetails){
        $this->template_details = $templateDetails;
    }

    public function getItemProv() : string{
        return $this->item_prov;
    }

    public function setItemProv(string $itemProv){
        $this->item_prov = $itemProv;
    }

    public function getValuation() : int{
        return $this->valuation;
    }

    public function setValuation(int $valuation){
        $this->valuation = $valuation;
    }

    public function getTemplateName() : string{
        return $this->template_name;
    }

    public function setTemplateName(string $templateName){
        $this->template_name = $templateName;
    }

    public function getItemArea() : string{
        return $this->item_area;
    }

    public function setItemArea(string $itemArea){
        $this->item_area = $itemArea;
    }

    public function getItemCity() : string{
        return $this->item_city;
    }

    public function setItemCity(string $itemCity){
        $this->item_city = $itemCity;
    }

    public function getItemDivisionId() : int{
        return $this->item_division_id;
    }

    public function setItemDivisionId(int $itemDivisionId){
        $this->item_division_id = $itemDivisionId;
    }


}

