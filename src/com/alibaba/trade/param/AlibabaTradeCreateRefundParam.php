<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaTradeCreateRefundParam\AlibabaOceanOpenplatformBizTradeCommonModelOrderEntryCountModel;

class AlibabaTradeCreateRefundParam
{

        
        /**
    * @return 主订单
    */
    public function getOrderId()
    {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置主订单
     * @param Long $orderId
     * 参数示例：<pre>  </pre>
     * 此参数必填     */
    public function setOrderId($orderId)
    {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
    /**
    * @return 子订单
    */
    public function getOrderEntryIds()
    {
        $tempResult = $this->sdkStdResult["orderEntryIds"];
        return $tempResult;
    }
    
    /**
     * 设置子订单
     * @param array include @see Long[] $orderEntryIds
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setOrderEntryIds($orderEntryIds)
    {
        $this->sdkStdResult["orderEntryIds"] = $orderEntryIds;
    }
    
        
    /**
    * @return 退款/退款退货。只有已收到货，才可以选择退款退货。
    */
    public function getDisputeRequest()
    {
        $tempResult = $this->sdkStdResult["disputeRequest"];
        return $tempResult;
    }
    
    /**
     * 设置退款/退款退货。只有已收到货，才可以选择退款退货。
     * @param String $disputeRequest
     * 参数示例：<pre>退款:"refund"; 退款退货:"returnRefund"</pre>
     * 此参数必填     */
    public function setDisputeRequest($disputeRequest)
    {
        $this->sdkStdResult["disputeRequest"] = $disputeRequest;
    }
    
        
    /**
    * @return 退款金额（单位：分）。不大于实际付款金额；等待卖家发货时，必须为商品的实际付款金额。
    */
    public function getApplyPayment()
    {
        $tempResult = $this->sdkStdResult["applyPayment"];
        return $tempResult;
    }
    
    /**
     * 设置退款金额（单位：分）。不大于实际付款金额；等待卖家发货时，必须为商品的实际付款金额。
     * @param Long $applyPayment
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setApplyPayment($applyPayment)
    {
        $this->sdkStdResult["applyPayment"] = $applyPayment;
    }
    
        
    /**
    * @return 退运费金额（单位：分）。
    */
    public function getApplyCarriage()
    {
        $tempResult = $this->sdkStdResult["applyCarriage"];
        return $tempResult;
    }
    
    /**
     * 设置退运费金额（单位：分）。
     * @param Long $applyCarriage
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setApplyCarriage($applyCarriage)
    {
        $this->sdkStdResult["applyCarriage"] = $applyCarriage;
    }
    
        
    /**
    * @return 退款原因id（从API getRefundReasonList获取）
    */
    public function getApplyReasonId()
    {
        $tempResult = $this->sdkStdResult["applyReasonId"];
        return $tempResult;
    }
    
    /**
     * 设置退款原因id（从API getRefundReasonList获取）
     * @param Long $applyReasonId
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setApplyReasonId($applyReasonId)
    {
        $this->sdkStdResult["applyReasonId"] = $applyReasonId;
    }
    
        
    /**
    * @return 退款申请理由，2-150字
    */
    public function getDescription()
    {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置退款申请理由，2-150字
     * @param String $description
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setDescription($description)
    {
        $this->sdkStdResult["description"] = $description;
    }
    
        
    /**
    * @return 货物状态
    */
    public function getGoodsStatus()
    {
        $tempResult = $this->sdkStdResult["goodsStatus"];
        return $tempResult;
    }
    
    /**
     * 设置货物状态
     * @param String $goodsStatus
     * 参数示例：<pre> 售中等待卖家发货:"refundWaitSellerSend"; 售中等待买家收货:"refundWaitBuyerReceive"; 售中已收货（未确认完成交易）:"refundBuyerReceived" 售后未收货:"aftersaleBuyerNotReceived"; 售后已收到货:"aftersaleBuyerReceived"</pre>
     * 此参数必填     */
    public function setGoodsStatus($goodsStatus)
    {
        $this->sdkStdResult["goodsStatus"] = $goodsStatus;
    }
    
        
    /**
    * @return 凭证图片URLs。1-5张，必须使用API uploadRefundVoucher返回的“图片域名/相对路径”
    */
    public function getVouchers()
    {
        $tempResult = $this->sdkStdResult["vouchers"];
        return $tempResult;
    }
    
    /**
     * 设置凭证图片URLs。1-5张，必须使用API uploadRefundVoucher返回的“图片域名/相对路径”
     * @param array include @see String[] $vouchers
     * 参数示例：<pre> [https://cbu01.alicdn.com/img/ibank/2019/901/930/11848039109.jpg]</pre>
     * 此参数必填     */
    public function setVouchers($vouchers)
    {
        $this->sdkStdResult["vouchers"] = $vouchers;
    }
    
        
    /**
    * @return 子订单退款数量。仅在售中买家已收货（退款退货）时，可指定退货数量；默认，全部退货。
    */
    public function getOrderEntryCountList()
    {
        $tempResult = $this->sdkStdResult["orderEntryCountList"];
        return $tempResult;
    }
    
    /**
     * 设置子订单退款数量。仅在售中买家已收货（退款退货）时，可指定退货数量；默认，全部退货。
     * @param array include @see AlibabaOceanOpenplatformBizTradeCommonModelOrderEntryCountModel[] $orderEntryCountList
     * 参数示例：<pre> [{"id":586683458996743215,"count":1}]</pre>
     * 此参数必填     */
    public function setOrderEntryCountList(AlibabaOceanOpenplatformBizTradeCommonModelOrderEntryCountModel $orderEntryCountList)
    {
        $this->sdkStdResult["orderEntryCountList"] = $orderEntryCountList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
