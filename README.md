# Bag2\string_generator

## Usage

```php
use function Bag2\string_generate;

$chars = ['a', 'b', 'c'];

foreach (string_generate(3, $chars) as $string) {
    echo $string, EOL;
    // [output]
    // aaa, aab, aac, aba, abb, ... ccc
}
```
