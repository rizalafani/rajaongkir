<?php

namespace RajaOngkir\App;

class Cost extends Api {
	public function __construct($attributes){
		$this->overWriteOptions = [
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => http_build_query($attributes),
			CURLOPT_HTTPHEADER => [
				"content-type: application/x-www-form-urlencoded",
	    		"key: ".$this->apiKey
			]
		];

		$this->GetData();
	}

	protected $method = "cost";	
}