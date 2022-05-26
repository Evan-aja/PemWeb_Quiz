<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator Hari Meninggal</title>
</head>
<body>
    <form method="post" action="{{route('kalkulator')}}">
        {{csrf_field()}}
        <div>
            <label>
                Nama :
                <input type="text" name="nama" placeholder="Nama"/>
            </label>
        </div>
        <div>
            <label>
                Tanggal :
                <input type="date" name="tanggal" placeholder="Tanggal"/>
            </label>
        </div>
        <div>
           <button type="submit">Hitung</button>
        </div>
    </form>
</body>
</html>
