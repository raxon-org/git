<?php
namespace Package\Raxon\Git\Trait;

use Raxon\App;

use Raxon\Module\Core;
use Raxon\Module\Dir;
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
        $object = $this->object();

        $dir = new Dir();
        $read = $dir->read('/', true);
        ddd($read);
    }
}

