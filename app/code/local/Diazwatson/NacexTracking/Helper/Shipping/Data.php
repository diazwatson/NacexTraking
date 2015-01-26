<?php
/**
 * Namespace_Modulename
 *
 * @category    Namespace
 * @package     Namespace_Modulename
 * @Date        01/2015
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * @author      @diazwatson
 */

class Diazwatson_NacexTracking_Helper_Shipping_Data extends Mage_Shipping_Helper_Data
{
	/**
	 * Shipping tracking popup URL getter
	 *
	 * @param Mage_Sales_Model_Abstract $model
	 * @return string
	 */
	public function getTrackingPopupUrlBySalesModel($model)
	{

		return 'patata';
	}
}