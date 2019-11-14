<?php


class FileUtils
{
    private $contents = array();

    // This method used to be static
    // But to handle caching, it had to become an instance method
    public function getContents($filePath)
    {
        if (isset(self::$contents[$filePath])) {
            return self::$contents[$filePath];
        }
        if (!file_exists($filePath)) {
            throw new \InvalidArgumentException(
                sprintf('Required file "%s" does not exist', $filePath)
            );
        }

        return self::$contents[$filePath] = file_get_contents($filePath);
    }

    public static function countNbLines($filePath)
    {
        // when getContents was turned to non-static, the developer updated
        // the call below. Unfortunately, they forgot to remove the static
        // keyword in the countNbLines() definition
        return substr_count(self::getContents($filePath), "\n");
    }
}

$fileUtils = new FileUtils();
$fileUtils->getContents('static-example.php');
//$fileUtils::countNbLines('static-example.php');

//$fileUtils = FileUtils::countNbLines('static-example.php');

var_dump($fileUtils);
