<?php 

	if($_POST) {
		$img = $_POST['img'];
		switch ($img) {
			case '1':
				echo "imgs/naruto.jpg";
				break;
			case '2':
				echo "imgs/gara.jpg";
				break;	
			case '3':
				echo "imgs/sasuke.jpg";
				break;	
			default:
				echo "imgs/noimg.jpg";
				break;
		}
	}

?>