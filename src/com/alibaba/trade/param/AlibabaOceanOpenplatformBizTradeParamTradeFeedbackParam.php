<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaOceanOpenplatformBizTradeParamTradeFeedbackParam extends SDKDomain
{
    private $feedback;
    
    /**
    * @return 留言
    */
    public function getFeedback()
    {
        return $this->feedback;
    }
    
    /**
     * 设置留言
     * @param String $feedback
     * 参数示例：<pre>留言</pre>
     * 此参数必填     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;
    }
    
            
    private $orderId;
    
    /**
    * @return 订单ID
    */
    public function getOrderId()
    {
        return $this->orderId;
    }
    
    /**
     * 设置订单ID
     * @param String $orderId
     * 参数示例：<pre>12344444555545</pre>
     * 此参数必填     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("feedback", $this->stdResult)) {
            $this->feedback = $this->stdResult->{"feedback"};
        }
        if (array_key_exists("orderId", $this->stdResult)) {
            $this->orderId = $this->stdResult->{"orderId"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("feedback", $this->arrayResult)) {
            $this->feedback = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("orderId", $this->arrayResult)) {
            $this->orderId = $arrayResult['${paramType.paramName}'];
        }
    }
}
