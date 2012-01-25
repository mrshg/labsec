<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-24 19:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 19:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 19:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/importdata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-24 19:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/importdata was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-24 19:39:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/labsec.php [ 144 ]
2012-01-24 19:39:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/labsec.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_labs...')
#1 {main}
2012-01-24 19:39:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/labsec.php [ 144 ]
2012-01-24 19:39:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/labsec.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_labs...')
#1 {main}
2012-01-24 19:40:12 --- ERROR: ErrorException [ 4096 ]: Object of class DirectoryIterator could not be converted to integer ~ APPPATH/classes/controller/labsec.php [ 143 ]
2012-01-24 19:40:12 --- STRACE: ErrorException [ 4096 ]: Object of class DirectoryIterator could not be converted to integer ~ APPPATH/classes/controller/labsec.php [ 143 ]
--
#0 [internal function]: Kohana_Core::error_handler('0', 3, 1)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): substr()
#2 [internal function]: Controller_Labsec->action_importdata(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-24 19:45:21 --- ERROR: ErrorException [ 2 ]: DirectoryIterator::__construct(/Users/marcelo/Desktop/imglabsec/.DS_Store) [directoryiterator.--construct]: failed to open dir: Not a directory ~ APPPATH/classes/controller/labsec.php [ 149 ]
2012-01-24 19:45:21 --- STRACE: ErrorException [ 2 ]: DirectoryIterator::__construct(/Users/marcelo/Desktop/imglabsec/.DS_Store) [directoryiterator.--construct]: failed to open dir: Not a directory ~ APPPATH/classes/controller/labsec.php [ 149 ]
--
#0 [internal function]: Kohana_Core::error_handler('/Users/marcelo/...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(149): DirectoryIterator->__construct()
#2 [internal function]: Controller_Labsec->action_importdata(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-24 19:45:54 --- ERROR: ErrorException [ 2 ]: DirectoryIterator::__construct(/Users/marcelo/Desktop/imglabsec/.DS_Store) [directoryiterator.--construct]: failed to open dir: Not a directory ~ APPPATH/classes/controller/labsec.php [ 150 ]
2012-01-24 19:45:54 --- STRACE: ErrorException [ 2 ]: DirectoryIterator::__construct(/Users/marcelo/Desktop/imglabsec/.DS_Store) [directoryiterator.--construct]: failed to open dir: Not a directory ~ APPPATH/classes/controller/labsec.php [ 150 ]
--
#0 [internal function]: Kohana_Core::error_handler('/Users/marcelo/...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(150): DirectoryIterator->__construct()
#2 [internal function]: Controller_Labsec->action_importdata(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-24 19:45:56 --- ERROR: ErrorException [ 2 ]: DirectoryIterator::__construct(/Users/marcelo/Desktop/imglabsec/.DS_Store) [directoryiterator.--construct]: failed to open dir: Not a directory ~ APPPATH/classes/controller/labsec.php [ 150 ]
2012-01-24 19:45:56 --- STRACE: ErrorException [ 2 ]: DirectoryIterator::__construct(/Users/marcelo/Desktop/imglabsec/.DS_Store) [directoryiterator.--construct]: failed to open dir: Not a directory ~ APPPATH/classes/controller/labsec.php [ 150 ]
--
#0 [internal function]: Kohana_Core::error_handler('/Users/marcelo/...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(150): DirectoryIterator->__construct()
#2 [internal function]: Controller_Labsec->action_importdata(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-24 20:00:12 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-01-24 20:00:12 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(159): Model_Projeto->save()
#4 [internal function]: Controller_Labsec->action_importdata()
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-24 20:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 20:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 20:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 20:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 20:09:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  size ~ APPPATH/classes/controller/labsec.php [ 159 ]
2012-01-24 20:09:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  size ~ APPPATH/classes/controller/labsec.php [ 159 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_importdata(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-24 20:10:42 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/labsec.php [ 159 ]
2012-01-24 20:10:42 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/labsec.php [ 159 ]
--
#0 [internal function]: Kohana_Core::error_handler('Array')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(159): filesize()
#2 [internal function]: Controller_Labsec->action_importdata(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-24 20:13:13 --- ERROR: ErrorException [ 1 ]: Call to undefined function finfo_open() ~ APPPATH/classes/controller/labsec.php [ 159 ]
2012-01-24 20:13:13 --- STRACE: ErrorException [ 1 ]: Call to undefined function finfo_open() ~ APPPATH/classes/controller/labsec.php [ 159 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-24 20:20:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: projeto ~ APPPATH/classes/controller/labsec.php [ 162 ]
2012-01-24 20:20:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: projeto ~ APPPATH/classes/controller/labsec.php [ 162 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(162): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_importdata(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-24 20:24:12 --- ERROR: ErrorException [ 8 ]: Undefined index:  size ~ APPPATH/classes/controller/labsec.php [ 162 ]
2012-01-24 20:24:12 --- STRACE: ErrorException [ 8 ]: Undefined index:  size ~ APPPATH/classes/controller/labsec.php [ 162 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(162): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_importdata(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-24 20:33:37 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-01-24 20:33:37 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(153): Model_Projeto->save()
#4 [internal function]: Controller_Labsec->action_importdata()
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-24 20:34:41 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-01-24 20:34:41 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(153): Kohana_ORM->check()
#1 [internal function]: Controller_Labsec->action_importdata()
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-24 20:36:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method ORM_Validation_Exception::message() ~ APPPATH/classes/controller/labsec.php [ 185 ]
2012-01-24 20:36:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method ORM_Validation_Exception::message() ~ APPPATH/classes/controller/labsec.php [ 185 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-24 20:37:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: nv ~ APPPATH/classes/controller/labsec.php [ 189 ]
2012-01-24 20:37:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: nv ~ APPPATH/classes/controller/labsec.php [ 189 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(189): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_importdata(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-24 20:41:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: nv ~ APPPATH/classes/controller/labsec.php [ 186 ]
2012-01-24 20:41:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: nv ~ APPPATH/classes/controller/labsec.php [ 186 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(186): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_importdata(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-24 20:47:21 --- ERROR: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/controller/labsec.php [ 171 ]
2012-01-24 20:47:21 --- STRACE: ErrorException [ 2 ]: Division by zero ~ APPPATH/classes/controller/labsec.php [ 171 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(171): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_importdata(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-24 20:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 20:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 20:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 20:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:05:28 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (1, ' Páginas do Futuro', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:05:28 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (1, ' Páginas do Futuro', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(161): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:07:44 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (1, ' Páginas do Futuro', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:07:44 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (1, ' Páginas do Futuro', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(161): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:09:01 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (1, 'Páginas do Futuro', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:09:01 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (1, 'Páginas do Futuro', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(161): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:20:02 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '29' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (29, 'Quem é Capitu?', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:20:02 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '29' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (29, 'Quem é Capitu?', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(162): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:20:34 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '72' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (72, 'Cega : Frio na Espinha', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:20:34 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '72' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (72, 'Cega : Frio na Espinha', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(162): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:20:51 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '109' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (109, 'Mário, que Mário?', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:20:51 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '109' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (109, 'Mário, que Mário?', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(162): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:23:22 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '18' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (18, 'Crônicas Saxônicas', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:23:22 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '18' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (18, 'Crônicas Saxônicas', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(160): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:28:38 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '29' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (29, 'Quem é Capitu?', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:28:38 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '29' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (29, 'Quem é Capitu?', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(165): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:29:02 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '29' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (29, 'Quem é Capitu?', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:29:02 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '29' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (29, 'Quem é Capitu?', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(165): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:30:31 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '29' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (29, 'Quem é Capitu?', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:30:31 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '29' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (29, 'Quem é Capitu?', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(165): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:31:49 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '20' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (20, 'A Busca do Graal', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:31:49 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '20' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (20, 'A Busca do Graal', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(165): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:31:56 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '33' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (33, 'Quem Sou Eu?', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:31:56 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '33' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (33, 'Quem Sou Eu?', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(165): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:33:05 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '40' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (40, 'O Passageiro', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:33:05 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '40' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (40, 'O Passageiro', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(165): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:33:08 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '40' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (40, 'O Passageiro', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:33:08 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '40' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (40, 'O Passageiro', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(165): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:33:46 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '72' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (72, 'Cega : Frio na Espinha', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:33:46 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '72' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (72, 'Cega : Frio na Espinha', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(166): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:34:48 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '73' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (73, 'Os Milionários : O Jogo', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:34:48 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '73' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (73, 'Os Milionários : O Jogo', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(166): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:36:16 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '60' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (60, 'Antologia Casseta Popular', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:36:16 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '60' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (60, 'Antologia Casseta Popular', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(166): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:38:10 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 248011 bytes) ~ MODPATH/database/classes/kohana/database/mysql.php [ 434 ]
2012-01-24 21:38:10 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 248011 bytes) ~ MODPATH/database/classes/kohana/database/mysql.php [ 434 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('??????Exif??II*...', Resource id #64)
#1 {main}
2012-01-24 21:38:47 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 196903 bytes) ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 148 ]
2012-01-24 21:38:47 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 196903 bytes) ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 148 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Database_MySQL))
#1 {main}
2012-01-24 21:39:28 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '80' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (80, 'Bonequinhos Viajantes', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 21:39:28 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '80' for key 'PRIMARY' [ INSERT INTO `projetos` (`id`, `nome`, `cliente_ano`) VALUES (80, 'Bonequinhos Viajantes', '-') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(51): Kohana_ORM->save(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(167): Model_Projeto->save()
#5 [internal function]: Controller_Labsec->action_importdata()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:39:36 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 196903 bytes) ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 148 ]
2012-01-24 21:39:36 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 196903 bytes) ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 148 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Database_MySQL))
#1 {main}
2012-01-24 21:41:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting T_FUNCTION ~ APPPATH/classes/controller/labsec.php [ 206 ]
2012-01-24 21:41:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting T_FUNCTION ~ APPPATH/classes/controller/labsec.php [ 206 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_labs...')
#1 {main}
2012-01-24 21:41:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting T_FUNCTION ~ APPPATH/classes/controller/labsec.php [ 206 ]
2012-01-24 21:41:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting T_FUNCTION ~ APPPATH/classes/controller/labsec.php [ 206 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_labs...')
#1 {main}
2012-01-24 21:41:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting T_FUNCTION ~ APPPATH/classes/controller/labsec.php [ 206 ]
2012-01-24 21:41:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting T_FUNCTION ~ APPPATH/classes/controller/labsec.php [ 206 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_labs...')
#1 {main}
2012-01-24 21:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:54:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:54:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:58:45 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/labsec/trabalho.php [ 5 ]
2012-01-24 21:58:45 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/labsec/trabalho.php [ 5 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/trabalho.php(5): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(6): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(113): Controller_Base->get_grid_2()
#5 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-24 21:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 21:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 21:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:09:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:09:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:12:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:12:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:15:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:15:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:23:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:23:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:23:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:23:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:24:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:27:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:27:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:30:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:30:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 22:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 22:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:06:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:06:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:26:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Melhor vídeo Brasileiro - Escolha da audiência' - Rio de Janeiro. Animamundi 2' at line 1 [ insert into projetos_mencoes (projeto_id,texto,ordem) values (131, '2º lugar na categoria 'Melhor vídeo Brasileiro - Escolha da audiência' - Rio de Janeiro. Animamundi 2002.', 1),(131, '3º lugar na categoria 'Melhor vídeo Brasileiro - Escolha da audiência' - São Paulo. Animamundi 2002.', 2),(131, 'Menção Honrosa pela ABDC - Associação Brasileira de Documentaristas e Curta-Metragistas.  AnimaMundi 2002.', 3) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-24 23:26:45 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Melhor vídeo Brasileiro - Escolha da audiência' - Rio de Janeiro. Animamundi 2' at line 1 [ insert into projetos_mencoes (projeto_id,texto,ordem) values (131, '2º lugar na categoria 'Melhor vídeo Brasileiro - Escolha da audiência' - Rio de Janeiro. Animamundi 2002.', 1),(131, '3º lugar na categoria 'Melhor vídeo Brasileiro - Escolha da audiência' - São Paulo. Animamundi 2002.', 2),(131, 'Menção Honrosa pela ABDC - Associação Brasileira de Documentaristas e Curta-Metragistas.  AnimaMundi 2002.', 3) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'insert into pro...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(60): Kohana_Database_Query->execute()
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/painel.php(97): Model_Projeto->save()
#3 [internal function]: Controller_Painel->action_projeto()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Painel))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-24 23:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:35:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:35:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-24 23:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-24 23:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}