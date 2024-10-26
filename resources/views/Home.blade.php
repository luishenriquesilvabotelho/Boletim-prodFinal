<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        <h1>Página Inicial - HOME</h1>
        <hr>
        <nav>
            <table>
                <tr>
                    <td> <a href=" {{ url('/') }} "> <button> Home</button></a> </td>
                    <td> <a href=" {{ url('/disciplina/create') }} "> <button> Cadastrar Disciplinas</button></a></td>
                    <td> <a href=" {{ url('/disciplinas') }} "> <button> Listar Disciplinas</button></a></td>
                </tr>
            </table>
        </nav>        
    </div>

</body>
</html>