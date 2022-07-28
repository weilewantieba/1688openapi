<?php

namespace Keyi1688\com\alibaba\product\param;
use Keyi1688\Arrayable;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
class AlibabaProductProductImageInfo extends SDKDomain
{
    use Arrayable;
    private $images;

    /**
    * @return 主图列表，使用相对路径，需要增加域名：https://cbu01.alicdn.com/
    */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * 设置主图列表，使用相对路径，需要增加域名：https://cbu01.alicdn.com/
     * @param array include @see String[] $images
     * 参数示例：<pre>["img/ibank/2014/766/624/1652426667_642119312.jpg","img/ibank/2014/656/624/1652426656_642119312.jpg","img/ibank/2014/236/624/1652426632_642119312.jpg"]</pre>
     * 此参数必填     */
    public function setImages($images)
    {
        $this->images = $images;
    }


    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("images", $this->stdResult)) {
            $this->images = $this->stdResult->{"images"};
        }
    }

    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("images", $this->arrayResult)) {
            $this->images = $arrayResult['${paramType.paramName}'];
        }
    }
}
