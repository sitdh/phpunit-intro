<?php 

use PHPUnit\Framework\TestCase;

use Grading\StudentEvaluationCenter;

class StudentEvaluationCenterTest extends TestCase {

    private $eva;

    public function setUp() {

        $this->eva = new StudentEvaluationCenter();

    }

    public function testCanEvaluateStudentGradeLetterWithScore(): void {

        // Given

        // When
        $gradeLetter = $this->eva->evaluate([
            'id'            => '1234567890',
            'firstname'     => 'John',
            'lastname'      => 'Doe',
            'section'       => '1',
            'activityItems' => [
                [
                    'score'     => 1,
                    'weight'    => 100,
                    'fullscore' => 1
                ]
            ]
        ]);

        // Assert
        $this->assertEquals(
            'A+',
            $gradeLetter
        );

    }

    public function testCanEvaluateStudentForGradeA() {

        // When
        $gradeLetter = $this->eva->evaluate([
            'id'            => '1234567890',
            'firstname'     => 'John',
            'lastname'      => 'Doe',
            'section'       => '1',
            'activityItems' => [
                [
                    'score'     => 81,
                    'weight'    => 100,
                    'fullscore' => 100
                ]
            ]
        ]);

        $this->assertEquals(
            'A',
            $gradeLetter
        );
    }

}
