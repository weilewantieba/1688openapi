<?php

namespace Keyi1688\com\alibaba\logistics\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaLogisticsOpSendGoodEntry extends SDKDomain
{
    private $sourceEntryId;
    
    /**
    * @return 发货对象明细id，对应子订单Id
    */
    public function getSourceEntryId()
    {
        return $this->sourceEntryId;
    }
    
    /**
     * 设置发货对象明细id，对应子订单Id
     * @param String $sourceEntryId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSourceEntryId($sourceEntryId)
    {
        $this->sourceEntryId = $sourceEntryId;
    }
    
            
    private $amount;
    
    /**
    * @return 发货对象实发数量
    */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * 设置发货对象实发数量
     * @param Long $amount
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    
            
    private $weight;
    
    /**
    * @return 发货对象实发重量，重量单位默认为千克
    */
    public function getWeight()
    {
        return $this->weight;
    }
    
    /**
     * 设置发货对象实发重量，重量单位默认为千克
     * @param Double $weight
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("sourceEntryId", $this->stdResult)) {
            $this->sourceEntryId = $this->stdResult->{"sourceEntryId"};
        }
        if (array_key_exists("amount", $this->stdResult)) {
            $this->amount = $this->stdResult->{"amount"};
        }
        if (array_key_exists("weight", $this->stdResult)) {
            $this->weight = $this->stdResult->{"weight"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("sourceEntryId", $this->arrayResult)) {
            $this->sourceEntryId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("amount", $this->arrayResult)) {
            $this->amount = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("weight", $this->arrayResult)) {
            $this->weight = $arrayResult['${paramType.paramName}'];
        }
    }
}
