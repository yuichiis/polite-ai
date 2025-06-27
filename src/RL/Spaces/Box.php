<?php
namespace Interop\Polite\AI\RL\Spaces;

use Interop\Polite\Math\Matrix\NDArray;

interface Box extends Space
{
    public function shape() : array;
    public function dtype() : int;
    public function high() : NDArray;
    public function low() : NDArray;
}