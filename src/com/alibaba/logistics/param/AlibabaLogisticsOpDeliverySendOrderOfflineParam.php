<?php

namespace Keyi1688\com\alibaba\logistics\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaLogisticsOpDeliverySendOrderOfflineParam\AlibabaLogisticsOpSendGood;
use Keyi1688\AlibabaLogisticsOpDeliverySendOrderOfflineParam\AlibabaLogisticsOpReceiveContacter;

class AlibabaLogisticsOpDeliverySendOrderOfflineParam
{

        
        /**
    * @return 发货对象列表
    */
    public function getSendGoods()
    {
        $tempResult = $this->sdkStdResult["sendGoods"];
        return $tempResult;
    }
    
    /**
     * 设置发货对象列表
     * @param array include @see AlibabaLogisticsOpSendGood[] $sendGoods
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setSendGoods(AlibabaLogisticsOpSendGood $sendGoods)
    {
        $this->sdkStdResult["sendGoods"] = $sendGoods;
    }
    
        
    /**
    * @return 备注
    */
    public function getRemarks()
    {
        $tempResult = $this->sdkStdResult["remarks"];
        return $tempResult;
    }
    
    /**
     * 设置备注
     * @param String $remarks
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setRemarks($remarks)
    {
        $this->sdkStdResult["remarks"] = $remarks;
    }
    
        
    /**
    * @return 发货时间
    */
    public function getGmtSend()
    {
        $tempResult = $this->sdkStdResult["gmtSend"];
        return $tempResult;
    }
    
    /**
     * 设置发货时间
     * @param Date $gmtSend
     * 参数示例：<pre>标准时间格式：yyyyMMddHHmmssSSSZ，例如：20120801154220368+0800</pre>
     * 此参数必填     */
    public function setGmtSend($gmtSend)
    {
        $this->sdkStdResult["gmtSend"] = $gmtSend;
    }
    
        
    /**
    * @return JSON字符串，cpCode 为物流公司code，对应物流公司信息获取接口的companyNo（非数字Id）; logisticsCpName:物流公司名称，对应物流公司信息获取接口的companyName； mailNo：运单号； 可以通过获取 "物流公司列表-自联物流" 接口查询到数据。
    */
    public function getExtBody()
    {
        $tempResult = $this->sdkStdResult["extBody"];
        return $tempResult;
    }
    
    /**
     * 设置JSON字符串，cpCode 为物流公司code，对应物流公司信息获取接口的companyNo（非数字Id）; logisticsCpName:物流公司名称，对应物流公司信息获取接口的companyName； mailNo：运单号； 可以通过获取 "物流公司列表-自联物流" 接口查询到数据。
     * @param String $extBody
     * 参数示例：<pre>{"cpCode":"SF","logisticsCpName":"顺丰","mailNo":"a123"}</pre>
     * 此参数必填     */
    public function setExtBody($extBody)
    {
        $this->sdkStdResult["extBody"] = $extBody;
    }
    
        
    /**
    * @return JSON 字符串
    */
    public function getExtParam()
    {
        $tempResult = $this->sdkStdResult["extParam"];
        return $tempResult;
    }
    
    /**
     * 设置JSON 字符串
     * @param String $extParam
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setExtParam($extParam)
    {
        $this->sdkStdResult["extParam"] = $extParam;
    }
    
        
    /**
    * @return 收货地址,优先级大于订单收货地址，为空时，使用订单收货地址
    */
    public function getReceiverInfo()
    {
        $tempResult = $this->sdkStdResult["receiverInfo"];
        return $tempResult;
    }
    
    /**
     * 设置收货地址,优先级大于订单收货地址，为空时，使用订单收货地址
     * @param AlibabaLogisticsOpReceiveContacter $receiverInfo
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setReceiverInfo(AlibabaLogisticsOpReceiveContacter $receiverInfo)
    {
        $this->sdkStdResult["receiverInfo"] = $receiverInfo;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
