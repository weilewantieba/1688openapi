<?php

namespace Keyi1688\com\alibaba\product\param;

use Keyi1688\Arrayable;

class AlibabaCrossProductInfoParam
{

        /**
    * @return 1688商品ID
    */
    public function getProductId()
    {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }

    /**
     * 设置1688商品ID
     * @param Long $productId
     * 参数示例：<pre>573741401425</pre>
     * 此参数必填     */
    public function setProductId($productId)
    {
        $this->sdkStdResult["productId"] = $productId;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
