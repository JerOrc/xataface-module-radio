<?php
/*
 * Xataface radio Button Module
 * Copyright (C) 2011  Steve Hannah <steve@weblite.ca>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Library General Public
 * License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Library General Public License for more details.
 *
 * You should have received a copy of the GNU Library General Public
 * License along with this library; if not, write to the
 * Free Software Foundation, Inc., 51 Franklin St, Fifth Floor,
 * Boston, MA  02110-1301, USA.
 *
 */

/**
 * @brief The main radio button module class.  This loads all of the dependencies for the
 * 	module.
 */
class modules_radioButton {

  /**
   * @brief Initializes the radio module and registers all of the event listener.
   *
   */
  function __construct(){
    $app = Dataface_Application::getInstance();

    if ( !class_exists('Dataface_FormTool') ) {
      // If the formtool is not loaded then we don't want to load it here... we'll just register
      // the _registerWidget() method to run  as soon as the FormTool is loaded.
      $app->registerEventListener('Dataface_FormTool::init', array($this, '_registerWidget'));
      
    } else {
      // Register the radio widget with the form tool so that it responds to widget:type=radio
      $this->_registerWidget(Dataface_FormTool::getInstance());
      
    }
    
  }

  // Function to register our widget with the form tool.
  public function _registerWidget(Dataface_FormTool $formTool) {
    $formTool->registerWidgetHandler('radioButton', dirname(__FILE__).'/widget.php', 'Dataface_FormTool_radioButton');
    
  }
  
}
