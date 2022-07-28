<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeResultBizSimpleOrder extends SDKDomain
{
    private $postFee;
    
    /**
    * @return 运费
    */
    public function getPostFee()
    {
        return $this->postFee;
    }
    
    /**
     * 设置运费
     * @param Long $postFee
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPostFee($postFee)
    {
        $this->postFee = $postFee;
    }
    
            
    private $orderAmmount;
    
    /**
    * @return 订单实付款金额，单位为分
    */
    public function getOrderAmmount()
    {
        return $this->orderAmmount;
    }
    
    /**
     * 设置订单实付款金额，单位为分
     * @param Long $orderAmmount
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setOrderAmmount($orderAmmount)
    {
        $this->orderAmmount = $orderAmmount;
    }
    
            
    private $payChannel;
    
    /**
    * @return 支付渠道
    */
    public function getPayChannel()
    {
        return $this->payChannel;
    }
    
    /**
     * 设置支付渠道
     * @param String $payChannel
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPayChannel($payChannel)
    {
        $this->payChannel = $payChannel;
    }
    
            
    private $discount;
    
    /**
    * @return 折扣
    */
    public function getDiscount()
    {
        return $this->discount;
    }
    
    /**
     * 设置折扣
     * @param Long $discount
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    
            
    private $message;
    
    /**
    * @return 描述信息
    */
    public function getMessage()
    {
        return $this->message;
    }
    
    /**
     * 设置描述信息
     * @param String $message
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
    
            
    private $promotionId;
    
    /**
    * @return 优惠id
    */
    public function getPromotionId()
    {
        return $this->promotionId;
    }
    
    /**
     * 设置优惠id
     * @param String $promotionId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPromotionId($promotionId)
    {
        $this->promotionId = $promotionId;
    }
    
            
    private $sumPaymentNoCarriageFromClient;
    
    /**
    * @return 外部提交过来的中金额，不包括运费
    */
    public function getSumPaymentNoCarriageFromClient()
    {
        return $this->sumPaymentNoCarriageFromClient;
    }
    
    /**
     * 设置外部提交过来的中金额，不包括运费
     * @param Long $sumPaymentNoCarriageFromClient
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSumPaymentNoCarriageFromClient($sumPaymentNoCarriageFromClient)
    {
        $this->sumPaymentNoCarriageFromClient = $sumPaymentNoCarriageFromClient;
    }
    
            
    private $resultCode;
    
    /**
    * @return 返回码
    */
    public function getResultCode()
    {
        return $this->resultCode;
    }
    
    /**
     * 设置返回码
     * @param String $resultCode
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setResultCode($resultCode)
    {
        $this->resultCode = $resultCode;
    }
    
            
    private $subUserId;
    
    /**
    * @return 创建订单的子账号UserId
    */
    public function getSubUserId()
    {
        return $this->subUserId;
    }
    
    /**
     * 设置创建订单的子账号UserId
     * @param Long $subUserId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSubUserId($subUserId)
    {
        $this->subUserId = $subUserId;
    }
    
            
    private $mergePay;
    
    /**
    * @return 订单是否能合并支付
    */
    public function getMergePay()
    {
        return $this->mergePay;
    }
    
    /**
     * 设置订单是否能合并支付
     * @param Boolean $mergePay
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMergePay($mergePay)
    {
        $this->mergePay = $mergePay;
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
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
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
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }
    
            
    private $chooseFreeFreight;
    
    /**
    * @return 是否选择了免运费的优惠
    */
    public function getChooseFreeFreight()
    {
        return $this->chooseFreeFreight;
    }
    
    /**
     * 设置是否选择了免运费的优惠
     * @param Boolean $chooseFreeFreight
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setChooseFreeFreight($chooseFreeFreight)
    {
        $this->chooseFreeFreight = $chooseFreeFreight;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("postFee", $this->stdResult)) {
            $this->postFee = $this->stdResult->{"postFee"};
        }
        if (array_key_exists("orderAmmount", $this->stdResult)) {
            $this->orderAmmount = $this->stdResult->{"orderAmmount"};
        }
        if (array_key_exists("payChannel", $this->stdResult)) {
            $this->payChannel = $this->stdResult->{"payChannel"};
        }
        if (array_key_exists("discount", $this->stdResult)) {
            $this->discount = $this->stdResult->{"discount"};
        }
        if (array_key_exists("message", $this->stdResult)) {
            $this->message = $this->stdResult->{"message"};
        }
        if (array_key_exists("promotionId", $this->stdResult)) {
            $this->promotionId = $this->stdResult->{"promotionId"};
        }
        if (array_key_exists("sumPaymentNoCarriageFromClient", $this->stdResult)) {
            $this->sumPaymentNoCarriageFromClient = $this->stdResult->{"sumPaymentNoCarriageFromClient"};
        }
        if (array_key_exists("resultCode", $this->stdResult)) {
            $this->resultCode = $this->stdResult->{"resultCode"};
        }
        if (array_key_exists("subUserId", $this->stdResult)) {
            $this->subUserId = $this->stdResult->{"subUserId"};
        }
        if (array_key_exists("mergePay", $this->stdResult)) {
            $this->mergePay = $this->stdResult->{"mergePay"};
        }
        if (array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
        if (array_key_exists("orderId", $this->stdResult)) {
            $this->orderId = $this->stdResult->{"orderId"};
        }
        if (array_key_exists("chooseFreeFreight", $this->stdResult)) {
            $this->chooseFreeFreight = $this->stdResult->{"chooseFreeFreight"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("postFee", $this->arrayResult)) {
            $this->postFee = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("orderAmmount", $this->arrayResult)) {
            $this->orderAmmount = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("payChannel", $this->arrayResult)) {
            $this->payChannel = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("discount", $this->arrayResult)) {
            $this->discount = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("message", $this->arrayResult)) {
            $this->message = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("promotionId", $this->arrayResult)) {
            $this->promotionId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("sumPaymentNoCarriageFromClient", $this->arrayResult)) {
            $this->sumPaymentNoCarriageFromClient = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("resultCode", $this->arrayResult)) {
            $this->resultCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("subUserId", $this->arrayResult)) {
            $this->subUserId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("mergePay", $this->arrayResult)) {
            $this->mergePay = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("orderId", $this->arrayResult)) {
            $this->orderId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("chooseFreeFreight", $this->arrayResult)) {
            $this->chooseFreeFreight = $arrayResult['${paramType.paramName}'];
        }
    }
}
