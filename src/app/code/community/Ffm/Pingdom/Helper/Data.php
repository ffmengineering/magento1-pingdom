<?php
/**
 * Ffm_Pingdom extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 *
 * @category       Ffm
 * @package        Ffm_Pingdom
 * @copyright      Copyright (c) FitForMe B.V. 2016
 * @license        http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0 (OSL-3.0)
 */
/**
 * Helper
 *
 * @category    Ffm
 * @package     Ffm_Pingdom
 * @author      Sander Mangel <s.mangel@fitforme.nl>
 */
class Ffm_Pingdom_Helper_Data extends Mage_Core_Helper_Abstract
{

    const CONFIG_RUM_ACCOUNTID = 'pingdom/rum/account_id';

    /**
     * @param $path
     * @param null $storeId
     * @return mixed
     */
    public function getConfigData($path, $storeId = null)
    {
        if (is_null($storeId)) {
            $storeId = Mage::app()->getStore()->getId();
        }

        return Mage::getStoreConfig($path, $storeId);
    }
}
