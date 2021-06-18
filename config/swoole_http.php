<?php

return [
    /*
	|--------------------------------------------------------------------------
	| HTTP server configurations.
	|--------------------------------------------------------------------------
	|
	| @see https://www.swoole.co.uk/docs/modules/swoole-server/configuration
	|
	*/
	'server' => [
		'host' => env('SWOOLE_HTTP_HOST', '127.0.0.1'),
		'port' => env('SWOOLE_HTTP_PORT', '1215'),
		'public_path' => base_path('public'),

		// Determine if to use swoole to respond request for static files
		'handle_static_files' => env('SWOOLE_HANDLE_STATIC', false),
		'access_log' => env('SWOOLE_HTTP_ACCESS_LOG', true),
		'options' => [
			'pid_file' => env('SWOOLE_HTTP_PID_FILE', base_path('storage/logs/swoole_http.pid')),
			'log_file' => env('SWOOLE_HTTP_LOG_FILE', base_path('storage/logs/swoole_http.log')),
			'daemonize' => env('SWOOLE_HTTP_DAEMONIZE', false),

			// Normally this value should be 1~4 times larger according to your cpu cores.
			'reactor_num' => env('SWOOLE_HTTP_REACTOR_NUM', swoole_cpu_num()),
			'worker_num' => env('SWOOLE_HTTP_WORKER_NUM', swoole_cpu_num()),
			'task_worker_num' => env('SWOOLE_HTTP_TASK_WORKER_NUM', swoole_cpu_num()),
		],
    ],

    /*
	|--------------------------------------------------------------------------
	| Hot reload configuration
	|--------------------------------------------------------------------------
	|
	| Required: fswatch, inotify php extension
	|
	*/
	'hot_reload' => [
		'enabled' => env('SWOOLE_HOT_RELOAD_ENABLE', false),
		'recursively' => env('SWOOLE_HOT_RELOAD_RECURSIVELY', true),
		'directory' => env('SWOOLE_HOT_RELOAD_DIRECTORY', base_path()),
		'log' => env('SWOOLE_HOT_RELOAD_LOG', true),
		'filter' => env('SWOOLE_HOT_RELOAD_FILTER', '.php'),
	],
];
