<?php

namespace Keyi1688\com\alibaba\trade\param;

class AlibabaAccountPeriodListBuyerViewParam
{

        
        /**
    * @return 页码
    */
    public function getPageIndex()
    {
        $tempResult = $this->sdkStdResult["pageIndex"];
        return $tempResult;
    }
    
    /**
     * 设置页码
     * @param Long $pageIndex
     * 参数示例：<pre>1</pre>
     * 此参数必填     */
    public function setPageIndex($pageIndex)
    {
        $this->sdkStdResult["pageIndex"] = $pageIndex;
    }
    
        
    /**
    * @return 卖家ID，不填则查询全部
    */
    public function getSellerLoginId()
    {
        $tempResult = $this->sdkStdResult["sellerLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置卖家ID，不填则查询全部
     * @param String $sellerLoginId
     * 参数示例：<pre>alitestforisv01</pre>
     * 此参数必填     */
    public function setSellerLoginId($sellerLoginId)
    {
        $this->sdkStdResult["sellerLoginId"] = $sellerLoginId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
