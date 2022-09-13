{* Hello world, this is the first home template file *}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
</head>
<body>
    {$content}

    <ul>
        {foreach from=$collection item=item key=key}
            <li>{$item['title']}</li>
        {/foreach}
    </ul>

</body>
</html>