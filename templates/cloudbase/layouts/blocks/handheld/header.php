<div id="ja-header" class="main clearfix">
	<?php
	//$siteName = $this->sitename();
	if ($this->getParam('logoType')=='image'): ?>
	<h1 class="logoHandheld">
		<a href="index.php" title="<?php echo $siteName; ?>"><img src="<?php echo 'images/logo/'.$this->getParam('logoType-image-path'); ?>" alt="<?php echo $siteName; ?>" /></a>
	</h1>
	<?php else:
	$logoText = (trim($this->getParam('logoType-text-logoText'))=='') ? $config->sitename : $this->getParam('logoType-text-logoText');
	$sloganText = (trim($this->getParam('sloganText'))=='') ? JText::_('SITE SLOGAN') : $this->getParam('sloganText');	?>
	<div class="logo-text">
		<h1><a href="index.php" title="<?php echo $siteName; ?>"><span><?php echo $logoText; ?></span></a></h1>
		<p class="site-slogan"><?php echo $sloganText;?></p>
	</div>
	<?php endif; ?>
</div>
	