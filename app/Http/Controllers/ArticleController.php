<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// importer le modele Article pour l'utiliser ici
use App\Models\Article;
class ArticleController extends Controller
{
    // Fonction de creation d'article
    function createArticle(Request $request){
        $article = new Article;
        $article->nom = $request->nom;
        $article->prix = $request->prix;
        $article->status = $request->status;
        $article->origin = $request->origin;
        $article->destination = $request->destination;
        $article->save();

        return response()->json([
            "message" => "Creation d'article reussi",
            "articles" => $article,
        ], 201);
    }
}
