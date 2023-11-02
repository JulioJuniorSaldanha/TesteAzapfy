<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumindo API</title>
</head>
<body>
<table >
    <tr>
        <th>CNPJ do  Remetente</th>
        <th>Chave das notas</th>
        <th>status </th>
    </tr>
    @php
        $cnpj="";
        $valor="";
    @endphp
    
@foreach($apiArray as $api) 

    @if($api['cnpj_remete'] != $cnpj)
        @php
            $cnpj=$api['cnpj_remete'];
            $valor =(double)$api['valor'];
        @endphp 
    <tr>
            <td>{{$api['nome_remete']}}</td>
            <td>{{$api['chave']}}</td>
            <td>{{$api['status']}}</td>
  
    @else
        @php
        $valor =(double)$api['valor'] + $valor;
        @endphp
        <td></td>
        <td>{{$api['chave']}}</td>      
        <td>{{$api['status']}}</td>
        <td>{{$valor}}</td>


    @endif
    </tr>      
      
        @endforeach  

    </table>
    
</body>
</html>