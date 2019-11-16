<?php

function getLinesFromFile($fileName)
{
    if (!$fileHandle = fopen($fileName, 'r')) {
        return;
    }

    $lines = [];
    while (false !== $line = fgets($fileHandle)) {
        $lines[] = $line;
    }

    fclose($fileHandle);

    return $lines;
}

$lines = getLinesFromFile($fileName);
foreach ($lines as $line) {
    // do something with $line
}


class LineIterator implements Iterator {
    protected $fileHandle;

    protected $line;
    protected $i;

    public function __construct($fileName) {
        if (!$this->fileHandle = fopen($fileName, 'r')) {
            throw new RuntimeException('Couldn\'t open file "' . $fileName . '"');
        }
    }

    public function rewind() {
        fseek($this->fileHandle, 0);
        $this->line = fgets($this->fileHandle);
        $this->i = 0;
    }

    public function valid() {
        return false !== $this->line;
    }

    public function current() {
        return $this->line;
    }

    public function key() {
        return $this->i;
    }

    public function next() {
        if (false !== $this->line) {
            $this->line = fgets($this->fileHandle);
            $this->i++;
        }
    }

    public function __destruct() {
        fclose($this->fileHandle);
    }
}

$lines = new LineIterator($fileName);
foreach ($lines as $line) {
    // do something with $line
}



function getLinesFromFile($fileName) {
    if (!$fileHandle = fopen($fileName, 'r')) {
        return;
    }

    while (false !== $line = fgets($fileHandle)) {
        yield $line;
    }

    fclose($fileHandle);
}

$lines = getLinesFromFile($fileName);
foreach ($lines as $line) {
    // do something with $line
}



