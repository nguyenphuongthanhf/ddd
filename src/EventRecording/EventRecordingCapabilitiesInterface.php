<?php
namespace ThanhsMind\DDD\EventRecording;
use ThanhsMind\DDD\DomainEventInterface;

interface EventRecordingCapabilitiesInterface extends ContainsRecordedEventsInterface {

    /**
     * Record an event.
     *
     * @param DomainEventInterface $event
     */
    public function recordEvent(DomainEventInterface $event);
}