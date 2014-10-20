#zf-tcpdf - Zend module wrapper for tcpdf class

##Description:
Zend module wrapper for tcpdf class created by Nicola Asuni. TCPDF is a PHP class for generating PDF files on-the-fly without requiring external extensions. This library includes also a class to extract data from existing PDF documents and classes to generate 1D and 2D barcodes in various formats.

## Requirements
* [Zend Framework 2](https://github.com/zendframework/zf2) (latest master).
* php >=5.3.3

####Version: 
6.0.096
####Release date: 
2014-10-06
####Author:	
Nicola Asuni

####Copyright (c) 2002-2014:
* Nicola Asuni
* Tecnick.com LTD
* [www.tecnick.com](www.tecnick.com)

####URLs:
* [http://www.tcpdf.org](http://www.tcpdf.org)
* [http://www.sourceforge.net/projects/tcpdf](http://www.sourceforge.net/projects/tcpdf)


####Main Features:
* no external libraries are required for the basic functions;
* all standard page formats, custom page formats, custom margins and units of measure;
* UTF-8 Unicode and Right-To-Left languages;
* TrueTypeUnicode, OpenTypeUnicode v1, TrueType, OpenType v1, Type1 and CID-0 fonts;
* font subsetting;
* methods to publish some XHTML + CSS code, Javascript and Forms;
* images, graphic (geometric figures) and transformation methods;
* supports JPEG, PNG and SVG images natively, all images supported by GD (GD, GD2, GD2PART, GIF, JPEG, PNG, BMP, XBM, XPM) and all images supported via ImagMagick (http:  www.imagemagick.org/www/formats.html)
* 1D and 2D barcodes: CODE 39, ANSI MH10.8M-1983, USD-3, 3 of 9, CODE 93, USS-93, Standard 2 of 5, Interleaved 2 of 5, CODE 128 A/B/C, 2 and 5 Digits UPC-Based Extention, EAN 8, EAN 13, UPC-A, UPC-E, MSI, POSTNET, PLANET, RMS4CC (Royal Mail 4-state Customer Code), CBC (Customer Bar Code), KIX (Klant index - Customer index), Intelligent Mail Barcode, Onecode, USPS-B-3200, CODABAR, CODE 11, PHARMACODE, PHARMACODE TWO-TRACKS, Datamatrix, QR-Code, PDF417;
* JPEG and PNG ICC profiles, Grayscale, RGB, CMYK, Spot Colors and Transparencies;
* automatic page header and footer management;
* document encryption up to 256 bit and digital signature certifications;
* transactions to UNDO commands;
* PDF annotations, including links, text and file attachments;
* text rendering modes (fill, stroke and clipping);
* multiple columns mode;
* no-write page regions;
* bookmarks, named destinations and table of content;
* text hyphenation;
* text stretching and spacing (tracking);
* automatic page break, line break and text alignments including justification;
* automatic page numbering and page groups;
* move and delete pages;
* page compression (requires php-zlib extension);
* XOBject Templates;
* Layers and object visibility.
* PDF/A-1b support.

#Installation

  1. Run: `php composer.phar require psyipm/zf-tcpdf:dev-master`
  2. Add `TcPdf` to the enabled modules list in your application.config.php

#Usage

```php
$view = new ViewModel();
        
$renderer = $this->getServiceLocator()->get('Zend\View\Renderer\RendererInterface');
$view->setTemplate('test');
$html = $renderer->render($view);
        
$pdf = $this->serviceLocator->get('TcPdfService');
        
$pdf->writeHTML($html);
        
$pdf->lastPage();
$pdf->Output("pdf-name.pdf", 'I');
```

#Documentation
For more detailed instructions visit TCPDF developer website [tcpdf.org](http://www.tcpdf.org/index.php)