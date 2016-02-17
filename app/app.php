<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/FindAndReplace.php";

    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("home.html.twig");
    });

    $app->get("/results", function() use ($app) {
        $new_FindAndReplace = new FindAndReplace($_GET["input_string"], $_GET["word_to_replace"], $_GET["replacement_word"]);
        $result = $new_FindAndReplace->replaceWord($_GET["input_string"], $_GET["word_to_replace"], $_GET["replacement_word"]);
    
        return $app["twig"]->render("home.html.twig", array("newresult" => $result, "originalinput" => $new_FindAndReplace));
    });

    return $app;
 ?>
