<?php
namespace Keyi1688\com\alibaba\product\push\param;

class AlibabaProductPushSyncPushProductResultParam
{

        
        /**
    * @return 目标平台的定义
    */
    public function getPlatformDefinition()
    {
        $tempResult = $this->sdkStdResult["platformDefinition"];
        return $tempResult;
    }
    
    /**
     * 设置目标平台的定义
     * @param AlibabaProductPushPlatformDefinition $platformDefinition
     * 参数示例：<pre>{}</pre>
     * 此参数必填     */
    public function setPlatformDefinition(AlibabaProductPushPlatformDefinition $platformDefinition)
    {
        $this->sdkStdResult["platformDefinition"] = $platformDefinition;
    }
    
        
    /**
    * @return 在批量铺货时，源平台可能会为每次铺货产生一个批次传递给ISV，ISV可以在同步通知时返回该字段。该字段由平台传递给ISV，该字段不是必须。
    */
    public function getPushRecordIdentity()
    {
        $tempResult = $this->sdkStdResult["pushRecordIdentity"];
        return $tempResult;
    }
    
    /**
     * 设置在批量铺货时，源平台可能会为每次铺货产生一个批次传递给ISV，ISV可以在同步通知时返回该字段。该字段由平台传递给ISV，该字段不是必须。
     * @param AlibabaProductPushIdentity $pushRecordIdentity
     * 参数示例：<pre>{}</pre>
     * 此参数必填     */
    public function setPushRecordIdentity(AlibabaProductPushIdentity $pushRecordIdentity)
    {
        $this->sdkStdResult["pushRecordIdentity"] = $pushRecordIdentity;
    }
    
        
    /**
    * @return 商品级别的铺货结果
    */
    public function getPushProductResults()
    {
        $tempResult = $this->sdkStdResult["pushProductResults"];
        return $tempResult;
    }
    
    /**
     * 设置商品级别的铺货结果
     * @param AlibabaProductPushPushProductResult $pushProductResults
     * 参数示例：<pre>{}</pre>
     * 此参数必填     */
    public function setPushProductResults(AlibabaProductPushPushProductResult $pushProductResults)
    {
        $this->sdkStdResult["pushProductResults"] = $pushProductResults;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
