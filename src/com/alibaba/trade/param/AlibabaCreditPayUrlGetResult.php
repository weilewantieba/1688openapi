<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaCreditPayUrlGetResult
{
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
     * @param String $success

     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }
    
            
    private $errorCode;
    
    /**
    * @return 错误码
    */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    
    /**
     * 设置错误码
     * @param String $errorCode

     * 此参数必填     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }
    
            
    private $errorMsg;
    
    /**
    * @return 错误描述
    */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误描述
     * @param String $errorMsg

     * 此参数必填     */
    public function setErrorMsg($errorMsg)
    {
        $this->errorMsg = $errorMsg;
    }
    
            
    private $payUrl;
    
    /**
    * @return 收银台支付链接
    */
    public function getPayUrl()
    {
        return $this->payUrl;
    }
    
    /**
     * 设置收银台支付链接
     * @param String $payUrl

     * 此参数必填     */
    public function setPayUrl($payUrl)
    {
        $this->payUrl = $payUrl;
    }
    
            
    private $cantPayOrderList;
    
    /**
    * @return 由于额度及风控原因不能批量支付的订单列表
    */
    public function getCantPayOrderList()
    {
        return $this->cantPayOrderList;
    }
    
    /**
     * 设置由于额度及风控原因不能批量支付的订单列表
     * @param array include @see Long[] $cantPayOrderList

     * 此参数必填     */
    public function setCantPayOrderList($cantPayOrderList)
    {
        $this->cantPayOrderList = $cantPayOrderList;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
        if (array_key_exists("errorCode", $this->stdResult)) {
            $this->errorCode = $this->stdResult->{"errorCode"};
        }
        if (array_key_exists("errorMsg", $this->stdResult)) {
            $this->errorMsg = $this->stdResult->{"errorMsg"};
        }
        if (array_key_exists("payUrl", $this->stdResult)) {
            $this->payUrl = $this->stdResult->{"payUrl"};
        }
        if (array_key_exists("cantPayOrderList", $this->stdResult)) {
            $this->cantPayOrderList = $this->stdResult->{"cantPayOrderList"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("errorCode", $this->arrayResult)) {
            $this->errorCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("errorMsg", $this->arrayResult)) {
            $this->errorMsg = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("payUrl", $this->arrayResult)) {
            $this->payUrl = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("cantPayOrderList", $this->arrayResult)) {
            $this->cantPayOrderList = $arrayResult['${paramType.paramName}'];
        }
    }
}
