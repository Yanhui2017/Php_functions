<?php

/**
 * 将xml转为array
 * @param $xml
 * @return mixed
 * @throws yeepayDPayException
 */
function FromXml($xml)
{
    //$xml = iconv("gbk","utf-8", $xml);
    libxml_disable_entity_loader(true);
    $values = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
    return $values;
}


$xml = '<?xml version="1.0" encoding="GBK"?>
<data>  <cmd>TransferSingle</cmd>  <ret_Code>0035</ret_Code>  <order_Id>ZZ201611020000000131</order_Id>  <r1_Code>0030</r1_Code>
  <bank_Status>I</bank_Status>  <error_Msg>?????Ų??Ϸ????ظ?</error_Msg>  <hmac>MIIE6QYJKoZIhvcNAQcCoIIE2jCCBNYCAQExCzAJBgUrDgMCGgUAMC8GCSqGSIb3DQEHAaAiBCBhZTE1MDY1NGNkOWEyNmM0YTliNmRmNDRhYjkxYzk2M6CCA7EwggOtMIIDFqADAgECAhAuyfCgPbMcigfvVyGazeQRMA0GCSqGSIb3DQEBBQUAMCQxCzAJBgNVBAYTAkNOMRUwEwYDVQQKEwxDRkNBIFRFU1QgQ0EwHhcNMTExMTI4MDcwOTUzWhcNMTMxMTI4MDcwOTUzWjBzMQswCQYDVQQGEwJDTjEVMBMGA1UEChMMQ0ZDQSBURVNUIENBMQ8wDQYDVQQLEwZZRUVQQVkxEjAQBgNVBAsTCUN1c3RvbWVyczEoMCYGA1UEAxQfMDQxQFoxMjNxd2VAemhpd2VuLm1laUAwMDAwMDAwMTCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAzrITNElBaFF7xPXtPguWeTnGOI1gVMMkUDI57ZQz+Gg9PPcfF+ExrtDgMQEOwfRs7X4XiraPE2l6ub0Xkpl0ftu8ELnii91wUKAqsvp88NIdAdLQnC7PeveWlquVSAf//2WtAkdBI7xnhXaL/ObUkhHheT0aR5miYmDyLAkTBj8CAwEAAaOCAY8wggGLMB8GA1UdIwQYMBaAFEZy3CVynwJOVYO1gPkL2+mTs/RFMB0GA1UdDgQWBBS0k6A7ZSwLRwbIhFsgcChrYd27PDALBgNVHQ8EBAMCBaAwDAYDVR0TBAUwAwEBADA7BgNVHSUENDAyBggrBgEFBQcDAQYIKwYBBQUHAwIGCCsGAQUFBwMDBggrBgEFBQcDBAYIKwYBBQUHAwgwgfAGA1UdHwSB6DCB5TBPoE2gS6RJMEcxCzAJBgNVBAYTAkNOMRUwEwYDVQQKEwxDRkNBIFRFU1QgQ0ExDDAKBgNVBAsTA0NSTDETMBEGA1UEAxMKY3JsMTI2XzE5NDCBkaCBjqCBi4aBiGxkYXA6Ly90ZXN0bGRhcC5jZmNhLmNvbS5jbjozODkvQ049Y3JsMTI2XzE5NCxPVT1DUkwsTz1DRkNBIFRFU1QgQ0EsQz1DTj9jZXJ0aWZpY2F0ZVJldm9jYXRpb25MaXN0P2Jhc2U/b2JqZWN0Y2xhc3M9Y1JMRGlzdHJpYnV0aW9uUG9pbnQwDQYJKoZIhvcNAQEFBQADgYEAKX4CXCPQEE4RWGsZTXZXLBct2gcPYEjqpgPZ5ERiUrYLTDGuIT90ECfSoxCrcTJEeY7EJBojig9gLRoMn/4xXW/XscGarQ3XxyZw8VxTMFkotuUkAPoaacYlIrc34t2DR0DqvU6umgFL3yTMYxl5WLjOh47OH7Aw7VPscmrtzEIxgd0wgdoCAQEwODAkMQswCQYDVQQGEwJDTjEVMBMGA1UEChMMQ0ZDQSBURVNUIENBAhAuyfCgPbMcigfvVyGazeQRMAkGBSsOAwIaBQAwDQYJKoZIhvcNAQEBBQAEgYAaOrim1Zyw56KgNURQR2UUFPz3t/pGJGFHDnZMtOX/EPVd+24fuSShndusPwK4EyqFhPAtaZioDTJ7uFGSsesQaBUmGC7hLDPceFDG9H2RtVOAFKfTSb43uGEerOYfTMzi13lCgvoobQ9vsItUAl40stgXQXauqCPldW75b3XYUw==</hmac></data>';
$dase = <<<EOT
<?xml version="1.0" encoding="GBK"?>
<data>  <cmd>TransferSingle</cmd>  <ret_Code>0080</ret_Code>  <order_Id>ZZ201611020000000131</order_Id>  <r1_Code>0030</r1_Code>
  <bank_Status>I</bank_Status>  <error_Msg>δ??ͨ??ת??</error_Msg>  <hmac>MIIE6QYJKoZIhvcNAQcCoIIE2jCCBNYCAQExCzAJBgUrDgMCGgUAMC8GCSqGSIb3DQEHAaAiBCBkMTgxMTliODk3NTBmNTgyOThmNGI3ODZiMmVjMDg5NKCCA7EwggOtMIIDFqADAgECAhAuyfCgPbMcigfvVyGazeQRMA0GCSqGSIb3DQEBBQUAMCQxCzAJBgNVBAYTAkNOMRUwEwYDVQQKEwxDRkNBIFRFU1QgQ0EwHhcNMTExMTI4MDcwOTUzWhcNMTMxMTI4MDcwOTUzWjBzMQswCQYDVQQGEwJDTjEVMBMGA1UEChMMQ0ZDQSBURVNUIENBMQ8wDQYDVQQLEwZZRUVQQVkxEjAQBgNVBAsTCUN1c3RvbWVyczEoMCYGA1UEAxQfMDQxQFoxMjNxd2VAemhpd2VuLm1laUAwMDAwMDAwMTCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAzrITNElBaFF7xPXtPguWeTnGOI1gVMMkUDI57ZQz+Gg9PPcfF+ExrtDgMQEOwfRs7X4XiraPE2l6ub0Xkpl0ftu8ELnii91wUKAqsvp88NIdAdLQnC7PeveWlquVSAf//2WtAkdBI7xnhXaL/ObUkhHheT0aR5miYmDyLAkTBj8CAwEAAaOCAY8wggGLMB8GA1UdIwQYMBaAFEZy3CVynwJOVYO1gPkL2+mTs/RFMB0GA1UdDgQWBBS0k6A7ZSwLRwbIhFsgcChrYd27PDALBgNVHQ8EBAMCBaAwDAYDVR0TBAUwAwEBADA7BgNVHSUENDAyBggrBgEFBQcDAQYIKwYBBQUHAwIGCCsGAQUFBwMDBggrBgEFBQcDBAYIKwYBBQUHAwgwgfAGA1UdHwSB6DCB5TBPoE2gS6RJMEcxCzAJBgNVBAYTAkNOMRUwEwYDVQQKEwxDRkNBIFRFU1QgQ0ExDDAKBgNVBAsTA0NSTDETMBEGA1UEAxMKY3JsMTI2XzE5NDCBkaCBjqCBi4aBiGxkYXA6Ly90ZXN0bGRhcC5jZmNhLmNvbS5jbjozODkvQ049Y3JsMTI2XzE5NCxPVT1DUkwsTz1DRkNBIFRFU1QgQ0EsQz1DTj9jZXJ0aWZpY2F0ZVJldm9jYXRpb25MaXN0P2Jhc2U/b2JqZWN0Y2xhc3M9Y1JMRGlzdHJpYnV0aW9uUG9pbnQwDQYJKoZIhvcNAQEFBQADgYEAKX4CXCPQEE4RWGsZTXZXLBct2gcPYEjqpgPZ5ERiUrYLTDGuIT90ECfSoxCrcTJEeY7EJBojig9gLRoMn/4xXW/XscGarQ3XxyZw8VxTMFkotuUkAPoaacYlIrc34t2DR0DqvU6umgFL3yTMYxl5WLjOh47OH7Aw7VPscmrtzEIxgd0wgdoCAQEwODAkMQswCQYDVQQGEwJDTjEVMBMGA1UEChMMQ0ZDQSBURVNUIENBAhAuyfCgPbMcigfvVyGazeQRMAkGBSsOAwIaBQAwDQYJKoZIhvcNAQEBBQAEgYDEewANYbV0JKGpgBiv4yDhCgAc048up/fEC7wG4JUMEQHsMU0GCdLgxaHM6cHE3ibwM0xymLR4/2ELrAaBbk9ot7/jGHnLIZ28WNymNzDqOhoNtfJFNGNw0+2Ys0pM2zBm6pqcophRgb6cdGV6yuA1u8p8It8JkIY0r6b3IHez7g==</hmac></data>
EOT;
echo json_encode(FromXml($dase));
