<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Disciplina</title>
</head>
<body>
    <div>
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
    <h1>Cadastrar | Disciplina</h1>

            <form action=" {{ route('disciplinas.update', $disciplina->id) }} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
 
                <label for="nome_disciplina">NOME DISCIPLINA:</label>
                <input type="text" name="nome_disciplina" value=" {{ $disciplina->nome_disciplina }} " id="nome_disciplina" >

                <label for="nota_disciplina">NOTA DISCIPLINA:</label>
                <input type="text" name="nota_disciplina" value=" {{ $disciplina->nota_disciplina }} " id="nota_disciplina" >

                <label for="falta_disciplina">FALTA DISCIPLINA:</label>
                <input type="text" name="falta_disciplina" value=" {{ $disciplina->falta_disciplina }} " id="falta_disciplina" >
                <br><br>
                <input type="submit" value="EDITAR" class="">
            </form>
    <hr>
</body>
</html>