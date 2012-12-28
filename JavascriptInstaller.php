<?php

namespace Adduc/JavascriptInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class JavascriptInstaller extends LibraryInstaller {

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package) {
        var_dump($package);
        throw new \Exception("asdf");
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType) {
        return 'javascript-installer' === $packageType;
    }

}
