# Output
The Output class contains methods related to outputting text while executing commands.

## How to use?
This class can be accessed by `$this->util->output()` or can be instantiated.

## Methods

#### write (string, foregroundColor, backgroundColor)
Print the contents on the console. Ex:

```php
...
public function execute()
{
    $this->util->output()->write("Hello World");
    $this->util->output()->write("Hello World ", "green");
    $this->util->output()->write("Hello World ", "green", "black");
}
...
```

Output:
```console
Hello World Hello World Hello World foo@bar:~$
```

#### writeLn (string, foregroundColor, backgroundColor)
Prints the contents in the console and breaks a line. Ex:

```php
...
public function execute()
{
     $this->util->output()->writeLn("Hello World");
     $this->util->output()->writeLn("Hello World", "green");
     $this->util->output()->writeLn("Hello World", "green", "black");
}
...
```

Output:
```console
Hello World
Hello World
Hello World
foo@bar:~$
```

#### breakLine ()
Wrap a line on the console. Ex:

```php
...
public function execute()
{
     $this->util->output()->write("Hello World")->breakLine();
}
...
```

Output:
```console
Hello World
foo@bar:~$
```