<?php
$paths = glob("photos/*");

if( count($paths) == 0 ) {
    echo "<div class='alert alert-warning'><strong>Uh Oh!</strong>    There aren't any photos to show:(</div>";
}
else {
    for($i=0; $i<count($paths); $i++) {
	if($i % 4 == 0)
	    echo "<div class='row'>";

	echo "<div class='col-md-3'><img class='img-thumbnail' src=".$paths[$i]."></div>";

	if(($i+1) % 4 == 0)
	    echo "</div>";
    }
}
?>
