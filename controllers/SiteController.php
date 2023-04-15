<?php
namespace micro\controllers;
use yii\web\Controller;
use micro\models\Post;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return 'Hello World!';
    }
    
    public function actionAdd()
    {
        $cnt = count(Post::find()->all()) + 1;
        
        $post = new Post();

        $post->title = 'Post no '.$cnt;
        $post->body = 'This is a post no '.$cnt.'!';
        $post->save();    
        
        print_r('Total: '.$cnt.' posts...');
    }

}
