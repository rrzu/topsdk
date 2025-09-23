<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLogisticsTemplateUpdateIdleLogisticsTemplateWriteDTO {

    /**
        运费模版Id
     **/
    public $template_id;


    public function getTemplateId() : int{
        return $this->template_id;
    }

    public function setTemplateId(int $templateId){
        $this->template_id = $templateId;
    }


}

