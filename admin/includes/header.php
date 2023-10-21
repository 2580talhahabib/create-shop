<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- custom css link  -->
    <link rel="stylesheet" href="./css/common.css">

    <title>
    <?php
   $page=basename($_SERVER['PHP_SELF'],'.php');
   $page_title=ucwords(str_replace('_',' ',$page));
echo $page_title;
        // $page_title = basename($_SERVER['PHP_SELF'], '.php');
        // $page_title = ucwords(str_replace('_', ' ', $page_title));
        // echo $page_title;
        // ?>
    </title>
</head>
<body>





