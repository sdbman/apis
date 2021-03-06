<?php
// Request Token URL
$request_token_url = 'https://apis.daum.net/oauth/requestToken';
// 사용자 인증 URL
$authorize_url = 'https://apis.daum.net/oauth/authorize';
// Access Token URL
$access_token_url = 'https://apis.daum.net/oauth/accessToken';

// Consumer 정보 (Consumer를 등록하면 얻어올 수 있음.)
$consumer_key = "[Consumer ¿¿¿ ¿ ¿ ¿¿ ¿¿¿¿.]";
$consumer_secret = "[Consumer ¿¿¿ ¿ ¿ ¿¿ ¿¿¿¿.]";
$callback_url = "[Consumer ¿¿¿ ¿ ¿ ¿¿ ¿¿¿¿.]";

// API prefix (보호된 자원이 있는 URL의 prefix)
$api_url = 'https://apis.daum.net';

// Service Provider와 통신할 인터페이스를 갖고 있는 객체 생성.
$oauth = new OAuth($consumer_key, $consumer_secret, OAUTH_SIG_METHOD_HMACSHA1, OAUTH_AUTH_TYPE_URI);
?>
