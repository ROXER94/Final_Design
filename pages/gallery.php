<?php 
$page = 'Guild of Visual Arts - Gallery';
include 'header.php';
?>

<!-- all of your code for the main part of the page-->
	<div id="content">
		<?php include 'gallerynav.php'; ?>
		<div id="rightpage">	
			<?php
				$folder = './uploaded_files/';
				$filetype = '*.*';
				$files = glob($folder.$filetype);
				$oppositeorder = array_reverse($files);
				for ($i=0; $i<count($oppositeorder); $i++) {
				    echo '<div class= "imgthumb">';
				    echo '<a name="'.$i.'" href="'.$oppositeorder[$i].'" data-lightbox="maingallery"><img src="'.$oppositeorder[$i].'" alt="img" /></a>';
				    echo '</div>';
				}
			?>
		</div>
	</div>

<?php
include 'footer.php';
?>