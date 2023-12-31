<?php

namespace marqu3s\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Yii2InstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new CommonInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
        // Nothing to do here
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
        // Nothing to do here
    }
}
