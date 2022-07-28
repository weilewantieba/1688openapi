<?php

namespace Keyi1688\com\alibaba\trade\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeUploadRefundVoucherParam
{

        
        /**
    * @return 凭证图片数据。小于1M，jpg格式。
    */
    public function getImageData()
    {
        $tempResult = $this->sdkStdResult["imageData"];
        return $tempResult;
    }
    
    /**
     * 设置凭证图片数据。小于1M，jpg格式。
     * @param array include @see Byte[] $imageData
     * 参数示例：<pre> </pre>
     * 此参数必填     */
    public function setImageData($imageData)
    {
        $this->sdkStdResult["imageData"] = $imageData;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
