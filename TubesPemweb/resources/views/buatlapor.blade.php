<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="lapor.css">
     
      
    </head>
    <header>
        <link rel="stylesheet" href="lapor.css">
       
        </header>
    <body>
       <form class="box"  action="buatlapor.blade.php" method="post">
        <center><P class="font">
            SIMPLE LAPOR!
        </P></center>
        <p align="left" class="f"  >Buat Laporan/Komentar<p>
            <hr align="center" width="auto%" height="1px" color="black" size="3">
        
        <table>
            <link rel="stylesheet" href="style_lapor.css">

            <tr >
                   <td>
                      <textarea cols="107"  rows="10">Laporan/Komentar</textarea>
                   </td>
            </tr>

            <tr>
                <td><select class="aspk">
                    <option>Pilih Aspek Pelaporan/Komentar</option>
                    <option >Agama</option>
                    <option >Ekonomi</option>
                    <option >Kesehatan</option>
                    <option >Pendidikan</option>

                </select>    
                </td>         
            </tr>
            <tr>
                <td>
                    <div class="input">
                    <input  type="file" class="up"/>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <div class="k" >
                    <input class="buat" type="submit" value="Buat LAPOR" />
                    </div>
                </td>
            </tr>
           </table>
           <hr align="center" width="auto" height="1px" color="black" size="3">
       </form>
  
    </body>
   
</html>