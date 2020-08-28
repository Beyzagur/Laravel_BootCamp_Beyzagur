<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /* public function merhaba(){
         return "Merhaba burda controller çalıştı!";
     }*/

    public function merhaba(){
        /* $users=DB::table('users')->get(); //veritabanından kullanıcıları çeker
         //dd($users);
         return view('/merhaba')->with(['users'=>$users]); //merhaba isimli view dosyasına kullanıcılar yollandı*/
        //$users=User::all(); //model kullanılarak veri çekme
        //var.dump($users);
        //return view('Merhaba', compact('users'));//->with(['users'=>$users]); //merhaba isimli view dosyasınına kullanıcılar yollandı
        //compact kısmı with kısmını gerçekleştiriyor.Kısa yol


        //$products=DB::table('users')
        $products = Product::with(['user'])->get();
        /*   ->join('products','products.created_by','=','users.id')
             ->select() //burda hem kullanıcı adını hem de ürün adını almayı yap!!!
             ->get();
         */

        //dd($products);
        return view('Merhaba', compact('products'));
    }

    public function createView()
    {
        return view('users.create');
    }

    public function create()
    {
        return 'Kayıt başarıyla tamamlandı';
    }

    public function list(){
        $users = User::all();
        return view ('users.index',compact('users'));

    }

}
