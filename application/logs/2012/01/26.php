<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-26 16:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 16:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 16:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 16:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 16:52:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 16:52:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 16:53:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 16:53:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 16:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 16:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 17:16:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/base.php [ 17 ]
2012-01-26 17:16:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/base.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Base')
#1 {main}
2012-01-26 17:16:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/base.php [ 17 ]
2012-01-26 17:16:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/base.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Base')
#1 {main}
2012-01-26 17:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/header.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-26 17:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: estaticos/header.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 17:57:05 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-01-26 17:57:05 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('labsec/projetot...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('labsec/projetot...')
#2 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(169): Kohana_Image::factory('labsec/projetot...')
#3 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(75): ImageFly->_set_params()
#4 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/controller/imagefly.php(17): ImageFly->__construct()
#5 [internal function]: Controller_ImageFly->action_index()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_ImageFly))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-26 17:57:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-01-26 17:57:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('labsec/projetot...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('labsec/projetot...')
#2 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(169): Kohana_Image::factory('labsec/projetot...')
#3 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(75): ImageFly->_set_params()
#4 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/controller/imagefly.php(17): ImageFly->__construct()
#5 [internal function]: Controller_ImageFly->action_index()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_ImageFly))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-26 17:57:46 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-01-26 17:57:46 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('labsec/projetot...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('labsec/projetot...')
#2 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(169): Kohana_Image::factory('labsec/projetot...')
#3 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(75): ImageFly->_set_params()
#4 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/controller/imagefly.php(17): ImageFly->__construct()
#5 [internal function]: Controller_ImageFly->action_index()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_ImageFly))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-26 18:05:56 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-01-26 18:05:56 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('labsec/projetot...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('labsec/projetot...')
#2 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(169): Kohana_Image::factory('labsec/projetot...')
#3 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(75): ImageFly->_set_params()
#4 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/controller/imagefly.php(17): ImageFly->__construct()
#5 [internal function]: Controller_ImageFly->action_index()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_ImageFly))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-26 18:07:19 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-01-26 18:07:19 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('labsec/projetot...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('labsec/projetot...')
#2 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(169): Kohana_Image::factory('labsec/projetot...')
#3 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(75): ImageFly->_set_params()
#4 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/controller/imagefly.php(17): ImageFly->__construct()
#5 [internal function]: Controller_ImageFly->action_index()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_ImageFly))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-26 18:07:20 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-01-26 18:07:20 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('labsec/projetot...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('labsec/projetot...')
#2 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(169): Kohana_Image::factory('labsec/projetot...')
#3 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(75): ImageFly->_set_params()
#4 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/controller/imagefly.php(17): ImageFly->__construct()
#5 [internal function]: Controller_ImageFly->action_index()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_ImageFly))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-26 18:07:21 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-01-26 18:07:21 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('labsec/projetot...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('labsec/projetot...')
#2 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(169): Kohana_Image::factory('labsec/projetot...')
#3 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(75): ImageFly->_set_params()
#4 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/controller/imagefly.php(17): ImageFly->__construct()
#5 [internal function]: Controller_ImageFly->action_index()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_ImageFly))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-26 18:07:21 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-01-26 18:07:21 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('labsec/projetot...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('labsec/projetot...')
#2 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(169): Kohana_Image::factory('labsec/projetot...')
#3 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(75): ImageFly->_set_params()
#4 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/controller/imagefly.php(17): ImageFly->__construct()
#5 [internal function]: Controller_ImageFly->action_index()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_ImageFly))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-26 18:07:22 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-01-26 18:07:22 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('labsec/projetot...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('labsec/projetot...')
#2 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(169): Kohana_Image::factory('labsec/projetot...')
#3 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(75): ImageFly->_set_params()
#4 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/controller/imagefly.php(17): ImageFly->__construct()
#5 [internal function]: Controller_ImageFly->action_index()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_ImageFly))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-26 18:07:24 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-01-26 18:07:24 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('labsec/projetot...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('labsec/projetot...')
#2 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(169): Kohana_Image::factory('labsec/projetot...')
#3 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(75): ImageFly->_set_params()
#4 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/controller/imagefly.php(17): ImageFly->__construct()
#5 [internal function]: Controller_ImageFly->action_index()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_ImageFly))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-26 18:07:24 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-01-26 18:07:24 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('labsec/projetot...')
#1 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('labsec/projetot...')
#2 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(169): Kohana_Image::factory('labsec/projetot...')
#3 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(75): ImageFly->_set_params()
#4 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/controller/imagefly.php(17): ImageFly->__construct()
#5 [internal function]: Controller_ImageFly->action_index()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_ImageFly))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-26 18:12:44 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-01-26 18:12:44 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('www.google.com....')
#1 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('www.google.com....')
#2 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(169): Kohana_Image::factory('www.google.com....')
#3 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(75): ImageFly->_set_params()
#4 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/controller/imagefly.php(17): ImageFly->__construct()
#5 [internal function]: Controller_ImageFly->action_index()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_ImageFly))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-26 18:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL estaticos/projetothumb/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 18:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL estaticos/projetothumb/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 18:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL estaticos/projetothumb/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 18:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL estaticos/projetothumb/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 18:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL estaticos/projetothumb/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 18:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL estaticos/projetothumb/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 18:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL estaticos/projetothumb/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 18:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL estaticos/projetothumb/4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 18:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 18:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 18:43:06 --- ERROR: ErrorException [ 2 ]: mysql_num_rows(): supplied argument is not a valid MySQL result resource ~ MODPATH/database/classes/kohana/database/mysql/result.php [ 20 ]
2012-01-26 18:43:06 --- STRACE: ErrorException [ 2 ]: mysql_num_rows(): supplied argument is not a valid MySQL result resource ~ MODPATH/database/classes/kohana/database/mysql/result.php [ 20 ]
--
#0 [internal function]: Kohana_Core::error_handler(true)
#1 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql/result.php(20): mysql_num_rows(true, 'SELECT `projeto...', 'Model_Projeto', Array)
#2 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(210): Kohana_Database_MySQL_Result->__construct(1, 'SELECT `projeto...', 'Model_Projeto', Array)
#3 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(Object(Database_MySQL))
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(true)
#5 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result()
#6 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/painel.php(50): Kohana_ORM->find_all()
#7 [internal function]: Controller_Painel->action_projetos(Object(Controller_Painel))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#11 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-26 18:45:54 --- ERROR: ErrorException [ 2 ]: mysql_num_rows(): supplied argument is not a valid MySQL result resource ~ MODPATH/database/classes/kohana/database/mysql/result.php [ 20 ]
2012-01-26 18:45:54 --- STRACE: ErrorException [ 2 ]: mysql_num_rows(): supplied argument is not a valid MySQL result resource ~ MODPATH/database/classes/kohana/database/mysql/result.php [ 20 ]
--
#0 [internal function]: Kohana_Core::error_handler(true)
#1 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql/result.php(20): mysql_num_rows(true, 'SELECT `projeto...', 'Model_Projeto', Array)
#2 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(210): Kohana_Database_MySQL_Result->__construct(1, 'SELECT `projeto...', 'Model_Projeto', Array)
#3 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(Object(Database_MySQL))
#4 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(true)
#5 /Users/marcelo/Documents/workspace/secreto/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result()
#6 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/painel.php(50): Kohana_ORM->find_all()
#7 [internal function]: Controller_Painel->action_projetos(Object(Controller_Painel))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#11 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-26 18:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL categorias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 18:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL categorias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 18:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL categoria/Acao was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 18:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL categoria/Acao was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 19:48:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: categoria ~ APPPATH/views/labsec/home.php [ 4 ]
2012-01-26 19:48:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: categoria ~ APPPATH/views/labsec/home.php [ 4 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/home.php(4): Kohana_Core::error_handler('/Users/marcelo/...', Array)
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/marcelo/Documents/workspace/secreto/application/views/labsec/base_projetos.php(38): Kohana_View->__toString('/Users/marcelo/...', Array)
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(61): include('/Users/marcelo/...')
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(46): Kohana_View->render()
#8 [internal function]: Controller_Labsec->action_home(Object(Controller_Labsec))
#9 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#10 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#13 {main}
2012-01-26 19:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 19:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 20:06:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
2012-01-26 20:06:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 20:06:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
2012-01-26 20:06:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 20:06:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
2012-01-26 20:06:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 20:06:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
2012-01-26 20:06:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 20:06:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
2012-01-26 20:06:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 20:06:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
2012-01-26 20:06:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 20:06:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
2012-01-26 20:06:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 20:06:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
2012-01-26 20:06:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 20:06:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
2012-01-26 20:06:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 20:06:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
2012-01-26 20:06:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 20:07:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
2012-01-26 20:07:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 20:07:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
2012-01-26 20:07:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/labsec.php [ 114 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 20:18:55 --- ERROR: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH/classes/controller/labsec.php [ 117 ]
2012-01-26 20:18:55 --- STRACE: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH/classes/controller/labsec.php [ 117 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(117): Kohana_Core::error_handler()
#1 [internal function]: Controller_Labsec->action_trabalho(Object(Controller_Labsec))
#2 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 20:48:46 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-01-26 20:48:46 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('www.google.com....')
#1 /Users/marcelo/Documents/workspace/secreto/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('www.google.com....')
#2 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(169): Kohana_Image::factory('www.google.com....')
#3 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/imagefly.php(75): ImageFly->_set_params()
#4 /Users/marcelo/Documents/workspace/secreto/modules/imagefly/classes/controller/imagefly.php(17): ImageFly->__construct()
#5 [internal function]: Controller_ImageFly->action_index()
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_ImageFly))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-26 21:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 21:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: '/labsec/projetothumb/1' ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-26 22:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: '/labsec/projetothumb/1' ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: '/labsec/projetothumb/2' ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-26 22:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: '/labsec/projetothumb/2' ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 10 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 10 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 12 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 12 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 14 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 14 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 11 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 11 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 13 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 13 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 16 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 16 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 15 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 15 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 17 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 17 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 18 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 18 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 20 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 20 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 19 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 19 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 21 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 21 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 22 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 22 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 23 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 24 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 24 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 23 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 27 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 27 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 25 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 25 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 28 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 26 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 26 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 28 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 30 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 30 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 29 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 29 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 33 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 33 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 34 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 34 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 31 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 35 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 35 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 31 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 32 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 32 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 37 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 37 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 36 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 36 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 38 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 38 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 40 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 40 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 39 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 42 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 42 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 39 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 41 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 43 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 43 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 41 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 45 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 45 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 46 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 46 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 47 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 47 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 48 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 48 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 49 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 49 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 52 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 52 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 50 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 50 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 51 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 51 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 55 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 55 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 53 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 53 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 54 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 54 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 57 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 57 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 56 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 56 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 58 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 59 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 59 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 58 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 61 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 61 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 63 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 63 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 62 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 62 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 60 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 60 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 65 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 65 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 68 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 68 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 66 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 66 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 69 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 64 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 67 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 64 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 67 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 71 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 71 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 69 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 70 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 70 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 75 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 75 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 72 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 72 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 74 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 74 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 73 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 73 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 77 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 77 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 78 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 78 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 81 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 81 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 79 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 79 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 80 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 80 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 76 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 76 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 82 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 82 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 84 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 84 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 83 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 83 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 85 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 85 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 87 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 87 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 86 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 86 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 91 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 91 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 88 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 88 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 90 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 89 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 89 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 90 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 92 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 92 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 93 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 93 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 96 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 96 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 97 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 97 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 94 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 94 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 95 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 95 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 98 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 98 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 99 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 99 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 102 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 102 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 100 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 100 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 104 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 104 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 101 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 101 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 103 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 103 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 105 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 105 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 106 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 106 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 107 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 107 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 108 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 108 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 111 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 111 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 110 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 109 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 109 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 110 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 112 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 112 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 113 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 113 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 115 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 115 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 114 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 114 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 117 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 117 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 116 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 116 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 119 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 119 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 118 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 118 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 120 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 120 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 123 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 123 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 122 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 122 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 121 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 121 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 124 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 124 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 125 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 125 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 127 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 127 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 126 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 126 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 129 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 129 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 128 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 128 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 131 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 131 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 133 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 133 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 130 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 130 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 135 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 135 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 134 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 134 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 132 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 132 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 136 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 136 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 137 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 137 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 138 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 138 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 139 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 139 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 6 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 11 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 11 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 10 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 10 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 12 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 12 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 13 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 13 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 15 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 15 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 17 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 17 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 16 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 16 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 18 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 18 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 14 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 14 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 19 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 19 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 21 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 21 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 22 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 22 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 20 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 20 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 23 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 23 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 24 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 24 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 26 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 26 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 27 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 27 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 25 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 25 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 29 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 29 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 28 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 28 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 31 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 31 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 30 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 30 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 33 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 33 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 32 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 32 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 34 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 34 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 36 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 36 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 37 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 37 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 38 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 38 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 35 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 35 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 39 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 39 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 41 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 41 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 40 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 40 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 43 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 45 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 48 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 45 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 43 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 48 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 46 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 42 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 46 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 42 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 49 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 49 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 47 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 47 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 50 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 50 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 52 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 52 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 53 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 53 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 51 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 51 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 54 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 54 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 55 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 55 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 56 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 56 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 59 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 59 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 57 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 57 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 58 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 60 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 60 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 58 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 61 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 61 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 62 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 62 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 63 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 63 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 64 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 64 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 66 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 66 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 67 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 67 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 65 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 65 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 68 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 68 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 69 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 69 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 70 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 70 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 71 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 71 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 74 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 74 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 72 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 72 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 73 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 73 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 77 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 77 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 75 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 75 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 76 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 76 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 78 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 78 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 80 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 80 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 82 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 82 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 81 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 81 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 83 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 83 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 79 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 79 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 84 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 84 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 85 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 85 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 87 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 87 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 86 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 86 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 89 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 89 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 88 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 88 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 92 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 92 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 94 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 90 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 94 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 90 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 91 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 91 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 93 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 93 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 95 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 95 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 97 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 97 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 98 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 98 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 96 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 96 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 101 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 101 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 100 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 100 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 99 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 99 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 102 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 102 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 104 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 104 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 103 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 103 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 107 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 107 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 105 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 105 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 108 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 108 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 106 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 106 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 109 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 109 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 112 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 112 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 110 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 110 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 111 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 111 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 113 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 113 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 115 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 115 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 116 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 116 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 114 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 114 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 118 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 118 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 117 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 117 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 119 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 119 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 120 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 120 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 122 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 122 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 123 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 123 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 121 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 121 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 125 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 125 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 124 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 126 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 126 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 124 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 127 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 127 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 128 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 128 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 131 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 131 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 130 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 130 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 129 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 129 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 133 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 133 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 132 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 132 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 135 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 135 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 134 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 134 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 136 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 136 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 138 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 138 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 137 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 137 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-26 22:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 139 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-26 22:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 139 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}