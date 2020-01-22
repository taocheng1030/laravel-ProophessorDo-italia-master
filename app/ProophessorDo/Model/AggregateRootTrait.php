<?php
/**
 * Created by PhpStorm.
 * User: humblewebdev
 * Date: 7/16/18
 * Time: 7:21 PM
 */

namespace Prooph\ProophessorDo\Model;


use Prooph\EventSourcing\AggregateChanged;

trait AggregateRootTrait
{
    /**
     * Apply given event
     * @param AggregateChanged $event
     */
    protected function apply(AggregateChanged $event): void
    {
        $handler = $this->determineEventHandlerMethodFor($event);
        if (!method_exists($this, $handler)) {
            throw new \RuntimeException(sprintf(
                'Missing event handler method %s for aggregate root %s',
                $handler,
                get_class($this)
            ));
        }

        $this->{$handler}($event);
    }

    protected function determineEventHandlerMethodFor(AggregateChanged $e): string
    {
        return 'when' . implode(array_slice(explode('\\', get_class($e)), -1));
    }
}