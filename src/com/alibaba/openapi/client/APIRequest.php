<?php
namespace Keyi1688\com\alibaba\openapi\client;

class APIRequest
{
    
    /**
     *
     * @var APIId
     */
    public $apiId;
    
    /**
     *
     * @var
     */
    public $addtionalParams = array();
    
    /**
     *
     * @var
     */
    public $requestEntity;
    
    /**
     *
     * @var
     */
    public $attachments=array();
    
    /**
     *
     * @var String
     */
    public $authCodeKey;
    
    /**
     *
     * @var String
     */
    public $accessToken;
    
    /**
     *
     * @var AuthorizationToken
     */
    public $authToken;
}
