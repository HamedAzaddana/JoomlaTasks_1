<?php

defined('_JEXEC') or die;



/**
 * Welcome After Login
 *
 * @since  1.5
 */
class PlgUserHa_welcome extends JPlugin
{


	public function onUserAfterLogin($options)
	{

		$username = $options['user']->username;
		$welcome_method = $this->params->get('welcome_method', 'toast');
		$msg_format = "%s عزیز، با موفقیت وارد سایت شدید !";
		$data = serialize(array(
			'msg_show' => sprintf($msg_format, $username),
			'welcome_method' => $welcome_method
		));
		$session = JFactory::getSession();
		$session->set('show_msg_login_hamed', $data);
		return true;
	}
}
