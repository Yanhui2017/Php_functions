<?php

//检测empty(false['name']),获取布尔的键值会不会报错
$values = false;
echo ((empty($values['name']) == true) ? '不会报错' : '会报错，不能使用');