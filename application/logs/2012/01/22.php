<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-22 00:00:23 --- ERROR: ErrorException [ 1 ]: Class 'Session_7200' not found ~ SYSPATH/classes/kohana/session.php [ 54 ]
2012-01-22 00:00:23 --- STRACE: ErrorException [ 1 ]: Class 'Session_7200' not found ~ SYSPATH/classes/kohana/session.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(7200)
#1 {main}
2012-01-22 00:00:24 --- ERROR: ErrorException [ 1 ]: Class 'Session_7200' not found ~ SYSPATH/classes/kohana/session.php [ 54 ]
2012-01-22 00:00:24 --- STRACE: ErrorException [ 1 ]: Class 'Session_7200' not found ~ SYSPATH/classes/kohana/session.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(7200)
#1 {main}
2012-01-22 00:00:25 --- ERROR: ErrorException [ 1 ]: Class 'Session_7200' not found ~ SYSPATH/classes/kohana/session.php [ 54 ]
2012-01-22 00:00:25 --- STRACE: ErrorException [ 1 ]: Class 'Session_7200' not found ~ SYSPATH/classes/kohana/session.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(7200)
#1 {main}
2012-01-22 00:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 00:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 00:41:12 --- ERROR: View_Exception [ 0 ]: The requested view labsec/base_admin could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-01-22 00:41:12 --- STRACE: View_Exception [ 0 ]: The requested view labsec/base_admin could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(137): Kohana_View->set_filename('labsec/base_adm...')
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(30): Kohana_View->__construct('labsec/base_adm...', Array)
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(123): Kohana_View::factory('labsec/base_adm...', Array)
#3 [internal function]: Controller_Labsec->action_login()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-22 09:29:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 09:29:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 09:30:45 --- ERROR: View_Exception [ 0 ]: The requested view labsec/base_admin could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-01-22 09:30:45 --- STRACE: View_Exception [ 0 ]: The requested view labsec/base_admin could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(137): Kohana_View->set_filename('labsec/base_adm...')
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(30): Kohana_View->__construct('labsec/base_adm...', Array)
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(7): Kohana_View::factory('labsec/base_adm...', Array)
#3 [internal function]: Controller_Login->action_index()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-22 09:31:11 --- ERROR: View_Exception [ 0 ]: The requested view labsec/painel_admin could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-01-22 09:31:11 --- STRACE: View_Exception [ 0 ]: The requested view labsec/painel_admin could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(137): Kohana_View->set_filename('labsec/painel_a...')
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(30): Kohana_View->__construct('labsec/painel_a...', Array)
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(7): Kohana_View::factory('labsec/painel_a...', Array)
#3 [internal function]: Controller_Login->action_index()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-22 10:09:23 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Template_Generic' not found ~ APPPATH/classes/controller/account.php [ 3 ]
2012-01-22 10:09:23 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Template_Generic' not found ~ APPPATH/classes/controller/account.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_acco...')
#1 {main}
2012-01-22 10:12:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 10:12:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 10:12:42 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
2012-01-22 10:12:42 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->action_login(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:13:31 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
2012-01-22 10:13:31 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->action_login(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:13:32 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
2012-01-22 10:13:32 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->action_login(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:13:46 --- ERROR: View_Exception [ 0 ]: The requested view account/login could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-01-22 10:13:46 --- STRACE: View_Exception [ 0 ]: The requested view account/login could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(137): Kohana_View->set_filename('account/login')
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(30): Kohana_View->__construct('account/login', NULL)
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(116): Kohana_View::factory('account/login')
#3 [internal function]: Controller_Account->action_login()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-22 10:14:09 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
2012-01-22 10:14:09 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->action_login(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:15:59 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
2012-01-22 10:15:59 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->action_login(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:16:03 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
2012-01-22 10:16:03 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->action_login(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:16:03 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
2012-01-22 10:16:03 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->action_login(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:16:03 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
2012-01-22 10:16:03 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->action_login(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:16:03 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
2012-01-22 10:16:03 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 116 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->action_login(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:18:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/account.php [ 117 ]
2012-01-22 10:18:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/account.php [ 117 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(117): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->action_login(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:18:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/account.php [ 117 ]
2012-01-22 10:18:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/account.php [ 117 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(117): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->action_login(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:19:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/classes/controller/account.php [ 120 ]
2012-01-22 10:19:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/classes/controller/account.php [ 120 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(120): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->action_login(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:20:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: loginerrors ~ APPPATH/classes/controller/account.php [ 123 ]
2012-01-22 10:20:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: loginerrors ~ APPPATH/classes/controller/account.php [ 123 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(123): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->action_login(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:22:11 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-01-22 10:22:11 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/cookie.php(115): Kohana_Cookie::salt('authautologin', '6dcc20469f43510...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/auth/orm.php(103): Kohana_Cookie::set('authautologin', '6dcc20469f43510...', 1209600)
#2 /Users/marcelo/Documents/workspace/secreto/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_ORM->_login('marcelohg@gmail...', 'marcelinho', true)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(105): Kohana_Auth->login('marcelohg@gmail...', 'marcelinho', true)
#4 [internal function]: Controller_Account->action_login()
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-22 10:25:35 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-01-22 10:25:35 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/cookie.php(115): Kohana_Cookie::salt('authautologin', 'ec86595694b3418...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/auth/orm.php(103): Kohana_Cookie::set('authautologin', 'ec86595694b3418...', 1209600)
#2 /Users/marcelo/Documents/workspace/secreto/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_ORM->_login('marcelohg@gmail...', 'marcelinho', true)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(105): Kohana_Auth->login('marcelohg@gmail...', 'marcelinho', true)
#4 [internal function]: Controller_Account->action_login()
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-22 10:25:47 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-01-22 10:25:47 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/cookie.php(115): Kohana_Cookie::salt('authautologin', '8dafcf7490eb572...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/auth/orm.php(103): Kohana_Cookie::set('authautologin', '8dafcf7490eb572...', 1209600)
#2 /Users/marcelo/Documents/workspace/secreto/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_ORM->_login('marcelohg@gmail...', 'marcelinho', true)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(105): Kohana_Auth->login('marcelohg@gmail...', 'marcelinho', true)
#4 [internal function]: Controller_Account->action_login()
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-22 10:26:01 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-01-22 10:26:01 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/cookie.php(115): Kohana_Cookie::salt('authautologin', '6021039414a22fc...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/auth/orm.php(103): Kohana_Cookie::set('authautologin', '6021039414a22fc...', 1209600)
#2 /Users/marcelo/Documents/workspace/secreto/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_ORM->_login('marcelohg@gmail...', 'marcelinho', true)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(105): Kohana_Auth->login('marcelohg@gmail...', 'marcelinho', true)
#4 [internal function]: Controller_Account->action_login()
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-22 10:34:40 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-01-22 10:34:40 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/cookie.php(115): Kohana_Cookie::salt('authautologin', 'b907efefe5d92e5...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/auth/orm.php(103): Kohana_Cookie::set('authautologin', 'b907efefe5d92e5...', 1209600)
#2 /Users/marcelo/Documents/workspace/secreto/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_ORM->_login('marcelohg@gmail...', 'marcelinho', true)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(105): Kohana_Auth->login('marcelohg@gmail...', 'marcelinho', true)
#4 [internal function]: Controller_Account->action_login()
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-22 10:34:43 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-01-22 10:34:43 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/cookie.php(115): Kohana_Cookie::salt('authautologin', '2cdbb329c666a3a...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/auth/orm.php(103): Kohana_Cookie::set('authautologin', '2cdbb329c666a3a...', 1209600)
#2 /Users/marcelo/Documents/workspace/secreto/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_ORM->_login('marcelohg@gmail...', 'marcelinho', true)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(105): Kohana_Auth->login('marcelohg@gmail...', 'marcelinho', true)
#4 [internal function]: Controller_Account->action_login()
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-22 10:38:11 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-01-22 10:38:11 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/cookie.php(115): Kohana_Cookie::salt('authautologin', '2e30a5d059c56fb...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/auth/orm.php(103): Kohana_Cookie::set('authautologin', '2e30a5d059c56fb...', 1209600)
#2 /Users/marcelo/Documents/workspace/secreto/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_ORM->_login('marcelohg@gmail...', 'marcelinho', true)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(105): Kohana_Auth->login('marcelohg@gmail...', 'marcelinho', true)
#4 [internal function]: Controller_Account->action_login()
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-22 10:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 10:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 10:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 10:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 10:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 10:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 10:55:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 10:55:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 10:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 10:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 10:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 10:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 10:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 10:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 10:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 10:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 10:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 10:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 10:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 10:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 10:56:04 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 11 ]
2012-01-22 10:56:04 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/account.php [ 11 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/account.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Account->before(Object(Controller_Account))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 10:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 10:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 11:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 11:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 11:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 11:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 11:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 11:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 11:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:09:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 11:09:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:10:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 11:10:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 11:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:10:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 11:10:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 11:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 11:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 11:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 11:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel_projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/help was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 11:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/help was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 11:20:33 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 155 ]
2012-01-22 11:20:33 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 155 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(155): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_help(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:20:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 84 ]
2012-01-22 11:20:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 84 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(84): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_create(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:20:40 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 239 ]
2012-01-22 11:20:40 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 239 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(239): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_reset(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:26:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Form::span() ~ APPPATH/views/account/login.php [ 33 ]
2012-01-22 11:26:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Form::span() ~ APPPATH/views/account/login.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 11:26:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Form::span() ~ APPPATH/views/account/login.php [ 33 ]
2012-01-22 11:26:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Form::span() ~ APPPATH/views/account/login.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 11:27:27 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 156 ]
2012-01-22 11:27:27 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 156 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(156): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_help(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:27:29 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 85 ]
2012-01-22 11:27:29 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 85 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(85): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_create(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:27:33 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 240 ]
2012-01-22 11:27:33 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 240 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(240): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_reset(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:29:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2012-01-22 11:29:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/validation.php(102): Kohana_Core::error_handler('username')
#1 /Users/marcelo/Documents/workspace/secreto/application/views/account/login.php(80): Kohana_Validation->offsetGet('/Users/marcelo/...', Array)
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base_painel.php(14): Kohana_View->__toString('/Users/marcelo/...', Array)
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#8 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(142): Kohana_View->render()
#9 [internal function]: Controller_Login->action_login(Object(Controller_Login))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#13 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-22 11:29:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2012-01-22 11:29:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/validation.php(102): Kohana_Core::error_handler('username')
#1 /Users/marcelo/Documents/workspace/secreto/application/views/account/login.php(80): Kohana_Validation->offsetGet('/Users/marcelo/...', Array)
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base_painel.php(14): Kohana_View->__toString('/Users/marcelo/...', Array)
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#8 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(142): Kohana_View->render()
#9 [internal function]: Controller_Login->action_login(Object(Controller_Login))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#13 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-22 11:29:52 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2012-01-22 11:29:52 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/validation.php(102): Kohana_Core::error_handler('username')
#1 /Users/marcelo/Documents/workspace/secreto/application/views/account/login.php(80): Kohana_Validation->offsetGet('/Users/marcelo/...', Array)
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base_painel.php(14): Kohana_View->__toString('/Users/marcelo/...', Array)
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#8 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(142): Kohana_View->render()
#9 [internal function]: Controller_Login->action_login(Object(Controller_Login))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#13 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-22 11:30:58 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 240 ]
2012-01-22 11:30:58 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 240 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(240): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_reset(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:31:04 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 85 ]
2012-01-22 11:31:04 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 85 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(85): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_create(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:31:07 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 156 ]
2012-01-22 11:31:07 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 156 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(156): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_help(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:34:50 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 238 ]
2012-01-22 11:34:50 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 238 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(238): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_reset(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:34:54 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 154 ]
2012-01-22 11:34:54 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 154 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(154): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_help(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:48:47 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 154 ]
2012-01-22 11:48:47 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 154 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(154): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_help(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:48:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Login::$itens_menu ~ APPPATH/classes/controller/login.php [ 159 ]
2012-01-22 11:48:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Login::$itens_menu ~ APPPATH/classes/controller/login.php [ 159 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_help(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:52:12 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 83 ]
2012-01-22 11:52:12 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 83 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(83): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_create(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:53:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/login.php [ 82 ]
2012-01-22 11:53:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/login.php [ 82 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(82): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_create(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:56:04 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 235 ]
2012-01-22 11:56:04 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/login.php [ 235 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(235): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_reset(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:57:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/login.php [ 234 ]
2012-01-22 11:57:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/login.php [ 234 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(234): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_reset(Object(Controller_Login))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 11:59:48 --- ERROR: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-22 11:59:48 --- STRACE: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('reset_token', 'ts9g876hax9vd6g...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(176): Kohana_ORM->__set('reset_token', 'ts9g876hax9vd6g...')
#2 [internal function]: Controller_Login->action_reset()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-22 12:11:09 --- ERROR: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-22 12:11:09 --- STRACE: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('reset_token', 'ze58mur76d188ks...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(176): Kohana_ORM->__set('reset_token', 'ze58mur76d188ks...')
#2 [internal function]: Controller_Login->action_reset()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-22 12:11:17 --- ERROR: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-22 12:11:17 --- STRACE: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('reset_token', '7sc95neaym2954y...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(178): Kohana_ORM->__set('reset_token', '7sc95neaym2954y...')
#2 [internal function]: Controller_Login->action_reset()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-22 12:11:24 --- ERROR: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-22 12:11:24 --- STRACE: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('reset_token', 'k3h22y9f3jmc934...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(176): Kohana_ORM->__set('reset_token', 'k3h22y9f3jmc934...')
#2 [internal function]: Controller_Login->action_reset()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-22 12:11:29 --- ERROR: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-22 12:11:29 --- STRACE: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('reset_token', 'gy349j88f16ag29...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(176): Kohana_ORM->__set('reset_token', 'gy349j88f16ag29...')
#2 [internal function]: Controller_Login->action_reset()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-22 12:11:35 --- ERROR: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-22 12:11:35 --- STRACE: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('reset_token', 'dbsrp2dt5mvbqav...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(176): Kohana_ORM->__set('reset_token', 'dbsrp2dt5mvbqav...')
#2 [internal function]: Controller_Login->action_reset()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-22 12:11:38 --- ERROR: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-22 12:11:38 --- STRACE: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('reset_token', '9tv4yf51tvsnr11...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(176): Kohana_ORM->__set('reset_token', '9tv4yf51tvsnr11...')
#2 [internal function]: Controller_Login->action_reset()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-22 12:11:44 --- ERROR: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-22 12:11:44 --- STRACE: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('reset_token', 'x34ue4x5t2hq68c...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(177): Kohana_ORM->__set('reset_token', 'x34ue4x5t2hq68c...')
#2 [internal function]: Controller_Login->action_reset()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-22 12:14:32 --- ERROR: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-01-22 12:14:32 --- STRACE: Kohana_Exception [ 0 ]: The reset_token property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('reset_token', '996m2d3pjjgc2da...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(176): Kohana_ORM->__set('reset_token', '996m2d3pjjgc2da...')
#2 [internal function]: Controller_Login->action_reset()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-22 12:21:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Validation::$username ~ APPPATH/views/account/index.php [ 14 ]
2012-01-22 12:21:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Validation::$username ~ APPPATH/views/account/index.php [ 14 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/account/index.php(14): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base_painel.php(14): Kohana_View->__toString('/Users/marcelo/...', Array)
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(53): Kohana_View->render()
#8 [internal function]: Controller_Login->action_index(Object(Controller_Login))
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-22 12:21:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Validation::$data ~ APPPATH/views/account/index.php [ 14 ]
2012-01-22 12:21:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Validation::$data ~ APPPATH/views/account/index.php [ 14 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/account/index.php(14): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base_painel.php(14): Kohana_View->__toString('/Users/marcelo/...', Array)
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/login.php(53): Kohana_View->render()
#8 [internal function]: Controller_Login->action_index(Object(Controller_Login))
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-22 12:45:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Auth_ORM::$user ~ APPPATH/classes/controller/painel.php [ 9 ]
2012-01-22 12:45:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Auth_ORM::$user ~ APPPATH/classes/controller/painel.php [ 9 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/painel.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Painel->before(Object(Controller_Painel))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 12:45:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method Auth_ORM::user() ~ APPPATH/classes/controller/painel.php [ 9 ]
2012-01-22 12:45:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method Auth_ORM::user() ~ APPPATH/classes/controller/painel.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-22 12:45:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Auth_ORM::logged_user() ~ APPPATH/classes/controller/painel.php [ 9 ]
2012-01-22 12:45:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Auth_ORM::logged_user() ~ APPPATH/classes/controller/painel.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-22 12:46:58 --- ERROR: Kohana_Exception [ 0 ]: The nome property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-01-22 12:46:58 --- STRACE: Kohana_Exception [ 0 ]: The nome property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/painel.php(10): Kohana_ORM->__get('nome')
#1 [internal function]: Controller_Painel->before()
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Painel))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 12:47:02 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-01-22 12:47:02 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/painel.php(10): Kohana_ORM->__get('name')
#1 [internal function]: Controller_Painel->before()
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Painel))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 12:47:04 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-01-22 12:47:04 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/painel.php(10): Kohana_ORM->__get('name')
#1 [internal function]: Controller_Painel->before()
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Painel))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 12:47:27 --- ERROR: ErrorException [ 8 ]: Use of undefined constant username - assumed 'username' ~ APPPATH/classes/controller/painel.php [ 10 ]
2012-01-22 12:47:27 --- STRACE: ErrorException [ 8 ]: Use of undefined constant username - assumed 'username' ~ APPPATH/classes/controller/painel.php [ 10 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/painel.php(10): Kohana_Core::error_handler()
#1 [internal function]: Controller_Painel->before(Object(Controller_Painel))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 12:50:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/base.php [ 14 ]
2012-01-22 12:50:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/base.php [ 14 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(14): Kohana_Core::error_handler(Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/painel.php(59): Controller_Base->get_grid_3()
#2 [internal function]: Controller_Painel->action_projetos(Object(Controller_Painel))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-22 12:50:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/base.php [ 14 ]
2012-01-22 12:50:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/base.php [ 14 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(14): Kohana_Core::error_handler(Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/painel.php(59): Controller_Base->get_grid_3()
#2 [internal function]: Controller_Painel->action_projetos(Object(Controller_Painel))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-22 12:51:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/controller/base.php [ 14 ]
2012-01-22 12:51:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/controller/base.php [ 14 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(14): Kohana_Core::error_handler(Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/painel.php(59): Controller_Base->get_grid_3()
#2 [internal function]: Controller_Painel->action_projetos(Object(Controller_Painel))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-22 12:53:36 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/views/labsec/painel_menu.php [ 9 ]
2012-01-22 12:53:36 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/views/labsec/painel_menu.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 12:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 12:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 12:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 12:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 12:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 12:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 12:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 12:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 12:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 12:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 12:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 12:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 12:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 12:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 12:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 12:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:00:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:00:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:06:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:06:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:06:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:06:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL trabalho/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL trabalho/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:07:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:07:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:07:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:07:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:07:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:07:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:08:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:08:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:08:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:08:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:09:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:09:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:09:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:09:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:10:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:10:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:12:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:12:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:13:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:13:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 13:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:14:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:14:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:14:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:15:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:15:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 13:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 13:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 13:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 13:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:01:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:01:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel/trabalhos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 14:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel/trabalhos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:04:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:04:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:04:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:04:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 14:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL painel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 14:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 14:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:09:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:09:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:09:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:09:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:09:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-22 14:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 14:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:15:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 14:15:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 14:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 14:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 14:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 14:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 14:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-22 14:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-22 14:15:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:15:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:15:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:15:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:16:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:16:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:16:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:16:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:17:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:17:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:17:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:17:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:17:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:17:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:22:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:22:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:38:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:38:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:41:22 --- ERROR: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
2012-01-22 14:41:22 --- STRACE: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 14:41:47 --- ERROR: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
2012-01-22 14:41:47 --- STRACE: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 14:41:52 --- ERROR: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
2012-01-22 14:41:52 --- STRACE: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 14:44:03 --- ERROR: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
2012-01-22 14:44:03 --- STRACE: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 14:44:08 --- ERROR: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
2012-01-22 14:44:08 --- STRACE: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 14:46:44 --- ERROR: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
2012-01-22 14:46:44 --- STRACE: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 14:46:45 --- ERROR: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
2012-01-22 14:46:45 --- STRACE: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 14:46:45 --- ERROR: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
2012-01-22 14:46:45 --- STRACE: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 14:46:46 --- ERROR: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
2012-01-22 14:46:46 --- STRACE: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 14:46:46 --- ERROR: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
2012-01-22 14:46:46 --- STRACE: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 14:46:46 --- ERROR: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
2012-01-22 14:46:46 --- STRACE: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 14:46:46 --- ERROR: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
2012-01-22 14:46:46 --- STRACE: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 14:46:47 --- ERROR: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
2012-01-22 14:46:47 --- STRACE: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/views/labsec/painel_projeto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/marcelo/...', Array)
#1 {main}
2012-01-22 14:47:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:47:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:48:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:48:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 14:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 14:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:04:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:04:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:04:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:04:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:04:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:04:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:12:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/labsec/painel_projeto.php [ 114 ]
2012-01-22 15:12:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/labsec/painel_projeto.php [ 114 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/painel_projeto.php(114): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/base.php(13): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/painel.php(161): Controller_Base->get_grid_3()
#5 [internal function]: Controller_Painel->action_projeto(Object(Controller_Painel))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-22 15:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 15:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 15:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 16:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 16:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 16:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 16:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 16:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 16:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 16:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 16:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 16:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 16:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 16:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 16:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 16:23:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 16:23:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-22 16:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-22 16:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}