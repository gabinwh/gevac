<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImportacaoController extends Controller
{
    public function getData()
    {
//        Http::dd()->withBasicAuth('imunizacao_public', 'qlto5t&7r_@+#Tlstigi')
//            ->get('https://imunizacao-es.saude.gov.br/desc-imunizacao/_search');

        $url = 'https://imunizacao-es.saude.gov.br/desc-imunizacao/_search';
        $response = Http::withBasicAuth('imunizacao_public', 'qlto5t&7r_@+#Tlstigi')->get($url);

        if ($response->successful()) {
            $data = $response->json();

            $resultados_filtrados = array_filter($data['hits']['hits'], function($documento) {
                return $documento['_source']['estabelecimento_uf'] === 'SE';
            });
            return $resultados_filtrados;
        } else {
            return response()->json(['error' => 'Erro ao acessar os dados.']);
        }
    }
}
