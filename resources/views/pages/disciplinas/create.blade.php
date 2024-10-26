<x-layout>

    @section('title', 'Atualização de Notas')
    <x-slot name="title">
        @yield('title')
    </x-slot>

    {{-- Aqui inicia o meu (MAIN) --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4"> @yield('title') </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href=" {{ ('/') }} ">Início</a></li>
            <li class="breadcrumb-item active"> @yield('title')</li>
        </ol>
        <div class="card mb-4">

            {{-- Início Content --}}
            <div class="card-body">

                    {{-- Minha Tabela Dinâmica começa aqui  --}}
                    @if(Session::has('message'))
                        <div role="alert">

                            <h4 style="color: #045c01"><strong>Parabéns!</strong> {!! Session::get('message') !!}</h4>

                        </div>
                    @endif

                    <hr>

                <div class="col-md-12">

                    <form action=" {{ route('disciplina.store') }} " method="POST" class="row g-3" enctype="multipart/form-data" >
                            @csrf

                            <div class="col-md-6">

                                <label for="inputState" class="form-label">Aluno:</label>
                                <select name="aluno" id="aluno" class="form-select">
                                    <option selected>Escolha uma opção...</option>
                                    <option value="Ana Beatriz Martins Silva">Ana Beatriz Martins Silva</option>
                                    <option value="Camila de Souza Pereira">Camila de Souza Pereira</option>
                                    <option value="João Paulo Mendes">João Paulo Mendes</option>
                                    <option value="Lucas Ribeiro Lima">Lucas Ribeiro Lima</option>
                                    <option value="Marina Santos Ferreira">Marina Santos Ferreira</option>
                                    <option value="Rafael Augusto Almeida">Rafael Augusto Almeida</option>
                                </select>

                            </div>
                  
                            <div class="col-md-6">

                                <label for="inputState" class="form-label">Disciplina:</label>
                                <select name="disciplina" id="disciplina" class="form-select">
                                    <option selected>Escolha uma opção...</option>
                                    <option value="Arte">Arte</option>
                                    <option value="Geografia">Geografia</option>
                                    <option value="História">História</option>
                                    <option value="Matemática">Matemática</option>
                                    <option value="Português">Português</option>
                                    <option value="Ciências">Ciências</option>
                                </select>

                            </div>
                            <div class="col-12">

                                <label for="nota_disciplina"  class="form-label">NOTA DISCIPLINA:</label>
                                <input type="text" class="form-control" name="nota_disciplina" placeholder="" id="nota_disciplina" required >

                            </div>
                            <div class="col-md-6">

                                <label for="falta_disciplina"  class="form-label">FALTA DISCIPLINA:</label>
                                <input type="text" class="form-control" name="falta_disciplina" placeholder="" id="falta_disciplina" required >
                            </div>
                            
                            {{-- <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select> --}}
                            
                            <div class="col-12">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">CADASTRAR</button>
                                  </div>

                            </div>
                      </form>
                </div>


            </div>
            {{--// End Content --}}

        </div>

    </div>

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src=" {{ asset('js/scripts.js') }} "></script>

@endpush


</x-layout>
