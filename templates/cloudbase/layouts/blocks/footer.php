<?php if($this->countModules('footer') ||  $this->getParam('footerLogos') == '1') : ?>
<div class="ja-navhelper wrap">
<div class="main clearfix">
    
    <ul class="ja-links">
		<li class="layout-switcher"><?php $this->loadBlock('usertools/layout-switcher') ?>&nbsp;</li>
		<li class="top"><a onclick="window.scrollTo(0,0)" href="#" title="Back to Top">Top</a></li>
	</ul>
	
	<ul class="no-display">
		<li><a href="<?php echo $this->getCurrentURL();?>#ja-content" title="<?php echo JText::_("Skip to content");?>"><?php echo JText::_("Skip to content");?></a></li>
	</ul>

</div>
</div>

<div id="ja-footer" class="wrap">
	<div class="main clearfix">
		<div class="inFooter clearfix">
			<?php if($this->getParam('footerLogos') == '1'): ?>
			<div class="ca-footerleft">
				<a href="http://www.cloudaccess.net">Developed by CloudAccess.net</a>
			</div>
			<?php endif; ?>
			<div class="ca-footermiddle" <?php if($this->getParam('footerLogos') == '0'): ?>style="width: 96%; padding: 0px;"<?php endif; ?>	>
				<div class="ja-copyright">
					<jdoc:include type="modules" name="footer" />
				</div>
				
			</div>
			<?php if($this->getParam('footerLogos') == '1'): ?>
			<div class="ca-footerright">
				<a href="http://t3.joomlart.com">Powered by T3 Framework</a>
			</div>	
			<?php endif; ?>	
		</div>
	</div>
</div>
<?php endif; ?>