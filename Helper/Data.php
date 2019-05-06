<?php
/**
 * Avatar
 * 
 * @author Magenuts Team
 */
namespace Magenuts\Avatar\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
use \Magento\Store\Model\ScopeInterface;
class Data extends AbstractHelper {
	public static function getCustomerAvatarById($id){
		$block = \Magento\Framework\App\ObjectManager::getInstance()->create('Magenuts\Avatar\Block\Customer\Account\Avatar');
		$block->getCustomer($id);
		return $block->getAvatar();
	}
}