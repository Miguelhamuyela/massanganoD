<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('_admin.users.list.index', compact('users'));
    }
    public function create()
    {
        return view('_admin.users.create.index');
    }
    /* 
    {
        // Validação dos campos
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'biography' => 'nullable|string',
            'foto' => 'required|image|mimes:jpg,jpeg,png',
        ], [
            'name.required' => 'O nome do autor é obrigatório.',
            'foto.required' => 'A foto do autor é obrigatória.',
            'foto.image' => 'A foto deve ser uma imagem válida.',
            'foto.mimes' => 'A foto deve ser nos formatos: jpg, jpeg, png.',
        ]);

        // Upload da imagem
        $fotoName = null;
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $foto = $request->file('foto');
            $extension = $foto->extension();
            $fotoName = md5($foto->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $foto->move(public_path('img/authors'), $fotoName);
            $validated['foto'] = $fotoName;
        }

        // Criação do autor
        $author = Author::create($validated);

        return redirect()->route('admin.author.index')->with('success', 'Autor criado com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar Autor!');
    } */
    public function store(Request $request)
    {
        // Validação dos dados
        $dados = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'access_level' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png'],
        ], [
            'name.required' => 'Nome obrigatório.',
            'email.required' => 'E-mail obrigatório.',
            'email.unique' => 'E-mail já existente.',
            'password.required' => 'Password obrigatória.',
            'access_level.required' => 'Nível de acesso obrigatório.',
            'image.image' => 'Precisa ser uma imagem válida.',
            'image.mimes' => 'Imagem deve ser nos formatos: jpg, jpeg, png.',
        ]);

        // Hash da senha
        $dados['password'] = bcrypt($dados['password']);

        // Processando a imagem
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/users'), $imageName);
            $dados['image'] = $imageName;
        }

        // Criando um novo user
        User::create($dados);

        return redirect()
            ->route('admin.user.index')
            ->with('success', 'Utilizador cadastrado com sucesso!');
    }

    public function show(User $user)
    {
        //
    }
    public function edit(User $user)
    {
        //
    }
    public function update(Request $request, User $user)
    {
        //
    }
    public function destroy(User $user)
    {
        //
    }
}
