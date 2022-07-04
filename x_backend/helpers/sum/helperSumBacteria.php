<?php

include_once 'helperJsonRender.php';

function helperSumBacteria()
{
   if ($_GET) {
      $tact = $_GET['tact'];
      $redReturn;
      $greenReturn;
      $redOne = 1;
      $redTwo = 1;
      $greenOne = 1;
      $greenTwo = 1;
      for ($i = 0; $i < $tact; $i++) {
         $redOne *= 4;
         $redTwo *= 2;
         $greenOne *= 3;
         $greenTwo *= 5;

         $sum_1 += $redOne;
         $sum_2 += $redTwo;
         $sum_3 += $greenOne;
         $sum_4 += $greenTwo;
      }

      $redReturn = $sum_1 + $sum_2 + 1;
      $greenReturn = $sum_3 + $sum_4 + 1;
      $error = false;

      $arr = compact('redReturn', 'greenReturn', 'error');
      helperJsonRender($arr);
   } else {
      helperJsonRender([
         'error' => true
      ]);
   }
}
