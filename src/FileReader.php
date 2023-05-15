<?php

namespace Aigletter\Filesystem;

class FileReader
{
    protected $file;

    public function __construct(string $filename)
    {
        $this->file = fopen($filename, 'r');
    }

    public function __destruct()
    {
        fclose($this->file);
    }

    public function read()
    {
        $lines = [];

        while ($line = fgets($this->file)) {
            $lines[] = $line;
        }

        return $lines;
    }
}