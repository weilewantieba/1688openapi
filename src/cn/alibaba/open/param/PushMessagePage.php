<?php

namespace Keyi1688\cn\alibaba\open\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\PushQueryMessageListParam\PushMessage;

class PushMessagePage extends SDKDomain
{
    private $datas;
    
    /**
    * @return 分页的消息数据列表
    */
    public function getDatas()
    {
        return $this->datas;
    }
    
    /**
     * 设置分页的消息数据列表
     * @param array include @see PushMessage[] $datas
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDatas(PushMessage $datas)
    {
        $this->datas = $datas;
    }
    
            
    private $totalCount;
    
    /**
    * @return 消息总数
    */
    public function getTotalCount()
    {
        return $this->totalCount;
    }
    
    /**
     * 设置消息总数
     * @param Integer $totalCount
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("datas", $this->stdResult)) {
            $datasResult=$this->stdResult->{"datas"};
            $object = json_decode(json_encode($datasResult), true);
            $this->datas = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $PushMessageResult=new PushMessage();
                $PushMessageResult->setArrayResult($arrayobject);
                $this->datas [$i] = $PushMessageResult;
            }
        }
        if (array_key_exists("totalCount", $this->stdResult)) {
            $this->totalCount = $this->stdResult->{"totalCount"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("datas", $this->arrayResult)) {
            $datasResult=$arrayResult['${paramType.paramName}'];
            $this->datas = new PushMessage();
            $this->datas->setStdResult($datasResult);
        }
        if (array_key_exists("totalCount", $this->arrayResult)) {
            $this->totalCount = $arrayResult['${paramType.paramName}'];
        }
    }
}
