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

class Diazwatson_NacexTracking_Model_Observer
{

	public function patata(Varien_Event_Observer $observer) {


		/**
		 * @var $tracks Mage_Sales_Model_Resource_Order_Shipment_Track_Collection
		 */
		$tracks = $observer->getEvent()->getOrderShipmentTrackCollection()->getItems();


			foreach($tracks as $track)
			{

				if($track->getData('carrier_code') == 'nacex')
				{

					list($agencia, $albaran) = explode('/',$track->getData('track_number'));

					$link = "<a href='https://www.nacex.es/seguimientoDetalle.do?agencia_origen=" . $agencia . "&numero_albaran=" .  $albaran ."&estado=1&internacional=0&externo=N&usr=null&pas=null'>Tracking</a>";

					$this->getTrackingPopupUrlBySalesModel($link);
				}

			}

	}

	public function getTrackingPopupUrlBySalesModel($link)
	{

		return $link;
	}
}