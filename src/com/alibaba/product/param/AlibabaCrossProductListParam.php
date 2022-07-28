<?php

namespace Keyi1688\com\alibaba\product\param;

class AlibabaCrossProductListParam
{

        
        /**
    * @return 商品Id列表
    */
    public function getProductIdList()
    {
        $tempResult = $this->sdkStdResult["productIdList"];
        return $tempResult;
    }
    
    /**
     * 设置商品Id列表
     * @param array include @see Long[] $productIdList
     * 参数示例：<pre>[574325651942,570027659932]</pre>
     * 此参数必填     */
    public function setProductIdList($productIdList)
    {
        $this->sdkStdResult["productIdList"] = $productIdList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
