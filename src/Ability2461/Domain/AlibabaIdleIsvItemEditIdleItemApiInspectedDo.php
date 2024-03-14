<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleItemApiInspectedDo {

    /**
        验货报告url链接(长度<=300)
     **/
    public $inspect_report;


    public function getInspectReport() : string{
        return $this->inspect_report;
    }

    public function setInspectReport(string $inspectReport){
        $this->inspect_report = $inspectReport;
    }


}

