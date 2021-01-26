<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('personList'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('personList',    'PersonListCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('personNew',     'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personEdit',    'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personSave',    'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personDelete',  'PersonEditCtrl',	['admin']);

//------- zawodnik -----------

Utils::addRoute('personNewz',     'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personEditz',    'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personSavez',    'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personDeletez',  'PersonEditCtrl',	['admin']);

//------------ sedzia ------------

Utils::addRoute('personNewss',     'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personEdits',    'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personSaves',    'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personDeletes',  'PersonEditCtrl',	['admin']);