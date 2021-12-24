<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{!!asset('assets/css/buat.css')!!}">
    <title>SIMPLE LAPOR!</title>
    <style>
        option[value=dosen, value=mahasiswa, value=mahasiswa, value=infrastruktur, value=pengajar] {
            width: 100%;
            padding: 8px 15px;
            margin: 8px 0;
            display: inline-block;
            border: 2px solid black;
            box-sizing: border-box;
            height: 50px;
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <hr>
    <div class="content">
        <div class="judul">
            <center>
                <h1>SIMPLE LAPOR!</h1>
            </center>
        </div>
        <div class="container">
            <form action="{{url('/update/'.$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="isi">Edit Laporan/Komentar</label><br>
                <hr>
                <textarea type="text" id="isi" name="isi" placeholder="Laporan/Komentar"></textarea>
                <br><br>
                <select name="tipe" id="tipe">
                    <option hidden>Pilih Aspek Pelaporan/Komentar</option>
                    <option value="dosen">Dosen</option>
                    <option value="staff">Staff</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="infrastruktur">Infrastruktur</option>
                    <option value="pengajaran">Pengajaran</option>
                </select>
                <br><br>
                <input type="date" id="tanggal" name="tgl" placeholder="dd/mm/yy">
                <br><br>
                <input type="file" name="lampiran" id="lampiran">
                <button type="submit">Update LAPOR!</button>
                
            </form>

        </div>
    </div>

</body>