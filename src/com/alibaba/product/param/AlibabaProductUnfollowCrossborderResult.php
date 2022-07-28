<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductUnfollowCrossborderResult
{
    private $code;
    
    /**
    * @return code,0表示成功
    */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * 设置code,0表示成功
     * @param Integer $code

     * 此参数必填     */
    public function setCode($code)
    {
        $this->code = $code;
    }
    
            
    private $message;
    
    /**
    * @return 结果的描述
    */
    public function getMessage()
    {
        return $this->message;
    }
    
    /**
     * 设置结果的描述
     * @param String $message

     * 此参数必填     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("code", $this->stdResult)) {
            $this->code = $this->stdResult->{"code"};
        }
        if (array_key_exists("message", $this->stdResult)) {
            $this->message = $this->stdResult->{"message"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("code", $this->arrayResult)) {
            $this->code = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("message", $this->arrayResult)) {
            $this->message = $arrayResult['${paramType.paramName}'];
        }
    }
}
