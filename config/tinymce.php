<?php

return [

    'cdn' => '/vendor/js/tinymce/tinymce.min.js',

	'params' => [
		"selector" => "#tinymce",
		"language" => 'en',
		"theme" => "modern",
		"skin" => "lightgray",
		"plugins" => [
		],/*
		"plugins" => [
	         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
	         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
	         "save table contextmenu directionality emoticons template paste textcolor"
		],*/
		"toolbar" => "styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	]

];
