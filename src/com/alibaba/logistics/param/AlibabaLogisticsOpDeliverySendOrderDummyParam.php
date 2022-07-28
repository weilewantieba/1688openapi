<?php

namespace Keyi1688\com\alibaba\logistics\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaLogisticsOpDeliverySendOrderDummyParam\AlibabaLogisticsOpSendGood;
use Keyi1688\AlibabaLogisticsOpDeliverySendOrderDummyParam\AlibabaLogisticsOpReceiveContacter;

class AlibabaLogisticsOpDeliverySendOrderDummyParam
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
    * @return JSON字符串,extBodyJson中的noLogisticsCondition必填，取值字符串1到5：“1”：其他第三方物流、小型物充商、车队等（noLogisticsName、noLogisticsTel必填）；“2”：补运费、差价（noLogisticsBillNo必填）；“3”：卖家配送（noLogisticsName、noLogisticsTel必填）；“4”：买家自提；“5”：其他原因（remarks必填）。其他字段根据noLogisticsCondition的值不同，必填要求不同。字段说明：无需物流原因:noLogisticsCondition;无需物流名称:noLogisticsName;无需物流电话:noLogisticsTel;无需物流单号，不同的无需物流原因，该字段解释不同:noLogisticsBillNo。
    */
    public function getExtBody()
    {
        $tempResult = $this->sdkStdResult["extBody"];
        return $tempResult;
    }
    
    /**
     * 设置JSON字符串,extBodyJson中的noLogisticsCondition必填，取值字符串1到5：“1”：其他第三方物流、小型物充商、车队等（noLogisticsName、noLogisticsTel必填）；“2”：补运费、差价（noLogisticsBillNo必填）；“3”：卖家配送（noLogisticsName、noLogisticsTel必填）；“4”：买家自提；“5”：其他原因（remarks必填）。其他字段根据noLogisticsCondition的值不同，必填要求不同。字段说明：无需物流原因:noLogisticsCondition;无需物流名称:noLogisticsName;无需物流电话:noLogisticsTel;无需物流单号，不同的无需物流原因，该字段解释不同:noLogisticsBillNo。
     * @param String $extBody
     * 参数示例：<pre>{"noLogisticsBillNo":"111111111111111111","noLogisticsCondition":"3","noLogisticsName":"张三","noLogisticsTel":"13999999999"}</pre>
     * 此参数必填     */
    public function setExtBody($extBody)
    {
        $this->sdkStdResult["extBody"] = $extBody;
    }
    
        
    /**
    * @return {}
    */
    public function getExtParam()
    {
        $tempResult = $this->sdkStdResult["extParam"];
        return $tempResult;
    }
    
    /**
     * 设置{}
     * @param String $extParam
     * 参数示例：<pre>JSON 字符串</pre>
     * 此参数必填     */
    public function setExtParam($extParam)
    {
        $this->sdkStdResult["extParam"] = $extParam;
    }
    
        
    /**
    * @return 收货地址
    */
    public function getReceiverInfo()
    {
        $tempResult = $this->sdkStdResult["receiverInfo"];
        return $tempResult;
    }
    
    /**
     * 设置收货地址
     * @param AlibabaLogisticsOpReceiveContacter $receiverInfo
     * 参数示例：<pre>优先级大于订单收货地址，为空时，使用订单收货地址</pre>
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
