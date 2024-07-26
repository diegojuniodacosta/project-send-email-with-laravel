<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <title>Transporte Agendado</title>
</head>
<body>
<h1>Transporte Agendado</h1>
<p>Olá, Vivi!</p>
<p>Seu transporte foi agendado com sucesso!</p>
<p><strong>Data:</strong> {{ $transport->date }}</p>
<p><strong>Hora:</strong> {{ $transport->hour }}</p>
<p><strong>Origem:</strong> {{ $transport->origen }}</p>
<p><strong>Destino:</strong> {{ $transport->destiny }}</p>
<p><strong>Descrição:</strong> {{ $transport->description }}</p>
<p>Obrigado por usar nosso serviço!</p>
</body>
</html>
