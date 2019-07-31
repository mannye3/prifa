<?php
  class Listings extends Controller {
    public function __construct(){
     

      $this->listingModel = $this->model('Listing');
      
    }



  public function index($ref_id){

         $view = +1;

       $view_pro = $this->listingModel->updateViewPro($ref_id,$view);
      $post = $this->listingModel->getPropertyByRef($ref_id);
      $pro_pics = $this->listingModel->getPropertyPictures($ref_id);
      $feat_pro = $this->listingModel->getFeaturedProperty();
      
      

      $data = [
        'post' => $post,
         'pro_pics' => $pro_pics,
         'feat_pro' => $feat_pro
         // 'view_pro' => $view_pro
        
      ];

      $this->view('listings/index', $data);
    }









   // public function index(){
   //    // Get posts
   //    $posts = $this->testModel->getPosts();

   //    $data = [
   //      'posts' => $posts
   //    ];

   //    $this->view('tests/index', $data);
   //  }

    // public function index(){
    //       $data = [
    //         'title' => 'eddcjv n vjd ovdfvjdfvdfvdfoc',
    //         'description' => 'Simple social network built on the TraversyMVC PHP framework'
    //       ];
         
    //       $this->view('tests/index', $data);
    //     }
  
  }