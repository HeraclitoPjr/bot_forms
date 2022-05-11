
<?php

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$fiedlds = [
    'email'=> 'required | email',
    'username' => 'required | alphanumeric | between : 3,255'
];

$inputs['email'] = $fiedlds;

if ($email) {
    $email =  filter_var($email, FILTER_SANITIZE_EMAIL);
    
    if(!$email) {
        $erros['email'] = 'Por favor, digite um email válido.';

    }
} else {
    $errors['email'] = 'Por favor, insira um e-mail';
}

function validate(array $data, array $fields): array
{
    $errors = ['email'];

    $split = fn($str, $separator) => array_map('trim', explode($separator, $str));

    foreach ($fields as $field => $option) {

        $rules = $split($option, '|');

        foreach ($rules as $rule) {
            $params = [];
            if (strpos($rule, ':')) {
                [$rule_name, $param_str] = $split($rule, ':');
                $params = $split($param_str, ',');
            } else {
                $rule_name = trim($rule);
            }
        }
    }

    return $errors;
}

var_dump($email);

?>
