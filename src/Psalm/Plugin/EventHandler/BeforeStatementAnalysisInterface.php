<?php
namespace Psalm\Plugin\EventHandler;

use Psalm\Plugin\EventHandler\Event\BeforeStatementAnalysisEvent;

interface BeforeStatementAnalysisInterface
{
    /**
     * Called before a statement has been checked
     *
     * @return null|false
     */
    public static function beforeStatementAnalysis(BeforeStatementAnalysisEvent $event): ?bool;
}
