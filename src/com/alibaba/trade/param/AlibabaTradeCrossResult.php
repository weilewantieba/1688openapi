<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaTradeCreateCrossOrderParam\AlibabaTradeCrossPeriod;
use Keyi1688\AlibabaTradeCreateCrossOrderParam\AlibabaTradeFastOffer;
use Keyi1688\AlibabaTradeCreateCrossOrderParam\AlibabaTradeResultBizSimpleOrder;

class AlibabaTradeCrossResult extends SDKDomain
{
    private $totalSuccessAmount;
    
    /**
    * @return 订单总金额（单位分），一次创建多个订单时，该字段为空
    */
    public function getTotalSuccessAmount()
    {
        return $this->totalSuccessAmount;
    }
    
    /**
     * 设置订单总金额（单位分），一次创建多个订单时，该字段为空
     * @param Long $totalSuccessAmount
     * 参数示例：<pre>100</pre>
     * 此参数必填     */
    public function setTotalSuccessAmount($totalSuccessAmount)
    {
        $this->totalSuccessAmount = $totalSuccessAmount;
    }
    
            
    private $orderId;
    
    /**
    * @return 订单ID，一次创建多个订单时，该字段为空
    */
    public function getOrderId()
    {
        return $this->orderId;
    }
    
    /**
     * 设置订单ID，一次创建多个订单时，该字段为空
     * @param String $orderId
     * 参数示例：<pre>111111111</pre>
     * 此参数必填     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }
    
            
    private $success;
    
    /**
    * @return 是否成功
    */
    public function getSuccess()
    {
        return $this->success;
    }
    
    /**
     * 设置是否成功
     * @param Boolean $success
     * 参数示例：<pre>true</pre>
     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }
    
            
    private $code;
    
    /**
    * @return 错误码
    */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * 设置错误码
     * @param String $code
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCode($code)
    {
        $this->code = $code;
    }
    
            
    private $message;
    
    /**
    * @return 错误信息
    */
    public function getMessage()
    {
        return $this->message;
    }
    
    /**
     * 设置错误信息
     * @param String $message
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
    
            
    private $accountPeriod;
    
    /**
    * @return 账期信息，非账期支付订单返回空
    */
    public function getAccountPeriod()
    {
        return $this->accountPeriod;
    }
    
    /**
     * 设置账期信息，非账期支付订单返回空
     * @param AlibabaTradeCrossPeriod $accountPeriod
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAccountPeriod(AlibabaTradeCrossPeriod $accountPeriod)
    {
        $this->accountPeriod = $accountPeriod;
    }
    
            
    private $failedOfferList;
    
    /**
    * @return 失败商品信息
    */
    public function getFailedOfferList()
    {
        return $this->failedOfferList;
    }
    
    /**
     * 设置失败商品信息
     * @param array include @see AlibabaTradeFastOffer[] $failedOfferList
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setFailedOfferList(AlibabaTradeFastOffer $failedOfferList)
    {
        $this->failedOfferList = $failedOfferList;
    }
    
            
    private $postFee;
    
    /**
    * @return 运费，单位：分，一次创建多个订单时，该字段为空
    */
    public function getPostFee()
    {
        return $this->postFee;
    }
    
    /**
     * 设置运费，单位：分，一次创建多个订单时，该字段为空
     * @param Long $postFee
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPostFee($postFee)
    {
        $this->postFee = $postFee;
    }
    
            
    private $orderList;
    
    /**
    * @return 一次创建多个订单
    */
    public function getOrderList()
    {
        return $this->orderList;
    }
    
    /**
     * 设置一次创建多个订单
     * @param array include @see AlibabaTradeResultBizSimpleOrder[] $orderList
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setOrderList(AlibabaTradeResultBizSimpleOrder $orderList)
    {
        $this->orderList = $orderList;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("totalSuccessAmount", $this->stdResult)) {
            $this->totalSuccessAmount = $this->stdResult->{"totalSuccessAmount"};
        }
        if (array_key_exists("orderId", $this->stdResult)) {
            $this->orderId = $this->stdResult->{"orderId"};
        }
        if (array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
        if (array_key_exists("code", $this->stdResult)) {
            $this->code = $this->stdResult->{"code"};
        }
        if (array_key_exists("message", $this->stdResult)) {
            $this->message = $this->stdResult->{"message"};
        }
        if (array_key_exists("accountPeriod", $this->stdResult)) {
            $accountPeriodResult=$this->stdResult->{"accountPeriod"};
            $this->accountPeriod = new AlibabaTradeCrossPeriod();
            $this->accountPeriod->setStdResult($accountPeriodResult);
        }
        if (array_key_exists("failedOfferList", $this->stdResult)) {
            $failedOfferListResult=$this->stdResult->{"failedOfferList"};
            $object = json_decode(json_encode($failedOfferListResult), true);
            $this->failedOfferList = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaTradeFastOfferResult=new AlibabaTradeFastOffer();
                $AlibabaTradeFastOfferResult->setArrayResult($arrayobject);
                $this->failedOfferList [$i] = $AlibabaTradeFastOfferResult;
            }
        }
        if (array_key_exists("postFee", $this->stdResult)) {
            $this->postFee = $this->stdResult->{"postFee"};
        }
        if (array_key_exists("orderList", $this->stdResult)) {
            $orderListResult=$this->stdResult->{"orderList"};
            $object = json_decode(json_encode($orderListResult), true);
            $this->orderList = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaTradeResultBizSimpleOrderResult=new AlibabaTradeResultBizSimpleOrder();
                $AlibabaTradeResultBizSimpleOrderResult->setArrayResult($arrayobject);
                $this->orderList [$i] = $AlibabaTradeResultBizSimpleOrderResult;
            }
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("totalSuccessAmount", $this->arrayResult)) {
            $this->totalSuccessAmount = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("orderId", $this->arrayResult)) {
            $this->orderId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("code", $this->arrayResult)) {
            $this->code = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("message", $this->arrayResult)) {
            $this->message = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("accountPeriod", $this->arrayResult)) {
            $accountPeriodResult=$arrayResult['${paramType.paramName}'];
            $this->accountPeriod = new AlibabaTradeCrossPeriod();
            $this->accountPeriod->setStdResult($accountPeriodResult);
        }
        if (array_key_exists("failedOfferList", $this->arrayResult)) {
            $failedOfferListResult=$arrayResult['${paramType.paramName}'];
            $this->failedOfferList = new AlibabaTradeFastOffer();
            $this->failedOfferList->setStdResult($failedOfferListResult);
        }
        if (array_key_exists("postFee", $this->arrayResult)) {
            $this->postFee = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("orderList", $this->arrayResult)) {
            $orderListResult=$arrayResult['${paramType.paramName}'];
            $this->orderList = new AlibabaTradeResultBizSimpleOrder();
            $this->orderList->setStdResult($orderListResult);
        }
    }
}
