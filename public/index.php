<html lang="ja">
<head>
<meta charset="utf-8">
<title>Reservation Form</title>
<style>
</style>
</head>
<body>
<?php
    echo '必要事項を入力してください。';
?>
<form method="post"action="calendar.php">
お名前
<div><input name="name"type="text"placeholder="山田太郎"style="width:120px"></div>
電話番号
<div><input name="number"type="tel"placeholder="09012349876"></div>
人数
<div><input name="member"></div>
日付
<div><input name="day"type="date"list="daylist"min=""></div>
<div><input type="submit"value="Send"></div>
<div><input type="reset"value="Reset"></div>
</form>
</body>
</html>