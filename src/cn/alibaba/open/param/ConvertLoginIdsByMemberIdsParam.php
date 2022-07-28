<?php

namespace Keyi1688\cn\alibaba\open\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class ConvertLoginIdsByMemberIdsParam
{

        
        /**
    * @return 需要转换的memberId列表
    */
    public function getMemberIds()
    {
        $tempResult = $this->sdkStdResult["memberIds"];
        return $tempResult;
    }
    
    /**
     * 设置需要转换的memberId列表
     * @param List $memberIds
     * 参数示例：<pre>["memberId1","memberId2"]</pre>
     * 此参数必填     */
    public function setMemberIds(array $memberIds)
    {
        $this->sdkStdResult["memberIds"] = $memberIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
