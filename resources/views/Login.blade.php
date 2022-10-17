
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tbo</title>
</head>
<body>


    @foreach($data as $data)
    <?php $infraction = json_decode(json_encode($data),TRUE); ?>
    <tr>
        <td>{{ $infraction["TokenId"] }}</td>
    </tr>
@endforeach

</body>
<script>

    </script>
</html>
