<?php

namespace App;

class SortDownloads
{
    static protected $downloadsPath = 'C:\\Users\\User\\Downloads';
    static protected $newFolder = 'C:\\Users\\User\\Downloads\\myfolder';
    static protected $extensions = 'jpg|pdf|docx|zip|iso|exe';
    static protected $foundItems = [];

    /**
     * Execution point.
     */
    public static function execute()
    {
        /** check directory exists */
        if(file_exists(self::$newFolder) === FALSE)
        {
            mkdir(self::$newFolder);
        }

        printf("Searching downloads directory for following file extensions: %s\n", self::$extensions);

        self::getFilesAndFolders();
        
        printf("Found %d items\n", sizeof(self::$foundItems));

        if(sizeof(self::$foundItems) > 0)
        {
            self::moveItemsToFolder();

            printf("Items have been moved to %s", self::$newFolder);
        }
    }

    /**
     * Scans files and folders in $downloadsPath and pushes results that match particular extensions to $foundItems.
     */
    public static function getFilesAndFolders()
    {
        foreach(scandir(self::$downloadsPath) as $item)
        {
            if(preg_match('/.'.self::$extensions.'$/', $item) != FALSE)
            {
                array_push(self::$foundItems, $item);
            }
        }
    }

    /**
     * Moves found items to folder specified in $newFolder
     */
    public static function moveItemsToFolder()
    {
        foreach(self::$foundItems as $item)
        {
            rename(self::$downloadsPath.'\\'.$item, self::$newFolder.'\\'.$item);
        }
    }
}

SortDownloads::execute();