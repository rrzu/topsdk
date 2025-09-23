<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLogisticsTemplateDivisionIdleLogisticsTemplateDivisionParam {

    /**
        地址Id，传入1获得全国省级id
     **/
    public $division_id;


    public function getDivisionId() : int{
        return $this->division_id;
    }

    public function setDivisionId(int $divisionId){
        $this->division_id = $divisionId;
    }


}

