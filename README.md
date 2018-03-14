# Build commands

To build commands just run `php run make: command <command_name>`.

### Util


When you create your command, you will have access to the `Util` class. It will normally be available within your class scope, see how you use it:

```php
<?php

namespace App\Commands;


use Console\BaseCommand;
use Console\Contracts\ConsoleContract;

class ClassName extends BaseCommand implements ConsoleContract
{
    public function execute()
    {
        //Get the argument in the first position
        $argument = $this->util->args()['arguments'][0];
        //Prints a line in the console
        $this->util->output()->writeLn('Hello world!', 'green');
        //Prints a line in the console containing the value passed in the parameter
        $this->util->output()->writeLn('My param ' . $argument, 'green');
    }
}
``` 
The `Util` class contains methods to help when creating your command, follow the list of some of them (click to know more).

* [args()](./docs/console/util/class/args.md)
* [output()](./docs/console/util/class/output.md)
* [camelize()](./docs/console/util/class/camelize.md)
* [shell()](./docs/console/util/class/shell.md)
* [input()](./docs/console/util/class/input.md)

### How to register your command?

To register your command, simply access the Command class, located in the `... /console/Command.php` file, add another item to the `$commands` array. Ex:
```php
    private $commands = [
           ...
            'new:command' => [
                'action' => MyCommand::class.'@execute',
                'params' => [
                               'param1',
                               'param2',
                               'param3',
                               ...
                           ],
                'description' => 'My command description',
            ],
           ...
        ];
```

Ex2:

Command without parameters
```php
    private $commands = [
           ...
            'sympla' => [
                'action' => SymplaCommand::class.'@inspire',
                'description' => 'Descrição do meu outro comando',
            ],
           ...
        ];
```

Note: The parameters registered in this array are only descriptive by the help function.

### How to execute a command?

To execute a command simply type:

```bash
    php run <nome_do_comando>
```
Ex: 
```bash
    php run help
```

If the command has any parameters, execute it as follows:

```bash
    php run <nome_do_comando> <parametro1> <parametro2>
```

Ex: 
```bash
    php run make:command TestCommand
```
