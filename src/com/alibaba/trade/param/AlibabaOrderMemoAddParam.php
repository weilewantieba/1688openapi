<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaOrderMemoAddParam
{

        
        /**
    * @return 订单ID
    */
    public function getOrderId()
    {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单ID
     * @param Long $orderId
     * 参数示例：<pre>1234567</pre>
     * 此参数必填     */
    public function setOrderId($orderId)
    {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
    /**
    * @return 备忘信息
    */
    public function getMemo()
    {
        $tempResult = $this->sdkStdResult["memo"];
        return $tempResult;
    }
    
    /**
     * 设置备忘信息
     * @param String $memo
     * 参数示例：<pre>订单备忘详情</pre>
     * 此参数必填     */
    public function setMemo($memo)
    {
        $this->sdkStdResult["memo"] = $memo;
    }
    
        
    /**
    * @return 备忘图标，目前仅支持数字。1位红色图标，2为蓝色图标，3为绿色图标，4为黄色图标
    */
    public function getRemarkIcon()
    {
        $tempResult = $this->sdkStdResult["remarkIcon"];
        return $tempResult;
    }
    
    /**
     * 设置备忘图标，目前仅支持数字。1位红色图标，2为蓝色图标，3为绿色图标，4为黄色图标
     * @param String $remarkIcon
     * 参数示例：<pre>2</pre>
     * 此参数必填     */
    public function setRemarkIcon($remarkIcon)
    {
        $this->sdkStdResult["remarkIcon"] = $remarkIcon;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
