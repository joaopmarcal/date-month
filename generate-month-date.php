<?php

    for ($i = 0; $i <= 11; $i++) {
      $months[$i]['last'] = date("t-m-Y", strtotime(date('Y-m')." -$i months"));
      $day = substr($months[$i]['last'], 2);
      $months[$i]['first'] = '01' . $day . ' 00:00:00';
      $months[$i]['last'] = $months[$i]['last'] . ' 23:59:59';

      $months[$i]['first'] = strtotime($months[$i]['first']);
      $months[$i]['last'] = strtotime($months[$i]['last']);
      $i++;
    }

    var_dump($months);