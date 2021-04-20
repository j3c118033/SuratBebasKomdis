<!DOCTYPE html>
<head>
    <title>Surat Bebas Komdisma 2021</title>
    <meta charset="utf-8">

</head>

<body>
    <!--Surat-->
        <div class="surat" style="margin : 0 25px">
            <br>
            <table>
                <tr>
                    <td><img src="https://4.bp.blogspot.com/-kg9B6SrjXvA/WazwA8sn6EI/AAAAAAAAAD8/7MaFbH1120sAozsSwsTVmju4ywhkKbQNQCLcBGAs/s1600/logo_IPB.svg-image4144-4294966727.png" style="width:100px"> </td>
                    <td><p align="center" style="line-height: 5px;margin-left:25px"> KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN </p>
                    <p align="center" style="line-height: 5px;margin-left:15px"> INSTITUT PERTANIAN BOGOR </p>
                    <p align="center" style="line-height: 5px;margin-left:15px"> SEKOLAH VOKASI</p>
                    <p align="center" style="line-height: 5px;margin-left:15px"> Kampus IPB Cilibende, Jl. Kumbang No.14 Bogor 16151</p>
                    <p align="center" style="line-height: 5px;margin-left:15px"> Telp. (0251) 8329101, 8329101, Fax (0251) 8348007</p></td>
                    <td><p align="center" style="margin-top:-80px; margin-left:5px">FRM/SV/DIS/005</p><td>
                </tr>
            </table>
                <hr>
                <br>
                <p class="judul" align="center"><b>SURAT KETERANGAN</b></p>
                <br>
                <br>
                <?php foreach ($data as $data) : ?>                       
                    <div class="isi-surat">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bersama ini menerangkan bahwa mahasiswa :</p>
                        
                        <table class="tabel-surat-mahasiswa">
                            <tr>
                                <td class="data-mahasiswa" style="width: 30%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
                                <td class="data-mahasiswa" style="width: 5%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td class="data-mahasiswa" style="width: 65%;"><?= $data->nama ;?></td>
                            </tr>
                            <tr>
                                <td class="data-mahasiswa" style="width: 30%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIM</td>
                                <td class="data-mahasiswa" style="width: 5%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td class="data-mahasiswa" style="width: 65%;"><?= $data->nim ;?></td>
                            </tr>
                            <tr>
                                <td class="data-mahasiswa" style="width: 30%; vertical-align: top;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program Studi</td>
                                <td class="data-mahasiswa" style="width: 5%; vertical-align: top;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td class="data-mahasiswa" style="width: 65%;"><?= $data->prodi ;?></td>
                            </tr>
                        </table>

                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telah dinyatakan bebas terhadap pelanggaran tata tertib kehidupan kampus Bagi mahasiswa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IPB (SK Rektor No. 13/K.13/KM/2015)</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="ttd-surat">
                        <div style="width: 50%; text-align: left; float: right;">Bogor,
                        <?php
                            setlocale(LC_TIME, 'Indonesian');
                            $newDate = strftime("%d %B %Y",strtotime($data->tgl_bebas_komdis));
                            echo $newDate;
                        ?>
                        </div><br>
                        <div style="width: 50%; text-align: left; float: right;">Koordinator Komisi Disiplin dan Kemahasiswaan</div><br><br><br><br><br><br><br><br>
                        <div style="width: 50%; text-align: left; float: right;"><img src="https://j3c118033-ukom.000webhostapp.com/asset/ttd_buaryani.jpg" style="width:170px; margin-top:-120px"></div><br><br>
						<div style="width: 50%; text-align: left; float: right;">Dr. drh. Aryani Sismin Satyaningtijas, MSc.</div><br>
                        <div style="width: 50%; text-align: left; float: right;">NIP 19600914 198603 2 001</div><br><br><br>
                    </div>
                <?php endforeach; ?>
                <br>
                <br>
                <br>
                <br>
                <table>
                    <thead>
                        <tr>
                            <td class="data-mahasiswa" style="width: 30%;">No Revisi : 00</td>
                            <td class="data-mahasiswa" style="width: 5%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hal : 1/1</td>
                            <td class="data-mahasiswa" style="width: 65%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Berlaku : 1 Maret 2010</td>
                        </tr>
					</thead>
                </table>
        </div>
	<!-- end surat -->
</body>

