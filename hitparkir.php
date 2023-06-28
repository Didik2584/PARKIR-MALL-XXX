<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $jenisKendaraan = $_POST['jenis'];
  $lamaParkir = $_POST['lama'];

  $biayaPerJamMobil = 3000;
  $biayaPerJamMotor = 1000;
  $biayaPerJamSepeda = 500;

  $biayaParkir = 0;

  switch ($jenisKendaraan) {
    case 'MBL':
      if ($lamaParkir <= 2) {
        $biayaParkir = 5000;
      } else {
        $biayaParkir = 5000 + ($lamaParkir - 2) * $biayaPerJamMobil;
      }
      break;
    case 'MTR':
      if ($lamaParkir <= 2) {
        $biayaParkir = 3000;
      } else {
        $biayaParkir = 3000 + ($lamaParkir - 2) * $biayaPerJamMotor;
      }
      break;
    case 'SPD':
      if ($lamaParkir <= 2) {
        $biayaParkir = 2000;
      } else {
        $biayaParkir = 2000 + ($lamaParkir - 2) * $biayaPerJamSepeda;
      }
      break;
    default:
      echo "Mohon pilih jenis kendaraan yang valid.";
      exit;
  }

  echo "Jenis Kendaraan: " . $jenisKendaraan . "<br>";
  echo "Lama Parkir: " . $lamaParkir . " Jam<br>";
  echo "Biaya Parkir: Rp. " . $biayaParkir;
}
?>
