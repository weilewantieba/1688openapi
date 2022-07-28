<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductGetByStatusParam
{

        
        /**
    * @return 分页页码
    */
    public function getPageNo()
    {
        $tempResult = $this->sdkStdResult["pageNo"];
        return $tempResult;
    }
    
    /**
     * 设置分页页码
     * @param Integer $pageNo
     * 参数示例：<pre>1</pre>
     * 此参数必填     */
    public function setPageNo($pageNo)
    {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
    
        
    /**
    * @return 分页每页数量
    */
    public function getPageSize()
    {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置分页每页数量
     * @param Integer $pageSize
     * 参数示例：<pre>20</pre>
     * 此参数必填     */
    public function setPageSize($pageSize)
    {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    /**
    * @return "member expired"(会员撤销),
"auto expired"(自然过期),
"expired"(过期(包含手动过期与自动过期)),
"member deleted"(会员删除),
"published"(上网状态),
"modified"(修改),
"new"(新发),
"deleted"(删除),
"TBD"(to be delete),
"approved"(审批通过),
"auditing"(审核中),
"untread"(审核不通过)
    */
    public function getStatusList()
    {
        $tempResult = $this->sdkStdResult["statusList"];
        return $tempResult;
    }
    
    /**
     * 设置"member expired"(会员撤销),
"auto expired"(自然过期),
"expired"(过期(包含手动过期与自动过期)),
"member deleted"(会员删除),
"published"(上网状态),
"modified"(修改),
"new"(新发),
"deleted"(删除),
"TBD"(to be delete),
"approved"(审批通过),
"auditing"(审核中),
"untread"(审核不通过)
     * @param array include @see String[] $statusList
     * 参数示例：<pre>["member expired","auto expired"]</pre>
     * 此参数必填     */
    public function setStatusList($statusList)
    {
        $this->sdkStdResult["statusList"] = $statusList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
