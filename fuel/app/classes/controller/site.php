<?php

class Controller_Site extends Controller_Template
{

	public function before() 
	{

		// Get URI parts...
		$this->uri_segments = Request::main()->uri->get_segments();
		$this->uri = implode('/', $this->uri_segments);

		parent::before();
	}

	public function action_index()
	{ 

		try {

			// If no uri is supplied, use home as default...
			$this->uri = strlen($this->uri) > 0 ? $this->uri : 'home';

			// Determine page title... (assuming dashed naming convention)
			$page_title = strtolower(str_replace('-', ' ', $this->uri));

			// Set content and try to load view
	        $this->template->content = \View::forge($this->uri);
	        View::set_global('page', $page_title);

	    } 
	    catch (Exception $e) {

	    	// Templated 404
			$this->template->title = 'Page not found!';
	        $this->template->content = \View::forge('404');
	        View::set_global('page', '404');

	    }

	    // option to load view with no template
	    if (isset($_GET['notemplate'])) {
			$this->auto_render = false;
			return \Response::forge($this->template->content);
		}
	}

	public function after($response)
    {
    	// Load inc/meta. 
		View::forge('inc/meta')->render();
		return parent::after($response);
    }
}
