<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>http client</title>
</head>
<body>
@foreach ($data as $item)
    <div>
        {{
            $item['title']
        }}
    </div>
@endforeach
</body>
</html>
