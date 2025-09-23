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
        $read = $dir->read('/mnt/Vps3/Mount/Domain/');
        foreach($read as $nr => $file){
            if($file->type === Dir::TYPE){
                $test_dir = $file->url . '.git' . $object->config('ds');
                if(Dir::exist($test_dir)){
                    //add $file->url to 
                    $command = 'app raxon/git repository add -directory="' . $file->url . '"';
                    Core::execute($object, $command, $output, $notification);
                    if($output){
                        echo $output . PHP_EOL;
                    }
                    if($notification){
                        echo $notification . PHP_EOL;
                    }
                }
            }
        }        
    }
}

