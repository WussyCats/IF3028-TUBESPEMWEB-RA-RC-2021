<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIMPLE LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="{!!asset('assets/css/utama.css')!!}">
</head>

<body>
	<br>
		<center>
            <h1>SIMPLE LAPOR!</h1>
        </center>
			<form class="pencarian" onSubmit="" action="" method="post">
				<input class ="search" type="text" name="keyword" placeholder="search" autocomplete="off" autofocus>
				<input class="button" type="submit" name="submit" placeholder="cari" value="Cari">
			</form>
			<br>

		<center>
            <a href="{{ url('buat') }}"> Buat Laporan/Komentar 
                <img class="tambah" src="{!!asset('assets/img/websatu.jpg')!!}"> 
            </a>
        </center>

        </br>

	<div class="body1">
		<p>Laporan/Komentar Terakhir</p>
	</div>
	<hr>

	@foreach ($data as $lprn)
	@php($selengkapnya = substr($lprn->isi,0,1000))

	<div class="body2">
		
		<p>{{$selengkapnya}}</p>
		<p>Lampiran: {{$lprn->lampiran}} <span>Waktu : {{$lprn->tgl}} &nbsp&nbsp <a href="{{url('/detail/'.$lprn->id)}}">Lihat Selengkapnya ></a></span></p>
        <hr>
	</div>
	
	@endforeach
	
	<div class="space1"></div><br>
	<div class="space1"></div><br>
	<div class="space1"></div>
</body>
</html>