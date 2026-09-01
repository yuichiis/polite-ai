<?php
namespace Interop\Polite\AI\RL\Spaces;

use Interop\Polite\Math\Matrix\NDArray;

interface Space
{
    /**
    * @return NDArray|array<string,NDArray>
    */
    public function sample() : NDArray|array;

    /**
    * @param NDArray|array<string,NDArray> $x
    * @return bool
    */
    public function contains(NDArray|array $x, ?bool $throw=null, ?string $type=null) : bool;
}