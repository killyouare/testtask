<?php

namespace Killyouare\Testtask\App\Files;

class FileReader
{
    /**
     * @var mixed
     */
    protected $filePath;
    /**
     * @var false|resource
     */
    private $fileContent = false;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function openFile(string $mode = 'r'): bool
    {
        if (is_resource($this->fileContent)) {
            $this->closeFile();
        }

        $this->fileContent = fopen($this->filePath, $mode);

        return is_resource($this->fileContent);
    }

    public function closeFile(): bool
    {
        return fclose($this->fileContent);
    }

    /**
     * @return array|false|null
     */
    public function getNextRow()
    {
        return fgetcsv($this->fileContent, 10000, ";");
    }
}
