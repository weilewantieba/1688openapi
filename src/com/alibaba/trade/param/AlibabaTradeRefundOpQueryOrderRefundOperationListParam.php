<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeRefundOpQueryOrderRefundOperationListParam
{

        
        /**
    * @return 退款单Id
    */
    public function getRefundId()
    {
        $tempResult = $this->sdkStdResult["refundId"];
        return $tempResult;
    }
    
    /**
     * 设置退款单Id
     * @param String $refundId
     * 参数示例：<pre>TQ1043162**46961198</pre>
     * 此参数必填     */
    public function setRefundId($refundId)
    {
        $this->sdkStdResult["refundId"] = $refundId;
    }
    
        
    /**
    * @return 当前页号
    */
    public function getPageNo()
    {
        $tempResult = $this->sdkStdResult["pageNo"];
        return $tempResult;
    }
    
    /**
     * 设置当前页号
     * @param String $pageNo
     * 参数示例：<pre>1</pre>
     * 此参数必填     */
    public function setPageNo($pageNo)
    {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
    
        
    /**
    * @return 页大小
    */
    public function getPageSize()
    {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置页大小
     * @param String $pageSize
     * 参数示例：<pre>100</pre>
     * 此参数必填     */
    public function setPageSize($pageSize)
    {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
