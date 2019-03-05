<?php
$config = array (	
		//应用ID,您的APPID
		'app_id' => "2016092500593574",

		//商户私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEAtL+4Ksxgunah7d/ArYulay0aODk5DOl50V6cwmzQ0KRME2cNuJqXssUkA4kYiQ/lITwRMp6r8G1cn7JaDzIwfE7uIooPmhMFBdurCOQIY/+8Ls+mCVpRPDMQh9BjNsnST5vGDFztgVGuQwVLEoonMPMgrAE5lGhC7Xi9QQeRc6fZKfTWOcXiIlhFcQzVKpoqCwUieoJVo8U/0/uHw33/UPzuUnf8lzIv3rJD/iICau12BszjGx5u7jUtZrEssbh6lc9Apu3nDmfimYcLlvQPA4ZKBxjouBhO6Z+d3VQn5Vt0UaD0kE69az3hO2OeIhpHz0jNmFGVTnhbsW7DLEO7UQIDAQABAoIBAQCsdsa+p5agNLQbqkVKEpY7JqT/ArLJ/DkNKo6/AV9ZxXsFhG5WN8QJgwvzB6xOk8kYphzuxPHgjik0A9Tk7QnQguu8Lynl5MIFLe4LpLHQ4OJpdB7Ei9Y5b6wVOyR/0aEH7uXRRBYnL43sSy+vt/zfOw1wshaD4dwChRNn6lXCGMmwG4AJ8UqZRo6DYO9gzv1apZeMpijv2s65g/B3Wy47HEzrBRnroUFH2gUH4vU1PoxkQhSraRPzUYmIo/frn0IDKlopf6r1DkjNxj4EdGmzFCJw5KXBF+Bs92sZdcrX81fKBeG8Ooi7x8VKdAxO/T7QLPGQ4TE30g2Iog/pPfkFAoGBAOYilGNpaWkroSt/vpPVlNdZb7qQYdd7LmtkIGp2sT/bsON5+GNwYdrilpKifhxPvFAtzn5ppkqHiKzRkOQjnRKwnqtfFmrUHIb6kbhwNWQEAc/6lutAKybPLCtl6PrLgAXkiaxIsJGsAevrDAL1wYIlNGVhEZzUGSNK/5S7tncjAoGBAMkQNNYTTWSHcKKM109J/6kboGSaBiNsMzEN+1daf81B4FIyJjnU77H64Pik9PLCawg4qBdnVcPG0/Jvf2GIhbdUk9lj82MSfCHo6+bSSYKGQB+32+7lPMvKwLSuQ6YfxaDuKa9lGLMaubAcVSvZbYp9hO98MwV64OQlaNAxtCT7AoGAWE7UmgENDepMAiEWxCuk3a3YDcLxiHogKd1WAwRgp5xpmCBpi97H7fIczU/FDKAcJrgtEJ0Bzn+LlqUj8CcqUs2rVR87vup9t93WpOuJ0UMoXuJNnyAUbuP4kv6cFACas6gqnA2Yk41pf1nGVixvgL0+CdjhpUhODRjuUehl7/kCgYAbDl49zH0moP8sMI2sssV/iSMtRni6/Y1p9Xq0B46ZHVtFVFBGifvzVFI/w1re7AChK5abB6HH5ZKR1iUrB8cOo4f9wfB3jX48xe4wsm2H7e7lFcW3wQtMVS1XYvfhe/cJL+NWIeGQAHGqXDWt3+VYtIlV/L2U6DMpIEuZcIbQTwKBgQDcQQE9YIlpJWo7Ax9mHzH3FRiHKTrnUlsNky6+t90pebKn0geVj1R3uk/pV41ertzCv+QJ0kstV7lBwrok1cuzQTQg+z8pwUJM0eDOCKlR+r4FqGixpN3uVl8F0utNVCML6v3iVB4a1/tUKgLLkMyr2DBFG7ARqh5wJpU735mKtg==",
		
		//异步通知地址
		'notify_url' => "http://47.100.50.125/gjjpay/notify_url.php",
		
		//同步跳转
		'return_url' => "http://47.100.50.125/gjjpay/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0pzmPMd5DGciqL2v9asxKMQ9uyEOPVuFn5zCSHP5UowaZXxR4mBS+XuRsxW7Fz63UDUGtYjjs+sUUkclRWU3Kt+i8IBiSynl8DoFDHtxAwDDaBdd6MIvPShRW4P69HWl8SFMCc6pUFKBU4lFiouByT5q9OUQ6EqlF6UCuTWf5gya0wdrnHGg0HUOgF6XA3QylnDhccYCSDj4H21RGIBg7xY1nCQ4sFzPqZmrz7mEQtq3dKh/MAY5rpOhjqedA/rPG71CuGqKWeo8KLZhmozwY6RDkT/hu048JyxoC2gSrEVWwvKocPh5n/va/ISVadwvVALEDEUqrXopxZsLO8z8xQIDAQAB",
);