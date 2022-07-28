<?php

namespace Keyi1688\com\alibaba\product\param;

use  Keyi1688\com\alibaba\product\param\AlibabaProductProductExtendInfo;
use  Keyi1688\com\alibaba\product\param\AlibabaProductProductInfo;

class AlibabaCrossProductInfoResult
{
    private $productInfo;

    /**
    * @return AlibabaProductProductInfo 商品详情
    */
    public function getProductInfo()
    {
        return $this->productInfo;
    }

    /**
     * 设置商品详情
     * @param AlibabaProductProductInfo $productInfo

     * 此参数必填     */
    public function setProductInfo(AlibabaProductProductInfo $productInfo)
    {
        $this->productInfo = $productInfo;
    }


    private $bizGroupInfos;

    /**
    * @return 产品业务的支持信息,support为false说明不支持.
    */
    public function getBizGroupInfos()
    {
        return $this->bizGroupInfos;
    }

    /**
     * 设置产品业务的支持信息,support为false说明不支持.
     * @param array include @see AlibabaProductProductBizGroupInfo[] $bizGroupInfos

     * 此参数必填     */
    public function setBizGroupInfos(AlibabaProductProductBizGroupInfo $bizGroupInfos)
    {
        $this->bizGroupInfos = $bizGroupInfos;
    }


    private $success;

    /**
    * @return 是否成功
    */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * 设置是否成功
     * @param Boolean $success

     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }


    private $message;

    /**
    * @return 调用信息
    */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * 设置调用信息
     * @param String $message

     * 此参数必填     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("productInfo", $this->stdResult)) {
            $productInfoResult=$this->stdResult->{"productInfo"};
            $this->productInfo = new AlibabaProductProductInfo();
            $this->productInfo->setStdResult($productInfoResult);
        }
        if (array_key_exists("bizGroupInfos", $this->stdResult)) {
            $bizGroupInfosResult=$this->stdResult->{"bizGroupInfos"};
            $object = json_decode(json_encode($bizGroupInfosResult), true);
            $this->bizGroupInfos = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new \ArrayObject($object [$i]);
                $AlibabaProductProductBizGroupInfoResult=new AlibabaProductProductBizGroupInfo();
                $AlibabaProductProductBizGroupInfoResult->setArrayResult($arrayobject);
                $this->bizGroupInfos [$i] = $AlibabaProductProductBizGroupInfoResult;
            }
        }
        if (array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
        if (array_key_exists("message", $this->stdResult)) {
            $this->message = $this->stdResult->{"message"};
        }
    }

    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("productInfo", $this->arrayResult)) {
            $productInfoResult=$arrayResult['${paramType.paramName}'];
            $this->productInfo = new AlibabaProductProductInfo();
            $this->productInfo->setStdResult($productInfoResult);
        }
        if (array_key_exists("bizGroupInfos", $this->arrayResult)) {
            $bizGroupInfosResult=$arrayResult['${paramType.paramName}'];
            $this->bizGroupInfos = new AlibabaProductProductBizGroupInfo();
            $this->bizGroupInfos->setStdResult($bizGroupInfosResult);
        }
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("message", $this->arrayResult)) {
            $this->message = $arrayResult['${paramType.paramName}'];
        }
    }
}
