# Code template

## Evaluation Grade block

```php

$gradeLetter = 'F';

if ($netScore > 91):
  $gradeLetter = 'A+';
  
elseif ($netScore > 81):
  $gradeLetter = 'A';
  
elseif ($netScore > 71):
  $gradeLetter = 'B';
  
elseif ($netScore > 61):
  $gradeLetter = 'C';
  
elseif ($netScore > 51):
  $gradeLetter = 'D';
  
endif;
```

## Student Entity

```php
<?php namespace grading\entity

class Student {

    private string $id;

    private string $firstname;

    private string $lastname;

    private string $section;

    private array $activityItems;

    /**
     * Id
     **/
    public function getId(): string {
        return $this->id;
    }

    public function setId(string $id): void {
        $this->id = $id;
    }

    /**
     * firstname
     **/
    public function getFirstname(): string {
        $this->firstname;
    }

    public function setFirstname(string $firstname): void {
        $this->firstname = $firstname;
    }

    /**
     * lastname
     **/
    public function getLastname(): string {
        $this->lastname;
    }

    public function setLastname(string $lastname): void {
        $this->lastname = $lastname;
    }

    /**
     * section
     **/
    public function getSection(): string {
        $this->section;
    }

    public function setSection(string $section): void {
        $this->section = $section;
    }

    /**
     * section
     **/
    public function getActivityItems(): array {
        $this->section;
    }

    public function setActivityItems(array ...$section): void {
        $this->section = $section;
    }

}
```

## ActivityItem
```php
<?php namespace grading\entity;

class ActivityItem {

    private string $id;

    private ActivityType $activityType;

    private Activity $activity;

    private int $score;

    private int $weight;

    private int $fullScore;

    public function getId(): string {
        return $this->id;
    }

    public function setId(string $id): void {
        $this->id = $id;
    }

    public function getActivityType(): ActivityType {
        return $this->activityType;
    }

    public function setActivityType(ActivityType $activityType): void {
        $this->activityType = $activityType;
    }

    public function getActivity(): Activity {
        return $this->activity;
    }

    public function setActivity(Activity $activity): void {
        $this->activity = $activity;
    }

    public function getScore(): string {
        return $this->score;
    }

    public function setScore(int $score): void {
        $this->score = $score;
    }

    public function getWeight(): float {
        return $this->weight;
    }

    public function setWeight(float $weight): void {
        $this->weight = $weight;
    }

    public function getFullScore(): float {
        return $this->fullScore;
    }

    public function setFullScore(float $fullScore): void {
        $this->fullScore = $fullScore;
    }

}
```

## Activity
```php
<?php namespace grading\entity;

abstract class Activity {
    
    const QUIZ          = 'quiz';

    const EXAMPLE       = 'example';

    const MID_TERM      = 'mid';

    const FINAL_TERM    = 'fin';

    const PROJECT       = 'proj';

}
```

## ActivityType
```php
<?php namespace grading\entity;

abstract class ActivityType {

    const INDIVIDUAL    = 'indiv';

    const GROUP         = 'group';

}
```

## Mocking objects

### Activity Item
```php
$activityItem = $this->createMock(ActivityItem::class);
$activityItem->method('getScore')
  ->willReturn(1);
$activityItem->method('getFullScore')
  ->willReturn(1);
$activityItem->method('getWeight')
  ->willReturn(100);
```

### Student 
```php
$student = $this->createMock(Student::class);
$student->method('getActivityItems')
  ->willReturn([$activityItem]);
```
