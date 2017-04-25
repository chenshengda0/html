<?php
return array(
	//'配置项'=>'配置值'
	'URL_CASE_INSENSITIVE'  =>  true,  //url小写
	'DEFAULT_MODULE'        =>  'Home',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', // 默认操作名称
	//mysql配置
	'DB_TYPE'               =>  'MySQL',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'idielian_erp',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '231510622Abc@',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'e_',    // 数据库表前缀
	
	'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
	
	//定义常量
	'TMPL_PARSE_STRING'  	=>	array(     
			'__FONTS__' => '/Public/fonts', // 更改默认的/Public 替换规则     
			'__JS__'     => '/Public/js', // 增加新的JS类库路径替换规则     
			'__CSS__'     => '/Public/css', // 增加新的JS类库路径替换规则     
			'__IMG__'     => '/Public/images', // 增加新的JS类库路径替换规则     
			'__UPLOAD__' => '/Uploads', // 增加新的上传路径替换规则
            '__ACOMMON__'=> '/Admin/View/Common',
            '__HTML__'=> '/Public/html',
		),
);