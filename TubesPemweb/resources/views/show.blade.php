<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{!!asset('assets/css/detail.css')!!}">
</head>
<body>
<div class="container">
<center><h1>SIMPLE LAPORAN</h1></center>
        <div class="content-wrapper">
            <h2>Detail Laporan/Komentar</h2>
            <hr>
            <p class="isi">{{$data->isi_laporan}}</p>
            <div class="lampiran">
                <span>Lampiran: {{$data->lampiran_laporan}} </span> <br>
                <img src="{{asset('assets/upload/lapor-detail.jpg')}}" alt="Lampiran">
            </div>
            <br>
            <br>
        <div class="penutup">
            <span>Waktu : {{$data->tgl_laporan}} &nbsp&nbsp Aspek : {{$data->tipe_laporan}}</span>
    
            
            
            <a class="hapus" href="{{url('/destroy/'.$data->id)}}">Hapus Laporan/komentar</a>
            <a class="edit" href="{{url('/show2/'.$data->id)}}">Edit Laporan/komentar</a>

        </div>
            <br>
            <hr>
        </div>
    </div>    
</body>
</html>