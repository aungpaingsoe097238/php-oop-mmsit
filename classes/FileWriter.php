<?php 

class FileWriter 
{
    public $fileName, $file;

    function __construct($fileName)
    {
        $this->fileName = $fileName;
        $this->file     = fopen($fileName,"w");
    }

    public function write(string $text)
    {
        fwrite($this->file,$text);
    }

    public function __destruct()
    {
        fclose($this->file);
    }

}