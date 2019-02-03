<?php

use Traversable;

/**
 * @property \DateTimeImmutable[] $property
 * @method bool[] method(?ArrayObject<int[]> $m)
 */
class Whatever
{

	/** @var (\DateTimeImmutable[]|\DateTime[]|null)[] */
	public $a;

	/** @var \ArrayObject<int[]> */
	public $b;

	/** @var \ArrayObject&int[] */
	public $c;

	/** @var callable(bool[] $bools): (int[]) */
	public $d;

	/** @var int[][][] */
	public $e;

	/** @var int[]|\ArrayObject */
	public $f;

	/** @var Traversable|int[][] */
	public $g;

	/** @var iterable|bool[] */
	public $h;

	/** @var array<(iterable|int[])> */
	public $i;

	/** @var \Anything|string[] */
	public $j;

	/** @var int[]|string */
	public $k;

}
