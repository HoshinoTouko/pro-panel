<?php
if(!defined('ROOT_PATH')) exit('This file could not be access directly.');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>System Message - <?php echo SITE_NAME; ?></title>
<base href="<?php echo BASE_URL; ?>"/>
<meta name="Robots" content="NOINDEX, NOFOLLOW, NOARCHIVE"/>
<meta name="ViewPort" content="initial-scale=1, minimum-scale=1, width=device-width"/>
<link rel="stylesheet" href="Resource/Misc/Error.css">
</head>
<body>
<p class="title"><?php echo SITE_NAME; ?></p>
<div class="box">
<h2>System Message</h2>
<p class="main selectable"><?php echo $text; ?></p>
<?php if($link !== null) { ?>
<p><a class="redirect" href="<?php echo $link; ?>">If you didn't redirect in <?php echo $timeout; ?> seconds, please click here.</a></p>
<script type="text/javascript">
setTimeout(function(){ location.href = '<?php echo $link; ?>'; }, <?php echo $timeout; ?> * 1000);
</script>
<?php } ?>
</div>
<p class="foot">Powered by KK Framework</p>
</body>
</html>