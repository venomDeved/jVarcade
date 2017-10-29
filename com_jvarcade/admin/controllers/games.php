<?php
/**
 * @package		jVArcade
* @version		2.12
* @date		2014-05-17
* @copyright		Copyright (C) 2007 - 2014 jVitals Digital Technologies Inc. All rights reserved.
* @license		http://www.gnu.org/copyleft/gpl.html GNU/GPLv3 or later
* @link		http://jvitals.com
*/



// no direct access
defined('_JEXEC') or die;



class jvarcadeControllerGames extends Joomla\CMS\MVC\Controller\AdminController {
	
    public function getModel($name = 'Game', $prefix = 'jvarcadeModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);
        
        return $model;
    }

}
