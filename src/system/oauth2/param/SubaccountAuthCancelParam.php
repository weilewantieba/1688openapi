<?php

namespace Keyi1688\system\oauth2\param;

class SubaccountAuthCancelParam
{

        
        /**
    * @return 子账号id列表
    */
    public function getSubUserIdentityList()
    {
        $tempResult = $this->sdkStdResult["subUserIdentityList"];
        return $tempResult;
    }
    
    /**
     * 设置子账号id列表
     * @param array include @see String[] $subUserIdentityList
     * 参数示例：<pre>a:b,a:c</pre>
     * 此参数必填     */
    public function setSubUserIdentityList($subUserIdentityList)
    {
        $this->sdkStdResult["subUserIdentityList"] = $subUserIdentityList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
