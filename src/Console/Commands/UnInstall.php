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

class UnInstall extends CommandInterface 

{
    protected $signature = 'Algolia:uninstall';

    protected $description = 'Uninstall Algolia an app';

    public function getAppVer() {
        return config("Algolia.version");
    }

    public function getAppName() {
        return config("Algolia.name");
    }

    public function handle()
    {
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Algolia UnInstall cannelled");
            return false;
        }
    }
}