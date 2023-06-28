<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #wrap {
            width: 800px;
            margin: 100px auto;
            background-color:bisque;
        }
        #info {
            margin: 10px;
            font-family: 'Courier New', Courier, monospace ;
        }
        input[type=submit] {
            color: white;
            font-size: 20px;
            background-color: brown;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            border-radius: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div id='wrap'>
<h1 style="text-align: center;">PARKIR MALL XXX</h1>
<div id='info'>
<strong>Perhitungan biaya Parkir : </strong><br/>
MOBIL: 2 Jam pertama Rp. 5.000, Per Jam Berikutnya : Rp. 3.000 <br/>
MOTOR: 2 Jam pertama Rp. 3.000, Per Jam Berikutnya : Rp. 1.000 <br/>
SEPEDA: 2 Jam pertama Rp. 2.000, Per Jam Berikutnya : Rp. 500 <br/>
<hr/>
</div>
<table style="margin: 20px;">
    <form action="hitparkir.php" method="post">
    <tr>
        <td>Jenis Kendaraan</td>
        <td> : <select name="jenis" id="">
                    <option value="">-Pilih Jenis Kendaraan-</option>
                    <option value="MBL">MOBIL</option>
                    <option value="MTR">MOTOR</option>
                    <option value="SPD">SEPEDA</option>
                </select>
        </td>
    </tr>    
    <tr>
        <td>LAMA PARKIR</td>
        <td>: <input type="text" name="lama" id="" maxlength="5" size="5" value="0" style="text-align: right;"> Jam
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" value="HITUNG BIAYA PARKIR">
        </td>
    </tr>
    </form>
</table>   
</div>
</body>
</html>