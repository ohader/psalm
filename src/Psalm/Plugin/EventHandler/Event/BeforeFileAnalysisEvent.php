<?php


namespace Psalm\Plugin\EventHandler\Event;

use Psalm\Codebase;
use Psalm\Context;
use Psalm\StatementsSource;
use Psalm\Storage\FileStorage;

class BeforeFileAnalysisEvent
{
    /**
     * @var StatementsSource
     */
    private $statements_source;
    /**
     * @var Context
     */
    private $file_context;
    /**
     * @var FileStorage
     */
    private $file_storage;
    /**
     * @var Codebase
     */
    private $codebase;

    /**
     * @var array<\PhpParser\Node\Stmt>|null
     */
    private $stmts;

    /**
     * Called before a file has been checked
     *
     * @param array<\PhpParser\Node\Stmt>|null $stmts
     */
    public function __construct(
        StatementsSource $statements_source,
        Context $file_context,
        FileStorage $file_storage,
        Codebase $codebase,
        array $stmts = null
    ) {
        $this->statements_source = $statements_source;
        $this->file_context = $file_context;
        $this->file_storage = $file_storage;
        $this->codebase = $codebase;
        $this->stmts = $stmts;
    }

    public function getStatementsSource(): StatementsSource
    {
        return $this->statements_source;
    }

    public function getFileContext(): Context
    {
        return $this->file_context;
    }

    public function getFileStorage(): FileStorage
    {
        return $this->file_storage;
    }

    public function getCodebase(): Codebase
    {
        return $this->codebase;
    }

    /**
     * @return array<\PhpParser\Node\Stmt>|null
     */
    public function getStmts(): ?array
    {
        return $this->stmts;
    }
}
