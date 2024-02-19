 Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('/register', [AuthController::class, 'register'])->middleware('restrictRole:admin,admin2');
});
