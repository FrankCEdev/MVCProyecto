<?php
use function CommonMark\Render;
    class WelcomeController {
        public function index(){
            require_once "Views/Welcome.html";
        }
    }
?>