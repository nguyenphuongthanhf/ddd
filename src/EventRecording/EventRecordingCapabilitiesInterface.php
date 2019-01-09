<?php
namespace Mio\DDD\EventRecording;
use Mio\DDD\DomainEventInterface;

interface EventRecordingCapabilitiesInterface extends ContainsRecordedEventsInterface {

    /**
     * Record an event.
     *
     * @param DomainEventInterface $event
     */
    public function recordEvent(DomainEventInterface $event);
}