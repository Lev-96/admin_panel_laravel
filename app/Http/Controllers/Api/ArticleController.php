<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getPage()
    {
        $article = Articles::all()->skip(2)->take(1);
        if (!$article)
        {
            return response()->json([
                "status" => false,
                "message" => "Article Not Found"
            ])->setStatusCode(404, 'Article Not Found');
        }
        return response()->json($article);
    }
}
