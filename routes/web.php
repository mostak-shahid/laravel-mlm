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
	Route::group(['prefix'=>'administration', 'middleware'=>'admin'], function(){
        Route::get('/', 'DashboardController@adminDashboard')->name('admin.dashboard');

        Route::get('/approval', 'AuthenticationController@adminAuthenticationApproval')->name('admin.authentication.approval');

        Route::get('/business', 'ReportController@adminBusinessSummary')->name('admin.business.summary');
        Route::get('/business/summary', 'ReportController@adminBusinessSummary')->name('admin.business.summary');
        Route::get('/business/transactions', 'ReportController@adminBusinessTransactions')->name('admin.business.transactions');

        Route::get('/pin/all', 'PinController@adminPinAll')->name('admin.pin.all');
        Route::get('/pin/approval', 'PinController@adminPinApproval')->name('admin.pin.approval');

        Route::get('/wallet', 'WalletController@adminWalletRelease')->name('admin.wallet.release');
        Route::get('/wallet/status', 'WalletController@adminWalletStatus')->name('admin.wallet.status');

        Route::get('/settings', 'DashboardController@adminSettings')->name('admin.settings');
        Route::get('/settings/compensation', 'DashboardController@adminCompensation')->name('admin.settings.compensation');
        Route::get('/settings/compensation/bianary', 'DashboardController@adminBianary')->name('admin.settings.compensation.bianary');
        Route::get('/settings/compensation/level', 'DashboardController@adminLevel')->name('admin.settings.compensation.level');
        Route::get('/settings/compensation/referal', 'DashboardController@adminReferal')->name('admin.settings.compensation.referal');
        Route::get('/settings/payout', 'DashboardController@adminPayout')->name('admin.settings.payout');
        Route::get('/settings/payment', 'DashboardController@adminPayment')->name('admin.settings.payment');
        Route::get('/settings/signup', 'DashboardController@adminSignup')->name('admin.settings.signup');
        Route::get('/settings/mail', 'DashboardController@adminMail')->name('admin.settings.mail');
        Route::get('/settings/tree', 'DashboardController@adminTree')->name('admin.settings.tree');
        Route::get('/settings/api', 'DashboardController@adminApi')->name('admin.settings.api');
    });
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
		Route::get('/pin/transfer', 'PinController@userPinTransfer')->name('user.pin.transfer');

		Route::get('/wallet', 'WalletController@userWalletStatement')->name('user.wallet.statement');
		Route::get('/wallet/transfer', 'WalletController@userWalletTransfer')->name('user.wallet.transfer');
		Route::get('/wallet/history', 'WalletController@userWalletHistory')->name('user.wallet.history');

		Route::get('/earnings', 'WalletController@userWalletEarnings')->name('user.wallet.earnings');

		Route::get('/payout', 'WalletController@userWalletPayout')->name('user.wallet.payout');


		Route::get('/reports', 'ReportController@userReportsCommission')->name('user.report.commission');
		Route::get('/reports/sales', 'ReportController@userReportsSales')->name('user.report.sales');
		Route::get('/reports/performance', 'ReportController@userReportsPerformance')->name('user.report.performance');

		Route::get('/mailbox/', 'MailboxController@index')->name('user.mailbox.index');
		Route::get('/mailbox/compose', 'MailboxController@compose')->name('user.mailbox.compose');
		Route::post('/mailbox/store', 'MailboxController@store')->name('user.mailbox.store');
		Route::get('/mailbox/starred', 'MailboxController@starred')->name('user.mailbox.starred');
		Route::get('/mailbox/sent', 'MailboxController@sent')->name('user.mailbox.sent');
		Route::get('/mailbox/spam', 'MailboxController@spam')->name('user.mailbox.spam');
		Route::get('/mailbox/trash', 'MailboxController@trash')->name('user.mailbox.trash');
		Route::get('/mailbox/like/{id}', 'MailboxController@like')->name('user.mailbox.like');
		Route::get('/mailbox/dislike/{id}', 'MailboxController@dislike')->name('user.mailbox.dislike');

		Route::get('/mailbox/show/{id}', 'MailboxController@show')->name('user.mailbox.show');

		Route::post('/mailbox/mailmanagement/', 'MailboxController@mailmanagement')->name('user.mailbox.mailmanagement');






		// Route::get('/', function () {return view('user.index'); })->name('user.dashboard.index'); 
	});
});
