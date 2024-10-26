<?php 

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $disciplinas = Disciplina::orderBy('created_at', 'desc')->get();
        return view('pages.disciplinas.index')
                ->with('disciplinas', $disciplinas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retorna apenas a minha view
        return view('pages.disciplinas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Aqui é que a mágica acontece!!😎😎

        $request->validate([
            'aluno'                    => 'required',
            'nome_disciplina'          => 'required',
            'nota_disciplina'          => 'required|numeric',
            'falta_disciplina'         => 'required|numeric',
        ]);
        // Conecta com a Model e leva as informações para o Banco de Dados
        Disciplina::create($request->all());
        // Por fim, retorna e ou redireciona para a rota (GET) que eu quiser!!
        return redirect()->route('disciplinas.index')->with('message', 'Disciplina Criada com Sucesso ✅');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $disciplina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $disciplina = Disciplina::find($id);
        return view('pages.disciplinas.edit', compact('disciplina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Aqui os dados são inseridos no banco, após serem editados
        $disciplina = Disciplina::find($id);
        $request->validate([
            'nome_disciplina'          => 'required',
            'nota_disciplina'          => 'required|numeric',
            'falta_disciplina'         => 'required|numeric',
        ]);
        // Conecta com a Model e leva as informações para o Banco de Dados
        $disciplina->update($request->all());
        // Por fim, retorna e ou redireciona para a rota (GET) que eu quiser!!
        return redirect()->route('disciplinas.index')->with('message', 'Disciplina Editada com Sucesso ✅');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $disciplina = Disciplina::find($id);
        $disciplina->delete();
        return redirect()->route('disciplinas.index')->with('message', 'Disciplina Deletada da base de dados! ❌');
    }
}
