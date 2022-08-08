<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
Use App\Http\Controllers\Admin\AdminController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin','middleware' =>['admin','auth']], function(){
Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');

Route::get('charts',[AdminController::class,'charts'])->name('admin.dashboard.charts');
Route::get('charts/chartsMorris',[AdminController::class,'chartsMorris'])->name('admin.dashboard.charts.Morris');
Route::get('charts/chartsFlot',[AdminController::class,'chartsFlot'])->name('admin.dashboard.charts.Flot');
Route::get('charts/chartsJS',[AdminController::class,'chartsJS'])->name('admin.dashboard.charts.JS');
Route::get('charts/chartsRickshaw',[AdminController::class,'chartsRickshaw'])->name('admin.dashboard.charts.Rickshaw');
Route::get('charts/chartsSparkline',[AdminController::class,'chartsSparkline'])->name('admin.dashboard.charts.Sparkline');

   

// form

Route::get('form/formElements',[AdminController::class,'ElementsForm'])->name('admin.form.elements');
Route::get('form/formLayouts',[AdminController::class,'LayoutsForm'])->name('admin.form.layouts');
Route::get('form/formValidation',[AdminController::class,'ValidationForm'])->name('admin.form.validation');
Route::get('form/formWizards',[AdminController::class,'WizardsForm'])->name('admin.form.wizards');
Route::get('form/formEditor',[AdminController::class,'EditorForm'])->name('admin.form.editor');


// UI_element


Route::get('UI_element/accordion',[AdminController::class,'AccordionUI_element'])->name('admin.eI_element.accordion');
Route::get('UI_element/alerts',[AdminController::class,'AlertsUI_element'])->name('admin.eI_element.alerts');
Route::get('UI_element/buttons',[AdminController::class,'ButtonsUI_element'])->name('admin.eI_element.buttons');
Route::get('UI_element/cards',[AdminController::class,'CardsUI_element'])->name('admin.eI_element.cards');
Route::get('UI_element/icons',[AdminController::class,'IconsUI_element'])->name('admin.eI_element.icons');
Route::get('UI_element/modal',[AdminController::class,'ModalUI_element'])->name('admin.eI_element.modal');
Route::get('UI_element/navigation',[AdminController::class,'NavigationUI_element'])->name('admin.eI_element.navigation');
Route::get('UI_element/pagination',[AdminController::class,'PaginationUI_element'])->name('admin.eI_element.pagination');
Route::get('UI_element/tooltipPopover',[AdminController::class,'TooltipPopoverUI_element'])->name('admin.eI_element.tooltipPopover');
Route::get('UI_element/progress',[AdminController::class,'ProgressUI_element'])->name('admin.eI_element.progress');
Route::get('UI_element/spinners',[AdminController::class,'SpinnersUI_element'])->name('admin.eI_element.spinners');
Route::get('UI_element/typography',[AdminController::class,'TypographyUI_element'])->name('admin.eI_element.typography');



// table


Route::get('table/basic',[AdminController::class,'basicTable'])->name('admin.table.basic');
Route::get('table/data',[AdminController::class,'dataTable'])->name('admin.table.data');
    
// map


Route::get('map/google',[AdminController::class,'googleMap'])->name('admin.map.google');
Route::get('map/vector',[AdminController::class,'vectorMap'])->name('admin.map.vector');


// page


Route::get('page/blank',[AdminController::class,'blankPage'])->name('admin.page.blank');
Route::get('page/signin',[AdminController::class,'signinPage'])->name('admin.page.signin');
Route::get('page/signup',[AdminController::class,'signupPage'])->name('admin.page.signup');
Route::get('page/404',[AdminController::class,'notPage'])->name('admin.page.404');












});





Route::group(['prefix'=>'user','middleware' =>['user','auth']], function(){
Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
});
