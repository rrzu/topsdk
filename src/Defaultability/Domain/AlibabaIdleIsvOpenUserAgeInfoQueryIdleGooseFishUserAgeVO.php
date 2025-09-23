<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaIdleIsvOpenUserAgeInfoQueryIdleGooseFishUserAgeVO {

    /**
        是否进行过实名认证
     **/
    public $certified;

    /**
        是否满18岁
     **/
    public $adult18;

    /**
        是否满16岁
     **/
    public $adult16;


    public function getCertified() : bool{
        return $this->certified;
    }

    public function setCertified(bool $certified){
        $this->certified = $certified;
    }

    public function getAdult18() : bool{
        return $this->adult18;
    }

    public function setAdult18(bool $adult18){
        $this->adult18 = $adult18;
    }

    public function getAdult16() : bool{
        return $this->adult16;
    }

    public function setAdult16(bool $adult16){
        $this->adult16 = $adult16;
    }


}

