<jdoc:include type="head" />
<?php JHTML::_('behavior.mootools'); ?>

<link rel="stylesheet" href="<?php echo $this->baseurl(); ?>templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl(); ?>templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->templateurl(); ?>/css/addons.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->templateurl(); ?>/css/layout.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->templateurl(); ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->templateurl(); ?>/css/typo.css" type="text/css" />

<!--[if IE]>
<link rel="stylesheet" href="<?php echo $this->templateurl(); ?>/css/ie.css" type="text/css" />
<![endif]-->

<!--[if lt IE 7.0]>
<link rel="stylesheet" href="<?php echo $this->templateurl(); ?>/css/ie7minus.css" type="text/css" />
<style>
.main { width: expression(document.body.clientWidth < 770? "770px" : document.body.clientWidth > 1200? "1200px" : "auto"); }
</style>
<![endif]-->

<!--[if IE 7.0]>
<style>
.clearfix { display: inline-block; } /* IE7xhtml*/
</style>
<![endif]-->

<script type="text/javascript">
var siteurl='<?php echo $this->baseurl();?>';
var tmplurl='<?php echo $this->templateurl();?>';
</script>

<script language="javascript" type="text/javascript" src="<?php echo $this->templateurl(); ?>/js/ja.script.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->templateurl(); ?>/js/ja.ddmod.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->templateurl(); ?>/js/height.js"></script>

<?php if (($jamenu = $this->loadMenu())) $jamenu->genMenuHead (); ?>

<?php if ($this->isIE()) {  ?>
<!--[if lte IE 6]>
<script type="text/javascript">
window.addEvent ('load', makeTransBG);
function makeTransBG() {
makeTransBg($$('img'));
}
</script>
<![endif]-->
<?php } ?>

<?php if ($this->getParam('rightCollapsible')): ?>
<script language="javascript" type="text/javascript">
var rightCollapseDefault='<?php echo $this->getParam('rightCollapsible-1-rightCollapseDefault'); ?>';
var excludeModules='<?php echo $this->getParam('rightCollapsible-1-excludeModules'); ?>';
</script>
<script language="javascript" type="text/javascript" src="<?php echo $this->templateurl(); ?>/js/ja.rightcol.js"></script>
<?php endif; ?>

<!--Width of template -->
<style type="text/css">
.main {width: <?php echo $this->getParam('tmplWidth', 'auto', true); ?>;margin: 0 auto;}
#ja-wrapper {min-width: <?php echo $this->getParam('tmplWrapMin', 'auto', true); ?>;}
</style>

<link href="<?php echo $this->templateurl(); ?><?php echo '/css/colors/'.$this->getParam('ca_colorVariation'); ?>.css" rel="stylesheet" media="all" type="text/css" />
<?php if (($this->getParam('backgroundType') == 'custom') && ($this->getParam('backgroundType-custom-backgroundColor') != '' ) && ($this->getParam('backgroundType-custom-backgroundColor') != '#' )) : ?>
<style>
body, body#bd{
	background: <?php echo $this->getParam('backgroundType-custom-backgroundColor'); ?>;
	background-image: none;
}
</style>
<?php endif; ?>

<?php if ($this->getParam('logoPosition') == 'center' ) : ?>
<style>
h1.logo, div.logo-text{
	float: none;
	text-align: center;
	line-height: 1.4;
}
p.site-slogan{
	display: inline;
	margin-top: 5px;
}
</style>
<?php endif; ?>
<?php if ($this->getParam('logoPosition') == 'right' ) : ?>
<style>
h1.logo, div.logo-text{
	float: right;
}
#searchWrapper{
	float: left;
}
div#usertoolWrapper{
	float: left;
	background-position: 82px 29px;
}
</style>
<?php endif; ?>

<?php if($this->getParam('direction')=='rtl' || $this->direction == 'rtl') : ?>
<link href="<?php echo $this->templateurl(); ?>/css/template_rtl.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 8.0]>
<link rel="stylesheet" href="<?php echo $this->templateurl(); ?>/css/ie-rtl.css" type="text/css" />
<![endif]-->
<?php endif; ?>
