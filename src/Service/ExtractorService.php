<?php

/*namespace App\Service;

use Translation\Extractor\Extractor;
use Translation\Extractor\FileExtractor\FileExtractor;
use Translation\Extractor\FileExtractor\PHPFileExtractor;
use Translation\Extractor\Visitor\Php\Symfony\ContainerAwareTrans;
use Translation\Extractor\Visitor\Php\Symfony\ContainerAwareTransChoice;
use Translation\Extractor\Visitor\Php\Symfony\FlashMessage;
use Translation\Extractor\Visitor\Php\Symfony\FormTypeChoices;

class ExtractorService
{
    protected $fileExtractor;

    public function __construct() { }

    function extract(){
         // Create extractor for PHP files
         $fileExtractor = new PHPFileExtractor();

         // Add visitors
         $fileExtractor->addVisitor(new ContainerAwareTrans());
         $fileExtractor->addVisitor(new ContainerAwareTransChoice());
         $fileExtractor->addVisitor(new FlashMessage());
         $fileExtractor->addVisitor(new FormTypeChoices());

         // Add the file extractor to Extractor
         $extractor = new Extractor();
            FileExtractor::class
         $extractor->addFileExtractor($this->getPHPFileExtractor());

         //Start extracting files
         $sourceCollection = $extractor->extractFromDirectory('/foo/bar');

         // Print the result
         foreach ($sourceCollection as $source) {
             echo sprintf('Key "%s" found in %s at line %d', $source->getMessage(), $source->getPath(), $source->getLine());
         }
    }
}
*/
