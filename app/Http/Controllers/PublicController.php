<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller{
public $Piatticucina = [
    [
        'id' => 1,
        'title' => 'Tiramisu',
        'description' => 'Uno dei migliori dolci.',
        'img' => 'http://picsum.photos/200'
    ],
    [
        'id' => 2,
        'title' => 'Carbonara',
        'description' => 'un buon primo.',
        'img' => 'http://picsum.photos/201'
    ],
    [
        'id' => 3,
        'title' => 'frittata',
        'description' => 'uno dei tanti primi.',
        'img' => 'http://picsum.photos/202'
    ],
    [
        'id' => 4,
        'title' => 'kinder briosche',
        'description' => 'un dolcetto a fine pasto.',
        'img' => 'http://picsum.photos/203'
    ],
];

public function homepage() {
    //Vai nel databade e prendi i dati dalla tabella X
    
        return view('welcome', ['Piatticucina'=>$this->Piatticucina]);
        }
    
        public function service () {
            return view('service');
        }
    
        public function contact() {
            return view('contact');
        }
    
        public function detail($id){
            
            foreach ($this->Piatticucina as $Piatticucina) {
                if ($Piatticucina['id'] == $id) {
                    return view('detail', ['Piatticucina'=>$Piatticucina]);
                }
            }
            return redirect(route('homepage'));
        }
    }

$newConctact = new Contact();
$newConctact->mail = $req->input ('mail');
$newConctact ->userName = $req->input ('userName');
$newConctact ->message = $req->input ('message');
$newConctact->save();