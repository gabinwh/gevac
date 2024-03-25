<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dose;
use App\Models\Vacina;
use App\Models\Cidadao;
use App\Models\Endereco;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Estabelecimento;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ImportacaoController extends Controller
{
    public function importacao(): View
    {
        $isAdmin = Auth::user()->is_admin;
        $totalCidadao = Cidadao::all()->count();
        $totalDose = Dose::all()->count();
        $totalEstabelecimento = Estabelecimento::all()->count();
        $totalVacina = Vacina::all()->count();
        return view('importacao', compact('isAdmin', 'totalCidadao', 'totalDose', 'totalEstabelecimento', 'totalVacina'));
    }


    public function getData()
    {
        //        Http::dd()->withBasicAuth('imunizacao_public', 'qlto5t&7r_@+#Tlstigi')
        //            ->get('https://imunizacao-es.saude.gov.br/desc-imunizacao/_search');

        $url = 'https://imunizacao-es.saude.gov.br/desc-imunizacao/_search?q=estabelecimento_uf:SE'; //Utilizar o elastic search para fazer as query direto na URL
        $response = Http::withOptions(['verify' => false])
            ->withBasicAuth('imunizacao_public', 'qlto5t&7r_@+#Tlstigi')
            ->get($url);

        if ($response->successful()) {
            $data = $response->json();

            //            $resultados_filtrados = array_filter($data['hits']['hits'], function($documento) {
            //                return $documento['_source']['estabelecimento_uf'] === 'PE';
            //            });

            foreach ($data['hits']['hits'] as $dose) {

                $endereco = Endereco::firstOrCreate([
                    'uf' => $dose['_source']['paciente_endereco_uf'],
                    'codigo_pais' => $dose['_source']['paciente_endereco_coPais'],
                    'codigo_ibge_municipio' => $dose['_source']['paciente_endereco_coIbgeMunicipio'],
                    'municipio_nome' => $dose['_source']['paciente_endereco_nmMunicipio'],
                    'pais_nome' => $dose['_source']['paciente_endereco_nmPais'],
                    'cep' => $dose['_source']['paciente_endereco_cep']
                ]);

                $cidadao = Cidadao::firstOrCreate([
                    'data_nascimento' => $dose['_source']['paciente_dataNascimento'],
                    'codigo_raca_cor' => $dose['_source']['paciente_racaCor_codigo'],
                    'codigo_nacionalidade' => $dose['_source']['paciente_nacionalidade_enumNacionalidade'],
                    'sexo_biologico' => $dose['_source']['paciente_enumSexoBiologico'],
                    'endereco_id' => $endereco->id
                ]);

                $estabelecimento = Estabelecimento::firstOrCreate([
                    'cnes_valor' => $dose['_source']['estabelecimento_valor'],
                    'razao_social' => $dose['_source']['estabelecimento_razaoSocial'],
                    'nome_fantasia' => $dose['_source']['estalecimento_noFantasia'],
                    'codigo_municipio' => $dose['_source']['estabelecimento_municipio_codigo'],
                    'municipio' => $dose['_source']['estabelecimento_municipio_nome'],
                    'uf' => $dose['_source']['estabelecimento_uf']
                ]);

                $vacina = Vacina::firstOrCreate([
                    'nome' => $dose['_source']['vacina_nome'],
                    'codigo' => $dose['_source']['vacina_codigo'],
                    'fabricante' => $dose['_source']['vacina_fabricante_nome'],
                    'cnpj_fabricante' => $dose['_source']['vacina_fabricante_referencia'],
                ]);

                $dose = Dose::create([
                    'cidadao_id' => $cidadao->id,
                    'vacina_id' => $vacina->id,
                    'estabelecimento_id' => $estabelecimento->id,
                    'grupo_atendimento' => $dose['_source']['vacina_grupoAtendimento_nome'],
                    'grupo_atendimento_codigo' => $dose['_source']['vacina_grupoAtendimento_nome'],
                    'categoria' => $dose['_source']['vacina_categoria_nome'],
                    'categoria_codigo' => $dose['_source']['vacina_categoria_codigo'],
                    'lote' => $dose['_source']['vacina_lote'],
                    'data_aplicacao' => Carbon::create($dose['_source']['vacina_dataAplicacao']),
                    'descricao_dose' => $dose['_source']['vacina_descricao_dose'],
                ]);
            }


            session()->flash('success', 'Dados importados com sucesso.');
        } else {
            session()->flash('error', 'Erro ao acessar os dados.');
        }

        return redirect()->route('importacao');
    }

}
