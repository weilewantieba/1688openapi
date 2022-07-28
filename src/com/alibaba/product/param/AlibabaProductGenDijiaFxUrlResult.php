<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductGenDijiaFxUrlResult
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
     * @param Boolean $success

     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }
    
            
    private $url;
    
    /**
    * @return 生成的URL
    */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * 设置生成的URL
     * @param String $url

     * 此参数必填     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    
            
    private $error;
    
    /**
    * @return 错误代码
    */
    public function getError()
    {
        return $this->error;
    }
    
    /**
     * 设置错误代码
     * @param String $error

     * 此参数必填     */
    public function setError($error)
    {
        $this->error = $error;
    }
    
            
    private $msg;
    
    /**
    * @return 描述信息
    */
    public function getMsg()
    {
        return $this->msg;
    }
    
    /**
     * 设置描述信息
     * @param String $msg

     * 此参数必填     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
        if (array_key_exists("url", $this->stdResult)) {
            $this->url = $this->stdResult->{"url"};
        }
        if (array_key_exists("error", $this->stdResult)) {
            $this->error = $this->stdResult->{"error"};
        }
        if (array_key_exists("msg", $this->stdResult)) {
            $this->msg = $this->stdResult->{"msg"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("url", $this->arrayResult)) {
            $this->url = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("error", $this->arrayResult)) {
            $this->error = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("msg", $this->arrayResult)) {
            $this->msg = $arrayResult['${paramType.paramName}'];
        }
    }
}
