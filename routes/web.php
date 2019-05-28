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
/*
  |--------------------------------------------------------------------------
  |CHANGE LOCALE
  |--------------------------------------------------------------------------
 */
//TODO: bloqueo para ruta descomentar cuando ruta este completas
// Route::get('/locale-web/{lang}', function ($lang) {
//     Session::put('locale', $lang);
//     return back();
// })->name('lang-route');
Route::get('/locale-web/{lang}', 'HomeController@setLocales')->name('lang-route');
/*
|--------------------------------------------------------------------------
| Web Routes Auth
|--------------------------------------------------------------------------
|
| Rutas de manejo de usuarios
|
*/
Auth::routes();
/*
|--------------------------------------------------------------------------
| Web Routes Home
|--------------------------------------------------------------------------
|
| Rutas de Aside Home
|
*/
Route::get('/', 'HomeController@index');
Route::get(__('route_home.main_home'), 'HomeController@index')->name('home');
Route::get(__('route_home.home_sc_aboutus'), 'HomeScAboutUsController@index')->name('home.sc_aboutus');
Route::get(__('route_home.home_sc_cancelations'), 'HomeScCancelationController@index')->name('home.sc_cancelations');
Route::get(__('route_home.home_sc_cookies'), 'HomeScCookieController@index')->name('home.sc_cookies');
Route::get(__('route_home.home_sc_earn'), 'HomeScEarnController@index')->name('home.sc_earn');
Route::get(__('route_home.home_sc_faqs'), 'HomeScFaqController@index')->name('home.sc_faqs');
Route::get(__('route_home.home_sc_guarantee'), 'HomeScGuaranteeController@index')->name('home.sc_guarantee');
Route::get(__('route_home.home_sc_intpropierty'), 'HomeScIntPropiertyController@index')->name('home.sc_intpropierty');
Route::get(__('route_home.home_sc_mision'), 'HomeScMisionController@index')->name('home.sc_mision');
Route::get(__('route_home.home_sc_objective'), 'HomeScObjectiveController@index')->name('home.sc_objective');
Route::get(__('route_home.home_sc_privacy'), 'HomeScPrivacyController@index')->name('home.sc_privacy');
Route::get(__('route_home.home_sc_recharge'), 'HomeScRechargeController@index')->name('home.sc_recharge');
Route::get(__('route_home.home_sc_refund'), 'HomeScRefundController@index')->name('home.sc_refund');
Route::get(__('route_home.home_sc_return'), 'HomeScReturnController@index')->name('home.sc_return');
Route::get(__('route_home.home_sc_shipping'), 'HomeScShippingController@index')->name('home.sc_shipping');
Route::get(__('route_home.home_sc_social'), 'HomeScSocialController@index')->name('home.sc_social');
Route::get(__('route_home.home_sc_term'), 'HomeScTermController@index')->name('home.sc_term');
Route::get(__('route_home.home_sc_vision'), 'HomeScVisionController@index')->name('home.sc_vision');
Route::get(__('route_home.home_user_plan'), 'HomeUserPlanController@index')->name('home.user_plan');
Route::get(__('route_home.home_user_store'), 'HomeUserStoreController@index')->name('home.user_store');
Route::get(__('route_home.home_user_product'), 'HomeUserStoreProductController@index')->name('home.user_product');
Route::get(__('route_home.home_user_product_detail').'{id}', 'HomeUserStoreProductController@indexDetail')->name('home.user_product_detail');
Route::get(__('route_home.home_user_cupon'), 'HomeUserStoreCuponController@index')->name('home.user_cupon');
Route::get(__('route_home.home_user_cupon_detail').'{id}', 'HomeUserStoreCuponController@indexDetail')->name('home.user_cupon_detail');
Route::get(__('route_home.home_user_event'), 'HomeUserStoreEventController@index')->name('home.user_event');
Route::get(__('route_home.home_user_event_detail').'{id}', 'HomeUserStoreEventController@indexDetail')->name('home.user_event_detail');
Route::get(__('route_home.home_user_classified'), 'HomeUserClassifiedController@index')->name('home.user_classified');
Route::get(__('route_home.home_user_classified_detail').'{id}', 'HomeUserClassifiedController@indexDetail')->name('home.user_classified_detail');
Route::get(__('route_home.home_user_news'), 'HomeUserNewController@index')->name('home.user_news');
Route::get(__('route_home.home_user_news_detail').'{id}', 'HomeUserNewController@indexDetail')->name('home.user_news_detail');
Route::get(__('route_home.home_user_contact'), 'HomeUserContactController@index')->name('home.user_contact');
/* ROUTE HOME ACTIONS */

/*
|--------------------------------------------------------------------------
| Web Routes Profile
|--------------------------------------------------------------------------
|
| Rutas de Aside Profile
|
*/
Route::get(__('route_profile.profile_main_user').'{id}', 'ProfileUserController@index')->name('profile.main_user');
Route::get(__('route_profile.profile_main_store').'{id}', 'ProfileStoreController@index')->name('profile.main_store');
Route::get(__('route_profile.profile_user_friends').'{id}', 'ProfileUserFriendsController@index')->name('profile.user_friends');
Route::get(__('route_profile.profile_user_edit').'{id}', 'ProfileUserConfigController@index')->name('profile.user_edit');
Route::put(__('route_profile.profile_user_update').'{id}', 'ProfileUserConfigController@update')->name('profile.user_update');
Route::get(__('route_profile.profile_user_notifications').'{id}', 'ProfileUserNotificationsController@index')->name('profile.user_notifications');
/* ROUTE PROFILE USERS STORES */
Route::get(__('route_profile.profile_user_store'), 'ProfileUserStoreController@index')->name('profile.user_store');
Route::get(__('route_profile.profile_user_store_show').'{id}', 'ProfileUserStoreController@show')->name('profile.user_store.show');
Route::get(__('route_profile.profile_user_store_new'), 'ProfileUserStoreController@create')->name('profile.user_store.new');
Route::post(__('route_profile.profile_user_store_store'), 'ProfileUserStoreController@store')->name('profile.user_store.store');
Route::get(__('route_profile.profile_user_store_edit').'{id}', 'ProfileUserStoreController@edit')->name('profile.user_store.edit');
Route::put(__('route_profile.profile_user_store_update').'{id}', 'ProfileUserStoreController@update')->name('profile.user_store.update');
Route::delete(__('route_profile.profile_user_store_delete').'{id}', 'ProfileUserStoreController@destroy')->name('profile.user_store.delete');
/* ROUTE PROFILE USERS BRANCH */
Route::get(__('route_profile.profile_user_branch'), 'ProfileUserStoreBranchController@index')->name('profile.user_branch');
Route::get(__('route_profile.profile_user_branch_show').'{id}', 'ProfileUserStoreBranchController@show')->name('profile.user_branch.show');
Route::get(__('route_profile.profile_user_branch_new'), 'ProfileUserStoreBranchController@create')->name('profile.user_branch.new');
Route::post(__('route_profile.profile_user_branch_store'), 'ProfileUserStoreBranchController@store')->name('profile.user_branch.store');
Route::get(__('route_profile.profile_user_branch_edit').'{id}', 'ProfileUserStoreBranchController@edit')->name('profile.user_branch.edit');
Route::put(__('route_profile.profile_user_branch_update').'{id}', 'ProfileUserStoreBranchController@update')->name('profile.user_branch.update');
Route::delete(__('route_profile.profile_user_branch_delete').'{id}', 'ProfileUserStoreBranchController@destroy')->name('profile.user_branch.delete');
/* ROUTE PROFILE USERS PRODUCT */
Route::get(__('route_profile.profile_user_product'), 'ProfileUserStoreProductController@index')->name('profile.user_product');
Route::get(__('route_profile.profile_user_product_show').'{id}', 'ProfileUserStoreProductController@show')->name('profile.user_product.show');
Route::get(__('route_profile.profile_user_product_new'), 'ProfileUserStoreProductController@create')->name('profile.user_product.new');
Route::post(__('route_profile.profile_user_product_store'), 'ProfileUserStoreProductController@store')->name('profile.user_product.store');
Route::get(__('route_profile.profile_user_product_edit').'{id}', 'ProfileUserStoreProductController@edit')->name('profile.user_product.edit');
Route::put(__('route_profile.profile_user_product_update').'{id}', 'ProfileUserStoreProductController@update')->name('profile.user_product.update');
Route::delete(__('route_profile.profile_user_product_delete').'{id}', 'ProfileUserStoreProductController@destroy')->name('profile.user_product.delete');
/* ROUTE PROFILE USERS CUPON */
Route::get(__('route_profile.profile_user_cupon'), 'ProfileUserStoreCuponController@index')->name('profile.user_cupon');
Route::get(__('route_profile.profile_user_cupon_show').'{id}', 'ProfileUserStoreCuponController@show')->name('profile.user_cupon.show');
Route::get(__('route_profile.profile_user_cupon_new'), 'ProfileUserStoreCuponController@create')->name('profile.user_cupon.new');
Route::post(__('route_profile.profile_user_cupon_store'), 'ProfileUserStoreCuponController@store')->name('profile.user_cupon.store');
Route::get(__('route_profile.profile_user_cupon_edit').'{id}', 'ProfileUserStoreCuponController@edit')->name('profile.user_cupon.edit');
Route::put(__('route_profile.profile_user_cupon_update').'{id}', 'ProfileUserStoreCuponController@update')->name('profile.user_cupon.update');
Route::delete(__('route_profile.profile_user_cupon_delete').'{id}', 'ProfileUserStoreCuponController@destroy')->name('profile.user_cupon.delete');
/* ROUTE PROFILE USERS EVENT */
Route::get(__('route_profile.profile_user_event'), 'ProfileUserStoreEventController@index')->name('profile.user_event');
Route::get(__('route_profile.profile_user_event_show').'{id}', 'ProfileUserStoreEventController@show')->name('profile.user_event.show');
Route::get(__('route_profile.profile_user_event_new'), 'ProfileUserStoreEventController@create')->name('profile.user_event.new');
Route::post(__('route_profile.profile_user_event_store'), 'ProfileUserStoreEventController@store')->name('profile.user_event.store');
Route::get(__('route_profile.profile_user_event_edit').'{id}', 'ProfileUserStoreEventController@edit')->name('profile.user_event.edit');
Route::put(__('route_profile.profile_user_event_update').'{id}', 'ProfileUserStoreEventController@update')->name('profile.user_event.update');
Route::delete(__('route_profile.profile_user_event_delete').'{id}', 'ProfileUserStoreEventController@destroy')->name('profile.user_event.delete');
/* ROUTE PROFILE USERS CLASSIFIED */
Route::get(__('route_profile.profile_user_classified'), 'ProfileUserClassifiedController@index')->name('profile.user_classified');
Route::get(__('route_profile.profile_user_classified_show').'{id}', 'ProfileUserClassifiedController@show')->name('profile.user_classified.show');
Route::get(__('route_profile.profile_user_classified_new'), 'ProfileUserClassifiedController@create')->name('profile.user_classified.new');
Route::post(__('route_profile.profile_user_classified_store'), 'ProfileUserClassifiedController@store')->name('profile.user_classified.store');
Route::get(__('route_profile.profile_user_classified_edit').'{id}', 'ProfileUserClassifiedController@edit')->name('profile.user_classified.edit');
Route::put(__('route_profile.profile_user_classified_update').'{id}', 'ProfileUserClassifiedController@update')->name('profile.user_classified.update');
Route::delete(__('route_profile.profile_user_classified_delete').'{id}', 'ProfileUserClassifiedController@destroy')->name('profile.user_classified.delete');
/* ROUTE PROFILE GENERALS */
Route::get(__('route_profile.profile_user_wallet'), 'ProfileUserWalletController@index')->name('profile.user_wallet');
Route::get(__('route_profile.profile_user_cart'), 'ProfileUserCartController@index')->name('profile.user_cart');
Route::get(__('route_profile.profile_user_checkout'), 'ProfileUserCheckoutController@index')->name('profile.user_checkout');
Route::post('make-payment', 'ProfileUserCheckoutController@iniOrden')->name('profile.make_payment');
Route::get(__('route_profile.profile_user_checkout_confirm').'{id}', 'ProfileUserCheckoutController@indexConfirm')->name('profile.user_pay.confirm');
Route::get(__('route_profile.profile_user_auction'), 'ProfileUserAuctionController@index')->name('profile.user_auction');
Route::get(__('route_profile.profile_user_status_shipping').'{id}', 'ProfileUserStatusShippingController@index')->name('profile.user_status_shipping');
Route::get(__('route_profile.profile_user_buy_recurrent').'{id}', 'ProfileUserBuyRecurrentController@index')->name('profile.user_buy_recurrent');
Route::get(__('route_profile.profile_user_whishlist').'{id}', 'ProfileUserWhishlistController@index')->name('profile.user_whishlist');
Route::get(__('route_profile.profile_user_invitations').'{id}', 'ProfileUserInvitationsController@index')->name('profile.user_invitations');
Route::get(__('route_profile.profile_transaction_buy').'{id}', 'ProfileTransactionBuyController@index')->name('profile.transaction_buy');
Route::get(__('route_profile.profile_transaction_sale').'{id}', 'ProfileTransactionSaleController@index')->name('profile.transaction_sale');
Route::get(__('route_profile.profile_transaction_ofer').'{id}', 'ProfileTransactionOferController@index')->name('profile.transaction_ofer');
Route::get(__('route_profile.profile_transaction_points').'{id}', 'ProfileTransactionPointsController@index')->name('profile.transaction_points');
Route::get(__('route_profile.profile_transaction_resume').'{id}', 'ProfileTransactionResumeController@index')->name('profile.transaction_resume');
Route::get(__('route_profile.profile_user_entrys').'{id}', 'ProfileUserEntrysController@index')->name('profile.user_entrys');
/* ROUTE PROFILE ACTIONS */

/*
|--------------------------------------------------------------------------
| Web Routes Admin
|--------------------------------------------------------------------------
|
| Rutas de Aside Admin
|
*/
/* ROUTE ADMIN AC NO BILL */
Route::get(__('route_admin.admin_ac_no_bill'), 'AdminAcNoBillController@index')->name('admin.ac_no_bill');
Route::get(__('route_admin.admin_ac_no_bill_show').'{id}', 'AdminAcNoBillController@show')->name('admin.ac_no_bill.show');
Route::get(__('route_admin.admin_ac_no_bill_new'), 'AdminAcNoBillController@create')->name('admin.ac_no_bill.new');
Route::post(__('route_admin.admin_ac_no_bill_store'), 'AdminAcNoBillController@store')->name('admin.ac_no_bill.store');
Route::get(__('route_admin.admin_ac_no_bill_edit').'{id}', 'AdminAcNoBillController@edit')->name('admin.ac_no_bill.edit');
Route::put(__('route_admin.admin_ac_no_bill_update').'{id}', 'AdminAcNoBillController@update')->name('admin.ac_no_bill.update');
Route::delete(__('route_admin.admin_ac_no_bill_delete').'{id}', 'AdminAcNoBillController@destroy')->name('admin.ac_no_bill.delete');
/* ROUTE ADMIN AC NO CART */
Route::get(__('route_admin.admin_ac_no_cart'), 'AdminAcNoCartController@index')->name('admin.ac_no_cart');
Route::get(__('route_admin.admin_ac_no_cart_show').'{id}', 'AdminAcNoCartController@show')->name('admin.ac_no_cart.show');
Route::get(__('route_admin.admin_ac_no_cart_new'), 'AdminAcNoCartController@create')->name('admin.ac_no_cart.new');
Route::post(__('route_admin.admin_ac_no_cart_store'), 'AdminAcNoCartController@store')->name('admin.ac_no_cart.store');
Route::get(__('route_admin.admin_ac_no_cart_edit').'{id}', 'AdminAcNoCartController@edit')->name('admin.ac_no_cart.edit');
Route::put(__('route_admin.admin_ac_no_cart_update').'{id}', 'AdminAcNoCartController@update')->name('admin.ac_no_cart.update');
Route::delete(__('route_admin.admin_ac_no_cart_delete').'{id}', 'AdminAcNoCartController@destroy')->name('admin.ac_no_cart.delete');
/* ROUTE ADMIN AC NO ORDER */
Route::get(__('route_admin.admin_ac_no_order'), 'AdminAcNoOrderController@index')->name('admin.ac_no_order');
Route::get(__('route_admin.admin_ac_no_order_show').'{id}', 'AdminAcNoOrderController@show')->name('admin.ac_no_order.show');
Route::get(__('route_admin.admin_ac_no_order_new'), 'AdminAcNoOrderController@create')->name('admin.ac_no_order.new');
Route::post(__('route_admin.admin_ac_no_order_store'), 'AdminAcNoOrderController@store')->name('admin.ac_no_order.store');
Route::get(__('route_admin.admin_ac_no_order_edit').'{id}', 'AdminAcNoOrderController@edit')->name('admin.ac_no_order.edit');
Route::put(__('route_admin.admin_ac_no_order_update').'{id}', 'AdminAcNoOrderController@update')->name('admin.ac_no_order.update');
Route::delete(__('route_admin.admin_ac_no_order_delete').'{id}', 'AdminAcNoOrderController@destroy')->name('admin.ac_no_order.delete');
/* ROUTE ADMIN AC NO REQUEST */
Route::get(__('route_admin.admin_ac_no_request'), 'AdminAcNoRequestController@index')->name('admin.ac_no_request');
Route::get(__('route_admin.admin_ac_no_request_show').'{id}', 'AdminAcNoRequestController@show')->name('admin.ac_no_request.show');
Route::get(__('route_admin.admin_ac_no_request_new'), 'AdminAcNoRequestController@create')->name('admin.ac_no_request.new');
Route::post(__('route_admin.admin_ac_no_request_store'), 'AdminAcNoRequestController@store')->name('admin.ac_no_request.store');
Route::get(__('route_admin.admin_ac_no_request_edit').'{id}', 'AdminAcNoRequestController@edit')->name('admin.ac_no_request.edit');
Route::put(__('route_admin.admin_ac_no_request_update').'{id}', 'AdminAcNoRequestController@update')->name('admin.ac_no_request.update');
Route::delete(__('route_admin.admin_ac_no_request_delete').'{id}', 'AdminAcNoRequestController@destroy')->name('admin.ac_no_request.delete');
/* ROUTE ADMIN AC ORDER */
Route::get(__('route_admin.admin_ac_order'), 'AdminAcOrderController@index')->name('admin.ac_order');
Route::get(__('route_admin.admin_ac_order_show').'{id}', 'AdminAcOrderController@show')->name('admin.ac_order.show');
Route::get(__('route_admin.admin_ac_order_new'), 'AdminAcOrderController@create')->name('admin.ac_order.new');
Route::post(__('route_admin.admin_ac_order_store'), 'AdminAcOrderController@store')->name('admin.ac_order.store');
Route::get(__('route_admin.admin_ac_order_edit').'{id}', 'AdminAcOrderController@edit')->name('admin.ac_order.edit');
Route::put(__('route_admin.admin_ac_order_update').'{id}', 'AdminAcOrderController@update')->name('admin.ac_order.update');
Route::delete(__('route_admin.admin_ac_order_delete').'{id}', 'AdminAcOrderController@destroy')->name('admin.ac_order.delete');
/* ROUTE ADMIN AC RECHARGE CARDS */
Route::get(__('route_admin.admin_ac_recharge_card'), 'AdminAcRechargeCardController@index')->name('admin.ac_recharge_card');
Route::get(__('route_admin.admin_ac_recharge_card_show').'{id}', 'AdminAcRechargeCardController@show')->name('admin.ac_recharge_card.show');
Route::get(__('route_admin.admin_ac_recharge_card_new'), 'AdminAcRechargeCardController@create')->name('admin.ac_recharge_card.new');
Route::post(__('route_admin.admin_ac_recharge_card_store'), 'AdminAcRechargeCardController@store')->name('admin.ac_recharge_card.store');
Route::get(__('route_admin.admin_ac_recharge_card_edit').'{id}', 'AdminAcRechargeCardController@edit')->name('admin.ac_recharge_card.edit');
Route::put(__('route_admin.admin_ac_recharge_card_update').'{id}', 'AdminAcRechargeCardController@update')->name('admin.ac_recharge_card.update');
Route::delete(__('route_admin.admin_ac_recharge_card_delete').'{id}', 'AdminAcRechargeCardController@destroy')->name('admin.ac_recharge_card.delete');
/* ROUTE ADMIN BRAND */
Route::get(__('route_admin.admin_cg_brand'), 'AdminCgBrandController@index')->name('admin.cg_brand');
Route::get(__('route_admin.admin_cg_brand_show').'{id}', 'AdminCgBrandController@show')->name('admin.cg_brand.show');
Route::get(__('route_admin.admin_cg_brand_new'), 'AdminCgBrandController@create')->name('admin.cg_brand.new');
Route::post(__('route_admin.admin_cg_brand_store'), 'AdminCgBrandController@store')->name('admin.cg_brand.store');
Route::get(__('route_admin.admin_cg_brand_edit').'{id}', 'AdminCgBrandController@edit')->name('admin.cg_brand.edit');
Route::put(__('route_admin.admin_cg_brand_update').'{id}', 'AdminCgBrandController@update')->name('admin.cg_brand.update');
Route::delete(__('route_admin.admin_cg_brand_delete').'{id}', 'AdminCgBrandController@destroy')->name('admin.cg_brand.delete');
/* ROUTE ADMIN CATEGORIE */
Route::get(__('route_admin.admin_cg_categorie'), 'AdminCgCategorieController@index')->name('admin.cg_categorie');
Route::get(__('route_admin.admin_cg_categorie_show').'{id}', 'AdminCgCategorieController@show')->name('admin.cg_categorie.show');
Route::get(__('route_admin.admin_cg_categorie_new'), 'AdminCgCategorieController@create')->name('admin.cg_categorie.new');
Route::post(__('route_admin.admin_cg_categorie_store'), 'AdminCgCategorieController@store')->name('admin.cg_categorie.store');
Route::get(__('route_admin.admin_cg_categorie_edit').'{id}', 'AdminCgCategorieController@edit')->name('admin.cg_categorie.edit');
Route::put(__('route_admin.admin_cg_categorie_update').'{id}', 'AdminCgCategorieController@update')->name('admin.cg_categorie.update');
Route::delete(__('route_admin.admin_cg_categorie_delete').'{id}', 'AdminCgCategorieController@destroy')->name('admin.cg_categorie.delete');
/* ROUTE ADMIN DEPARTAMENT */
Route::get(__('route_admin.admin_cg_departament'), 'AdminCgDepartamentController@index')->name('admin.cg_departament');
Route::get(__('route_admin.admin_cg_departament_show').'{id}', 'AdminCgDepartamentController@show')->name('admin.cg_departament.show');
Route::get(__('route_admin.admin_cg_departament_new'), 'AdminCgDepartamentController@create')->name('admin.cg_departament.new');
Route::post(__('route_admin.admin_cg_departament_store'), 'AdminCgDepartamentController@store')->name('admin.cg_departament.store');
Route::get(__('route_admin.admin_cg_departament_edit').'{id}', 'AdminCgDepartamentController@edit')->name('admin.cg_departament.edit');
Route::put(__('route_admin.admin_cg_departament_update').'{id}', 'AdminCgDepartamentController@update')->name('admin.cg_departament.update');
Route::delete(__('route_admin.admin_cg_departament_delete').'{id}', 'AdminCgDepartamentController@destroy')->name('admin.cg_departament.delete');
/* ROUTE ADMIN SUB CATEGORIE */
Route::get(__('route_admin.admin_cg_sub_categorie'), 'AdminCgSubCategorieController@index')->name('admin.cg_sub_categorie');
Route::get(__('route_admin.admin_cg_sub_categorie_show').'{id}', 'AdminCgSubCategorieController@show')->name('admin.cg_sub_categorie.show');
Route::get(__('route_admin.admin_cg_sub_categorie_new'), 'AdminCgSubCategorieController@create')->name('admin.cg_sub_categorie.new');
Route::post(__('route_admin.admin_cg_sub_categorie_store'), 'AdminCgSubCategorieController@store')->name('admin.cg_sub_categorie.store');
Route::get(__('route_admin.admin_cg_sub_categorie_edit').'{id}', 'AdminCgSubCategorieController@edit')->name('admin.cg_sub_categorie.edit');
Route::put(__('route_admin.admin_cg_sub_categorie_update').'{id}', 'AdminCgSubCategorieController@update')->name('admin.cg_sub_categorie.update');
Route::delete(__('route_admin.admin_sub_cg_categorie_delete').'{id}', 'AdminCgSubCategorieController@destroy')->name('admin.cg_sub_categorie.delete');
/*
  |__________________________________________________________________________
  |ROUTE ADMIN LOCALE CITY
  |__________________________________________________________________________
 */
Route::get(__('route_admin.admin_locale_city'), 'AdminLocaleCityController@index')->name('admin.locale_city');
Route::get(__('route_admin.admin_locale_city_show').'{id}', 'AdminLocaleCityController@show')->name('admin.locale_city.show');
Route::get(__('route_admin.admin_locale_city_new'), 'AdminLocaleCityController@create')->name('admin.locale_city.new');
Route::post(__('route_admin.admin_locale_city_store'), 'AdminLocaleCityController@store')->name('admin.locale_city.store');
Route::get(__('route_admin.admin_locale_city_edit').'{id}', 'AdminLocaleCityController@edit')->name('admin.locale_city.edit');
Route::put(__('route_admin.admin_locale_city_update').'{id}', 'AdminLocaleCityController@update')->name('admin.locale_city.update');
Route::delete(__('route_admin.admin_locale_city_delete').'{id}', 'AdminLocaleCityController@destroy')->name('admin.locale_city.delete');
/*
  |__________________________________________________________________________
  |ROUTE ADMIN LOCALE COUNTRY
  |__________________________________________________________________________
 */
Route::get(__('route_admin.admin_locale_country'), 'AdminLocaleCountryController@index')->name('admin.locale_country');
Route::get(__('route_admin.admin_locale_country_show').'{id}', 'AdminLocaleCountryController@show')->name('admin.locale_country.show');
Route::get(__('route_admin.admin_locale_country_new'), 'AdminLocaleCountryController@create')->name('admin.locale_country.new');
Route::post(__('route_admin.admin_locale_country_store'), 'AdminLocaleCountryController@store')->name('admin.locale_country.store');
Route::get(__('route_admin.admin_locale_country_edit').'{id}', 'AdminLocaleCountryController@edit')->name('admin.locale_country.edit');
Route::put(__('route_admin.admin_locale_country_update').'{id}', 'AdminLocaleCountryController@update')->name('admin.locale_country.update');
Route::delete(__('route_admin.admin_locale_country_delete').'{id}', 'AdminLocaleCountryController@destroy')->name('admin.locale_country.delete');
/*
  |__________________________________________________________________________
  |ROUTE ADMIN LOCALE STATES
  |__________________________________________________________________________
 */
Route::get(__('route_admin.admin_locale_state'), 'AdminLocaleStateController@index')->name('admin.locale_state');
Route::get(__('route_admin.admin_locale_state_show').'{id}', 'AdminLocaleStateController@show')->name('admin.locale_state.show');
Route::get(__('route_admin.admin_locale_state_new'), 'AdminLocaleStateController@create')->name('admin.locale_state.new');
Route::post(__('route_admin.admin_locale_state_store'), 'AdminLocaleStateController@store')->name('admin.locale_state.store');
Route::get(__('route_admin.admin_locale_state_edit').'{id}', 'AdminLocaleStateController@edit')->name('admin.locale_state.edit');
Route::put(__('route_admin.admin_locale_state_update').'{id}', 'AdminLocaleStateController@update')->name('admin.locale_state.update');
Route::delete(__('route_admin.admin_locale_state_delete').'{id}', 'AdminLocaleStateController@destroy')->name('admin.locale_state.delete');
/* ROUTE ADMIN PAY CURRENCY */
Route::get(__('route_admin.admin_pay_currency'), 'AdminPayCurrencyController@index')->name('admin.pay_currency');
Route::get(__('route_admin.admin_pay_currency_show').'{id}', 'AdminPayCurrencyController@show')->name('admin.pay_currency.show');
Route::get(__('route_admin.admin_pay_currency_new'), 'AdminPayCurrencyController@create')->name('admin.pay_currency.new');
Route::post(__('route_admin.admin_pay_currency_store'), 'AdminPayCurrencyController@store')->name('admin.pay_currency.store');
Route::get(__('route_admin.admin_pay_currency_edit').'{id}', 'AdminPayCurrencyController@edit')->name('admin.pay_currency.edit');
Route::put(__('route_admin.admin_pay_currency_update').'{id}', 'AdminPayCurrencyController@update')->name('admin.pay_currency.update');
Route::delete(__('route_admin.admin_pay_currency_delete').'{id}', 'AdminPayCurrencyController@destroy')->name('admin.pay_currency.delete');
/* ROUTE ADMIN PAY ERROR AVS */
Route::get(__('route_admin.admin_pay_error_avs'), 'AdminPayErrorAvsController@index')->name('admin.pay_error_avs');
Route::get(__('route_admin.admin_pay_error_avs_show').'{id}', 'AdminPayErrorAvsController@show')->name('admin.pay_error_avs.show');
Route::get(__('route_admin.admin_pay_error_avs_new'), 'AdminPayErrorAvsController@create')->name('admin.pay_error_avs.new');
Route::post(__('route_admin.admin_pay_error_avs_store'), 'AdminPayErrorAvsController@store')->name('admin.pay_error_avs.store');
Route::get(__('route_admin.admin_pay_error_avs_edit').'{id}', 'AdminPayErrorAvsController@edit')->name('admin.pay_error_avs.edit');
Route::put(__('route_admin.admin_pay_error_avs_update').'{id}', 'AdminPayErrorAvsController@update')->name('admin.pay_error_avs.update');
Route::delete(__('route_admin.admin_pay_error_avs_delete').'{id}', 'AdminPayErrorAvsController@destroy')->name('admin.pay_error_avs.delete');
/* ROUTE ADMIN PAY ERROR */
Route::get(__('route_admin.admin_pay_error'), 'AdminPayErrorController@index')->name('admin.pay_error');
Route::get(__('route_admin.admin_pay_error_show').'{id}', 'AdminPayErrorController@show')->name('admin.pay_error.show');
Route::get(__('route_admin.admin_pay_error_new'), 'AdminPayErrorController@create')->name('admin.pay_error.new');
Route::post(__('route_admin.admin_pay_error_store'), 'AdminPayErrorController@store')->name('admin.pay_error.store');
Route::get(__('route_admin.admin_pay_error_edit').'{id}', 'AdminPayErrorController@edit')->name('admin.pay_error.edit');
Route::put(__('route_admin.admin_pay_error_update').'{id}', 'AdminPayErrorController@update')->name('admin.pay_error.update');
Route::delete(__('route_admin.admin_pay_error_delete').'{id}', 'AdminPayErrorController@destroy')->name('admin.pay_error.delete');
/* ROUTE ADMIN PAY ERROR CVV */
Route::get(__('route_admin.admin_pay_error_cvv'), 'AdminPayErrorCvvController@index')->name('admin.pay_error_cvv');
Route::get(__('route_admin.admin_pay_error_cvv_show').'{id}', 'AdminPayErrorCvvController@show')->name('admin.pay_error_cvv.show');
Route::get(__('route_admin.admin_pay_error_cvv_new'), 'AdminPayErrorCvvController@create')->name('admin.pay_error_cvv.new');
Route::post(__('route_admin.admin_pay_error_cvv_store'), 'AdminPayErrorCvvController@store')->name('admin.pay_error_cvv.store');
Route::get(__('route_admin.admin_pay_error_cvv_edit').'{id}', 'AdminPayErrorCvvController@edit')->name('admin.pay_error_cvv.edit');
Route::put(__('route_admin.admin_pay_error_cvv_update').'{id}', 'AdminPayErrorCvvController@update')->name('admin.pay_error_cvv.update');
Route::delete(__('route_admin.admin_pay_error_cvv_delete').'{id}', 'AdminPayErrorCvvController@destroy')->name('admin.pay_error_cvv.delete');
/* ROUTE ADMIN PAY TAX */
Route::get(__('route_admin.admin_pay_tax'), 'AdminPayTaxController@index')->name('admin.pay_tax');
Route::get(__('route_admin.admin_pay_tax_show').'{id}', 'AdminPayTaxController@show')->name('admin.pay_tax.show');
Route::get(__('route_admin.admin_pay_tax_new'), 'AdminPayTaxController@create')->name('admin.pay_tax.new');
Route::post(__('route_admin.admin_pay_tax_store'), 'AdminPayTaxController@store')->name('admin.pay_tax.store');
Route::get(__('route_admin.admin_pay_tax_edit').'{id}', 'AdminPayTaxController@edit')->name('admin.pay_tax.edit');
Route::put(__('route_admin.admin_pay_tax_update').'{id}', 'AdminPayTaxController@update')->name('admin.pay_tax.update');
Route::delete(__('route_admin.admin_pay_tax_delete').'{id}', 'AdminPayTaxController@destroy')->name('admin.pay_tax.delete');
/* ROUTE ADMIN STATIC CONTENT ABOUTUS */
Route::get(__('route_admin.admin_sc_aboutus'), 'AdminScAboutUsController@index')->name('admin.sc_aboutus');
Route::get(__('route_admin.admin_sc_aboutus_show').'{id}', 'AdminScAboutUsController@show')->name('admin.sc_aboutus.show');
Route::get(__('route_admin.admin_sc_aboutus_new'), 'AdminScAboutUsController@create')->name('admin.sc_aboutus.new');
Route::post(__('route_admin.admin_sc_aboutus_store'), 'AdminScAboutUsController@store')->name('admin.sc_aboutus.store');
Route::get(__('route_admin.admin_sc_aboutus_edit').'{id}', 'AdminScAboutUsController@edit')->name('admin.sc_aboutus.edit');
Route::put(__('route_admin.admin_sc_aboutus_update').'{id}', 'AdminScAboutUsController@update')->name('admin.sc_aboutus.update');
Route::delete(__('route_admin.admin_sc_aboutus_delete').'{id}', 'AdminScAboutUsController@destroy')->name('admin.sc_aboutus.delete');
/* ROUTE ADMIN STATIC CONTENT CANCELATION */
Route::get(__('route_admin.admin_sc_cancelation'), 'AdminScCancelationController@index')->name('admin.sc_cancelation');
Route::get(__('route_admin.admin_sc_cancelation_show').'{id}', 'AdminScCancelationController@show')->name('admin.sc_cancelation.show');
Route::get(__('route_admin.admin_sc_cancelation_new'), 'AdminScCancelationController@create')->name('admin.sc_cancelation.new');
Route::post(__('route_admin.admin_sc_cancelation_store'), 'AdminScCancelationController@store')->name('admin.sc_cancelation.store');
Route::get(__('route_admin.admin_sc_cancelation_edit').'{id}', 'AdminScCancelationController@edit')->name('admin.sc_cancelation.edit');
Route::put(__('route_admin.admin_sc_cancelation_update').'{id}', 'AdminScCancelationController@update')->name('admin.sc_cancelation.update');
Route::delete(__('route_admin.admin_sc_cancelation_delete').'{id}', 'AdminScCancelationController@destroy')->name('admin.sc_cancelation.delete');
/* ROUTE ADMIN STATIC CONTENT CATEGORIE FAQ */
Route::get(__('route_admin.admin_sc_categoriefaq'), 'AdminScCategorieFaqController@index')->name('admin.sc_categoriefaq');
Route::get(__('route_admin.admin_sc_categoriefaq_show').'{id}', 'AdminScCategorieFaqController@show')->name('admin.sc_categoriefaq.show');
Route::get(__('route_admin.admin_sc_categoriefaq_new'), 'AdminScCategorieFaqController@create')->name('admin.sc_categoriefaq.new');
Route::post(__('route_admin.admin_sc_categoriefaq_store'), 'AdminScCategorieFaqController@store')->name('admin.sc_categoriefaq.store');
Route::get(__('route_admin.admin_sc_categoriefaq_edit').'{id}', 'AdminScCategorieFaqController@edit')->name('admin.sc_categoriefaq.edit');
Route::put(__('route_admin.admin_sc_categoriefaq_update').'{id}', 'AdminScCategorieFaqController@update')->name('admin.sc_categoriefaq.update');
Route::delete(__('route_admin.admin_sc_categoriefaq_delete').'{id}', 'AdminScCategorieFaqController@destroy')->name('admin.sc_categoriefaq.delete');
/* ROUTE ADMIN STATIC CONTENT COOKIE */
Route::get(__('route_admin.admin_sc_cookie'), 'AdminScCookieController@index')->name('admin.sc_cookie');
Route::get(__('route_admin.admin_sc_cookie_show').'{id}', 'AdminScCookieController@show')->name('admin.sc_cookie.show');
Route::get(__('route_admin.admin_sc_cookie_new'), 'AdminScCookieController@create')->name('admin.sc_cookie.new');
Route::post(__('route_admin.admin_sc_cookie_store'), 'AdminScCookieController@store')->name('admin.sc_cookie.store');
Route::get(__('route_admin.admin_sc_cookie_edit').'{id}', 'AdminScCookieController@edit')->name('admin.sc_cookie.edit');
Route::put(__('route_admin.admin_sc_cookie_update').'{id}', 'AdminScCookieController@update')->name('admin.sc_cookie.update');
Route::delete(__('route_admin.admin_sc_cookie_delete').'{id}', 'AdminScCookieController@destroy')->name('admin.sc_cookie.delete');
/* ROUTE ADMIN STATIC CONTENT EARN */
Route::get(__('route_admin.admin_sc_earn'), 'AdminScEarnController@index')->name('admin.sc_earn');
Route::get(__('route_admin.admin_sc_earn_show').'{id}', 'AdminScEarnController@show')->name('admin.sc_earn.show');
Route::get(__('route_admin.admin_sc_earn_new'), 'AdminScEarnController@create')->name('admin.sc_earn.new');
Route::post(__('route_admin.admin_sc_earn_store'), 'AdminScEarnController@store')->name('admin.sc_earn.store');
Route::get(__('route_admin.admin_sc_earn_edit').'{id}', 'AdminScEarnController@edit')->name('admin.sc_earn.edit');
Route::put(__('route_admin.admin_sc_earn_update').'{id}', 'AdminScEarnController@update')->name('admin.sc_earn.update');
Route::delete(__('route_admin.admin_sc_earn_delete').'{id}', 'AdminScEarnController@destroy')->name('admin.sc_earn.delete');
/* ROUTE ADMIN STATIC CONTENT FAQ */
Route::get(__('route_admin.admin_sc_faq'), 'AdminScFaqController@index')->name('admin.sc_faq');
Route::get(__('route_admin.admin_sc_faq_show').'{id}', 'AdminScFaqController@show')->name('admin.sc_faq.show');
Route::get(__('route_admin.admin_sc_faq_new'), 'AdminScFaqController@create')->name('admin.sc_faq.new');
Route::post(__('route_admin.admin_sc_faq_store'), 'AdminScFaqController@store')->name('admin.sc_faq.store');
Route::get(__('route_admin.admin_sc_faq_edit').'{id}', 'AdminScFaqController@edit')->name('admin.sc_faq.edit');
Route::put(__('route_admin.admin_sc_faq_update').'{id}', 'AdminScFaqController@update')->name('admin.sc_faq.update');
Route::delete(__('route_admin.admin_sc_faq_delete').'{id}', 'AdminScFaqController@destroy')->name('admin.sc_faq.delete');
/* ROUTE ADMIN STATIC CONTENT GUARANTEE */
Route::get(__('route_admin.admin_sc_guarantee'), 'AdminScGuaranteeController@index')->name('admin.sc_guarantee');
Route::get(__('route_admin.admin_sc_guarantee_show').'{id}', 'AdminScGuaranteeController@show')->name('admin.sc_guarantee.show');
Route::get(__('route_admin.admin_sc_guarantee_new'), 'AdminScGuaranteeController@create')->name('admin.sc_guarantee.new');
Route::post(__('route_admin.admin_sc_guarantee_store'), 'AdminScGuaranteeController@store')->name('admin.sc_guarantee.store');
Route::get(__('route_admin.admin_sc_guarantee_edit').'{id}', 'AdminScGuaranteeController@edit')->name('admin.sc_guarantee.edit');
Route::put(__('route_admin.admin_sc_guarantee_update').'{id}', 'AdminScGuaranteeController@update')->name('admin.sc_guarantee.update');
Route::delete(__('route_admin.admin_sc_guarantee_delete').'{id}', 'AdminScGuaranteeController@destroy')->name('admin.sc_guarantee.delete');
/* ROUTE ADMIN STATIC CONTENT INT. PROPIERTY */
Route::get(__('route_admin.admin_sc_intpropierty'), 'AdminScIntPropiertyController@index')->name('admin.sc_intpropierty');
Route::get(__('route_admin.admin_sc_intpropierty_show').'{id}', 'AdminScIntPropiertyController@show')->name('admin.sc_intpropierty.show');
Route::get(__('route_admin.admin_sc_intpropierty_new'), 'AdminScIntPropiertyController@create')->name('admin.sc_intpropierty.new');
Route::post(__('route_admin.admin_sc_intpropierty_store'), 'AdminScIntPropiertyController@store')->name('admin.sc_intpropierty.store');
Route::get(__('route_admin.admin_sc_intpropierty_edit').'{id}', 'AdminScIntPropiertyController@edit')->name('admin.sc_intpropierty.edit');
Route::put(__('route_admin.admin_sc_intpropierty_update').'{id}', 'AdminScIntPropiertyController@update')->name('admin.sc_intpropierty.update');
Route::delete(__('route_admin.admin_sc_intpropierty_delete').'{id}', 'AdminScIntPropiertyController@destroy')->name('admin.sc_intpropierty.delete');
/* ROUTE ADMIN STATIC CONTENT MISION */
Route::get(__('route_admin.admin_sc_mision'), 'AdminScMisionController@index')->name('admin.sc_mision');
Route::get(__('route_admin.admin_sc_mision_show').'{id}', 'AdminScMisionController@show')->name('admin.sc_mision.show');
Route::get(__('route_admin.admin_sc_mision_new'), 'AdminScMisionController@create')->name('admin.sc_mision.new');
Route::post(__('route_admin.admin_sc_mision_store'), 'AdminScMisionController@store')->name('admin.sc_mision.store');
Route::get(__('route_admin.admin_sc_mision_edit').'{id}', 'AdminScMisionController@edit')->name('admin.sc_mision.edit');
Route::put(__('route_admin.admin_sc_mision_update').'{id}', 'AdminScMisionController@update')->name('admin.sc_mision.update');
Route::delete(__('route_admin.admin_sc_mision_delete').'{id}', 'AdminScMisionController@destroy')->name('admin.sc_mision.delete');
/* ROUTE ADMIN STATIC CONTENT OBJETIVE */
Route::get(__('route_admin.admin_sc_objective'), 'AdminScObjectiveController@index')->name('admin.sc_objective');
Route::get(__('route_admin.admin_sc_objective_show').'{id}', 'AdminScObjectiveController@show')->name('admin.sc_objective.show');
Route::get(__('route_admin.admin_sc_objective_new'), 'AdminScObjectiveController@create')->name('admin.sc_objective.new');
Route::post(__('route_admin.admin_sc_objective_store'), 'AdminScObjectiveController@store')->name('admin.sc_objective.store');
Route::get(__('route_admin.admin_sc_objective_edit').'{id}', 'AdminScObjectiveController@edit')->name('admin.sc_objective.edit');
Route::put(__('route_admin.admin_sc_objective_update').'{id}', 'AdminScObjectiveController@update')->name('admin.sc_objective.update');
Route::delete(__('route_admin.admin_sc_objective_delete').'{id}', 'AdminScObjectiveController@destroy')->name('admin.sc_objective.delete');
/* ROUTE ADMIN STATIC CONTENT PRIVACY */
Route::get(__('route_admin.admin_sc_privacy'), 'AdminScPrivacyController@index')->name('admin.sc_privacy');
Route::get(__('route_admin.admin_sc_privacy_show').'{id}', 'AdminScPrivacyController@show')->name('admin.sc_privacy.show');
Route::get(__('route_admin.admin_sc_privacy_new'), 'AdminScPrivacyController@create')->name('admin.sc_privacy.new');
Route::post(__('route_admin.admin_sc_privacy_store'), 'AdminScPrivacyController@store')->name('admin.sc_privacy.store');
Route::get(__('route_admin.admin_sc_privacy_edit').'{id}', 'AdminScPrivacyController@edit')->name('admin.sc_privacy.edit');
Route::put(__('route_admin.admin_sc_privacy_update').'{id}', 'AdminScPrivacyController@update')->name('admin.sc_privacy.update');
Route::delete(__('route_admin.admin_sc_privacy_delete').'{id}', 'AdminScPrivacyController@destroy')->name('admin.sc_privacy.delete');
/* ROUTE ADMIN STATIC CONTENT RECHARGE */
Route::get(__('route_admin.admin_sc_recharge'), 'AdminScRechargeController@index')->name('admin.sc_recharge');
Route::get(__('route_admin.admin_sc_recharge_show').'{id}', 'AdminScRechargeController@show')->name('admin.sc_recharge.show');
Route::get(__('route_admin.admin_sc_recharge_new'), 'AdminScRechargeController@create')->name('admin.sc_recharge.new');
Route::post(__('route_admin.admin_sc_recharge_store'), 'AdminScRechargeController@store')->name('admin.sc_recharge.store');
Route::get(__('route_admin.admin_sc_recharge_edit').'{id}', 'AdminScRechargeController@edit')->name('admin.sc_recharge.edit');
Route::put(__('route_admin.admin_sc_recharge_update').'{id}', 'AdminScRechargeController@update')->name('admin.sc_recharge.update');
Route::delete(__('route_admin.admin_sc_recharge_delete').'{id}', 'AdminScRechargeController@destroy')->name('admin.sc_recharge.delete');
/* ROUTE ADMIN STATIC CONTENT REFUND */
Route::get(__('route_admin.admin_sc_refund'), 'AdminScRefundController@index')->name('admin.sc_refund');
Route::get(__('route_admin.admin_sc_refund_show').'{id}', 'AdminScRefundController@show')->name('admin.sc_refund.show');
Route::get(__('route_admin.admin_sc_refund_new'), 'AdminScRefundController@create')->name('admin.sc_refund.new');
Route::post(__('route_admin.admin_sc_refund_store'), 'AdminScRefundController@store')->name('admin.sc_refund.store');
Route::get(__('route_admin.admin_sc_refund_edit').'{id}', 'AdminScRefundController@edit')->name('admin.sc_refund.edit');
Route::put(__('route_admin.admin_sc_refund_update').'{id}', 'AdminScRefundController@update')->name('admin.sc_refund.update');
Route::delete(__('route_admin.admin_sc_refund_delete').'{id}', 'AdminScRefundController@destroy')->name('admin.sc_refund.delete');
/* ROUTE ADMIN STATIC CONTENT RETURN */
Route::get(__('route_admin.admin_sc_return'), 'AdminScReturnController@index')->name('admin.sc_return');
Route::get(__('route_admin.admin_sc_return_show').'{id}', 'AdminScReturnController@show')->name('admin.sc_return.show');
Route::get(__('route_admin.admin_sc_return_new'), 'AdminScReturnController@create')->name('admin.sc_return.new');
Route::post(__('route_admin.admin_sc_return_store'), 'AdminScReturnController@store')->name('admin.sc_return.store');
Route::get(__('route_admin.admin_sc_return_edit').'{id}', 'AdminScReturnController@edit')->name('admin.sc_return.edit');
Route::put(__('route_admin.admin_sc_return_update').'{id}', 'AdminScReturnController@update')->name('admin.sc_return.update');
Route::delete(__('route_admin.admin_sc_return_delete').'{id}', 'AdminScReturnController@destroy')->name('admin.sc_return.delete');
/* ROUTE ADMIN STATIC CONTENT SHIPPINGS */
Route::get(__('route_admin.admin_sc_shipping'), 'AdminScShippingController@index')->name('admin.sc_shipping');
Route::get(__('route_admin.admin_sc_shipping_show').'{id}', 'AdminScShippingController@show')->name('admin.sc_shipping.show');
Route::get(__('route_admin.admin_sc_shipping_new'), 'AdminScShippingController@create')->name('admin.sc_shipping.new');
Route::post(__('route_admin.admin_sc_shipping_store'), 'AdminScShippingController@store')->name('admin.sc_shipping.store');
Route::get(__('route_admin.admin_sc_shipping_edit').'{id}', 'AdminScShippingController@edit')->name('admin.sc_shipping.edit');
Route::put(__('route_admin.admin_sc_shipping_update').'{id}', 'AdminScShippingController@update')->name('admin.sc_shipping.update');
Route::delete(__('route_admin.admin_sc_shipping_delete').'{id}', 'AdminScShippingController@destroy')->name('admin.sc_shipping.delete');
/* ROUTE ADMIN STATIC CONTENT SOCIAL */
Route::get(__('route_admin.admin_sc_social'), 'AdminScSocialController@index')->name('admin.sc_social');
Route::get(__('route_admin.admin_sc_social_show').'{id}', 'AdminScSocialController@show')->name('admin.sc_social.show');
Route::get(__('route_admin.admin_sc_social_new'), 'AdminScSocialController@create')->name('admin.sc_social.new');
Route::post(__('route_admin.admin_sc_social_store'), 'AdminScSocialController@store')->name('admin.sc_social.store');
Route::get(__('route_admin.admin_sc_social_edit').'{id}', 'AdminScSocialController@edit')->name('admin.sc_social.edit');
Route::put(__('route_admin.admin_sc_social_update').'{id}', 'AdminScSocialController@update')->name('admin.sc_social.update');
Route::delete(__('route_admin.admin_sc_social_delete').'{id}', 'AdminScSocialController@destroy')->name('admin.sc_social.delete');
/* ROUTE ADMIN STATIC CONTENT TERM */
Route::get(__('route_admin.admin_sc_term'), 'AdminScTermController@index')->name('admin.sc_term');
Route::get(__('route_admin.admin_sc_term_show').'{id}', 'AdminScTermController@show')->name('admin.sc_term.show');
Route::get(__('route_admin.admin_sc_term_new'), 'AdminScTermController@create')->name('admin.sc_term.new');
Route::post(__('route_admin.admin_sc_term_store'), 'AdminScTermController@store')->name('admin.sc_term.store');
Route::get(__('route_admin.admin_sc_term_edit').'{id}', 'AdminScTermController@edit')->name('admin.sc_term.edit');
Route::put(__('route_admin.admin_sc_term_update').'{id}', 'AdminScTermController@update')->name('admin.sc_term.update');
Route::delete(__('route_admin.admin_sc_term_delete').'{id}', 'AdminScTermController@destroy')->name('admin.sc_term.delete');
/* ROUTE ADMIN STATIC CONTENT VISION */
Route::get(__('route_admin.admin_sc_vision'), 'AdminScVisionController@index')->name('admin.sc_vision');
Route::get(__('route_admin.admin_sc_vision_show').'{id}', 'AdminScVisionController@show')->name('admin.sc_vision.show');
Route::get(__('route_admin.admin_sc_vision_new'), 'AdminScVisionController@create')->name('admin.sc_vision.new');
Route::post(__('route_admin.admin_sc_vision_store'), 'AdminScVisionController@store')->name('admin.sc_vision.store');
Route::get(__('route_admin.admin_sc_vision_edit').'{id}', 'AdminScVisionController@edit')->name('admin.sc_vision.edit');
Route::put(__('route_admin.admin_sc_vision_update').'{id}', 'AdminScVisionController@update')->name('admin.sc_vision.update');
Route::delete(__('route_admin.admin_sc_vision_delete').'{id}', 'AdminScVisionController@destroy')->name('admin.sc_vision.delete');
/* ROUTE ADMIN STATUS ORDERS */
Route::get(__('route_admin.admin_status_order'), 'AdminStatusOrderController@index')->name('admin.status_order');
Route::get(__('route_admin.admin_status_order_show').'{id}', 'AdminStatusOrderController@show')->name('admin.status_order.show');
Route::get(__('route_admin.admin_status_order_new'), 'AdminStatusOrderController@create')->name('admin.status_order.new');
Route::post(__('route_admin.admin_status_order_store'), 'AdminStatusOrderController@store')->name('admin.status_order.store');
Route::get(__('route_admin.admin_status_order_edit').'{id}', 'AdminStatusOrderController@edit')->name('admin.status_order.edit');
Route::put(__('route_admin.admin_status_order_update').'{id}', 'AdminStatusOrderController@update')->name('admin.status_order.update');
Route::delete(__('route_admin.admin_status_order_delete').'{id}', 'AdminStatusOrderController@destroy')->name('admin.status_order.delete');
/* ROUTE ADMIN STATUS PAYMENT */
Route::get(__('route_admin.admin_status_payment'), 'AdminStatusPaymentController@index')->name('admin.status_payment');
Route::get(__('route_admin.admin_status_payment_show').'{id}', 'AdminStatusPaymentController@show')->name('admin.status_payment.show');
Route::get(__('route_admin.admin_status_payment_new'), 'AdminStatusPaymentController@create')->name('admin.status_payment.new');
Route::post(__('route_admin.admin_status_payment_store'), 'AdminStatusPaymentController@store')->name('admin.status_payment.store');
Route::get(__('route_admin.admin_status_payment_edit').'{id}', 'AdminStatusPaymentController@edit')->name('admin.status_payment.edit');
Route::put(__('route_admin.admin_status_payment_update').'{id}', 'AdminStatusPaymentController@update')->name('admin.status_payment.update');
Route::delete(__('route_admin.admin_status_payment_delete').'{id}', 'AdminStatusPaymentController@destroy')->name('admin.status_payment.delete');
/* ROUTE ADMIN STATUS PRODUCT */
Route::get(__('route_admin.admin_status_product'), 'AdminStatusProductController@index')->name('admin.status_product');
Route::get(__('route_admin.admin_status_product_show').'{id}', 'AdminStatusProductController@show')->name('admin.status_product.show');
Route::get(__('route_admin.admin_status_product_new'), 'AdminStatusProductController@create')->name('admin.status_product.new');
Route::post(__('route_admin.admin_status_product_store'), 'AdminStatusProductController@store')->name('admin.status_product.store');
Route::get(__('route_admin.admin_status_product_edit').'{id}', 'AdminStatusProductController@edit')->name('admin.status_product.edit');
Route::put(__('route_admin.admin_status_product_update').'{id}', 'AdminStatusProductController@update')->name('admin.status_product.update');
Route::delete(__('route_admin.admin_status_product_delete').'{id}', 'AdminStatusProductController@destroy')->name('admin.status_product.delete');
/* ROUTE ADMIN STATUS REFUND */
Route::get(__('route_admin.admin_status_refund'), 'AdminStatusRefundController@index')->name('admin.status_refund');
Route::get(__('route_admin.admin_status_refund_show').'{id}', 'AdminStatusRefundController@show')->name('admin.status_refund.show');
Route::get(__('route_admin.admin_status_refund_new'), 'AdminStatusRefundController@create')->name('admin.status_refund.new');
Route::post(__('route_admin.admin_status_refund_store'), 'AdminStatusRefundController@store')->name('admin.status_refund.store');
Route::get(__('route_admin.admin_status_refund_edit').'{id}', 'AdminStatusRefundController@edit')->name('admin.status_refund.edit');
Route::put(__('route_admin.admin_status_refund_update').'{id}', 'AdminStatusRefundController@update')->name('admin.status_refund.update');
Route::delete(__('route_admin.admin_status_refund_delete').'{id}', 'AdminStatusRefundController@destroy')->name('admin.status_refund.delete');
/* ROUTE ADMIN STATUS SHIPPING */
Route::get(__('route_admin.admin_status_shipping'), 'AdminStatusShippingController@index')->name('admin.status_shipping');
Route::get(__('route_admin.admin_status_shipping_show').'{id}', 'AdminStatusShippingController@show')->name('admin.status_shipping.show');
Route::get(__('route_admin.admin_status_shipping_new'), 'AdminStatusShippingController@create')->name('admin.status_shipping.new');
Route::post(__('route_admin.admin_status_shipping_store'), 'AdminStatusShippingController@store')->name('admin.status_shipping.store');
Route::get(__('route_admin.admin_status_shipping_edit').'{id}', 'AdminStatusShippingController@edit')->name('admin.status_shipping.edit');
Route::put(__('route_admin.admin_status_shipping_update').'{id}', 'AdminStatusShippingController@update')->name('admin.status_shipping.update');
Route::delete(__('route_admin.admin_status_shipping_delete').'{id}', 'AdminStatusShippingController@destroy')->name('admin.status_shipping.delete');
/* ROUTE ADMIN STATUS USER */
Route::get(__('route_admin.admin_status_user'), 'AdminStatusUserController@index')->name('admin.status_user');
Route::get(__('route_admin.admin_status_user_show').'{id}', 'AdminStatusUserController@show')->name('admin.status_user.show');
Route::get(__('route_admin.admin_status_user_new'), 'AdminStatusUserController@create')->name('admin.status_user.new');
Route::post(__('route_admin.admin_status_user_store'), 'AdminStatusUserController@store')->name('admin.status_user.store');
Route::get(__('route_admin.admin_status_user_edit').'{id}', 'AdminStatusUserController@edit')->name('admin.status_user.edit');
Route::put(__('route_admin.admin_status_user_update').'{id}', 'AdminStatusUserController@update')->name('admin.status_user.update');
Route::delete(__('route_admin.admin_status_user_delete').'{id}', 'AdminStatusUserController@destroy')->name('admin.status_user.delete');
/* ROUTE ADMIN TYPES AUCTION */
Route::get(__('route_admin.admin_types_auction'), 'AdminTypeAuctionController@index')->name('admin.type_auction');
Route::get(__('route_admin.admin_types_auction_show').'{id}', 'AdminTypeAuctionController@show')->name('admin.type_auction.show');
Route::get(__('route_admin.admin_types_auction_new'), 'AdminTypeAuctionController@create')->name('admin.type_auction.new');
Route::post(__('route_admin.admin_types_auction_store'), 'AdminTypeAuctionController@store')->name('admin.type_auction.store');
Route::get(__('route_admin.admin_types_auction_edit').'{id}', 'AdminTypeAuctionController@edit')->name('admin.type_auction.edit');
Route::put(__('route_admin.admin_types_auction_update').'{id}', 'AdminTypeAuctionController@update')->name('admin.type_auction.update');
Route::delete(__('route_admin.admin_types_auction_delete').'{id}', 'AdminTypeAuctionController@destroy')->name('admin.type_auction.delete');
/* ROUTE ADMIN TYPES EVENT */
Route::get(__('route_admin.admin_types_event'), 'AdminTypeEventController@index')->name('admin.type_event');
Route::get(__('route_admin.admin_types_event_show').'{id}', 'AdminTypeEventController@show')->name('admin.type_event.show');
Route::get(__('route_admin.admin_types_event_new'), 'AdminTypeEventController@create')->name('admin.type_event.new');
Route::post(__('route_admin.admin_types_event_store'), 'AdminTypeEventController@store')->name('admin.type_event.store');
Route::get(__('route_admin.admin_types_event_edit').'{id}', 'AdminTypeEventController@edit')->name('admin.type_event.edit');
Route::put(__('route_admin.admin_types_event_update').'{id}', 'AdminTypeEventController@update')->name('admin.type_event.update');
Route::delete(__('route_admin.admin_types_event_delete').'{id}', 'AdminTypeEventController@destroy')->name('admin.type_event.delete');
/* ROUTE ADMIN TYPES IDENTIFICATION */
Route::get(__('route_admin.admin_types_identification'), 'AdminTypeIdentificationController@index')->name('admin.type_identification');
Route::get(__('route_admin.admin_types_identification_show').'{id}', 'AdminTypeIdentificationController@show')->name('admin.type_identification.show');
Route::get(__('route_admin.admin_types_identification_new'), 'AdminTypeIdentificationController@create')->name('admin.type_identification.new');
Route::post(__('route_admin.admin_types_identification_store'), 'AdminTypeIdentificationController@store')->name('admin.type_identification.store');
Route::get(__('route_admin.admin_types_identification_edit').'{id}', 'AdminTypeIdentificationController@edit')->name('admin.type_identification.edit');
Route::put(__('route_admin.admin_types_identification_update').'{id}', 'AdminTypeIdentificationController@update')->name('admin.type_identification.update');
Route::delete(__('route_admin.admin_types_identification_delete').'{id}', 'AdminTypeIdentificationController@destroy')->name('admin.type_identification.delete');
/* ROUTE ADMIN TYPES PAYMENT */
Route::get(__('route_admin.admin_types_payment'), 'AdminTypePaymentController@index')->name('admin.type_payment');
Route::get(__('route_admin.admin_types_payment_show').'{id}', 'AdminTypePaymentController@show')->name('admin.type_payment.show');
Route::get(__('route_admin.admin_types_payment_new'), 'AdminTypePaymentController@create')->name('admin.type_payment.new');
Route::post(__('route_admin.admin_types_payment_store'), 'AdminTypePaymentController@store')->name('admin.type_payment.store');
Route::get(__('route_admin.admin_types_payment_edit').'{id}', 'AdminTypePaymentController@edit')->name('admin.type_payment.edit');
Route::put(__('route_admin.admin_types_payment_update').'{id}', 'AdminTypePaymentController@update')->name('admin.type_payment.update');
Route::delete(__('route_admin.admin_types_payment_delete').'{id}', 'AdminTypePaymentController@destroy')->name('admin.type_payment.delete');
/* ROUTE ADMIN TYPES SHIPPING */
Route::get(__('route_admin.admin_types_shipping'), 'AdminTypeShippingController@index')->name('admin.type_shipping');
Route::get(__('route_admin.admin_types_shipping_show').'{id}', 'AdminTypeShippingController@show')->name('admin.type_shipping.show');
Route::get(__('route_admin.admin_types_shipping_new'), 'AdminTypeShippingController@create')->name('admin.type_shipping.new');
Route::post(__('route_admin.admin_types_shipping_store'), 'AdminTypeShippingController@store')->name('admin.type_shipping.store');
Route::get(__('route_admin.admin_types_shipping_edit').'{id}', 'AdminTypeShippingController@edit')->name('admin.type_shipping.edit');
Route::put(__('route_admin.admin_types_shipping_update').'{id}', 'AdminTypeShippingController@update')->name('admin.type_shipping.update');
Route::delete(__('route_admin.admin_types_shipping_delete').'{id}', 'AdminTypeShippingController@destroy')->name('admin.type_shipping.delete');
/* ROUTE ADMIN TYPES STORE  */
Route::get(__('route_admin.admin_types_store'), 'AdminTypeStoreController@index')->name('admin.type_store');
Route::get(__('route_admin.admin_types_store_show').'{id}', 'AdminTypeStoreController@show')->name('admin.type_store.show');
Route::get(__('route_admin.admin_types_store_new'), 'AdminTypeStoreController@create')->name('admin.type_store.new');
Route::post(__('route_admin.admin_types_store_store'), 'AdminTypeStoreController@store')->name('admin.type_store.store');
Route::get(__('route_admin.admin_types_store_edit').'{id}', 'AdminTypeStoreController@edit')->name('admin.type_store.edit');
Route::put(__('route_admin.admin_types_store_update').'{id}', 'AdminTypeStoreController@update')->name('admin.type_store.update');
Route::delete(__('route_admin.admin_types_store_delete').'{id}', 'AdminTypeStoreController@destroy')->name('admin.type_store.delete');
/* ROUTE ADMIN TYPES TRANSACTION */
Route::get(__('route_admin.admin_types_transaction'), 'AdminTypeTransactionController@index')->name('admin.type_transaction');
Route::get(__('route_admin.admin_types_transaction_show').'{id}', 'AdminTypeTransactionController@show')->name('admin.type_transaction.show');
Route::get(__('route_admin.admin_types_transaction_new'), 'AdminTypeTransactionController@create')->name('admin.type_transaction.new');
Route::post(__('route_admin.admin_types_transaction_store'), 'AdminTypeTransactionController@store')->name('admin.type_transaction.store');
Route::get(__('route_admin.admin_types_transaction_edit').'{id}', 'AdminTypeTransactionController@edit')->name('admin.type_transaction.edit');
Route::put(__('route_admin.admin_types_transaction_update').'{id}', 'AdminTypeTransactionController@update')->name('admin.type_transaction.update');
Route::delete(__('route_admin.admin_types_transaction_delete').'{id}', 'AdminTypeTransactionController@destroy')->name('admin.type_transaction.delete');
/* ROUTE ADMIN ADS BEACONS */
Route::get(__('route_admin.admin_ads_beacon'), 'AdminUserAdsBeaconController@index')->name('admin.ads_beacon');
Route::get(__('route_admin.admin_ads_beacon_show').'{id}', 'AdminUserAdsBeaconController@show')->name('admin.ads_beacon.show');
Route::get(__('route_admin.admin_ads_beacon_new'), 'AdminUserAdsBeaconController@create')->name('admin.ads_beacon.new');
Route::post(__('route_admin.admin_ads_beacon_store'), 'AdminUserAdsBeaconController@store')->name('admin.ads_beacon.store');
Route::get(__('route_admin.admin_ads_beacon_edit').'{id}', 'AdminUserAdsBeaconController@edit')->name('admin.ads_beacon.edit');
Route::put(__('route_admin.admin_ads_beacon_update').'{id}', 'AdminUserAdsBeaconController@update')->name('admin.ads_beacon.update');
Route::delete(__('route_admin.admin_ads_beacon_delete').'{id}', 'AdminUserAdsBeaconController@destroy')->name('admin.ads_beacon.delete');
/* ROUTE ADMIN ADS GEOLOCATION */
Route::get(__('route_admin.admin_ads_geolocation'), 'AdminUserAdsGeolocationController@index')->name('admin.ads_geolocation');
Route::get(__('route_admin.admin_ads_geolocation_show').'{id}', 'AdminUserAdsGeolocationController@show')->name('admin.ads_geolocation.show');
Route::get(__('route_admin.admin_ads_geolocation_new'), 'AdminUserAdsGeolocationController@create')->name('admin.ads_geolocation.new');
Route::post(__('route_admin.admin_ads_geolocation_store'), 'AdminUserAdsGeolocationController@store')->name('admin.ads_geolocation.store');
Route::get(__('route_admin.admin_ads_geolocation_edit').'{id}', 'AdminUserAdsGeolocationController@edit')->name('admin.ads_geolocation.edit');
Route::put(__('route_admin.admin_ads_geolocation_update').'{id}', 'AdminUserAdsGeolocationController@update')->name('admin.ads_geolocation.update');
Route::delete(__('route_admin.admin_ads_geolocation_delete').'{id}', 'AdminUserAdsGeolocationController@destroy')->name('admin.ads_geolocation.delete');
/* ROUTE ADMIN ADS WEB */
Route::get(__('route_admin.admin_ads_web'), 'AdminUserAdsWebController@index')->name('admin.ads_web');
Route::get(__('route_admin.admin_ads_web_show').'{id}', 'AdminUserAdsWebController@show')->name('admin.ads_web.show');
Route::get(__('route_admin.admin_ads_web_new'), 'AdminUserAdsWebController@create')->name('admin.ads_web.new');
Route::post(__('route_admin.admin_ads_web_store'), 'AdminUserAdsWebController@store')->name('admin.ads_web.store');
Route::get(__('route_admin.admin_ads_web_edit').'{id}', 'AdminUserAdsWebController@edit')->name('admin.ads_web.edit');
Route::put(__('route_admin.admin_ads_web_update').'{id}', 'AdminUserAdsWebController@update')->name('admin.ads_web.update');
Route::delete(__('route_admin.admin_ads_web_delete').'{id}', 'AdminUserAdsWebController@destroy')->name('admin.ads_web.delete');
/* ROUTE ADMIN ADMIN USERS CLASSIFIED */
Route::get(__('route_admin.admin_user_classified'), 'AdminUserClassifiedController@index')->name('admin.user_classified');
Route::get(__('route_admin.admin_user_classified_show').'{id}', 'AdminUserClassifiedController@show')->name('admin.user_classified.show');
Route::get(__('route_admin.admin_user_classified_new'), 'AdminUserClassifiedController@create')->name('admin.user_classified.new');
Route::post(__('route_admin.admin_user_classified_store'), 'AdminUserClassifiedController@store')->name('admin.user_classified.store');
Route::get(__('route_admin.admin_user_classified_edit').'{id}', 'AdminUserClassifiedController@edit')->name('admin.user_classified.edit');
Route::put(__('route_admin.admin_user_classified_update').'{id}', 'AdminUserClassifiedController@update')->name('admin.user_classified.update');
Route::delete(__('route_admin.admin_user_classified_delete').'{id}', 'AdminUserClassifiedController@destroy')->name('admin.user_classified.delete');
/* ROUTE ADMIN ADMIN USERS */
Route::get(__('route_admin.admin_users'), 'AdminUserController@index')->name('admin.users');
Route::get(__('route_admin.admin_users_show').'{id}', 'AdminUserController@show')->name('admin.users.show');
Route::get(__('route_admin.admin_users_new'), 'AdminUserController@create')->name('admin.users.new');
Route::post(__('route_admin.admin_users_store'), 'AdminUserController@store')->name('admin.users.store');
Route::get(__('route_admin.admin_users_edit').'{id}', 'AdminUserController@edit')->name('admin.users.edit');
Route::put(__('route_admin.admin_users_update').'{id}', 'AdminUserController@update')->name('admin.users.update');
Route::delete(__('route_admin.admin_users_delete').'{id}', 'AdminUserController@destroy')->name('admin.users.delete');
/* ROUTE ADMIN ADMIN USERS GENDER */
Route::get(__('route_admin.admin_user_gender'), 'AdminUserGenderController@index')->name('admin.user_gender');
Route::get(__('route_admin.admin_user_gender_show').'{id}', 'AdminUserGenderController@show')->name('admin.user_gender.show');
Route::get(__('route_admin.admin_user_gender_new'), 'AdminUserGenderController@create')->name('admin.user_gender.new');
Route::post(__('route_admin.admin_user_gender_store'), 'AdminUserGenderController@store')->name('admin.user_gender.store');
Route::get(__('route_admin.admin_user_gender_edit').'{id}', 'AdminUserGenderController@edit')->name('admin.user_gender.edit');
Route::put(__('route_admin.admin_user_gender_update').'{id}', 'AdminUserGenderController@update')->name('admin.user_gender.update');
Route::delete(__('route_admin.admin_user_gender_delete').'{id}', 'AdminUserGenderController@destroy')->name('admin.user_gender.delete');
/* ROUTE ADMIN ADMIN USERS NEWS */
Route::get(__('route_admin.admin_user_news'), 'AdminUserNewController@index')->name('admin.user_news');
Route::get(__('route_admin.admin_user_news_show').'{id}', 'AdminUserNewController@show')->name('admin.user_news.show');
Route::get(__('route_admin.admin_user_news_new'), 'AdminUserNewController@create')->name('admin.user_news.new');
Route::post(__('route_admin.admin_user_news_store'), 'AdminUserNewController@store')->name('admin.user_news.store');
Route::get(__('route_admin.admin_user_news_edit').'{id}', 'AdminUserNewController@edit')->name('admin.user_news.edit');
Route::put(__('route_admin.admin_user_news_update').'{id}', 'AdminUserNewController@update')->name('admin.user_news.update');
Route::delete(__('route_admin.admin_user_news_delete').'{id}', 'AdminUserNewController@destroy')->name('admin.user_news.delete');
/* ROUTE ADMIN ADMIN USERS PLANS */
Route::get(__('route_admin.admin_user_plan'), 'AdminUserPlanController@index')->name('admin.user_plan');
Route::get(__('route_admin.admin_user_plan_show').'{id}', 'AdminUserPlanController@show')->name('admin.user_plan.show');
Route::get(__('route_admin.admin_user_plan_new'), 'AdminUserPlanController@create')->name('admin.user_plan.new');
Route::post(__('route_admin.admin_user_plan_store'), 'AdminUserPlanController@store')->name('admin.user_plan.store');
Route::get(__('route_admin.admin_user_plan_edit').'{id}', 'AdminUserPlanController@edit')->name('admin.user_plan.edit');
Route::put(__('route_admin.admin_user_plan_update').'{id}', 'AdminUserPlanController@update')->name('admin.user_plan.update');
Route::delete(__('route_admin.admin_user_plan_delete').'{id}', 'AdminUserPlanController@destroy')->name('admin.user_plan.delete');
/* ROUTE ADMIN ADMIN USERS RELATIONSHIP */
Route::get(__('route_admin.admin_user_relationship'), 'AdminUserRelationshipController@index')->name('admin.user_relationship');
Route::get(__('route_admin.admin_user_relationship_show').'{id}', 'AdminUserRelationshipController@show')->name('admin.user_relationship.show');
Route::get(__('route_admin.admin_user_relationship_new'), 'AdminUserRelationshipController@create')->name('admin.user_relationship.new');
Route::post(__('route_admin.admin_user_relationship_store'), 'AdminUserRelationshipController@store')->name('admin.user_relationship.store');
Route::get(__('route_admin.admin_user_relationship_edit').'{id}', 'AdminUserRelationshipController@edit')->name('admin.user_relationship.edit');
Route::put(__('route_admin.admin_user_relationship_update').'{id}', 'AdminUserRelationshipController@update')->name('admin.user_relationship.update');
Route::delete(__('route_admin.admin_user_relationship_delete').'{id}', 'AdminUserRelationshipController@destroy')->name('admin.user_relationship.delete');
/* ROUTE ADMIN ADMIN USERS STORES BRANCH */
Route::get(__('route_admin.admin_user_store_branch'), 'AdminUserStoreBranchController@index')->name('admin.user_store_branch');
Route::get(__('route_admin.admin_user_store_branch_show').'{id}', 'AdminUserStoreBranchController@show')->name('admin.user_store_branch.show');
Route::get(__('route_admin.admin_user_store_branch_new'), 'AdminUserStoreBranchController@create')->name('admin.user_store_branch.new');
Route::post(__('route_admin.admin_user_store_branch_store'), 'AdminUserStoreBranchController@store')->name('admin.user_store_branch.store');
Route::get(__('route_admin.admin_user_store_branch_edit').'{id}', 'AdminUserStoreBranchController@edit')->name('admin.user_store_branch.edit');
Route::put(__('route_admin.admin_user_store_branch_update').'{id}', 'AdminUserStoreBranchController@update')->name('admin.user_store_branch.update');
Route::delete(__('route_admin.admin_user_store_branch_delete').'{id}', 'AdminUserStoreBranchController@destroy')->name('admin.user_store_branch.delete');
/* ROUTE ADMIN ADMIN USERS STORES */
Route::get(__('route_admin.admin_user_store'), 'AdminUserStoreController@index')->name('admin.user_store');
Route::get(__('route_admin.admin_user_store_show').'{id}', 'AdminUserStoreController@show')->name('admin.user_store.show');
Route::get(__('route_admin.admin_user_store_new'), 'AdminUserStoreController@create')->name('admin.user_store.new');
Route::post(__('route_admin.admin_user_store_store'), 'AdminUserStoreController@store')->name('admin.user_store.store');
Route::get(__('route_admin.admin_user_store_edit').'{id}', 'AdminUserStoreController@edit')->name('admin.user_store.edit');
Route::put(__('route_admin.admin_user_store_update').'{id}', 'AdminUserStoreController@update')->name('admin.user_store.update');
Route::delete(__('route_admin.admin_user_store_delete').'{id}', 'AdminUserStoreController@destroy')->name('admin.user_store.delete');
/* ROUTE ADMIN ADMIN USERS STORES CUPONS */
Route::get(__('route_admin.admin_user_store_cupon'), 'AdminUserStoreCuponController@index')->name('admin.user_store_cupon');
Route::get(__('route_admin.admin_user_store_cupon_show').'{id}', 'AdminUserStoreCuponController@show')->name('admin.user_store_cupon.show');
Route::get(__('route_admin.admin_user_store_cupon_new'), 'AdminUserStoreCuponController@create')->name('admin.user_store_cupon.new');
Route::post(__('route_admin.admin_user_store_cupon_store'), 'AdminUserStoreCuponController@store')->name('admin.user_store_cupon.store');
Route::get(__('route_admin.admin_user_store_cupon_edit').'{id}', 'AdminUserStoreCuponController@edit')->name('admin.user_store_cupon.edit');
Route::put(__('route_admin.admin_user_store_cupon_update').'{id}', 'AdminUserStoreCuponController@update')->name('admin.user_store_cupon.update');
Route::delete(__('route_admin.admin_user_store_cupon_delete').'{id}', 'AdminUserStoreCuponController@destroy')->name('admin.user_store_cupon.delete');
/* ROUTE ADMIN ADMIN USERS STORES EVENTS */
Route::get(__('route_admin.admin_user_store_event'), 'AdminUserStoreEventController@index')->name('admin.user_store_event');
Route::get(__('route_admin.admin_user_store_event_show').'{id}', 'AdminUserStoreEventController@show')->name('admin.user_store_event.show');
Route::get(__('route_admin.admin_user_store_event_new'), 'AdminUserStoreEventController@create')->name('admin.user_store_event.new');
Route::post(__('route_admin.admin_user_store_event_store'), 'AdminUserStoreEventController@store')->name('admin.user_store_event.store');
Route::get(__('route_admin.admin_user_store_event_edit').'{id}', 'AdminUserStoreEventController@edit')->name('admin.user_store_event.edit');
Route::put(__('route_admin.admin_user_store_event_update').'{id}', 'AdminUserStoreEventController@update')->name('admin.user_store_event.update');
Route::delete(__('route_admin.admin_user_store_event_delete').'{id}', 'AdminUserStoreEventController@destroy')->name('admin.user_store_event.delete');
/* ROUTE ADMIN ADMIN USERS STORES PRODUCTS */
Route::get(__('route_admin.admin_user_store_product'), 'AdminUserStoreProductController@index')->name('admin.user_store_product');
Route::get(__('route_admin.admin_user_store_product_show').'{id}', 'AdminUserStoreProductController@show')->name('admin.user_store_product.show');
Route::get(__('route_admin.admin_user_store_product_new'), 'AdminUserStoreProductController@create')->name('admin.user_store_product.new');
Route::post(__('route_admin.admin_user_store_product_store'), 'AdminUserStoreProductController@store')->name('admin.user_store_product.store');
Route::get(__('route_admin.admin_user_store_product_edit').'{id}', 'AdminUserStoreProductController@edit')->name('admin.user_store_product.edit');
Route::put(__('route_admin.admin_user_store_product_update').'{id}', 'AdminUserStoreProductController@update')->name('admin.user_store_product.update');
Route::delete(__('route_admin.admin_user_store_product_delete').'{id}', 'AdminUserStoreProductController@destroy')->name('admin.user_store_product.delete');
/* ROUTE ADMIN ADMIN USERS TESTIMONIES */
Route::get(__('route_admin.admin_user_testimonio'), 'AdminUserTestimonialController@index')->name('admin.user_testimonial');
Route::get(__('route_admin.admin_user_testimonio_show').'{id}', 'AdminUserTestimonialController@show')->name('admin.user_testimonial.show');
Route::get(__('route_admin.admin_user_testimonio_new'), 'AdminUserTestimonialController@create')->name('admin.user_testimonial.new');
Route::post(__('route_admin.admin_user_testimonio_store'), 'AdminUserTestimonialController@store')->name('admin.user_testimonial.store');
Route::get(__('route_admin.admin_user_testimonio_edit').'{id}', 'AdminUserTestimonialController@edit')->name('admin.user_testimonial.edit');
Route::put(__('route_admin.admin_user_testimonio_update').'{id}', 'AdminUserTestimonialController@update')->name('admin.user_testimonial.update');
Route::delete(__('route_admin.admin_user_testimonio_delete').'{id}', 'AdminUserTestimonialController@destroy')->name('admin.user_testimonial.delete');
/* ROUTE ADMIN ADMIN CONFIG WEBS */
Route::get(__('route_admin.admin_config_website'), 'AdminWebSiteController@index')->name('admin.config_website');
Route::get(__('route_admin.admin_config_website_show').'{id}', 'AdminWebSiteController@show')->name('admin.config_website.show');
Route::get(__('route_admin.admin_config_website_new'), 'AdminWebSiteController@create')->name('admin.config_website.new');
Route::post(__('route_admin.admin_config_website_store'), 'AdminWebSiteController@store')->name('admin.config_website.store');
Route::get(__('route_admin.admin_config_website_edit').'{id}', 'AdminWebSiteController@edit')->name('admin.config_website.edit');
Route::put(__('route_admin.admin_config_website_update').'{id}', 'AdminWebSiteController@update')->name('admin.config_website.update');
Route::delete(__('route_admin.admin_config_website_delete').'{id}', 'AdminWebSiteController@destroy')->name('admin.config_website.delete');
/*
|--------------------------------------------------------------------------
| Web Routes save currency
|--------------------------------------------------------------------------
|
| Ruta para guardar valores de moneda del dia
|
*/
Route::post('new-currnecy', 'CurrencyController@store')->name('new.currency');
/*
|--------------------------------------------------------------------------
| Web Routes load data combos
|--------------------------------------------------------------------------
|
| Rutas para carga de los combos por ajax
|
*/
/* ROUTE COMBO COUNTRY */
Route::get('load-state/{id}', 'AdminLocaleStateController@getStates');
/* ROUTE COMBO STATE */
Route::get('load-city/{id}', 'AdminLocaleCityController@getCity');
/* ROUTE COMBO CATEGORIE */
Route::get('load-categorie/{id}', 'AdminCgCategorieController@getCategories');
/* ROUTE COMBO SUB CATEGORIE */
Route::get('load-subcategorie/{id}', 'AdminCgSubCategorieController@getSubCategories');
/* ROUTE COMBO BRANCH */
Route::get('load-branch/{id}', 'AdminUserStoreBranchController@getBranch');
/* ROUTE ADD TO CART */
Route::post('add-to-cart', 'ProfileUserCartController@itemAdd')->name('add.itemcart');


