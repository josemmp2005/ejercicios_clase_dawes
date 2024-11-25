<?php
namespace App\Controllers;
require_once "BaseController.php";

class IndexController extends BaseController
{
    public function IndexAction()
    {
        $data = array('message' => 'Hola mundo');
        $this->renderHTML('../app/views/index_view.php', $data);
    }
}

?>