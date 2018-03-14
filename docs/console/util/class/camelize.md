# Camelize

The Camelize class contains methods related to string conversion for strings formatted according to the camelCase.

## How to use?

This class can be accessed by `$this->util->camelize()` or can be instantiated.

## Methods

#### format (string, separator)

Returns a string formatted for the default camel case. Ex:

```php
...
public function execute ()
{
    $camelString = $this->util->camelize()->format("this_is_a_snake_string", "_");
}
...
```

Value received by `$camelString` variable:

```php
        "thisIsASnakeString"
```