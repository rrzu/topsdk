<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLogisticsTemplateQueryListIdleLogisticsTemplateQueryParam {

    /**
        模版id
     **/
    public $template_id;


    public function getTemplateId() : int{
        return $this->template_id;
    }

    public function setTemplateId(int $templateId){
        $this->template_id = $templateId;
    }


}

