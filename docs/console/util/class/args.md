# Args

The Args class contains methods related to what the console receives via parameters in its execution.

## How to use?

This class can be accessed by `$this->util->args()` or can be instantiated.


## Methods

#### arguments ()

Returns an array containing what was passed via parameters during execution of a command. Ex:

```php
...
public function execute ()
{
    $ args = $this->util->args()->arguments();
}
...
```

Values ​​received by `$args` variable:

```php
        [
            'commands' => [...],
            'options' => [...],
            'flags' => [...],
            'arguments' => [...],
        ]
```