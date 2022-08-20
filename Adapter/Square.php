<?php

	class Square implements ISquare
	{
		public function __construct() {}

		public function squareArea(int $sideSquare): float
		{
			return $sideSquare ** 2;
		}
	}