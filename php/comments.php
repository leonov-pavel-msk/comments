<div class="gray padding">
	<div class="comments wrapper">
<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/php/db.php");
    $link = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, 'database');
    mysqli_set_charset($link, 'utf8');

    $result = mysqli_query($link, 'SELECT * FROM comments ORDER BY id DESC');

    while( $row = mysqli_fetch_assoc($result) ){
        echo "<div class='comment-header'><div class='name'>{$row['name']}</div><div class='timedate'><span>{$row['time']}</span><span>{$row['date']}</span></div></div>";
        echo "<div class='comment-text'><p>{$row['text']}</p></div>";
    }
?>
	</div>
</div>
<div class="gray">
	<div class="line"></div>
</div>