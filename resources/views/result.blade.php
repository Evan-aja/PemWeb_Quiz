<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        tr, th , td {
             border: 2px solid #c65990;
            padding: 8px;
        }
        th{
            text-align: center;
        }
        table{
            border-collapse: collapse;
            width: 400px;
            height:100px;
            margin: 0 auto;
            /*text-align: center;*/
        }
    </style>
    <title>Kalkulator Hari Meninggal</title>
</head>
<body>
<table>
    <tr>
        <th colspan="2">Kalkulasi Selametan</th>
    </tr>
    <tr>
        <th>Nama</th>
        <td id="nama">{{$hasil['nama']}}</td>
    </tr>
    <tr>
        <th>Meninggal</th>
        <td id="tanggal">{{$hasil['tanggal']}}</td>
    </tr>
    <tr>
        <th>3 Hari</th>
        <td>{{$hasil['tiga']}}</td>
    </tr>
    <tr>
        <th>7 Hari</th>
        <td>{{$hasil['tujuh']}}</td>
    </tr>
    <tr>
        <th>40 Hari</th>
        <td>{{$hasil['empatpuluh']}}</td>
    </tr>
    <tr>
        <th>100 Hari</th>
        <td>{{$hasil['seratus']}}</td>
    </tr>
    <tr>
        <th>Pendhak I *</th>
        <td>{{$hasil['pendhakpisan']}}</td>
    </tr>
    <tr>
        <th>Pendhak II **</th>
        <td>{{$hasil['pendhakkalih']}}</td>
    </tr>
    <tr>
        <th>1000 Hari</th>
        <td>{{$hasil['seribu']}}</td>
    </tr>
</table>
</body>
</html>
