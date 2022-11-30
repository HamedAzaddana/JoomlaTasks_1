<?php

defined('_JEXEC') or die;



/**
 * Welcome After Login
 *
 * @since  1.5
 */
class PlgContentHa_content extends JPlugin
{


	public function onContentPrepare($context, &$article, &$params, $page)
	{
		$from_word = $this->params->get('from_word', '');
		$to_word = $this->params->get('to_word', '');
		if ($from_word && $to_word) {
			$article->text = str_replace($from_word, $to_word, $article->text);
		}
	}
}
