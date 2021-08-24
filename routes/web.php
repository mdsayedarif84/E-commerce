    <?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers;
    //front-end route
    Route::get('/',[
       'uses'=>'App\Http\Controllers\MyShopController@index',
        'as' =>'/',
    ]);
    Route::get('/category-product/{id}/{name}',[
        'uses'=>'App\Http\Controllers\MyShopController@categoryProduct',
        'as' =>'category-product'
    ]);
    Route::get('/product-details/{id}/{name}',
      [ App\Http\controllers\MyShopController::class,'productDetails'] )->name('product-details');
    //CART START
    Route::post('/cart/add',[
        'uses'=>'App\Http\Controllers\CartController@addToCart',
        'as' =>'add-to-cart'
    ]);
    Route::get('/cart/show',[
        'uses'=>'App\Http\Controllers\CartController@showCart',
        'as' =>'show-cart'
    ]);
    Route::get('/cart/cart/{rowId}',[
        'uses'=>'App\Http\Controllers\CartController@deleteCart',
        'as' =>'delete-cart-item'
    ]);
    Route::post('/cart/update',[
        'uses'=>'App\Http\Controllers\CartController@updateCart',
        'as' =>'update-cart'
    ]);
    Route::get('/checkout',[
        'uses'=>'App\Http\Controllers\CheckoutController@index',
        'as' =>'checkout'
    ]);
    //CheckoutController
    Route::post('/customer/registration',[
        'uses'=>'App\Http\Controllers\CheckoutController@customerSignUP',
        'as' =>'customer-sign-up'
    ]);
    Route::post('/checkout/customer-login',[
        'uses'=>'App\Http\Controllers\CheckoutController@customerLoginCheck',
        'as' =>'customer-login'
    ]);
    // TopHeader customer logout & login
    Route::post('/customer/customer-logout',[
        'uses'=>'App\Http\Controllers\CheckoutController@customerLogout',
        'as' =>'customer-logout'
    ]);
    Route::get('/customer/new-customer-login',[
        'uses'=>'App\Http\Controllers\CheckoutController@newCustomerLogin',
        'as' =>'new-customer-login'
    ]);
    Route::get('/checkout/shipping',[
        'uses'=>'App\Http\Controllers\CheckoutController@shippingForm',
        'as' =>'checkout-shipping'
    ]);
    Route::post('/shipping/save',[
        'uses'=>'App\Http\Controllers\CheckoutController@saveShippingInfo',
        'as' =>'new-shipping'
    ]);
    Route::get('/checkout/payment',[
        'uses'=>'App\Http\Controllers\CheckoutController@paymentForm',
        'as' =>'checkout-payment'
    ]);
    Route::post('/checkout/order',[
        'uses'=>'App\Http\Controllers\CheckoutController@newOrder',
        'as' =>'new-order'
    ]);
    Route::get('/complete/order',[
        'uses'=>'App\Http\Controllers\CheckoutController@completeOrder',
        'as' =>'complete-order'
    ]);
    //Authentication file
    Auth::routes();
    Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //    Admin Panel route //slider
    Route::get('/home.slider',
        [ App\Http\controllers\SlideImageController::class,'sliderImage'] )->name('view-slider');
    Route::get('/add.slider',
        [ App\Http\controllers\SlideImageController::class,'create'] )->name('add-slider');
    Route::post('/store.slider',
        [ App\Http\controllers\SlideImageController::class,'store'] )->name('store');
    Route::get('/edit/slider/{id}',
        [ App\Http\controllers\SlideImageController::class,'edit'] )->name('edit-slider');
    Route::put('update.slider/{id}',
        [ App\Http\controllers\SlideImageController::class,'update'] );
    //middleware
    Route::group(['middleware'=>'login.check'],function(){
        //category info
        Route::get('/category/add-category',
            [ App\Http\controllers\CategoryController::class,'index'] )->name('add-category');
        //Route::get('/category/add-category','App\Http\Controllers\CategoryController@index');
        Route::post('/category/new-category',
            [ App\Http\controllers\CategoryController::class,'saveCategoryInfo'] );
        Route::get('/category/manage-category',
            [ App\Http\controllers\CategoryController::class,'manageCategoryInfo'] )->name('manage-category');
        Route::get('/category/unpublished/{id}',
            [ App\Http\controllers\CategoryController::class,'unpublishedCategoryInfo'] )->name('unpublished-category');
        Route::get('/category/published/{id}',
            [ App\Http\controllers\CategoryController::class,'publishedCategoryInfo'] )->name('published-category');
        Route::get('/category/edit/{id}',
            [ App\Http\controllers\CategoryController::class,'editCategoryInfo'] )->name('edit-category');
        Route::post('/category/update-category',
            [ App\Http\controllers\CategoryController::class,'updateCategoryInfo'] )->name('update-category');
        Route::get('/category/delete-category/{id}',
            [ App\Http\controllers\CategoryController::class,'deleteCategoryInfo'] )->name('delete-category');
        //brand info
        Route::get('/brand/add-brand',
            [ App\Http\controllers\BrandController::class,'index'] )->name('add-brand');
        Route::post('/brand/save',
            [ App\Http\controllers\BrandController::class,'saveBrand'] )->name('new-brand');
        Route::get('/brand/manage-brand',
            [ App\Http\controllers\BrandController::class,'manageBrandInfo'] )->name('manage-brand');
        Route::get('/brand/unpublished/{id}',
            [ App\Http\controllers\BrandController::class,'unpublishedBrandInfo'] )->name('unpublished-brand');
        Route::get('/brand/published/{id}',
            [ App\Http\controllers\BrandController::class,'publishedBrandInfo'] )->name('published-brand');
        Route::get('/brand/edit/{id}',
            [ App\Http\controllers\BrandController::class,'editBrandInfo'] )->name('edit-brand');
        Route::post('/brand/update-brand',
            [ App\Http\controllers\BrandController::class,'updateBrandInfo'] )->name('update-brand');
        Route::get('/brand/delete-brand/{id}',
            [ App\Http\controllers\BrandController::class,'deleteBrandInfo'] )->name('delete-brand');
        //product info
        Route::get('/product/add',
            [ App\Http\controllers\ProductController::class,'index'] )->name('add-product');
        Route::post('/product/save',
            [ App\Http\controllers\ProductController::class,'saveProduct'] )->name('new-product');
        Route::get('/product/manage',
            [ App\Http\controllers\ProductController::class,'manageProduct'] )->name('manage-product');
        Route::get('/product/edit/{id}',
            [ App\Http\controllers\ProductController::class,'editProductInfo'] )->name('edit-product');
        Route::get('/product/unpublished/{id}',
            [ App\Http\controllers\ProductController::class,'unpublishedProductInfo'] )->name('unpublished-product');
        Route::get('/product/published/{id}',
            [ App\Http\controllers\ProductController::class,'publishedProductInfo'] )->name('published-product');
        Route::post('/product/update',
            [ App\Http\controllers\ProductController::class,'updateProduct'] )->name('update-product');
        Route::get('/product/delete/{id}',
            [ App\Http\controllers\ProductController::class,'deleteProductInfo'] )->name('delete-product');
        //Manage Order
        Route::get('/order/manage',
            [ App\Http\controllers\OrderController::class,'manageOrderInfo'] )->name('manage-order');
        Route::get('/order/view-order-detail/{id}',
            [ App\Http\controllers\OrderController::class,'viewOrderDetail'] )->name('view-order');
        Route::get('/order/view-order-invoice/{id}',
            [ App\Http\controllers\OrderController::class,'viewOrderInvoice'] )->name('view-order-invoice');
        Route::get('/order/download-order-invoice/{id}',
            [ App\Http\controllers\OrderController::class,'downloadOrderInvoice'] )->name('download-order-invoice');
    });
