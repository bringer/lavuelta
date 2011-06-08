<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
$logo_image = $this->params->get("logo_image");
$logo_height = $this->params->get("logo_height");
$logo_width = $this->params->get("logo_width");
$template_width = $this->params->get("template_width");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
<jdoc:include type="head" />
<?php require("head_includes.php"); ?>
</head>


<body>
<div id="wrapper">
<div id="container_out"><div id="container">
	<div id="top_out"><div id="top">
<div id="logo_out"><div id="logo"></div></div>
<?php if($this->countModules('banner')) : ?>
<div id="banner_out"><div id="banner"><jdoc:include type="modules" name="banner" style="xhtml" /></div></div>
<?php endif; ?>
<div class="clear"></div>
		<div id="topbar_out"><div id="topbar">

<div class="clear"></div>
<?php if($this->countModules('user3')) : ?>
			<div id="user3_out"><div id="user3"><jdoc:include type="modules" name="user3" style="xhtml" />
<?php endif; ?>
<div class="clear"></div>
			</div></div>
<?php if($this->countModules('user4')) : ?>
			<div id="user4_out"><div id="user4"><jdoc:include type="modules" name="user4" style="xhtml" /></div></div>
<?php endif; ?>
<div class="clear"></div>		
		</div></div>	
	</div></div>
<div class="clear"></div>

	<div id="eyecatcher_out"><div id="eyecatcher">
<?php if ($this->countModules('user5')) : ?>
		<div id="user5_out"><div id="user5">
<jdoc:include type="modules" name="user5" style="xhtml" />
		</div></div>
<?php endif; ?>
	
	</div></div>
<div class="clear"></div>

	<div id="maincontent_out"><div id="maincontent">
<?php if ($this->countModules('breadcrumb')) : ?>
	<div id="pathwaywrapper">
		<div id="pathwaytext_out"><div id="pathwaytext">Sie befinden sich hier</div></div>
		<div id="pathway_out"><div id="pathway"><jdoc:include type="modules" name="breadcrumb" style="xhtml" /></div></div>
		<div class="clear"></div>
	</div>
<?php endif; ?>
<div class="clear"></div>
<?php if($this->countModules('left')) : ?>
		<div id="left_out"><div id="left">
			<jdoc:include type="modules" name="left" style="xhtml" />
		</div></div>
<?php endif; ?>
<?php if($this->countModules('right')) : ?>
		<div id="right_out"><div id="right">
			<jdoc:include type="modules" name="right" style="xhtml" />
		</div></div>
<?php endif; ?>

		<div id="middle_out<?php echo $contentwidth ?>"><div id="middle">
			<div id="content_out"><div id="content">
				<jdoc:include type="component" />	
			</div></div>
<?php if($this->countModules('user1 or user2 or user6')) : ?>
			<div id="userwrapper_out"><div id="userwrapper">
<?php endif; ?>
<?php if($this->countModules('user1')) : ?>
				<div id="user1_out<?php echo $userwidth ?>"><div id="user1">
					<jdoc:include type="modules" name="user1" style="xhtml" />			
				</div></div>
<?php endif; ?>
<?php if($this->countModules('user2')) : ?>
				<div id="user2_out<?php echo $userwidth ?>"><div id="user2">
					<jdoc:include type="modules" name="user2" style="xhtml" />			
				</div></div>
<?php endif; ?>
<?php if($this->countModules('user6')) : ?>
				<div id="user6_out<?php echo $userwidth ?>"><div id="user6">
					<jdoc:include type="modules" name="user6" style="xhtml" />							
				</div></div>
<?php endif; ?>
<div class="clear"></div>

			</div></div><!--USERWRAPPER-->
		</div></div><!--MIDDLE-->	
	</div></div><!--MAINCONTENT-->

<div class="clear"></div>
	<div id="bottom_out"><div id="bottom">
<?php if($this->countModules ('footer')) : ?>
	<div id="footer_out"><div id="footer"><jdoc:include type="modules" name="footer" style="xhtml" /></div></div>
<?php endif; ?>
		<div id="copyright">Joomla Template <font color="#006699">Wo:Multi</font> design and code &copy; Wolf H. Schleevoigt | released under Creative Commons License | <a href="http://www.wolfshand.de">wolfshand.de</a></div>	
	</div></div>

</div></div>
</div>
</body>
</html>
