<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        // Product data based on mockup
        $products = [
            [
                'code' => 'EAC1020',
                'name' => 'RECTANGEL RATTAN DINING CHAIR',
                'image' => 'EAC1020.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H=91xL=54xW=62'
            ],
            [
                'code' => 'EAC1021',
                'name' => 'CHAIRCROSS RATTAN DINING CHAIR',
                'image' => 'EAC1021.png',
                'material' => 'Natural Rattan Frame, Synthetic Leather Cushion',
                'finishing' => 'NC (For Frame)',
                'color' => 'Natural',
                'dimension' => 'H=92xL=65xW=65'
            ],
            [
                'code' => 'EAC1022',
                'name' => 'KING RATTAN DINING CHAIR',
                'image' => 'EAC1022.png',
                'material' => 'Natural Rattan Frame, Synthetic Leather Cushion',
                'finishing' => 'NC (For Frame)',
                'color' => 'Natural',
                'dimension' => 'H=92xL=62xW=64'
            ],
            [
                'code' => 'EAC1023',
                'name' => 'VIRGO RATTAN DINING CHAIR',
                'image' => 'EAC1023.png',
                'material' => 'NaturalRattanFrame',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H=97xL=58xW=50'
            ],
            [
                'code' => 'EAC1024',
                'name' => 'MINIMALIST RATTAN DINING CHAIR',
                'image' => 'EAC1024.png',
                'material' => 'Natural Rattan Frame',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H=51xL=43xW=48'
            ],
            [
                'code' => 'EAC1025',
                'name' => 'BOHEMIAN RATTAN DINING CHAIR',
                'image' => 'EAC1025.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'White',
                'dimension' => 'H=100xL=60xW=50'
            ],
            [
                'code' => 'EAC1026',
                'name' => 'WEBBING RATTAN DINING CHAIR',
                'image' => 'EAC1026.png',
                'material' => 'TeakWood, Natural Rattan',
                'finishing' => 'NC,PU(ForFrame)',
                'color' => 'Natural',
                'dimension' => 'H=82xL=50xW=56'
            ],
            [
                'code' => 'EAC1027',
                'name' => 'PEANUT RATTAN DINING CHAIR',
                'image' => 'EAC1027.png',
                'material' => 'TeakWood, Rattan Webbing',
                'finishing' => 'NC',
                'color' => ':Dark Brown',
                'dimension' => 'H=58xL=50xW=56'
            ],
            [
                'code' => 'EAC1028',
                'name' => 'MINIMALIST RATTAN OFFICES CHAIR',
                'image' => 'EAC1028.png',
                'material' => 'TeakWood,Rattan Webbing',
                'finishing' => 'NC, PU(ForFrame)',
                'color' => 'Glaze Brown',
                'dimension' => 'H=79xL=56xW=61'
            ],
            [
                'code' => 'EAC1029',
                'name' => 'BISTRO RATTAN DINING CHAIR',
                'image' => 'EAC1029.png',
                'material' => 'Natural Rattan Frame, Synthetic Rattan',
                'finishing' => 'Melamine',
                'color' => 'Green, Black, Brown',
                'dimension' => 'H=98xL=45xW=45'
            ],
            [
                'code' => 'EAC1031',
                'name' => 'RUSH RATTAN DINING CHAIR',
                'image' => 'EAC1031.png',
                'material' => 'Natural Rattan, Seagrass',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H=91xL=52xW=46'
            ],
            [
                'code' => 'EAC1032',
                'name' => 'TRELLIS RATTAN DINING CHAIR',
                'image' => 'EAC1032.png',
                'material' => 'Natural Rattan, Metal',
                'finishing' => 'Melamine',
                'color' => 'Honey',
                'dimension' => 'H=90xL=49xW=63'
            ],
            [
                'code' => 'EAC1033',
                'name' => 'WISHBONE ROPE DINING CHAIR',
                'image' => 'EAC1033.png',
                'material' => 'Rope, Metal Frame',
                'finishing' => 'Powder Coating',
                'color' => 'Grey, Black (for Frame)',
                'dimension' => 'H=78xL=45xW=55'
            ],
            [
                'code' => 'EAC1034',
                'name' => 'SPIRAL HYACINTH DINING CHAIR',
                'image' => 'EAC1034.png',
                'material' => 'Water Hyacinth, Mahonia Frame',
                'finishing' => 'PU (for Frame), NC',
                'color' => 'Natural',
                'dimension' => 'H=99xL=48xW=46'
            ],
            [
                'code' => 'EAC1035',
                'name' => 'LEATHER WISHBONE DINING CHAIR',
                'image' => 'EAC1035.png',
                'material' => 'Teak Wood, Leather',
                'finishing' => 'NC',
                'color' => 'Natural, Brown',
                'dimension' => 'H=79xL=57xW=63'
            ],
            [
                'code' => 'EAC1236',
                'name' => 'MARBELA RATTAN LOUNGE CHAIR',
                'image' => 'EAC1236.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Black',
                'dimension' => 'H=83xL=50xW=60'
            ],
            [
                'code' => 'EAC1237',
                'name' => 'MODERN RATTAN LOUNGE CHAIR',
                'image' => 'EAC1237.png',
                'material' => 'Natural Rattan',
                'finishing' => 'Glaze',
                'color' => 'Grey',
                'dimension' => 'H=79xL=60xW=60'
            ],
            [
                'code' => 'EAC1238',
                'name' => 'QUIL RATTAN LOUNGE CHAIR',
                'image' => 'EAC1238.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural Brown',
                'dimension' => 'H=74xL=50xW=67'
            ],
            [
                'code' => 'EAC1239',
                'name' => 'MINIMALIST RATTAN LOUNGE CHAIR',
                'image' => 'EAC1239.png',
                'material' => 'Natural Rattan',
                'finishing' => 'Glaze',
                'color' => 'Brown, Blue, White',
                'dimension' => 'H=70xL=70xW=68'
            ],
            [
                'code' => 'EAC1240',
                'name' => 'EGG RATTAN LOUNGE CHAIR',
                'image' => 'EAC1240.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H=87xL=66xW=58'
            ],
            [
                'code' => 'EAC1242',
                'name' => 'QUENTIC RATTAN LOUNGE CHAIR',
                'image' => 'EAC1242.png',
                'material' => 'Metal Frame, Synthetic Rattan',
                'finishing' => '-',
                'color' => 'Black',
                'dimension' => 'H=88xL=60xW=70'
            ],
            [
                'code' => 'EAC1243',
                'name' => 'THRILLIC RATTAN LAZY CHAIR',
                'image' => 'EAC1243.png',
                'material' => 'Synthetic Rattan, Teak Frame',
                'finishing' => 'PU (for Frame)',
                'color' => 'Natural, Beige',
                'dimension' => 'H=75xL=80xW=67.5'
            ],
            [
                'code' => 'EAC1244',
                'name' => 'BIVING ROPE LAZY ARMCHAIR',
                'image' => 'EAC1244.png',
                'material' => 'Teak Frame,Rope',
                'finishing' => 'PU',
                'color' => 'Natural',
                'dimension' => 'H=67xL=70xW=74'
            ],
            [
                'code' => 'EAC1245',
                'name' => 'NET ROPE LAZY CHAIR',
                'image' => 'EAC1245.png',
                'material' => 'Teak Frame, Rope',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H=70xL=75xW=80'
            ],
            [
                'code' => 'EAC1246',
                'name' => 'BIVTIC LAZY CHAIR',
                'image' => 'EAC1246.png',
                'material' => 'Synthetic Rattan, Teak Frame',
                'finishing' => 'PU (for Frame)',
                'color' => 'Brown, Beige',
                'dimension' => 'H=68xL=67xW=61'
            ],
            [
                'code' => 'EAC1247',
                'name' => 'HEXICT LEATHER LAZY CHAIR',
                'image' => 'EAC1247.png',
                'material' => 'Teak, Leather',
                'finishing' => 'NC',
                'color' => 'Brown',
                'dimension' => 'H=68xL=82xW=64'
            ],
            [
                'code' => 'EAC1248',
                'name' => 'BASIC LEATHER STRIP BENCH',
                'image' => 'EAC1248.png',
                'material' => 'Teak Wood, Leather',
                'finishing' => 'Water-Based Coating',
                'color' => 'Natural, Black',
                'dimension' => 'H=45xL=40xW=120'
            ],
            [
                'code' => 'EAC1249',
                'name' => 'ARCHUVE LEATHER STRIP BENCH',
                'image' => 'EAC1249.png',
                'material' => 'Teak Wood, Leather',
                'finishing' => 'NC',
                'color' => 'Dark Brown, Black',
                'dimension' => 'H=46xL=56xW=120'
            ],
            [
                'code' => 'EAC1150',
                'name' => 'CROSS RATTAN BARSTOOL',
                'image' => 'EAC1150.png',
                'material' => 'Natural Rattan, Foam',
                'finishing' => 'NC',
                'color' => 'Natural, White (for Cushion)',
                'dimension' => 'H=74xL=33xW=33'
            ],
            [
                'code' => 'EAC1151',
                'name' => 'PEANUT RATTAN BARSTOOL',
                'image' => 'EAC1151.png',
                'material' => 'Teak Wood, Rattan Webbing',
                'finishing' => 'Water-Based Coating',
                'color' => 'Natural',
                'dimension' => 'H=110xL=51xW=55'
            ],
            [
                'code' => 'EAC1152',
                'name' => 'LEATHER STRIP BARSTOOL',
                'image' => 'EAC1152.png',
                'material' => 'Leather,Teak',
                'finishing' => 'blm ganti',
                'color' => 'Black, Brown',
                'dimension' => 'H=95xL=55xW=40'
            ],
            [
                'code' => 'EAC1153',
                'name' => 'PLIC RATTAN BARSTOOL',
                'image' => 'EAC1153.png',
                'material' => 'Teak, Synthetic Peel',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H=66xL=42xW=40'
            ],
            [
                'code' => 'EAC1154',
                'name' => 'SALLY BARSTOOL',
                'image' => 'EAC1154.png',
                'material' => 'Teak, Loom',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H=103xL=45xW=51'
            ],
            [
                'code' => 'EAC1155',
                'name' => 'RUSCY RATTAN BARSTOOL',
                'image' => 'EAC1155.png',
                'material' => 'Teak, Loom',
                'finishing' => 'NC',
                'color' => 'Black, Beige',
                'dimension' => 'H=65xL=40xW=40'
            ],
            [
                'code' => 'EAC1156',
                'name' => 'TRAFFIC RATTAN BARSTOOL',
                'image' => 'EAC1156.png',
                'material' => 'Teak, Synthetic Peel',
                'finishing' => 'NC',
                'color' => 'Brown',
                'dimension' => 'H=66xL=41xW=60'
            ],
            [
                'code' => 'EAC202',
                'name' => 'DIAMOND RATTAN COFFEE TABLE',
                'image' => 'EAC202.png',
                'material' => 'Metal, Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H=39xD=70'
            ],
            [
                'code' => 'EAC203',
                'name' => 'SPIDER RATTAN COFFEE TABLE',
                'image' => 'EAC203.png',
                'material' => 'Natural Rattan, Teak Wood',
                'finishing' => 'NC',
                'color' => 'Natural, Black',
                'dimension' => 'H=40xD=80'
            ],
            [
                'code' => 'EAC204',
                'name' => 'ROUND MINIMALIST RATTAN TABLE',
                'image' => 'EAC204.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H=52xD=45'
            ],
            [
                'code' => 'EAC205',
                'name' => 'TRISK MINIMALIST RATTAN TABLE',
                'image' => 'EAC205.png',
                'material' => 'Natural Rattan, Webbing',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H=51xD=40'
            ],
            [
                'code' => 'EAC206',
                'name' => 'ATLAS MINIMALIST RATTAN TABLE',
                'image' => 'EAC206.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H=73xD=70'
            ],
            [
                'code' => 'EAC207',
                'name' => 'MINIMALIST CUBE TABLE',
                'image' => 'EAC207.png',
                'material' => 'Synthetic Rattan, Teak Frame',
                'finishing' => 'PU (Frame)',
                'color' => 'Natural',
                'dimension' => 'H=62xL=46xW=46'
            ],
            [
                'code' => 'EAC208',
                'name' => 'MODERN RATTAN BEDSIDE TABLE',
                'image' => 'EAC208.png',
                'material' => 'Synthetic Rattan, Teak Frame',
                'finishing' => 'NC, PU (For Frame)',
                'color' => 'Natural',
                'dimension' => 'H=62xL=40xW=51'
            ],
            [
                'code' => 'EAC301',
                'name' => 'STURDY RATTAN STOOL',
                'image' => 'EAC301.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural Honey',
                'dimension' => 'H=45xL=50xW=40'
            ],
            [
                'code' => 'EAC301',
                'name' => 'MINIMALIST RATTAN STOOL',
                'image' => 'EAC301.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural Honey',
                'dimension' => 'H=47xL=44xW=42'
            ],
            [
                'code' => 'EAC303',
                'name' => 'BOHEMIAN HYACINTH POUFFE',
                'image' => 'EAC303.png',
                'material' => 'Teak & Water Hyacinths',
                'finishing' => 'PU (For Frame)',
                'color' => 'Green, Brown',
                'dimension' => 'H=50xL=32xW=32'
            ],
            [
                'code' => 'EAC304',
                'name' => 'BOHEMIAN SEAGRASS POUFFE',
                'image' => 'EAC304.png',
                'material' => 'Teak & Seagrass',
                'finishing' => 'PU (For Frame)',
                'color' => 'Natural',
                'dimension' => 'H=45xL=40xW=40'
            ],
            [
                'code' => 'EAC305',
                'name' => 'LEATHER STRIP STOOL',
                'image' => 'EAC305.png',
                'material' => 'Teak, Leather',
                'finishing' => 'PU (For Frame)',
                'color' => 'Brown',
                'dimension' => 'H=50xL=40xW=57'
            ],
            [
                'code' => 'EAC306',
                'name' => 'PENDANT RATTAN STOOL',
                'image' => 'EAC306.png',
                'material' => 'Teak, Synthetic Rattan',
                'finishing' => 'PU (For Frame)',
                'color' => 'Dark Brown, Beige',
                'dimension' => 'H=45xL=44xW=44'
            ],
            [
                'code' => 'EAC401',
                'name' => 'ROUND MINIMALIST RATTAN BASKET',
                'image' => 'EAC401.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural, Black',
                'dimension' => 'H=40xD=41'
            ],
            [
                'code' => 'EAC402',
                'name' => 'BOHEMIAN BANANA BASKET',
                'image' => 'EAC402.png',
                'material' => 'Banana Pseudo-Stem',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H=39xD=47'
            ],
            [
                'code' => 'EAC403',
                'name' => 'ROUND RATTAN BASKET',
                'image' => 'EAC403.png',
                'material' => 'Natural Rattan',
                'finishing' => 'Melamine',
                'color' => 'Natural',
                'dimension' => 'H=40xD=41'
            ],
            [
                'code' => 'EAC601',
                'name' => 'ATLAS RECTANGLE RATTAN SET',
                'image' => 'EAC601.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => [
                    'Chair Dimension' => 'H=91xL=54xW=62',
                    'Table Dimension' => 'H=73xD=70'
                ]
            ],
            [
                'code' => 'EAC302',
                'name' => 'QUILL MINIMALIST RATTAN SET',
                'image' => 'EAC302.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => [
                    'Chair Dimension' => 'H=74xL=67xW=70',
                    'Table Dimension' => 'H=52xD=45'
                ]
            ],
            [
                'code' => 'EAC603',
                'name' => 'BIVTIC ROPE LAZY SET',
                'image' => 'EAC603.png',
                'material' => 'Natural Rattan',
                'finishing' => 'PU',
                'color' => 'Grey',
                'dimension' => [
                    'Chair Dimension' => 'H=68xL=67xW=61',
                    'Table Dimension' => 'H=27xL=46xW=46'
                ]    
            ],
            [
                'code' => 'EAC604',
                'name' => 'MINIMALIST RATTAN LOUNGE CHAIR SET',
                'image' => 'EAC604.png',
                'material' => 'Natural Rattan',
                'finishing' => 'Glaze',
                'color' => 'Brown, Blue, White',
                'dimension' => [
                    'Two Seater Dimension' => 'H=70xL=70xW=68',
                    'Three Seater Dimension' => 'H=155xL=70xW=72',
                    'Table Dimension' => 'L=90xW=59xH=42'
                ]
            ]
        ];

        // Pagination
        $currentPage = request()->get('page', 1);
        $perPage = 12;
        $total = count($products);
        $totalPages = ceil($total / $perPage);

        $offset = ($currentPage - 1) * $perPage;
        $paginatedProducts = array_slice($products, $offset, $perPage);

        return view('collection', compact('paginatedProducts', 'currentPage', 'totalPages'));
    }
}
