<?php
class Paarth_Price_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/price?id=15 
    	 *  or
    	 * http://site.com/price/id/15 	
    	 */
    	/* 
		$price_id = $this->getRequest()->getParam('id');

  		if($price_id != null && $price_id != '')	{
			$price = Mage::getModel('price/price')->load($price_id)->getData();
		} else {
			$price = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($price == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$priceTable = $resource->getTableName('price');
			
			$select = $read->select()
			   ->from($priceTable,array('price_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$price = $read->fetchRow($select);
		}
		Mage::register('price', $price);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}