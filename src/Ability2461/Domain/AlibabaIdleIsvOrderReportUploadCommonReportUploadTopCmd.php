<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderReportUploadCommonReportUploadTopCmd {

    /**
        闲鱼订单ID，非闲鱼订单ID会被拦截
     **/
    public $out_code;

    /**
        spuId
     **/
    public $spu_id;

    /**
        报告内容json串
     **/
    public $report;

    /**
        标识一件物品信息 【IMei】
     **/
    public $trace_code;

    /**
        产品码
     **/
    public $product_code;


    public function getOutCode() : string{
        return $this->out_code;
    }

    public function setOutCode(string $outCode){
        $this->out_code = $outCode;
    }

    public function getSpuId() : int{
        return $this->spu_id;
    }

    public function setSpuId(int $spuId){
        $this->spu_id = $spuId;
    }

    public function getReport() : string{
        return $this->report;
    }

    public function setReport(string $report){
        $this->report = $report;
    }

    public function getTraceCode() : string{
        return $this->trace_code;
    }

    public function setTraceCode(string $traceCode){
        $this->trace_code = $traceCode;
    }

    public function getProductCode() : string{
        return $this->product_code;
    }

    public function setProductCode(string $productCode){
        $this->product_code = $productCode;
    }


}

