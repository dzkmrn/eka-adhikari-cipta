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