Xataface Radio Button Module

Synopsis:
=========

The Xataface radio module adds a "radio buttons" widget for use in forms. Options are generated from a vocabulary.

<img alt="radio widget example" src="https://cloud.githubusercontent.com/assets/10924955/9004743/ffc8f8c0-3778-11e5-92f0-e7e6428e0eaa.PNG" />

Installation:
=============

1. Copy the summary directory into your modules directory ie. modules/radioButton :

  e.g. if Your application is installed at path/to/app, then you would copy files widget.php and radioButton.php to the path/to/app/modules/radioButton directory.


2. Add the following to the [_modules] section of your app's conf.ini file :

  [_modules]
    modules_radioButton=modules/radioButton/radioButton.php

Usage:
======

To configure a field to use the radio widget, just set its fields.ini file widget:type directive to "radioButton" and set the vocabulary directive. See the <a href="http://xataface.com/wiki/valuelists.ini_file" title="Go to Xataface vocabulary official wiki">vocabulary wiki page</a> for more information about Xataface vocabulary. 

Option : You should also set a facultative separator between the radio buttons as in this example :

[program]<br />
  widget:type=radioButton<br />
  vocabulary=programs<br />
  widget:separator="&nbsp;" ;facultative

Credits:
========

- This module was developed by JerOrc using code from Steve Hannah (steve@weblite.ca) into <a href="http://xataface.com">Xataface</a>

