<?php
    $correct_answers = parse_ini_file('answers.ini');
    $user_answers = $_SESSION['test'];
    $score = 0;
    $maxScore = 0;

    foreach ($correct_answers as $Ckey => $Celem){
        $maxScore += $Celem;
        foreach ($user_answers as $Uelem){

            if($Uelem == $Ckey){
                $score += $Celem;
            }

        }
    }
    session_destroy();
?>
<table width="100%">
	<tr>
		<td align="left">
            Ваш результат:
            <?=round(($score/$maxScore)*100, 0) . "%"?>
		</td>
	</tr>
</table>