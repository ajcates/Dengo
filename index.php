<?
goto parseUrl;

parseUrl:
	
	$uriArray = explode('/', $_SERVER['QUERY_STRING']);
	$firstItem = reset($uriArray) . '_';
	
	
//controller
$controller = <<<CNTRL
	goto $firstItem;
		
	_:
		echo 'hello';
		goto end;
	what_:
		echo 'what';
		
		//$firstItem:
			//echo '404';
		goto end;
	end:
		return ':(';
CNTRL;
//echo $controller;

eval($controller);