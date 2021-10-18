<?php
namespace PSR4\src\Controller;
use PSR4\src\Models\User;
class HomeController
{
    public function actionIndex()
    {
        return (new User)->list();
    }
}