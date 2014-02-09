<?php
namespace Altax\Script;

class ScriptHandler
{
    /**
     * remove autoload configuration in autoload_files.php generated by composer.
     * 
     * autoload_files.php includes '/phpseclib/phpseclib/phpseclib/Crypt/Random.php'.
     * and composer autoloader defines `crypt_random_string` function at initialize process.
     *
     * If you load phpseclib in a altax task configuration files (ex `.altax/config.php`)
     * using composer autoloading. You will get a error 
     * `PHP Fatal error:  Cannot redeclare crypt_random_string()`.
     * In order to prevent the error. remove this settings.
     *
     * @return [type] [description]
     */
    public static function removeAutoloadFiles()
    {
        $autoloadFile = realpath(__DIR__."/../../../vendor/composer/autoload_files.php");
    }

}