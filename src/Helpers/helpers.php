<?php

declare(strict_types=1);

use Jvizcaya\Encodid\Classes\Encodeid;


if (! function_exists('encodeId'))
{
    /**
     * Return the encoded hash string
     *
     * @param  integer $id  the id (integer number)
     * @return string
     */
    function encodeId(int $id): string
    {
        $encodeid = new Encodeid();

        return $encodeid->encode($id);

    }
}



if (! function_exists('encodeIds'))
{
    /**
     * Return array with encoded ids
     *
     * @param  integer $array
     * @return string
     */
    function encodeIds(array $array): string
    {
        $encodeid = new Encodeid();

        return $encodeid->encode($array);
    }
}



if (! function_exists('decodeId'))
{
    /**
     * Return the original integer number or array of integers
     * from the encoded hash string
     *
     * @param  string $string the hash string
     * @return integer|array
     */
      function decodeId(string $string)
      {
          $encodeid = new Encodeid();

          return $encodeid->decode($string)[0];
      }
}



if (! function_exists('decodeArrayIds'))
{
    /**
     * Return the original array from the encoded array ids
     *
     * @param  array $array array with encoded ids
     * @return array
     */
      function decodeArrayIds(array $array): array
      {
            $values = [];

            $encodeid = new Encodeid();

            foreach ($array as $val){
              array_push($values, $encodeid->decode($val)[0]);
            }

            return $values;
      }
}
