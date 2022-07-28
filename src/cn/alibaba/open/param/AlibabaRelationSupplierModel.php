<?php

namespace Keyi1688\cn\alibaba\open\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaRelationSupplierModel extends SDKDomain
{
    private $consignStatus;
    
    /**
    * @return 合作状态
    */
    public function getConsignStatus()
    {
        return $this->consignStatus;
    }
    
    /**
     * 设置合作状态
     * @param String $consignStatus
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setConsignStatus($consignStatus)
    {
        $this->consignStatus = $consignStatus;
    }
    
            
    private $consignCreateTime;
    
    /**
    * @return 代销合作创建时间
    */
    public function getConsignCreateTime()
    {
        return $this->consignCreateTime;
    }
    
    /**
     * 设置代销合作创建时间
     * @param Long $consignCreateTime
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setConsignCreateTime($consignCreateTime)
    {
        $this->consignCreateTime = $consignCreateTime;
    }
    
            
    private $supplierLoginId;
    
    /**
    * @return 供应商登录Id
    */
    public function getSupplierLoginId()
    {
        return $this->supplierLoginId;
    }
    
    /**
     * 设置供应商登录Id
     * @param String $supplierLoginId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSupplierLoginId($supplierLoginId)
    {
        $this->supplierLoginId = $supplierLoginId;
    }
    
            
    private $supplierCompany;
    
    /**
    * @return 供应商公司名称
    */
    public function getSupplierCompany()
    {
        return $this->supplierCompany;
    }
    
    /**
     * 设置供应商公司名称
     * @param String $supplierCompany
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSupplierCompany($supplierCompany)
    {
        $this->supplierCompany = $supplierCompany;
    }
    
            
    private $lastOrder;
    
    /**
    * @return 近180交易订单
    */
    public function getLastOrder()
    {
        return $this->lastOrder;
    }
    
    /**
     * 设置近180交易订单
     * @param Long $lastOrder
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setLastOrder($lastOrder)
    {
        $this->lastOrder = $lastOrder;
    }
    
            
    private $lastAmount;
    
    /**
    * @return 近180交易金额（分）
    */
    public function getLastAmount()
    {
        return $this->lastAmount;
    }
    
    /**
     * 设置近180交易金额（分）
     * @param Long $lastAmount
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setLastAmount($lastAmount)
    {
        $this->lastAmount = $lastAmount;
    }
    
            
    private $distributionNum;
    
    /**
    * @return 已铺货数量
    */
    public function getDistributionNum()
    {
        return $this->distributionNum;
    }
    
    /**
     * 设置已铺货数量
     * @param Integer $distributionNum
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDistributionNum($distributionNum)
    {
        $this->distributionNum = $distributionNum;
    }
    
            
    private $memberId;
    
    /**
    * @return 会员memberId
    */
    public function getMemberId()
    {
        return $this->memberId;
    }
    
    /**
     * 设置会员memberId
     * @param String $memberId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("consignStatus", $this->stdResult)) {
            $this->consignStatus = $this->stdResult->{"consignStatus"};
        }
        if (array_key_exists("consignCreateTime", $this->stdResult)) {
            $this->consignCreateTime = $this->stdResult->{"consignCreateTime"};
        }
        if (array_key_exists("supplierLoginId", $this->stdResult)) {
            $this->supplierLoginId = $this->stdResult->{"supplierLoginId"};
        }
        if (array_key_exists("supplierCompany", $this->stdResult)) {
            $this->supplierCompany = $this->stdResult->{"supplierCompany"};
        }
        if (array_key_exists("lastOrder", $this->stdResult)) {
            $this->lastOrder = $this->stdResult->{"lastOrder"};
        }
        if (array_key_exists("lastAmount", $this->stdResult)) {
            $this->lastAmount = $this->stdResult->{"lastAmount"};
        }
        if (array_key_exists("distributionNum", $this->stdResult)) {
            $this->distributionNum = $this->stdResult->{"distributionNum"};
        }
        if (array_key_exists("memberId", $this->stdResult)) {
            $this->memberId = $this->stdResult->{"memberId"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("consignStatus", $this->arrayResult)) {
            $this->consignStatus = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("consignCreateTime", $this->arrayResult)) {
            $this->consignCreateTime = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("supplierLoginId", $this->arrayResult)) {
            $this->supplierLoginId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("supplierCompany", $this->arrayResult)) {
            $this->supplierCompany = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("lastOrder", $this->arrayResult)) {
            $this->lastOrder = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("lastAmount", $this->arrayResult)) {
            $this->lastAmount = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("distributionNum", $this->arrayResult)) {
            $this->distributionNum = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("memberId", $this->arrayResult)) {
            $this->memberId = $arrayResult['${paramType.paramName}'];
        }
    }
}
