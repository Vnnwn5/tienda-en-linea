<?php


class Home extends Controllers
{
  public function __construct()
  {
    parent::__construct();
  }

  public function home ()
  {
    $data['page_id']= 1;
    $data['page_tag']= "Home";
    $data['page_title']= "Pagina principal";
    $data['page_name']= "home";
    $data['page_content']= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quibusdam itaque ut consequuntur voluptas voluptatum reiciendis ipsum debitis illo totam accusantium veniam eos praesentium quod quam minus excepturi omnis ducimus!";

    $this->views->getView($this, "home",$data);
  }
}