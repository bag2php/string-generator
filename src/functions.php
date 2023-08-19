<?php

declare(strict_types=1);

namespace Bag2;

use Generator;

/**
 * @param positive-int $length
 * @param list<string> $chars
 */
function string_generate(int $length, array $chars): Generator
{
    if ($length <= 1) {
        foreach ($chars as $char) {
            yield $char;
        }
        return;
    }

    foreach (string_generate($length - 1, $chars) as $string) {
        foreach ($chars as $char) {
            yield $string . $char;
        }
    }
}
