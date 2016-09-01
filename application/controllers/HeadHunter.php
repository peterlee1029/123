<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Headhunter extends CI_Controller 
{
	public function index()
	{
		$this->cors_headers();
		$this->load->view('home');
	}	
	public function app($dir="")
	{
		$this->cors_headers();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('app/header');
		switch ($dir) {
			case 'search_result':
				$this->load->view('app/search_result');
				break;
			case 'author_artists':
				$this->load->view('app/author_artists');
				break;
			case 'teacher_info':
				$this->load->view('app/teacher_info');
				break;
			case 'student_info':
				$this->load->view('app/student_info');
				break;								
			// homepage
			default:
				$this->load->view('app/index');
				break;
		}
	}	
	public function search($keyword="")
	{
		$this->cors_headers();
		$this->load->library('parser');
		require_once APPPATH . '/third_party/simple_html_dom.php';
		if($keyword=="")
			$keyword = "iot";
		$scholar_url = "https://scholar.google.com.tw/scholar?hl=zh-TW&q=". $keyword . "&btnG=&lr=";
		/* load url*/
/*
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl, CURLOPT_HEADER, array(
			'Content-type: text/html; charset=UTF-8',
			'Referer:https://scholar.google.com.tw/',
			'Upgrade-Insecure-Requests:1',
			'User-Agent:Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36'
			));
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_URL, $scholar_url);
//		curl_setopt($curl, CURLOPT_REFERER, $scholar_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		//$str = utf8_decode(curl_exec($curl));
		$str = curl_exec($curl);
		curl_close($curl);

		// Create a DOM object
		$dom = new simple_html_dom();
		// Load HTML from a string
		$dom->load($str);
*/		
		$dom = file_get_html($scholar_url);
		$result = $dom->find('div.gs_r');

		$data = array(
		
            'response' => implode(" ",$result)
            );
		$this->parser->parse('search', $data);
		//$this->load->view('search');
	}	

	function cors_headers() //Cross-origin resource sharing
    {
			header('Access-Control-Allow-Origin: *');
//	header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
			header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
			header('Access-Control-Max-Age: 1000');
			header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
    }
	
}
