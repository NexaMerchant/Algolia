<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2025-04-18 13:33:31
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\Algolia\Console\Commands;

use NexaMerchant\Apps\Console\Commands\CommandInterface;

class Install extends CommandInterface 

{
    protected $signature = 'Algolia:install';

    protected $description = 'Install Algolia an app';

    public function getAppVer() {
        return config("Algolia.version");
    }

    public function getAppName() {
        return config("Algolia.name");
    }

    public function handle()
    {
        $this->info("Install app: Algolia");
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Algolia Install cannelled");
            return false;
        }
    }
}