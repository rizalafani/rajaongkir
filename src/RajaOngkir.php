<?php

namespace RajaOngkir;

use RajaOngkir\App\Provinsi;
use RajaOngkir\App\Kota;
use RajaOngkir\App\Cost;

class RajaOngkir {

	/* Singleton */
	protected static function GetInstance(){
		if( self::$obj == null ){
			self::$obj = new RajaOngkir;
		}

		return self::$obj;
	}
	protected static $obj = null;
	/* End Singleton */

	public static function __callStatic($name, $arguments){
		self::GetInstance()->__call($name, $arguments);
	}

	public function Provinsi(){
		return new Provinsi;
	}

	public function Kota(){
		return new Kota;
	}

	public function Cost($attributes){
		return new Cost($attributes);
	}

}