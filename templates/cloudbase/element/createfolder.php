<?php
defined('JPATH_BASE') or die();

class JElementcreatefolder extends JElement
{

		var	$_name = 'Createfolder';

        function getLogoPath()
        {
                return JPATH_ROOT . DS . 'images' . DS . 'logo';
        }

        function createLogoFolder()
        {
                if(JFolder::exists($this->getLogoPath()))
                {
                        return true;
                }

                return JFolder::create($this->getLogoPath(), 0755);
        }

        /* Functions need by JElement follow: */
        function fetchElement($name, $value, &$node, $cntrol_name)
        {
                if($this->createLogoFolder())
                {
                        return '';
                }
                else
                {
                        return 'Could not create ' . $this->getLogoPath();
                }
        }

        function fetchTooltip($name, $description, &$node, $control_name, $name)
        {
                return '';
        }
}
?>