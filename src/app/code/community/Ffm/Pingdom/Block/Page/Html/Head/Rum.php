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
 * Rum head block
 *
 * @category    Ffm
 * @package     Ffm_Pingdom
 * @author      Sander Mangel <s.mangel@fitforme.nl>
 */
class Ffm_Pingdom_Block_Page_Html_Head_Rum extends Mage_Core_Block_Template
{
    /**
     * @return mixed
     */
    public function getRumAccountId()
    {
        return Mage::helper('ffm_pingdom')->getConfigData(Ffm_Pingdom_Helper_Data::CONFIG_RUM_ACCOUNTID);
    }
}
