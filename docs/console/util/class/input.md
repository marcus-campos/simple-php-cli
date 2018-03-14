# Input
The Input class contains methods related to what the console receives via user interaction.

## How to use?
This class can be accessed by `$this->util->input()` or can be instantiated.


## Methods

#### readLine ()
Returns the value entered by the user during the interaction. Ex:

```php
...
public function execute()
{
    $this->util->output()->writeLn("What is your name?");
    $name = $this->util->input()->readLine();
    $this->util->output()->breakLine();
}
...
```

Values ​​received by `$args` variable:

```php
        "Marcus Vinícius Campos"
```