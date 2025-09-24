<?php
namespace Package\Raxon\Git\Trait;

use Raxon\App;

use Raxon\Module\Core;
use Raxon\Module\File;

use Raxon\Node\Module\Node;

use Exception;
trait Setup {

    /**
     * @throws Exception
     */
    public function git_install(): void
    {
        Core::interactive();
        $object = $this->object();
        /**
         * scan dir if node System.Git has count: 0.
         */
    }
}

