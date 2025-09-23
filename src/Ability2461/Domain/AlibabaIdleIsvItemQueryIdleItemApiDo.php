<?php
namespace Topsdk\Topapi\Ability2461\Domain;

class AlibabaIdleIsvItemQueryIdleItemApiDo {

    /**
        类目Id
     **/
    public $category_id;

    /**
        商品描述(长度<=5000)
     **/
    public $desc;

    /**
        行政区划Id(城市编码)，最小行政单位code，若是地区级别，则为地区级别的id；否则为城市级别的id(long型，6位)
     **/
    public $division_id;

    /**
        图片链接
     **/
    public $img_urls;

    /**
        [已废弃]验货报告, 此字段后续会废弃；如需使用参见: inspected_data.inspect_report
     **/
    public $inspect_report;

    /**
        商品Id（long型）
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
        1	服务商商品业务分类，手机:1, 潮品:2, 家电:3, 乐器:8, 3C数码:9, 奢品:16, 母婴:17, 美妆:18, 文玩/珠宝:19, 潮玩:20, 家居:21
     **/
    public $sp_biz_type;

    /**
        商品状态，可选值为0（表示上架），-2（表示下架），-1（表示删除），99（其他）
     **/
    public $status;

    /**
        商品新旧程度, 值为-1-100的整数，例如100代表全新，-1代表准新，95代表95新
     **/
    public $stuff_status;

    /**
        商品标题
     **/
    public $title;

    /**
        交易方式, 仅在线交易: 0,仅线下交易: 1,线上OR线下交易: 2（int型，1位）
     **/
    public $trade_type;

    /**
        邮费, 单位：元(最大99999999)
     **/
    public $transport_fee;

    /**
        业务模式 0不入仓，1入仓，2寄卖
     **/
    public $item_biz_type;

    /**
        [已废弃]已验货入仓城市(此字段后续会废弃；如需使用参见: inspected_data.ware_house_city)
     **/
    public $ware_house_city;

    /**
        [已废弃]已验货入仓时间(此字段后续会废弃；如需使用参见: inspected_data.ware_house_time)
     **/
    public $ware_house_time;

    /**
        商品业务标签，不可修改
     **/
    public $item_tags;

    /**
        渠道类目id，不可修改
     **/
    public $channel_cat_id;

    /**
        属性的键值对信息，包括品牌、型号、内存大小（手机）等
     **/
    public $pv_list;

    /**
        sku列表
     **/
    public $item_sku_list;

    /**
        已验货业务数据
     **/
    public $inspected_data;

    /**
        图书业务数据
     **/
    public $book_data;

    /**
        商品库存
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
        拍卖业务数据
     **/
    public $bid_data;

    /**
        商品类型： b 一口价；a 拍卖
     **/
    public $auction_type;

    /**
        商品白底图
     **/
    public $white_bg_img_urls;

    /**
        [已废弃]商品服务标签，用逗号分隔  ||  1：100%验货；2：正品鉴别；3：七天包退；4：一年质保；5：48小时发货；7：质量问题包退；8：一物一证
     **/
    public $sp_guarantee;

    /**
        国际分销业务独有数据
     **/
    public $distribution_data;

    /**
        卖家服务信息
     **/
    public $after_sales_data;

    /**
        商品直充相关信息
     **/
    public $idle_item_api_auto_recharge_do;

    /**
        验货宝信息
     **/
    public $idle_item_yhb_do;

    /**
        真车认证相关信息
     **/
    public $real_car_verify_data;

    /**
        帮卖信息
     **/
    public $biz_help_data;

    /**
        特卖商品相关信息
     **/
    public $flash_sale_do;

    /**
        运费模板ID
     **/
    public $idle_template_id;

    /**
        sku属性图片
     **/
    public $property_images;

    /**
        长图信息
     **/
    public $long_images;

    /**
        运费模版重量
     **/
    public $weight;

    /**
        运费模版重量单位
     **/
    public $weight_unit;

    /**
        预售工具参数
     **/
    public $trendy_pre_sale_do;

    /**
        发布成功，编辑成功，查询场景，返回给服务商的提醒信息
     **/
    public $notify_message;

    /**
        捡漏类型商品成色信息
     **/
    public $brand_bargain;

    /**
        门店库信息
     **/
    public $store_group_do;

    /**
        分销商品信息
     **/
    public $distribution_item_info;

    /**
        抽赏信息
     **/
    public $trendy_chou_shang_do;

    /**
        商品租赁信息
     **/
    public $item_lease_do;

    /**
        秒杀商品开始时间毫秒时间戳
     **/
    public $sec_kill_time;

    /**
        游戏cdk充值
     **/
    public $x_global_code;


    public function getCategoryId() : int{
        return $this->category_id;
    }

    public function setCategoryId(int $categoryId){
        $this->category_id = $categoryId;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getDivisionId() : int{
        return $this->division_id;
    }

    public function setDivisionId(int $divisionId){
        $this->division_id = $divisionId;
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

    public function getStuffStatus() : int{
        return $this->stuff_status;
    }

    public function setStuffStatus(int $stuffStatus){
        $this->stuff_status = $stuffStatus;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getTradeType() : int{
        return $this->trade_type;
    }

    public function setTradeType(int $tradeType){
        $this->trade_type = $tradeType;
    }

    public function getTransportFee() : string{
        return $this->transport_fee;
    }

    public function setTransportFee(string $transportFee){
        $this->transport_fee = $transportFee;
    }

    public function getItemBizType() : int{
        return $this->item_biz_type;
    }

    public function setItemBizType(int $itemBizType){
        $this->item_biz_type = $itemBizType;
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

    public function getChannelCatId() : string{
        return $this->channel_cat_id;
    }

    public function setChannelCatId(string $channelCatId){
        $this->channel_cat_id = $channelCatId;
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

    public function getInspectedData() : AlibabaIdleIsvItemQueryIdleItemApiInspectedDo{
        return $this->inspected_data;
    }

    public function setInspectedData(AlibabaIdleIsvItemQueryIdleItemApiInspectedDo $inspectedData){
        $this->inspected_data = $inspectedData;
    }

    public function getBookData() : AlibabaIdleIsvItemQueryIdleItemApiBookDo{
        return $this->book_data;
    }

    public function setBookData(AlibabaIdleIsvItemQueryIdleItemApiBookDo $bookData){
        $this->book_data = $bookData;
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

    public function getBidData() : AlibabaIdleIsvItemQueryIdleItemApiBidDo{
        return $this->bid_data;
    }

    public function setBidData(AlibabaIdleIsvItemQueryIdleItemApiBidDo $bidData){
        $this->bid_data = $bidData;
    }

    public function getAuctionType() : string{
        return $this->auction_type;
    }

    public function setAuctionType(string $auctionType){
        $this->auction_type = $auctionType;
    }

    public function getWhiteBgImgUrls() : array{
        return $this->white_bg_img_urls;
    }

    public function setWhiteBgImgUrls(array $whiteBgImgUrls){
        $this->white_bg_img_urls = $whiteBgImgUrls;
    }

    public function getSpGuarantee() : string{
        return $this->sp_guarantee;
    }

    public function setSpGuarantee(string $spGuarantee){
        $this->sp_guarantee = $spGuarantee;
    }

    public function getDistributionData() : AlibabaIdleIsvItemQueryIdleItemDistributionDO{
        return $this->distribution_data;
    }

    public function setDistributionData(AlibabaIdleIsvItemQueryIdleItemDistributionDO $distributionData){
        $this->distribution_data = $distributionData;
    }

    public function getAfterSalesData() : AlibabaIdleIsvItemQueryIdleItemApiAfterSalesDO{
        return $this->after_sales_data;
    }

    public function setAfterSalesData(AlibabaIdleIsvItemQueryIdleItemApiAfterSalesDO $afterSalesData){
        $this->after_sales_data = $afterSalesData;
    }

    public function getIdleItemApiAutoRechargeDo() : AlibabaIdleIsvItemQueryIdleItemApiAutoRechargeDO{
        return $this->idle_item_api_auto_recharge_do;
    }

    public function setIdleItemApiAutoRechargeDo(AlibabaIdleIsvItemQueryIdleItemApiAutoRechargeDO $idleItemApiAutoRechargeDo){
        $this->idle_item_api_auto_recharge_do = $idleItemApiAutoRechargeDo;
    }

    public function getIdleItemYhbDo() : AlibabaIdleIsvItemQueryIdleItemApiYhbDO{
        return $this->idle_item_yhb_do;
    }

    public function setIdleItemYhbDo(AlibabaIdleIsvItemQueryIdleItemApiYhbDO $idleItemYhbDo){
        $this->idle_item_yhb_do = $idleItemYhbDo;
    }

    public function getRealCarVerifyData() : AlibabaIdleIsvItemQueryIdleItemApiYhbDO{
        return $this->real_car_verify_data;
    }

    public function setRealCarVerifyData(AlibabaIdleIsvItemQueryIdleItemApiYhbDO $realCarVerifyData){
        $this->real_car_verify_data = $realCarVerifyData;
    }

    public function getBizHelpData() : AlibabaIdleIsvItemQueryIdleItemApiBizHelpDataDO{
        return $this->biz_help_data;
    }

    public function setBizHelpData(AlibabaIdleIsvItemQueryIdleItemApiBizHelpDataDO $bizHelpData){
        $this->biz_help_data = $bizHelpData;
    }

    public function getFlashSaleDo() : AlibabaIdleIsvItemQueryIdleItemApiFlashSaleDO{
        return $this->flash_sale_do;
    }

    public function setFlashSaleDo(AlibabaIdleIsvItemQueryIdleItemApiFlashSaleDO $flashSaleDo){
        $this->flash_sale_do = $flashSaleDo;
    }

    public function getIdleTemplateId() : int{
        return $this->idle_template_id;
    }

    public function setIdleTemplateId(int $idleTemplateId){
        $this->idle_template_id = $idleTemplateId;
    }

    public function getPropertyImages() : array{
        return $this->property_images;
    }

    public function setPropertyImages(array $propertyImages){
        $this->property_images = $propertyImages;
    }

    public function getLongImages() : array{
        return $this->long_images;
    }

    public function setLongImages(array $longImages){
        $this->long_images = $longImages;
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

    public function getTrendyPreSaleDo() : AlibabaIdleIsvItemQueryIdleItemTrendyPreSaleDO{
        return $this->trendy_pre_sale_do;
    }

    public function setTrendyPreSaleDo(AlibabaIdleIsvItemQueryIdleItemTrendyPreSaleDO $trendyPreSaleDo){
        $this->trendy_pre_sale_do = $trendyPreSaleDo;
    }

    public function getNotifyMessage() : string{
        return $this->notify_message;
    }

    public function setNotifyMessage(string $notifyMessage){
        $this->notify_message = $notifyMessage;
    }

    public function getBrandBargain() : AlibabaIdleIsvItemQueryIdleItemApiBrandBargainDO{
        return $this->brand_bargain;
    }

    public function setBrandBargain(AlibabaIdleIsvItemQueryIdleItemApiBrandBargainDO $brandBargain){
        $this->brand_bargain = $brandBargain;
    }

    public function getStoreGroupDo() : AlibabaIdleIsvItemQueryIdleItemApiStoreGroupDO{
        return $this->store_group_do;
    }

    public function setStoreGroupDo(AlibabaIdleIsvItemQueryIdleItemApiStoreGroupDO $storeGroupDo){
        $this->store_group_do = $storeGroupDo;
    }

    public function getDistributionItemInfo() : AlibabaIdleIsvItemQueryIdleDistributionItemInfoDO{
        return $this->distribution_item_info;
    }

    public function setDistributionItemInfo(AlibabaIdleIsvItemQueryIdleDistributionItemInfoDO $distributionItemInfo){
        $this->distribution_item_info = $distributionItemInfo;
    }

    public function getTrendyChouShangDo() : AlibabaIdleIsvItemQueryIdleItemTrendyChouShangDO{
        return $this->trendy_chou_shang_do;
    }

    public function setTrendyChouShangDo(AlibabaIdleIsvItemQueryIdleItemTrendyChouShangDO $trendyChouShangDo){
        $this->trendy_chou_shang_do = $trendyChouShangDo;
    }

    public function getItemLeaseDo() : AlibabaIdleIsvItemQueryItemLeaseDO{
        return $this->item_lease_do;
    }

    public function setItemLeaseDo(AlibabaIdleIsvItemQueryItemLeaseDO $itemLeaseDo){
        $this->item_lease_do = $itemLeaseDo;
    }

    public function getSecKillTime() : int{
        return $this->sec_kill_time;
    }

    public function setSecKillTime(int $secKillTime){
        $this->sec_kill_time = $secKillTime;
    }

    public function getXGlobalCode() : string{
        return $this->x_global_code;
    }

    public function setXGlobalCode(string $xGlobalCode){
        $this->x_global_code = $xGlobalCode;
    }


}

