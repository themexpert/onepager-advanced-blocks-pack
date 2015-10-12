<?php

return array(
	'slug'=>'nt-html-block',
	'name'=> 'NT HTML Block',
	'groups'=>['HTML', 'ShortCode'],
	'contents'=>[
		['name'=>'html', 'type'=>'textarea', 'value'=>'hello world'],
	],
	'styles'=>[
		['name'=>'margin', 'placeholder'=>'10px 10px 10px 10px', 'value'=>'0px 0px 0px 0px'],
		['name'=>'padding', 'placeholder'=>'50px 50px 50px 50px', 'value'=>'50px 50px 50px 50px'],
		['name'=>'background-color', 'type'=>'color', 'value'=>'#ddd'],
		['name'=>'background-image', 'type'=>'image'],
		['name'=>'background-repeat', 'type'=>'select', 'options'=>array(
			'repeat'=>'repeat',
			'repeat-x'=>'repeat-x',
			'repeat-y'=>'repeat-y',
			'no-repeat'=>'no-repeat',
			'initial'=>'initial',
			'inherit'=>'inherit',
		), 'value'=>'repeat']
	]
);