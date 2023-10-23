<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Client;
use Cake\Http\Cookie\Cookie;
use Cake\Http\Cookie\CookieCollection;
use Cake\I18n\Time;


class HomeController extends AppController
{
    public $cookies;
    public function index()
    {

        $currentDateTime = Time::now();
        $expiresAt = $currentDateTime->addHours(12);

        $cookie = (new Cookie('displayModal'))
            ->withValue(false)
            ->withExpiry($expiresAt)
            ->withPath('/');

        $cookies = new CookieCollection([$cookie]);



        function request_api(){
            $token = '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';

            $api_req = 'https://api.github.com/repos/WilliamRodri/biblioteca_do_programador_pdfs/contents/';

            $options = [
                'headers' => [
                'Authorization' => 'token ' . $token
                ]
            ];

            $http = new Client();
            $response = $http->get($api_req, [], $options);
            return $response;
        }

        $response = request_api();
        $categories = array(
            'Níveis' => array('Iniciante','Intermediário','Profissional'),
            'Sistemas Operacionais' => array('Linux','Ubuntu','Windows','MacOS'),
            'Frameworks' => array('NodeJs'),
            'Linguagens' => array('Python','Java','C','C#','C++','PHP','SQL'),
            'Banco de Dados' => array('MySQL','Estrutura de Dados','Arquiterura','BigData'),
            'Campo Profissional' => array('Web','Sistemas','DevOps','UXDesign','Banco de Dados'),
            'Estudos Gerais' => array('Programação','Cloud','API','JDBC','IO','Threads','JavaFX','Bibliotecas','iOS'),
            'Estudos de Desenvolvedor' => array('Compilador','FrontEnd','BackEnd','POO','Algoritmos','Codigo Limpo')
        );

        if ($response->getStatusCode() == 200) {
            $json = $response->getJson();

            $unwantedRepoName = ".gitattributes";
            $contents = array_filter($json, function ($repo) use ($unwantedRepoName) {
                return $repo['name'] !== $unwantedRepoName;
            });            
        } else {
            $this->Flash->error('Erro na requisição: ' . $response->getStatusCode());
        }
        $this->set(compact('contents', 'categories', 'cookie', 'cookies'));
        $this->render('index', 'default');
    }
}
