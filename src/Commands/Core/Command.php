<?php
/**
 * User: marcus-campos
 * Date: 06/03/18
 * Time: 07:56
 */

namespace App\Commands\Core;


use Console\BaseCommand;
use Console\Contracts\ConsoleContract;

class Command extends BaseCommand implements ConsoleContract
{

    /**
     *
     */
    public function makeCommand()
    {
        $className = $this->util->args()['arguments'][0];
        $fileName = ROOT_PATH . '/src/Commands/' . $className . '.php';
        $commandsFile = ROOT_PATH . '/App/Config/Command.php';
        $recipeCommand = ROOT_PATH . '/bin/Recipes/Commands/Command.recipe';
        $recipe = file_get_contents($recipeCommand);
        $recipe = str_replace('%{ClassName}%', $className, $recipe);

        if (file_exists($fileName)) {
            $this->util->output()->writeLn("Já existe um comando com este nome.", 'red');
            return;
        }

        file_put_contents($fileName, $recipe);
        $this->util->output()->writeLn("Novo comando criado em: " . $fileName, 'green');
        $this->util->output()->writeLn("[ATENÇÃO] Não esqueça de registrar seu comando no arquivo: " . $commandsFile, 'green');
    }
}
