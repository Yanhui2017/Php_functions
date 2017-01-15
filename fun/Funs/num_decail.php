<?php

// 判断金额后小数位数，保留两位小数
function funds_keep_zero($money){

    $sort_count = strlen(explode('.', $money)[1]);
    switch ($sort_count) {
        case 1: return $money .= '0';
        case 2: return $money;
        case 0: return $money .= '.00';
    }
}

//参数	描述
//number	
//必需。要格式化的数字。
//如果未设置其他参数，则数字会被格式化为不带小数点且以逗号 (,) 作为分隔符。
//decimals	可选。规定多少个小数。如果设置了该参数，则使用点号 (.) 作为小数点来格式化数字。
//decimalpoint	可选。规定用作小数点的字符串。
//separator	
//可选。规定用作千位分隔符的字符串。
//仅使用该参数的第一个字符。比如 "xyz" 仅输出 "x"。
//注释：如果设置了该参数，那么所有其他参数都是必需的。
number_format(number,decimals,decimalpoint,separator)
