<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json; charset=utf-8');

class quiz
{
    public $question_arr = [
        "1.Как выглядел первый баг в истории?",
        "2. Какой принцип написания кода для языка Джава?",
        "3. Какому языку соотвествует данное сленговое название - 'Сижка'?",
        "4. Как принято называть Windows XP?",
        "5. Какого типа данных нет в программировании?",
        "6.Вам нужно полностью закончить цикл прямо сейчас, какое служебное слово будем использовать?",
        "7. Какая модель программирования сейчас самая популярная?",
        "8. Кто самый первый программист?",
      ];
    public $a1_arr = [
        "Он был жуком",
        "Не писать код",
        "Python",
        "Степаша",
        "bool",
        "continue",
        "структурное программирование",
        "Адам Тьюринг",
      ];
    public $a2_arr = [
        "Мотылек",
        "Сделай дело - гуляй смело",
        "Java",
        "Хрюша",
        "async",
        "break",
        "функциональное программирование",
        "Ада Лавлэйс",
      ];
    public $a3_arr = [
        "Ошибка в программе",
        "Написал один раз, запускай везде",
        "C",
        "Каркуша",
        "integer",
        "and",
        "ООП модель",
        "Чарльз Беббидж",
      ];
    public $answer_arr = [
        "Мотылек",
        "Написал один раз, запускай везде",
        "С",
        "Хрюша",
        "async",
        "break",
        "ООП модель",
        "Ада Лавлэйс",
      ];
    public $n_right_answer_arr = [2, 3, 3, 2, 2, 2, 3, 2];
}

$quiz1 = new quiz();
$quiz1->comment = "Hello";

echo(json_encode($quiz1));
?>
