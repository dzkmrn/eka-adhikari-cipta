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
                'dimension' => 'H-91xL-54xW-62'
            ],
            [
                'code' => 'EAC1021',
                'name' => 'CHAIRCROSS RATTAN DINING CHAIR',
                'image' => 'EAC1021.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-91xL-54xW-62'
            ],
            [
                'code' => 'EAC1022',
                'name' => 'KING RATTAN DINING CHAIR',
                'image' => 'EAC1022.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-91xL-54xW-62'
            ],
            [
                'code' => 'EAC1023',
                'name' => 'VIRGO RATTAN DINING CHAIR',
                'image' => 'EAC1023.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-91xL-54xW-62'
            ],
            [
                'code' => 'EAC1024',
                'name' => 'MINIMALIST RATTAN DINING CHAIR',
                'image' => 'EAC1024.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-91xL-54xW-62'
            ],
            [
                'code' => 'EAC1025',
                'name' => 'BOHEMIAN RATTAN DINING CHAIR',
                'image' => 'EAC1025.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'White',
                'dimension' => 'H-91xL-54xW-62'
            ],
            [
                'code' => 'EAC1026',
                'name' => 'WEBBING RATTAN DINING CHAIR',
                'image' => 'EAC1026.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-91xL-54xW-62'
            ],
            [
                'code' => 'EAC1027',
                'name' => 'PEANUT RATTAN DINING CHAIR',
                'image' => 'EAC1027.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-91xL-54xW-62'
            ],
            [
                'code' => 'EAC1028',
                'name' => 'MINIMALIST RATTAN OFFICES CHAIR',
                'image' => 'EAC1028.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Glaze Brown',
                'dimension' => 'H-91xL-54xW-62'
            ],
            [
                'code' => 'EAC1029',
                'name' => 'BISTRO RATTAN DINING CHAIR',
                'image' => 'EAC1029.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Blue/Black',
                'dimension' => 'H-91xL-54xW-62'
            ],
            [
                'code' => 'EAC1031',
                'name' => 'RUSH RATTAN DINING CHAIR',
                'image' => 'EAC1031.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-91xL-54xW-62'
            ],
            [
                'code' => 'EAC1032',
                'name' => 'TRELLIS RATTAN DINING CHAIR',
                'image' => 'EAC1032.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Honey',
                'dimension' => 'H-91xL-54xW-62'
            ],
            [
                'code' => 'EAC1033',
                'name' => 'WISHBONE ROPE DINING CHAIR',
                'image' => 'EAC1033.png',
                'material' => 'Rope, Metal Frame',
                'finishing' => 'Powder Coating',
                'color' => 'Grey, Black (for Frame)',
                'dimension' => 'H-78xL-52xW-55'
            ],
            [
                'code' => 'EAC1034',
                'name' => 'SPIRAL HYACINTH DINING CHAIR',
                'image' => 'EAC1034.png',
                'material' => 'Water Hyacinth, Mahonia Frame',
                'finishing' => 'PU (for Frame), NC',
                'color' => 'Natural',
                'dimension' => 'H-99xL-48xW-46'
            ],
            [
                'code' => 'EAC1035',
                'name' => 'LEATHER WISHBONE DINING CHAIR',
                'image' => 'EAC1035.png',
                'material' => 'Teak Wood, Leather',
                'finishing' => 'NC',
                'color' => 'Natural, Brown',
                'dimension' => 'H-79xL-57xW-53'
            ],
            [
                'code' => 'EAC1236',
                'name' => 'MARBELA RATTAN LOUNGE CHAIR',
                'image' => 'EAC1236.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Black',
                'dimension' => 'H-63xL-50xW-66'
            ],
            [
                'code' => 'EAC1237',
                'name' => 'MODERN RATTAN LOUNGE CHAIR',
                'image' => 'EAC1237.png',
                'material' => 'Natural Rattan',
                'finishing' => 'Glaze',
                'color' => 'Grey',
                'dimension' => 'H-79xL-60xW-60'
            ],
            [
                'code' => 'EAC1238',
                'name' => 'QUIL RATTAN LOUNGE CHAIR',
                'image' => 'EAC1238.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural Brown',
                'dimension' => 'H-74xL-50xW-67'
            ],
            [
                'code' => 'EAC1239',
                'name' => 'MINIMALIST RATTAN LOUNGE CHAIR',
                'image' => 'EAC1239.png',
                'material' => 'Natural Rattan',
                'finishing' => 'Glaze',
                'color' => 'Brown, Blue, White',
                'dimension' => 'H-70xL-70xW-68'
            ],
            [
                'code' => 'EAC1240',
                'name' => 'EGG RATTAN LOUNGE CHAIR',
                'image' => 'EAC1240.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-87xL-66xW-58'
            ],
            [
                'code' => 'EAC1242',
                'name' => 'QUENTIC RATTAN LOUNGE CHAIR',
                'image' => 'EAC1242.png',
                'material' => 'Synthetic Rattan, Metal Frame',
                'finishing' => 'NC',
                'color' => 'Black',
                'dimension' => 'H-88xL-60xW-70'
            ],
            [
                'code' => 'EAC1243',
                'name' => 'THRILLIC RATTAN LAZY CHAIR',
                'image' => 'EAC1243.png',
                'material' => 'Natural Rattan, Teak Frame',
                'finishing' => 'PU (for Frame)',
                'color' => 'Natural Beige',
                'dimension' => 'H-75xL-80xW-57.5'
            ],
            [
                'code' => 'EAC1244',
                'name' => 'BIVING ROPE LAZY ARMCHAIR',
                'image' => 'EAC1244.png',
                'material' => 'Rope, Metal Frame',
                'finishing' => 'PU',
                'color' => 'Natural',
                'dimension' => 'H-67xL-70xW-74'
            ],
            [
                'code' => 'EAC1245',
                'name' => 'NET ROPE LAZY CHAIR',
                'image' => 'EAC1245.png',
                'material' => 'Teak Frame, Rope',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-70xL-75xW-80'
            ],
            [
                'code' => 'EAC1246',
                'name' => 'RIVTIC LAZY CHAIR',
                'image' => 'EAC1246.png',
                'material' => 'Synthetic Rattan, Teak Frame',
                'finishing' => 'Polite Framefit',
                'color' => 'Brown, Beige',
                'dimension' => 'H-70xL-75xW-80'
            ],
            [
                'code' => 'EAC1247',
                'name' => 'HEXICT LEATHER LAZY CHAIR',
                'image' => 'EAC1247.png',
                'material' => 'Teak, Leather',
                'finishing' => 'NC',
                'color' => 'Brown',
                'dimension' => 'H-62xL-82xW-94'
            ],
            [
                'code' => 'EAC1248',
                'name' => 'BASIC LEATHER STRIP BENCH',
                'image' => 'EAC1248.png',
                'material' => 'Real Wood, Leather',
                'finishing' => 'Water-Based Coating',
                'color' => 'Natural, Black',
                'dimension' => 'H-50xL-140xW-50'
            ],
            [
                'code' => 'EAC1249',
                'name' => 'ARCHIVE LEATHER STRIP BENCH',
                'image' => 'EAC1249.png',
                'material' => 'Real Wood, Leather',
                'finishing' => 'NC',
                'color' => 'Dark Brown, Black',
                'dimension' => 'H-46xL-140xW-50'
            ],
            [
                'code' => 'EAC1150',
                'name' => 'CROSS RATTAN BARSTOOL',
                'image' => 'EAC1150.png',
                'material' => 'Natural Rattan, Foam',
                'finishing' => 'NC',
                'color' => 'Natural, White for Cushion',
                'dimension' => 'H-74xL-53xW-53'
            ],
            [
                'code' => 'EAC1151',
                'name' => 'PEANUT RATTAN BARSTOOL',
                'image' => 'EAC1151.png',
                'material' => 'Teak Wood, Rattan Webbing',
                'finishing' => 'Water-Based Coating',
                'color' => 'Natural',
                'dimension' => 'H-70xL-57xW-55'
            ],
            [
                'code' => 'EAC1152',
                'name' => 'LEATHER STRIP BARSTOOL',
                'image' => 'EAC1152.png',
                'material' => 'Leather, Teak',
                'finishing' => 'Bm garit',
                'color' => 'Black, Brown',
                'dimension' => 'H-59xL-55xW-40'
            ],
            [
                'code' => 'EAC1153',
                'name' => 'PLIO RATTAN BARSTOOL',
                'image' => 'EAC1153.png',
                'material' => 'Synthetic Rattan, Real',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-68xL-42xW-40'
            ],
            [
                'code' => 'EAC1154',
                'name' => 'SLALY RATTAN BARSTOOL',
                'image' => 'EAC1154.png',
                'material' => 'Teak, Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-93xL-45xW-57'
            ],
            [
                'code' => 'EAC1155',
                'name' => 'RUSCY RATTAN BARSTOOL',
                'image' => 'EAC1155.png',
                'material' => 'Teak, Iron',
                'finishing' => 'NC',
                'color' => 'Black, Beige',
                'dimension' => 'H-66xL-40xW-40'
            ],
            [
                'code' => 'EAC1156',
                'name' => 'TRAFFIC RATTAN BARSTOOL',
                'image' => 'EAC1156.png',
                'material' => 'Teak, Synthetic Rattan',
                'finishing' => 'NC',
                'color' => 'Brown',
                'dimension' => 'H-66xL-41xW-40'
            ],
            [
                'code' => 'EAC202',
                'name' => 'DIAMOND RATTAN COFFEE TABLE',
                'image' => 'EAC202.png',
                'material' => 'Synthetic Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-59xD-70'
            ],
            [
                'code' => 'EAC203',
                'name' => 'SPIDER RATTAN COFFEE TABLE',
                'image' => 'EAC203.png',
                'material' => 'Natural Rattan, Teak Wood',
                'finishing' => 'NC',
                'color' => 'Natural, Black',
                'dimension' => 'H-40xD-80'
            ],
            [
                'code' => 'EAC204',
                'name' => 'ROUND MINIMALIST RATTAN TABLE',
                'image' => 'EAC204.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-52xD-45'
            ],
            [
                'code' => 'EAC205',
                'name' => 'TRISK MINIMALIST RATTAN TABLE',
                'image' => 'EAC205.png',
                'material' => 'Natural Rattan Webbing',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-50xD-40'
            ],
            [
                'code' => 'EAC206',
                'name' => 'ATLAS MINIMALIST RATTAN TABLE',
                'image' => 'EAC206.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-73xD-70'
            ],
            [
                'code' => 'EAC207',
                'name' => 'MINIMALIST CUBE TABLE',
                'image' => 'EAC207.png',
                'material' => 'Synthetic Rattan, Teak Frame',
                'finishing' => 'Polite Frame',
                'color' => 'Natural',
                'dimension' => 'H-45xL-46xW-46'
            ],
            [
                'code' => 'EAC208',
                'name' => 'MODERN RATTAN BEDSIDE TABLE',
                'image' => 'EAC208.png',
                'material' => 'Synthetic Rattan, Teak Frame',
                'finishing' => 'Polite Frame',
                'color' => 'Natural',
                'dimension' => 'H-60xL-40xW-51'
            ],
            [
                'code' => 'EAC301',
                'name' => 'STURDY RATTAN STOOL',
                'image' => 'EAC301.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural Honey',
                'dimension' => 'H-45xL-50xW-40'
            ],
            [
                'code' => 'EAC301',
                'name' => 'MINIMALIST RATTAN STOOL',
                'image' => 'EAC301.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural Honey',
                'dimension' => 'H-47xL-44xW-42'
            ],
            [
                'code' => 'EAC303',
                'name' => 'BOHEMIAN HYACINTH POUFFE',
                'image' => 'EAC303.png',
                'material' => 'Synthetic Water Hyacinth',
                'finishing' => 'Polite Frame',
                'color' => 'Natural',
                'dimension' => 'H-50xL-32xW-32'
            ],
            [
                'code' => 'EAC304',
                'name' => 'BOHEMIAN SEAGRASS POUFFE',
                'image' => 'EAC304.png',
                'material' => 'Teak & Seagrass',
                'finishing' => 'Polite Frame',
                'color' => 'Natural',
                'dimension' => 'H-46xL-40xW-40'
            ],
            [
                'code' => 'EAC305',
                'name' => 'LEATHER STRIP STOOL',
                'image' => 'EAC305.png',
                'material' => 'Teak, Leather',
                'finishing' => 'Polite Frame',
                'color' => 'Brown',
                'dimension' => 'H-50xL-40xW-57'
            ],
            [
                'code' => 'EAC306',
                'name' => 'PENDANT RATTAN STOOL',
                'image' => 'EAC306.png',
                'material' => 'Synthetic Rattan',
                'finishing' => 'Polite Frame',
                'color' => 'Dark Brown, Beige',
                'dimension' => 'H-46xL-44xW-44'
            ],
            [
                'code' => 'EAC401',
                'name' => 'OVAL MINIMALIST RATTAN BASKET',
                'image' => 'EAC401.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural, Black',
                'dimension' => 'H-40xD-41'
            ],
            [
                'code' => 'EAC402',
                'name' => 'BOHEMIAN BANANA BASKET',
                'image' => 'EAC402.png',
                'material' => 'Banana Pseudo-Stem',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'H-37xD-47'
            ],
            [
                'code' => 'EAC403',
                'name' => 'ROUND RATTAN BASKET',
                'image' => 'EAC403.png',
                'material' => 'Natural Rattan',
                'finishing' => 'Melamine',
                'color' => 'Natural',
                'dimension' => 'H-40xD-41'
            ],
            [
                'code' => 'EAC601',
                'name' => 'ATLAS RECTANGLE RATTAN SET',
                'image' => 'EAC601.png',
                'material' => 'Natural',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'Chair H-79xL-64xW-62, Table H-73xD-70'
            ],
            [
                'code' => 'EAC302',
                'name' => 'QUILL MINIMALIST RATTAN SET',
                'image' => 'EAC302.png',
                'material' => 'Natural Rattan',
                'finishing' => 'NC',
                'color' => 'Natural',
                'dimension' => 'Chair H-74xL-67xW-70, Table H-52xD-45'
            ],
            [
                'code' => 'EAC603',
                'name' => 'BIVTIC ROPE LAZY SET',
                'image' => 'EAC603.png',
                'material' => 'Natural Rattan',
                'finishing' => 'PU',
                'color' => 'Grey',
                'dimension' => 'Chair H-68xL-67xW-61, Table H-27xL-46xW-46'
            ],
            [
                'code' => 'EAC604',
                'name' => 'MINIMALIST RATTAN LOUNGE CHAIR SET',
                'image' => 'EAC604.png',
                'material' => 'Natural Rattan',
                'finishing' => 'Glaze',
                'color' => 'Brown, Blue, White',
                'dimension' => 'Two Seater H-70xL-70x W-68, Three Seater H-55xL-70xW-72, Table L-90xW-57xH-42'
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
