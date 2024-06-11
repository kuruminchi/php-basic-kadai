<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>
  <body>
    <p>
      <?php
      
      
      function sort_2way($order, $array) {
        
        if ($order === TRUE){
          echo '昇順にソートします。' . '<br>';
          sort($array);
          foreach ($array as $num) {
            echo $num . '<br>';    
          }
        } else {
          echo '降順にソートします。' . '<br>';
          rsort($array);
          foreach ($array as $num) {
            echo $num . '<br>';
          }
        }
      }
      $nums = [15, 4, 18, 23, 10];

      echo sort_2way(TRUE, $nums);
      echo sort_2way(FALSE, $nums);

      
      // echo '昇順にソートします。' . '<br>';
      // sort($nums);
      // foreach ($nums as $num) {
      //   echo $num . '<br>';
      // }

      // echo '降順にソートします。' . '<br>';
      // rsort($nums);
      // foreach ($nums as $num) {
      //   echo $num . '<br>';
      // }
      ?>
    </p>
  </body>
</html>    
