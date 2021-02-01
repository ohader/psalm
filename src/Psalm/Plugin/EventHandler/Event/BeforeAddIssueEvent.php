<?php
namespace Psalm\Plugin\EventHandler\Event;

use Psalm\Issue\CodeIssue;

class BeforeAddIssueEvent
{
    /**
     * @var CodeIssue
     */
    private $issue;

    /**
     * @var bool
     */
    private $fixable;

    public function __construct(CodeIssue $issue, bool $fixable)
    {
        $this->issue = $issue;
        $this->fixable = $fixable;
    }

    /**
     * @return CodeIssue
     */
    public function getIssue(): CodeIssue
    {
        return $this->issue;
    }

    /**
     * @return bool
     */
    public function isFixable(): bool
    {
        return $this->fixable;
    }
}
