<?php

	class SquareAreaAdapter implements ISquare
	{
		private SquareAreaLib $squareAreaLib;

		public function __construct(SquareAreaLib $squareAreaLib)
		{
			$this->squareAreaLib = $squareAreaLib;
		}

		public function squareArea(int $sideSquare): float
		{
			$diagonal = $sideSquare * sqrt(2);
			return $this->squareAreaLib->getSquareArea($diagonal);
		}
	}