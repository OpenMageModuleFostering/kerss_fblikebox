<?php

/**
 * Kerss Infotech
 * Kerss Facebook Fanbox Magento Extension
 *
 * @category   Kerss
 * @package    Kerss_Fblikebox
 * @copyright  Copyright © 2015-2016 Kerss Infotech (http://kersstech.com/)
 */
class Kerss_Fblikebox_Helper_Data extends Mage_Core_Helper_Abstract {

    public function getConfigValue($value) {
        $storeid = Mage::app()->getStore()->getStoreId();
        return Mage::getStoreConfig($value, $storeid);
    }

}
