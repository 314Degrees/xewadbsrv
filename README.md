# xewadbsrv

xewadbsrv adalah API webservice berbasis PHP yang digunakan oleh [XEWA](https://github.com/314Degrees/xewa-customer) dan [XEWA Provider](https://github.com/314Degrees/xewa-provider) untuk akses data ke host database MySQL. Ketika diakses, service ini akan mengembalikan data berbentuk **JSON**.

## Docs

### Add Costume

`/add_costume.php?{data}`

#### Data

* name _`<string>`_  
  Nama dari kostum yang akan disimpan ke dalam database.
  
* stock _`<integer>`_  
  Banyak stok dari kostum yang akan disimpan ke dalam database.
  
* image_link _`<string>`_  
  Link gambar dari kostum yang akan disimpan ke dalam database.
  Sertakan `http://` atau `https://`
  
* description _`<string>`_  
  Deskripsi dari kostum yang akan disimpan ke dalam database.
  
* gender _`{L|P|U}`_  
  Gender dari kostum yang akan disimpan ke dalam database.
  L : Laki-laki
  P : Perempuan
  U : Unisex
  
* size _`{S|M|L|XL}`_  
  Ukuran dari kostum yang akan disimpan ke dalam database.
  S : Small
  M : Medium
  L : Large
  XL : Extra Large
  
* price _`<integer>`_  
  Harga dari kostum yang akan disimpan ke dalam database.
  
> Example :
> `/add_costume.php?name=Kostum Festival&stock=5&image_link=https://domain.com/image.jpeg&description=Kostum bagus sekali&gender=L&size=L&price=50000`

#### Result `application/json`

_`object`_  
 ┗ query_result _`array`_  
   ┗ isSuccess _`boolean`_  
    `true` jika data berhasil tersimpan di database  
    `false` jika data gagal tersimpan di database
