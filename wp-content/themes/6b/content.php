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
  <section>
    <div class="container max-w-full h-30 flex grid grid-rows-2">
        <div class="p-10  bg-indigo-900">
            <p class="text-white mx-7 mt-30">our blog</p>
            <p class="text-white mx-7 my-5 text-4xl">Stories and interviews</p>
            <p class="text-white mx-7 mb-30 ">Subscribe to learn about new product features, the latest in technology, solutions, and updates.</p>
        </div>  
        <!-- <div class="bg-contain bg-center ..." style="background-image: url('./source.png')"></div>

        <div class="bg-[url('/source.png')]">
        </div> -->
        <img class="" src="./source.png" alt="source">
       
    </div>
  </section>

  <main role="content">