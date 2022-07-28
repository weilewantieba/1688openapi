<?php

namespace Keyi1688\cn\alibaba\open\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class PushCursorMessageListParam
{

        
        /**
    * @return 消息创建时间查找范围开始
    */
    public function getCreateStartTime()
    {
        $tempResult = $this->sdkStdResult["createStartTime"];
        return $tempResult;
    }
    
    /**
     * 设置消息创建时间查找范围开始
     * @param Date $createStartTime
     * 参数示例：<pre>20130417000000000+0800</pre>
     * 此参数必填     */
    public function setCreateStartTime($createStartTime)
    {
        $this->sdkStdResult["createStartTime"] = $createStartTime;
    }
    
        
    /**
    * @return 消息创建时间查找范围结束
    */
    public function getCreateEndTime()
    {
        $tempResult = $this->sdkStdResult["createEndTime"];
        return $tempResult;
    }
    
    /**
     * 设置消息创建时间查找范围结束
     * @param Date $createEndTime
     * 参数示例：<pre>20130417000000000+0800</pre>
     * 此参数必填     */
    public function setCreateEndTime($createEndTime)
    {
        $this->sdkStdResult["createEndTime"] = $createEndTime;
    }
    
        
    /**
    * @return 每次取的数据量，范围20-200，默认20
    */
    public function getQuantity()
    {
        $tempResult = $this->sdkStdResult["quantity"];
        return $tempResult;
    }
    
    /**
     * 设置每次取的数据量，范围20-200，默认20
     * @param Integer $quantity
     * 参数示例：<pre>20</pre>
     * 此参数必填     */
    public function setQuantity($quantity)
    {
        $this->sdkStdResult["quantity"] = $quantity;
    }
    
        
    /**
    * @return 消息类型
    */
    public function getType()
    {
        $tempResult = $this->sdkStdResult["type"];
        return $tempResult;
    }
    
    /**
     * 设置消息类型
     * @param String $type
     * 参数示例：<pre>ORDER_BUYER_MAKER</pre>
     * 此参数必填     */
    public function setType($type)
    {
        $this->sdkStdResult["type"] = $type;
    }
    
        
    /**
    * @return 用户Id
    */
    public function getUserInfo()
    {
        $tempResult = $this->sdkStdResult["userInfo"];
        return $tempResult;
    }
    
    /**
     * 设置用户Id
     * @param String $userInfo
     * 参数示例：<pre>b2b-4137495171f2513</pre>
     * 此参数必填     */
    public function setUserInfo($userInfo)
    {
        $this->sdkStdResult["userInfo"] = $userInfo;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
