<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\ReadedBookStoreRequest;
use App\Http\Resources\ReadedBookResourceCollection;
use App\Models\ReadedBook;
use Illuminate\Http\Request;

class ReadedBookController extends ApiController
{

    public function store(ReadedBookStoreRequest $request)
    {


    }

    public function index(Request $request)
    {
        return new ReadedBookResourceCollection(ReadedBook::paginate());
    }
}
