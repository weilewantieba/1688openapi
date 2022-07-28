<?php

namespace Keyi1688\com\alibaba\product\push\param;

use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;

class AlibabaPanamaCommonResult extends SDKDomain
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
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }
    
            
    private $errorMsg;
    
    /**
    * @return 错误信息
    */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }
    
    /**
     * 设置错误信息
     * @param String $errorMsg
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setErrorMsg($errorMsg)
    {
        $this->errorMsg = $errorMsg;
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
    
            
    private $info;
    
    /**
    * @return 接口调用结果描述信息
    */
    public function getInfo()
    {
        return $this->info;
    }
    
    /**
     * 设置接口调用结果描述信息
     * @param String $info
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setInfo($info)
    {
        $this->info = $info;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("errorCode", $this->stdResult)) {
            $this->errorCode = $this->stdResult->{"errorCode"};
        }
        if (array_key_exists("errorMsg", $this->stdResult)) {
            $this->errorMsg = $this->stdResult->{"errorMsg"};
        }
        if (array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
        if (array_key_exists("info", $this->stdResult)) {
            $this->info = $this->stdResult->{"info"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("errorCode", $this->arrayResult)) {
            $this->errorCode = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("errorMsg", $this->arrayResult)) {
            $this->errorMsg = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("info", $this->arrayResult)) {
            $this->info = $arrayResult['${paramType.paramName}'];
        }
    }
}
