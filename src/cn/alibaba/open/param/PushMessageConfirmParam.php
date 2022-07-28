<?php

namespace Keyi1688\cn\alibaba\open\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class PushMessageConfirmParam
{

        
        /**
    * @return 待确认的消息id列表
    */
    public function getMsgIdList()
    {
        $tempResult = $this->sdkStdResult["msgIdList"];
        return $tempResult;
    }
    
    /**
     * 设置待确认的消息id列表
     * @param List $msgIdList
     * 参数示例：<pre>[123,456]</pre>
     * 此参数必填     */
    public function setMsgIdList(array $msgIdList)
    {
        $this->sdkStdResult["msgIdList"] = $msgIdList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
