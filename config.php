<?php
$config = array (	
		//应用ID,您的APPID
		'app_id' => "2016092500593621",

		//商户私钥
		'merchant_private_key' => "MIIEpgIBAAKCAQEA2zisKLZMU4C9hITtgMLyIbPhCqoARqDHzicf2rKpHFadUNbDUlAzHybI/zRC4zAgl/tMh9NWSLRl1RSV0dWiNmBqtm5Ws249w9TJk6W4anrul51u6GIXeBVHOfRyyxj1ZgOsNjcNcf2QKHJRVnbwl8H2Ii/WzeepYCBkorSe6EDqRiIYEQZzrEnlVs8NroMNZuQLa9Gb5XfqoxPPbN/d+0QvxB97X12u1f1CZttNipCHxXDKiFrB3uXdh0J0Z+x0+/vSCdzGxE6YXoJOOZI28nHmOBN2d+61H36Al2ei02fkwo14zAcqtZoZuVOL/wKBJIj/4jgZo7hYAsiBCts56QIDAQABAoIBAQC+T361gTzVqQfdyYBdrd+B/qS5G0hOCDos764pr7w7y72adjbueI1I1+TaGEaQ8DD7f7+6km9vgpx81PgTSAEgb6d0ZGmEL4oTPeEY+l8UoVAL8zJbLvzs1JwW5e3Z/vra6wlPr49OjC/fzQ5rn6nSNSI2H429BwX1W2nCDkd9m3G01FhDwajXsQ5iXgRO2eKEopAKWxf2XR4ftveSO2t9wsGNW+aC9Q6eX5Xqf6/YVwAOdgyLnOO9QxFB9h5UJrdNEnO3mKFsQqIcfpqjcow11WlifvNYmCyiZImGRCGrhtHCqP82bsMnYOGeqnWj/3O011csI2FuFD3vfFFXad35AoGBAPVKWL3pOVcgMR9QobEUDFew5UoWRV3NRoY9xHsrFgqxYinnTughdbI5tWTXImOXBNBwD+ccY4XwpT84uo++2YW3iaZmEfeaCO9pZ9SprJQVeRoI09VcIBtdKgtZbgBp4rYWeNgI0olnKtY15CVYonOwpNa9yIrOT12+wJ7EZtl7AoGBAOTK8pvJPz7dNPoGKErKQe6xA4NDOreqwgZlO6RhYU0NJXBeEpW2dhhLZ3E83llVj6fwNYaWbS4wL5SgxKwk8XEuPv9dEzQBjO6R8nWX3W4yvGFrJ5fcCCwC67wZHbHIyuARDFA0TrrIT335ZW2xt+CCaUbVP9ie1NnQ3fPzaeLrAoGBAJLy7WMou79ke8lE5vlNB2/pfBP8b6YYem2lx3X6hAP37NUpy+3pTbduNyuobuO2751n5T8RlNYDKxxLAglnzqz7Ha3gbFcnor67KQcQd2Fn09sy+qVRwbJjB/MwqmP5C2cG43KZJnhGpDUcqAdvqDMi2j4ECIaPvqBszLzQ8MTNAoGBAMObW8ajTYZSm3tzjjk7KRmIj6dG8EmdHVtYa6CDfSviJHMoip0jLV5iAWOIFdWs2DBNp4WU0G2f1t4sgVloEGCimEu9aLCa7sH9V50AJNmVWQe1FFm6TeZK7P6ZPpEESac+DBf6UKFSptveQMCDI+E3vghIQ9jRGsvKzihGoO3XAoGBAIU/jEVieHltkJwP3PlXfR8HUsXXbKgQCFlA8NG8ZgK5xiJctPn1y6HTWfBUxFOfMNor8BnWtjBfLYovCwH2UvZeFIbADaJhZkjC1Vu04taIrKMT1hmI2fAYAfW0tpwUQGU23+vff8SRUnDDgL/dLHauNw4ARiRbPv6Xeov4MnLa",
		
		//异步通知地址
		'notify_url' => "http://47.100.50.125/gjjpay/notify_url.php",
		
		//同步跳转
		'return_url' => "http://47.100.50.125/gjjpay/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuqyhTFsv9Eo7x7V/fMpfaijeEmljck00jMIcoJNt3dvpD4WBySDYE0VmIUqT3NrE/Ew9dFoJB2ofx0omaokZuysgUjuuYUFzs2o6ed5MApb+LNb+lNIbBc0l3Ypq0GWKWwEiK4cNsNWBibDM/8lu5LC9S/W3xkNEN9lMHnAXZRBakc3muDbKL4wgpGIx85N71I0UejyXQJZc4lapHhpD0WCWsouztmmxMCtTgfX+erxCEup7FzFPF4U5latQqIWUcBPcHT5bCXkqnZC9noMWkyiP2CPBspDjqppPUcOgOGnO5OlLdGlwf2sNZNPWCWed4Y9TZ4fzIu51vC6KUAYnhQIDAQAB",
);