<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		echo '<script>var site_url="' . base_url() . '"</script>';
		load_file('index');
	}
}
