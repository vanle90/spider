<?php
require (__DIR__.'/simple_html_dom.php');
class DanTriController extends BaseController
{
	private $_base_url = 'http://dantri.com.vn/';
	public function index()
	{
		$html = file_get_html($this->_base_url.'nhip-song-tre.htm');
		$title_pattern = "div.mt3 div.mr1 h2"; // Mẫu lấy phần tiêu đề
		$img = 'div.mt3 a img';
		$des = 'div.mr1 div.fon5';
		$links = 'div.mt3 div.mr1 a';
		$item = array();
		// get title
		foreach($html->find($title_pattern) as $element)
		{
			$item['title'][] = trim($element->plaintext); // Chỉ lấy phần text
		}
		
		// get description
		foreach($html->find($des) as $element)
		{
			$item['description'][] = trim($element->plaintext); // Chỉ lấy phần text
		}
		
		//get images
		foreach($html->find($img) as $img)
		{
			if(strpos($img->src, 'http://dantri21.vcmedia.vn/')!==FALSE)
				$item['images'][] = $img->src;
		}
		
		//get images
		foreach($html->find($links) as $img)
		{
			$item['links'][] = 'http://dantri.com.vn'.trim($img->href);
		}

		$data = array(	'title' => $item['title'],
						'description' => $item['description'],
						'images' => $item['images'],
						'links' => $item['links']
		);
		return View::make('dantri.allpost', $data);
	}
}