<?php
 
function main(array $args) : array
{
    return [
        'body' => json_encode($_ENV),
    ];
}
