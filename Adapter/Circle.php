<?php

	class Circle implements ICircle
	{
		public function __construct() {}

		public function circleArea(int $circumference): float
		{
			return ($circumference ** 2) / (4 * M_PI);
		}
	}