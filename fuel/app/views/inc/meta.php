<?php

switch ($page) {
	case "home" :
		$title = "A Company - Title";
		$description = "A Company - Description";
		$keywords = "some, keywords, about, this, company";
	break;	

	default :
		$title = "A Company - Title";
		$description = "A Company - Description";
		$keywords = "some, keywords, about, this, company";
}

// Set global for template
\View::set_global('title', $title);
\View::set_global('keywords', $keywords);
\View::set_global('description', $description);

?>