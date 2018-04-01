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
    $ args = $this->util->args()->getCommands();
}
...
```

Functions:

```php
       ...
            $this->util->args()->getCommand('command name'); //Return one command
            $this->util->args()->getCommands(); //Return all commands
            
            $this->util->args()->getOption('Option name'); //Return one option
            $this->util->args()->getOptions(); //Return all options
            
            $this->util->args()->getFlag('flag name'); //Return one flag
            $this->util->args()->getFlags(); //Return all flags 
            
            $this->util->args()->getArguments(); //Return all arguments 
       ...
```
