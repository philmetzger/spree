<?php
namespace AppBundle\Service;

/**
 * Class KeyGeneratorService
 */
class KeyGeneratorService {

    /**
     * @param string $str
     * @return string
     */
    public static function formatKeyString($str) {
        $key = UrlGenerator::formatURLString($str);

        return self::formatUrlString($str, $key);
    }

    /**
     * @param string $str
     * @param string $key
     * @return string
     */
    private static function formatUrlString($str, $key) {
        if (preg_match("/^[a-zA-Z0-9]+(.*)[a-zA-Z0-9]$/", $key) == 0) {
            $key = md5($str);
        }

        // Maximum 200 characters
        if (strlen($key) >= 200) {
            $key = substr($key, 0, 200);
        }

        return $key;
    }

    /**
     * @param string $key
     * @return boolean
     */
    private static function accountKeyExists($key) {
//        $dic = FrontController::getInstance()->getDefaultDependencyInjectionContainer();
//        $accountConnector = $dic->getInstanceOfClass(PgAccountConnector::class);
//        $account = $accountConnector->getByKey($key);
//
//        return (bool) $account;
    }

    /**
     * Returns an account key generated from firstname and lastname
     *
     * @param string $firstname
     * @param string $lastname
     * @return string
     */
    public static function getAccountKey($firstname, $lastname) {
        $firstname = trim(ucfirst(strtolower($firstname)));
        $lastname = trim(ucfirst(strtolower($lastname)));

        if (preg_match('/([\s\-]+)(\w)/iu', $firstname)) {
            $firstname = preg_replace_callback('/([\s\-]+)(\w)/iu', function ($matches) {
                return '_' . strtoupper($matches[2]);
            }, $firstname);
        }

        if (preg_match('/([\s\-]+)(\w)/iu', $lastname)) {
            $lastname = preg_replace_callback('/([\s\-]+)(\w)/iu', function ($matches) {
                return (($matches[1] == '-') ? $matches[1] : '_') . strtoupper($matches[2]);
            }, $lastname);
        }

        $proposalKey = $firstname . ' ' . $lastname;

        $proposalKey = KeyGeneratorService::formatKeyString($proposalKey);
        $key = $proposalKey;

        $counter = 2;
        while (self::accountKeyExists($key)) {
            $key = $proposalKey . "$counter";
            $counter++;
        }
        return $key;
    }
}