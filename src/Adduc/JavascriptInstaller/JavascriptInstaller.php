<?php

namespace Adduc\JavascriptInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class JavascriptInstaller extends LibraryInstaller {

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package) {
        $extra = $package->getExtra();
        if(isset($extra['javascript-dir'])) {
            return $extra['javascript-dir'];
        } else {
	    var_dump($this->composer);
            throw new \InvalidArgumentException("javascript-dir must be defined in extra");
        }
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType) {
        return 'javascript-library' === $packageType;
    }

}
