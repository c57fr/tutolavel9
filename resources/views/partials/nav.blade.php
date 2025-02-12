<?php
// define('URI', substr($_SERVER['PATH_INFO'] ?? '/', 1));
// define('URI', substr($_SERVER['REQUEST_URI'] ?? '/', 1));
use Barryvdh\Debugbar\Facades\Debugbar as DebugbarGc7;

if (!defined('ROOT')) {
	define('ROOT', './../../');
}

// echo URI;
function isActive($page) {

    // DebugBarGc7::addMessage(substr($page, 0, 5), 'Page');
	return $page == URI  ? ' active' : '';
}
DebugBarGc7::addMessage(URI, 'URI');

$menus = [
	'GC7' => [
		'owner' => 'GC7',
		'color' => 'brown',
		'pages' => [
			'gc7users'  => 'Users',
			'gc7qrcode' => [
				'' => [
					'gc7qrcode'          => 'QrCode',
					'api/friend/grcote7' => 'GrCOTE7',
				],
				'Generators' => [
					'gc7qrfriends' => 'Friends',
				],
				'Scanners' => [
					'gc7qrcode/1' => 'Qr1 (Bad QR Scanner)',
					'gc7qrcode/2' => 'Qr2 (QR Generator)',
					'gc7qrcode/3' => 'Qr3 (QR-Scanner)',
					'gc7qrcode/4' => 'Qr4 (Barcode In-Work)',
					'gc7qrcode/5' => 'Qr5 (Asap)',
				],
			],
			'gc7test' => 'Test',
		],
	],
	'Momo' => [
		'owner' => 'Momo',
		'color' => 'yellow',
		'pages' => [
			'about'            => 'About',
			'contact'          => 'Contact',
			'groupemiddleware' => 'Middleware',
			'userswithmodel'   => 'User',
			'httprequest'      => 'HttpRequest',
			'sessionlogin'     => 'Session Login',
			'showlist'         => 'Show list',
			'pagination'       => 'DB Pagination',
			'save'             => 'Save data in DB',
		],
	],
];

?>
@include('partials.nav_blocks', ['menus' => $menus])
