<?php

class ComWutTemplateHelperPaginator extends KTemplateHelperPaginator
{

	protected function _pages($pages)
	{
		$html = '<ul class="pages">';

		$html .= '<li class="first">'.$this->_link($pages['first'], 'First').'</li>';
		$html .= '<li class="previous">'.$this->_link($pages['previous'], 'Prev').'</li>';

		foreach($pages['pages'] as $page) {
			$html .= '<li>'.$this->_link($page, $page->page).'</li>';
		}

		$html .= '<li class="next">'.$this->_link($pages['next'], 'Next').'</li>';
		$html .= '<li class="previous">'.$this->_link($pages['last'], 'Last').'</li>';

		$html .= '</ul>';
		return $html;
	}

}