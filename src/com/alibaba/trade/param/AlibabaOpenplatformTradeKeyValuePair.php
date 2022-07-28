<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaOpenplatformTradeKeyValuePair extends SDKDomain
{
    private $key;
    
    /**
    * @return 键
    */
    public function getKey()
    {
        return $this->key;
    }
    
    /**
     * 设置键
     * @param String $key
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setKey($key)
    {
        $this->key = $key;
    }
    
            
    private $value;
    
    /**
    * @return 值
    */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * 设置值
     * @param String $value
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    
            
    private $description;
    
    /**
    * @return 描述
    */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * 设置描述
     * @param String $description
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("key", $this->stdResult)) {
            $this->key = $this->stdResult->{"key"};
        }
        if (array_key_exists("value", $this->stdResult)) {
            $this->value = $this->stdResult->{"value"};
        }
        if (array_key_exists("description", $this->stdResult)) {
            $this->description = $this->stdResult->{"description"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("key", $this->arrayResult)) {
            $this->key = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("value", $this->arrayResult)) {
            $this->value = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("description", $this->arrayResult)) {
            $this->description = $arrayResult['${paramType.paramName}'];
        }
    }
}
