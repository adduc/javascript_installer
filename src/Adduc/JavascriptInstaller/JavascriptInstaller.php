<?php

namespace Adduc\JavascriptInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class JavascriptInstaller extends LibraryInstaller {

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package) {
        if(isset($package->extra['javascript-path'])) {
            return $package->extra['javascript-path'];
        } else {
            throw new \InvalidArgumentException("javascript-path must be defined in extra");
        }
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType) {
        return 'javascript-library' === $packageType;
    }

}
