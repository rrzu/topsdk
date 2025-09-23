<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderQueryIdleTrendyChouShangPostOrderVO {

    /**
        二次元抽赏邮费订单奖品信息
     **/
    public $prize_list;


    public function getPrizeList() : array{
        return $this->prize_list;
    }

    public function setPrizeList(array $prizeList){
        $this->prize_list = $prizeList;
    }


}

