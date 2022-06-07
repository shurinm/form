<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Form;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Вы успешно вошли в админ панель!');
        }
  
        return redirect("login")->withSuccess('Не верные имя или пароль!');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            $message = Form::orderBy('created_at','desc')->get();
            return view('auth.dashboard', compact('message'));
        }
  
        return redirect("login")->withSuccess('Нет доступа!');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('welcome');
    }
        /**
     * Write code on Method
     *
     * @return response()
     */
    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        $form->delete();
        return redirect('/dashboard')->with('Успех', 'Запись удалена!');
    }
}