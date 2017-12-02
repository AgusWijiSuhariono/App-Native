<?php
function TanggalIndonesia($date) {
	$date = date('Y-m-d',strtotime($date));
    if($date == '0000-00-00')
        return 'Tanggal Kosong';

    $tgl = substr($date, 8, 2);
    $bln = substr($date, 5, 2);
    $thn = substr($date, 0, 4);

    switch ($bln) {
        case 1 : {
                $bln = 'Januari';
            }break;
        case 2 : {
                $bln = 'Februari';
            }break;
        case 3 : {
                $bln = 'Maret';
            }break;
        case 4 : {
                $bln = 'April';
            }break;
        case 5 : {
                $bln = 'Mei';
            }break;
        case 6 : {
                $bln = "Juni";
            }break;
        case 7 : {
                $bln = 'Juli';
            }break;
        case 8 : {
                $bln = 'Agustus';
            }break;
        case 9 : {
                $bln = 'September';
            }break;
        case 10 : {
                $bln = 'Oktober';
            }break;
        case 11 : {
                $bln = 'November';
            }break;
        case 12 : {
                $bln = 'Desember';
            }break;
        default: {
                $bln = 'UnKnown';
            }break;
    }

    $hari = date('N', strtotime($date));
    switch ($hari) {
        case 0 : {
                $hari = 'Minggu';
            }break;
        case 1 : {
                $hari = 'Senin';
            }break;
        case 2 : {
                $hari = 'Selasa';
            }break;
        case 3 : {
                $hari = 'Rabu';
            }break;
        case 4 : {
                $hari = 'Kamis';
            }break;
        case 5 : {
                $hari = "Jum'at";
            }break;
        case 6 : {
                $hari = 'Sabtu';
            }break;
        default: {
                $hari = 'UnKnown';
            }break;
    }

    $tanggalIndonesia = "Hari ".$hari.", Tanggal ".$tgl . " " . $bln . " " . $thn;
    return $tanggalIndonesia;
}

function Terbilang($nilai) {
        $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        if($nilai==0){
        	return "Kosong";
        }elseif ($nilai < 12&$nilai!=0) {
            return "" . $huruf[$nilai];
        } elseif ($nilai < 20) {
            return Terbilang($nilai - 10) . " Belas ";
        } elseif ($nilai < 100) {
            return Terbilang($nilai / 10) . " Puluh " . Terbilang($nilai % 10);
        } elseif ($nilai < 200) {
            return " Seratus " . Terbilang($nilai - 100);
        } elseif ($nilai < 1000) {
            return Terbilang($nilai / 100) . " Ratus " . Terbilang($nilai % 100);
        } elseif ($nilai < 2000) {
            return " Seribu " . Terbilang($nilai - 1000);
        } elseif ($nilai < 1000000) {
            return Terbilang($nilai / 1000) . " Ribu " . Terbilang($nilai % 1000);
        } elseif ($nilai < 1000000000) {
            return Terbilang($nilai / 1000000) . " Juta " . Terbilang($nilai % 1000000);
        }elseif ($nilai < 1000000000000) {
            return Terbilang($nilai / 1000000000) . " Milyar " . Terbilang($nilai % 1000000000);
        }elseif ($nilai < 100000000000000) {
            return Terbilang($nilai / 1000000000000) . " Trilyun " . Terbilang($nilai % 1000000000000);
        }elseif ($nilai <= 100000000000000) {
            return "Maaf Tidak Dapat di Prose Karena Jumlah nilai Terlalu Besar ";
        }
    }

?>
<div class="row">
	<div class="col-lg-12">
		<h3>A. Format Tanggal Indonesia</h3>
		Tanggal PHP : <?= date('Y-m-d') ?><br>
		Tanggal Indonesia : <?= TanggalIndonesia(date('Y-m-d')) ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<h3>B. Fungsi Terbilang</h3>
		Jumlah Angka : 123456789<br>
		Terbilang : <?= Terbilang(123456789) ?>
	</div>
</div>