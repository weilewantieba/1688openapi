<?php

namespace Keyi1688\com\alibaba\linkplus\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class LinkProductResult extends SDKDomain {

       	
    private $offerId;
    
        /**
    * @return 商品offerId
    */
        public function getOfferId() {
        return $this->offerId;
    }
    
    /**
     * 设置商品offerId     
     * @param String $offerId     
     * 参数示例：<pre>439143824</pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }
    
        	
    private $subject;
    
        /**
    * @return 商品标题
    */
        public function getSubject() {
        return $this->subject;
    }
    
    /**
     * 设置商品标题     
     * @param String $subject     
     * 参数示例：<pre>手机壳多色可选防摔</pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->subject = $subject;
    }
    
        	
    private $quantityBegin;
    
        /**
    * @return 起批数量
    */
        public function getQuantityBegin() {
        return $this->quantityBegin;
    }
    
    /**
     * 设置起批数量     
     * @param Long $quantityBegin     
     * 参数示例：<pre>3</pre>     
     * 此参数必填     */
    public function setQuantityBegin( $quantityBegin) {
        $this->quantityBegin = $quantityBegin;
    }
    
        	
    private $unit;
    
        /**
    * @return 单位
    */
        public function getUnit() {
        return $this->unit;
    }
    
    /**
     * 设置单位     
     * @param String $unit     
     * 参数示例：<pre>个、件</pre>     
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }
    
        	
    private $oldPrice;
    
        /**
    * @return 原价
    */
        public function getOldPrice() {
        return $this->oldPrice;
    }
    
    /**
     * 设置原价     
     * @param Long $oldPrice     
     * 参数示例：<pre>628</pre>     
     * 此参数必填     */
    public function setOldPrice( $oldPrice) {
        $this->oldPrice = $oldPrice;
    }
    
        	
    private $price;
    
        /**
    * @return 活动价
    */
        public function getPrice() {
        return $this->price;
    }
    
    /**
     * 设置活动价     
     * @param Double $price     
     * 参数示例：<pre>528</pre>     
     * 此参数必填     */
    public function setPrice( $price) {
        $this->price = $price;
    }
    
        	
    private $imageUrl;
    
        /**
    * @return 主图地址
    */
        public function getImageUrl() {
        return $this->imageUrl;
    }
    
    /**
     * 设置主图地址     
     * @param String $imageUrl     
     * 参数示例：<pre>https://xxx/xxx.png</pre>     
     * 此参数必填     */
    public function setImageUrl( $imageUrl) {
        $this->imageUrl = $imageUrl;
    }
    
        	
    private $videoUrl;
    
        /**
    * @return 主视频地址
    */
        public function getVideoUrl() {
        return $this->videoUrl;
    }
    
    /**
     * 设置主视频地址     
     * @param String $videoUrl     
     * 参数示例：<pre>https://xxx/xxx.mp4</pre>     
     * 此参数必填     */
    public function setVideoUrl( $videoUrl) {
        $this->videoUrl = $videoUrl;
    }
    
        	
    private $deliveryFree;
    
        /**
    * @return 是否包邮
    */
        public function getDeliveryFree() {
        return $this->deliveryFree;
    }
    
    /**
     * 设置是否包邮     
     * @param Boolean $deliveryFree     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setDeliveryFree( $deliveryFree) {
        $this->deliveryFree = $deliveryFree;
    }
    
        	
    private $detailUrl;
    
        /**
    * @return 商品详情页
    */
        public function getDetailUrl() {
        return $this->detailUrl;
    }
    
    /**
     * 设置商品详情页     
     * @param String $detailUrl     
     * 参数示例：<pre>https://xxx/xxx.html</pre>     
     * 此参数必填     */
    public function setDetailUrl( $detailUrl) {
        $this->detailUrl = $detailUrl;
    }
    
        	
    private $best;
    
        /**
    * @return 是否镇店之宝
    */
        public function getBest() {
        return $this->best;
    }
    
    /**
     * 设置是否镇店之宝     
     * @param Boolean $best     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setBest( $best) {
        $this->best = $best;
    }
    
        	
    private $shili;
    
        /**
    * @return 是否实力商家
    */
        public function getShili() {
        return $this->shili;
    }
    
    /**
     * 设置是否实力商家     
     * @param Boolean $shili     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setShili( $shili) {
        $this->shili = $shili;
    }
    
        	
    private $saleAmount;
    
        /**
    * @return 已售数量
    */
        public function getSaleAmount() {
        return $this->saleAmount;
    }
    
    /**
     * 设置已售数量     
     * @param Long $saleAmount     
     * 参数示例：<pre>887</pre>     
     * 此参数必填     */
    public function setSaleAmount( $saleAmount) {
        $this->saleAmount = $saleAmount;
    }
    
        	
    private $wantBuy;
    
        /**
    * @return 多少人想买
    */
        public function getWantBuy() {
        return $this->wantBuy;
    }
    
    /**
     * 设置多少人想买     
     * @param Long $wantBuy     
     * 参数示例：<pre>599</pre>     
     * 此参数必填     */
    public function setWantBuy( $wantBuy) {
        $this->wantBuy = $wantBuy;
    }
    
        	
    private $services;
    
        /**
    * @return 优惠信息
    */
        public function getServices() {
        return $this->services;
    }
    
    /**
     * 设置优惠信息     
     * @param array include @see String[] $services     
     * 参数示例：<pre>满200减20、包邮</pre>     
     * 此参数必填     */
    public function setServices( $services) {
        $this->services = $services;
    }
    
        	
    private $countryEn;
    
        /**
    * @return 产地的英文标识
    */
        public function getCountryEn() {
        return $this->countryEn;
    }
    
    /**
     * 设置产地的英文标识     
     * @param String $countryEn     
     * 参数示例：<pre>TaiLand</pre>     
     * 此参数必填     */
    public function setCountryEn( $countryEn) {
        $this->countryEn = $countryEn;
    }
    
        	
    private $countryCn;
    
        /**
    * @return 产地的中文标识
    */
        public function getCountryCn() {
        return $this->countryCn;
    }
    
    /**
     * 设置产地的中文标识     
     * @param String $countryCn     
     * 参数示例：<pre>泰国</pre>     
     * 此参数必填     */
    public function setCountryCn( $countryCn) {
        $this->countryCn = $countryCn;
    }
    
        	
    private $province;
    
        /**
    * @return 卖家所在省
    */
        public function getProvince() {
        return $this->province;
    }
    
    /**
     * 设置卖家所在省     
     * @param String $province     
     * 参数示例：<pre>浙江省</pre>     
     * 此参数必填     */
    public function setProvince( $province) {
        $this->province = $province;
    }
    
        	
    private $city;
    
        /**
    * @return 卖家所在市
    */
        public function getCity() {
        return $this->city;
    }
    
    /**
     * 设置卖家所在市     
     * @param String $city     
     * 参数示例：<pre>杭州市</pre>     
     * 此参数必填     */
    public function setCity( $city) {
        $this->city = $city;
    }
    
        	
    private $supplyAmount;
    
        /**
    * @return 库存
    */
        public function getSupplyAmount() {
        return $this->supplyAmount;
    }
    
    /**
     * 设置库存     
     * @param Long $supplyAmount     
     * 参数示例：<pre>2000</pre>     
     * 此参数必填     */
    public function setSupplyAmount( $supplyAmount) {
        $this->supplyAmount = $supplyAmount;
    }
    
        	
    private $categoryId;
    
        /**
    * @return 一级类目id
    */
        public function getCategoryId() {
        return $this->categoryId;
    }
    
    /**
     * 设置一级类目id     
     * @param String $categoryId     
     * 参数示例：<pre>xx</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->categoryId = $categoryId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "offerId", $this->stdResult )) {
    				$this->offerId = $this->stdResult->{"offerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "subject", $this->stdResult )) {
    				$this->subject = $this->stdResult->{"subject"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantityBegin", $this->stdResult )) {
    				$this->quantityBegin = $this->stdResult->{"quantityBegin"};
    			}
    			    		    				    			    			if (array_key_exists ( "unit", $this->stdResult )) {
    				$this->unit = $this->stdResult->{"unit"};
    			}
    			    		    				    			    			if (array_key_exists ( "oldPrice", $this->stdResult )) {
    				$this->oldPrice = $this->stdResult->{"oldPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "price", $this->stdResult )) {
    				$this->price = $this->stdResult->{"price"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageUrl", $this->stdResult )) {
    				$this->imageUrl = $this->stdResult->{"imageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "videoUrl", $this->stdResult )) {
    				$this->videoUrl = $this->stdResult->{"videoUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "deliveryFree", $this->stdResult )) {
    				$this->deliveryFree = $this->stdResult->{"deliveryFree"};
    			}
    			    		    				    			    			if (array_key_exists ( "detailUrl", $this->stdResult )) {
    				$this->detailUrl = $this->stdResult->{"detailUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "best", $this->stdResult )) {
    				$this->best = $this->stdResult->{"best"};
    			}
    			    		    				    			    			if (array_key_exists ( "shili", $this->stdResult )) {
    				$this->shili = $this->stdResult->{"shili"};
    			}
    			    		    				    			    			if (array_key_exists ( "saleAmount", $this->stdResult )) {
    				$this->saleAmount = $this->stdResult->{"saleAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "wantBuy", $this->stdResult )) {
    				$this->wantBuy = $this->stdResult->{"wantBuy"};
    			}
    			    		    				    			    			if (array_key_exists ( "services", $this->stdResult )) {
    				$this->services = $this->stdResult->{"services"};
    			}
    			    		    				    			    			if (array_key_exists ( "countryEn", $this->stdResult )) {
    				$this->countryEn = $this->stdResult->{"countryEn"};
    			}
    			    		    				    			    			if (array_key_exists ( "countryCn", $this->stdResult )) {
    				$this->countryCn = $this->stdResult->{"countryCn"};
    			}
    			    		    				    			    			if (array_key_exists ( "province", $this->stdResult )) {
    				$this->province = $this->stdResult->{"province"};
    			}
    			    		    				    			    			if (array_key_exists ( "city", $this->stdResult )) {
    				$this->city = $this->stdResult->{"city"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplyAmount", $this->stdResult )) {
    				$this->supplyAmount = $this->stdResult->{"supplyAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "categoryId", $this->stdResult )) {
    				$this->categoryId = $this->stdResult->{"categoryId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
        
				    		    			if (array_key_exists ( "offerId", $this->arrayResult )) {
    			$this->offerId = $arrayResult['offerId'];
    			}
    		    	    			    		    			if (array_key_exists ( "subject", $this->arrayResult )) {
    			$this->subject = $arrayResult['subject'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantityBegin", $this->arrayResult )) {
    			$this->quantityBegin = $arrayResult['quantityBegin'];
    			}
    		    	    			    		    			if (array_key_exists ( "unit", $this->arrayResult )) {
    			$this->unit = $arrayResult['unit'];
    			}
    		    	    			    		    			if (array_key_exists ( "oldPrice", $this->arrayResult )) {
    			$this->oldPrice = $arrayResult['oldPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "price", $this->arrayResult )) {
    			$this->price = $arrayResult['price'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageUrl", $this->arrayResult )) {
    			$this->imageUrl = $arrayResult['imageUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "videoUrl", $this->arrayResult )) {
    			$this->videoUrl = $arrayResult['videoUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "deliveryFree", $this->arrayResult )) {
    			$this->deliveryFree = $arrayResult['deliveryFree'];
    			}
    		    	    			    		    			if (array_key_exists ( "detailUrl", $this->arrayResult )) {
    			$this->detailUrl = $arrayResult['detailUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "best", $this->arrayResult )) {
    			$this->best = $arrayResult['best'];
    			}
    		    	    			    		    			if (array_key_exists ( "shili", $this->arrayResult )) {
    			$this->shili = $arrayResult['shili'];
    			}
    		    	    			    		    			if (array_key_exists ( "saleAmount", $this->arrayResult )) {
    			$this->saleAmount = $arrayResult['saleAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "wantBuy", $this->arrayResult )) {
    			$this->wantBuy = $arrayResult['wantBuy'];
    			}
    		    	    			    		    			if (array_key_exists ( "services", $this->arrayResult )) {
    			$this->services = $arrayResult['services'];
    			}
    		    	    			    		    			if (array_key_exists ( "countryEn", $this->arrayResult )) {
    			$this->countryEn = $arrayResult['countryEn'];
    			}
    		    	    			    		    			if (array_key_exists ( "countryCn", $this->arrayResult )) {
    			$this->countryCn = $arrayResult['countryCn'];
    			}
    		    	    			    		    			if (array_key_exists ( "province", $this->arrayResult )) {
    			$this->province = $arrayResult['province'];
    			}
    		    	    			    		    			if (array_key_exists ( "city", $this->arrayResult )) {
    			$this->city = $arrayResult['city'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplyAmount", $this->arrayResult )) {
    			$this->supplyAmount = $arrayResult['supplyAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "categoryId", $this->arrayResult )) {
    			$this->categoryId = $arrayResult['categoryId'];
    			}
    		    	    		}
 
   
}
?>