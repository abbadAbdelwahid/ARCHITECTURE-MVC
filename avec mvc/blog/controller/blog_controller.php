<?php
require ROOT . '/model/blog_model.php';


function showBillets() {
    $billets = getBillets(); // Fetch data from the model
    require ROOT . '/view/blog_view.php'; // Load and display the view
}