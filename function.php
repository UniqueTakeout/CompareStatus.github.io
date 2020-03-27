<?php
	include 'config.php';

	// https://api.fortnitetracker.com/v1/profile/{platform}/{epic-nickname}
	function getPlayerStats( $platform, $epicNickname ) {
		$apiUrlPlayerStatsEndpoint = 'https://api.fortnitetracker.com/v1/profile/' . $platform . '/' . $epicNickname;

		$ch = curl_init();

		curl_setopt( $ch, CURLOPT_URL, $apiUrlPlayerStatsEndpoint );
		
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
			'TRN-Api-Key:' . FN_API_KEY
		) );

		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );
		curl_setopt( $ch, CURLOPT_HEADER, FALSE );
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );

		$response = curl_exec( $ch );
		curl_close( $ch );

		return json_decode( $response, true );
	}