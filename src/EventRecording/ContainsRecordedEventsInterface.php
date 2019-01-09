<?php
namespace ThanhsMind\DDD\EventRecording;
use ThanhsMind\DDD\DomainEventInterface;


interface ContainsRecordedEventsInterface {

    /**
     * Fetch recorded messages.
     *
     * @return DomainEventInterface[]
     */
    public function getRecordedEvents();

    /**
     * Erase messages that were recorded since the last call to eraseMessages().
     *
     * @return void
     */
    public function eraseEvents();
}