<?php
IncludeModuleLangFile(__FILE__);
class ylab_fruits extends CModule
{
    public $MODULE_ID = 'ylab.fruits';
    public $MODULE_VERSION;
    public $MODULE_VERSION_DATE;
    public $MODULE_NAME;
    public $MODULE_DESCRIPTION;
    public $MODULE_GROUP_RIGHTS = 'Y';
    public $PARTNER_NAME = 'YLab';
    public $PARTNER_URI = 'http://ylab.io';

    public function __construct()
    {
        //-------------------доступ к файлу с массивом версий и установка свойств класса ----------------------------------------
        $arModuleVersion = array();
        include __DIR__ . '/version.php';
        if (is_array($arModuleVersion) && array_key_exists('VERSION', $arModuleVersion))
        {
            $this->MODULE_VERSION = $arModuleVersion['VERSION'];
            $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        }
        //---------------------------инициализация остальных свойств-------------------------------------------
        $this->MODULE_NAME = getMessage('YLAB_FRUITS_MODULE_NAME');
        $this->MODULE_DESCRIPTION = getMessage('YLAB_FRUITS_MODULE_NAME_DESCRIPTION');

    }
    //**********************************************************************
    //                             * имплементация *
    //**********************************************************************

    public function doInstall()
    {
        global $APPLICATION;

        //$this->installFiles();
        $this->installDB();

        $APPLICATION->IncludeAdminFile(getMessage('YLAB_FRUITS_INSTALL_TITLE'), __DIR__ . '/step1.php');
    }

    public function doUninstall()
    {
        global $APPLICATION;
        $this->uninstallDB();
        //$this->uninstallFiles();
        $APPLICATION->IncludeAdminFile(getMessage('YLAB_FRUITS_UNINSTALL_TITLE'), __DIR__ . '/unstep1.php');
    }
    //**********************************************************************
    //                             *DATABASE*
    //**********************************************************************
    public function installDB()
    {
        global $DB;
        $DB->RunSQLBatch(__DIR__.'/db/mysql/install.sql');
        registerModule($this->MODULE_ID);
        return true;
    }

    public function uninstallDB()
    {
        global $DB;
        $DB->runSQLBatch(__DIR__.'/db/mysql/uninstall.sql');
        UnRegisterModule($this->MODULE_ID);
        return true;
    }
    //*********************************************************************
    //                       *EVENTS*
    //*********************************************************************
    public function installEvents()
    {
        return true;
    }

    public function uninstallEvents()
    {
        return true;
    }
    //********************************************************************
    //                               *FILES*
    //*********************************************************************
    public function installFiles()
    {
        CopyDirFiles(
            __DIR__.'/admin',
            $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin',
            true,
            true
        );
        CopyDirFiles(
            __DIR__.'/components',
            $_SERVER['DOCUMENT_ROOT'] . '/bitrix/components',
            true,
            true
        );
        return true;
    }
    public function uninstallFiles()
    {
        DeleteDirFiles(
            __DIR__.'/admin',
            $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin'
        );
        DeleteDirFiles(
            __DIR__.'/components',
            $_SERVER['DOCUMENT_ROOT'] . '/bitrix/components'
        );
        return true;
    }
    //**************************************  END  *************************************
    //-----------------------------------------------------------------------------------
}
