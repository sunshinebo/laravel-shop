<?php

return [
    'alipay' => [
        'app_id'         => '2016091600526366',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAyK78XsLnzPacgn8lmVwUsTIqBPa+pm12HKjPlKedJZVtHHpVlaleHXuZsAknVhgtrCZBL4HvYM5fhslRIwfWP7Xl6oQOAJe2tk4TvDnpl8bWl70SMsLVCsX47U/+OfxID/kil1XcVX3KaedRbjco02/lTfzC+d4SsSuK0qN6xRKoV6zMy75y4VOajXkypfoUh1FxhBnX9epbG1XG904Zy369Najjv12RYQD6KO4O2SBI3erxnJlPHrcjgBU2NaYFp3f8fRo5T9Aii1iNi0ucDr6/QA1xGCdhNoqmrfwbyEYF4w5zSv54330YUV3MVt7MS4w95VIiuXKFrNqtnnz+UwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAhB7xq729juDcEkQxDDwYWd2iHdNmc4JDtEmaAcbXT4L3pgt9hvQmOLE9U2OEnuEeh3w4rD/hAauID/VgGlVl3vVyGmJGiyt8sOpmvsKz0laka7FYL2+38f56l3CjPq/LWWL8Pk8e5PosTQVctHRniL2Ung8e95g39chV/bx2YcGiKxN7PgmIoghXgQLCTfMFOPBcZu7bXtWv7dgMCnAkhdZ9rSVMpriyiYhSPmigmF4P4XwHvjhNHgGx419S1exiA5ql5+hlj9YP720zhsnO4DDSuG6JEVWHzhMuxXvaQ/240yfH/qZC8ovaEvbKl/LjG0VNoRO6AQz9cTeY6BPrLwIDAQABAoIBAC3jOXi2u+GmA4lsmcRwEt0Tdzz4sXqo4a76aTz4vMtm53CKSRzYK3ZBSNVvmR49fgb8hAp/XTzhQK6aQLiktG8NvIWhYHLxtasUnn7ezOnfIdgtjj1bhf3MrvNuMaSSFgSDtqxFeqt4oG5X0Gz0iQkbH0UOZ2kDO1xoKkWocU1eHYmNBzAmBepxAB8Sp/ruCpTV5NbnHWuFH6d3FWxe11ImLz1JjBQaumhgVAKSnlD2w9gLjBYLJSDqf5yg+4wXTQXNojH+ZWxOSjIN3Ebcg6Qa8et1iS55lBYGeWIuUIUQEAcvWqmdxgCRHUOdY9rZrjexxNzJ/aRb2UfU5EfNKAECgYEAvp2vpTPNJZACEa3FKBR+KobAmMKT2W/4xs3BoKS3WCs1vVA4ORFjqIezgssFJVRo0HoYKFxJYB8YKL1F2Bhjfpe0KZcrKnfKVLvKsWWgEgYbNyUY7f7GMd+7idsPUusNxtLK0F7FaQwsEaND/k264MCejynGjEx+PtBOQbbseS8CgYEAsXC0SZlZZy53+MLbRVxSQ7s/BMCKYCEVyKkQw30ROWRZynf0Xx7wa1jflJjmocG672KJ0V+lySmngtDAg+IZjgu1zzVnG/ozM7I6cvXxoghTIKSu4DH/WP6fFzLP1Iex6wlvXmjU3cmXnTIDd1Qqi8ZUGJ09FzrwtV1iOFhvLgECgYAy5u8JwbyNxFgZGntkyZwrhRKXeJZ84T7g7/8+A96GJ/vQ00RAURl43swcKFT2dAUNbx1WYdaiWYtdDbZCD7k6DA7rcFfxnk2ktQVavBWz2neYEUsH+xo4JVPya1I7RVPHfXD1lelHtR1rlFrK5Tz7WdS9zF0eCCtKYNwVBmE9twKBgQCg5nZVlvz/F6Aqr2duSf0+9fh7Mq1H5jh+sPBGlI6d4GWbt5Kc/s08SmbTtKLOY4JDuLMIbRdEhsUjVnB8JvbNW8kNkHtjX0o2wpNF08e9Cpd2rl71ZeEKrjlNLAJR0op/exrGHYGJbFhTbxq9hlDeVoXDnDHdctD7ZSa/uVF4AQKBgGAZHja/mXmAhldWmnbGy+glCL6KNQXX3F5e+90QwJNdWNp9YsNEcXnyVcwTlM0m3mPcnyNft7nzPA8GpFRWYBXLy/JswYR/qu3v72cAG/zWjlu4qfoibgvFGab3xro3QgjfUQmIQRfMyY8616PEIKtfT3tpnzyOS8xVsfWH4o+A',
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
