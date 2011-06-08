<?php if($this->countModules('breadcrumbs')) : ?>
<div class="ja-breadcrums">
		<strong><?php echo JText::_('You are here')?></strong> <jdoc:include type="module" name="breadcrumbs" />
</div>
<?php endif; ?>
