<?php

$values = array(
	'name' => 'lio',
	'friends' => array(
			'name' => 'anna',
			'age' => '24',
			'sex' => array(
					'one' => 'ismale',
					'two' => 'isfemale'
				)
		),
	0 => ['like' => 'lio'],
	1 => ['like' => 'anna'],
	2 => ['like' => '123'],
);

// function create_xml($values,&$xml)
// {
// 	foreach ($values as $key => $value) {
// 		$xml .= "<" . $key . ">";
// 		if(is_array($value)){
// 			create_xml($value,$xml);
// 			$xml .=  "</" . $key . ">";
// 		}else{
// 			$xml .=  $value . "</" . $key . ">";
// 		}
// 	}
// }

function create_xml($values,&$xml)
{
	foreach ($values as $key => $value) {
		if(!is_numeric($key)){
			$xml .= "<" . $key . ">";
		}
		if(is_array($value)){
			create_xml($value,$xml);
			if(!is_numeric($key)){
				$xml .=  "</" . $key . ">";
			}
		}else{
			if(!is_numeric($key)){
				$xml .=  $value . "</" . $key . ">";
			}
		}
	}
}

$xml = "<?xml version='1.0' encoding='GBK'?><data>";
create_xml($values,$xml);
echo $xml.= "</data>";


/**
 * 将xml转为array
 * @param $xml
 * @return mixed
 * @throws yeepayDPayException
 */
function FromXml($xml)
{
	//gbk转utf-8
    $xml = str_replace('GBK','UTF-8',iconv('GB2312', 'UTF-8', $xml));
    libxml_disable_entity_loader(true);
    $values = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
    return $values;
}
