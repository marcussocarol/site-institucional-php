<?php

 // SERVIÇO DE VALIDAÇÃO COM IA (GOOGLE GEMINI)
 // Responsável pela comunicação com a API externa.
 
function validarEmailComIA($email) {

    // PASSO 1: CONFIGURAÇÃO (CHAVE)

    $apiKey = 'AIzaSyD4yRvQAnnAsGtLKxalC807CKjOrXxMLWE'; 

    // Fail-open: Se não validar a chave, aprova para não travar o site em apresentação
    if (empty($apiKey)) {
        return true; 
    }

    // URL da API
    $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=' . urlencode($apiKey);

    // PASSO 2: O PROMPT (A INSTRUÇÃO)
    $prompt = "Analise o e-mail: '{$email}'. " .
              "Responda APENAS 'VALIDO' ou 'INVALIDO'. " .
              "Regras para INVALIDO: " .
              "1. Provedores temporários (yopmail, tempmail, etc). " .
              "2. Sequências aleatórias (ex: asdfg@, 12345@). " .
              "3. Palavras ofensivas no domínio (ex: @bosta.com). " .
              "Regras para VALIDO: Gmail, Outlook, Yahoo, Hotmail, corporativos.";

    // PASSO 3: A REQUISIÇÃO (cURL)
    $requestBody = [
        'contents' => [[ 'parts' => [[ 'text' => $prompt ]] ]]
    ];

    // Inicializa o cURL (biblioteca do PHP para fazer requisições HTTP)
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($requestBody));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    $response = curl_exec($curl); // Executa a chamada real para a nuvem do Google
    
    if ($response === false) { curl_close($curl); return true; } // Erro de conexão = Aprova
    
    curl_close($curl);

    // PASSO 4: INTERPRETAR A RESPOSTA
    $data = json_decode($response, true);
    $resultado = trim(strtoupper($data['candidates'][0]['content']['parts'][0]['text'] ?? ''));

    // Se a IA disse INVALIDO, retorna false (bloqueia o cadastro)
    if (str_contains($resultado, 'INVALIDO')) {
        return false;
    }

    // Aprova o cadastro (padrão)
    return true; 
}
?>