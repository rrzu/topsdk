<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvOrderRateQueryIdleRateDTO {

    /**
        评价id
     **/
    public $rate_id;

    /**
        被评论者用户id
     **/
    public $rated_uid;

    /**
         被评论者昵称
     **/
    public $rated_user_nick;

    /**
        评论者用户id
     **/
    public $rater_uid;

    /**
        评论者昵称
     **/
    public $rater_user_nick;

    /**
        评价好坏类型
     **/
    public $rate;

    /**
        交易订单id
     **/
    public $trade_id;

    /**
        评论内容
     **/
    public $feedback;

    /**
        评价生效时间
     **/
    public $gmt_create;

    /**
        评价维度内容列表
     **/
    public $rate_dimension_list;

    /**
        评价图片列表
     **/
    public $pict_cdn_url_list;


    public function getRateId() : int{
        return $this->rate_id;
    }

    public function setRateId(int $rateId){
        $this->rate_id = $rateId;
    }

    public function getRatedUid() : int{
        return $this->rated_uid;
    }

    public function setRatedUid(int $ratedUid){
        $this->rated_uid = $ratedUid;
    }

    public function getRatedUserNick() : string{
        return $this->rated_user_nick;
    }

    public function setRatedUserNick(string $ratedUserNick){
        $this->rated_user_nick = $ratedUserNick;
    }

    public function getRaterUid() : int{
        return $this->rater_uid;
    }

    public function setRaterUid(int $raterUid){
        $this->rater_uid = $raterUid;
    }

    public function getRaterUserNick() : string{
        return $this->rater_user_nick;
    }

    public function setRaterUserNick(string $raterUserNick){
        $this->rater_user_nick = $raterUserNick;
    }

    public function getRate() : int{
        return $this->rate;
    }

    public function setRate(int $rate){
        $this->rate = $rate;
    }

    public function getTradeId() : int{
        return $this->trade_id;
    }

    public function setTradeId(int $tradeId){
        $this->trade_id = $tradeId;
    }

    public function getFeedback() : string{
        return $this->feedback;
    }

    public function setFeedback(string $feedback){
        $this->feedback = $feedback;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getRateDimensionList() : array{
        return $this->rate_dimension_list;
    }

    public function setRateDimensionList(array $rateDimensionList){
        $this->rate_dimension_list = $rateDimensionList;
    }

    public function getPictCdnUrlList() : array{
        return $this->pict_cdn_url_list;
    }

    public function setPictCdnUrlList(array $pictCdnUrlList){
        $this->pict_cdn_url_list = $pictCdnUrlList;
    }


}

