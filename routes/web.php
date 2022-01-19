<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Dashboard\DashboardDefault;
use App\Http\Livewire\Dashboard\Vr\VirtualReality;
use App\Http\Livewire\Dashboard\Vr\VirtualInfo;
use App\Http\Livewire\Dashboard\Automotive;
use App\Http\Livewire\Dashboard\SmartHome;
use App\Http\Livewire\Dashboard\Crm;

use App\Http\Livewire\Pages\Profile\Overview;
use App\Http\Livewire\Pages\Profile\AllProjects;
use App\Http\Livewire\Pages\Profile\Teams;

use App\Http\Livewire\Pages\Users\Reports;
use App\Http\Livewire\Pages\Users\NewUser;

use App\Http\Livewire\Pages\Account\Settings;
use App\Http\Livewire\Pages\Account\Billing;
use App\Http\Livewire\Pages\Account\Invoice;
use App\Http\Livewire\Pages\Account\Security;

use App\Http\Livewire\Pages\Projects\General;
use App\Http\Livewire\Pages\Projects\Timeline;
use App\Http\Livewire\Pages\Projects\NewProject;

use App\Http\Livewire\Pages\Pricing;
use App\Http\Livewire\Pages\Rtl;
use App\Http\Livewire\Pages\Widgets;

use App\Http\Livewire\Applications\Analytics;
use App\Http\Livewire\Applications\Calendar;
use App\Http\Livewire\Applications\Datatables;
use App\Http\Livewire\Applications\Kanban;
use App\Http\Livewire\Applications\Wizard;

use App\Http\Livewire\Ecommerce\EcommerceOverview;
use App\Http\Livewire\Ecommerce\Referral;

use App\Http\Livewire\Ecommerce\Products\EditProduct;
use App\Http\Livewire\Ecommerce\Products\NewProduct as ThemeNewProduct;
use App\Http\Livewire\Ecommerce\Products\ProductPage;
use App\Http\Livewire\Ecommerce\Products\ProductsList;

use App\Http\Livewire\Ecommerce\Orders\OrderDetails;
use App\Http\Livewire\Ecommerce\Orders\OrderList;

use App\Http\Livewire\Authentication\Error\Error404;
use App\Http\Livewire\Authentication\Error\Error500;

use App\Http\Livewire\Authentication\Lock\LockBasic;
use App\Http\Livewire\Authentication\Lock\LockCover;
use App\Http\Livewire\Authentication\Lock\LockIllustration;

use App\Http\Livewire\Authentication\Reset\ResetBasic;
use App\Http\Livewire\Authentication\Reset\ResetCover;
use App\Http\Livewire\Authentication\Reset\ResetIllustration;

use App\Http\Livewire\Authentication\Signin\SigninBasic;
use App\Http\Livewire\Authentication\Signin\SigninCover;
use App\Http\Livewire\Authentication\Signin\SigninIllustration;

use App\Http\Livewire\Authentication\Signup\SignupBasic;
use App\Http\Livewire\Authentication\Signup\SignupCover;
use App\Http\Livewire\Authentication\Signup\SignupIllustration;

use App\Http\Livewire\Authentication\Verification\VerificationBasic;
use App\Http\Livewire\Authentication\Verification\VerificationCover;
use App\Http\Livewire\Authentication\Verification\VerificationIllustration;

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Logout;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;

use App\Http\Livewire\LaravelExamples\UsersManagement;
use App\Http\Livewire\LaravelExamples\EditUser;
use App\Http\Livewire\LaravelExamples\LaravelNewUser;
use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\RolesManagement;
use App\Http\Livewire\LaravelExamples\EditRole;
use App\Http\Livewire\LaravelExamples\NewRole;
use App\Http\Livewire\LaravelExamples\CategoryManagement;
use App\Http\Livewire\LaravelExamples\NewCategory;
use App\Http\Livewire\LaravelExamples\EditCategory;
use App\Http\Livewire\LaravelExamples\TagsManagement;
use App\Http\Livewire\LaravelExamples\NewTag;
use App\Http\Livewire\LaravelExamples\EditTag;
use App\Http\Livewire\LaravelExamples\ItemsManagement;
use App\Http\Livewire\LaravelExamples\NewItem;
use App\Http\Livewire\LaravelExamples\EditItem;
use App\Http\Livewire\LaravelExamples\Error\PageError;


// Lagos
use App\Http\Livewire\LagosBusiness\BusinessInformation;
use App\Http\Livewire\LagosBusiness\Review\ReviewList;
use App\Http\Livewire\LagosBusiness\Review\ReviewDetail;

use App\Http\Livewire\LagosBusiness\Product\ProductManagement;
use App\Http\Livewire\LagosBusiness\Product\ProductEdit;
use App\Http\Livewire\LagosBusiness\Product\NewProduct;

use App\Http\Livewire\LagosBusiness\Service\ServiceManagement;
use App\Http\Livewire\LagosBusiness\Service\ServiceEdit;
use App\Http\Livewire\LagosBusiness\Service\NewService;

use App\Http\Livewire\LagosBusiness\Amenity\AmenityManagement;
use App\Http\Livewire\LagosBusiness\Amenity\AmenityEdit;
use App\Http\Livewire\LagosBusiness\Amenity\NewAmenity;

use App\Http\Livewire\Admin\Business\BusinessList;
use App\Http\Livewire\Admin\Business\BusinessDetail;
use App\Http\Livewire\Admin\Blog\NewBlog;
use App\Http\Livewire\Admin\Blog\BlogList;
use App\Http\Livewire\Admin\Blog\BlogEdit;
use App\Http\Livewire\Admin\BusinessType\NewBusinessType;
use App\Http\Livewire\Admin\BusinessType\BusinessTypeList;
use App\Http\Livewire\Admin\BusinessType\BusinessTypeEdit;

use App\Http\Controllers\SocialController;
use App\Http\Controllers\UsersideController;
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

Route::get('/', Login::class)->name('login');

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::get('/auth/google', [SocialController::class, 'googleRedirect']);
Route::get('/callback', [SocialController::class, 'loginWithGoogle']);
Route::get('/auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('/auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

Route::post('/logout', [Logout::class, 'logout']);



Route::middleware('auth')->group(function () {
    Route::get('/lagos-information', BusinessInformation::class)->name('businessinformation')->middleware('business');
    Route::get('/lagos-review-list/{id?}', ReviewList::class)->name('review-list'); // admin
    Route::get('/lagos-review-detail/{id}', ReviewDetail::class)->name('review-detail');

    Route::get('/lagos-product-management', ProductManagement::class)->name('product-management');
    Route::get('/lagos-product-edit/{id}', ProductEdit::class)->name('product-edit');
    Route::get('/lagos-new-product', NewProduct::class)->name('product-new');

    Route::get('/lagos-service-management', ServiceManagement::class)->name('service-management');
    Route::get('/lagos-service-edit/{id}', ServiceEdit::class)->name('service-edit');
    Route::get('/lagos-new-service', NewService::class)->name('service-new');

    Route::get('/lagos-amenity-management', AmenityManagement::class)->name('amenity-management');
    Route::get('/lagos-amenity-edit/{id}', AmenityEdit::class)->name('amenity-edit');
    Route::get('/lagos-new-amenity', NewAmenity::class)->name('amenity-new');

    Route::get('/admin-business-list', BusinessList::class)->name('admin-business-list');
    Route::get('/admin-business-detail/{id}', BusinessDetail::class)->name('admin-business-detail');
    Route::get('/admin-businesstype-list', BusinessTypeList::class)->name('admin-businesstype-list');
    Route::get('/admin-businesstype-new', NewBusinessType::class)->name('admin-businesstype-new');
    Route::get('/admin-businesstype-edit/{id}', BusinessTypeEdit::class)->name('admin-businesstype-edit');
    Route::get('/admin-blog-list', BlogList::class)->name('admin-blog-list');
    Route::get('/admin-blog-new', NewBlog::class)->name('admin-blog-new');
    Route::get('/admin-blog-edit/{id}', BlogEdit::class)->name('admin-blog-edit');
    Route::get('/admin-category-management', CategoryManagement::class)->name('category-management')->middleware('admin');
    Route::get('/admin-new-category', NewCategory::class)->name('new-category');
    Route::get('/admin-edit-category/{id}', EditCategory::class)->name('edit-category');


    //Theme Routes
    Route::get('/dashboard-default', DashboardDefault::class)->name('default');
    Route::get('/dashboard-virtual-reality', VirtualReality::class)->name('virtual-reality');
    Route::get('/dashboard-virtual-info', VirtualInfo::class)->name('virtual-info');
    Route::get('/dashboard-automotive', Automotive::class)->name('automotive');
    Route::get('/dashboard-smart-home', SmartHome::class)->name('smart-home');
    Route::get('/dashboard-crm', Crm::class)->name('crm');

    Route::get('/pages-profile-overview', Overview::class)->name('overview');
    Route::get('/pages-profile-all-projects', AllProjects::class)->name('all-projects');
    Route::get('/pages-profile-teams', Teams::class)->name('teams');

    Route::get('/pages-users-reports', Reports::class)->name('reports');
    Route::get('/pages-users-new', NewUser::class)->name('new-user');

    Route::get('/pages-account-settings', Settings::class)->name('settings');
    Route::get('/pages-account-billing', Billing::class)->name('billing');
    Route::get('/pages-account-invoice', Invoice::class)->name('invoice');
    Route::get('/pages-account-security', Security::class)->name('security');

    Route::get('/pages-projects-general', General::class)->name('general');
    Route::get('/pages-projects-timeline', Timeline::class)->name('timeline');
    Route::get('/pages-projects-new-project', NewProject::class)->name('new-project');

    Route::get('/pages-pricing', Pricing::class)->name('pricing');
    Route::get('/pages-widgets', Widgets::class)->name('widgets');
    Route::get('/pages-rtl', Rtl::class)->name('rtl');

    Route::get('/applications-analytics', Analytics::class)->name('analytics');
    Route::get('/applications-calendar', Calendar::class)->name('calendar');
    Route::get('/applications-datatables', Datatables::class)->name('datatables');
    Route::get('/applications-kanban', Kanban::class)->name('kanban');
    Route::get('/applications-wizard', Wizard::class)->name('wizard');

    Route::get('/ecommerce-overview', EcommerceOverview::class)->name('ecommerce-overview');
    Route::get('/ecommerce-referral', Referral::class)->name('referral');

    Route::get('/ecommerce-products-edit-product', EditProduct::class)->name('edit-product');
    Route::get('/ecommerce-products-new-product', ThemeNewProduct::class)->name('new-product');
    Route::get('/ecommerce-products-product-page', ProductPage::class)->name('product-page');
    Route::get('/ecommerce-products-products-list', ProductsList::class)->name('products-list');

    Route::get('/ecommerce-orders-order-list', OrderList::class)->name('order-list');
    Route::get('/ecommerce-orders-order-details', OrderDetails::class)->name('order-details');

    Route::get('/authentication-error404', Error404::class)->name('404');
    Route::get('/authentication-error500', Error500::class)->name('500');

    Route::get('/authentication-lock-basic', LockBasic::class)->name('lock-basic');
    Route::get('/authentication-lock-cover', LockCover::class)->name('lock-cover');
    Route::get('/authentication-lock-illustration', LockIllustration::class)->name('lock-illustration');

    Route::get('/authentication-reset-basic', ResetBasic::class)->name('reset-basic');
    Route::get('/authentication-reset-cover', ResetCover::class)->name('reset-cover');
    Route::get('/authentication-reset-illustration', ResetIllustration::class)->name('reset-illustration');

    Route::get('/authentication-signin-basic', SigninBasic::class)->name('signin-basic');
    Route::get('/authentication-signin-cover', SigninCover::class)->name('signin-cover');
    Route::get('/authentication-signin-illustration', SigninIllustration::class)->name('signin-illustration');

    Route::get('/authentication-signup-basic', SignupBasic::class)->name('signup-basic');
    Route::get('/authentication-signup-cover', SignupCover::class)->name('signup-cover');
    Route::get('/authentication-signup-illustration', SignupIllustration::class)->name('signup-illustration');

    Route::get('/authentication-verification-basic', VerificationBasic::class)->name('verification-basic');
    Route::get('/authentication-verification-cover', VerificationCover::class)->name('verification-cover');
    Route::get('/authentication-verification-illustration', VerificationIllustration::class)->name('verification-illustration');

    Route::get('/laravel-users-management', UsersManagement::class)->name('users-management');
    Route::get('/laravel-edit-user/{id}', EditUser::class)->name('edit-user');

    Route::get('/laravel-new-user', LaravelNewUser::class)->name('laravel-new-user');
    Route::get('/laravel-roles-management', RolesManagement::class)->name('roles-management');
    Route::get('/laravel-edit-role/{id}', EditRole::class)->name('edit-role');
    Route::get('/laravel-new-role', NewRole::class)->name('new-role');
    Route::get('/laravel-tags-management', TagsManagement::class)->name('tags-management');
    Route::get('/laravel-new-tag', NewTag::class)->name('new-tag');
    Route::get('/laravel-edit-tag/{id}', EditTag::class)->name('edit-tag');
    Route::get('/laravel-items-management', ItemsManagement::class)->name('items-management');
    Route::get('/laravel-new-item', NewItem::class)->name('new-item');
    Route::get('/laravel-edit-item/{id}', EditItem::class)->name('edit-item');
    Route::get('/laravel-page-error', PageError::class)->name('page-error');

    Route::get('/favorite/read', [UsersideController::class, 'readFavorites']);
    Route::get('/favorite/detail/{param}', [UsersideController::class, 'favoriteDetails'])->name('favorite-detail');

    Route::get('/user-profile', [ProfileController::class, 'index'])->name('user-profile');
    Route::post('/user-profile/edit', [ProfileController::class, 'edit']);
    Route::post('/user-profile/photo', [ProfileController::class, 'uploadAvatar']);



    //review page
    Route::get('/visited', [UsersideController::class, 'visited'])->name('user-visited');
    Route::post('/visited/change-rating', [UsersideController::class, 'changeRating']);
    Route::post('/visited/page', [UsersideController::class, 'visitedPage']);
    Route::get('/review/add', [UsersideController::class, 'pageReview'])->name('user-add-review');
    Route::post('/review/add', [UsersideController::class, 'addReview']);
});

Route::get('/home', [UsersideController::class, 'pageHome'])->name('user-home');
Route::post('/home/more-categories', [UsersideController::class, 'moreCategories']);
Route::post('/home/search-business', [UsersideController::class, 'searchBusiness']);

//list page
Route::get('/list', [UsersideController::class, 'pageList'])->name('user-list');
Route::post('/list/favorite', [UsersideController::class, 'addFavorite']);
Route::post('/list/filter', [UsersideController::class, 'filterList']);

//detail page
Route::get('/detail/{id}', [UsersideController::class, 'pageDetail'])->name('user-detail');
