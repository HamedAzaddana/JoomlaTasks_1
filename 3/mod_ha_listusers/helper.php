<?php


defined('_JEXEC') or die;




class ModJHaUsersHelper
{

	public static function getListOfUsers($params)
	{
		$limit = (int)$params->get('cnt_last_users', 4);
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select($db->quoteName(array('id', 'name', 'email', 'username','registerDate')));
		$query->from($db->quoteName('#__users'));
		$query->where($db->quoteName('block') . ' = ' . $db->quote('0'));
		$query->order('registerDate DESC');
		$query->setLimit($limit);
		$db->setQuery($query);
		$results = $db->loadObjectList();
		return $results;
	}
}
