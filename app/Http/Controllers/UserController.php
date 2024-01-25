<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Exception;

class UserController extends Controller {
    // Create
    public function create(Request $request) {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->status = true;
            $user->save();

            // Retornar resposta de sucesso
        } catch (Exception $e) {
            // Retornar erro
        }
    }

    // Read
    public function index() {
        try {
            $users = User::all();
            // Retornar usuários
        } catch (Exception $e) {
            // Retornar erro
        }
    }

    public function show($id) {
        try {
            $user = User::findOrFail($id);
            // Retornar usuário
        } catch (Exception $e) {
            // Retornar erro
        }
    }

    // Update
    public function update(Request $request, $id) {
        try {
            $user = User::findOrFail($id);
            $user->update($request->all());
            // Retornar resposta de sucesso
        } catch (Exception $e) {
            // Retornar erro
        }
    }

    // Delete
    public function destroy($id) {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            // Retornar resposta de sucesso
        } catch (Exception $e) {
            // Retornar erro
        }
    }
}
