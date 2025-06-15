<?php

use App\Http\Controllers\WEB\BlogController;
use App\Http\Controllers\WEB\DestinationController;
use App\Http\Controllers\WEB\EventController;
use App\Http\Controllers\WEB\ImpactController;
use App\Http\Controllers\WEB\GalleryController;
use App\Http\Controllers\WEB\PostController;
use App\Http\Controllers\WEB\ProjectController;
use App\Http\Controllers\WEB\ResourceController;
use App\Http\Controllers\WEB\SafariController;
use App\Http\Controllers\WEB\SafetyController;
use App\Http\Controllers\WEB\SlideController;
use App\Http\Controllers\WEB\StoryController;
use App\Http\Controllers\WEB\TeamController;
use App\Http\Controllers\WEB\TestimonyController;
use App\Models\WEB\OurStory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

// Homepage Route
Route::group(['middleware' => ['web', 'checkblocked']], function () {
    Route::get('/', 'App\Http\Controllers\WelcomeController@welcome')->name('welcome');
    Route::get('/terms', 'App\Http\Controllers\TermsController@terms')->name('terms');

    Route::get('/about', [WelcomeController::class,'about'])->name('about');
    Route::get('/destinations', [WelcomeController::class,'destinations'])->name('destinations');
    Route::get('/destination/{id}/{title}', [WelcomeController::class,'destination'])->name('destination');

    Route::get('/safety', [WelcomeController::class,'safety'])->name('safety');

    Route::get('/safaris/{id}/{title}', [WelcomeController::class,'safaris'])->name('safaris');
    Route::get('/safaris/tour/{id}/{title}', [WelcomeController::class,'safari'])->name('safari');

    Route::get('/ourwork', [WelcomeController::class,'ourwork'])->name('ourwork');
    Route::get('/gallery', [WelcomeController::class,'gallery'])->name('gallery');
    Route::get('/contacts', [WelcomeController::class,'contacts'])->name('contacts');
    Route::get('/resources', [WelcomeController::class,'resources'])->name('resources');
    Route::get('/donate', [WelcomeController::class,'donate'])->name('donate');
    Route::get('/volunteer', [WelcomeController::class,'volunteer'])->name('volunteer');

//    Project
    Route::get('/projects', [WelcomeController::class,'projects'])->name('projects');
    Route::get('/project/{id}/{title}', [WelcomeController::class,'project'])->name('project');

//    Team Member
    Route::get('/about/member/{id}/{title}', [WelcomeController::class,'teamMember'])->name('team_member');

    //    Events
    Route::get('/coming_events', [EventController::class,'comingEvents'])->name('comingEvents');
    Route::get('/events', [WelcomeController::class,'events'])->name('events');
    Route::get('/event/{id}/{title}', [WelcomeController::class,'event'])->name('event');


    //    Posts
    Route::get('/blog', [WelcomeController::class,'posts'])->name('posts');
    Route::get('/blog/post/{id}/{title}', [WelcomeController::class,'post'])->name('post');

    //    Projects
    Route::get('/projects/nyota_microfinance', [ProjectController::class,'nyota'])->name('nyota');
    Route::get('/projects/yoicot_academy', [ProjectController::class,'academy'])->name('academy');
});

// Authentication Routes
Auth::routes();

// Public Routes
Route::group(['middleware' => ['web', 'activity', 'checkblocked']], function () {
    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'App\Http\Controllers\Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'App\Http\Controllers\Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'App\Http\Controllers\Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'App\Http\Controllers\Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'App\Http\Controllers\Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'App\Http\Controllers\Auth\SocialController@getSocialHandle']);

    // Route to for user to reactivate their user deleted account.
    Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'App\Http\Controllers\RestoreUserController@userReActivate']);
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {
    // Activation Routes
    Route::get('/activation-required', ['uses' => 'App\Http\Controllers\Auth\ActivateController@activationRequired'])->name('activation-required');
    // Route::get('/logout', ['uses' => 'App\Http\Controllers\Auth\LoginController@logout'])->name('logout');

//    Slides
    Route::get('/home/slides', [SlideController::class,'index'])->name('admin.slides');
    Route::post('/home/slides/create', [SlideController::class,'store'])->name('admin.slides.create');
    Route::post('/home/slides/show/{id}', [SlideController::class,'show'])->name('admin.slide.show');
    Route::get('/home/slides/edit/{id}', [SlideController::class,'edit'])->name('admin.slide.edit');
    Route::post('/home/slides/update/{id}', [SlideController::class,'update'])->name('admin.slide.update');
    Route::get('/home/slides/delete/{id}', [SlideController::class,'destroy'])->name('admin.slide.destroy');

//    Safety
    Route::get('/home/safety', [SafetyController::class,'index'])->name('admin.safety');
    Route::post('/home/safety/update', [SafetyController::class,'update'])->name('admin.update');

//    Gallery
    Route::get('/home/gallery', [GalleryController::class,'index'])->name('admin.gallery');
    Route::post('/home/gallery/store', [GalleryController::class,'store'])->name('admin.gallery.store');
    Route::get('/home/gallery/destroy/{id}', [GalleryController::class,'destroy'])->name('admin.gallery.destroy');

//    Team
    Route::get('/home/team', [TeamController::class,'index'])->name('admin.team');
    Route::post('/home/team/store', [TeamController::class,'store'])->name('admin.team.store');
    Route::post('/home/team/{id}/update', [TeamController::class,'update'])->name('admin.team.update');
    Route::get('/home/team/{id}/edit', [TeamController::class,'edit'])->name('admin.team.edit');
    Route::get('/home/team/{id}/destroy', [TeamController::class,'destroy'])->name('admin.team.destroy');

    //    Project
    Route::get('/home/projects', [ProjectController::class,'index'])->name('admin.projects');
    Route::post('/home/project/store', [ProjectController::class,'store'])->name('admin.project.store');
    Route::get('/home/project/edit/{id}', [ProjectController::class,'edit'])->name('admin.project.edit');
    Route::post('/home/project/update/{id}', [ProjectController::class,'update'])->name('admin.project.update');
    Route::get('/home/project/delete/{id}', [ProjectController::class,'destroy'])->name('admin.project.destroy');

    Route::get('/home/project/delete/image/{id}', [ProjectController::class,'destroyImage'])->name('admin.project.image.destroy');


    //  News Posts
    Route::get('/home/posts', [PostController::class,'index'])->name('admin.posts');
    Route::post('/home/post/store', [PostController::class,'store'])->name('admin.post.store');
    Route::get('/home/post/edit/{id}', [PostController::class,'edit'])->name('admin.post.edit');
    Route::post('/home/post/update/{id}', [PostController::class,'update'])->name('admin.post.update');
    Route::get('/home/post/delete/{id}', [PostController::class,'destroy'])->name('admin.post.destroy');

     //  News Impacts
     Route::get('/home/impacts', [ImpactController::class,'index'])->name('admin.impacts');
     Route::post('/home/impact/store', [ImpactController::class,'store'])->name('admin.impact.store');
     Route::get('/home/impact/edit/{id}', [ImpactController::class,'edit'])->name('admin.impact.edit');
     Route::post('/home/impact/update/{id}', [ImpactController::class,'update'])->name('admin.impact.update');
     Route::get('/home/impact/delete/{id}', [ImpactController::class,'destroy'])->name('admin.impact.destroy');

//    Events
    Route::get('/home/events', [EventController::class,'index'])->name('admin.events');
    Route::post('/home/events/store', [EventController::class,'store'])->name('admin.event.store');
    Route::get('/home/events/edit/{id}', [EventController::class,'edit'])->name('admin.event.edit');
    Route::post('/home/events/update/{id}', [EventController::class,'update'])->name('admin.event.update');
    Route::get('/home/events/delete/{id}', [EventController::class,'destroy'])->name('admin.event.destroy');
    Route::get('/home/events/delete/image/{id}', [EventController::class,'destroyImage'])->name('admin.event.image.destroy');

//    Event Speaker
    Route::post('/home/events/store/speaker', [EventController::class,'storeSpeaker'])->name('admin.event.store.speaker');
    Route::post('/home/events/store/speaker/{id}/update', [EventController::class,'updateSpeaker'])->name('admin.event.update.speaker');
    Route::get('/home/events/store/speaker/{id}/delete', [EventController::class,'destroySpeaker'])->name('admin.event.destroy.speaker');

    //    Destinations
    Route::get('/home/destinations', [DestinationController::class,'index'])->name('admin.destinations');
    Route::post('/home/destinations/store', [DestinationController::class,'store'])->name('admin.destination.store');
    Route::get('/home/destinations/{id}/edit', [DestinationController::class,'edit'])->name('admin.destination.edit');
    Route::post('/home/destinations/{id}/update', [DestinationController::class,'update'])->name('admin.destination.update');
    Route::get('/home/destinations/{id}/delete', [DestinationController::class,'destroy'])->name('admin.destination.destroy');
//    Attraction
    Route::post('/home/destination/attraction/store', [DestinationController::class,'storeAttraction'])->name('admin.destination.attraction.store');
    Route::post('/home/destination/attraction/{id}/update', [DestinationController::class,'updateAttraction'])->name('admin.destination.attraction.update');
    Route::get('/home/destination/attraction/{id}/delete', [DestinationController::class,'destroyAttraction'])->name('admin.destination.attraction.destroy');




    //    Safaris
    Route::get('/home/safaris', [SafariController::class,'index'])->name('admin.safaris');
    Route::post('/home/safaris/store', [SafariController::class,'store'])->name('admin.safari.store');
    Route::get('/home/safaris/edit/{id}', [SafariController::class,'edit'])->name('admin.safari.edit');
    Route::post('/home/safaris/update/{id}', [SafariController::class,'update'])->name('admin.safari.update');
    Route::get('/home/safaris/delete/{id}', [SafariController::class,'destroy'])->name('admin.safari.destroy');
    Route::get('/home/safaris/delete/image/{id}', [SafariController::class,'destroyImage'])->name('admin.safari.image.destroy');

//    Categories
    Route::get('/home/categories/categories', [EventController::class,'categories'])->name('admin.categories');
    Route::post('/home/categories/categories/store', [EventController::class,'storeCategory'])->name('admin.category.store');
    Route::post('/home/categories/categories/{id}}/update', [EventController::class,'updateCategory'])->name('admin.category.update');
    Route::get('/home/categories/categories/{id}/delete', [EventController::class,'deleteCategory'])->name('admin.category.destroy');

    //    Resources
    Route::get('/home/resources', [ResourceController::class,'index'])->name('admin.resources');
    Route::post('/home/resource/store', [ResourceController::class,'store'])->name('admin.resource.store');
    //Route::post('/download_file/{file}', [ResourceController::class,'file_download']);
    Route::get('/home/resource/delete/{id}', [ResourceController::class,'destroy'])->name('admin.resource.destroy');



    //    Testimonies
    Route::get('/home/testimonies', [TestimonyController::class,'index'])->name('admin.testimonies');
    Route::post('/home/testimonies/store', [TestimonyController::class,'store'])->name('admin.testimonies.store');
    Route::get('/home/testimonies/destroy/{id}', [TestimonyController::class,'destroy'])->name('admin.testimonies.destroy');

//    Our Story
    Route::get('/home/our_story', [StoryController::class,'index'])->name('admin.story');
    Route::post('/home/story/update', [StoryController::class,'update'])->name('admin.update.story');
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'twostep', 'checkblocked']], function () {
    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('/home', [
        'as'   => 'public.home',
        'uses' => 'App\Http\Controllers\UserController@index',
        'name' => 'home',
    ]);

    // Show users profile - viewable by other users.
    Route::get('profile/{username}', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\ProfilesController@show',
    ]);
});

// Registered, activated, and is current user routes.
Route::group(['middleware' => ['auth', 'activated', 'currentUser', 'activity', 'twostep', 'checkblocked']], function () {
    // User Profile and Account Routes
    Route::resource(
        'profile',
        \App\Http\Controllers\ProfilesController::class,
        [
            'only' => [
                'show',
                'edit',
                'update',
                'create',
            ],
        ]
    );
    Route::put('profile/{username}/updateUserAccount', [
        'as'   => 'profile.updateUserAccount',
        'uses' => 'App\Http\Controllers\ProfilesController@updateUserAccount',
    ]);
    Route::put('profile/{username}/updateUserPassword', [
        'as'   => 'profile.updateUserPassword',
        'uses' => 'App\Http\Controllers\ProfilesController@updateUserPassword',
    ]);
    Route::delete('profile/{username}/deleteUserAccount', [
        'as'   => 'profile.deleteUserAccount',
        'uses' => 'App\Http\Controllers\ProfilesController@deleteUserAccount',
    ]);

    // Route to show user avatar
    Route::get('images/profile/{id}/avatar/{image}', [
        'uses' => 'App\Http\Controllers\ProfilesController@userProfileAvatar',
    ]);

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'App\Http\Controllers\ProfilesController@upload']);
});

// Registered, activated, and is admin routes.
Route::group(['middleware' => ['auth', 'activated', 'role:admin', 'activity', 'twostep', 'checkblocked']], function () {
    Route::resource('/users/deleted', \App\Http\Controllers\SoftDeletesController::class, [
        'only' => [
            'index', 'show', 'update', 'destroy',
        ],
    ]);

    Route::resource('users', \App\Http\Controllers\UsersManagementController::class, [
        'names' => [
            'index'   => 'users',
            'destroy' => 'user.destroy',
        ],
        'except' => [
            'deleted',
        ],
    ]);
    Route::post('search-users', 'App\Http\Controllers\UsersManagementController@search')->name('search-users');

    Route::resource('themes', \App\Http\Controllers\ThemesManagementController::class, [
        'names' => [
            'index'   => 'themes',
            'destroy' => 'themes.destroy',
        ],
    ]);

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('routes', 'App\Http\Controllers\AdminDetailsController@listRoutes');
    // Route::get('active-users', 'App\Http\Controllers\AdminDetailsController@activeUsers');
});

Route::redirect('/php', '/phpinfo', 301);
