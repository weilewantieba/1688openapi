<?php

namespace Keyi1688\com\alibaba\openapi\client\entity;

class AuthorizationToken
{
    private $access_token;
    private $refresh_token;
    private $expires_in;
    private $expires_time;
    private $refresh_token_timeout;
    private $resource_owner;
    private $uid;
    private $aliId;
    private $memberId;

    public function setAccessToken($accessToken)
    {
        $this->access_token = $accessToken;
    }
    public function getAccessToken()
    {
        return $this->access_token;
    }

    public function getResult()
    {
       return [
           "access_token" =>$this->access_token,
           "refresh_token" =>$this->refresh_token,
           "expires_in" =>$this->expires_in,
           "expires_time" =>$this->expires_time,
           "refresh_token_timeout" =>$this->refresh_token_timeout,
           "resource_owner" =>$this->resource_owner,
           "uid" =>$this->uid,
           "aliId" =>$this->aliId,
           "memberId" =>$this->memberId,
       ];
    }


    private $stdResult;
    public function setStdResult($stdResult)
    {
        $this->stdResult =$stdResult;
        if (property_exists($this->stdResult,"access_token")) {
            $this->access_token = $this->stdResult->{"access_token"};
        }
        if (property_exists($this->stdResult,"refresh_token")) {
            $this->refresh_token = $this->stdResult->{"refresh_token"};
        }
        if (property_exists($this->stdResult,"expires_in")) {
            $this->expires_in = $this->stdResult->{"expires_in"};
        }
        if (property_exists($this->stdResult,"expires_time")) {
            $this->expires_time = $this->stdResult->{"expires_time"};
        }
        if (property_exists($this->stdResult,"refresh_token_timeout")) {
            $this->refresh_token_timeout = $this->stdResult->{"refresh_token_timeout"};
        }
        if (property_exists($this->stdResult,"resource_owner")) {
            $this->resource_owner = $this->stdResult->{"resource_owner"};
        }
        if (property_exists($this->stdResult,"uid")) {
            $this->uid = $this->stdResult->{"uid"};
        }
        if (property_exists($this->stdResult,"aliId")) {
            $this->aliId = $this->stdResult->{"aliId"};
        }
        if (property_exists($this->stdResult,"memberId")) {
            $this->memberId = $this->stdResult->{"memberId"};
        }
    }
}
