<?php

namespace Mio\DDD\EventRecording;
use Mio\DDD\DomainEventInterface;

/**
 * Use this trait in classes which implement ContainsRecordedMessages to privately record and later release Message
 * instances, like events.
  */
trait EventRecordingCapabilitiesTrait {

    /**
     * @var DomainEventInterface[]
     */
    private $events = [];

    /**
     * {@inheritdoc}
     */
    public function getRecordedEvents()
    {
        return $this->events;
    }

    /**
     * {@inheritdoc}
     */
    public function eraseEvents()
    {
        $this->events = [];
    }

    /**
     * Record a message.
     *
     * @param DomainEventInterface $event
     */
    protected function recordEvent(DomainEventInterface $event)
    {
        $this->events[] = $event;
    }
}