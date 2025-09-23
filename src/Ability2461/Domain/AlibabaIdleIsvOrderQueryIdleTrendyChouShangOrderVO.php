<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleTrendyChouShangOrderVO {

    /**
        二次元抽赏订单奖品信息
     **/
    public $prize_list;

    /**
        是否支持发货
     **/
    public $could_post;


    public function getPrizeList() : array{
        return $this->prize_list;
    }

    public function setPrizeList(array $prizeList){
        $this->prize_list = $prizeList;
    }

    public function getCouldPost() : bool{
        return $this->could_post;
    }

    public function setCouldPost(bool $couldPost){
        $this->could_post = $couldPost;
    }


}

