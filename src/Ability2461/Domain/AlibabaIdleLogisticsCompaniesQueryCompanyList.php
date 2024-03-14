<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLogisticsCompaniesQueryCompanyList {

    /**
        快递公司代码
     **/
    public $code;

    /**
        快递公司名称
     **/
    public $name;

    /**
        快递公司id
     **/
    public $id;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }


}

