<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaTradeGetSellerViewParam\AlibabaOpenplatformTradeModelTradeInfo;

class AlibabaTradeGetSellerViewResult
{
    private $result;
    
    /**
    * @return 返回结果
    */
    public function getResult()
    {
        return $this->result;
    }
    
    /**
     * 设置返回结果
     * @param AlibabaOpenplatformTradeModelTradeInfo $result

     * 此参数必填     */
    public function setResult(AlibabaOpenplatformTradeModelTradeInfo $result)
    {
        $this->result = $result;
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
    
            
    private $errorMessage;
    
    /**
    * @return 错误信息
    */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    
    /**
     * 设置错误信息
     * @param String $errorMessage

     * 此参数必填     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
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
     * @param String $success

     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("result", $this->stdResult)) {
            $resultResult=$this->stdResult->{"result"};
            $this->result = new AlibabaOpenplatformTradeModelTradeInfo();
            $this->result->setStdResult($resultResult);
        }
        if (array_key_exists("errorCode", $this->stdResult)) {
            $this->errorCode = $this->stdResult->{"errorCode"};
        }
        if (array_key_exists("errorMessage", $this->stdResult)) {
            $this->errorMessage = $this->stdResult->{"errorMessage"};
        }
        if (array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("result", $this->arrayResult)) {
            $resultResult=$arrayResult['${paramType.paramName}'];
            $this->result = new AlibabaOpenplatformTradeModelTradeInfo();
            $this->result->setStdResult($resultResult);
        }
        if (array_key_exists("errorCode", $this->arrayResult)) {
            $this->errorCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("errorMessage", $this->arrayResult)) {
            $this->errorMessage = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['${paramType.paramName}'];
        }
    }
}
