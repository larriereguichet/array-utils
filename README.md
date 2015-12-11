# array-utils
PHP array utils functions

This component provide a PHP static class for array utils functions and expose these as regular PHP functions.

Static class usage:
```
use
...
$array = [1, 2, [1, 2, 3, 4]];
$arrayAsString = ArrayUtils::recursiveImplode(', ', $array);
// 1, 2, 1, 2, 3, 4
...
```

Regular function usage:
```
$array = [1, 2, [1, 2, 3, 4]];
$arrayAsString = recursiveImplode(', ', $array);
// 1, 2, 1, 2, 3, 4
```
