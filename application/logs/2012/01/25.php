<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-25 19:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-25 19:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-25 19:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-25 19:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-25 20:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-25 20:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-25 21:49:08 --- ERROR: Database_Exception [ 2013 ]: Lost connection to MySQL server during query ~ MODPATH/database/classes/kohana/database/mysql.php [ 162 ]
2012-01-25 21:49:08 --- STRACE: Database_Exception [ 2013 ]: Lost connection to MySQL server during query ~ MODPATH/database/classes/kohana/database/mysql.php [ 162 ]
--
#0 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(80): Kohana_Database_MySQL->set_charset('utf8')
#1 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /Users/marcelo/Documents/workspace/secreto/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'select id from ...', false, Array)
#3 /Users/marcelo/Documents/workspace/secreto/application/classes/controller/labsec.php(38): Kohana_Database_Query->execute()
#4 [internal function]: Controller_Labsec->action_home()
#5 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Labsec))
#6 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/marcelo/Documents/workspace/secreto/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/marcelo/Documents/workspace/secreto/index.php(109): Kohana_Request->execute()
#9 {main}