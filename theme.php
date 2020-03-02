<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
	<meta name="description" content="<?= $Wcms->page('description') ?>">
	<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
	<?= $Wcms->css()?>

	<link rel="stylesheet" href="<?= $Wcms->asset('css/devsec.css')?>">
	<link rel="stylesheet" href="<?= $Wcms->asset('css/style.css')?>">
</head>

<body>
	<?= $Wcms->settings() ?>
	<?= $Wcms->alerts() ?>
	
	<header>
<a href="#" class="logo">Logo</a> <button>Home</button>
<a href="#" class="button">News</a> <span>|</span>
<button>About</button> <button>Contact</button>
</header>
	
	<?= $Wcms->menu() ?>
	
	<h1>
		<a href="<?= $Wcms->url() ?>">Website home</a>
	</h1>
	
	<?= $Wcms->get('config','siteTitle') ?>
	
	<?= $Wcms->page('content') ?>
	
	<?= $Wcms->block('subside') ?>
	
	<?= $Wcms->footer() ?>
	
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
	<?= $Wcms->js() ?>
</body>
</html>
