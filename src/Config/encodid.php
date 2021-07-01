<?php

declare(strict_types=1);

return [
    /*
    |------------------------------------------------------
    | Hash Unique
    |------------------------------------------------------
    |
    | Set a salt string to make the hash ids unique
    |
    */
    'salt_string' => 'y0ur-SaLt-Str1nG',

    /*
    |------------------------------------------------------
    | Hash Length
    |------------------------------------------------------
    |
    | Set the hash length (integer number)
    |
    | Note that output ids are only padded to fit at least
    | a certain length. It doesn't mean that they will be
    | exactly that length.
    |
    */
    'length'  => 16,

    /*
    |------------------------------------------------------
    | Hash Output Format
    |------------------------------------------------------
    |
    | custom alphanumeric string to configure the format output
    |
    */
    'format_string' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'
];
