<?php
namespace Package\Raxon\Git\Trait;

use Raxon\App;

use Raxon\Module\Core;
use Raxon\Module\File;

use Raxon\Node\Module\Node;

use Exception;
trait Main {

    /**
     * @throws Exception
     */
    public function sync(): void
    {
        Core::interactive();
//        $command = 'curl -fsSL https://deno.land/install.sh | sh';
//        exec($command, $output);
//        echo implode(PHP_EOL, $output) . PHP_EOL;
        $object = $this->object();
        d('Initializing sync system...');    
    }
}

