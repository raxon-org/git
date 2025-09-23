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
        $node = new Node($object);
        $class = 'System.Git';
        $role = $node->role_system();
        $response = $node->list(
            $class,
            $role,
            [
                'limit' => 100000                
            ]
        );
        ddd($response);
    }
}

