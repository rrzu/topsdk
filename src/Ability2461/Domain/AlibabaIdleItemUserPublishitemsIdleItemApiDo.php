<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleItemUserPublishitemsIdleItemApiDo {

    /**
        商品ID
     **/
    public $item_id;

    /**
        商品标题
     **/
    public $title;

    /**
        商品类目
     **/
    public $category_id;

    /**
        卖家昵称（不唯一且用户可以自己更改）
     **/
    public $seller_nick;

    /**
        渠道类目ID
     **/
    public $channel_cat_id;

    /**
        商品图片
     **/
    public $img_urls;

    /**
        商品价格
     **/
    public $reserve_price;

    /**
        商品类型： b 一口价；a 拍卖
     **/
    public $auction_type;

    /**
        拍卖业务数据
     **/
    public $bid_data;

    /**
        业务模式 0不入仓，1入仓，2 C2C; （经常会新增，具体参见接入文档）
     **/
    public $item_biz_type;

    /**
        1 服务商商品业务分类，手机:1, 潮品:2, 家电:3, 乐器:8, 3C数码:9, 奢品:16, 母婴:17, 美妆:18, 文玩/珠宝:19, 潮玩:20, 家居:21
     **/
    public $sp_biz_type;

    /**
        行政区划Id(城市编码)，最小行政单位code，若是地区级别，则为地区级别的id；否则为城市级别的id(long型，6位)
     **/
    public $division_id;

    /**
        商品原价, 单位：元(最大99999999)
     **/
    public $original_price;

    /**
        商品状态，可选值为0（表示上架），-2（表示下架），-1（表示删除），99（其他）
     **/
    public $status;

    /**
        商品新旧程度, 值为-1～100的整数，例如100代表全新，95代表95新，-1比较特殊代表准新
     **/
    public $stuff_status;

    /**
        加密的卖家id
     **/
    public $encryption_seller_id;

    /**
        售后服务信息
     **/
    public $after_sales_data;

    /**
        商品直充相关信息
     **/
    public $idle_item_api_auto_recharge_do;


    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getCategoryId() : string{
        return $this->category_id;
    }

    public function setCategoryId(string $categoryId){
        $this->category_id = $categoryId;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getChannelCatId() : string{
        return $this->channel_cat_id;
    }

    public function setChannelCatId(string $channelCatId){
        $this->channel_cat_id = $channelCatId;
    }

    public function getImgUrls() : array{
        return $this->img_urls;
    }

    public function setImgUrls(array $imgUrls){
        $this->img_urls = $imgUrls;
    }

    public function getReservePrice() : string{
        return $this->reserve_price;
    }

    public function setReservePrice(string $reservePrice){
        $this->reserve_price = $reservePrice;
    }

    public function getAuctionType() : string{
        return $this->auction_type;
    }

    public function setAuctionType(string $auctionType){
        $this->auction_type = $auctionType;
    }

    public function getBidData() : AlibabaIdleItemUserPublishitemsIdleItemApiBidDo{
        return $this->bid_data;
    }

    public function setBidData(AlibabaIdleItemUserPublishitemsIdleItemApiBidDo $bidData){
        $this->bid_data = $bidData;
    }

    public function getItemBizType() : int{
        return $this->item_biz_type;
    }

    public function setItemBizType(int $itemBizType){
        $this->item_biz_type = $itemBizType;
    }

    public function getSpBizType() : string{
        return $this->sp_biz_type;
    }

    public function setSpBizType(string $spBizType){
        $this->sp_biz_type = $spBizType;
    }

    public function getDivisionId() : int{
        return $this->division_id;
    }

    public function setDivisionId(int $divisionId){
        $this->division_id = $divisionId;
    }

    public function getOriginalPrice() : string{
        return $this->original_price;
    }

    public function setOriginalPrice(string $originalPrice){
        $this->original_price = $originalPrice;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getStuffStatus() : int{
        return $this->stuff_status;
    }

    public function setStuffStatus(int $stuffStatus){
        $this->stuff_status = $stuffStatus;
    }

    public function getEncryptionSellerId() : string{
        return $this->encryption_seller_id;
    }

    public function setEncryptionSellerId(string $encryptionSellerId){
        $this->encryption_seller_id = $encryptionSellerId;
    }

    public function getAfterSalesData() : AlibabaIdleItemUserPublishitemsIdleItemApiAfterSalesDo{
        return $this->after_sales_data;
    }

    public function setAfterSalesData(AlibabaIdleItemUserPublishitemsIdleItemApiAfterSalesDo $afterSalesData){
        $this->after_sales_data = $afterSalesData;
    }

    public function getIdleItemApiAutoRechargeDo() : AlibabaIdleItemUserPublishitemsIdleItemApiAutoRechargeDO{
        return $this->idle_item_api_auto_recharge_do;
    }

    public function setIdleItemApiAutoRechargeDo(AlibabaIdleItemUserPublishitemsIdleItemApiAutoRechargeDO $idleItemApiAutoRechargeDo){
        $this->idle_item_api_auto_recharge_do = $idleItemApiAutoRechargeDo;
    }


}

