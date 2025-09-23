<?php
namespace Topsdk\Topapi\Ability2461;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvSpuSearchRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemCpvCategoryFulltreeWithPrivRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvPriceStrengthCheckRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvUserInfoRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvPvListRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvGpuTemplateBatchaddRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemPublishRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvOrderDealrefundRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleMerchantMediaPicToIdRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvOrderShipRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemMediaPicToIdRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvUserAuthorizeRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvGpuMediaUploadRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemEditRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemDownshelfRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvRefundQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvOrderUrlAddRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvAddressModifyQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleLocalStoregroupStoreGroupQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvAddressModifyAgreeRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleLocalStoregroupStoreInfoQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemUrlQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvAddressModifyRefuseRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleOrderMsgSendRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvMediaUploadRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvUserQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleUserPermitRevokeRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvOrderRateQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleCroRecordQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleCoinCoindeductionOpenRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleLogisticsCompaniesQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleCoinCoindeductionCloseRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleCoinCoindeductionListRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleCoinCoindeductionChangeRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleCoinCoindeductionQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvOrderAdjustpriceRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleYellowBoxGpuQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemCycleBuyPeriodQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvGpuBiddingItemPublishRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleUserPermitQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleLogisticsTemplateUpdateRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleYellowBoxCspuQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemCycleBuyActivityListRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvGpuTemplateAddRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleLogisticsTemplateQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleLogisticsTemplateDeleteRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleLogisticsTemplateCreateRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleLogisticsTemplateQueryListRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemCycleBuyModifyCycleInventoryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleLogisticsTemplateDivisionRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvGpuTemplateUpdateRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvGpuTemplateDetailQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvGpuProductCpvAddRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvGpuTemplateDeleteRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvGpuProductCpvUpdateRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvProductCpvDetailQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvProductCpvPageQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemRechargeBatchRemoveRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvGpuProductCpvDeleteRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleItemUserPublishitemsRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvPvQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleUserPermitRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleOrderDummySendRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvFanspriceConfigRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvRateCreateRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvLogisticsResendRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvServicerateBizqueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvOrderCloseRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleCoinCoindeductionCheckRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleCoinCoindeductionItemQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleCoinCoindeductionUserCheckRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvOrderQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemRechargeEditRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvOrderReportUploadRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvTradeDisputeQueryRequest;
use Topsdk\Topapi\Ability2461\Request\AlibabaIdleIsvItemShipTypeRequest;

class Ability2461 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        spu搜索接口
    **/
    public function alibabaIdleIsvSpuSearch(AlibabaIdleIsvSpuSearchRequest $request) {
        return $this->client->execute("alibaba.idle.isv.spu.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        类目树获取接口
    **/
    public function alibabaIdleIsvItemCpvCategoryFulltreeWithPriv(AlibabaIdleIsvItemCpvCategoryFulltreeWithPrivRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.cpv.category.fulltree.with.priv", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商品发品价格力检测
    **/
    public function alibabaIdleIsvPriceStrengthCheck(AlibabaIdleIsvPriceStrengthCheckRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.price.strength.check", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼用户信息查询接口
    **/
    public function alibabaIdleIsvUserInfo(AlibabaIdleIsvUserInfoRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.user.info", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼已验货pv查询
    **/
    public function alibabaIdleIsvPvList(AlibabaIdleIsvPvListRequest $request) {
        return $this->client->execute("alibaba.idle.isv.pv.list", $request->toMap(), $request->toFileParamMap());
    }
    /**
        gpu模版批量新增
    **/
    public function alibabaIdleIsvGpuTemplateBatchadd(AlibabaIdleIsvGpuTemplateBatchaddRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.gpu.template.batchadd", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商闲鱼商品发布
    **/
    public function alibabaIdleIsvItemPublish(AlibabaIdleIsvItemPublishRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.publish", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼电商SAAS服务商退款处理接口
    **/
    public function alibabaIdleIsvOrderDealrefund(AlibabaIdleIsvOrderDealrefundRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.dealrefund", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        不同商家根据图片url获取图片文件ID（需进行文件下载上传）
    **/
    public function alibabaIdleMerchantMediaPicToId(AlibabaIdleMerchantMediaPicToIdRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.merchant.media.pic.to.id", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼订单服务商物流发货
    **/
    public function alibabaIdleIsvOrderShip(AlibabaIdleIsvOrderShipRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.ship", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        同商家根据图片url获取图片文件ID
    **/
    public function alibabaIdleIsvItemMediaPicToId(AlibabaIdleIsvItemMediaPicToIdRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.media.pic.to.id", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        用户授权接口
    **/
    public function alibabaIdleIsvUserAuthorize(AlibabaIdleIsvUserAuthorizeRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.user.authorize", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        GPU图片新增
    **/
    public function alibabaIdleIsvGpuMediaUpload(AlibabaIdleIsvGpuMediaUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.gpu.media.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商闲鱼商品编辑
    **/
    public function alibabaIdleIsvItemEdit(AlibabaIdleIsvItemEditRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.edit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商闲鱼商品下架
    **/
    public function alibabaIdleIsvItemDownshelf(AlibabaIdleIsvItemDownshelfRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.downshelf", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼已验货交易订单退款信息查询
    **/
    public function alibabaIdleIsvRefundQuery(AlibabaIdleIsvRefundQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.refund.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商闲鱼商品查询
    **/
    public function alibabaIdleIsvItemQuery(AlibabaIdleIsvItemQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商卡券超链商品订单添加兑换链接
    **/
    public function alibabaIdleIsvOrderUrlAdd(AlibabaIdleIsvOrderUrlAddRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.url.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商ISV查询订单修改前后的地址
    **/
    public function alibabaIdleIsvAddressModifyQuery(AlibabaIdleIsvAddressModifyQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.address.modify.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        本地业务门店库查询
    **/
    public function alibabaIdleLocalStoregroupStoreGroupQuery(AlibabaIdleLocalStoregroupStoreGroupQueryRequest $request) {
        return $this->client->execute("alibaba.idle.local.storegroup.store.group.query", $request->toMap(), $request->toFileParamMap());
    }
    /**
        服务商ISV对订单修改地址的申请单操作同意
    **/
    public function alibabaIdleIsvAddressModifyAgree(AlibabaIdleIsvAddressModifyAgreeRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.address.modify.agree", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        本地业务门店分页查询
    **/
    public function alibabaIdleLocalStoregroupStoreInfoQuery(AlibabaIdleLocalStoregroupStoreInfoQueryRequest $request) {
        return $this->client->execute("alibaba.idle.local.storegroup.store.info.query", $request->toMap(), $request->toFileParamMap());
    }
    /**
        卡券超链商品查询有效的兑换链接
    **/
    public function alibabaIdleIsvItemUrlQuery(AlibabaIdleIsvItemUrlQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.url.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商ISV对订单修改地址的申请单操作拒绝
    **/
    public function alibabaIdleIsvAddressModifyRefuse(AlibabaIdleIsvAddressModifyRefuseRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.address.modify.refuse", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        虚拟发货消息发送接口
    **/
    public function alibabaIdleOrderMsgSend(AlibabaIdleOrderMsgSendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.order.msg.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼服务商-图片上传
    **/
    public function alibabaIdleIsvMediaUpload(AlibabaIdleIsvMediaUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.media.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商ISV闲鱼用户信息查询
    **/
    public function alibabaIdleIsvUserQuery(AlibabaIdleIsvUserQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.user.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除服务商与卖家之间的订单消息绑定关系
    **/
    public function alibabaIdleUserPermitRevoke(AlibabaIdleUserPermitRevokeRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.user.permit.revoke", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        Saas-卖家订单以及评价查询
    **/
    public function alibabaIdleIsvOrderRateQuery(AlibabaIdleIsvOrderRateQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.rate.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼cro处罚记录信息
    **/
    public function alibabaIdleCroRecordQuery(AlibabaIdleCroRecordQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.cro.record.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        开启闲鱼币交易抵扣
    **/
    public function alibabaIdleCoinCoindeductionOpen(AlibabaIdleCoinCoindeductionOpenRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.coin.coindeduction.open", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        快递公司列表查询
    **/
    public function alibabaIdleLogisticsCompaniesQuery(AlibabaIdleLogisticsCompaniesQueryRequest $request) {
        return $this->client->execute("alibaba.idle.logistics.companies.query", $request->toMap(), $request->toFileParamMap());
    }
    /**
        关闭闲鱼币交易抵扣
    **/
    public function alibabaIdleCoinCoindeductionClose(AlibabaIdleCoinCoindeductionCloseRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.coin.coindeduction.close", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼币交易抵扣商品查询
    **/
    public function alibabaIdleCoinCoindeductionList(AlibabaIdleCoinCoindeductionListRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.coin.coindeduction.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼币抵扣协议变更
    **/
    public function alibabaIdleCoinCoindeductionChange(AlibabaIdleCoinCoindeductionChangeRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.coin.coindeduction.change", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询闲鱼币协议是否开通
    **/
    public function alibabaIdleCoinCoindeductionQuery(AlibabaIdleCoinCoindeductionQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.coin.coindeduction.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼服务商订单价格修改接口
    **/
    public function alibabaIdleIsvOrderAdjustprice(AlibabaIdleIsvOrderAdjustpriceRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.adjustprice", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        小黄盒gpu查询
    **/
    public function alibabaIdleYellowBoxGpuQuery(AlibabaIdleYellowBoxGpuQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.yellow.box.gpu.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        Saas-周期拍活动信息查询
    **/
    public function alibabaIdleIsvItemCycleBuyPeriodQuery(AlibabaIdleIsvItemCycleBuyPeriodQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.cycle.buy.period.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商竞价商品发布
    **/
    public function alibabaIdleIsvGpuBiddingItemPublish(AlibabaIdleIsvGpuBiddingItemPublishRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.gpu.bidding.item.publish", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询服务商与卖家之间的订单消息绑定关系
    **/
    public function alibabaIdleUserPermitQuery(AlibabaIdleUserPermitQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.user.permit.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        运费模版更新
    **/
    public function alibabaIdleLogisticsTemplateUpdate(AlibabaIdleLogisticsTemplateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.logistics.template.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        cspu查询
    **/
    public function alibabaIdleYellowBoxCspuQuery(AlibabaIdleYellowBoxCspuQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.yellow.box.cspu.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        周期拍活动列表
    **/
    public function alibabaIdleIsvItemCycleBuyActivityList(AlibabaIdleIsvItemCycleBuyActivityListRequest $request) {
        return $this->client->execute("alibaba.idle.isv.item.cycle.buy.activity.list", $request->toMap(), $request->toFileParamMap());
    }
    /**
        gpu模版新增
    **/
    public function alibabaIdleIsvGpuTemplateAdd(AlibabaIdleIsvGpuTemplateAddRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.gpu.template.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼-运费模版查询
    **/
    public function alibabaIdleLogisticsTemplateQuery(AlibabaIdleLogisticsTemplateQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.logistics.template.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        运费模版删除
    **/
    public function alibabaIdleLogisticsTemplateDelete(AlibabaIdleLogisticsTemplateDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.logistics.template.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        运费模版创建
    **/
    public function alibabaIdleLogisticsTemplateCreate(AlibabaIdleLogisticsTemplateCreateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.logistics.template.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        运费模版列表查询
    **/
    public function alibabaIdleLogisticsTemplateQueryList(AlibabaIdleLogisticsTemplateQueryListRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.logistics.template.query.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改周期拍库存
    **/
    public function alibabaIdleIsvItemCycleBuyModifyCycleInventory(AlibabaIdleIsvItemCycleBuyModifyCycleInventoryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.cycle.buy.modify.cycle.inventory", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        运费模版省市区地址
    **/
    public function alibabaIdleLogisticsTemplateDivision(AlibabaIdleLogisticsTemplateDivisionRequest $request) {
        return $this->client->execute("alibaba.idle.logistics.template.division", $request->toMap(), $request->toFileParamMap());
    }
    /**
        gpu模版修改
    **/
    public function alibabaIdleIsvGpuTemplateUpdate(AlibabaIdleIsvGpuTemplateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.gpu.template.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        gpu模版明细查询
    **/
    public function alibabaIdleIsvGpuTemplateDetailQuery(AlibabaIdleIsvGpuTemplateDetailQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.gpu.template.detail.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        货号-CPV关系新增
    **/
    public function alibabaIdleIsvGpuProductCpvAdd(AlibabaIdleIsvGpuProductCpvAddRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.gpu.product.cpv.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        gpu模版删除
    **/
    public function alibabaIdleIsvGpuTemplateDelete(AlibabaIdleIsvGpuTemplateDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.gpu.template.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        货号-CPV信息修改
    **/
    public function alibabaIdleIsvGpuProductCpvUpdate(AlibabaIdleIsvGpuProductCpvUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.gpu.product.cpv.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        货号-CPV信息配置明细查询
    **/
    public function alibabaIdleIsvProductCpvDetailQuery(AlibabaIdleIsvProductCpvDetailQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.product.cpv.detail.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        货号-CPV信息配置分页查询
    **/
    public function alibabaIdleIsvProductCpvPageQuery(AlibabaIdleIsvProductCpvPageQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.product.cpv.page.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼商品直充功能移除
    **/
    public function alibabaIdleIsvItemRechargeBatchRemove(AlibabaIdleIsvItemRechargeBatchRemoveRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.recharge.batch.remove", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        货号-cpv关系删除
    **/
    public function alibabaIdleIsvGpuProductCpvDelete(AlibabaIdleIsvGpuProductCpvDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.gpu.product.cpv.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发布的商品列表
    **/
    public function alibabaIdleItemUserPublishitems(AlibabaIdleItemUserPublishitemsRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.item.user.publishitems", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询pv属性
    **/
    public function alibabaIdleIsvPvQuery(AlibabaIdleIsvPvQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.pv.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        用户appkey授权
    **/
    public function alibabaIdleUserPermit(AlibabaIdleUserPermitRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.user.permit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼无需物流发货
    **/
    public function alibabaIdleOrderDummySend(AlibabaIdleOrderDummySendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.order.dummy.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼服务商-设置粉丝价
    **/
    public function alibabaIdleIsvFanspriceConfig(AlibabaIdleIsvFanspriceConfigRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.fansprice.config", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        订单评价与追评
    **/
    public function alibabaIdleIsvRateCreate(AlibabaIdleIsvRateCreateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.rate.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改快递单号
    **/
    public function alibabaIdleIsvLogisticsResend(AlibabaIdleIsvLogisticsResendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.logistics.resend", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据业务Id查询闲鱼服务评价列表信息
    **/
    public function alibabaIdleIsvServicerateBizquery(AlibabaIdleIsvServicerateBizqueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.servicerate.bizquery", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商闲鱼卖家主动关闭订单
    **/
    public function alibabaIdleIsvOrderClose(AlibabaIdleIsvOrderCloseRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.close", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼币抵扣校验接口
    **/
    public function alibabaIdleCoinCoindeductionCheck(AlibabaIdleCoinCoindeductionCheckRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.coin.coindeduction.check", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询商品相关闲鱼币抵扣信息
    **/
    public function alibabaIdleCoinCoindeductionItemQuery(AlibabaIdleCoinCoindeductionItemQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.coin.coindeduction.item.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼币抵扣用户身份查询
    **/
    public function alibabaIdleCoinCoindeductionUserCheck(AlibabaIdleCoinCoindeductionUserCheckRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.coin.coindeduction.user.check", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        Saas-闲鱼订单查询
    **/
    public function alibabaIdleIsvOrderQuery(AlibabaIdleIsvOrderQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼商品直充功能编辑
    **/
    public function alibabaIdleIsvItemRechargeEdit(AlibabaIdleIsvItemRechargeEditRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.recharge.edit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        Saas严选深库存商品-订单上传验货报告
    **/
    public function alibabaIdleIsvOrderReportUpload(AlibabaIdleIsvOrderReportUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.order.report.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        闲鱼交易纠纷查询
    **/
    public function alibabaIdleIsvTradeDisputeQuery(AlibabaIdleIsvTradeDisputeQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.trade.dispute.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商商品发货方式
    **/
    public function alibabaIdleIsvItemShipType(AlibabaIdleIsvItemShipTypeRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.idle.isv.item.ship.type", $request->toMap(), $request->toFileParamMap(), $session);
    }
}