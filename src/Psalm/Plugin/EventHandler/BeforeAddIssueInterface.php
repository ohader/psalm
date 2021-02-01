<?php
namespace Psalm\Plugin\EventHandler;

use Psalm\Plugin\EventHandler\Event\BeforeAddIssueEvent;

interface BeforeAddIssueInterface
{
    /**
     * Called before adding a code issue
     *
     * @param BeforeAddIssueEvent $event
     * @return null|bool $event How and whether to continue
     *  + `null` continue with next event handler
     *  + `true` stop event handling, keep issue
     *  + `false` stop event handling, drop/suppress issue
     */
    public static function beforeAddIssue(BeforeAddIssueEvent $event): ?bool;
}
