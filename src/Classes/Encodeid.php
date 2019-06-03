<?php

namespace Jvizcaya\Encodid\Classes;

use Hashids\Hashids;

class Encodeid extends Hashids
{

      /**
       * Call parent constructor and
       * set configurations.
       *
       */
      public function __construct()
      {
            parent::__construct(
              config('encodid.salt_string'),
              config('encodid.lenght'),
              config('encodid.format_string')
            );

      }
}
