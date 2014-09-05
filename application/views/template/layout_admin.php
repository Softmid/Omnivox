<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<? echo base_url(); ?>"></base>
        <link rel="stylesheet" href="assets/css/admin/main.css">
        <script src="assets/js/min/main-ck.js"></script>
		<title><?php echo $title ?></title>
		<? echo $_styles ?>
        <script type="text/javascript"> 
        var $buoop = {
        reminder: 0,
        l:"es"
        }; 
        $buoop.ol = window.onload; 
        window.onload=function(){ 
        try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
        var e = document.createElement("script"); 
        e.setAttribute("type", "text/javascript"); 
        e.setAttribute("src", "//browser-update.org/update.js"); 
        document.body.appendChild(e); 
        } 
        </script>
	</head>
	<body>
		<?php echo $navbar_admin ?>
		<div class="container">
			<?php echo $content ?>
		</div>
		<?php echo $footer_admin ?>
		<!--- scripts area -->
		<?php echo $_scripts; ?>
	</body>
</html>