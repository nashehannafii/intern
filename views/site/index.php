<?php

/** @var yii\web\View $this */

use app\models\Spk;

$this->title = 'My Yii Application';
// $res = Spk::find()->orderBy(['nilai_hasil' => SORT_DESC])->all();
// $null = '???';

?>


<h1 class="app-page-title">Task </h1>

<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
    <div class="inner">
        <div class="app-card-body p-3 p-lg-4">
            <h3 class="mb-3">Website Tambang!</h3>
            <div class="row gx-5 gy-3">
                <div class="col-12 col-lg-9">

                    <div>
                        <h3>
                            Soal Tes Calon Backend Developer
                        </h3>
                        <p>

                            Sebuah perusahaan tambang nikel berlokasi di beberapa daerah (region), satu kantor
                            pusat, satu kantor cabang dan memiliki enam tambang dengan lokasi yang berbeda.
                            Perusahaan tersebut mempunyai banyak kendaraan dengan jenis kendaraan angkutan orang
                            dan angkutan barang. Selain kendaraan milik perusahaan, ada juga kendaraan yang disewa
                            dari perusahaan persewaan.
                        </p>
                        <p>

                            Perusahaan tersebut membutuhkan sebuah aplikasi untuk dapat memonitoring kendaraan yang dimiliki. Mulai dari konsumsi BBM, jadwal service dan riwayat pemakaian kendaraan. Untuk dapat memakai kendaraan, pegawai diwajibkan untuk melakukan pemesanan terlebih dahulu ke pool atau bagian pengelola kendaraan dan pemakaian kendaraan harus diketahui atau disetujui oleh masing - masing atasan. Soal :
                        </p>
                        <p>

                            Buat aplikasi pemesanan kendaraan dengan ketentuan sebagai berikut :
                        </p>
                        <ul>
                            <li>
                                a. Terdapat 2 user (admin dan pihak yang menyetujui)
                            </li>
                            <li>
                                b. Admin dapat menginputkan pemesanan kendaraan dan menentukan driver serta pihak yang menyetujui pemesanan
                            </li>
                            <li>
                                c. Persetujuan dilakukan berjenjang minimal 2 level
                            </li>
                            <li>
                                d. Pihak yang menyetujui dapat melakukan persetujuan melalui aplikasi
                            </li>
                            <li>
                                e. Terdapat dashboard yang menampilkan grafik pemakaian kendaraan
                            </li>
                            <li>
                                f. Terdapat laporan periodik pemesanan kendaraan yang dapat di export (Excel)
                            </li>
                            <li>
                                g. Buat file readme yang berisi daftar username-password, database version, php version, framework dan panduan penggunaan aplikasi. 
                            </li>
                        </ul>
                        <p>
                            Poin Plus :
                            Berikut beberapa hal yang dapat menambahkan poin anda :
                        </p>
                        <ul>
                            <li>
                                a. Buat physical data model yang berhubungan dengan fitur pemesanan kendaraan
                            </li>
                            <li>
                                b. Buat activity diagram untuk fitur pemesanan kendaraan sesuai penjelasan diatas
                            </li>
                            <li>
                                c. Terdapat log aplikasi pada tiap proses
                            </li>
                            <li>
                                d. UI/UX yang baik dan responsive
                            </li>
                        </ul>
                        <h4>

                            Selamat Mengerjakan
                        </h4>
                    </div>
                </div>
                <!--//col-->
                <!-- <div class="col-12 col-lg-3">
                    <a class="btn app-btn-primary" href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-down me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                            <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                            <path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z" />
                        </svg>Free Download</a>
                </div> -->
                <!--//col-->
            </div>
            <!--//row-->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!--//app-card-body-->

    </div>
    <!--//inner-->
</div>
<!--//app-card-->