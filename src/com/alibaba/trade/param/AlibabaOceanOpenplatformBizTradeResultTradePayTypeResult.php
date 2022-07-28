<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaTradePayWayQueryParam\AlibabaOceanOpenplatformBizTradeResultPayTypeInfo;

class AlibabaOceanOpenplatformBizTradeResultTradePayTypeResult extends SDKDomain
{
    private $channels;
    
    /**
    * @return 可用支付渠道列表
    */
    public function getChannels()
    {
        return $this->channels;
    }
    
    /**
     * 设置可用支付渠道列表
     * @param array include @see AlibabaOceanOpenplatformBizTradeResultPayTypeInfo[] $channels
     * 参数示例：<pre>[]</pre>
     * 此参数必填     */
    public function setChannels(AlibabaOceanOpenplatformBizTradeResultPayTypeInfo $channels)
    {
        $this->channels = $channels;
    }
    
            
    private $orderId;
    
    /**
    * @return 订单号
    */
    public function getOrderId()
    {
        return $this->orderId;
    }
    
    /**
     * 设置订单号
     * @param String $orderId
     * 参数示例：<pre>1231231211</pre>
     * 此参数必填     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }
    
            
    private $payFee;
    
    /**
    * @return 支付金额，单位分
    */
    public function getPayFee()
    {
        return $this->payFee;
    }
    
    /**
     * 设置支付金额，单位分
     * @param Long $payFee
     * 参数示例：<pre>100</pre>
     * 此参数必填     */
    public function setPayFee($payFee)
    {
        $this->payFee = $payFee;
    }
    
            
    private $timeout;
    
    /**
    * @return 最晚支付时间
    */
    public function getTimeout()
    {
        return $this->timeout;
    }
    
    /**
     * 设置最晚支付时间
     * @param String $timeout
     * 参数示例：<pre>2018-10-01 00:00:00</pre>
     * 此参数必填     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("channels", $this->stdResult)) {
            $channelsResult=$this->stdResult->{"channels"};
            $object = json_decode(json_encode($channelsResult), true);
            $this->channels = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaOceanOpenplatformBizTradeResultPayTypeInfoResult=new AlibabaOceanOpenplatformBizTradeResultPayTypeInfo();
                $AlibabaOceanOpenplatformBizTradeResultPayTypeInfoResult->setArrayResult($arrayobject);
                $this->channels [$i] = $AlibabaOceanOpenplatformBizTradeResultPayTypeInfoResult;
            }
        }
        if (array_key_exists("orderId", $this->stdResult)) {
            $this->orderId = $this->stdResult->{"orderId"};
        }
        if (array_key_exists("payFee", $this->stdResult)) {
            $this->payFee = $this->stdResult->{"payFee"};
        }
        if (array_key_exists("timeout", $this->stdResult)) {
            $this->timeout = $this->stdResult->{"timeout"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("channels", $this->arrayResult)) {
            $channelsResult=$arrayResult['${paramType.paramName}'];
            $this->channels = new AlibabaOceanOpenplatformBizTradeResultPayTypeInfo();
            $this->channels->setStdResult($channelsResult);
        }
        if (array_key_exists("orderId", $this->arrayResult)) {
            $this->orderId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("payFee", $this->arrayResult)) {
            $this->payFee = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("timeout", $this->arrayResult)) {
            $this->timeout = $arrayResult['${paramType.paramName}'];
        }
    }
}
