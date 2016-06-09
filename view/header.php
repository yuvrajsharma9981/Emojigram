<!DOCTYPE HTML>
<html>
	<head>	
	    <title>Emojigram</title>
	    
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    
            <!--for the style of all the pages-->
	    <link href="../css/header.css" rel="stylesheet" type="text/css">
	    <link href="../css/footer.css" rel="stylesheet" type="text/css">
	    <link href="../css/entry.css" rel="stylesheet" type="text/css">
	    <link href="../css/reset.css" rel="stylesheet" type="text/css">
            <link href="../css/mystyle.css" rel="stylesheet" type="text/css">
	    
	    <!--for the favicon-->
	    <link rel="apple-touch-icon" sizes="57x57" href="../image/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="../image/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../image/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="../image/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../image/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="../image/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="../image/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="../image/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="../image/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="../image/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../image/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="../image/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../image/favicon/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="../image/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">  
	    
	    <!--for the google fonts-->
	    
	    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet' type='text/css'>
	    
            <!--CDN for the alerts-->
	    <script src="https://cdn.rawgit.com/t4t5/sweetalert/master/dist/sweetalert.min.js"></script>
            <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/t4t5/sweetalert/master/dist/sweetalert.css">
	
            <!--CDN for the emojis-->   
            <script src="//cdn.jsdelivr.net/emojione/2.1.4/lib/js/emojione.min.js"></script>
            <link rel="stylesheet" href="//cdn.jsdelivr.net/emojione/2.1.4/assets/css/emojione.min.css"/>

	</head>
<body>
	
	<div class="nav">
		<div class="logo"><object data="../image/favicon.svg" type="image/svg+xml"></object></div>
		<ul class="tabs">
			<li><a href='http://emojione.com/'>ABOUT</a></li>
			<li><a href='https://www.cs.drexel.edu/~tat82/final/control/index.php'>PLAY</a></li>
			<li><a href='https://www.cs.drexel.edu/~tat82/final/view/add.php'>+NEW</a></li>
		</ul>
	</div>
	
	
<div class="phrase_wrap">
	<div class="submit-feedback_blue"><p>Play Emojigram!</p></div>
	<br/><br/><br/>
	
	<script type="text/javascript">
          // javascript to convert the shortnames in the database to the emoticons image
          function convert(id) {
          	
            var input = document.getElementById('input'+id).value;
            
            var output = emojione.shortnameToImage(input);
            
            document.getElementById('output'+id).innerHTML = output;
            
            
          }
        </script>
	


