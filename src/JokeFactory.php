<?php

namespace Xaviator\SaturnoClient;

class JokeFactory
{

    protected $jokes = [
        'Joke 1',
        'Joke 2',
        'Joke 3',
        'Joke 4',
        'Joke 5',
        'Joke 6'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    /**
     * @return array
     */
    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }

}