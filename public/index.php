<?php
// XAMPP's PHP throws an error if $switch isn't set before the switch
ini_set("display_errors", 0);

// Include the template class
include_once('templateEngine.php');

// Initialize the object
$page = new Template();



// Start the switch for each page
switch ($_GET['page']) {
	case 'galleries':
		$page->title = "Galleries";
		break;


	case 'gallery':
		$page->gallery_name = $_GET['gallery'];
		$page->type = "gallery";
		$page->title = ucfirst($page->gallery_name);

		// It's embarassing that you code this poorly. This was a quick workaround because I wanted the URls to fall down gracefully,
		// e.g. /gallery/ /gallery/street/ /gallery/street/3/. There HAS to be a better way to do this though. Break apart the URL by slashes?
		if ($page->gallery_name == 'street') {
			// Then, check to see if a number exists in the URL, if so, display an image instead of a gallery
			if ($_GET['street']) {
				// All of this stuff is just duplicated again under 'alternative' -- come up with a better way to do this! DRY!
				$page->gallery = "Street";
				$page->type = "photo";
				$page->photo_number = $_GET['street'];
				$page->title = $page->photo_number;
				$page->title .= " | " . ucfirst($page->gallery_name);
				$page->img_url = $page->gallery_name . "/" . $page->photo_number . ".jpg";
				$page->content = $page->render('pages/view_photo.php');
			} else {
				$page->content = $page->render('pages/gallery-street.php');
			}
		}

		if ($page->gallery_name == 'alternative') {
			$page->gallery = "Alternative";
			if ($_GET['alternative']) {
				$page->type = "photo";
				$page->photo_number = $_GET['alternative'];
				$page->title = $page->photo_number;
				$page->title .= " | " . ucfirst($page->gallery_name);
				$page->img_url = $page->gallery_name . "/" . $page->photo_number . ".jpg";
				$page->content = $page->render('pages/view_photo.php');
			} else {
				$page->content = $page->render('pages/gallery-alternative.php');
			}
		}

		if ($page->gallery_name == 'fractured-time') {
			$page->gallery = "Fractured Time";
			if ($_GET['fractured-time']) {
				$page->type = "photo";
				$page->photo_number = $_GET['fractured-time'];
				$page->title = "$page->photo_number";
				$page->title .= " | " . ucfirst($page->gallery_name);
				$page->img_url = $page->gallery_name . "/" . $page->photo_number . ".jpg";
				$page->content = $page->render('pages/view_photo.php');
			} else {
				$page->content = $page->render('pages/gallery-fractured_time.php');
			}
		}

		break;


	case 'about':
		$page->type = "about";
		$page->title = "About";
		$page->content = $page->render('pages/about.php');
		break;

	case 'resume':
		$page->type = "about";
		$page->title = "Resume";
		$page->content = $page->render('pages/resume.php');
		break;


	default:
		$page->type = "homepage";
		$page->content = $page->render('pages/homepage.php');
		break;
}

echo $page->render('template.php');

?>
