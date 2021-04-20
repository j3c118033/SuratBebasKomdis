<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Dashboard::index',['filter' =>'role:Admin,Mahasiswa,Dosen,Akademik,SuperAdmin']);
$routes->add('/login', 'Mahasiswa\Login::index');
$routes->add('/pengurus/login', 'Admin\Login::index');
$routes->add('/logout', 'Logout::index');

/*Admin Route*/
$routes->group('admin', ['filter' => 'role:Admin'],function($routes) {
	$routes->get('DataAkun', 'Admin\Akun::index');
	$routes->get('DataAdmin', 'Admin\Admin::index');
	$routes->get('DataAkademik', 'Admin\Akademik::index');
	$routes->get('DataDosen', 'Admin\Dosen::index');
	$routes->get('DataMahasiswa', 'Admin\Mahasiswa::index');
	$routes->get('DataYudisium', 'Admin\Yudisium::index');
	$routes->get('DataVerifikasi-KMN', 'Admin\Verifikasi\Kmn::index');
	$routes->get('DataVerifikasi-EKW', 'Admin\Verifikasi\Ekw::index');
	$routes->get('DataVerifikasi-INF', 'Admin\Verifikasi\Inf::index');
	$routes->get('DataVerifikasi-TEK', 'Admin\Verifikasi\Tek::index');
	$routes->get('DataVerifikasi-JMP', 'Admin\Verifikasi\Jmp::index');
	$routes->get('DataVerifikasi-GZI', 'Admin\Verifikasi\Gzi::index');
	$routes->get('DataVerifikasi-TIB', 'Admin\Verifikasi\Tib::index');
	$routes->get('DataVerifikasi-IKN', 'Admin\Verifikasi\Ikn::index');
	$routes->get('DataVerifikasi-TNK', 'Admin\Verifikasi\Tnk::index');
	$routes->get('DataVerifikasi-MAB', 'Admin\Verifikasi\Mab::index');
	$routes->get('DataVerifikasi-MNI', 'Admin\Verifikasi\Mni::index');
	$routes->get('DataVerifikasi-KIM', 'Admin\Verifikasi\Kim::index');
	$routes->get('DataVerifikasi-LNK', 'Admin\Verifikasi\Lnk::index');
	$routes->get('DataVerifikasi-AKN', 'Admin\Verifikasi\Akn::index');
	$routes->get('DataVerifikasi-PVT', 'Admin\Verifikasi\Pvt::index');
	$routes->get('DataVerifikasi-TMP', 'Admin\Verifikasi\Tmp::index');
	$routes->get('DataVerifikasi-PPP', 'Admin\Verifikasi\Ppp::index');
	$routes->get('DataVerifikasi', 'Admin\Verif::index');
	$routes->get('RekapDataVerifikasi', 'Admin\Rekap::index');
});

/*SuperAdmin Route*/
$routes->group('superadmin', ['filter' => 'role:SuperAdmin'],function($routes) {
	$routes->get('DataAkun', 'Admin\Akun::index');
	$routes->get('DataAdmin', 'Admin\Admin::index');
	$routes->get('DataAkademik', 'Admin\Akademik::index');
	$routes->get('DataDosen', 'Admin\Dosen::index');
	$routes->get('DataMahasiswa', 'Admin\Mahasiswa::index');
	$routes->get('DataYudisium', 'Admin\Yudisium::index');
	$routes->get('DataVerifikasi', 'Admin\Verifikasi::index');
	$routes->get('RekapDataVerifikasi', 'Admin\Rekap::index');
});

/*Mahasiswa Route*/
$routes->group('mahasiswa', ['filter' => 'role:Mahasiswa'],function($routes) {
	$routes->get('DataMahasiswa', 'Mahasiswa\DataMahasiswa::index');
	$routes->get('LengkapiDataMahasiswa', 'Mahasiswa\InputData::index');
	$routes->get('PelanggaranMahasiswa', 'Mahasiswa\Pelanggaran::index');
	$routes->get('UnduhSuratBebasKomdisma', 'Mahasiswa\UnduhSurat::index');
});

/*Dosen Route*/
$routes->group('dosen', ['filter' => 'role:Dosen'],function($routes) {
	$routes->get('DataYudisium', 'Dosen\Yudisium::index');
	$routes->get('RekapDataVerifikasi', 'Dosen\Rekap::index');
	$routes->get('DataVerifikasi', 'Dosen\Verif::index');
	$routes->get('DataVerifikasi-KMN', 'Dosen\Verifikasi\Kmn::index');
	$routes->get('DataVerifikasi-EKW', 'Dosen\Verifikasi\Ekw::index');
	$routes->get('DataVerifikasi-INF', 'Dosen\Verifikasi\Inf::index');
	$routes->get('DataVerifikasi-TEK', 'Dosen\Verifikasi\Tek::index');
	$routes->get('DataVerifikasi-JMP', 'Dosen\Verifikasi\Jmp::index');
	$routes->get('DataVerifikasi-GZI', 'Dosen\Verifikasi\Gzi::index');
	$routes->get('DataVerifikasi-TIB', 'Dosen\Verifikasi\Tib::index');
	$routes->get('DataVerifikasi-IKN', 'Dosen\Verifikasi\Ikn::index');
	$routes->get('DataVerifikasi-TNK', 'Dosen\Verifikasi\Tnk::index');
	$routes->get('DataVerifikasi-MAB', 'Dosen\Verifikasi\Mab::index');
	$routes->get('DataVerifikasi-MNI', 'Dosen\Verifikasi\Mni::index');
	$routes->get('DataVerifikasi-KIM', 'Dosen\Verifikasi\Kim::index');
	$routes->get('DataVerifikasi-LNK', 'Dosen\Verifikasi\Lnk::index');
	$routes->get('DataVerifikasi-AKN', 'Dosen\Verifikasi\Akn::index');
	$routes->get('DataVerifikasi-PVT', 'Dosen\Verifikasi\Pvt::index');
	$routes->get('DataVerifikasi-TMP', 'Dosen\Verifikasi\Tmp::index');
	$routes->get('DataVerifikasi-PPP', 'Dosen\Verifikasi\Ppp::index');
});

/*Akademik Route*/
$routes->group('akademik', ['filter' => 'role:Akademik'],function($routes) {
	$routes->get('DataYudisium', 'Akademik\Yudisium::index');
	$routes->get('InputTanggalSidang', 'Akademik\Input::index');
	$routes->get('RekapDataVerifikasi', 'Akademik\Rekap::index');
	$routes->get('DataVerifikasi', 'Akademik\Verif::index');
	$routes->get('DataVerifikasi-KMN', 'Akademik\Verifikasi\Kmn::index');
	$routes->get('DataVerifikasi-EKW', 'Akademik\Verifikasi\Ekw::index');
	$routes->get('DataVerifikasi-INF', 'Akademik\Verifikasi\Inf::index');
	$routes->get('DataVerifikasi-TEK', 'Akademik\Verifikasi\Tek::index');
	$routes->get('DataVerifikasi-JMP', 'Akademik\Verifikasi\Jmp::index');
	$routes->get('DataVerifikasi-GZI', 'Akademik\Verifikasi\Gzi::index');
	$routes->get('DataVerifikasi-TIB', 'Akademik\Verifikasi\Tib::index');
	$routes->get('DataVerifikasi-IKN', 'Akademik\Verifikasi\Ikn::index');
	$routes->get('DataVerifikasi-TNK', 'Akademik\Verifikasi\Tnk::index');
	$routes->get('DataVerifikasi-MAB', 'Akademik\Verifikasi\Mab::index');
	$routes->get('DataVerifikasi-MNI', 'Akademik\Verifikasi\Mni::index');
	$routes->get('DataVerifikasi-KIM', 'Akademik\Verifikasi\Kim::index');
	$routes->get('DataVerifikasi-LNK', 'Akademik\Verifikasi\Lnk::index');
	$routes->get('DataVerifikasi-AKN', 'Akademik\Verifikasi\Akn::index');
	$routes->get('DataVerifikasi-PVT', 'Akademik\Verifikasi\Pvt::index');
	$routes->get('DataVerifikasi-TMP', 'Akademik\Verifikasi\Tmp::index');
	$routes->get('DataVerifikasi-PPP', 'Akademik\Verifikasi\Ppp::index');
});

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
