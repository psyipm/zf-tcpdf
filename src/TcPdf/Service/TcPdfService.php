<?php

namespace TcPdf\Service;

/**
 * Description of TcPdfService
 *
 * @author ipm
 */
class TcPdfService
{
    /**
     * @var \TcPdf\TCPDF
     */
    private $tcpdf;

    public function __construct()
    {
        require_once  dirname(__FILE__) . '/../TcPdf/tcpdf.php';
        $this->tcpdf = new \TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT);
        
        $this->setDefaults();

        // add a page
        $this->tcpdf->AddPage();
    }
    
    private function setDefaults()
    {
        // remove default header/footer
        $this->tcpdf->setPrintHeader(false);
        $this->tcpdf->setPrintFooter(false);

        // set default monospaced font
        $this->tcpdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $this->tcpdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

        // set auto page breaks
        $this->tcpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $this->tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set font
        $this->tcpdf->SetFont('freeserif', '', 10);
    }

    public function getTcPdfInstance()
    {
        return $this->tcpdf;
    }
}
