# rajaongkir API PHP

API ini digunakan ( baru tersedia ) untuk type akun starter

Penggunaan

Load package dengan autoload
```php
include 'vendor/autoload.php';
```

Ambil data provinsi
```php
$data = RajaOngkir\RajaOngkir::Provinsi()->all();
```

Ambil data provinsi berdasarkan id provinsi
```php
$data = RajaOngkir\RajaOngkir::Provinsi()->find($id);
```

Ambil data provinsi berdasarkan nama provinsi
```php
$data = RajaOngkir\RajaOngkir::Provinsi()->search('province', $name = "ja")->get();
```

Ambil data kota
```php
$data = RajaOngkir\RajaOngkir::Kota()->all();
```

Ambil data kota berdasarkan id kota
```php
$data = RajaOngkir\RajaOngkir::Kota()->find($id);
```

Ambil data kota berdasarkan nama kota
```php
$data = RajaOngkir\RajaOngkir::Kota()->search('city_name', $name = "banyu")->get();
```

Ambil data kota berdasarkan provinsi
```php
$data = RajaOngkir\RajaOngkir::Kota()->byProvinsi($provinsi_id)->get();
```

Ambil data kota berdasarkan nama kota di suatu provinsi
```php
$data = RajaOngkir\RajaOngkir::Kota()->byProvinsi($provinsi_id)->search('city_name', $name)->get();
```

Ambil Biaya Pengiriman
```php
$data = RajaOngkir\RajaOngkir::Cost([
	'origin' 		=> 501, // id kota asal
	'destination' 	=> 114, // id kota tujuan
	'weight' 		=> 1700, // berat satuan gram
	'courier' 		=> 'jne', // kode kurir pengantar ( jne / tiki / pos )
]);
```
