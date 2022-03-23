<?php
/*
 * Располагаются базовые функции доступные ото всюду
 */

<<<<<<< HEAD
# Отвечает за получение значение из SESSION
=======
>>>>>>> origin/main
function session($name) {
    return $_SESSION[$name];
}

<<<<<<< HEAD
# Проверяет на существование элемента в SESSION
=======
>>>>>>> origin/main
function has_session($name) {
    return isset($_SESSION[$name]);
}

<<<<<<< HEAD
# Записывает значение в SESSION
function put_session($name, $value) {
    $_SESSION[$name] = $value;
}

# Функция отвечающая за redirect на другую страницу
function redirect($url) {
    return header('Location: ' . $url);
=======
function put_session($name, $value) {
    $_SESSION[$name] = $value;
>>>>>>> origin/main
}