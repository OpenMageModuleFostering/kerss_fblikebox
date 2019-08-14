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
     * Provide available options as a value/label array
     *
     * @return array
     */
    public function toOptionArray() {
        return array(
            array('value' => 'true', 'label' => 'Yes'),
            array('value' => 'false', 'label' => 'No'),
        );
    }

}
