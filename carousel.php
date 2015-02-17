<div class='carousel slide' data-ride='carousel'>
    <div class='carousel-inner' role='listbox'>
	<?php
	$paths = glob("photos/*");

	if( count($paths) == 0 ) {
	    // give a warning
	    echo "<div class='alert alert-warning'><strong>Uh Oh!</strong>    There aren't any photos to show :(</div>";
	}
	else {
	    // first photo is 'active'
	    echo "<div class='item active'><img src=".$paths[0]."></div>";
	    for( $i=1; $i<count($paths); $i++ ) {
		echo "<div class='item'><img src=".$paths[$i]."></div>";
	    }
	}
	?>
    </div>
</div>
