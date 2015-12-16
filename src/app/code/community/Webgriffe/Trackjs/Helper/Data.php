<?php

class Webgriffe_Trackjs_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @return bool
     */
    public function isEnabled()
    {
        return Mage::getStoreConfigFlag('dev/trackjs/enabled');
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return (string)Mage::getStoreConfig('dev/trackjs/token');
    }
}
