<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaOceanOpenplatformBizTradeParamTradeProtectParam extends SDKDomain
{
    private $type;
    
    /**
    * @return 保单类型：查询理赔时type传lp，查询运费险时type传bx
    */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * 设置保单类型：查询理赔时type传lp，查询运费险时type传bx
     * @param String $type
     * 参数示例：<pre>lp</pre>
     * 此参数必填     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
            
    private $protectId;
    
    /**
    * @return 保单号
    */
    public function getProtectId()
    {
        return $this->protectId;
    }
    
    /**
     * 设置保单号
     * @param String $protectId
     * 参数示例：<pre>91275389</pre>
     * 此参数必填     */
    public function setProtectId($protectId)
    {
        $this->protectId = $protectId;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("type", $this->stdResult)) {
            $this->type = $this->stdResult->{"type"};
        }
        if (array_key_exists("protectId", $this->stdResult)) {
            $this->protectId = $this->stdResult->{"protectId"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("type", $this->arrayResult)) {
            $this->type = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("protectId", $this->arrayResult)) {
            $this->protectId = $arrayResult['${paramType.paramName}'];
        }
    }
}
