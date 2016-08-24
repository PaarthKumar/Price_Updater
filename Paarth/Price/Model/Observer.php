<?php
class Paarth_Price_Model_Observer 
{



    public function modifyFinalPrices(Varien_Event_Observer $observer)
    {
	     
                  
				  
		 $helper = Mage::helper('price');
		
         $moduleEnable = $helper->getEnabled();
	 	 $Ip = $helper->getIP();
		 
		$userIP =  $helper->getUserIP();


		if($moduleEnable == 1  && $Ip == $userIP)
		{
		
	
         $product = $observer->getEvent()->getProduct();
		 
		 $finalPrice=round($product->getFinalPrice(),2);
		  
		 $formattedPrice = Mage::helper('core')->currency($product->getFinalPrice(), false, false);
		 
		 $addition = $formattedPrice*(20/100);
		 
		 $formattedPrice=$formattedPrice+$addition;
		 
	     $formattedPrice= round($formattedPrice,0,PHP_ROUND_HALF_DOWN);
		 
		  
		  $product->setFinalPrice($formattedPrice);
		  
		}
		 
    }
	
	
	public function 	modifyCollectionPrices(Varien_Event_Observer $observer){
	
	     $helper = Mage::helper('price');
		 $moduleEnable = $helper->getEnabled();
	     $Ip = $helper->getIP();
	     $userIP =  $helper->getUserIP();
		
		
	if($moduleEnable == 1  && $Ip == $userIP)
		{
		
	
	            
				$products = $observer->getCollection();
				
				
				
				foreach( $products as $product)
		{
		
		        
		$finalPrice=round($product->getFinalPrice(),2);
		  
		 $formattedPrice = Mage::helper('core')->currency($product->getFinalPrice(), false, false);
		 
		 $addition = $formattedPrice*(20/100);
		 
		 $formattedPrice=$formattedPrice+$addition;
		 
	     $formattedPrice= round($formattedPrice,0,PHP_ROUND_HALF_DOWN);
		 
		 $product->setFinalPrice($formattedPrice);
         $product->setMinimalPrice($formattedPrice);
		
		    
		
		}
				
	}
	
	}
	
	
	
	
	
	
}