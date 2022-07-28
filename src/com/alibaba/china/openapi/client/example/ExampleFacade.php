<?php
namespace Keyi1688\com\alibaba\china\openapi\client\example;
use Keyi1688\com\alibaba\openapi\client\APIId;
use Keyi1688\com\alibaba\openapi\client\APIRequest;
use Keyi1688\com\alibaba\openapi\client\APIResponse;
use Keyi1688\com\alibaba\openapi\client\SyncAPIClient;
use Keyi1688\com\alibaba\openapi\client\entity\AuthorizationToken;
use Keyi1688\com\alibaba\openapi\client\entity\ParentResult;
use Keyi1688\com\alibaba\openapi\client\entity\ResponseStatus;
use Keyi1688\com\alibaba\openapi\client\entity\ResponseWrapper;
use Keyi1688\com\alibaba\openapi\client\policy\ClientPolicy;
use Keyi1688\com\alibaba\openapi\client\policy\DataProtocol;
use Keyi1688\com\alibaba\openapi\client\policy\RequestPolicy;

use Keyi1688\com\alibaba\china\openapi\client\example\param\apiexample\ExampleFamilyGetParam;
use Keyi1688\com\alibaba\china\openapi\client\example\param\apiexample\ExampleFamilyPostParam;
use Keyi1688\com\alibaba\china\openapi\client\example\param\apiexample\ExampleFamilyGetResult;
use Keyi1688\com\alibaba\china\openapi\client\example\param\apiexample\ExampleFamilyPostResult;

class ExampleFacade
{
    private $serverHost = "gw.open.1688.com";
    private $httpPort = 80;
    private $httpsPort = 443;
    private $appKey;
    private $secKey;
    private $syncAPIClient;
    public function setServerHost($serverHost)
    {
        $this->serverHost = $serverHost;
    }
    public function setHttpPort($httpPort)
    {
        $this->httpPort = $httpPort;
    }
    public function setHttpsPort($httpsPort)
    {
        $this->httpsPort = $httpsPort;
    }
    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
    }
    public function setSecKey($secKey)
    {
        $this->secKey = $secKey;
    }
    public function initClient()
    {
        $clientPolicy = new ClientPolicy();
        $clientPolicy->appKey = $this->appKey;
        $clientPolicy->secKey = $this->secKey;
        $clientPolicy->httpPort = $this->httpPort;
        $clientPolicy->httpsPort = $this->httpsPort;
        $clientPolicy->serverHost = $this->serverHost;
        
        $this->syncAPIClient = new SyncAPIClient($clientPolicy);
    }
    public function getAPIClient()
    {
        if ($this->syncAPIClient == null) {
            $this->initClient();
        }
        return $this->syncAPIClient;
    }
    
    /**
     * 閺嶈宓侀幒鍫熸綀閻焦宕查崣鏍ㄥ房閺夊啩鎶ら悧锟�
     *
     * @param
     *        	code 閹哄牊娼堥惍锟�
     * @return 閹哄牊娼堟禒銈囧
     */
    public function getToken($code)
    {
        $reqPolicy = new RequestPolicy();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = false;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = true;
        $reqPolicy->requestProtocol = DataProtocol::http;
        
        $request = new APIRequest();
        $request->addtionalParams ["code"] = $code;
        $request->addtionalParams ["grant_type"] = "authorization_code";
        $request->addtionalParams ["need_refresh_token"] = true;
        $request->addtionalParams ["client_id"] = $this->appKey;
        $request->addtionalParams ["client_secret"] = $this->secKey;
        $request->addtionalParams ["redirect_uri"] = "default";
        $apiId = new APIId("system.oauth2", "getToken", $reqPolicy->defaultApiVersion);
        $request->apiId = $apiId;
        
        $resultDefinition = new AuthorizationToken();
        $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    
    /**
     * 閸掗攱鏌妕oken
     *
     * @param
     *        	refreshToken refresh 娴犮倗澧�
     * @return 閹哄牊娼堟禒銈囧
     */
    public function refreshToken($refreshToken)
    {
        $reqPolicy = new RequestPolicy();
        $reqPolicy->httpMethod = "GET";
        $reqPolicy->needAuthorization = false;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = true;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        
        $request = new APIRequest();
        $request->addtionalParams ["refreshToken"] = $refreshToken;
        $request->addtionalParams ["grant_type"] = "refresh_token";
        $request->addtionalParams ["client_id"] = $this->appKey;
        $request->addtionalParams ["client_secret"] = $this->secKey;
        $apiId = new APIId("system.oauth2", "getToken", $reqPolicy->defaultApiVersion);
        $request->apiId = $apiId;
        
        $resultDefinition = new AuthorizationToken();
        $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    public function exampleFamilyGet(ExampleFamilyGetParam $param, ExampleFamilyGetResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = false;
        $reqPolicy->requestSendTimestamp = false;
        $reqPolicy->useHttps = false;
        $reqPolicy->useSignture = false;
        $reqPolicy->accessPrivateApi = false;
        
        $request = new APIRequest();
        $apiId = new APIId("api.example", "example.family.get", 1);
        $request->apiId = $apiId;
        
        $request->requestEntity = $param;
        
        $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
    }
    public function exampleFamilyPost(ExampleFamilyPostParam $param, $accessToken, ExampleFamilyPostResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = false;
        $reqPolicy->useHttps = false;
        $reqPolicy->useSignture = true;
        $reqPolicy->accessPrivateApi = false;
        
        $request = new APIRequest();
        $apiId = new APIId("api.example", "example.family.post", 1);
        $request->apiId = $apiId;
        
        $request->requestEntity = $param;
        $request->accessToken = $accessToken;
        $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
    }
}
