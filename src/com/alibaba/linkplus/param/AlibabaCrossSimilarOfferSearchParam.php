<?php

namespace Keyi1688\com\alibaba\linkplus\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaCrossSimilarOfferSearchParam {

        
        /**
    * @return 图片链接
    */
        public function getPicUrl() {
        $tempResult = $this->sdkStdResult["picUrl"];
        return $tempResult;
    }
    
    /**
     * 设置图片链接     
     * @param String $picUrl     
     * 参数示例：<pre>https://xxx.com/xxx.jpg</pre>     
     * 此参数必填     */
    public function setPicUrl( $picUrl) {
        $this->sdkStdResult["picUrl"] = $picUrl;
    }
    
        
        /**
    * @return 页号，从1开始
    */
        public function getPage() {
        $tempResult = $this->sdkStdResult["page"];
        return $tempResult;
    }
    
    /**
     * 设置页号，从1开始     
     * @param Integer $page     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPage( $page) {
        $this->sdkStdResult["page"] = $page;
    }
    
        
        /**
    * @return 最低价格（逻辑为大于等于），用于筛选，可支持小数，可空
    */
        public function getPriceMin() {
        $tempResult = $this->sdkStdResult["priceMin"];
        return $tempResult;
    }
    
    /**
     * 设置最低价格（逻辑为大于等于），用于筛选，可支持小数，可空     
     * @param String $priceMin     
     * 参数示例：<pre>10.50</pre>     
     * 此参数必填     */
    public function setPriceMin( $priceMin) {
        $this->sdkStdResult["priceMin"] = $priceMin;
    }
    
        
        /**
    * @return 最高价格（逻辑为小于等于），用于筛选，可支持小数，可空
    */
        public function getPriceMax() {
        $tempResult = $this->sdkStdResult["priceMax"];
        return $tempResult;
    }
    
    /**
     * 设置最高价格（逻辑为小于等于），用于筛选，可支持小数，可空     
     * @param String $priceMax     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setPriceMax( $priceMax) {
        $this->sdkStdResult["priceMax"] = $priceMax;
    }
    
        
        /**
    * @return 排序字段，格式为price:asc,sale_amount:desc，分别代表价格升序和销量倒序，多个用英文逗号隔开。目前仅支持价格和销量排序
    */
        public function getSortFields() {
        $tempResult = $this->sdkStdResult["sortFields"];
        return $tempResult;
    }
    
    /**
     * 设置排序字段，格式为price:asc,sale_amount:desc，分别代表价格升序和销量倒序，多个用英文逗号隔开。目前仅支持价格和销量排序     
     * @param String $sortFields     
     * 参数示例：<pre>price:asc</pre>     
     * 此参数必填     */
    public function setSortFields( $sortFields) {
        $this->sdkStdResult["sortFields"] = $sortFields;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>