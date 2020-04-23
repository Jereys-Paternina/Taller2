<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Post;
use App\Models\Tag;


use Illuminate\Http\Request;

class TallerController extends Controller
{
    public function taller(){

    $usuario1=Usuario::create(['nombre'=>'jose', 'apellidos'=>'sanchez', 'correo'=>'asd@gmail.com']);
    $tag1=Tag::create(['nombre'=>'cielo']);
    $post1=Post::create(['contenido'=>'El cielo es amplio']);
    return $usuario1. $tag1.$post1;
    }

    public function usuario(){
    //Para usuario
    $usuario = Usuario::find(1);
    $usuario->taggables()->create(['tag_id'=>1]);
    return $usuario->taggables()->get();
    }

    public function tag(){
    //Para tag
    $tag = Tag::find(1);
    $tag->taggables()->create(['tag_id'=>1]);
    return $tag->taggables()->get();
    }

    public function post(){
    //Para post
    $post = Post::find(1);
    $post->taggables()->create(['tag_id'=>1]);
    return $post->taggables()->get();
    }

    public function ejemplo(){
        $usuario = Usuario::find(1);
            $usuario->taggables()->createMany(
                [
                    ['tag_id'=>1],
                    ['tag_id'=>2],
                    ['tag_id'=>3],
                ]
            );
            return $usuario->taggables()->get();

        /*$tag = Tag::find(1);
            $tag->taggables()->createMany(
                [
                    ['tag_id'=>3],
                    ['tag_id'=>3],
                    ['tag_id'=>3],
                ]
            );
            return $tag->taggables()->get();*/

        /*$post = Post::find(1);
            $post->taggables()->createMany(
                [
                    ['tag_id'=>2],
                    ['tag_id'=>2],
                    ['tag_id'=>2],
                ]
            );
            return $post->taggables()->get();*/

    }
}
