<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaCrossBorderPayUrlGetParam
{

        
        /**
    * @return 订单Id列表,最多批量30个订单，订单过多会导致超时，建议一次10个订单
    */
    public function getOrderIdList()
    {
        $tempResult = $this->sdkStdResult["orderIdList"];
        return $tempResult;
    }
    
    /**
     * 设置订单Id列表,最多批量30个订单，订单过多会导致超时，建议一次10个订单
     * @param array include @see Long[] $orderIdList
     * 参数示例：<pre>[111111,22222333]</pre>
     * 此参数必填     */
    public function setOrderIdList($orderIdList)
    {
        $this->sdkStdResult["orderIdList"] = $orderIdList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
