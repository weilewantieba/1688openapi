<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;
use Keyi1688\AlibabaCrossProductInfoParam\ComAlibabaOceanOpenplatformBizProductCommonModelSkuIntelligentInfo;

class ComAlibabaOceanOpenplatformBizProductCommonModelProductIntelligentInfo extends SDKDomain
{
    private $title;
    
    /**
    * @return 算法优化后的商品标题
    */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * 设置算法优化后的商品标题
     * @param String $title
     * 参数示例：<pre>算法优化后的商品标题</pre>
     * 此参数必填     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
            
    private $images;
    
    /**
    * @return 算法优化后的商品图片
    */
    public function getImages()
    {
        return $this->images;
    }
    
    /**
     * 设置算法优化后的商品图片
     * @param array include @see String[] $images
     * 参数示例：<pre>["https://cbu01.alicdn.com/img/ibank/2020/932/210/13529012239_321095253.jpg"]</pre>
     * 此参数必填     */
    public function setImages($images)
    {
        $this->images = $images;
    }
    
            
    private $skuImages;
    
    /**
    * @return 算法优化后的规格图片
    */
    public function getSkuImages()
    {
        return $this->skuImages;
    }
    
    /**
     * 设置算法优化后的规格图片
     * @param array include @see ComAlibabaOceanOpenplatformBizProductCommonModelSkuIntelligentInfo[] $skuImages
     * 参数示例：<pre>[]</pre>
     * 此参数必填     */
    public function setSkuImages(ComAlibabaOceanOpenplatformBizProductCommonModelSkuIntelligentInfo $skuImages)
    {
        $this->skuImages = $skuImages;
    }
    
            
    private $descriptionImages;
    
    /**
    * @return 算法优化后的详情图片
    */
    public function getDescriptionImages()
    {
        return $this->descriptionImages;
    }
    
    /**
     * 设置算法优化后的详情图片
     * @param array include @see String[] $descriptionImages
     * 参数示例：<pre>["https://cbu01.alicdn.com/img/ibank/2020/932/210/13529012239_321095253.jpg"]</pre>
     * 此参数必填     */
    public function setDescriptionImages($descriptionImages)
    {
        $this->descriptionImages = $descriptionImages;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("title", $this->stdResult)) {
            $this->title = $this->stdResult->{"title"};
        }
        if (array_key_exists("images", $this->stdResult)) {
            $this->images = $this->stdResult->{"images"};
        }
        if (array_key_exists("skuImages", $this->stdResult)) {
            $skuImagesResult=$this->stdResult->{"skuImages"};
            $object = json_decode(json_encode($skuImagesResult), true);
            $this->skuImages = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $ComAlibabaOceanOpenplatformBizProductCommonModelSkuIntelligentInfoResult=new ComAlibabaOceanOpenplatformBizProductCommonModelSkuIntelligentInfo();
                $ComAlibabaOceanOpenplatformBizProductCommonModelSkuIntelligentInfoResult->setArrayResult($arrayobject);
                $this->skuImages [$i] = $ComAlibabaOceanOpenplatformBizProductCommonModelSkuIntelligentInfoResult;
            }
        }
        if (array_key_exists("descriptionImages", $this->stdResult)) {
            $this->descriptionImages = $this->stdResult->{"descriptionImages"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("title", $this->arrayResult)) {
            $this->title = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("images", $this->arrayResult)) {
            $this->images = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("skuImages", $this->arrayResult)) {
            $skuImagesResult=$arrayResult['${paramType.paramName}'];
            $this->skuImages = new ComAlibabaOceanOpenplatformBizProductCommonModelSkuIntelligentInfo();
            $this->skuImages->setStdResult($skuImagesResult);
        }
        if (array_key_exists("descriptionImages", $this->arrayResult)) {
            $this->descriptionImages = $arrayResult['${paramType.paramName}'];
        }
    }
}
