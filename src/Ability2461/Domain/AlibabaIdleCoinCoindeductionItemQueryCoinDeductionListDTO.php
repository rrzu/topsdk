<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleCoinCoindeductionItemQueryCoinDeductionListDTO {

    /**
        商品信息
     **/
    public $card_list;

    /**
        总数
     **/
    public $total_count;


    public function getCardList() : array{
        return $this->card_list;
    }

    public function setCardList(array $cardList){
        $this->card_list = $cardList;
    }

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }


}

