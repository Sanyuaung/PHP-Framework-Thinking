<?php
    class PagesController{
     public function home()
     {
        $users=App::get("database")->selectAll("users");
        view('index',[
          "manyusers"=>$users
        ]);    
     }   
     public function about()
     {
        view("about");
     }
     public function contact()
     {
        view("contact");
    }
    public function order()
    {
       view("order");
   }
   public function customer()
   {
      view("customer");
    }
    public function create(Type $var = null)
    {
        App::get("database")->insert([
            'NAME'=>$_POST['name'],
        ],"users");
        header("Location: /");
    }
    }