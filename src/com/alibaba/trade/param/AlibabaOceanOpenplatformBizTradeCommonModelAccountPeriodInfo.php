<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaOceanOpenplatformBizTradeCommonModelAccountPeriodInfo extends SDKDomain
{
    private $buyerId;
    
    /**
    * @return 买家userId
    */
    public function getBuyerId()
    {
        return $this->buyerId;
    }
    
    /**
     * 设置买家userId
     * @param Long $buyerId
     * 参数示例：<pre>112312331</pre>
     * 此参数必填     */
    public function setBuyerId($buyerId)
    {
        $this->buyerId = $buyerId;
    }
    
            
    private $buyerLoginId;
    
    /**
    * @return 买家loginId
    */
    public function getBuyerLoginId()
    {
        return $this->buyerLoginId;
    }
    
    /**
     * 设置买家loginId
     * @param String $buyerLoginId
     * 参数示例：<pre>alitestforisv01</pre>
     * 此参数必填     */
    public function setBuyerLoginId($buyerLoginId)
    {
        $this->buyerLoginId = $buyerLoginId;
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
     * 参数示例：<pre>20170913231727000+0800</pre>
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
     * 参数示例：<pre>20170913231727000+0800</pre>
     * 此参数必填     */
    public function setGmtModified($gmtModified)
    {
        $this->gmtModified = $gmtModified;
    }
    
            
    private $gmtQuota;
    
    /**
    * @return 授信日期
    */
    public function getGmtQuota()
    {
        return $this->gmtQuota;
    }
    
    /**
     * 设置授信日期
     * @param Date $gmtQuota
     * 参数示例：<pre>20170913231727000+0800</pre>
     * 此参数必填     */
    public function setGmtQuota($gmtQuota)
    {
        $this->gmtQuota = $gmtQuota;
    }
    
            
    private $quota;
    
    /**
    * @return 授信额度值,单位为分
    */
    public function getQuota()
    {
        return $this->quota;
    }
    
    /**
     * 设置授信额度值,单位为分
     * @param Long $quota
     * 参数示例：<pre>10000</pre>
     * 此参数必填     */
    public function setQuota($quota)
    {
        $this->quota = $quota;
    }
    
            
    private $surplusQuota;
    
    /**
    * @return 可用授信额度值,单位为分
    */
    public function getSurplusQuota()
    {
        return $this->surplusQuota;
    }
    
    /**
     * 设置可用授信额度值,单位为分
     * @param Long $surplusQuota
     * 参数示例：<pre>10000</pre>
     * 此参数必填     */
    public function setSurplusQuota($surplusQuota)
    {
        $this->surplusQuota = $surplusQuota;
    }
    
            
    private $sellerId;
    
    /**
    * @return 卖家userId
    */
    public function getSellerId()
    {
        return $this->sellerId;
    }
    
    /**
     * 设置卖家userId
     * @param Long $sellerId
     * 参数示例：<pre>121312441</pre>
     * 此参数必填     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;
    }
    
            
    private $sellerLoginId;
    
    /**
    * @return 卖家loginId
    */
    public function getSellerLoginId()
    {
        return $this->sellerLoginId;
    }
    
    /**
     * 设置卖家loginId
     * @param String $sellerLoginId
     * 参数示例：<pre>alitestforisv02</pre>
     * 此参数必填     */
    public function setSellerLoginId($sellerLoginId)
    {
        $this->sellerLoginId = $sellerLoginId;
    }
    
            
    private $status;
    
    /**
    * @return 状态
    */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * 设置状态
     * @param Integer $status
     * 参数示例：<pre>1</pre>
     * 此参数必填     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    
            
    private $statusStr;
    
    /**
    * @return 状态描述
    */
    public function getStatusStr()
    {
        return $this->statusStr;
    }
    
    /**
     * 设置状态描述
     * @param String $statusStr
     * 参数示例：<pre>有效</pre>
     * 此参数必填     */
    public function setStatusStr($statusStr)
    {
        $this->statusStr = $statusStr;
    }
    
            
    private $tapDate;
    
    /**
    * @return 账期日期
    */
    public function getTapDate()
    {
        return $this->tapDate;
    }
    
    /**
     * 设置账期日期
     * @param Integer $tapDate
     * 参数示例：<pre>如每月28日记做：28</pre>
     * 此参数必填     */
    public function setTapDate($tapDate)
    {
        $this->tapDate = $tapDate;
    }
    
            
    private $tapDateStr;
    
    /**
    * @return 账期日期描述
    */
    public function getTapDateStr()
    {
        return $this->tapDateStr;
    }
    
    /**
     * 设置账期日期描述
     * @param String $tapDateStr
     * 参数示例：<pre>两个月一结，20号</pre>
     * 此参数必填     */
    public function setTapDateStr($tapDateStr)
    {
        $this->tapDateStr = $tapDateStr;
    }
    
            
    private $tapOverdue;
    
    /**
    * @return 逾期次数
    */
    public function getTapOverdue()
    {
        return $this->tapOverdue;
    }
    
    /**
     * 设置逾期次数
     * @param Integer $tapOverdue
     * 参数示例：<pre>0</pre>
     * 此参数必填     */
    public function setTapOverdue($tapOverdue)
    {
        $this->tapOverdue = $tapOverdue;
    }
    
            
    private $tapType;
    
    /**
    * @return 账期类型
    */
    public function getTapType()
    {
        return $this->tapType;
    }
    
    /**
     * 设置账期类型
     * @param Integer $tapType
     * 参数示例：<pre>1</pre>
     * 此参数必填     */
    public function setTapType($tapType)
    {
        $this->tapType = $tapType;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("buyerId", $this->stdResult)) {
            $this->buyerId = $this->stdResult->{"buyerId"};
        }
        if (array_key_exists("buyerLoginId", $this->stdResult)) {
            $this->buyerLoginId = $this->stdResult->{"buyerLoginId"};
        }
        if (array_key_exists("gmtCreate", $this->stdResult)) {
            $this->gmtCreate = $this->stdResult->{"gmtCreate"};
        }
        if (array_key_exists("gmtModified", $this->stdResult)) {
            $this->gmtModified = $this->stdResult->{"gmtModified"};
        }
        if (array_key_exists("gmtQuota", $this->stdResult)) {
            $this->gmtQuota = $this->stdResult->{"gmtQuota"};
        }
        if (array_key_exists("quota", $this->stdResult)) {
            $this->quota = $this->stdResult->{"quota"};
        }
        if (array_key_exists("surplusQuota", $this->stdResult)) {
            $this->surplusQuota = $this->stdResult->{"surplusQuota"};
        }
        if (array_key_exists("sellerId", $this->stdResult)) {
            $this->sellerId = $this->stdResult->{"sellerId"};
        }
        if (array_key_exists("sellerLoginId", $this->stdResult)) {
            $this->sellerLoginId = $this->stdResult->{"sellerLoginId"};
        }
        if (array_key_exists("status", $this->stdResult)) {
            $this->status = $this->stdResult->{"status"};
        }
        if (array_key_exists("statusStr", $this->stdResult)) {
            $this->statusStr = $this->stdResult->{"statusStr"};
        }
        if (array_key_exists("tapDate", $this->stdResult)) {
            $this->tapDate = $this->stdResult->{"tapDate"};
        }
        if (array_key_exists("tapDateStr", $this->stdResult)) {
            $this->tapDateStr = $this->stdResult->{"tapDateStr"};
        }
        if (array_key_exists("tapOverdue", $this->stdResult)) {
            $this->tapOverdue = $this->stdResult->{"tapOverdue"};
        }
        if (array_key_exists("tapType", $this->stdResult)) {
            $this->tapType = $this->stdResult->{"tapType"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("buyerId", $this->arrayResult)) {
            $this->buyerId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("buyerLoginId", $this->arrayResult)) {
            $this->buyerLoginId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("gmtCreate", $this->arrayResult)) {
            $this->gmtCreate = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("gmtModified", $this->arrayResult)) {
            $this->gmtModified = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("gmtQuota", $this->arrayResult)) {
            $this->gmtQuota = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("quota", $this->arrayResult)) {
            $this->quota = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("surplusQuota", $this->arrayResult)) {
            $this->surplusQuota = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("sellerId", $this->arrayResult)) {
            $this->sellerId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("sellerLoginId", $this->arrayResult)) {
            $this->sellerLoginId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("status", $this->arrayResult)) {
            $this->status = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("statusStr", $this->arrayResult)) {
            $this->statusStr = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("tapDate", $this->arrayResult)) {
            $this->tapDate = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("tapDateStr", $this->arrayResult)) {
            $this->tapDateStr = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("tapOverdue", $this->arrayResult)) {
            $this->tapOverdue = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("tapType", $this->arrayResult)) {
            $this->tapType = $arrayResult['${paramType.paramName}'];
        }
    }
}
