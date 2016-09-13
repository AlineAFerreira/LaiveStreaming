<?php

require_once("inc/config.php");
require 'inc/Slim/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {

        require_once("view/index.php");

    }
);

$app->get(
    '/login',
    function () {

        require_once("view/login.php");

    }
);

$app->get(
    '/filmes', function () {

        $sql = new Sql();
        $data = $sql->select("SELECT 
            tb_filmes.id, 
            tb_filmes.nome, 
            tb_filmes.banner, 
            tb_filmes.descricao,
            tb_filmes.trailer  
            FROM tb_filmes 
            Right JOIN tb_banners 
            on tb_filmes.id = tb_banners.id_filme 
            Where status = 1
            Limit 10"
        );

        foreach ($data as &$filme) {
            $breveDescricao = substr($filme[2], 0, 208). "...";
            $filme['descricao'] = $breveDescricao;       
        }

        print_r(json_encode($data));

    }
);

$app->get(
    '/vitrines', function () {

        $sql = new Sql();
        $data = $sql->select("SELECT 
            nome
            FROM tb_vitrines 
            Where status = 1"
        );

        print_r(json_encode($data));

    }
);

$app->get(
    '/filmesVitrine', function () {

        $sql = new Sql();
        $data = $sql->select(
            "SELECT vit.nome, filmes.* 
            FROM tb_vitrines vit 
            INNER JOIN tb_itens_vitrine itens 
            on vit.id = itens.id_vitrine 
            LEFT JOIN tb_filmes filmes 
            on filmes.id = itens.id_filme 
            WHERE vit.status = 1 and itens.status = 1"
        );

        foreach ($data as &$filme) {
            $url = str_replace("watch?v=","embed/",$filme['trailer']);;
            $filme['trailer'] = $url;       
        }

        print_r(json_encode($data));

    }
);

$app->get(
    '/detalhe_:id_filme', function ($id_filme) {

        $sql = new Sql();
        $data = $sql->select("SELECT 
            *
            FROM tb_filmes 
            Where id = $id_filme"
        );

        $prod = $data[0];

        require_once("view/detalhe.php");

    }
);


// POST route
$app->post(
    '/post',
    function () {
        echo 'This is a POST route';
    }
);

// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);

/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();
