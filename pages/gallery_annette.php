<?php 
$page = 'Guild of Visual Arts - Gallery';
include 'header.php';
$membername = 'AnnetteWang';
?>

<!-- all of your code for the main part of the page-->
	<div id="content">
		<?php include 'gallerynav.php'; ?>
		<div id="rightpage">	
			<div id="memberprofile">
				<img src="../images/AnnetteWang.JPG" alt="profile" height="200">
			</div>
			<div id="membertext">
				<h3>Annette Wang</h3>
				<p>Annette is the Vice President of Activities and Events of the Guild and a bio major.</p>
			</div>
			<div id="thumbnails">
				<?php
				$folder = './uploaded_files/';
				$filetype = '*.*';
				$files = glob($folder.$filetype);
				$oppositeorder = array_reverse($files);
				for ($i=0; $i<count($oppositeorder); $i++) {
					if (strpos($oppositeorder[$i], $membername) !== FALSE){
				    echo '<div class= "imgthumb">';
				    echo '<a name="'.$i.'" href="'.$oppositeorder[$i].'" data-lightbox="maingallery"><img src="'.$oppositeorder[$i].'" alt="img" /></a>';
				    echo '</div>';
					}
				}
			?>
		</div>
	</div>
</div>


<?php
include 'footer.php';
?>