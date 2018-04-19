<?php function money($price)
{
	return number_format($price, 2, ',', ' ');
}