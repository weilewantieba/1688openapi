<?php

namespace Keyi1688\com\alibaba\linkplus\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class LinkResultModel extends SDKDomain {

       	
    private $total;
    
        /**
    * @return 数据总量
    */
        public function getTotal() {
        return $this->total;
    }
    
    /**
     * 设置数据总量     
     * @param Integer $total     
     * 参数示例：<pre>300</pre>     
     * 此参数必填     */
    public function setTotal( $total) {
        $this->total = $total;
    }
    
        	
    private $page;
    
        /**
    * @return 当前页，从1开始
    */
        public function getPage() {
        return $this->page;
    }
    
    /**
     * 设置当前页，从1开始     
     * @param Integer $page     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPage( $page) {
        $this->page = $page;
    }
    
        	
    private $pageSize;
    
        /**
    * @return 每页记录数
    */
        public function getPageSize() {
        return $this->pageSize;
    }
    
    /**
     * 设置每页记录数     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->pageSize = $pageSize;
    }
    
        	
    private $offerIds;
    
        /**
    * @return 商品id列表
    */
        public function getOfferIds() {
        return $this->offerIds;
    }
    
    /**
     * 设置商品id列表     
     * @param array include @see String[] $offerIds     
     * 参数示例：<pre>[123,456,789]</pre>     
     * 此参数必填     */
    public function setOfferIds( $offerIds) {
        $this->offerIds = $offerIds;
    }
    
        	
    private $result;
    
        /**
    * @return 商品详情列表
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置商品详情列表     
     * @param array include @see LinkProductResult[] $result     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setResult(LinkProductResult $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "total", $this->stdResult )) {
    				$this->total = $this->stdResult->{"total"};
    			}
    			    		    				    			    			if (array_key_exists ( "page", $this->stdResult )) {
    				$this->page = $this->stdResult->{"page"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageSize", $this->stdResult )) {
    				$this->pageSize = $this->stdResult->{"pageSize"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerIds", $this->stdResult )) {
    				$this->offerIds = $this->stdResult->{"offerIds"};
    			}
    			    		    				    			    			if (array_key_exists ( "result", $this->stdResult )) {
    			$resultResult=$this->stdResult->{"result"};
    				$object = json_decode ( json_encode ( $resultResult ), true );
					$this->result = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new \ArrayObject ( $object [$i] );
						$LinkProductResultResult=new LinkProductResult();
						$LinkProductResultResult->setArrayResult($arrayobject );
						$this->result [$i] = $LinkProductResultResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "total", $this->arrayResult )) {
    			$this->total = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "page", $this->arrayResult )) {
    			$this->page = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageSize", $this->arrayResult )) {
    			$this->pageSize = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerIds", $this->arrayResult )) {
    			$this->offerIds = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			$this->result = new LinkProductResult();
    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}
 
   
}
?>