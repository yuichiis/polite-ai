<?php
namespace Interop\Polite\AI\RL\Spaces;

interface Discrete extends Space
{
    public function n() : int;
}