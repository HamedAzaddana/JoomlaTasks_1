<?php

defined('_JEXEC') or die;



/**
 * Welcome After Login
 *
 * @since  1.5
 */
class PlgSystemHa_welcome_sys extends JPlugin
{

	public function onAfterRender()
	{
		$session = JFactory::getSession();
		$loginMsg = $session->get('show_msg_login_hamed');

		if ($loginMsg) {
			$data = unserialize($loginMsg);
			$msg_show = $data['msg_show'];
			$welcome_method = $data['welcome_method'] ? $data['welcome_method'] : "toast" ;
			$assets_url = JURI::root() . "plugins/user/ha_welcome/assets/";
			$document = JFactory::getDocument();

			if ($welcome_method == "toast") {
				$this->get_layout_msg("toast", compact('msg_show'));
			}
			if ($welcome_method == "swal") {
				$this->get_layout_msg("swal", compact('msg_show'));
			}
			$session->set('show_msg_login_hamed', null);
			$session->clear('show_msg_login_hamed');
		}
	}
	public function get_layout_msg($view_name, $params = [])
	{
		$layouts_path = JPATH_PLUGINS . "/system/ha_welcome_sys/layouts/";
		if ($params && is_array($params)) {
			extract($params);
		}

		include($layouts_path . "{$view_name}" . ".html.php");
	}
}
