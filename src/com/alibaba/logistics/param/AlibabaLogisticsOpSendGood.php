<?php

namespace Keyi1688\com\alibaba\logistics\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaLogisticsOpDeliverySendOrderDummyParam\AlibabaLogisticsOpSendGoodEntry;

class AlibabaLogisticsOpSendGood extends SDKDomain
{
    private $sourceId;
    
    /**
    * @return 发货对象id,一般是订单id
    */
    public function getSourceId()
    {
        return $this->sourceId;
    }
    
    /**
     * 设置发货对象id,一般是订单id
     * @param String $sourceId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;
    }
    
            
    private $sendGoodEntries;
    
    /**
    * @return 发货对象明细列表
    */
    public function getSendGoodEntries()
    {
        return $this->sendGoodEntries;
    }
    
    /**
     * 设置发货对象明细列表
     * @param array include @see AlibabaLogisticsOpSendGoodEntry[] $sendGoodEntries
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSendGoodEntries(AlibabaLogisticsOpSendGoodEntry $sendGoodEntries)
    {
        $this->sendGoodEntries = $sendGoodEntries;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("sourceId", $this->stdResult)) {
            $this->sourceId = $this->stdResult->{"sourceId"};
        }
        if (array_key_exists("sendGoodEntries", $this->stdResult)) {
            $sendGoodEntriesResult=$this->stdResult->{"sendGoodEntries"};
            $object = json_decode(json_encode($sendGoodEntriesResult), true);
            $this->sendGoodEntries = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $AlibabaLogisticsOpSendGoodEntryResult=new AlibabaLogisticsOpSendGoodEntry();
                $AlibabaLogisticsOpSendGoodEntryResult->setArrayResult($arrayobject);
                $this->sendGoodEntries [$i] = $AlibabaLogisticsOpSendGoodEntryResult;
            }
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("sourceId", $this->arrayResult)) {
            $this->sourceId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("sendGoodEntries", $this->arrayResult)) {
            $sendGoodEntriesResult=$arrayResult['${paramType.paramName}'];
            $this->sendGoodEntries = new AlibabaLogisticsOpSendGoodEntry();
            $this->sendGoodEntries->setStdResult($sendGoodEntriesResult);
        }
    }
}
