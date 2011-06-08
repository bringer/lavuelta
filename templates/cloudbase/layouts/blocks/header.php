<div id="ja-header" class="wrap">
	<div class="main">
		<div class="inner clearfix">
	    	<?php
	    	$siteName = $this->sitename();
	    	if ($this->getParam('logoType')=='image'): ?>
	    	<h1 class="logo">
	    	<?php if($this->getParam('logoType-image-path') == '-1') : ?>
				<a href="index.php" title="<?php echo $siteName; ?>"><img src="templates/cloudbase/images/logo/logo-cloud.png" alt="<?php echo $siteName; ?>" /></a>
	    	<?php endif; ?>
	    	<?php if($this->getParam('logoType-image-path') == '0') : ?>
				<a href="index.php" title="<?php echo $siteName; ?>"><img src="templates/cloudbase/images/logo/logo-cloud.png" alt="<?php echo $siteName; ?>" /></a>
	    	<?php endif; ?>
	    	<?php if($this->getParam('logoType-image-path') == '') : ?>
				<a href="index.php" title="<?php echo $siteName; ?>"><img src="templates/cloudbase/images/logo/logo-cloud.png" alt="<?php echo $siteName; ?>" /></a>
	    	<?php endif; ?>
	    	<?php if(($this->getParam('logoType-image-path') != '') && ($this->getParam('logoType-image-path') != '0') && ($this->getParam('logoType-image-path') != '-1') ) : ?>
				<a href="index.php" title="<?php echo $siteName; ?>"><img src="images/logo/<?php if($this->getParam('logoType-image-path') != ''){echo $this->getParam('logoType-image-path');} ?>" alt="<?php echo $siteName; ?>" /></a>
	    	<?php endif; ?>
	    	
	    	</h1>
	    	<?php else:
	    	$logoText = (trim($this->getParam('logoType-text-logoText'))=='') ? $config->sitename : $this->getParam('logoType-text-logoText');
	    	$sloganText = (trim($this->getParam('logoType-text-sloganText'))=='') ? JText::_('SITE SLOGAN') : $this->getParam('logoType-text-sloganText');?>
	    	<div class="logo-text">
	    		<h1><a href="index.php" title="<?php echo $siteName; ?>"><span><?php echo $logoText; ?></span></a></h1>
	    		<?php if($sloganText != 'SITE SLOGAN') : ?><p class="site-slogan"><?php echo $sloganText;?></p><?php endif; ?>
	    	</div>
	    	<?php endif; ?>
	    	
	    	<?php if($this->getParam('fontResizer') != '0'): ?>
	    	<div id="usertoolWrapper" <?php if(!$this->countModules('search')) : ?>style="background: none;"<?php endif; ?>>
	    		<?php $this->loadBlock('usertools/font') ?>
	    	</div>
	    	<?php endif; ?>
	    	
	    	<?php if($this->countModules('search')) : ?>
	    	<div id="searchWrapper">
	    		<div id="ja-search">
	    			<jdoc:include type="modules" name="search" />
	    		</div>
	    	</div>
	    	<?php endif; ?>
	    </div>
	</div>
</div>
