<?php

	class SquareAreaLib
	{
		public function getSquareArea(int $diagonal): float
		{
			$area = ($diagonal**2) / 2;
			return $area;
		}
	}