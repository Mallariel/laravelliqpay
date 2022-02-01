<?php

return [
	'public_key' 	=> env('LIQPAY_PUBLIC', ''),
	'private_key' 	=> env('LIQPAY_PRIVATE', ''),
	'currencies'	=> [
		env('LIQPAY_CURRENCIES', [
			'USD',
			'EUR',
			'UAH',
			'RUB',
			'BYN',
            'KZT'
		])
	]
];

