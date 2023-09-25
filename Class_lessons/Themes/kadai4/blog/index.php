
<?php
require_once("dbconnect.php");

// 最大ページ数を求める
$counts = $db->query("select count(*) from memos");
$count = $counts->fetch_assoc();
$max_page = floor(($count["cnt"]+1)/5+1);
echo $max_page;                                                                                                                                                                                                                                                                                                                                                                                                       

$stmt = $db->prepare("select * from blogs order by id desc limit ?, 5"); //order by：並び替え
if (!$stmt):
    die($db->error);    
endif;
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
$page = ($page ?: 1); //ページ番号がない場合は1を代入
$start = ($page - 1) * 5;
$stmt->bind_param("i", $start); 
$result = $stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>メモ帳</h1>

    <p>-> <a href='input.php'>新しいメモ</a></p>
    <?php if (!$result): ?>
    <p>表示するメモがありません</p>
    <?php endif; ?>
    <?php $stmt->bind_result($id, $blog, $created); ?>
    <?php while ($stmt->fetch()): ?>
    <div>
        <h2><a href="blog.php?id=<?php echo $id; ?>"><?php echo htmlspecialchars(mb_substr($blog, 0, 50));?></a></h2>
        <time><?php echo htmlspecialchars($created);?></time>
    </div>
    <hr>
    <?php endwhile; ?>
    <p>
        <!--  ページ番号が1より大きい場合 -->
        <?php if ($page > 1): ?>
    <a href="?page=<?php echo $page-1;?>"><?php echo $page-1; ?>ページ目へ</a>
        <?php endif; ?>
        <?php if ($page < $max_page): ?> //ページ番号が5より小さい場合
    <a href="?page=<?php echo $page+1;?>"><?php echo $page+1; ?>ページ目へ</a>
        <?php endif; ?>
    
    </p>
</body>
</html>