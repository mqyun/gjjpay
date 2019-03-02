<?php
$config = array (	
		//应用ID,您的APPID
		'app_id' => "2016092500593574",

		//商户私钥
		'merchant_private_key' => "MIIEpQIBAAKCAQEArDdZmb5jbJvkHH07NgpkLgzgX/TL0gHyroOQtK21ABpBeOmYJmRNYv/r1S35x+LkrcZBjHbldteZPE1SpQEqjN7n5347peG900xelZmOtytURekXCc4ZbSHOHUxxD1P23tAvPC3EJKFIRuangFPbSudotsNW74i4SfsHdYcce5KecIVqaBDYoMQ5wgvfdsR//11xrvmEsh+/u84tH565P9DkjzuMGtCu6tQDUOpHc9nvwNboPGU5G5Qt90/S46zTpZtWdUcUtv26GpO3pVKMxjKJHEFTO/315kwJKhYvEt+fKJ1ew0sNsb3FzxfALHTS6VFRL1hX5jvm/kh/qPb2pwIDAQABAoIBAQCrjSeQY3ufQVtmlclZ99f7l5AbhjtTI+Wfuid4FGHtjDoUPH34IIqGR/GhFn9vgrHR+WBqkDXcwMBAtbXR8Ot2EMZqb/DzOYBi7/x4gdMM2/jC+4KbndbuQ3KS9QbbAgU1x6SGCgENjCv3lOTejKoyX3qMNOJxEnyiFZJEnSbeYHldNf9EWTqGFmPYt8DbUrnfun5tdl+9EVunKgvCbisK3l8oNMZiVEcLvMFUnOja4SRLj4XY6FymprbHF3AvxglYefVVMuf194UjK+dj0dQE/H+675mHBNxuQ4sL42bpGaTTnSt3SVtDcvoTGYxohQeXvjGaaI7o3F41M1w6yf3hAoGBANUXzAX4chVvNlNdOj8vaBhAGBV2JKy1miSwT+7RJ2WSDoGULCeR6zd5wzoTW2/NFliklqZyZjEiq/BORgg4fdBW4ZyEYcqyKbVczUDUSU8HhuOGGvOVGUvpDXntayKPKSJBuZMvBrNb1k3LydRtK0Rj4tWT7OFsfWLTTQkHvJ3TAoGBAM7kf58XAwsI9QX4y7Dcm7zkocUIDAUZfQXgIdxxqAooWaXaTzjGt6j5z5f/t7puNex7lkkQunLnJ2ZnVudMJz6KhUiCE/bOCptfXHvuWOBL3h6NytEP6adznxz4wcAP8/uCQr32aCMCo0NZYwkGCcOc69GjgUKdRjatIgMlZjtdAoGBAMzJD9N1Df43YJgA8ici4gDcJ8kIPvqTk81Ke6bg7eGY2cQBp+VnQAuSQuIfFDJ/f8g0dGsFadwym9ZXAsqHr7F2rV8Dgg+P5LFcvAxfdwwyCZnCmUgZs7PWBpN0bQ9LUZaQX01pViEsUul0vUQengQdkjL69B03a9B7jH7vJn7tAoGAKTdcNVVgRdKC/a2S5qkMXZUupRH1Uw7A2WrNVB1QXLWtJl1Xavgrnn4l3SIUeA98rp/wUJ4Eht+F+eCcb3e8Wbk+1DMVxxVFB673vbi9+/EhTvTwcrW41qMyD5N/BcQn1vMcWLu+AzuDSueD00hgqZeZYyovlhW+5yWWoQnSVAECgYEAnEDAr10j9aID3Z9QoMKxR5RpvvbVmQPKVtsMvmTgso6xujBpqzis5LoVGtF07KNfTtnZSa+uFWeEaSu6DpKdvLAjL5Zfl+6cvM+Zk5f7LhDYsB1KmocJUxSzuDjMwX80ZpjcMZ3Doyv0sQb7paWMoqj5n/ssZNyVu7jnhzVEjiM=",
		
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
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEArDdZmb5jbJvkHH07NgpkLgzgX/TL0gHyroOQtK21ABpBeOmYJmRNYv/r1S35x+LkrcZBjHbldteZPE1SpQEqjN7n5347peG900xelZmOtytURekXCc4ZbSHOHUxxD1P23tAvPC3EJKFIRuangFPbSudotsNW74i4SfsHdYcce5KecIVqaBDYoMQ5wgvfdsR//11xrvmEsh+/u84tH565P9DkjzuMGtCu6tQDUOpHc9nvwNboPGU5G5Qt90/S46zTpZtWdUcUtv26GpO3pVKMxjKJHEFTO/315kwJKhYvEt+fKJ1ew0sNsb3FzxfALHTS6VFRL1hX5jvm/kh/qPb2pwIDAQAB",
);