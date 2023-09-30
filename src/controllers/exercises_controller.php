<?php

class exercises_controller
{
    public function index() {
        include('../templates/exercises.php');
    }

    public function show($exercise) {
        switch($exercise) {
            case 'conjugations':
                $this->display_conjugations();
                break;

            default:
                header('HTTP/1.0 404 Not Found');
                echo '404 - oops, we did not found the page you are asking for';
                break;


        }
    }

    private function display_conjugations() {
        $russian_verbs = [
            'знать' => [
                'я' => 'знаю',
                'ты' => 'знаешь',
                'он' => 'знает',
                'она' => 'знает',
                'оно' => 'знает',
                'мы' => 'знаем',
                'вы' => 'знаете',
                'они' => 'знают',
            ],
            'курить' => [
                'я' => 'курю',
                'ты' => 'куришь',
                'он' => 'курит',
                'она' => 'курит',
                'оно' => 'курит',
                'мы' => 'курим',
                'вы' => 'курите',
                'они' => 'курят',
            ],
            'понимать' => [
                'я' => 'понимаю',
                'ты' => 'понимаешь',
                'он' => 'понимает',
                'она' => 'понимает',
                'оно' => 'понимает',
                'мы' => 'понимаем',
                'вы' => 'понимаете',
                'они' => 'понимают',
            ],
            'говорить' => [
                'я' => 'говорю',
                'ты' => 'говоришь',
                'он' => 'говорит',
                'она' => 'говорит',
                'оно' => 'говорит',
                'мы' => 'говорим',
                'вы' => 'говорите',
                'они' => 'говорят',
            ],
        ];
        // Get a random verb
        $verb = array_rand($russian_verbs);

        // Get a random pronoun
        $pronouns = ['я', 'ты', 'он', 'она', 'оно', 'мы', 'вы', 'они'];
        $pronoun = $pronouns[array_rand($pronouns)];

        include('../templates/exercises/conjugations.php');
    }


}
?>
