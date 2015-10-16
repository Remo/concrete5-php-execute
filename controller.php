<?php
namespace Concrete\Package\PhpExecute;

use Concrete\Core\Backup\ContentImporter,
    Package;

class Controller extends Package
{
    protected $pkgHandle = 'php_execute';
    protected $appVersionRequired = '5.7.5';
    protected $pkgVersion = '0.9.0';

    public function getPackageName()
    {
        return t('PHP Execute');
    }

    public function getPackageDescription()
    {
        return t('A package allowing you to run custom PHP code within your page');
    }

    protected function installXmlContent()
    {
        $pkg = Package::getByHandle($this->pkgHandle);

        $ci = new ContentImporter();
        $ci->importContentFile($pkg->getPackagePath() . '/install.xml');
    }

    public function install()
    {
        parent::install();
        $this->installXmlContent();
    }

    public function upgrade()
    {
        parent::upgrade();
        $this->installXmlContent();
    }

}