<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminControllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, "index"]);

Route::get('/admin', [AdminController::class, "dashboard"]);

Route::get('/login', [AuthController::class, "login"]);



Route::get('/admin/dashboard/{gender}', function(
    request $request,
    $gender,
) {
    $students = [
        [
            'name' => 'tập cận bình',
            'height' => '174cm',
            'weight' => '57kg', 
            'age' => 23,
            'gender' => 1,
            'avatar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Xi_Jinping_2019_%2849060546152%29_2.jpg/330px-Xi_Jinping_2019_%2849060546152%29_2.jpg',

        ],
        [
            'name' => 'putin',
            'height' => '169cm',
            'weight' => '60kg', 
            'age' => 23,
            'gender' => 2,
            'avatar' => 'https://ichef.bbci.co.uk/news/976/cpsprodpb/139E0/production/_123425308_c653bda5-8652-450b-84a1-482dbc637017.jpg',
        ]
        ];
        $res = $request->all();
        return view('admin.dashboard', compact('gender','students', 'res'));
});



