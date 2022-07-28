<?php
namespace Keyi1688\system\oauth2\param;

class AlibabaOceanAuthDtoAuthRelationDTO extends SDKDomain
{
    private $accessToken;
    
    /**
    * @return 授权凭证
    */
    public function getAccessToken()
    {
        return $this->accessToken;
    }
    
    /**
     * 设置授权凭证
     * @param String $accessToken
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }
    
            
    private $adminOwnerId;
    
    /**
    * @return 主账号loginId
    */
    public function getAdminOwnerId()
    {
        return $this->adminOwnerId;
    }
    
    /**
     * 设置主账号loginId
     * @param String $adminOwnerId
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setAdminOwnerId($adminOwnerId)
    {
        $this->adminOwnerId = $adminOwnerId;
    }
    
            
    private $adminUserId;
    
    /**
    * @return 主账号userId
    */
    public function getAdminUserId()
    {
        return $this->adminUserId;
    }
    
    /**
     * 设置主账号userId
     * @param Long $adminUserId
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setAdminUserId($adminUserId)
    {
        $this->adminUserId = $adminUserId;
    }
    
            
    private $clientId;
    
    /**
    * @return appKey
    */
    public function getClientId()
    {
        return $this->clientId;
    }
    
    /**
     * 设置appKey
     * @param String $clientId
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }
    
            
    private $clientName;
    
    /**
    * @return appName
    */
    public function getClientName()
    {
        return $this->clientName;
    }
    
    /**
     * 设置appName
     * @param String $clientName
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
    }
    
            
    private $gmtExpired;
    
    /**
    * @return 授权过期时间
    */
    public function getGmtExpired()
    {
        return $this->gmtExpired;
    }
    
    /**
     * 设置授权过期时间
     * @param Date $gmtExpired
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setGmtExpired($gmtExpired)
    {
        $this->gmtExpired = $gmtExpired;
    }
    
            
    private $memberId;
    
    /**
    * @return 授权用户memberId
    */
    public function getMemberId()
    {
        return $this->memberId;
    }
    
    /**
     * 设置授权用户memberId
     * @param String $memberId
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }
    
            
    private $ownerId;
    
    /**
    * @return 授权用户loginId
    */
    public function getOwnerId()
    {
        return $this->ownerId;
    }
    
    /**
     * 设置授权用户loginId
     * @param String $ownerId
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
    }
    
            
    private $resourceScopes;
    
    /**
    * @return 资源域
    */
    public function getResourceScopes()
    {
        return $this->resourceScopes;
    }
    
    /**
     * 设置资源域
     * @param String $resourceScopes
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setResourceScopes($resourceScopes)
    {
        $this->resourceScopes = $resourceScopes;
    }
    
            
    private $site;
    
    /**
    * @return 授权站点
    */
    public function getSite()
    {
        return $this->site;
    }
    
    /**
     * 设置授权站点
     * @param String $site
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setSite($site)
    {
        $this->site = $site;
    }
    
            
    private $status;
    
    /**
    * @return 授权状态
    */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * 设置授权状态
     * @param String $status
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    
            
    private $subAuth;
    
    /**
    * @return 是否子账号授权
    */
    public function getSubAuth()
    {
        return $this->subAuth;
    }
    
    /**
     * 设置是否子账号授权
     * @param Boolean $subAuth
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setSubAuth($subAuth)
    {
        $this->subAuth = $subAuth;
    }
    
            
    private $subOwnerId;
    
    /**
    * @return 子账号loginId
    */
    public function getSubOwnerId()
    {
        return $this->subOwnerId;
    }
    
    /**
     * 设置子账号loginId
     * @param String $subOwnerId
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setSubOwnerId($subOwnerId)
    {
        $this->subOwnerId = $subOwnerId;
    }
    
            
    private $subUserId;
    
    /**
    * @return 子账号userId
    */
    public function getSubUserId()
    {
        return $this->subUserId;
    }
    
    /**
     * 设置子账号userId
     * @param Long $subUserId
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setSubUserId($subUserId)
    {
        $this->subUserId = $subUserId;
    }
    
            
    private $userId;
    
    /**
    * @return 授权用户userId
    */
    public function getUserId()
    {
        return $this->userId;
    }
    
    /**
     * 设置授权用户userId
     * @param Long $userId
     * 参数示例：<pre>xx</pre>
     * 此参数必填     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("accessToken", $this->stdResult)) {
            $this->accessToken = $this->stdResult->{"accessToken"};
        }
        if (array_key_exists("adminOwnerId", $this->stdResult)) {
            $this->adminOwnerId = $this->stdResult->{"adminOwnerId"};
        }
        if (array_key_exists("adminUserId", $this->stdResult)) {
            $this->adminUserId = $this->stdResult->{"adminUserId"};
        }
        if (array_key_exists("clientId", $this->stdResult)) {
            $this->clientId = $this->stdResult->{"clientId"};
        }
        if (array_key_exists("clientName", $this->stdResult)) {
            $this->clientName = $this->stdResult->{"clientName"};
        }
        if (array_key_exists("gmtExpired", $this->stdResult)) {
            $this->gmtExpired = $this->stdResult->{"gmtExpired"};
        }
        if (array_key_exists("memberId", $this->stdResult)) {
            $this->memberId = $this->stdResult->{"memberId"};
        }
        if (array_key_exists("ownerId", $this->stdResult)) {
            $this->ownerId = $this->stdResult->{"ownerId"};
        }
        if (array_key_exists("resourceScopes", $this->stdResult)) {
            $this->resourceScopes = $this->stdResult->{"resourceScopes"};
        }
        if (array_key_exists("site", $this->stdResult)) {
            $this->site = $this->stdResult->{"site"};
        }
        if (array_key_exists("status", $this->stdResult)) {
            $this->status = $this->stdResult->{"status"};
        }
        if (array_key_exists("subAuth", $this->stdResult)) {
            $this->subAuth = $this->stdResult->{"subAuth"};
        }
        if (array_key_exists("subOwnerId", $this->stdResult)) {
            $this->subOwnerId = $this->stdResult->{"subOwnerId"};
        }
        if (array_key_exists("subUserId", $this->stdResult)) {
            $this->subUserId = $this->stdResult->{"subUserId"};
        }
        if (array_key_exists("userId", $this->stdResult)) {
            $this->userId = $this->stdResult->{"userId"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("accessToken", $this->arrayResult)) {
            $this->accessToken = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("adminOwnerId", $this->arrayResult)) {
            $this->adminOwnerId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("adminUserId", $this->arrayResult)) {
            $this->adminUserId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("clientId", $this->arrayResult)) {
            $this->clientId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("clientName", $this->arrayResult)) {
            $this->clientName = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("gmtExpired", $this->arrayResult)) {
            $this->gmtExpired = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("memberId", $this->arrayResult)) {
            $this->memberId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("ownerId", $this->arrayResult)) {
            $this->ownerId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("resourceScopes", $this->arrayResult)) {
            $this->resourceScopes = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("site", $this->arrayResult)) {
            $this->site = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("status", $this->arrayResult)) {
            $this->status = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("subAuth", $this->arrayResult)) {
            $this->subAuth = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("subOwnerId", $this->arrayResult)) {
            $this->subOwnerId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("subUserId", $this->arrayResult)) {
            $this->subUserId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("userId", $this->arrayResult)) {
            $this->userId = $arrayResult['${paramType.paramName}'];
        }
    }
}
