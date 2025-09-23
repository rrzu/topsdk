<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleLogisticsTemplateDivisionIdleLogisticsTemplateQueryVO {

    /**
        地址Id
     **/
    public $division_id;

    /**
        地址名称
     **/
    public $name;

    /**
        地址级别，1省2市3区
     **/
    public $level;

    /**
        是否有下一级地址
     **/
    public $has_child;

    /**
        下一级地址
     **/
    public $childs;


    public function getDivisionId() : int{
        return $this->division_id;
    }

    public function setDivisionId(int $divisionId){
        $this->division_id = $divisionId;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getLevel() : int{
        return $this->level;
    }

    public function setLevel(int $level){
        $this->level = $level;
    }

    public function getHasChild() : bool{
        return $this->has_child;
    }

    public function setHasChild(bool $hasChild){
        $this->has_child = $hasChild;
    }

    public function getChilds() : array{
        return $this->childs;
    }

    public function setChilds(array $childs){
        $this->childs = $childs;
    }


}

