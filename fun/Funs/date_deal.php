<?php 

date_default_timezone_set('Asia/ShangHai');
/**
 * 租房申请条件
 * @param $check_date 审核通过日期
 * @param $start_date 起租日
 * @param $req_date   申请时间
 * @return bool
 */
function zf_check($check_date,$start_date,$req_date){
    $check_date = strtotime($check_date);
    $start_date = strtotime($start_date);
    $req_date   = strtotime($req_date);
    // 1.申请日在起租日之后的情况，租房风控审核通过日+1再进待打款
    // 2.申请日在起租日之前的情况，起租日+1再进待打款列表
    if($req_date > $start_date){
        if(time() >= $check_date + 86400){
            return true;
        }
    }else{
        if(time() >= $start_date + 86400){
            return true;
        }
    }
    return false;
}


$res = zf_check('2016-12-01','2016-11-30','2016-11-29');
echo json_encode($res);

?>