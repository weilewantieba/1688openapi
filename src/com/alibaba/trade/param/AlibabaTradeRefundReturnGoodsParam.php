<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeRefundReturnGoodsParam
{

        
        /**
    * @return 退款单号，TQ开头
    */
    public function getRefundId()
    {
        $tempResult = $this->sdkStdResult["refundId"];
        return $tempResult;
    }
    
    /**
     * 设置退款单号，TQ开头
     * @param String $refundId
     * 参数示例：<pre>TQ36706338027991577</pre>
     * 此参数必填     */
    public function setRefundId($refundId)
    {
        $this->sdkStdResult["refundId"] = $refundId;
    }
    
        
    /**
    * @return 物流公司编码，调用alibaba.logistics.OpQueryLogisticCompanyList.offline接口查询
    */
    public function getLogisticsCompanyNo()
    {
        $tempResult = $this->sdkStdResult["logisticsCompanyNo"];
        return $tempResult;
    }
    
    /**
     * 设置物流公司编码，调用alibaba.logistics.OpQueryLogisticCompanyList.offline接口查询
     * @param String $logisticsCompanyNo
     * 参数示例：<pre>ZTO</pre>
     * 此参数必填     */
    public function setLogisticsCompanyNo($logisticsCompanyNo)
    {
        $this->sdkStdResult["logisticsCompanyNo"] = $logisticsCompanyNo;
    }
    
        
    /**
    * @return 物流公司运单号，请准确填写，否则卖家有权拒绝退款
    */
    public function getFreightBill()
    {
        $tempResult = $this->sdkStdResult["freightBill"];
        return $tempResult;
    }
    
    /**
     * 设置物流公司运单号，请准确填写，否则卖家有权拒绝退款
     * @param String $freightBill
     * 参数示例：<pre>3110044550034338</pre>
     * 此参数必填     */
    public function setFreightBill($freightBill)
    {
        $this->sdkStdResult["freightBill"] = $freightBill;
    }
    
        
    /**
    * @return 发货说明，内容在2-200个字之间
    */
    public function getDescription()
    {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置发货说明，内容在2-200个字之间
     * @param String $description
     * 参数示例：<pre>发货说明</pre>
     * 此参数必填     */
    public function setDescription($description)
    {
        $this->sdkStdResult["description"] = $description;
    }
    
        
    /**
    * @return 凭证图片URLs，必须使用API alibaba.trade.uploadRefundVoucher返回的“图片域名/相对路径”，最多可上传 10 张图片 ；单张大小不超过1M；支持jpg、gif、jpeg、png、和bmp格式。 请上传凭证，以便以后续赔所需（不上传将无法理赔）
    */
    public function getVouchers()
    {
        $tempResult = $this->sdkStdResult["vouchers"];
        return $tempResult;
    }
    
    /**
     * 设置凭证图片URLs，必须使用API alibaba.trade.uploadRefundVoucher返回的“图片域名/相对路径”，最多可上传 10 张图片 ；单张大小不超过1M；支持jpg、gif、jpeg、png、和bmp格式。 请上传凭证，以便以后续赔所需（不上传将无法理赔）
     * @param array include @see String[] $vouchers
     * 参数示例：<pre>[https://cbu01.alicdn.com/img/ibank/2019/901/930/11848039109.jpg]</pre>
     * 此参数必填     */
    public function setVouchers($vouchers)
    {
        $this->sdkStdResult["vouchers"] = $vouchers;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
