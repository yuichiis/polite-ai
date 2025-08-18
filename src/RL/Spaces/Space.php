<?php
namespace Interop\Polite\AI\RL\Spaces;

use Interop\Polite\Math\Matrix\NDArray;

interface Space
{
    public function sample() : NDArray|array;
    public function contains(NDArray|array $x, ?bool $throw=null, ?string $type=null) : bool;
}