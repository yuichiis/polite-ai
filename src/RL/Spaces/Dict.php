<?php
namespace Interop\Polite\AI\RL\Spaces;

use ArrayAccess;
use Countable;
use IteratorAggregate;

interface Dict extends Space, ArrayAccess ,Countable, IteratorAggregate 
{
}