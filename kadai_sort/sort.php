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

        // 昇順ソート関数
        function sortAsc ($nums)
        {
            sort($nums);
            return $nums;
        }

        // 降順ソート関数
        function sortDesc ($nums)
        {
            rsort($nums);
            return $nums;
        }

        // 昇順ソートの実行
        $sorted_asc = sortAsc ($nums);
            echo '昇順にソートします。<br>';
        foreach ($sorted_asc as $value) {
            echo "{$value}<br>";
        }

        //降順ソートの実行
        $sorted_desc = sortDesc ($nums); 
            echo '降順にソートします。<br>';
        foreach ($sorted_desc as $value) {
            echo "{$value}<br>";
        }
        ?>
    </p>
</body>

</html>