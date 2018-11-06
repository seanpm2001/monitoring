<?php

declare(strict_types=1);

namespace Enqueue\Monitoring;

class SentMessageStats implements Stats
{
    /**
     * @var int
     */
    protected $timestampMs;

    /**
     * @var string
     */
    protected $queue;

    /**
     * @var array
     */
    protected $headers;

    /**
     * @var array
     */
    protected $properties;

    public function __construct(
        int $timestampMs,
        string $queue,
        array $headers,
        array $properties
    ) {
        $this->timestampMs = $timestampMs;
        $this->queue = $queue;
        $this->headers = $headers;
        $this->properties = $properties;
    }

    public function getTimestampMs(): int
    {
        return $this->timestampMs;
    }

    public function getQueue(): string
    {
        return $this->queue;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }
}