<?php
    // Cria o cURL
    $curl = curl_init();

    // Seta algumas opções
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://localhost'
    ]);

    // Envia a requisição e salva a resposta
    $response = curl_exec($curl);
    echo($response);

    // Fecha a requisição e limpa a memória
    curl_close($curl);
?>