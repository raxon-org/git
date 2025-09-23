<?php
namespace Package\Raxon\Git\Trait;

use Raxon\App;

use Raxon\Module\Core;
use Raxon\Module\Dir;
use Raxon\Module\File;

use Raxon\Node\Module\Node;

use Exception;
trait Repository {

    /**
     * @throws Exception
     */
    public function add(): void
    {
        Core::interactive();
        $object = $this->object();

        ddd('add repository');
    }
}

