<?php
/**
 * 格式化金额，从分转为元，自动,千位分隔,
 * @param $money 数字金额
 * @return string
 */
function format_money_zh($money){
    $yuan =  (intval($money)%1000 == 0) ? '圆' : '';
    $cnums = array("零","壹","贰","叁","肆","伍","陆","柒","捌","玖");
    $grees = array("分","角","圆","拾","佰","仟","万","拾","佰","仟","亿","拾","佰","仟","万");
    //数字隐士转字符串
    $str = $money.'';
    $nums = str_split($str);
    //需要的最大位数
    $grees = array_slice($grees,0,count($nums));
    $moneyarr = '';
    $checkZero = '';
    foreach($nums as $shu){
        $han = array_pop($grees);
        if(intval($shu) == 0){
            $checkZero = $han;
        }else if($checkZero){
            $moneyarr .= in_array($checkZero,['圆','万','亿']) ? $checkZero.$shu.$han : '零'.$shu.$han;
            $checkZero = '';
        }else{
            $moneyarr .= $shu.$han;
        }
    }
    return str_replace(array_keys($cnums),$cnums,$moneyarr).$yuan;
}