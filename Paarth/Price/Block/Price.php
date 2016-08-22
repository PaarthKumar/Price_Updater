<?php
class Paarth_Price_Block_Price extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getPrice()     
     { 
        if (!$this->hasData('price')) {
            $this->setData('price', Mage::registry('price'));
        }
        return $this->getData('price');
        
    }
}