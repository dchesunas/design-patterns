<?php

// Our writting interface
interface WritingState
{
    public function write(string $words);
}

// Cases
class UpperCase implements WritingState
{
    public function write(string $words)
    {
        echo strtoupper($words);
    }
}

class LowerCase implements WritingState
{
    public function write(string $words)
    {
        echo strtolower($words);
    }
}

class Normal implements WritingState
{
    public function write(string $words)
    {
        echo $words;
    }
}

class TextEditor
{
    protected $state;

    public function __construct(WritingState $state)
    {
        $this->state = $state;
    }

    public function setState(WritingState $state)
    {
        $this->state = $state;
    }

    // Selected State defines how we type in our class
    public function type(string $words)
    {
        $this->state->write($words);
    }
}

// Choosing case and write text in selected format
$editor = new TextEditor(new Normal());

$editor->type('First line');

$editor->setState(new UpperCase());

$editor->type('Second line');
$editor->type('Third line');

$editor->setState(new LowerCase());

$editor->type('Fourth line');
$editor->type('Fifth line');

// Output:
// First line
// SECOND LINE
// THIRD LINE
// fourth line
// fifth line
