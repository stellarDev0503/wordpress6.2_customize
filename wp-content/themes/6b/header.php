<!doctype html>
<html <?php language_attributes(); ?>>
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
                                  echo ' : ';
                                } ?><?php bloginfo('name'); ?></title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <nav class="border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="grid grid-rows-3 max-w-screen-xl flex flex-wrap items-center justify-between mx-auto pl-15 pt-3">

          <a class="text-black-600 md:text-blue-600 text-5xl items-center" href="<?= esc_url(home_url()); ?>">Logo</a>
          <div>
              <button data-collapse-toggle="navbar-default" type="button" class="navbar-button inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <i class="fa fa-bars"></i>
              </button>
          
              <form class="hidden w-full sm:block sm:w-auto" name="form1" id="form1">
                  <a class="items-center px-2" href="<?= esc_url(home_url()); ?>">Home</a>

                  <select class="px-2" name="Product" id="Product">
                      <option value="Products" selected="selected">Products</option>
                      <option value="Products1" >Products1</option>
                  </select>
                  
                  <select class="px-2" name="Resource" id="Resource">
                    <option value="Resources" selected="selected">Resources</option>
                    <option value="Resources1">Resources1</option>
                  </select>
                  
                <a class="items-center px-2" href="<?= esc_url(home_url()); ?>">Pricing</a>
              </form>
          </div>
          <div class="">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Log in</button>
              <button class="bg-purple-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Sign in</button>
          </div>
              
        </div>
      </nav>
    </div>
  </header>

  <main role="content">