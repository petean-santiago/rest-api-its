// This function will rickroll you
Route::get('/rickroll', function(Request $request){
    return response("https://www.youtube.com/watch?v=dQw4w9WgXcQ");
});