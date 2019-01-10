<?php

return [
    'alipay' => [
        'app_id'         => '2016091800540236',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApZxNihRfbyXO5FGjob7GCzXQTgZMcIVsIvmdahd/E4FWYa/pLgp6Fdrs+0DfMTY5uBXMpStDe3Ay0QICQMKH1QcneVj0NfqMoaoTGwuC50bEFxP+vptO34YHyikT8QKiq0Za+e26qnMIkGYywWarxxBn3lWFfB7mz9wZtbLiHzgDsvt2IcFVu5Md5O45FtGuFgoWyvmq4rk4GgJ6DXkP9o0KBpoGXESrmLE51BVGRHfRj4wiOkC74bqZaDcBt9aNaobZFK/vOW3aYYcnIHHsgbnDn0DRESu41u51FIKM8T8Jajr3J/0wso4nw9gApYDGTehe3bUV3xrS7KGy7N6rrQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEApZxNihRfbyXO5FGjob7GCzXQTgZMcIVsIvmdahd/E4FWYa/pLgp6Fdrs+0DfMTY5uBXMpStDe3Ay0QICQMKH1QcneVj0NfqMoaoTGwuC50bEFxP+vptO34YHyikT8QKiq0Za+e26qnMIkGYywWarxxBn3lWFfB7mz9wZtbLiHzgDsvt2IcFVu5Md5O45FtGuFgoWyvmq4rk4GgJ6DXkP9o0KBpoGXESrmLE51BVGRHfRj4wiOkC74bqZaDcBt9aNaobZFK/vOW3aYYcnIHHsgbnDn0DRESu41u51FIKM8T8Jajr3J/0wso4nw9gApYDGTehe3bUV3xrS7KGy7N6rrQIDAQABAoIBAQCCHoC90Kv7BFW+BnbuipnIDQwRgdllPy9re3w28ychCCn6ruAjEJBDw7MW5i122QgYnugfjhKDVfBXT6C9iRp4Qhq9uSqHjsgX7Sz9vtmnJW7EQy2QTS53aTONnyDP6CYvNCQe4q4bZi6AZgvS8Pxed4FkqwUqNI1dG64HmPkZVQGrYOuZWvaDmEBCajyTZAgRrpQoKhkoIsGVXRhUX8lLxKQxJXY5Lrfh9Xys6QzZF1GbArNo28sBcxzSUDjHQFH788YpzPgRNzpkXzcMYHS+WXoU3EB6M79eeGKwms4vdUL5JqDnl3QeV8WPDn8l1Vso++y++1hcn3Ji443YYBVxAoGBANWmdlGUpm56SHCfWT8yKEJgBns8+R+dn8Lsf7sE6FduoLqGe30/HqDmj1cMYid1ni5gVOf9E54rz+sXe7qnKWIjTPYkcU5G8xTaiqA7IPeCGeVMI++srlCDr70I9XkU4s/A6VXLOigGFqx0plgOgPHh/YI2PcVRSBtFk/pspWJLAoGBAMZwGWcANz4MGepo6HH11z37tBJxZN2CfWEXe6NnWB2EadW53JhGMJiklTHvyE+KFN29JQ8bbsMpKziy8jqPITiUvDuGffpi3LcILnwjn5VAJTnKlG6TOOPy9JNy6gN7nWGpRWjkr1PlTZncaIjZZewspJL61Ia+vrx+RsWL/K7nAoGAC9meyGmZTZlkuTJtbc7nYr8WvPEl1DYW7WXWs9XS2T6elZnt8YV1unDvVGGwdAXXDzVyoCduViCR+LUlvLWW2wWgOCrPSgsvYmG4vKhq7K9/pjMx7xJB3N9g+PgtPVkGN4W4q3SJNj0YNtqFe27aghAJ0pYVmQMoH7MdQQ+ToL8CgYBr1CY5jih2kuTSN8d3hXs8tzWWf/+rTmkLBVOt6046W+WWubRhGmL1zxkzVXSnpATKqSkmGGYLrqdJ3BM8NuJ6eHgAcIisMmR1IQEBe+oPlBemW6pkm6NiWncEWIFI+zb+Bpks8ndDQ2rznI1BL8DuoSOcqqgpwCStEIEsf3EDKQKBgAVtMGkf5CKSZP7LEw6Vxq2XMFwdEQyQYkJXT4D/ombQ7ZQcbFaSbA1tyXz92NRE+S1AIpUY0lz6w02m/oBpjuopBh0SoWF14vIFeMySjr9rOxLZKuimE2LfUBIovYxMkPNABvWDvUJx6KdRCqD9T6wj2/fbNAEVs6GzLF0Tg7GB',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];