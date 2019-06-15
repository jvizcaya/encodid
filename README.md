# Encodid (Laravel helpers for encode id)

**Encodid** Agrega helpers para Laravel 5.7+ para codificar y decodificar números enteros, permitiendo de esta manera generar cadenas de texto únicas y no secuenciales a partir del ID de nuestras tablas, de esta manera podemos mostrar la cadena generada en las rutas (URL) publicas en lugar del valor original, con esto las rutas pueden ser menos predecibles agregando de esta manera una capa extra de seguridad a nuestras aplicaciones.

Encodid hace uso de la librería para PHP [Hashids](https://github.com/ivanakimov/hashids.php), para codificar y decodificar los valores de ids, y esta inspirado en el paquete para Laravel [laravel-hashids](https://github.com/vinkla/laravel-hashids).


## Instalación

```
composer require jvizcaya/encodid
```
## Modo de uso

Una vez ha sido instalado el paquete correctamente los helpers estarán disponibles en cualquier parte de la aplicación.

### Codificar valores

Para generar la cadena codificada a partir del valor del ID, hacemos uso del helper **`encodeId()`** al cual debemos pasar como parámetro el valor del id a codificar.


```php
  $id = 347;
  $encode_id = encodeId($id); // 3kTMdQl1zu
```
Podemos hacer uso del helper **`encodeId()`** en nuestras vistas o crear un [Eloquent Accessor](https://laravel.com/docs/5.8/eloquent-mutators#defining-an-accessor) personalizado a nuestros modelos.

```php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * Model Accessors.
     *
     *
     */
     public function getEncodeidAttribute()
     {
         return encodeId($this->id);
     }
}
```
De esta manera tenemos disponible el valor de la cadena codificada desde el propio objeto del modelo.

```php
  $post->encode_id;  // LkTM1Ql1Xa
```
De forma opcional podemos generar una cadena codificada a partir de un array de ids con el helper **`encodeIds()`**

```php
  $ids = [14, 36, 89];
  $encode_ids = encodeIds($ids); // o2fXhVWKlu
```

### Decodificar valores

Para recuperar el valor original del id de la cadena codificada hacemos uso del helper **`decodeId()`** al cual debemos pasar como parámetro el valor de la cadena codificada.

```php
  $encode_id = '3kTMdQl1zu';
  $id = decodeId($encode_id); // 347
```

El helper **`decodeIds()`** nos permite recupera el valor original de un array de ids codificados anteriormente con la función **`encodeIds()`**.

```php
  $encode_ids = 'o2fXhVWKlu';
  $ids = decodeIds($encode_ids); // [14, 36, 89]
```
En ocasiones nos podemos encontrar la necesidad de decodificar un array cadenas codificadas, para este caso podemos hacer uso del helper **`decodeArrayIds()`**.

```php
  $encode_ids = [o2fXhVWKlu, uLkmPqwr1u, QP13YuOp7T];
  $ids = decodeArrayIds($encode_ids); // [42, 1935, 5456]
```

## Configuración

Podemos configurar la manera en que se codifica el id o array de ids, publicando al archivo de configuración.

```
php artisan vendor:publish --provider="Jvizcaya\Encodid\EncodidServiceProvider"
```
Esto creara el archivo **encodid.php** dentro del directorio **config**, luego de esto podemos cambiar las siguientes parametros de configuración.

**salt_string** La cadena sal que sera utilizada por la librería hashids para la codificación.

**lenght** La longitud de la cadena codificada.

**format_string** Patrón alfanumérico con los caracteres que pueden estar presente en la cadena codificada.

---

## License

[MIT](LICENSE) © Jorge Vizcaya | jorgevizcayaa@gmail.com
