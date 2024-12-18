<?php

use MongoDB\BSON\ObjectId;
use MongoDB\BSON\UTCDateTime;


class Assessment
{
    private $collection;
    public string $_id;
    public string $name;
    public string $description;
    public string $time;
    public int $no_of_questions;
    public array $questions;
    public array $students;
    public array $category;
    public UTCDateTime $createdAt;
    public UTCDateTime $updatedAt;


    private function checkTimeRegex(string $time)
    {
        $regex = '/^([0-9][0-9]):([0-9][0-9]):([0-9][0-9])$/';
        if (preg_match($regex, $time)) {
            return true;
        }
        return false;
    }

    public function __construct(
        string $_id = null,
        string $name,
        string $description,
        string $time,
        array $category,
        array $questions = [],
        array $students = [],
        UTCDateTime $createdAt = null,
        UTCDateTime $updatedAt = null
    ) {
        if (!$this->checkTimeRegex($time)) {
            throw new Exception('Invalid time format');
        }

        global $db;
        $this->collection = $db->assessments;
        $this->_id = $_id ? $_id : (new ObjectId)->__toString();
        $this->name = $name;
        $this->time = $time;
        $this->description = $description;
        $this->questions = $questions;
        $this->students = $students;
        $this->category = [
            'name' => strtolower($category['name'] ? $category['name'] : $category['name'] = 'Assessment Category'),
            '_id' => $category['_id'] ? $category['_id'] : (new ObjectId)->__toString()
        ];
        $this->no_of_questions = count($questions);
        $this->createdAt =
            $createdAt ? $createdAt :
            new UTCDateTime;
        $this->updatedAt =
            $updatedAt ? $updatedAt :
            new UTCDateTime;
    }

    public function bsonSerialize()
    {
        $questions = [];
        foreach ($this->questions as $question) {
            $questions[] = $question->get();
        }
        return [
            '_id' =>
            gettype($this->_id) === 'string' ? new ObjectId($this->_id) : $this->_id,
            'name' => $this->name,
            'description' => $this->description,
            'time' => $this->time,
            'category' => [
                'name' => $this->category['name'],
                '_id' => gettype($this->category['_id']) === 'string' ? new ObjectId($this->category['_id']) : $this->category['_id']
            ],
            'no_of_questions' => $this->no_of_questions,
            'questions' => $questions,
            'students' => $this->students,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt
        ];
    }

    public function bsonUnserialize(array $data)
    {
        include_once 'Mongo.model.php';

        $this->_id = $data['_id'];
        $this->name = $data['name'];
        $this->category = $data['category'];
        $this->description = $data['description'];
        $this->time = $data['time'];
        $this->category = $data['category'];
        $this->no_of_questions = $data['no_of_questions'];
        $this->questions =
            Mongo::getModel(Question::class, $data['questions']);
        $this->students = $data['students'];
        $this->createdAt = $data['createdAt'];
        $this->updatedAt = $data['updatedAt'];
    }

    public function save()
    {
        $old = $this->collection->findOne(['name' => $this->name]);
        if ($old) {
            die('Assessment with name ' . $this->name . ' already exists!' . PHP_EOL);
        }
        $res = $this->collection->insertOne(
            $this->bsonSerialize()
        );


        if ($res->getInsertedCount() === 0) {
            throw new Exception('Failed to save assessment');
        }

        return $this->name . ' saved successfully!' . PHP_EOL;
    }

    public function update()
    {
        $this->updatedAt = new UTCDateTime;
        $this->collection->updateOne(
            ['_id' => $this->_id],
            ['$set' => [
                'name' => $this->name,
                'description' => $this->description,
                'time' => $this->time,
                'no_of_questions' => $this->no_of_questions,
                'questions' => $this->questions,
                'students' => $this->students,
                'updatedAt' => $this->updatedAt
            ]]
        );
    }

    public function delete()
    {
        $this->collection->deleteOne(['_id' => $this->_id]);
    }

    public function getId(): string
    {
        return $this->_id;
    }

    public function addQuestion(Question $question)
    {
        $this->questions[] = $question->bsonSerialize();
        $this->no_of_questions = count($this->questions);
        return $this;
    }

    public function removeQuestion(string $questionId)
    {
        $key = array_search(new ObjectId($questionId), array_column($this->questions, '_id'));
        if ($key !== false) {
            unset($this->questions[$key]);
            $this->no_of_questions = count($this->questions);
        }

        return $this;
    }

    public function addStudent(string $studentId)
    {
        $this->students[] = $studentId;
        $students = [];
        foreach ($this->students as $studentId) {
            $students[] = new ObjectId($studentId);
        }
        $this->collection->updateOne(
            ['_id' => $this->_id],
            ['$set' => ['students' => $students]]
        );
    }

    public function removeStudent(string $studentId)
    {
        $key = array_search($studentId, $this->students);
        if ($key !== false) {
            unset($this->students[$key]);
            $this->collection->updateOne(
                ['_id' => $this->_id],
                ['$set' => ['students' => $this->students]]
            );
        }
    }

    public function getQuestions()
    {

        $questions = [];
        include_once 'Question.model.php';
        include_once 'Mongo.model.php';
        foreach ($this->questions as $question) {
            $question = Mongo::getModel(Question::class, [$question])[0];
            if (!$question) {
                continue;
            }

            $questions[] = $question;
        }

        return $questions;
    }

    public function isStudentPresent(string $studentId)
    {
        return in_array($studentId, $this->students);
    }

    public function isQuestionPresent(string $questionId)
    {
        return in_array($questionId, $this->questions);
    }
}
