<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLogisticsCompaniesQueryLogisticsRespResult {

    /**
        全部公司列表
     **/
    public $company_list;

    /**
        快递公司总数
     **/
    public $total;

    /**
        热门公司列表
     **/
    public $hot_company_list;


    public function getCompanyList() : array{
        return $this->company_list;
    }

    public function setCompanyList(array $companyList){
        $this->company_list = $companyList;
    }

    public function getTotal() : int{
        return $this->total;
    }

    public function setTotal(int $total){
        $this->total = $total;
    }

    public function getHotCompanyList() : array{
        return $this->hot_company_list;
    }

    public function setHotCompanyList(array $hotCompanyList){
        $this->hot_company_list = $hotCompanyList;
    }


}

