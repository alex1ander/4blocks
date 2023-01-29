<? include 'function.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4blocks</title>
    <link href="/style.css" rel="stylesheet" type="text/css">

</head>
<body>
    <h1><?= $title; ?></h1>
    <div class="parent">
        <a <? isEnableClick('red',$title) ?> class="child red <?if($n === 0)echo 'active'?>"></a>
        <a <? isEnableClick('yellow',$title);?> class="child yellow <?if($n === 1)echo 'active'?>"></a>
        <a <? isEnableClick('green',$title);?> class="child green <?if($n === 2)echo 'active'?>"></a>
        <a <? isEnableClick('blue',$title);?> class="child blue <?if($n === 3)echo 'active'?>"></a>
    </div>
</body>
</html>
