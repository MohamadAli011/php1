<?php
$nama[0]="lex";

 $mhs = [
            [
                "nama" => "Louis",
                "nrp" => "01111",
                "email" => "Lou@is.com",
                "jurusan" => "Teknik"
            ],
            [
                "nama" => "Cristy",
                "nrp" => "01112",
                "email" => "Cris@ty.com",
                "jurusan" => "Teknik"
            ],
            [
                "nama" => "Paul",
                "nrp" => "01113",
                "email" => "Pa@ul.com",
                "jurusan" => "Teknik"
            ]
        ];

?>


<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftra Mahsaiswa</h3>
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <ul>
                    <li><?= $mhs['nama'];?></li>
                    <li><?= $mhs['nrp'];?></li>
                    <li><?= $mhs['email'];?></li>
                    <li><?= $mhs['jurusan'];?></li>
                </ul>
                <?php endforeach; ?>
        </div>

    </div>

</div>