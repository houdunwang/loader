<?php namespace houdunwang\loader;
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

use houdunwang\framework\build\Provider;
use houdunwang\framework\loader\Loader;

class LoaderProvider extends Provider {
	//延迟加载
	public $defer = true;

	public function boot() {
		//自动加载系统服务
		Loader::bootstrap();
		//设置自动加载
		Loader::register( [ $this, 'autoload' ] );
	}

	public function register() {
		$this->app->single( 'Loader', function () {
			return Loader::single();
		} );
	}
}