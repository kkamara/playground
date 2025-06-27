#!/usr/bin/env python3
import os, re, shutil

class SortDownloads:
    _downloadsPath = _newFolder = ''
    _extensions = 'jpg|pdf|docx|zip|iso'
    _foundItems = []

    def __init__(self, downloadsPath, newFolder):
        self._downloadsPath = downloadsPath
        self._newFolder = newFolder

        if os.path.isdir(self._downloadsPath) == False:
            raise Exception('Invalid argument provided: SortDownloads.downloadsPath')

        if os.path.isdir(self._newFolder) == False:
            os.makedirs(self._newFolder)

    def getDirItems(self):
        for item in os.listdir(self._downloadsPath):
            item = item.lower()
            if re.search(".(%s)$" % self._extensions, item) != None:
                self._foundItems.append(item)

    def moveItemsToFolder(self):
        for r in self._foundItems:
            shutil.move(self._downloadsPath+'\\'+r, self._newFolder)

sortDownloads = SortDownloads(downloadsPath='C:\\Users\\User\\Downloads',
    newFolder='C:\\Users\\User\\Downloads\\myfolder')

sortDownloads.getDirItems()

print("Searching downloads directory for following file extensions: {}".format(sortDownloads._extensions))

print("Found {0} items".format(len(sortDownloads._foundItems)))

if len(sortDownloads._foundItems) > 0:
    sortDownloads.moveItemsToFolder()

    print("Items have been moved to {0}".format(sortDownloads._newFolder))
