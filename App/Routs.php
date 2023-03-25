<?php

use App\Router;

Router::Page('Pages/en-ru/en-ru.php','en-ru');
Router::Page('Pages/Timer/timer.php', 'timer');
Router::Page('Pages/MySite.php','MySite');
Router::Page('Pages/help.php', 'help');
Router::Page('Pages/probros/probros.php','probros');
Router::Page('Pages/AJAX/ajax.php','ajax');
Router::Page('Pages/JavaScript/javascript.php', 'JavaScript');
Router::Page('Pages/abaut_css.php', 'cssabaut');
Router::Page('Pages/HTML/HTML.php', 'html');
Router::Page('Pages/HTML/HTML_questions.php', 'HTML_questions');

Router::enable();