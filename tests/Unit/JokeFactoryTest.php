<?php

use Xaviator\SaturnoClient\JokeFactory;

test('it_returns_a_random_joke', function () {

    $jokes = new JokeFactory([
        'This is a Joke',
    ]);
    $joke = $jokes->getRandomJoke();

    $this->assertSame('This is a Joke',$joke);

});

test('it_returns_a_predefines_joke', function () {

    $preDefinedKJokes = [
        'Joke 1',
        'Joke 2',
        'Joke 3',
        'Joke 4',
        'Joke 5',
        'Joke 6'
    ];

    $jokes = new JokeFactory();
    $joke = $jokes->getRandomJoke();

    $this->assertContains($joke,$preDefinedKJokes);

});