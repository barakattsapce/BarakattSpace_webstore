  GET|HEAD        / ................................................................................... routes/web.php:5
  POST            api/v1/categories ............................. categories.store › Api\ProductCategoryController@store
  GET|HEAD        api/v1/categories ............................. categories.index › Api\ProductCategoryController@index
  PUT|PATCH       api/v1/categories/{category} ................ categories.update › Api\ProductCategoryController@update
  DELETE          api/v1/categories/{category} .............. categories.destroy › Api\ProductCategoryController@destroy
  GET|HEAD        api/v1/categories/{category} .................... categories.show › Api\ProductCategoryController@show
  POST            api/v1/login ................................................................ Api\AuthController@login
  POST            api/v1/logout .............................................................. Api\AuthController@logout
  GET|HEAD        api/v1/me ...................................................................... Api\AuthController@me
  POST            api/v1/register .......................................................... Api\AuthController@register
  GET|HEAD        storage/{path} storage.local › vendor/laravel/framework/src/Illuminate/Filesystem/FilesystemServicePr…
  PUT             storage/{path} storage.local.upload › vendor/laravel/framework/src/Illuminate/Filesystem/FilesystemSe…
  GET|HEAD        up ....... vendor/laravel/framework/src/Illuminate/Foundation/Configuration/ApplicationBuilder.php:219



  
