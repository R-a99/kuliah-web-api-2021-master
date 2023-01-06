<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 02/06/2021
 * Time: 15:02
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public $dataCustomer = [
        [
            'id' => 1,
            'nama' => 'Abdi',
            'email' => 'abdi@email.com'
        ],
        [
            'id' => 2,
            'nama' => 'Budi',
            'email' => 'budi@email.com'
        ],
    ];

    public function index(Request $request){
        return response()->json($this->dataCustomer);
    }

    public function save(Request $request){
        $nama = $request->post('nama');
        $email = $request->post('email');
        try {
            $id = random_int(10, 1000);
        } catch (\Exception $e) {
        }

        $reply = [
            'nama' => $nama,
            'email' => $email,
            'id' => $id
        ];
        return response()->json($reply);
    }
}
