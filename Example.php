<?php

use Keyi1688\com\alibaba\openapi\client\policy\ClientPolicy;
use Keyi1688\com\alibaba\openapi\client\SyncAPIClient;
use Keyi1688\com\alibaba\openapi\client\policy\RequestPolicy;
use Keyi1688\com\alibaba\openapi\client\policy\DataProtocol;
use Keyi1688\com\alibaba\product\push\param\AlibabaCrossSyncProductListPushedParam;
use Keyi1688\com\alibaba\product\push\param\AlibabaCrossSyncProductListPushedResult;
use Keyi1688\com\alibaba\openapi\client\APIRequest;
use Keyi1688\com\alibaba\openapi\client\APIId;
use Keyi1688\com\alibaba\product\param\AlibabaCrossProductInfoParam;
use Keyi1688\com\alibaba\product\param\AlibabaCrossProductInfoResult;

$config = [
        'appId' => '',
        'appSecret' => '',
        'accessToken' => '',
        'httpPort' => 80,
        'httpsPort' => 443,
        'serverHost' => 'gw.open.1688.com',
        'isOn' => true];


$clientPolicy = new ClientPolicy();
$clientPolicy->appKey = $config['appId'];
$clientPolicy->secKey = $config['appSecret'];
$clientPolicy->httpPort = $config['httpPort'];
$clientPolicy->httpsPort = $config['httpsPort'];
$clientPolicy->serverHost = $config['serverHost'];;

$syncAPIClient = new SyncAPIClient( $clientPolicy );

$reqPolicy = new RequestPolicy();
$reqPolicy->httpMethod = "POST";
$reqPolicy->needAuthorization = false;
$reqPolicy->requestSendTimestamp = true;
$reqPolicy->useHttps = true;
$reqPolicy->requestProtocol = DataProtocol::param2;


$param = new AlibabaCrossSyncProductListPushedParam();
$param->setProductIdList([$productId]);

$request = new APIRequest();
$apiId = new APIId( "com.alibaba.product.push", "alibaba.cross.syncProductListPushed", 1 );
$request->apiId = $apiId;
$request->requestEntity = $param;
$request->accessToken = $config['accessToken'];

$response = new AlibabaCrossSyncProductListPushedResult();

$syncAPIClient->send ( $request, $response, $reqPolicy );

//--------------------- 获取详情
$param = new AlibabaCrossProductInfoParam();
$param->setProductId($productId);

$request = new APIRequest();
$apiId = new APIId( "com.alibaba.product", "alibaba.cross.productInfo", 1 );
$request->apiId = $apiId;
$request->requestEntity = $param;
$request->accessToken = $config['accessToken'];

$response = new AlibabaCrossProductInfoResult();

$syncAPIClient->send ( $request, $response, $reqPolicy );

var_dump($response);