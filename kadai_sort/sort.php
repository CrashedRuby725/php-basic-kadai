<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編課題</title>
</head>

<body>
   <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way ($nums, $order) {
            if ($order) {
                echo '昇順にソートします。<br>';
                sort($nums);
                foreach ($nums as $value) {
                    echo "{$value}<br>";
                } 
            }
            else {
                echo '降順にソートします。<br>';
                rsort($nums);
                foreach ($nums as $value) {
                    echo "{$value}<br>"; 
               }
            } 
        }

        $order = TRUE;
        sort_2way ($nums, $order);

        $order = FALSE;
        sort_2way ($nums, $order);
      ?>
    </p>
</body>

</html>