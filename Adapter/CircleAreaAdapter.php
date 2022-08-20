<?php

	class CircleAreaAdapter implements ICircle
	{
		private CircleAreaLib $circleAreaLib;

		public function __construct(CircleAreaLib $circleAreaLib)
		{
			$this->circleAreaLib = $circleAreaLib;
		}

		public function circleArea(int $circumference): float
		{
			$diameter = $circumference / M_PI;
			return $this->circleAreaLib->getCircleArea($diameter);
		}
	}