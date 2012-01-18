<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-15 12:20:21 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'cms' at 'MODPATH/cms' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-01-15 12:20:21 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'cms' at 'MODPATH/cms' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/bootstrap.php(110): Kohana_Core::modules(Array)
#1 /Users/marcelo/Documents/workspace/secreto/index.php(102): require('/Users/marcelo/...')
#2 {main}
2012-01-15 12:34:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"' ~ APPPATH/classes/controller/welcome.php [ 18 ]
2012-01-15 12:34:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"' ~ APPPATH/classes/controller/welcome.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_welc...')
#1 {main}
2012-01-15 12:34:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"' ~ APPPATH/classes/controller/welcome.php [ 18 ]
2012-01-15 12:34:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"' ~ APPPATH/classes/controller/welcome.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_welc...')
#1 {main}
2012-01-15 12:46:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Labsec::$loginUrl ~ APPPATH/classes/controller/labsec.php [ 27 ]
2012-01-15 12:46:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Labsec::$loginUrl ~ APPPATH/classes/controller/labsec.php [ 27 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_home(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-15 12:46:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: loginUrl ~ APPPATH/views/labsec/home.php [ 121 ]
2012-01-15 12:46:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: loginUrl ~ APPPATH/views/labsec/home.php [ 121 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/home.php(121): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(47): Kohana_View->__toString('/Users/marcelo/...', Array)
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(37): Kohana_View->render(Array)
#8 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(31): Controller_Labsec->get_base()
#9 [internal function]: Controller_Labsec->action_home(Object(Controller_Labsec))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#13 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-15 12:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery-1.4.4.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 12:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery-1.4.4.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 12:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 12:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 12:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 12:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 12:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/beijo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 12:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/beijo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 12:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/beijo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 12:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/beijo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 12:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 12:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 12:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery-1.4.4.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 12:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery-1.4.4.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 12:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 12:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/script.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 12:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/beijo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 12:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/beijo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:15:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:15:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:15:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:15:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:17:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:17:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:17:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:17:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:28:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:28:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/0.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:34:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:34:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:34:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:34:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:34:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:34:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:35:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/trabalhos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 13:35:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/trabalhos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 13:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 13:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 13:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/trabalhos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 13:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/trabalhos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 14:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:03:41 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php on line 62 and defined ~ SYSPATH/classes/kohana/view.php [ 28 ]
2012-01-15 14:03:41 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php on line 62 and defined ~ SYSPATH/classes/kohana/view.php [ 28 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(28): Kohana_Core::error_handler('labsec/base', '?????<div class...')
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(62): Kohana_View::factory(Array)
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(43): Controller_Labsec->get_grid_2()
#3 [internal function]: Controller_Labsec->action_sobre(Object(Controller_Labsec))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-15 14:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:05:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:05:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:06:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: view_out ~ APPPATH/classes/controller/labsec.php [ 60 ]
2012-01-15 14:06:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: view_out ~ APPPATH/classes/controller/labsec.php [ 60 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(60): Kohana_Core::error_handler(Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(43): Controller_Labsec->get_grid_2()
#2 [internal function]: Controller_Labsec->action_sobre(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-15 14:06:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: view_out ~ APPPATH/classes/controller/labsec.php [ 62 ]
2012-01-15 14:06:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: view_out ~ APPPATH/classes/controller/labsec.php [ 62 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(62): Kohana_Core::error_handler(Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(43): Controller_Labsec->get_grid_2()
#2 [internal function]: Controller_Labsec->action_sobre(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-15 14:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:10:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:10:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:13:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/labsec.php [ 68 ]
2012-01-15 14:13:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/labsec.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2012-01-15 14:13:30 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/labsec.php [ 69 ]
2012-01-15 14:13:30 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/labsec.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2012-01-15 14:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:17:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:17:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:17:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:17:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:17:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:17:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:19:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:19:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:19:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:19:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:20:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:20:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:20:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:20:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:21:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:21:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:21:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:21:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:24:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:24:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:24:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:24:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:26:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:26:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:35:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:35:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:35:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:35:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:35:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:35:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:36:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:36:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:38:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:38:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:38:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:38:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/notificacao was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 14:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/notificacao was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 14:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:51:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:51:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:51:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:51:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/busca was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 14:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/busca was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 14:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/busca was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 14:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/busca was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 14:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/busca was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 14:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/busca was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 14:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/busca was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 14:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/busca was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 14:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/funcionamento was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 14:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/funcionamento was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 14:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/funcionamento was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 14:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/funcionamento was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 14:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:57:53 --- ERROR: View_Exception [ 0 ]: The requested view labsec/premiacoes could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-01-15 14:57:53 --- STRACE: View_Exception [ 0 ]: The requested view labsec/premiacoes could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(137): Kohana_View->set_filename('labsec/premiaco...')
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(30): Kohana_View->__construct('labsec/premiaco...', Array)
#2 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(43): Kohana_View::factory('labsec/premiaco...', Array)
#3 [internal function]: Controller_Labsec->action_premiacoes()
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-15 14:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 14:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 14:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sobre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-15 14:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sobre was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 15:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:01:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:01:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 15:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 15:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:28:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:28:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/publicacoes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 18:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/publicacoes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 18:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:36:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:36:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:36:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:36:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:36:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:36:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:37:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:37:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/trabalhos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 18:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/trabalhos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 18:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/trabalhos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 18:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/trabalhos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 18:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:50:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:50:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:51:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:51:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 18:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 18:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:02:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/labsec.php [ 88 ]
2012-01-15 19:02:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/labsec.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_labs...')
#1 {main}
2012-01-15 19:02:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/labsec.php [ 88 ]
2012-01-15 19:02:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/labsec.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_labs...')
#1 {main}
2012-01-15 19:02:41 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 80 ]
2012-01-15 19:02:41 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 80 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 19:03:10 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 80 ]
2012-01-15 19:03:10 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 80 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 19:03:11 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 80 ]
2012-01-15 19:03:11 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 80 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 19:03:40 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 86 ]
2012-01-15 19:03:40 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 19:03:40 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 86 ]
2012-01-15 19:03:40 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 19:04:02 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
2012-01-15 19:04:02 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 19:04:03 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
2012-01-15 19:04:03 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 19:04:17 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
2012-01-15 19:04:17 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 19:04:18 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
2012-01-15 19:04:18 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 19:04:18 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
2012-01-15 19:04:18 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 19:04:19 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
2012-01-15 19:04:19 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 19:04:57 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/labsec/menu.php [ 3 ]
2012-01-15 19:04:57 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/labsec/menu.php [ 3 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/menu.php(3): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(113): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(91): Controller_Labsec->get_grid_2()
#5 [internal function]: Controller_Labsec->action_exposicoes(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-15 19:05:01 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/labsec/menu.php [ 3 ]
2012-01-15 19:05:01 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/labsec/menu.php [ 3 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/menu.php(3): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(114): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(92): Controller_Labsec->get_grid_2()
#5 [internal function]: Controller_Labsec->action_exposicoes(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-15 19:05:27 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
2012-01-15 19:05:27 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 19:05:28 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
2012-01-15 19:05:28 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/controller/labsec.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-15 19:05:32 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/labsec/menu.php [ 3 ]
2012-01-15 19:05:32 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/labsec/menu.php [ 3 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/menu.php(3): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(113): Kohana_View->render(Array)
#4 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(91): Controller_Labsec->get_grid_2()
#5 [internal function]: Controller_Labsec->action_exposicoes(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-15 19:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:06:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:06:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:07:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:07:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:10:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:10:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:15:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:15:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:15:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:15:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:15:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:15:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:15:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:15:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:15:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:15:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:17:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:17:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/trabalhos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 19:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/trabalhos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 19:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 19:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 19:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 20:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 20:10:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/login.php [ 50 ]
2012-01-15 20:10:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/login.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/login.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:11:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/login.php [ 50 ]
2012-01-15 20:11:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/login.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/login.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:13:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: param ~ APPPATH/classes/controller/labsec.php [ 117 ]
2012-01-15 20:13:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: param ~ APPPATH/classes/controller/labsec.php [ 117 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(117): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-15 20:13:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:13:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:13:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:13:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:13:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:13:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:13:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/login.php [ 50 ]
2012-01-15 20:13:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/login.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/login.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:13:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/login.php [ 50 ]
2012-01-15 20:13:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/login.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/login.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:13:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/login.php [ 50 ]
2012-01-15 20:13:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/login.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/login.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:15:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:15:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:15:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:15:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:15:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:15:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:15:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:15:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:15:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:15:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:15:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:15:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:15:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:15:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:15:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:15:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:15:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:15:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:15:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:15:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:15:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:15:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:15:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:15:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/logins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 20:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/logins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 20:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/logins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 20:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/logins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 20:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/logins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 20:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/logins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 20:16:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/logins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 20:16:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/logins was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 20:16:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:16:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:16:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:16:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:16:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:16:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:16:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:16:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:16:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
2012-01-15 20:16:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/base.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:16:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
2012-01-15 20:16:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/logon.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:16:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
2012-01-15 20:16:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/logon.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:17:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
2012-01-15 20:17:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/logon.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:17:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
2012-01-15 20:17:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/logon.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:17:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
2012-01-15 20:17:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/logon.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:17:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
2012-01-15 20:17:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/logon.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:18:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
2012-01-15 20:18:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: inner_view ~ APPPATH/views/labsec/logon.php [ 50 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/logon.php(50): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(118): Kohana_View->render()
#4 [internal function]: Controller_Labsec->action_login(Object(Controller_Labsec))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-15 20:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/fazer_login.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/fazer_login.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/fazer_login.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/img/fazer_login.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:41:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:41:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 20:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 20:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 20:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 20:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 20:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 20:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 20:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 20:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 20:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 20:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 20:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 20:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 20:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 20:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-15 20:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labsec/admin/projetos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-15 20:52:37 --- ERROR: ErrorException [ 8 ]: Undefined index:  itens_menu ~ APPPATH/classes/controller/labsec.php [ 138 ]
2012-01-15 20:52:37 --- STRACE: ErrorException [ 8 ]: Undefined index:  itens_menu ~ APPPATH/classes/controller/labsec.php [ 138 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(138): Kohana_Core::error_handler(Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(126): Controller_Labsec->get_grid_2()
#2 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-15 20:52:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  itens_menu ~ APPPATH/classes/controller/labsec.php [ 138 ]
2012-01-15 20:52:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  itens_menu ~ APPPATH/classes/controller/labsec.php [ 138 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(138): Kohana_Core::error_handler(Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(126): Controller_Labsec->get_grid_2()
#2 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-15 20:53:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  itens_menu ~ APPPATH/classes/controller/labsec.php [ 144 ]
2012-01-15 20:53:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  itens_menu ~ APPPATH/classes/controller/labsec.php [ 144 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(144): Kohana_Core::error_handler(Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(126): Controller_Labsec->get_grid_3()
#2 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-15 20:53:19 --- ERROR: ErrorException [ 8 ]: Undefined index:  itens_menu ~ APPPATH/classes/controller/labsec.php [ 144 ]
2012-01-15 20:53:19 --- STRACE: ErrorException [ 8 ]: Undefined index:  itens_menu ~ APPPATH/classes/controller/labsec.php [ 144 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(144): Kohana_Core::error_handler(Array)
#1 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(126): Controller_Labsec->get_grid_3()
#2 [internal function]: Controller_Labsec->action_admin_projetos(Object(Controller_Labsec))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-15 20:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 20:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 20:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:05:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:05:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:12:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:12:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:12:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:12:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:12:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:12:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:12:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:12:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:12:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:12:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:13:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:13:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:13:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:13:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:45:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:45:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:50:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:50:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:50:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:50:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 21:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 21:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 22:37:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 22:37:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 22:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 22:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-15 22:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-15 22:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/font/istok/IstokWeb-Regular.ttf ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}