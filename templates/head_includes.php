<meta name="designer" content="Wolf Schleevoigt" />
<meta name="license" content="Creative Commons Attribution-Share Alike 3.0 Unported License" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="templates/<?php echo $this->template ?>/images/favicon.ico" />


<?php
if($this->countModules("left")&&!$this->countModules("right")){ $contentwidth="left";}
if($this->countModules("right")&&!$this->countModules("left")){ $contentwidth="right";}
if($this->countModules("left")&&$this->countModules("right")) {$contentwidth="middle";}
if($this->countModules("user1")&&$this->countModules("user2")&&$this->countModules("user6")){ $userwidth="3";}
if($this->countModules("user1")&&$this->countModules("user2")&&!$this->countModules("user6")){ $userwidth="2";}
if($this->countModules("user1")&&!$this->countModules("user2")&&$this->countModules("user6")){ $userwidth="2";}
if(!$this->countModules("user1")&&$this->countModules("user2")&&$this->countModules("user6")){ $userwidth="2";}
if($this->countModules("user1")&&!$this->countModules("user2")&&!$this->countModules("user6")){ $userwidth="1";}
if(!$this->countModules("user1")&&$this->countModules("user2")&&!$this->countModules("user6")){ $userwidth="1";}
if(!$this->countModules("user1")&&!$this->countModules("user2")&&$this->countModules("user6")){ $userwidth="1";}

?>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/suckerfish.js"></script>

<style type="text/css">
	#logo {
	background-image: url('<?php echo $logo_image; ?>');
	width:<?php echo $logo_width; ?>;
	height:<?php echo $logo_height; ?>;
	}
	#wrapper {width:<?php echo $template_width; ?>;}
</style>


<!--
Wolfi
http://www.wolfshand.de
Creative Commons Attribution-Share Alike 3.0 Unported License
-->
