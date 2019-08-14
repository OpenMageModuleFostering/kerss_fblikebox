<?php

/**
 * Kerss Infotech
 * Kerss Facebook Fanbox Magento Extension
 *
 * @category   Kerss
 * @package    Kerss_Fblikebox
 * @copyright  Copyright © 2015-2016 Kerss Infotech (http://kersstech.com/)
 */
class Kerss_Fblikebox_Model_System_Config_Source_Options {

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        return array(
            array('value' => 'true', 'label' => Mage::helper('adminhtml')->__('Yes')),
            array('value' => 'false', 'label' => Mage::helper('adminhtml')->__('No')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray() {
        return array(
            'true' => Mage::helper('adminhtml')->__('Yes'),
            'false' => Mage::helper('adminhtml')->__('No'),
        );
    }

}
