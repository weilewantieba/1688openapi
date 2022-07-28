<?php

namespace Keyi1688\system\oauth2\param;

class SubaccountAuthAddResult
{
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
    
            
    private $returnValue;
    
    /**
    * @return 返回结果
    */
    public function getReturnValue()
    {
        return $this->returnValue;
    }
    
    /**
     * 设置返回结果
     * @param Map $returnValue

     * 此参数必填     */
    public function setReturnValue(array $returnValue)
    {
        $this->returnValue = $returnValue;
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

     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("errorCode", $this->stdResult)) {
            $this->errorCode = $this->stdResult->{"errorCode"};
        }
        if (array_key_exists("errorMessage", $this->stdResult)) {
            $this->errorMessage = $this->stdResult->{"errorMessage"};
        }
        if (array_key_exists("returnValue", $this->stdResult)) {
            $this->returnValue = $this->stdResult->{"returnValue"};
        }
        if (array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("errorCode", $this->arrayResult)) {
            $this->errorCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("errorMessage", $this->arrayResult)) {
            $this->errorMessage = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("returnValue", $this->arrayResult)) {
            $this->returnValue = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['${paramType.paramName}'];
        }
    }
}
