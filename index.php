<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Valentine</title>
    <link href='imgs/heart.png' rel='icon'>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href='css/index.css' rel='stylesheet'>
    <link href='css/index_handheld.css' rel='stylesheet' media='screen and (max-device-height:700px)'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class='container'>
	<div class='panel panel-default'>
	    <h1>Happy Valentine's Day!
		<span class='header-buttons'>
		<button class='btn btn-default header-button' id='page-content-button'>Gallery</button>
		<button class='btn btn-info header-button' data-toggle='modal' data-target='#upload-modal'>Upload Photos</button>
		</span>
	    </h1>
	</div>
	<div id='page_alert'>
	    <?php
	    if($_REQUEST['a'] == 'success') {
		echo "<div class='alert alert-success' role='alert'>File upload was successful!
		<span id='alert-close-button' class='alert-close glyphicon glyphicon-remove'/>
		</div>
		";
	    }
	    ?>
	</div>
	<div id='page_content'>
	    <?php 
		include "carousel.php";
	    ?>
	</div>
    </div>

    <?php include "pu.html"; ?>

    <audio autoplay loop>
	<source src='music/woman_i_love.mp3' type='audio/mpeg'>
    </audio>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Custom js -->
    <script src='js/index.js'></script>
</body>

</html>
