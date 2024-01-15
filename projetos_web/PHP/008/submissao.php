<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header ('Location: index.php');
    return;
}

$inputs = [];


//username
$inputs ['text_username'] = [
    'value' => '',
    'erro' => ''
];

if(empty($_POST['text_username'])) {
    $inputs['text_username']['erro'] = 'O campo é de preenchimento obrigatório.';
} else {
    $inputs ['text_username']['value'] = $_POST['text_username'];
    if (strlen($_POST['text_username']) < 5 || strlen('text_username') > 30) {
        $inputs ['text_username']['erro'] = 'O username tem que ter de 5 a 30 caracter.';
    }
}

//password
$inputs ['text_password'] = [
    'value' => '',
    'erro' => ''
];

if(empty($_POST['text_password'])) {
    $inputs['text_password']['erro'] = 'O campo é de preenchimento obrigatório.';
} else {
    $inputs ['text_password']['value'] = $_POST['text_password'];
    if (strlen($_POST['text_password']) < 8 || strlen($_POST['text_password']) > 12) {
        $inputs ['text_password']['erro'] = 'O password tem que ter de 8 a 12 caracter.';
    }
}

if (!empty($inputs['text_username']['erro'] || !empty($inputs['text_password']['erro']))) {
    $_SESSION['inputs'] = $inputs;
    header('Location: index.php');
    return;
}

echo '<p>Username: <strong>' . $_POST['text_username'] . '</strong></p>';
echo '<p>Password: <strong>' . $_POST['text_password'] . '</strong></p>';

?>
