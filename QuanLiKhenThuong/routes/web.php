<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index');


Route::post('admin/danhMucSanPhams/export',['as'=>'admin.danhMucSanPhams.export', 'uses'=>'DanhMucSanPhamController@exportToFile']);


Route::post('admin/sanPhams/export',['as'=>'admin.sanPhams.export', 'uses'=>'SanPhamController@exportToFile']);


Route::post('admin/lienHeKhaches/export',['as'=>'admin.lienHeKhaches.export', 'uses'=>'LienHeKhachController@exportToFile']);


Route::get('admin/users', ['as'=> 'admin.users.index', 'uses' => 'UserController@index']);
Route::post('admin/users', ['as'=> 'admin.users.store', 'uses' => 'UserController@store']);
Route::get('admin/users/create', ['as'=> 'admin.users.create', 'uses' => 'UserController@create']);
Route::put('admin/users/{users}', ['as'=> 'admin.users.update', 'uses' => 'UserController@update']);
Route::patch('admin/users/{users}', ['as'=> 'admin.users.update', 'uses' => 'UserController@update']);
Route::delete('admin/users/{users}', ['as'=> 'admin.users.destroy', 'uses' => 'UserController@destroy']);
Route::get('admin/users/{users}', ['as'=> 'admin.users.show', 'uses' => 'UserController@show']);
Route::get('admin/users/{users}/edit', ['as'=> 'admin.users.edit', 'uses' => 'UserController@edit']);
Route::post('admin/users/export',['as'=>'admin.users.export', 'uses'=>'UserController@exportExcel']);
Route::patch('admin/users/active', ['as'=> 'admin.users.active', 'uses' => 'UserController@active']);
Route::post('admin/users/common_action', ['as'=> 'admin.users.common_action', 'uses' => 'UserController@common_action']);






Route::get('/trang-chu', ['as'=> 'trang-chu', 'uses' => 'Frontend\SanPhamController@index']);
Route::get('/san-pham/{sanPhams}', ['as'=> 'sanpham.show', 'uses' => 'Frontend\SanPhamController@show']);
Route::get('/danh-muc-san-pham/{danhmuc}', ['as'=> 'danhmuc.index', 'uses' => 'Frontend\DanhMucSanPhamController@index']);




Route::get('admin/tinhs', ['as'=> 'admin.tinhs.index', 'uses' => 'TinhController@index']);
Route::post('admin/tinhs', ['as'=> 'admin.tinhs.store', 'uses' => 'TinhController@store']);
Route::get('admin/tinhs/create', ['as'=> 'admin.tinhs.create', 'uses' => 'TinhController@create']);
Route::put('admin/tinhs/{tinhs}', ['as'=> 'admin.tinhs.update', 'uses' => 'TinhController@update']);
Route::patch('admin/tinhs/{tinhs}', ['as'=> 'admin.tinhs.update', 'uses' => 'TinhController@update']);
Route::delete('admin/tinhs/{tinhs}', ['as'=> 'admin.tinhs.destroy', 'uses' => 'TinhController@destroy']);
Route::get('admin/tinhs/{tinhs}', ['as'=> 'admin.tinhs.show', 'uses' => 'TinhController@show']);
Route::get('admin/tinhs/{tinhs}/edit', ['as'=> 'admin.tinhs.edit', 'uses' => 'TinhController@edit']);


Route::get('admin/huyens', ['as'=> 'admin.huyens.index', 'uses' => 'HuyenController@index']);
Route::post('admin/huyens', ['as'=> 'admin.huyens.store', 'uses' => 'HuyenController@store']);
Route::get('admin/huyens/create', ['as'=> 'admin.huyens.create', 'uses' => 'HuyenController@create']);
Route::put('admin/huyens/{huyens}', ['as'=> 'admin.huyens.update', 'uses' => 'HuyenController@update']);
Route::patch('admin/huyens/{huyens}', ['as'=> 'admin.huyens.update', 'uses' => 'HuyenController@update']);
Route::delete('admin/huyens/{huyens}', ['as'=> 'admin.huyens.destroy', 'uses' => 'HuyenController@destroy']);
Route::get('admin/huyens/{huyens}', ['as'=> 'admin.huyens.show', 'uses' => 'HuyenController@show']);
Route::get('admin/huyens/{huyens}/edit', ['as'=> 'admin.huyens.edit', 'uses' => 'HuyenController@edit']);


Route::get('admin/xas', ['as'=> 'admin.xas.index', 'uses' => 'XaController@index']);
Route::post('admin/xas', ['as'=> 'admin.xas.store', 'uses' => 'XaController@store']);
Route::get('admin/xas/create', ['as'=> 'admin.xas.create', 'uses' => 'XaController@create']);
Route::put('admin/xas/{xas}', ['as'=> 'admin.xas.update', 'uses' => 'XaController@update']);
Route::patch('admin/xas/{xas}', ['as'=> 'admin.xas.update', 'uses' => 'XaController@update']);
Route::delete('admin/xas/{xas}', ['as'=> 'admin.xas.destroy', 'uses' => 'XaController@destroy']);
Route::get('admin/xas/{xas}', ['as'=> 'admin.xas.show', 'uses' => 'XaController@show']);
Route::get('admin/xas/{xas}/edit', ['as'=> 'admin.xas.edit', 'uses' => 'XaController@edit']);


Route::get('admin/nhanViens', ['as'=> 'admin.nhanViens.index', 'uses' => 'NhanVienController@index']);
Route::post('admin/nhanViens', ['as'=> 'admin.nhanViens.store', 'uses' => 'NhanVienController@store']);
Route::get('admin/nhanViens/create', ['as'=> 'admin.nhanViens.create', 'uses' => 'NhanVienController@create']);
Route::put('admin/nhanViens/{nhanViens}', ['as'=> 'admin.nhanViens.update', 'uses' => 'NhanVienController@update']);
Route::patch('admin/nhanViens/{nhanViens}', ['as'=> 'admin.nhanViens.update', 'uses' => 'NhanVienController@update']);
Route::delete('admin/nhanViens/{nhanViens}', ['as'=> 'admin.nhanViens.destroy', 'uses' => 'NhanVienController@destroy']);
Route::get('admin/nhanViens/{nhanViens}', ['as'=> 'admin.nhanViens.show', 'uses' => 'NhanVienController@show']);
Route::get('admin/nhanViens/{nhanViens}/edit', ['as'=> 'admin.nhanViens.edit', 'uses' => 'NhanVienController@edit']);


Route::get('admin/nguoiThans', ['as'=> 'admin.nguoiThans.index', 'uses' => 'NguoiThanController@index']);
Route::post('admin/nguoiThans', ['as'=> 'admin.nguoiThans.store', 'uses' => 'NguoiThanController@store']);
Route::get('admin/nguoiThans/create', ['as'=> 'admin.nguoiThans.create', 'uses' => 'NguoiThanController@create']);
Route::put('admin/nguoiThans/{nguoiThans}', ['as'=> 'admin.nguoiThans.update', 'uses' => 'NguoiThanController@update']);
Route::patch('admin/nguoiThans/{nguoiThans}', ['as'=> 'admin.nguoiThans.update', 'uses' => 'NguoiThanController@update']);
Route::delete('admin/nguoiThans/{nguoiThans}', ['as'=> 'admin.nguoiThans.destroy', 'uses' => 'NguoiThanController@destroy']);
Route::get('admin/nguoiThans/{nguoiThans}', ['as'=> 'admin.nguoiThans.show', 'uses' => 'NguoiThanController@show']);
Route::get('admin/nguoiThans/{nguoiThans}/edit', ['as'=> 'admin.nguoiThans.edit', 'uses' => 'NguoiThanController@edit']);


Route::get('admin/quaTrinhCongTacs', ['as'=> 'admin.quaTrinhCongTacs.index', 'uses' => 'QuaTrinhCongTacController@index']);
Route::post('admin/quaTrinhCongTacs', ['as'=> 'admin.quaTrinhCongTacs.store', 'uses' => 'QuaTrinhCongTacController@store']);
Route::get('admin/quaTrinhCongTacs/create', ['as'=> 'admin.quaTrinhCongTacs.create', 'uses' => 'QuaTrinhCongTacController@create']);
Route::put('admin/quaTrinhCongTacs/{quaTrinhCongTacs}', ['as'=> 'admin.quaTrinhCongTacs.update', 'uses' => 'QuaTrinhCongTacController@update']);
Route::patch('admin/quaTrinhCongTacs/{quaTrinhCongTacs}', ['as'=> 'admin.quaTrinhCongTacs.update', 'uses' => 'QuaTrinhCongTacController@update']);
Route::delete('admin/quaTrinhCongTacs/{quaTrinhCongTacs}', ['as'=> 'admin.quaTrinhCongTacs.destroy', 'uses' => 'QuaTrinhCongTacController@destroy']);
Route::get('admin/quaTrinhCongTacs/{quaTrinhCongTacs}', ['as'=> 'admin.quaTrinhCongTacs.show', 'uses' => 'QuaTrinhCongTacController@show']);
Route::get('admin/quaTrinhCongTacs/{quaTrinhCongTacs}/edit', ['as'=> 'admin.quaTrinhCongTacs.edit', 'uses' => 'QuaTrinhCongTacController@edit']);


Route::get('admin/cuocThis', ['as'=> 'admin.cuocThis.index', 'uses' => 'CuocThiController@index']);
Route::post('admin/cuocThis', ['as'=> 'admin.cuocThis.store', 'uses' => 'CuocThiController@store']);
Route::get('admin/cuocThis/create', ['as'=> 'admin.cuocThis.create', 'uses' => 'CuocThiController@create']);
Route::put('admin/cuocThis/{cuocThis}', ['as'=> 'admin.cuocThis.update', 'uses' => 'CuocThiController@update']);
Route::patch('admin/cuocThis/{cuocThis}', ['as'=> 'admin.cuocThis.update', 'uses' => 'CuocThiController@update']);
Route::delete('admin/cuocThis/{cuocThis}', ['as'=> 'admin.cuocThis.destroy', 'uses' => 'CuocThiController@destroy']);
Route::get('admin/cuocThis/{cuocThis}', ['as'=> 'admin.cuocThis.show', 'uses' => 'CuocThiController@show']);
Route::get('admin/cuocThis/{cuocThis}/edit', ['as'=> 'admin.cuocThis.edit', 'uses' => 'CuocThiController@edit']);




Route::get('admin/cuocThiTepDinhKems', ['as'=> 'admin.cuocThiTepDinhKems.index', 'uses' => 'CuocThiTepDinhKemController@index']);
Route::post('admin/cuocThiTepDinhKems', ['as'=> 'admin.cuocThiTepDinhKems.store', 'uses' => 'CuocThiTepDinhKemController@store']);
Route::get('admin/cuocThiTepDinhKems/create', ['as'=> 'admin.cuocThiTepDinhKems.create', 'uses' => 'CuocThiTepDinhKemController@create']);
Route::put('admin/cuocThiTepDinhKems/{cuocThiTepDinhKems}', ['as'=> 'admin.cuocThiTepDinhKems.update', 'uses' => 'CuocThiTepDinhKemController@update']);
Route::patch('admin/cuocThiTepDinhKems/{cuocThiTepDinhKems}', ['as'=> 'admin.cuocThiTepDinhKems.update', 'uses' => 'CuocThiTepDinhKemController@update']);
Route::delete('admin/cuocThiTepDinhKems/{cuocThiTepDinhKems}', ['as'=> 'admin.cuocThiTepDinhKems.destroy', 'uses' => 'CuocThiTepDinhKemController@destroy']);
Route::get('admin/cuocThiTepDinhKems/{cuocThiTepDinhKems}', ['as'=> 'admin.cuocThiTepDinhKems.show', 'uses' => 'CuocThiTepDinhKemController@show']);
Route::get('admin/cuocThiTepDinhKems/{cuocThiTepDinhKems}/edit', ['as'=> 'admin.cuocThiTepDinhKems.edit', 'uses' => 'CuocThiTepDinhKemController@edit']);


Route::get('admin/danhHieus', ['as'=> 'admin.danhHieus.index', 'uses' => 'DanhHieuController@index']);
Route::post('admin/danhHieus', ['as'=> 'admin.danhHieus.store', 'uses' => 'DanhHieuController@store']);
Route::get('admin/danhHieus/create', ['as'=> 'admin.danhHieus.create', 'uses' => 'DanhHieuController@create']);
Route::put('admin/danhHieus/{danhHieus}', ['as'=> 'admin.danhHieus.update', 'uses' => 'DanhHieuController@update']);
Route::patch('admin/danhHieus/{danhHieus}', ['as'=> 'admin.danhHieus.update', 'uses' => 'DanhHieuController@update']);
Route::delete('admin/danhHieus/{danhHieus}', ['as'=> 'admin.danhHieus.destroy', 'uses' => 'DanhHieuController@destroy']);
Route::get('admin/danhHieus/{danhHieus}', ['as'=> 'admin.danhHieus.show', 'uses' => 'DanhHieuController@show']);
Route::get('admin/danhHieus/{danhHieus}/edit', ['as'=> 'admin.danhHieus.edit', 'uses' => 'DanhHieuController@edit']);


Route::get('admin/doiTuongDoatGiais', ['as'=> 'admin.doiTuongDoatGiais.index', 'uses' => 'DoiTuongDoatGiaiController@index']);
Route::post('admin/doiTuongDoatGiais', ['as'=> 'admin.doiTuongDoatGiais.store', 'uses' => 'DoiTuongDoatGiaiController@store']);
Route::get('admin/doiTuongDoatGiais/create', ['as'=> 'admin.doiTuongDoatGiais.create', 'uses' => 'DoiTuongDoatGiaiController@create']);
Route::put('admin/doiTuongDoatGiais/{doiTuongDoatGiais}', ['as'=> 'admin.doiTuongDoatGiais.update', 'uses' => 'DoiTuongDoatGiaiController@update']);
Route::patch('admin/doiTuongDoatGiais/{doiTuongDoatGiais}', ['as'=> 'admin.doiTuongDoatGiais.update', 'uses' => 'DoiTuongDoatGiaiController@update']);
Route::delete('admin/doiTuongDoatGiais/{doiTuongDoatGiais}', ['as'=> 'admin.doiTuongDoatGiais.destroy', 'uses' => 'DoiTuongDoatGiaiController@destroy']);
Route::get('admin/doiTuongDoatGiais/{doiTuongDoatGiais}', ['as'=> 'admin.doiTuongDoatGiais.show', 'uses' => 'DoiTuongDoatGiaiController@show']);
Route::get('admin/doiTuongDoatGiais/{doiTuongDoatGiais}/edit', ['as'=> 'admin.doiTuongDoatGiais.edit', 'uses' => 'DoiTuongDoatGiaiController@edit']);


Route::get('admin/nhanViens', ['as'=> 'admin.nhanViens.index', 'uses' => 'NhanVienController@index']);
Route::post('admin/nhanViens', ['as'=> 'admin.nhanViens.store', 'uses' => 'NhanVienController@store']);
Route::get('admin/nhanViens/create', ['as'=> 'admin.nhanViens.create', 'uses' => 'NhanVienController@create']);
Route::put('admin/nhanViens/{nhanViens}', ['as'=> 'admin.nhanViens.update', 'uses' => 'NhanVienController@update']);
Route::patch('admin/nhanViens/{nhanViens}', ['as'=> 'admin.nhanViens.update', 'uses' => 'NhanVienController@update']);
Route::delete('admin/nhanViens/{nhanViens}', ['as'=> 'admin.nhanViens.destroy', 'uses' => 'NhanVienController@destroy']);
Route::get('admin/nhanViens/{nhanViens}', ['as'=> 'admin.nhanViens.show', 'uses' => 'NhanVienController@show']);
Route::get('admin/nhanViens/{nhanViens}/edit', ['as'=> 'admin.nhanViens.edit', 'uses' => 'NhanVienController@edit']);


Route::get('admin/nguoiThans', ['as'=> 'admin.nguoiThans.index', 'uses' => 'NguoiThanController@index']);
Route::post('admin/nguoiThans', ['as'=> 'admin.nguoiThans.store', 'uses' => 'NguoiThanController@store']);
Route::get('admin/nguoiThans/create', ['as'=> 'admin.nguoiThans.create', 'uses' => 'NguoiThanController@create']);
Route::put('admin/nguoiThans/{nguoiThans}', ['as'=> 'admin.nguoiThans.update', 'uses' => 'NguoiThanController@update']);
Route::patch('admin/nguoiThans/{nguoiThans}', ['as'=> 'admin.nguoiThans.update', 'uses' => 'NguoiThanController@update']);
Route::delete('admin/nguoiThans/{nguoiThans}', ['as'=> 'admin.nguoiThans.destroy', 'uses' => 'NguoiThanController@destroy']);
Route::get('admin/nguoiThans/{nguoiThans}', ['as'=> 'admin.nguoiThans.show', 'uses' => 'NguoiThanController@show']);
Route::get('admin/nguoiThans/{nguoiThans}/edit', ['as'=> 'admin.nguoiThans.edit', 'uses' => 'NguoiThanController@edit']);


Route::get('admin/quaTrinhCongTacs', ['as'=> 'admin.quaTrinhCongTacs.index', 'uses' => 'QuaTrinhCongTacController@index']);
Route::post('admin/quaTrinhCongTacs', ['as'=> 'admin.quaTrinhCongTacs.store', 'uses' => 'QuaTrinhCongTacController@store']);
Route::get('admin/quaTrinhCongTacs/create', ['as'=> 'admin.quaTrinhCongTacs.create', 'uses' => 'QuaTrinhCongTacController@create']);
Route::put('admin/quaTrinhCongTacs/{quaTrinhCongTacs}', ['as'=> 'admin.quaTrinhCongTacs.update', 'uses' => 'QuaTrinhCongTacController@update']);
Route::patch('admin/quaTrinhCongTacs/{quaTrinhCongTacs}', ['as'=> 'admin.quaTrinhCongTacs.update', 'uses' => 'QuaTrinhCongTacController@update']);
Route::delete('admin/quaTrinhCongTacs/{quaTrinhCongTacs}', ['as'=> 'admin.quaTrinhCongTacs.destroy', 'uses' => 'QuaTrinhCongTacController@destroy']);
Route::get('admin/quaTrinhCongTacs/{quaTrinhCongTacs}', ['as'=> 'admin.quaTrinhCongTacs.show', 'uses' => 'QuaTrinhCongTacController@show']);
Route::get('admin/quaTrinhCongTacs/{quaTrinhCongTacs}/edit', ['as'=> 'admin.quaTrinhCongTacs.edit', 'uses' => 'QuaTrinhCongTacController@edit']);


Route::get('admin/cuocThis', ['as'=> 'admin.cuocThis.index', 'uses' => 'CuocThiController@index']);
Route::post('admin/cuocThis', ['as'=> 'admin.cuocThis.store', 'uses' => 'CuocThiController@store']);
Route::get('admin/cuocThis/create', ['as'=> 'admin.cuocThis.create', 'uses' => 'CuocThiController@create']);
Route::put('admin/cuocThis/{cuocThis}', ['as'=> 'admin.cuocThis.update', 'uses' => 'CuocThiController@update']);
Route::patch('admin/cuocThis/{cuocThis}', ['as'=> 'admin.cuocThis.update', 'uses' => 'CuocThiController@update']);
Route::delete('admin/cuocThis/{cuocThis}', ['as'=> 'admin.cuocThis.destroy', 'uses' => 'CuocThiController@destroy']);
Route::get('admin/cuocThis/{cuocThis}', ['as'=> 'admin.cuocThis.show', 'uses' => 'CuocThiController@show']);
Route::get('admin/cuocThis/{cuocThis}/edit', ['as'=> 'admin.cuocThis.edit', 'uses' => 'CuocThiController@edit']);




Route::get('admin/cuocThiTepDinhKems', ['as'=> 'admin.cuocThiTepDinhKems.index', 'uses' => 'CuocThiTepDinhKemController@index']);
Route::post('admin/cuocThiTepDinhKems', ['as'=> 'admin.cuocThiTepDinhKems.store', 'uses' => 'CuocThiTepDinhKemController@store']);
Route::get('admin/cuocThiTepDinhKems/create', ['as'=> 'admin.cuocThiTepDinhKems.create', 'uses' => 'CuocThiTepDinhKemController@create']);
Route::put('admin/cuocThiTepDinhKems/{cuocThiTepDinhKems}', ['as'=> 'admin.cuocThiTepDinhKems.update', 'uses' => 'CuocThiTepDinhKemController@update']);
Route::patch('admin/cuocThiTepDinhKems/{cuocThiTepDinhKems}', ['as'=> 'admin.cuocThiTepDinhKems.update', 'uses' => 'CuocThiTepDinhKemController@update']);
Route::delete('admin/cuocThiTepDinhKems/{cuocThiTepDinhKems}', ['as'=> 'admin.cuocThiTepDinhKems.destroy', 'uses' => 'CuocThiTepDinhKemController@destroy']);
Route::get('admin/cuocThiTepDinhKems/{cuocThiTepDinhKems}', ['as'=> 'admin.cuocThiTepDinhKems.show', 'uses' => 'CuocThiTepDinhKemController@show']);
Route::get('admin/cuocThiTepDinhKems/{cuocThiTepDinhKems}/edit', ['as'=> 'admin.cuocThiTepDinhKems.edit', 'uses' => 'CuocThiTepDinhKemController@edit']);


Route::get('admin/danhHieus', ['as'=> 'admin.danhHieus.index', 'uses' => 'DanhHieuController@index']);
Route::post('admin/danhHieus', ['as'=> 'admin.danhHieus.store', 'uses' => 'DanhHieuController@store']);
Route::get('admin/danhHieus/create', ['as'=> 'admin.danhHieus.create', 'uses' => 'DanhHieuController@create']);
Route::put('admin/danhHieus/{danhHieus}', ['as'=> 'admin.danhHieus.update', 'uses' => 'DanhHieuController@update']);
Route::patch('admin/danhHieus/{danhHieus}', ['as'=> 'admin.danhHieus.update', 'uses' => 'DanhHieuController@update']);
Route::delete('admin/danhHieus/{danhHieus}', ['as'=> 'admin.danhHieus.destroy', 'uses' => 'DanhHieuController@destroy']);
Route::get('admin/danhHieus/{danhHieus}', ['as'=> 'admin.danhHieus.show', 'uses' => 'DanhHieuController@show']);
Route::get('admin/danhHieus/{danhHieus}/edit', ['as'=> 'admin.danhHieus.edit', 'uses' => 'DanhHieuController@edit']);


Route::get('admin/doiTuongDoatGiais', ['as'=> 'admin.doiTuongDoatGiais.index', 'uses' => 'DoiTuongDoatGiaiController@index']);
Route::post('admin/doiTuongDoatGiais', ['as'=> 'admin.doiTuongDoatGiais.store', 'uses' => 'DoiTuongDoatGiaiController@store']);
Route::get('admin/doiTuongDoatGiais/create', ['as'=> 'admin.doiTuongDoatGiais.create', 'uses' => 'DoiTuongDoatGiaiController@create']);
Route::put('admin/doiTuongDoatGiais/{doiTuongDoatGiais}', ['as'=> 'admin.doiTuongDoatGiais.update', 'uses' => 'DoiTuongDoatGiaiController@update']);
Route::patch('admin/doiTuongDoatGiais/{doiTuongDoatGiais}', ['as'=> 'admin.doiTuongDoatGiais.update', 'uses' => 'DoiTuongDoatGiaiController@update']);
Route::delete('admin/doiTuongDoatGiais/{doiTuongDoatGiais}', ['as'=> 'admin.doiTuongDoatGiais.destroy', 'uses' => 'DoiTuongDoatGiaiController@destroy']);
Route::get('admin/doiTuongDoatGiais/{doiTuongDoatGiais}', ['as'=> 'admin.doiTuongDoatGiais.show', 'uses' => 'DoiTuongDoatGiaiController@show']);
Route::get('admin/doiTuongDoatGiais/{doiTuongDoatGiais}/edit', ['as'=> 'admin.doiTuongDoatGiais.edit', 'uses' => 'DoiTuongDoatGiaiController@edit']);


Route::get('admin/cuocThiDoiTuongThamGias', ['as'=> 'admin.cuocThiDoiTuongThamGias.index', 'uses' => 'CuocThiDoiTuongThamGiaController@index']);
Route::post('admin/cuocThiDoiTuongThamGias', ['as'=> 'admin.cuocThiDoiTuongThamGias.store', 'uses' => 'CuocThiDoiTuongThamGiaController@store']);
Route::get('admin/cuocThiDoiTuongThamGias/create', ['as'=> 'admin.cuocThiDoiTuongThamGias.create', 'uses' => 'CuocThiDoiTuongThamGiaController@create']);
Route::put('admin/cuocThiDoiTuongThamGias/{cuocThiDoiTuongThamGias}', ['as'=> 'admin.cuocThiDoiTuongThamGias.update', 'uses' => 'CuocThiDoiTuongThamGiaController@update']);
Route::patch('admin/cuocThiDoiTuongThamGias/{cuocThiDoiTuongThamGias}', ['as'=> 'admin.cuocThiDoiTuongThamGias.update', 'uses' => 'CuocThiDoiTuongThamGiaController@update']);
Route::delete('admin/cuocThiDoiTuongThamGias/{cuocThiDoiTuongThamGias}', ['as'=> 'admin.cuocThiDoiTuongThamGias.destroy', 'uses' => 'CuocThiDoiTuongThamGiaController@destroy']);
Route::get('admin/cuocThiDoiTuongThamGias/{cuocThiDoiTuongThamGias}', ['as'=> 'admin.cuocThiDoiTuongThamGias.show', 'uses' => 'CuocThiDoiTuongThamGiaController@show']);
Route::get('admin/cuocThiDoiTuongThamGias/{cuocThiDoiTuongThamGias}/edit', ['as'=> 'admin.cuocThiDoiTuongThamGias.edit', 'uses' => 'CuocThiDoiTuongThamGiaController@edit']);
