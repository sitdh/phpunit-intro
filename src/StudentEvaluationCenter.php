<?php namespace Grading;

class StudentEvaluationCenter {

    public function evaluate($student): string {
        
        $netScore = 0;

        foreach($student['activityItems'] as $item) {
            $netScore += $item['score']/$item['fullscore'] * $item['weight'];
        }

        $gradeLetter = 'F';

        if ($netScore >= 91):
            $gradeLetter = 'A+';
          
        elseif ($netScore >= 81):
            $gradeLetter = 'A';
          
        elseif ($netScore >= 71):
            $gradeLetter = 'B';
          
        elseif ($netScore >= 61):
            $gradeLetter = 'C';
          
        elseif ($netScore >= 51):
            $gradeLetter = 'D';
          
        endif;

        return $gradeLetter;
    }
}
