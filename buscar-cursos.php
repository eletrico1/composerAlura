<?php
    namespace Alura\BuscadorDeCursos;

    /*para o autoloader do composer conseguir localizar nossas proprias classes devemos
    Sempre usar o mesmo nome do arquivo com o da classe, sendo o do arquivo com o .php no final.
    Tambem precisa estar no mesmo namespace onde o autoload foi chamado */
    require 'vendor/autoload.php';
    use Alura\BuscadorDeCursos\Buscar;
    include_once 'src/Buscar.php';
    use Symfony\Component\DomCrawler\Crawler;
    use GuzzleHttp\Client;

    $client = new Client(['verify' => false,]);
    $crawler = new Crawler();

    $buscador = new Buscar($client, $crawler);
    $cursos = $buscador->Buscar('https://www.alura.com.br/cursos-online-programacao/php');
    echo "informações:";
foreach ($cursos as $curso) {
    echo 'info:';
    echo $curso."<br><br>";
}
