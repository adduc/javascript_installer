<?php

namespace Adduc\JavascriptInstaller;

use Composer\Composer;
use Composer\Installer\LibraryInstaller;
use Composer\IO\IOInterface;
use Composer\Package\PackageInterface;



class JavascriptInstaller extends LibraryInstaller {

    public function __construct(IOInterface $io, Composer $composer, $type = 'library') {
        parent::__construct($io, $composer, $type);

        $extra = $this->composer->package->getExtra();
        if(isset($extra['javascript-dir'])) {
            $this->javascriptDir = $extra['javascript-dir'];
        } else {
	    var_dump($this->composer);
            throw new \InvalidArgumentException("javascript-dir must be defined in extra");
        }
        

    }

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package) {
        $this->initializeJavascriptDir();
        $targetDir = $package->getTargetDir();

        return ($this->javascriptDir ? $this->javascriptDir.'/' : '') . $package->getPrettyName() . ($targetDir ? '/'.$targetDir : '');
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType) {
        return 'javascript-library' === $packageType;
    }

    public function initializeJavascriptDir() {
        $this->filesystem->ensureDirectoryExists($this->javascriptDir);
        $this->javascriptDir = realpath($this->javascriptDir);        
    }

}
