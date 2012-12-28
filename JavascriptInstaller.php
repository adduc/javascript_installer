<?php

namespace Adduc/JavascriptInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class JavascriptInstaller {

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package) {
        
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType) {
        return 'javascript-installer' === $packageType;
    }

}
