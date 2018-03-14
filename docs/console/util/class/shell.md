#Shell
The Shell class contains methods related to executing commands using operating system resources (If it is in Linux: "Terminal." If it is in Windows: "Command Prompt").

## How to use?
This class can be accessed by `$this->util->shell()` or can be instantiated.

## Methods

#### shell (cmd)
Executes a command. Ex:

```php
...
public function execute()
{
    $output = $this->util->shell()->exec("ls -lhart");
}
...
```

Value received by the `$output` variable:
```console
        
        drwxr-xr-x  4 foo foo 4,0K fev 26 10:04 ..
        -rwxrwxrwx  1 foo foo 1020 fev 26 10:04 update_doc.sh
        -rwxrwxrwx  1 foo foo 299K fev 26 10:19 composer-setup.php
        -rw-rw-r--  1 foo foo  448 fev 26 15:14 .editorconfig
        -rw-rw-r--  1 foo foo  773 fev 26 15:14 generateEntitys.php
        -rwxrwxr-x  1 foo foo  189 fev 28 14:14 run
        -rw-rw-r--  1 foo foo  160 fev 28 16:02 .gitignore
        drwxrwxrwx  3 foo foo 4,0K mar  5 13:26 features
        drwxrwxr-x  3 foo foo 4,0K mar  6 13:28 infra
        drwxrwxrwx  2 foo foo 4,0K mar  7 13:33 bin
        -rw-rw-r--  1 foo foo 2,1K mar  8 08:29 readme.md
        drwxrwxr-x 24 foo foo 4,0K mar  8 08:43 vendor
        -rw-rw-r--  1 foo foo  869 mar  9 10:44 composer.json
        -rw-rw-r--  1 foo foo 1,7K mar  9 10:44 behat.yml
        -rwxrwxr-x  1 foo foo 3,1K mar  9 10:44 setup
        drwxrwxrwx  2 foo foo 4,0K mar  9 10:44 config
        -rw-rw-r--  1 foo foo 186K mar  9 10:44 composer.lock
        drwxrwxrwx 11 foo foo 4,0K mar  9 10:44 .
        drwxrwxrwx  5 foo foo 4,0K mar  9 13:15 docs
        drwxrwxr-x  6 foo foo 4,0K mar 12 09:46 console
        drwxrwxrwx  3 foo foo 4,0K mar 12 09:46 .idea
        drwxrwxrwx  8 foo foo 4,0K mar 12 09:46 .git
        
```








# Shell
A classe Shell contém métodos relacionados execução de comandos utilizando recursos do sistema operacional (Se for no Linux: "Terminal". Se for no Windows: "Prompt de Comandos").

## Como utilizar?
Esta classe pode ser acessada pelo `$this->util->shell()` ou pode ser instânciada.


## Métodos

#### shell(cmd)
Executa um comando. Ex:

```php
...
public function execute()
{
    $output = $this->util->shell()->exec("ls -lhart");
}
...
```

Valor recebido pela variável `$output`:
```console
        
        drwxr-xr-x  4 foo foo 4,0K fev 26 10:04 ..
        -rwxrwxrwx  1 foo foo 1020 fev 26 10:04 update_doc.sh
        -rwxrwxrwx  1 foo foo 299K fev 26 10:19 composer-setup.php
        -rw-rw-r--  1 foo foo  448 fev 26 15:14 .editorconfig
        -rw-rw-r--  1 foo foo  773 fev 26 15:14 generateEntitys.php
        -rwxrwxr-x  1 foo foo  189 fev 28 14:14 run
        -rw-rw-r--  1 foo foo  160 fev 28 16:02 .gitignore
        drwxrwxrwx  3 foo foo 4,0K mar  5 13:26 features
        drwxrwxr-x  3 foo foo 4,0K mar  6 13:28 infra
        drwxrwxrwx  2 foo foo 4,0K mar  7 13:33 bin
        -rw-rw-r--  1 foo foo 2,1K mar  8 08:29 readme.md
        drwxrwxr-x 24 foo foo 4,0K mar  8 08:43 vendor
        -rw-rw-r--  1 foo foo  869 mar  9 10:44 composer.json
        -rw-rw-r--  1 foo foo 1,7K mar  9 10:44 behat.yml
        -rwxrwxr-x  1 foo foo 3,1K mar  9 10:44 setup
        drwxrwxrwx  2 foo foo 4,0K mar  9 10:44 config
        -rw-rw-r--  1 foo foo 186K mar  9 10:44 composer.lock
        drwxrwxrwx 11 foo foo 4,0K mar  9 10:44 .
        drwxrwxrwx  5 foo foo 4,0K mar  9 13:15 docs
        drwxrwxr-x  6 foo foo 4,0K mar 12 09:46 console
        drwxrwxrwx  3 foo foo 4,0K mar 12 09:46 .idea
        drwxrwxrwx  8 foo foo 4,0K mar 12 09:46 .git
        
```
