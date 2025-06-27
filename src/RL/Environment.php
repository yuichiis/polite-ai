<?php
namespace Interop\Polite\AI\RL;

use Throwable;
use Interop\Polite\Math\Matrix\NDArray;
use Interop\Polite\AI\RL\Spaces\Space;

/**
 *
 */
interface Environment
{
    /**
    * @return int $maxEpisodeSteps
    */
    public function maxEpisodeSteps() : int;

    /**
    * @return float $rewardThreshold
    */
    public function rewardThreshold() : float;

    /**
    * @return Space $observationSpace
    */
    public function observationSpace() : ?Space;

    /**
    * @return Space $actionSpace
    */
    public function actionSpace() : ?Space;

    /**
    * @param mixed $action
    * @return array{mixed $observation, float $rewards, bool $terminated, bool $truncated, array<string,mixed> $info}
    */
    public function step(mixed $action) : array;

    /**
    * @return array{NDArray $observation, array<string,mixed> $info}
    **/
    public function reset() : array;

    /**
    * @return mixed $depends on vender
    */
    public function render(?string $mode=null) : mixed;

    /**
    * @return mixed $depends on vender
    */
    public function show(?bool $loop=null, ?int $delay=null) : mixed;

    /**
    *
    */
    public function close() : void;

    /**
    * @param int $seed
    * @return array<int> $seeds
    */
    public function seed(?int $seed=null) : array;

    /**
    *
    */
    public function toString() : string;

    /**
    *
    */
    public function enter() : void;

    /**
    *
    */
    public function exit(?Throwable $e=null) : bool;

    //
    // public function observationSpace() : ?Space;
    //

    //
    // public function actionSpace() : ?Space
    //
}
