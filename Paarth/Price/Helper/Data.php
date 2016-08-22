<?php

class Paarth_Price_Helper_Data extends Mage_Core_Helper_Abstract
{

             
	 const XML_PATH_ENABLED   = 'priceupdater_configuration/priceupdater_group/priceupdater_enable';
	  
	  const XML_PATH_IP   = 'priceupdater_configuration/priceupdater_group/ipaddress';
 
 
       public function  getEnabled($store = null)
    {
	
	
        return Mage::getStoreConfigFlag(self::XML_PATH_ENABLED, $store);
    }  
	
	
	  public function getIP($store = null)
    {
       
	  
	   return Mage::getStoreConfig(self::XML_PATH_IP, $store);
    }  
	
	
	

public  function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}








	
	
			 
			 

}