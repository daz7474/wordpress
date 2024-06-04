<?php

if (!function_exists('vw_sports_credit')) {
	function vw_sports_credit()
	{
		echo '&copy; ' . date('Y') . esc_html__(' The Rugby Blog');
	}
}
