<?php

namespace Keyi1688\com\alibaba\product\param;

class AlibabaRelationQuerySuppliersParam
{

        
        /**
    * @return 供应商登录ID，指定该参数可以查询授权用户与指定供应商的分销关系
    */
    public function getSupplierLoginId()
    {
        $tempResult = $this->sdkStdResult["supplierLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置供应商登录ID，指定该参数可以查询授权用户与指定供应商的分销关系
     * @param String $supplierLoginId
     * 参数示例：<pre>李定国</pre>
     * 此参数必填     */
    public function setSupplierLoginId($supplierLoginId)
    {
        $this->sdkStdResult["supplierLoginId"] = $supplierLoginId;
    }
    
        
    /**
    * @return 当前页码
    */
    public function getCurrentPage()
    {
        $tempResult = $this->sdkStdResult["currentPage"];
        return $tempResult;
    }
    
    /**
     * 设置当前页码
     * @param Integer $currentPage
     * 参数示例：<pre>1</pre>
     * 此参数必填     */
    public function setCurrentPage($currentPage)
    {
        $this->sdkStdResult["currentPage"] = $currentPage;
    }
    
        
    /**
    * @return 每页多少个
    */
    public function getPageSize()
    {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页多少个
     * @param Integer $pageSize
     * 参数示例：<pre>10</pre>
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
