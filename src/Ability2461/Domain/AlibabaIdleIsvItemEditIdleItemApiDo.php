<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemEditIdleItemApiDo {

    /**
        商品描述(长度<=5000)
     **/
    public $desc;

    /**
        商品Id（根据此数据进行相应商品更新）
     **/
    public $item_id;

    /**
        商品原价, 单位：元(最大99999999)
     **/
    public $original_price;

    /**
        商品售价, 单位：元(最大99999999)
     **/
    public $reserve_price;

    /**
        商品标题(长度<=30)
     **/
    public $title;

    /**
        邮费, 单位：元(最大99999999)
     **/
    public $transport_fee;

    /**
        属性的键值对信息，包括品牌、型号、内存大小（手机）等，(不传入则不修改)
     **/
    public $pv_list;

    /**
        sku列表(不传入则不修改)
     **/
    public $item_sku_list;

    /**
        图书业务数据(不传入则不修改)
     **/
    public $book_data;

    /**
        商品图片列表，使用图片上传接口返回的文件Id，支持多张(最多9张)
     **/
    public $images;

    /**
        商品新旧程度, 值为0-100的整数，例如100代表全新，95代表95新；特殊场景会影响优品标
     **/
    public $stuff_status;

    /**
        行政区划Id，最小行政单位code，若是地区级别，则为地区级别的id；否则为城市级别的id(6位)
     **/
    public $division_id;

    /**
        纬度
     **/
    public $latitude;

    /**
        经度
     **/
    public $longitude;

    /**
        已验货业务数据(不传入则不修改)
     **/
    public $inspected_data;

    /**
        宝贝库存数量
     **/
    public $quantity;

    /**
        外部商品编码
     **/
    public $outer_id;

    /**
        淘宝卖家后台的运费模板id
     **/
    public $template_id;

    /**
        拍卖业务数据(不传入则不修改)
     **/
    public $bid_data;

    /**
        商品类型： b 一口价；a 拍卖
     **/
    public $auction_type;

    /**
        商品白底图列表(目前暂时只支持一张)
     **/
    public $white_bg_imgs;

    /**
        [已废弃]商品服务标签，用逗号分隔 || 1：100%验货；2：正品鉴别；3：七天包退；4：一年质保；5：48小时发货；7：质量问题包退；8：一物一证
     **/
    public $sp_guarantee;

    /**
        商品类目Id,手机: 50025386（long型，一般8～10位）
     **/
    public $category_id;

    /**
        渠道类目id
     **/
    public $channel_cat_id;

    /**
        卖家服务信息
     **/
    public $after_sales_data;

    /**
        直充相关信息
     **/
    public $idle_item_api_auto_recharge_do;

    /**
        验货宝信息
     **/
    public $idle_item_yhb_do;

    /**
        特卖商品相关信息
     **/
    public $flash_sale_do;

    /**
        运费模板ID
     **/
    public $idle_template_id;

    /**
        长图信息
     **/
    public $long_images;

    /**
        sku属性图片信息
     **/
    public $property_images;

    /**
        商品捡漏信息
     **/
    public $brand_bargain;

    /**
        重量
     **/
    public $weight;

    /**
        重量单位，目前支持千克(kg)
     **/
    public $weight_unit;

    /**
        预售工具参数
     **/
    public $trendy_pre_sale_do;

    /**
        门店库参数
     **/
    public $store_group_do;

    /**
        招商活动信息
     **/
    public $merchant_data_do;

    /**
        分销商品信息
     **/
    public $distribution_item_info;

    /**
        是否跳过举手B卖身份校验
     **/
    public $skip_check_raise_b;

    /**
        定时秒杀时间戳
     **/
    public $sec_kill_time;

    /**
        租赁套餐信息
     **/
    public $item_lease_do;

    /**
        商品业务类型 0 已验货不入仓，1 已验货入仓，2 普通商品
     **/
    public $item_biz_type;

    /**
        图片链接
     **/
    public $img_urls;

    /**
        验货报告url链接(长度<=300)
     **/
    public $inspect_report;

    /**
        服务商商品业务分类，手机:1, 潮品:2, 家电:3, 乐器:8, 3C数码:9, 奢品:16, 母婴:17, 美妆:18, 文玩/珠宝:19, 潮玩:20, 家居:21
     **/
    public $sp_biz_type;

    /**
        商品状态，可选值为0（表示在线），1（表示售出下架）-2（表示下架），-1（表示删除），99（其他）
     **/
    public $status;

    /**
        交易方式, 仅在线交易: 0,仅线下交易: 1,线上OR线下交易: 2（int型，1位）
     **/
    public $trade_type;

    /**
        入仓城市，不可修改
     **/
    public $ware_house_city;

    /**
        入仓时间，时间戳秒，不可修改
     **/
    public $ware_house_time;

    /**
        商品业务标签，不可修改
     **/
    public $item_tags;

    /**
        商品白底图
     **/
    public $white_bg_img_urls;

    /**
        发布成功，编辑成功，查询场景，返回给服务商的提醒信息
     **/
    public $notify_message;


    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getOriginalPrice() : string{
        return $this->original_price;
    }

    public function setOriginalPrice(string $originalPrice){
        $this->original_price = $originalPrice;
    }

    public function getReservePrice() : string{
        return $this->reserve_price;
    }

    public function setReservePrice(string $reservePrice){
        $this->reserve_price = $reservePrice;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getTransportFee() : string{
        return $this->transport_fee;
    }

    public function setTransportFee(string $transportFee){
        $this->transport_fee = $transportFee;
    }

    public function getPvList() : array{
        return $this->pv_list;
    }

    public function setPvList(array $pvList){
        $this->pv_list = $pvList;
    }

    public function getItemSkuList() : array{
        return $this->item_sku_list;
    }

    public function setItemSkuList(array $itemSkuList){
        $this->item_sku_list = $itemSkuList;
    }

    public function getBookData() : AlibabaIdleIsvItemEditIdleItemApiBookDo{
        return $this->book_data;
    }

    public function setBookData(AlibabaIdleIsvItemEditIdleItemApiBookDo $bookData){
        $this->book_data = $bookData;
    }

    public function getImages() : array{
        return $this->images;
    }

    public function setImages(array $images){
        $this->images = $images;
    }

    public function getStuffStatus() : int{
        return $this->stuff_status;
    }

    public function setStuffStatus(int $stuffStatus){
        $this->stuff_status = $stuffStatus;
    }

    public function getDivisionId() : int{
        return $this->division_id;
    }

    public function setDivisionId(int $divisionId){
        $this->division_id = $divisionId;
    }

    public function getLatitude() : string{
        return $this->latitude;
    }

    public function setLatitude(string $latitude){
        $this->latitude = $latitude;
    }

    public function getLongitude() : string{
        return $this->longitude;
    }

    public function setLongitude(string $longitude){
        $this->longitude = $longitude;
    }

    public function getInspectedData() : AlibabaIdleIsvItemEditIdleItemApiInspectedDo{
        return $this->inspected_data;
    }

    public function setInspectedData(AlibabaIdleIsvItemEditIdleItemApiInspectedDo $inspectedData){
        $this->inspected_data = $inspectedData;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getTemplateId() : int{
        return $this->template_id;
    }

    public function setTemplateId(int $templateId){
        $this->template_id = $templateId;
    }

    public function getBidData() : AlibabaIdleIsvItemEditIdleItemApiBidDo{
        return $this->bid_data;
    }

    public function setBidData(AlibabaIdleIsvItemEditIdleItemApiBidDo $bidData){
        $this->bid_data = $bidData;
    }

    public function getAuctionType() : string{
        return $this->auction_type;
    }

    public function setAuctionType(string $auctionType){
        $this->auction_type = $auctionType;
    }

    public function getWhiteBgImgs() : array{
        return $this->white_bg_imgs;
    }

    public function setWhiteBgImgs(array $whiteBgImgs){
        $this->white_bg_imgs = $whiteBgImgs;
    }

    public function getSpGuarantee() : string{
        return $this->sp_guarantee;
    }

    public function setSpGuarantee(string $spGuarantee){
        $this->sp_guarantee = $spGuarantee;
    }

    public function getCategoryId() : string{
        return $this->category_id;
    }

    public function setCategoryId(string $categoryId){
        $this->category_id = $categoryId;
    }

    public function getChannelCatId() : string{
        return $this->channel_cat_id;
    }

    public function setChannelCatId(string $channelCatId){
        $this->channel_cat_id = $channelCatId;
    }

    public function getAfterSalesData() : AlibabaIdleIsvItemEditIdleItemApiAfterSalesDo{
        return $this->after_sales_data;
    }

    public function setAfterSalesData(AlibabaIdleIsvItemEditIdleItemApiAfterSalesDo $afterSalesData){
        $this->after_sales_data = $afterSalesData;
    }

    public function getIdleItemApiAutoRechargeDo() : AlibabaIdleIsvItemEditIdleItemApiAutoRechargeDO{
        return $this->idle_item_api_auto_recharge_do;
    }

    public function setIdleItemApiAutoRechargeDo(AlibabaIdleIsvItemEditIdleItemApiAutoRechargeDO $idleItemApiAutoRechargeDo){
        $this->idle_item_api_auto_recharge_do = $idleItemApiAutoRechargeDo;
    }

    public function getIdleItemYhbDo() : AlibabaIdleIsvItemEditIdleItemApiYhbDO{
        return $this->idle_item_yhb_do;
    }

    public function setIdleItemYhbDo(AlibabaIdleIsvItemEditIdleItemApiYhbDO $idleItemYhbDo){
        $this->idle_item_yhb_do = $idleItemYhbDo;
    }

    public function getFlashSaleDo() : AlibabaIdleIsvItemEditIdleItemApiFlashSaleDO{
        return $this->flash_sale_do;
    }

    public function setFlashSaleDo(AlibabaIdleIsvItemEditIdleItemApiFlashSaleDO $flashSaleDo){
        $this->flash_sale_do = $flashSaleDo;
    }

    public function getIdleTemplateId() : int{
        return $this->idle_template_id;
    }

    public function setIdleTemplateId(int $idleTemplateId){
        $this->idle_template_id = $idleTemplateId;
    }

    public function getLongImages() : array{
        return $this->long_images;
    }

    public function setLongImages(array $longImages){
        $this->long_images = $longImages;
    }

    public function getPropertyImages() : array{
        return $this->property_images;
    }

    public function setPropertyImages(array $propertyImages){
        $this->property_images = $propertyImages;
    }

    public function getBrandBargain() : AlibabaIdleIsvItemEditIdleItemApiBrandBargainDO{
        return $this->brand_bargain;
    }

    public function setBrandBargain(AlibabaIdleIsvItemEditIdleItemApiBrandBargainDO $brandBargain){
        $this->brand_bargain = $brandBargain;
    }

    public function getWeight() : string{
        return $this->weight;
    }

    public function setWeight(string $weight){
        $this->weight = $weight;
    }

    public function getWeightUnit() : string{
        return $this->weight_unit;
    }

    public function setWeightUnit(string $weightUnit){
        $this->weight_unit = $weightUnit;
    }

    public function getTrendyPreSaleDo() : AlibabaIdleIsvItemEditIdleItemTrendyPreSaleDO{
        return $this->trendy_pre_sale_do;
    }

    public function setTrendyPreSaleDo(AlibabaIdleIsvItemEditIdleItemTrendyPreSaleDO $trendyPreSaleDo){
        $this->trendy_pre_sale_do = $trendyPreSaleDo;
    }

    public function getStoreGroupDo() : AlibabaIdleIsvItemEditIdleItemApiStoreGroupDO{
        return $this->store_group_do;
    }

    public function setStoreGroupDo(AlibabaIdleIsvItemEditIdleItemApiStoreGroupDO $storeGroupDo){
        $this->store_group_do = $storeGroupDo;
    }

    public function getMerchantDataDo() : AlibabaIdleIsvItemEditIdleItemMerchantDataDO{
        return $this->merchant_data_do;
    }

    public function setMerchantDataDo(AlibabaIdleIsvItemEditIdleItemMerchantDataDO $merchantDataDo){
        $this->merchant_data_do = $merchantDataDo;
    }

    public function getDistributionItemInfo() : AlibabaIdleIsvItemEditIdleDistributionItemInfoDO{
        return $this->distribution_item_info;
    }

    public function setDistributionItemInfo(AlibabaIdleIsvItemEditIdleDistributionItemInfoDO $distributionItemInfo){
        $this->distribution_item_info = $distributionItemInfo;
    }

    public function getSkipCheckRaiseB() : bool{
        return $this->skip_check_raise_b;
    }

    public function setSkipCheckRaiseB(bool $skipCheckRaiseB){
        $this->skip_check_raise_b = $skipCheckRaiseB;
    }

    public function getSecKillTime() : int{
        return $this->sec_kill_time;
    }

    public function setSecKillTime(int $secKillTime){
        $this->sec_kill_time = $secKillTime;
    }

    public function getItemLeaseDo() : AlibabaIdleIsvItemEditItemLeaseDO{
        return $this->item_lease_do;
    }

    public function setItemLeaseDo(AlibabaIdleIsvItemEditItemLeaseDO $itemLeaseDo){
        $this->item_lease_do = $itemLeaseDo;
    }

    public function getItemBizType() : int{
        return $this->item_biz_type;
    }

    public function setItemBizType(int $itemBizType){
        $this->item_biz_type = $itemBizType;
    }

    public function getImgUrls() : array{
        return $this->img_urls;
    }

    public function setImgUrls(array $imgUrls){
        $this->img_urls = $imgUrls;
    }

    public function getInspectReport() : string{
        return $this->inspect_report;
    }

    public function setInspectReport(string $inspectReport){
        $this->inspect_report = $inspectReport;
    }

    public function getSpBizType() : string{
        return $this->sp_biz_type;
    }

    public function setSpBizType(string $spBizType){
        $this->sp_biz_type = $spBizType;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getTradeType() : int{
        return $this->trade_type;
    }

    public function setTradeType(int $tradeType){
        $this->trade_type = $tradeType;
    }

    public function getWareHouseCity() : string{
        return $this->ware_house_city;
    }

    public function setWareHouseCity(string $wareHouseCity){
        $this->ware_house_city = $wareHouseCity;
    }

    public function getWareHouseTime() : int{
        return $this->ware_house_time;
    }

    public function setWareHouseTime(int $wareHouseTime){
        $this->ware_house_time = $wareHouseTime;
    }

    public function getItemTags() : array{
        return $this->item_tags;
    }

    public function setItemTags(array $itemTags){
        $this->item_tags = $itemTags;
    }

    public function getWhiteBgImgUrls() : array{
        return $this->white_bg_img_urls;
    }

    public function setWhiteBgImgUrls(array $whiteBgImgUrls){
        $this->white_bg_img_urls = $whiteBgImgUrls;
    }

    public function getNotifyMessage() : string{
        return $this->notify_message;
    }

    public function setNotifyMessage(string $notifyMessage){
        $this->notify_message = $notifyMessage;
    }


}

