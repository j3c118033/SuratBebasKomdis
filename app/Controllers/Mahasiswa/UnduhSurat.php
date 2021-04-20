<?php
namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\M_mahasiswa;
//use TCPDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class UnduhSurat extends BaseController
{
	protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->auth = new \IonAuth\Libraries\IonAuth();
        $this->user = $this->auth->user()->row();
        $this->group_name = $this->auth->getUsersGroups()->getRow()->name;
        $this->dataModel = new M_mahasiswa();
    }

    //menampilkan halaman unduh surat
    public function index()
    {	
        $builder = $this->dataModel;
        $builder->join('users','users.id = mahasiswa.id_akun');
        $builder->where('id_akun', $this->user->id);
        
        $query = $builder->get()->getResult();
        
        $group = 'Mahasiswa';
        if (!$this->auth->inGroup($group))
        {
            return redirect()->back();
        } else {
            $data = [
                'title' => 'Unduh Surat Bebas Komdis',
                'user'  => $this->user,
                'group_name'  => $this->group_name,
                'data'  => $query,
            ];
    
            return view('mahasiswa/unduh', $data);
        }
	}

    //TCPDF
    /*public function suratbebaskomdisma(){
        $builder = $this->dataModel;
        $builder->join('users','users.id = mahasiswa.id_akun');
        $builder->where('id_akun', $this->user->id);
        
        $query = $builder->get()->getResult();

        $data = [
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'data'  => $query,
        ];

        $html = view('mahasiswa/surat', $data);

        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'KEMENTERIAN RISET TEKNOLOGI DAN PENDIDIKAN TINGGI', 'INSTITUT PERTANIAN BOGOR');

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(20, 58, 20);
        $pdf->SetHeaderMargin(25);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // remove default header/footer
        $pdf->setPrintHeader(true);
        $pdf->setPrintFooter(false);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
            require_once(dirname(__FILE__).'/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // -------------------------------------------------------------------

        // add a page
        $pdf->AddPage();

        // Print text using writeHTMLCell()
        $pdf->writeHTML($html);

        $this->response->setContentType('application/pdf');
        //Close and output PDF document
        $pdf->Output('Surat Bebas Komdisma.pdf', 'I');

        //============================================================+
        // END OF FILE
        //============================================================+*/
        
        /* create new PDF document
        $pdf = new TCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);

        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();
        
        // Print text using writeHTMLCell()
        $pdf->writeHTML($html);
        //$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);

        $this->response->setContentType('application/pdf');
        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        $pdf->Output('Surat Bebas Komdisma.pdf', 'I');
    }*/

    //DOMPDF
    public function suratbebaskomdis(){
        $builder = $this->dataModel;
        $builder->join('users','users.id = mahasiswa.id_akun');
        $builder->where('id_akun', $this->user->id);
        
        $query = $builder->get()->getResult();

        $data = [
            'user'  => $this->user,
            'group_name'  => $this->group_name,
            'data'  => $query,
        ];

        $html = view('mahasiswa/surat', $data);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        //options
        //$options = new Options();
        //$options->setIsRemoteEnabled(true);
        //$dompdf->setOptions($options);

        
        $options = new Options();
        $options->setIsRemoteEnabled(true);

        $dompdf->setOptions($options);
        $dompdf->output();

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Surat Bebas Komdisma.pdf');
    }


}