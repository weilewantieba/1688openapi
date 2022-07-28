<?php

namespace Keyi1688\cn\alibaba\open\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class PushMessage extends SDKDomain
{
    private $msgId;
    
    /**
    * @return 消息唯一id
    */
    public function getMsgId()
    {
        return $this->msgId;
    }
    
    /**
     * 设置消息唯一id
     * @param Long $msgId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMsgId($msgId)
    {
        $this->msgId = $msgId;
    }
    
            
    private $type;
    
    /**
    * @return 消息类型
    */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * 设置消息类型
     * @param String $type
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
            
    private $userInfo;
    
    /**
    * @return 消息关联的用户memberId
    */
    public function getUserInfo()
    {
        return $this->userInfo;
    }
    
    /**
     * 设置消息关联的用户memberId
     * @param String $userInfo
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setUserInfo($userInfo)
    {
        $this->userInfo = $userInfo;
    }
    
            
    private $data;
    
    /**
    * @return 消息内容
    */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * 设置消息内容
     * @param Map $data
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setData(array $data)
    {
        $this->data = $data;
    }
    
            
    private $gmtBorn;
    
    /**
    * @return 消息创建的时间戳，单位毫秒
    */
    public function getGmtBorn()
    {
        return $this->gmtBorn;
    }
    
    /**
     * 设置消息创建的时间戳，单位毫秒
     * @param Long $gmtBorn
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setGmtBorn($gmtBorn)
    {
        $this->gmtBorn = $gmtBorn;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("msgId", $this->stdResult)) {
            $this->msgId = $this->stdResult->{"msgId"};
        }
        if (array_key_exists("type", $this->stdResult)) {
            $this->type = $this->stdResult->{"type"};
        }
        if (array_key_exists("userInfo", $this->stdResult)) {
            $this->userInfo = $this->stdResult->{"userInfo"};
        }
        if (array_key_exists("data", $this->stdResult)) {
            $this->data = $this->stdResult->{"data"};
        }
        if (array_key_exists("gmtBorn", $this->stdResult)) {
            $this->gmtBorn = $this->stdResult->{"gmtBorn"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("msgId", $this->arrayResult)) {
            $this->msgId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("type", $this->arrayResult)) {
            $this->type = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("userInfo", $this->arrayResult)) {
            $this->userInfo = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("data", $this->arrayResult)) {
            $this->data = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("gmtBorn", $this->arrayResult)) {
            $this->gmtBorn = $arrayResult['${paramType.paramName}'];
        }
    }
}
