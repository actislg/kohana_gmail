<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	
		'type'       => 'imap',
		'connection' => array(
			'hostname'   => '{imap.gmail.com:993/ssl}[Gmail]/All Mail',
			'username'   => 'syssfe@gmail.com',
			'password'   => 'syssfe2013'
		),
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	)
;