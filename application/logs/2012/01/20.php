<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-20 07:45:08 --- ERROR: Kohana_Exception [ 0 ]: The values property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-01-20 07:45:08 --- STRACE: Kohana_Exception [ 0 ]: The values property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(5): Kohana_ORM->__get('values')
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/marcelo/...', Array)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render()
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3(Array)
#5 [internal function]: Controller_Labsec->action_admin_projetos()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 07:45:11 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::values() must be an array, none given, called in /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php on line 5 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 696 ]
2012-01-20 07:45:11 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::values() must be an array, none given, called in /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php on line 5 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 696 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(696): Kohana_Core::error_handler()
#1 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(5): Kohana_ORM->values('/Users/marcelo/...', Array)
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#5 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#6 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-20 07:45:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Projeto::all() ~ APPPATH/classes/controller/labsec.php [ 118 ]
2012-01-20 07:45:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Projeto::all() ~ APPPATH/classes/controller/labsec.php [ 118 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 07:47:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/views/labsec/admin_projetos.php [ 3 ]
2012-01-20 07:47:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/views/labsec/admin_projetos.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-20 07:47:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/views/labsec/admin_projetos.php [ 3 ]
2012-01-20 07:47:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/views/labsec/admin_projetos.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-20 07:48:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/views/labsec/admin_projetos.php [ 4 ]
2012-01-20 07:48:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/views/labsec/admin_projetos.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-20 07:48:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH/views/labsec/admin_projetos.php [ 8 ]
2012-01-20 07:48:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH/views/labsec/admin_projetos.php [ 8 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(8): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 07:49:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH/classes/controller/labsec.php [ 119 ]
2012-01-20 07:49:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH/classes/controller/labsec.php [ 119 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 07:49:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH/classes/controller/labsec.php [ 119 ]
2012-01-20 07:49:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH/classes/controller/labsec.php [ 119 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 07:49:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH/classes/controller/labsec.php [ 119 ]
2012-01-20 07:49:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH/classes/controller/labsec.php [ 119 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 07:53:46 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Result::get(), called in /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php on line 118 and defined ~ MODPATH/database/classes/kohana/database/result.php [ 182 ]
2012-01-20 07:53:46 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Result::get(), called in /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php on line 118 and defined ~ MODPATH/database/classes/kohana/database/result.php [ 182 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/result.php(182): Kohana_Core::error_handler()
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_Database_Result->get()
#2 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 07:53:47 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Result::get(), called in /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php on line 118 and defined ~ MODPATH/database/classes/kohana/database/result.php [ 182 ]
2012-01-20 07:53:47 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Result::get(), called in /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php on line 118 and defined ~ MODPATH/database/classes/kohana/database/result.php [ 182 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/result.php(182): Kohana_Core::error_handler()
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_Database_Result->get()
#2 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 07:53:52 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_MySQL_Result::seek(), called in /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php on line 118 and defined ~ MODPATH/database/classes/kohana/database/mysql/result.php [ 31 ]
2012-01-20 07:53:52 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_MySQL_Result::seek(), called in /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php on line 118 and defined ~ MODPATH/database/classes/kohana/database/mysql/result.php [ 31 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql/result.php(31): Kohana_Core::error_handler()
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_Database_MySQL_Result->seek()
#2 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 07:53:53 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_MySQL_Result::seek(), called in /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php on line 118 and defined ~ MODPATH/database/classes/kohana/database/mysql/result.php [ 31 ]
2012-01-20 07:53:53 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_MySQL_Result::seek(), called in /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php on line 118 and defined ~ MODPATH/database/classes/kohana/database/mysql/result.php [ 31 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql/result.php(31): Kohana_Core::error_handler()
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_Database_MySQL_Result->seek()
#2 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 07:54:17 --- ERROR: Kohana_Exception [ 0 ]: The find property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-01-20 07:54:17 --- STRACE: Kohana_Exception [ 0 ]: The find property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_ORM->__get('find')
#1 [internal function]: Controller_Labsec->action_admin_projetos()
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 07:54:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::values() ~ APPPATH/classes/controller/labsec.php [ 118 ]
2012-01-20 07:54:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::values() ~ APPPATH/classes/controller/labsec.php [ 118 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 07:54:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::values() ~ APPPATH/classes/controller/labsec.php [ 118 ]
2012-01-20 07:54:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::values() ~ APPPATH/classes/controller/labsec.php [ 118 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 07:54:54 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::object() ~ APPPATH/classes/controller/labsec.php [ 118 ]
2012-01-20 07:54:54 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::object() ~ APPPATH/classes/controller/labsec.php [ 118 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 07:54:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::objects() ~ APPPATH/classes/controller/labsec.php [ 118 ]
2012-01-20 07:54:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::objects() ~ APPPATH/classes/controller/labsec.php [ 118 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 07:59:12 --- ERROR: Kohana_Exception [ 0 ]: The imagens property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-01-20 07:59:12 --- STRACE: Kohana_Exception [ 0 ]: The imagens property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(12): Kohana_ORM->__get('imagens')
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/marcelo/...', Array)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render()
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3(Array)
#5 [internal function]: Controller_Labsec->action_admin_projetos()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 07:59:13 --- ERROR: Kohana_Exception [ 0 ]: The imagens property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-01-20 07:59:13 --- STRACE: Kohana_Exception [ 0 ]: The imagens property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(12): Kohana_ORM->__get('imagens')
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/marcelo/...', Array)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render()
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3(Array)
#5 [internal function]: Controller_Labsec->action_admin_projetos()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:01:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:01:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:01:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:01:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:01:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:01:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:01:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:01:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:01:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:01:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:01:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:01:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:01:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:01:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:01:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:01:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:02:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:02:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:02:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:02:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:02:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:02:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:02:04 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:02:04 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:02:04 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:02:04 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:02:11 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:02:11 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:02:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::find_all() ~ APPPATH/classes/model/projeto.php [ 11 ]
2012-01-20 08:02:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::find_all() ~ APPPATH/classes/model/projeto.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 08:02:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/model/projeto.php [ 11 ]
2012-01-20 08:02:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/model/projeto.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 08:02:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/model/projeto.php [ 11 ]
2012-01-20 08:02:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/model/projeto.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 08:02:57 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
2012-01-20 08:02:57 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projetos.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projetos.php(11): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(125): Controller_Labsec->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 08:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:32:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:32:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:47:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:47:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/139.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/139.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/143.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/143.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/145.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/145.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/141.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/141.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/147.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/147.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/149.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/149.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/151.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/151.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/153.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/153.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/157.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/157.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/159.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/159.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/161.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/161.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/163.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/163.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/165.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/165.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/155.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/155.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/167.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/167.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/171.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/171.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/169.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/169.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/179.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/179.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/175.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/175.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/173.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/173.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/177.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/177.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/183.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/183.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/181.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/181.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/187.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/187.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/185.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/185.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/189.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/191.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/191.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/189.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/193.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/193.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/195.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/195.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/201.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/201.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/199.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/199.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/197.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/197.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/203.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/203.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/205.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/205.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/211.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/211.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/213.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/213.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/207.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/207.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/209.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/209.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/217.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/217.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/221.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/221.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/215.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/215.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/225.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/225.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/223.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/223.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/219.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/219.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/227.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/227.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/229.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/229.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/231.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/231.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/235.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/235.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/233.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/233.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/237.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/237.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/239.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/239.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/241.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/241.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/243.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/243.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/247.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/247.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/245.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/245.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/249.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/249.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/255.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/255.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/251.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/251.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/253.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/253.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/259.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/259.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/257.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/267.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/269.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/269.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/267.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/257.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/265.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/265.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/263.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/263.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/261.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/261.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/271.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/271.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/275.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/275.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/273.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/273.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 08:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 08:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 09:36:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Labsec::$reques ~ APPPATH/classes/controller/labsec.php [ 129 ]
2012-01-20 09:36:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Labsec::$reques ~ APPPATH/classes/controller/labsec.php [ 129 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(129): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 09:36:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::parameter() ~ APPPATH/classes/controller/labsec.php [ 129 ]
2012-01-20 09:36:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::parameter() ~ APPPATH/classes/controller/labsec.php [ 129 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 09:36:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/labsec.php [ 129 ]
2012-01-20 09:36:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/labsec.php [ 129 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 09:38:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/classes/controller/labsec.php [ 129 ]
2012-01-20 09:38:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/classes/controller/labsec.php [ 129 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_labs...')
#1 {main}
2012-01-20 09:38:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Projeto::get() ~ APPPATH/classes/controller/labsec.php [ 129 ]
2012-01-20 09:38:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Projeto::get() ~ APPPATH/classes/controller/labsec.php [ 129 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 09:38:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Projeto::get() ~ APPPATH/classes/controller/labsec.php [ 129 ]
2012-01-20 09:38:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Projeto::get() ~ APPPATH/classes/controller/labsec.php [ 129 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 09:40:04 --- ERROR: ErrorException [ 1 ]: Class 'Util_Debugger' not found ~ APPPATH/views/labsec/admin_projeto.php [ 4 ]
2012-01-20 09:40:04 --- STRACE: ErrorException [ 1 ]: Class 'Util_Debugger' not found ~ APPPATH/views/labsec/admin_projeto.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-20 09:48:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select id,nome,cliente_ano,creditos,categorias, 0 as imagens from projetos where id= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-20 09:48:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select id,nome,cliente_ano,creditos,categorias, 0 as imagens from projetos where id= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'select id,nome,...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(17): Kohana_Database_Query->execute()
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(129): Model_Projeto->get(NULL)
#3 [internal function]: Controller_Labsec->action_admin_projeto()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-20 10:06:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-20 10:06:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-20 20:44:10 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/labsec.php [ 134 ]
2012-01-20 20:44:10 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/labsec.php [ 134 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(134): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 20:48:01 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Projeto as array ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
2012-01-20 20:48:01 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Projeto as array ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-20 20:49:19 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Projeto as array ~ APPPATH/views/labsec/admin_projeto.php [ 20 ]
2012-01-20 20:49:19 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Projeto as array ~ APPPATH/views/labsec/admin_projeto.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-20 20:49:21 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Projeto as array ~ APPPATH/views/labsec/admin_projeto.php [ 20 ]
2012-01-20 20:49:21 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Projeto as array ~ APPPATH/views/labsec/admin_projeto.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-20 20:50:38 --- ERROR: Kohana_Exception [ 0 ]: The mencoes property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-20 20:50:38 --- STRACE: Kohana_Exception [ 0 ]: The mencoes property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('mencoes', 1)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(133): Kohana_ORM->__set('mencoes', 1)
#2 [internal function]: Controller_Labsec->action_admin_projeto()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 20:50:39 --- ERROR: Kohana_Exception [ 0 ]: The mencoes property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-20 20:50:39 --- STRACE: Kohana_Exception [ 0 ]: The mencoes property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('mencoes', 1)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(133): Kohana_ORM->__set('mencoes', 1)
#2 [internal function]: Controller_Labsec->action_admin_projeto()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 20:50:40 --- ERROR: Kohana_Exception [ 0 ]: The mencoes property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-20 20:50:40 --- STRACE: Kohana_Exception [ 0 ]: The mencoes property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('mencoes', 1)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(133): Kohana_ORM->__set('mencoes', 1)
#2 [internal function]: Controller_Labsec->action_admin_projeto()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 20:50:40 --- ERROR: Kohana_Exception [ 0 ]: The mencoes property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-20 20:50:40 --- STRACE: Kohana_Exception [ 0 ]: The mencoes property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('mencoes', 1)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(133): Kohana_ORM->__set('mencoes', 1)
#2 [internal function]: Controller_Labsec->action_admin_projeto()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 20:50:41 --- ERROR: Kohana_Exception [ 0 ]: The mencoes property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-20 20:50:41 --- STRACE: Kohana_Exception [ 0 ]: The mencoes property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('mencoes', 1)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(133): Kohana_ORM->__set('mencoes', 1)
#2 [internal function]: Controller_Labsec->action_admin_projeto()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 20:54:40 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/labsec.php [ 133 ]
2012-01-20 20:54:40 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/labsec.php [ 133 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(133): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 20:54:41 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/labsec.php [ 133 ]
2012-01-20 20:54:41 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/labsec.php [ 133 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(133): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 20:54:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
2012-01-20 20:54:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projeto.php(6): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(13): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(151): Controller_Base->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 20:57:00 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
2012-01-20 20:57:00 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projeto.php(6): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(13): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(151): Controller_Base->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 20:57:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
2012-01-20 20:57:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projeto.php(6): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(13): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(151): Controller_Base->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 20:57:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
2012-01-20 20:57:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projeto.php(6): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(13): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(151): Controller_Base->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 20:57:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
2012-01-20 20:57:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projeto.php(6): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(13): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(151): Controller_Base->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 20:57:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
2012-01-20 20:57:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projeto.php(6): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(13): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(151): Controller_Base->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 20:57:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
2012-01-20 20:57:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projeto.php(6): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(13): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(151): Controller_Base->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 20:57:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
2012-01-20 20:57:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projeto.php(6): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(13): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(151): Controller_Base->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 20:57:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
2012-01-20 20:57:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/labsec/admin_projeto.php [ 6 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/admin_projeto.php(6): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(13): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(151): Controller_Base->get_grid_3()
#5 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-20 20:58:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/projeto.php [ 25 ]
2012-01-20 20:58:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/projeto.php [ 25 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(25): Kohana_Core::error_handler()
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(132): Model_Projeto->find()
#2 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 20:58:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: finded ~ APPPATH/classes/controller/labsec.php [ 134 ]
2012-01-20 20:58:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: finded ~ APPPATH/classes/controller/labsec.php [ 134 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(134): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 20:59:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: finded ~ APPPATH/classes/controller/labsec.php [ 134 ]
2012-01-20 20:59:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: finded ~ APPPATH/classes/controller/labsec.php [ 134 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(134): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 20:59:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Projeto::get() ~ APPPATH/classes/controller/labsec.php [ 130 ]
2012-01-20 20:59:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Projeto::get() ~ APPPATH/classes/controller/labsec.php [ 130 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 20:59:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Projeto::get() ~ APPPATH/classes/controller/labsec.php [ 130 ]
2012-01-20 20:59:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Projeto::get() ~ APPPATH/classes/controller/labsec.php [ 130 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 20:59:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Projeto::get() ~ APPPATH/classes/controller/labsec.php [ 130 ]
2012-01-20 20:59:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Projeto::get() ~ APPPATH/classes/controller/labsec.php [ 130 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-20 21:01:18 --- ERROR: Kohana_Exception [ 0 ]: The nome_do_projeto property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-20 21:01:18 --- STRACE: Kohana_Exception [ 0 ]: The nome_do_projeto property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('nome_do_projeto', 'Salvar')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(135): Kohana_ORM->__set('nome_do_projeto', 'Salvar')
#2 [internal function]: Controller_Labsec->action_admin_projeto()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 21:01:53 --- ERROR: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH/classes/controller/labsec.php [ 135 ]
2012-01-20 21:01:53 --- STRACE: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH/classes/controller/labsec.php [ 135 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(135): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 21:33:50 --- ERROR: ErrorException [ 2 ]: call_user_func_array() [function.call-user-func-array]: First argument is expected to be a valid callback, 'Model_Projeto::thumb_allowed_types' was given ~ SYSPATH/classes/kohana/validation.php [ 364 ]
2012-01-20 21:33:50 --- STRACE: ErrorException [ 2 ]: call_user_func_array() [function.call-user-func-array]: First argument is expected to be a valid callback, 'Model_Projeto::thumb_allowed_types' was given ~ SYSPATH/classes/kohana/validation.php [ 364 ]
--
#0 [internal function]: Kohana_Core::error_handler(Array, Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/validation.php(364): call_user_func_array()
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update()
#5 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(139): Kohana_ORM->save()
#6 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-20 21:34:21 --- ERROR: Kohana_Exception [ 0 ]: The thumb property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-20 21:34:21 --- STRACE: Kohana_Exception [ 0 ]: The thumb property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('thumb', Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(141): Kohana_ORM->__set('thumb', Array)
#2 [internal function]: Controller_Labsec->action_admin_projeto()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 21:38:29 --- ERROR: Kohana_Exception [ 0 ]: The thumb property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-20 21:38:29 --- STRACE: Kohana_Exception [ 0 ]: The thumb property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('thumb', Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(141): Kohana_ORM->__set('thumb', Array)
#2 [internal function]: Controller_Labsec->action_admin_projeto()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 21:38:30 --- ERROR: Kohana_Exception [ 0 ]: The thumb property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-20 21:38:30 --- STRACE: Kohana_Exception [ 0 ]: The thumb property does not exist in the Model_Projeto class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('thumb', Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(141): Kohana_ORM->__set('thumb', Array)
#2 [internal function]: Controller_Labsec->action_admin_projeto()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 21:40:00 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Validation::rule(), called in /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php on line 141 and defined ~ SYSPATH/classes/kohana/validation.php [ 197 ]
2012-01-20 21:40:00 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Validation::rule(), called in /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php on line 141 and defined ~ SYSPATH/classes/kohana/validation.php [ 197 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/validation.php(197): Kohana_Core::error_handler(Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(141): Kohana_Validation->rule()
#2 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 21:41:06 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/kohana/validation.php [ 205 ]
2012-01-20 21:41:06 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/kohana/validation.php [ 205 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/validation.php(205): Kohana_Core::error_handler(Object(Controller_Labsec), 'thumb_allowed_s...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(142): Kohana_Validation->rule()
#2 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 21:45:59 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/kohana/validation.php [ 205 ]
2012-01-20 21:45:59 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/kohana/validation.php [ 205 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/validation.php(205): Kohana_Core::error_handler(Object(Controller_Labsec), 'thumb_allowed_s...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(142): Kohana_Validation->rule()
#2 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 21:46:02 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/kohana/validation.php [ 205 ]
2012-01-20 21:46:02 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/kohana/validation.php [ 205 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/validation.php(205): Kohana_Core::error_handler(Object(Controller_Labsec), 'thumb_allowed_s...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(142): Kohana_Validation->rule()
#2 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 21:53:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/base.php [ 32 ]
2012-01-20 21:53:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/base.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Base')
#1 {main}
2012-01-20 21:55:53 --- ERROR: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH/classes/controller/labsec.php [ 143 ]
2012-01-20 21:55:53 --- STRACE: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH/classes/controller/labsec.php [ 143 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(143): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 21:56:23 --- ERROR: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH/classes/controller/labsec.php [ 144 ]
2012-01-20 21:56:23 --- STRACE: ErrorException [ 8 ]: Undefined index:  error ~ APPPATH/classes/controller/labsec.php [ 144 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(144): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 21:57:15 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH/classes/model/projeto.php [ 47 ]
2012-01-20 21:57:15 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH/classes/model/projeto.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(Array, 'image/jpeg')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(47): in_array('image/jpeg')
#2 [internal function]: Model_Projeto->thumb_allowed_types(Array, Array)
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/validation.php(364): call_user_func_array()
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check(NULL)
#5 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#6 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update()
#7 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(149): Kohana_ORM->save()
#8 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-20 21:57:34 --- ERROR: ErrorException [ 2 ]: call_user_func_array() [function.call-user-func-array]: First argument is expected to be a valid callback, 'Array' was given ~ SYSPATH/classes/kohana/validation.php [ 364 ]
2012-01-20 21:57:34 --- STRACE: ErrorException [ 2 ]: call_user_func_array() [function.call-user-func-array]: First argument is expected to be a valid callback, 'Array' was given ~ SYSPATH/classes/kohana/validation.php [ 364 ]
--
#0 [internal function]: Kohana_Core::error_handler(Array, Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/validation.php(364): call_user_func_array()
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update()
#5 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(149): Kohana_ORM->save()
#6 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-20 21:58:02 --- ERROR: ErrorException [ 2 ]: call_user_func_array() [function.call-user-func-array]: First argument is expected to be a valid callback, 'Array' was given ~ SYSPATH/classes/kohana/validation.php [ 364 ]
2012-01-20 21:58:02 --- STRACE: ErrorException [ 2 ]: call_user_func_array() [function.call-user-func-array]: First argument is expected to be a valid callback, 'Array' was given ~ SYSPATH/classes/kohana/validation.php [ 364 ]
--
#0 [internal function]: Kohana_Core::error_handler(Array, Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/validation.php(364): call_user_func_array()
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update()
#5 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(149): Kohana_ORM->save()
#6 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-20 22:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-20 22:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-20 22:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-20 22:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-20 22:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-20 22:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-20 22:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-20 22:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-20 22:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-20 22:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-20 22:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-20 22:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-20 22:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-20 22:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-20 22:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-20 22:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-20 22:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-20 22:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-20 22:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-20 22:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-20 22:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-20 22:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-20 22:04:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select id,projeto_id,texto from projetos_mencoes where projeto_id= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-20 22:04:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select id,projeto_id,texto from projetos_mencoes where projeto_id= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'select id,proje...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(33): Kohana_Database_Query->execute()
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(166): Model_Projeto->find()
#3 [internal function]: Controller_Labsec->action_image()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-20 22:05:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: projeto ~ APPPATH/classes/controller/labsec.php [ 166 ]
2012-01-20 22:05:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: projeto ~ APPPATH/classes/controller/labsec.php [ 166 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(166): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_image(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 22:06:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: projeto ~ APPPATH/classes/controller/labsec.php [ 165 ]
2012-01-20 22:06:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: projeto ~ APPPATH/classes/controller/labsec.php [ 165 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(165): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_projetothumb(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-20 22:14:39 --- ERROR: ErrorException [ 2 ]: imagepng() [function.imagepng]: gd-png error: no colors in palette ~ APPPATH/classes/controller/labsec.php [ 177 ]
2012-01-20 22:14:39 --- STRACE: ErrorException [ 2 ]: imagepng() [function.imagepng]: gd-png error: no colors in palette ~ APPPATH/classes/controller/labsec.php [ 177 ]
--
#0 [internal function]: Kohana_Core::error_handler(Resource id #47)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(177): imagepng()
#2 [internal function]: Controller_Labsec->action_projetothumb(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 22:19:58 --- ERROR: ErrorException [ 2 ]: imagepng(): supplied argument is not a valid Image resource ~ APPPATH/classes/controller/labsec.php [ 173 ]
2012-01-20 22:19:58 --- STRACE: ErrorException [ 2 ]: imagepng(): supplied argument is not a valid Image resource ~ APPPATH/classes/controller/labsec.php [ 173 ]
--
#0 [internal function]: Kohana_Core::error_handler(0)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(173): imagepng()
#2 [internal function]: Controller_Labsec->action_projetothumb(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-20 22:33:14 --- ERROR: ErrorException [ 2 ]: call_user_func_array() [function.call-user-func-array]: First argument is expected to be a valid callback, 'Array' was given ~ SYSPATH/classes/kohana/validation.php [ 364 ]
2012-01-20 22:33:14 --- STRACE: ErrorException [ 2 ]: call_user_func_array() [function.call-user-func-array]: First argument is expected to be a valid callback, 'Array' was given ~ SYSPATH/classes/kohana/validation.php [ 364 ]
--
#0 [internal function]: Kohana_Core::error_handler(Array, Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/validation.php(364): call_user_func_array()
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update()
#5 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(149): Kohana_ORM->save()
#6 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-20 22:33:55 --- ERROR: ErrorException [ 2 ]: call_user_func_array() [function.call-user-func-array]: First argument is expected to be a valid callback, 'Array' was given ~ SYSPATH/classes/kohana/validation.php [ 364 ]
2012-01-20 22:33:55 --- STRACE: ErrorException [ 2 ]: call_user_func_array() [function.call-user-func-array]: First argument is expected to be a valid callback, 'Array' was given ~ SYSPATH/classes/kohana/validation.php [ 364 ]
--
#0 [internal function]: Kohana_Core::error_handler(Array, Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/validation.php(364): call_user_func_array()
#2 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check(NULL)
#3 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update()
#5 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(149): Kohana_ORM->save()
#6 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-20 22:49:03 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-01-20 22:49:03 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(148): Kohana_ORM->save()
#3 [internal function]: Controller_Labsec->action_admin_projeto()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-20 22:49:54 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-01-20 22:49:54 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(147): Kohana_ORM->save()
#3 [internal function]: Controller_Labsec->action_admin_projeto()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-20 22:50:06 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-01-20 22:50:06 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(149): Kohana_ORM->save()
#3 [internal function]: Controller_Labsec->action_admin_projeto()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-20 23:06:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where projeto_id=1' at line 1 [ delete projetos_mencoes where projeto_id=1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-01-20 23:06:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where projeto_id=1' at line 1 [ delete projetos_mencoes where projeto_id=1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(4, 'delete projetos...', false, Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(41): Kohana_Database_Query->execute()
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(149): Model_Projeto->save()
#3 [internal function]: Controller_Labsec->action_admin_projeto()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-20 23:32:31 --- ERROR: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 35 ]
2012-01-20 23:32:31 --- STRACE: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 35 ]
--
#0 [internal function]: Kohana_Core::error_handler('Micaragua', Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(35): array_push()
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(131): Model_Projeto->find()
#3 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-20 23:32:42 --- ERROR: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 36 ]
2012-01-20 23:32:42 --- STRACE: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::error_handler('Micaragua', Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(36): array_push()
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(131): Model_Projeto->find()
#3 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-20 23:32:54 --- ERROR: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 35 ]
2012-01-20 23:32:54 --- STRACE: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 35 ]
--
#0 [internal function]: Kohana_Core::error_handler(NULL, Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(35): array_push()
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(131): Model_Projeto->find()
#3 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-20 23:32:55 --- ERROR: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 35 ]
2012-01-20 23:32:55 --- STRACE: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 35 ]
--
#0 [internal function]: Kohana_Core::error_handler(NULL, Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(35): array_push()
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(131): Model_Projeto->find()
#3 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-20 23:32:55 --- ERROR: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 35 ]
2012-01-20 23:32:55 --- STRACE: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 35 ]
--
#0 [internal function]: Kohana_Core::error_handler(NULL, Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(35): array_push()
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(131): Model_Projeto->find()
#3 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-20 23:32:58 --- ERROR: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 36 ]
2012-01-20 23:32:58 --- STRACE: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::error_handler(NULL, Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(36): array_push()
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(131): Model_Projeto->find()
#3 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-20 23:33:07 --- ERROR: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 36 ]
2012-01-20 23:33:07 --- STRACE: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::error_handler('Micaragua', Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(36): array_push()
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(131): Model_Projeto->find()
#3 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-20 23:33:08 --- ERROR: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 36 ]
2012-01-20 23:33:08 --- STRACE: ErrorException [ 2 ]: array_push() [function.array-push]: First argument should be an array ~ APPPATH/classes/model/projeto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::error_handler('Micaragua', Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/model/projeto.php(36): array_push()
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(131): Model_Projeto->find()
#3 [internal function]: Controller_Labsec->action_admin_projeto(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}