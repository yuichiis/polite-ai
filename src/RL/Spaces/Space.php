<?php
namespace Interop\Polite\AI\RL\Spaces;

use Interop\Polite\Math\Matrix\NDArray;

interface Space
{
    public function sample() : NDArray;
    public function contains(NDArray $x, ?bool $throw=null, ?string $type=null) : bool;
}