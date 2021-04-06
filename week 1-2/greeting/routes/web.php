<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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


Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if (
        $request->username == 'admin'
        && $request->password == 'admin'
    ) {
        return view('welcome_admin');
    }

    return view('login_error');
});


Route::get('dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function (\Illuminate\Http\Request $request) {
    $arr['hello'] = 'Xin chào';
    $arr['bye']   = 'Tạm biệt';
    $keyword            = $request->keyword;
    foreach ($arr as $key => $value) {
        if ($keyword == $key) {
            $result = $value;
            return view('resultdictionary', compact(['result']));
        } else {
            $result = 'Từ điển không có từ này';
            return view('resultdictionary', compact(['result']));
        }
    }
});

Route::get('/{timezone?}', function ($timezone = null) {
    if (!empty($timezone)) {

        // Khởi tạo giá trị giờ theo múi giờ UTC
        $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));

        // Thay đổi về múi giờ được chọn
        $time->setTimezone(new DateTimeZone(str_replace('-', '/', $timezone)));

        // Hiển thị giờ theo định dạng mong muốn
        echo 'Múi giờ bạn chọn ' . $timezone . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');
    }
    return view('index');
});
