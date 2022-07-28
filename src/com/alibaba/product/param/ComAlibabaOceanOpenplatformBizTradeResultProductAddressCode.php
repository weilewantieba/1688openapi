<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class ComAlibabaOceanOpenplatformBizTradeResultProductAddressCode extends SDKDomain
{
    private $code;
    
    /**
    * @return 地址编码
    */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * 设置地址编码
     * @param String $code
     * 参数示例：<pre>620000</pre>
     * 此参数必填     */
    public function setCode($code)
    {
        $this->code = $code;
    }
    
            
    private $name;
    
    /**
    * @return 地址名称
    */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * 设置地址名称
     * @param String $name
     * 参数示例：<pre>甘肃省</pre>
     * 此参数必填     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("code", $this->stdResult)) {
            $this->code = $this->stdResult->{"code"};
        }
        if (array_key_exists("name", $this->stdResult)) {
            $this->name = $this->stdResult->{"name"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("code", $this->arrayResult)) {
            $this->code = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("name", $this->arrayResult)) {
            $this->name = $arrayResult['${paramType.paramName}'];
        }
    }
}
