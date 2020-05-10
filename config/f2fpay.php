<?php

//copy from yansongda/laravel-pay
return [
        // 支付宝分配的 APPID
        'app_id' => env('ALI_APP_ID', '2021001158635710'),

        // 支付宝异步通知地址
        'notify_url' => '',

        // 支付成功后同步通知地址
        'return_url' => '',

        // 阿里公共密钥，验证签名时使用
        'ali_public_key' => env('ALI_PUBLIC_KEY', 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAk/Fla38jlV5eIgh7+JPmfus22Wq3g0AAzgCcvoGY/wgJtxkdbOpw6UIPVQWEVZ6HelMWnEmqXdmKSzW+mh6YP+bGu0/VaCAvQW4Ryb+3oMuiYHnYb9lDbWQqwGzveBauwhQ/i6ZeXCmVvuLkpRwIh/096KevgwWsGIM0M6tK4eJifXWXg+DDpAtBbwBWbBJp/XmM0fXUsQxilHgFdYJpGSaQr8eo119fv7ElfyX8fZEXz7ll1RPRoI9SpfVy3n6GRqp+UeXhsMNBSK1SkNAYWjUH3aOr1Kj5GIYwTLuqKgH+7vFQ5BwHy8OfZ376vq8hFcOdpvv18ChkizEkiWwZEQIDAQAB'),

        // 自己的私钥，签名时使用
        'rsa_private_key' => env('ALI_PRIVATE_KEY', 'MIIEogIBAAKCAQEAjTVfkE13nljsm/z7q3mygH0mDVbvsSRDOH7daUgFQRHiBtOwoGW2WKm2CU7kjXeHuua0N5hfEhA46Jin5NL9vyubNY5FFf17D6UwNUDHC5FelQ0DNeGtbf+/+Hi/qRvmxjA/BqGunCL0G8qlnfSkmRPMDYOVfnnoeAJyZ//7YGX1YBTXp1XEzaaYxI755pdKbLkvTc2UUmwwJ+QVN2zsxXjOT5shReVasxsqnSMLUt71pKCZFJMGyfdjNLM7PbnrrP1pDHxr8/nllmI2SDpbRZhUauK3WhNleix8Z59L/Glc4okmUJe4gm0n7cCN69kxmwZ8Q2Qs9GpbPDWbb54fpwIDAQABAoIBADSCLmEIjXyScJmovyUKgfgJkYbQVx018NEnS8oEf/+sWLJVMY7Tg7UAlrJrZc29LvmvJECwJlofMio76eLLGpRl8Lc/ii0dLw+oS37h8aI5kkQ2rITywHzw5z/MFukZeP0ln6oloTpqPP/AoUlVWYeatvwnfAWl624E6uoFZEJ51e6oCDJ4s257Xq9LKlUDhBD+KMmjF3lEMWrHibNel9lUNynXTaQ1Kw6JPAI19umux876GHC4kIcZkX9B1Lct97UrDIEoEhSju7Svr7GfBrW5O683erZR0Xo/P2rctQriDMq/2uNIdBqDXD7zweIcxxD2Q81zPNtz8RVnfY2Bl8ECgYEA8i+PnMjPglP1OXTxiFPkok5MXepS1ZWxZ3IWg5LKImMM0pATMuMkaK5kUOoMdksc/Unz3IQZ2H9gXECuG5MBPNDk1wfg7MrSxrV4i6finit20+bwfmpjbn6Br5LHJ14DpqaCgQRUD2xCFN2pAxUYHCqdqZNOoeTUGh8BxXZ9w1ECgYEAlUNTAijTTWNJ01bSpLqo0B2PsiZSgBVUdfxdGbDRe1OmyJxQc2FxTmvIk54vIWCGmlGJYkHYcgziXFkPu9cmMigkZvJNWYEfDKNRyQjF6KAxVA4CCxMlTfuDM2tax93K1WzS916s7JnMSvyYXQooSm15pL5BLTRYVXqlfKFrxXcCgYB7MZhS/48W05BlNsh6OXqO2VddWoniXbANV+p96VhrH4lxPpqVgxeNLFCZHEVUkybe7RRgMs5W44xnwPsPybqSbgxKGZbfvNh0/fCg0bikDqX2an4hQAruNOnRHs+xhdBDoGW4LTR5V+9RX+POTpeiFEd48BbKoXUHCIjFIl4c0QKBgESPixZn2D8oxyVbMSBXWOlXWsTS03xfz87uH3mIfYBveSGWo2GMNbZ2zcf4ld937fv+TeOjKR+iCWuvwQlgFvxc8fOTgrIFHFT6w7ta20UyJ9ZbJNcfcTgzuh0pR6acmumTtgfIJhf7wRoEkpvR6ZXeWUyx01BHRfflgRQRNWabAoGAXWxkSgSe9ifEksWmd77hKRfcFeOAG1EU6dmihRpWuOQWb+yp7l/u8Egr4LtGScC4ZgNpjp7BJQNBKuOwO1kL2+ZFwj0cAIKLd5DBRITPiZC3lZcJHD5N3K1RTjbCND6zPPfxtNQbQuLMdxPl5Qbs3+40sGUXLiT8v2BOL8zVPBo='),

        // 使用公钥证书模式，请配置下面两个参数，同时修改 ali_public_key 为以 .crt 结尾的支付宝公钥证书路径，如（./cert/alipayCertPublicKey_RSA2.crt）
        // 应用公钥证书路径
        // 'app_cert_public_key' => './cert/appCertPublicKey.crt',

        // 支付宝根证书路径
        // 'alipay_root_cert' => './cert/alipayRootCert.crt',

        // optional，默认 warning；日志路径为：sys_get_temp_dir().'/logs/yansongda.pay.log'
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        //  'level' => 'debug'
        //  'type' => 'single', // optional, 可选 daily.
        //  'max_file' => 30,
        ],

        // optional，设置此参数，将进入沙箱模式
        // 'mode' => 'dev',
];