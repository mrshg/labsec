<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-19 21:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin_projeto was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-19 21:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin_projeto was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-19 21:57:15 --- ERROR: View_Exception [ 0 ]: The requested view labsec/admin_projeto could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-01-19 21:57:15 --- STRACE: View_Exception [ 0 ]: The requested view labsec/admin_projeto could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(137): Kohana_View->set_filename('labsec/admin_pr...')
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(30): Kohana_View->__construct('labsec/admin_pr...', Array)
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(126): Kohana_View::factory('labsec/admin_pr...', Array)
#3 [internal function]: Controller_Labsec->action_admin_projeto()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-19 22:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-19 22:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-19 23:20:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_Projeto' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-01-19 23:20:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_Projeto' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('projeto')
#1 {main}
2012-01-19 23:23:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_Projeto' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-01-19 23:23:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_Projeto' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('projeto')
#1 {main}
2012-01-19 23:23:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_Projeto' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-01-19 23:23:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_Projeto' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('projeto')
#1 {main}
2012-01-19 23:23:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_Projeto' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-01-19 23:23:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_Projeto' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('projeto')
#1 {main}
2012-01-19 23:23:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Projeto' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-01-19 23:23:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Projeto' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('projeto')
#1 {main}
2012-01-19 23:23:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Projeto' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-01-19 23:23:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Projeto' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('projeto')
#1 {main}
2012-01-19 23:24:41 --- ERROR: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'labsec' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-01-19 23:24:41 --- STRACE: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'labsec' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('labsec')
#1 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('projetos')
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#5 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#6 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#7 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#8 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_ORM::factory('projeto')
#9 [internal function]: Controller_Labsec->action_admin_projetos()
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-19 23:25:02 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-01-19 23:25:02 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('projetos')
#3 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_ORM::factory('projeto')
#8 [internal function]: Controller_Labsec->action_admin_projetos()
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-19 23:25:29 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-01-19 23:25:29 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('projetos')
#3 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_ORM::factory('projeto')
#8 [internal function]: Controller_Labsec->action_admin_projetos()
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-19 23:25:30 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-01-19 23:25:30 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('projetos')
#3 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_ORM::factory('projeto')
#8 [internal function]: Controller_Labsec->action_admin_projetos()
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-19 23:25:31 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-01-19 23:25:31 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('projetos')
#3 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_ORM::factory('projeto')
#8 [internal function]: Controller_Labsec->action_admin_projetos()
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-19 23:25:32 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-01-19 23:25:32 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('projetos')
#3 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_ORM::factory('projeto')
#8 [internal function]: Controller_Labsec->action_admin_projetos()
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-19 23:25:32 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-01-19 23:25:32 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('projetos')
#3 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_ORM::factory('projeto')
#8 [internal function]: Controller_Labsec->action_admin_projetos()
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-19 23:25:32 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-01-19 23:25:32 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('projetos')
#3 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_ORM::factory('projeto')
#8 [internal function]: Controller_Labsec->action_admin_projetos()
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-19 23:30:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: projeto ~ APPPATH/views/labsec/admin_projetos.php [ 5 ]
2012-01-19 23:30:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: projeto ~ APPPATH/views/labsec/admin_projetos.php [ 5 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(5): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(142): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(124): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}