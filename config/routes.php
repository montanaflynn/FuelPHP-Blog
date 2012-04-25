<?php
return array(
	'_root_'  => 'blog/index',
	'(:any)'      => 'blog/post/$1', // Routes /blog/entry_name to /blog/entry/entry_name
	'_404_'   => 'error/404',
);