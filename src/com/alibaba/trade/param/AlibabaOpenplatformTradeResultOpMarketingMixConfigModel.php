<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaOpenplatformTradeResultOpMarketingMixConfigModel extends SDKDomain
{
    private $generalHunpi;
    
    /**
    * @return 是否普通混批
    */
    public function getGeneralHunpi()
    {
        return $this->generalHunpi;
    }
    
    /**
     * 设置是否普通混批
     * @param Boolean $generalHunpi
     * 参数示例：<pre>true</pre>
     * 此参数必填     */
    public function setGeneralHunpi($generalHunpi)
    {
        $this->generalHunpi = $generalHunpi;
    }
    
            
    private $gmtCreate;
    
    /**
    * @return 创建时间
    */
    public function getGmtCreate()
    {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间
     * @param Date $gmtCreate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setGmtCreate($gmtCreate)
    {
        $this->gmtCreate = $gmtCreate;
    }
    
            
    private $gmtModified;
    
    /**
    * @return 修改时间
    */
    public function getGmtModified()
    {
        return $this->gmtModified;
    }
    
    /**
     * 设置修改时间
     * @param Date $gmtModified
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setGmtModified($gmtModified)
    {
        $this->gmtModified = $gmtModified;
    }
    
            
    private $memberId;
    
    /**
    * @return 卖家memberID
    */
    public function getMemberId()
    {
        return $this->memberId;
    }
    
    /**
     * 设置卖家memberID
     * @param String $memberId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }
    
            
    private $mixAmount;
    
    /**
    * @return 混批金额
    */
    public function getMixAmount()
    {
        return $this->mixAmount;
    }
    
    /**
     * 设置混批金额
     * @param Integer $mixAmount
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMixAmount($mixAmount)
    {
        $this->mixAmount = $mixAmount;
    }
    
            
    private $mixNumber;
    
    /**
    * @return 混批数量
    */
    public function getMixNumber()
    {
        return $this->mixNumber;
    }
    
    /**
     * 设置混批数量
     * @param Integer $mixNumber
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMixNumber($mixNumber)
    {
        $this->mixNumber = $mixNumber;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("generalHunpi", $this->stdResult)) {
            $this->generalHunpi = $this->stdResult->{"generalHunpi"};
        }
        if (array_key_exists("gmtCreate", $this->stdResult)) {
            $this->gmtCreate = $this->stdResult->{"gmtCreate"};
        }
        if (array_key_exists("gmtModified", $this->stdResult)) {
            $this->gmtModified = $this->stdResult->{"gmtModified"};
        }
        if (array_key_exists("memberId", $this->stdResult)) {
            $this->memberId = $this->stdResult->{"memberId"};
        }
        if (array_key_exists("mixAmount", $this->stdResult)) {
            $this->mixAmount = $this->stdResult->{"mixAmount"};
        }
        if (array_key_exists("mixNumber", $this->stdResult)) {
            $this->mixNumber = $this->stdResult->{"mixNumber"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("generalHunpi", $this->arrayResult)) {
            $this->generalHunpi = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("gmtCreate", $this->arrayResult)) {
            $this->gmtCreate = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("gmtModified", $this->arrayResult)) {
            $this->gmtModified = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("memberId", $this->arrayResult)) {
            $this->memberId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("mixAmount", $this->arrayResult)) {
            $this->mixAmount = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("mixNumber", $this->arrayResult)) {
            $this->mixNumber = $arrayResult['${paramType.paramName}'];
        }
    }
}
