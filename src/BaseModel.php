<?php

namespace uujia\framework\tp\model;


use uujia\framework\base\traits\NameBase;

class BaseModel {
	use NameBase;
	
	public function __construct() {
		$this->init();
	}
	
	/**
	 * 初始化
	 */
	public function init() {
		$this->initNameInfo();
	}
	
	/**
	 * 类说明初始化
	 */
	public function initNameInfo() {
		$this->name_info['name'] = self::class;
		$this->name_info['intro'] = 'Model基础类';
	}
	
	
}