<?php

/**
 * Plugin name: Mundo Financeiro
 * Description: Esse é um plugin de teste, para realizar o desafio proposto pela Mundo Financeiro.
 * Version: 1.0
 * Author: Luis Felipe dos Santos
 * Author uri: https://github.com/LFelipe-sb/
 * License: GPLv2 or later
 */

 function mp_message(){
    $mp_newPage =   "<html>
                        <head>
                            <title>Plugin - Mundo Financeiro</title>
                        </head>
                        <body>
                            <h1>\"Olá, Mundo Financeiro.\"<h1>
                        </body>
                    </html>";
    return $mp_newPage;
}

 add_shortcode('mundofinanceiro', 'mp_message');