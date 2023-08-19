<?php

declare(strict_types=1);

namespace Bag2\string_generator;

use Generator;
use function Bag2\string_generate;
use function iterator_to_array;

class StringGenerateTest extends TestCase
{
    /**
     * @dataProvider charsProvider
     * @param positive-int $length
     * @param non-empty-list<string> $chars
     * @param list<string> $expected
     */
    public function test(int $length, array $chars, array $expected): void
    {
        $actual = string_generate($length, $chars);

        $this->assertEquals($expected, iterator_to_array($actual));
    }

    /**
     * @return Generator<array{int, non-empty-list<string>, list<string>}>
     */
    public static function charsProvider(): Generator
    {
        yield [1, ['a'], ['a']];
        yield [2, ['a'], ['aa']];
        yield [1, ['a', 'b'], ['a', 'b']];
        yield [2, ['a', 'b'], ['aa', 'ab', 'ba', 'bb']];
        yield [3, ['a', 'b'], ['aaa', 'aab', 'aba', 'abb', 'baa', 'bab', 'bba', 'bbb']];
        yield [3, ['あ', 'い'], ['あああ', 'ああい', 'あいあ', 'あいい', 'いああ', 'いあい', 'いいあ', 'いいい']];
    }
}
