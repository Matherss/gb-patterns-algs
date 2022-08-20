<?php

	class CircleAreaLib
	{
		public function getCircleArea(int $diameter): float
		{
			$area = (M_PI * $diameter ** 2) / 4;
			return $area;
		}
	}