<?php

use Illuminate\Support\Facades\Route;

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

/*Auth::routes([
	'register' => false, // Registration Routes...
	'reset' => false, // Password Reset Routes...
	'verify' => false, // Email Verification Routes...
]);*/

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function(){
	Route::group(['prefix'=>'user'], function(){	
		// Route::get('/dashboard', ['uses'=>'PostsController@create', 'as'=>'post.create']);
		Route::get('/', 'DashboardController@userDashboardIndex')->name('user.dashboard.index');

		Route::get('/network', 'NetworkController@userNetworkIndex')->name('user.network.index');
		Route::get('/network/sponsor', 'NetworkController@userNetworkSponsor')->name('user.network.sponsor');
		Route::get('/network/tree', 'NetworkController@userNetworkTree')->name('user.network.tree');
		Route::get('/network/downline', 'NetworkController@userNetworkDownline')->name('user.network.downline');
		Route::get('/network/referral', 'NetworkController@userNetworkReferral')->name('user.network.referral');

		Route::get('/register', 'AuthenticationController@userAuthenticationRegister')->name('user.authentication.register');
		Route::get('/profile', 'AuthenticationController@userAuthenticationProfile')->name('user.authentication.profile');
		Route::get('/profile/password', 'AuthenticationController@userAuthenticationPassword')->name('user.authentication.password');
		Route::get('/profile/pin', 'AuthenticationController@userAuthenticationPin')->name('user.authentication.pin');

		Route::get('/order', 'OrderController@userOrderHistory')->name('user.order.history');
		Route::get('/order/{id}', 'OrderController@userOrderShow')->name('user.order.show');

		Route::get('/pin', 'PinController@userPinHistory')->name('user.pin.history');
		Route::get('/pin/request', 'PinController@userPinRequest')->name('user.pin.request');
		Route::get('/pin/transfer', 'PinController@userPinTransfer')->name('user.pin.transfer');
		Route::get('/pin/purchase', 'PinController@userPinPurchase')->name('user.pin.purchase');

		Route::get('/wallet', 'WalletController@userWalletStatement')->name('user.wallet.statement');
		Route::get('/wallet/transfer', 'WalletController@userWalletTransfer')->name('user.wallet.transfer');
		Route::get('/wallet/history', 'WalletController@userWalletHistory')->name('user.wallet.history');

		Route::get('/earnings', 'WalletController@userWalletEarnings')->name('user.wallet.earnings');

		Route::get('/payout', 'WalletController@userWalletPayout')->name('user.wallet.payout');
		Route::get('/payout/status', 'WalletController@userWalletPayoutSatus')->name('user.wallet.payout.status');


		Route::get('/reports', 'ReportController@userReportsCommission')->name('user.report.commission');
		Route::get('/reports/sales', 'ReportController@userReportsSales')->name('user.report.sales');
		Route::get('/reports/payout', 'ReportController@userReportsPayout')->name('user.report.payout');
		Route::get('/reports/performance', 'ReportController@userReportsPerformance')->name('user.report.performance');

		Route::get('/mailbox/', 'MailboxController@index')->name('user.mailbox.index');
		Route::get('/mailbox/compose', 'MailboxController@compose')->name('user.mailbox.compose');
		Route::post('/mailbox/store', 'MailboxController@store')->name('user.mailbox.store');
		Route::get('/mailbox/starred', 'MailboxController@starred')->name('user.mailbox.starred');
		Route::get('/mailbox/sent', 'MailboxController@index')->name('user.mailbox.sent');
		Route::get('/mailbox/draft', 'MailboxController@index')->name('user.mailbox.draft');
		Route::get('/mailbox/spam', 'MailboxController@index')->name('user.mailbox.spam');
		Route::get('/mailbox/trash', 'MailboxController@trash')->name('user.mailbox.trash');

		Route::get('/mailbox/show/{id}', 'MailboxController@show')->name('user.mailbox.show');





		// Route::get('/', function () {return view('user.index'); })->name('user.dashboard.index'); 
	});
});
