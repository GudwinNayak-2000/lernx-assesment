<?php


use MongoDB\BSON\ObjectId;
use MongoDB\BSON\UTCDateTime;

class Question
{
    private $collection;
    public string $_id;
    public string $question;
    public array $options;
    public string $answer;
    public string $solution;
    public array $attempted_by;
    public float $marks;
    public float $negative_marks;
    public bool $isNegative;
    public UTCDateTime $createdAt;
    public UTCDateTime $updatedAt;

    public function __construct(
        string $_id = null,
        string $question,
        array $options,
        string $answer,
        string $solution,
        array $attempted_by = [],
        float $marks = 1.25,
        float $negative_marks = 0.25,
        bool $isNegative = false,
        UTCDateTime $createdAt = null,
        UTCDateTime $updatedAt = null

    ) {
        global $db;
        $this->collection = $db->assessments;
        $this->_id = $_id ? $_id : (new ObjectId)->__toString();
        $this->question = $question;
        $this->options = $options;
        $this->answer = $answer;
        $this->solution = $solution;
        $this->attempted_by = $attempted_by;
        $this->marks = $marks;
        $this->negative_marks = $negative_marks;
        $this->isNegative = $isNegative;
        $this->createdAt =
            $createdAt ? $createdAt :
            new UTCDateTime;
        $this->updatedAt =
            $updatedAt ? $updatedAt :
            new UTCDateTime;
    }

    public function bsonSerialize()
    {
        return [
            '_id' => gettype($this->_id) === 'string' ? new ObjectId($this->_id) : $this->_id,
            'question' => $this->question,
            'options' => $this->options,
            'answer' => $this->answer,
            'solution' => $this->solution,
            'marks' => $this->marks,
            'isNegative' => $this->isNegative,
            'negative_marks' => $this->negative_marks,
            'attempted_by' => $this->attempted_by,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt
        ];
    }

    public function bsonUnserialize(array $data)
    {
        $this->_id = (new ObjectId($data['_id']))->__toString();
        $this->question = $data['question'];
        $this->options = $data['options'];
        $this->answer = $data['answer'];
        $this->marks = $data['marks'];
        $this->isNegative = $data['isNegative'];
        $this->negative_marks = $data['negative_marks'];
        $this->solution = $data['solution'];
        $this->attempted_by = $data['attempted_by'];
        $this->createdAt = $data['createdAt'];
        $this->updatedAt = $data['updatedAt'];
    }

    public function getId(): string
    {
        return $this->_id;
    }

    public function get()
    {
        return $this->bsonSerialize();
    }

    public function update(string $test_id)
    {
        $get = $this->collection->findOne(['_id' => $test_id]);

        if (!$get)
            return throw new Exception('Question not found');

        $get = json_decode(json_encode($get), true);

        $questions = $get['questions'];

        $current_question = array_search($this->_id, array_column($questions, '_id'));
        print_r($current_question);
    }

    public function delete()
    {
        $this->collection->deleteOne(['_id' => $this->_id]);
    }

    public function getById(string $id)
    {
        return $this->collection->findOne(['_id' => $id]);
    }

    public function getByQuestion(string $question)
    {
        return $this->collection->findOne(['question' => $question]);
    }

    public function getByAnswer(string $answer)
    {
        return $this->collection->findOne(['answer' => $answer]);
    }

    public function getBySolution(string $solution)
    {
        return $this->collection->findOne(['solution' => $solution]);
    }

    public function getByAttemptedBy(array $attempted_by)
    {
        return $this->collection->findOne(['attempted_by' => $attempted_by]);
    }

    public function getByCreatedAt(UTCDateTime $createdAt)
    {
        return $this->collection->findOne(['createdAt' => $createdAt]);
    }

    public function getByUpdatedAt(UTCDateTime $updatedAt)
    {
        return $this->collection->findOne(['updatedAt' => $updatedAt]);
    }

    public function getAttemptedBy(string $id)
    {
        return $this->collection->findOne(['_id' => $id], ['projection' => ['attempted_by' => 1]]);
    }

    public function addAttemptedBy(string $id, string $student_id)
    {
        $this->collection->updateOne(['_id' => $id], ['$push' => ['attempted_by' => $student_id]]);
    }

    public function removeAttemptedBy(string $id, string $student_id)
    {
        $this->collection->updateOne(['_id' => $id], ['$pull' => ['attempted_by' => $student_id]]);
    }

    public function getOptions(string $id)
    {
        return $this->collection->findOne(['_id' => $id], ['projection' => ['options' => 1]]);
    }

    public function addOption(string $id, string $option)
    {
        $this->collection->updateOne(['_id' => $id], ['$push' => ['options' => $option]]);
    }

    public function removeOption(string $id, string $option)
    {
        $this->collection->updateOne(['_id' => $id], ['$pull' => ['options' => $option]]);
    }

    public function getQuestion(string $id)
    {
        return $this->collection->findOne(['_id' => $id], ['projection' => ['question' => 1]]);
    }

    public function setQuestion(string $id, string $question)
    {
        $this->collection->updateOne(['_id' => $id], ['$set' => ['question' => $question]]);
    }

    public function getAnswer(string $id)
    {
        return $this->collection->findOne(['_id' => $id], ['projection' => ['answer' => 1]]);
    }

    public function setAnswer(string $id, string $answer)
    {
        $this->collection->updateOne(['_id' => $id], ['$set' => ['answer' => $answer]]);
    }

    public function getSolution(string $id)
    {
        return $this->collection->findOne(['_id' => $id], ['projection' => ['solution' => 1]]);
    }

    public function setSolution(string $id, string $solution)
    {
        $this->collection->updateOne(['_id' => $id], ['$set' => ['solution' => $solution]]);
    }

    public function getCreatedAt(string $id)
    {
        return $this->collection->findOne(['_id' => $id], ['projection' => ['createdAt' => 1]]);
    }

    public function setCreatedAt(string $id, UTCDateTime $createdAt)
    {
        $this->collection->updateOne(['_id' => $id], ['$set' => ['createdAt' => $createdAt]]);
    }

    public function getUpdatedAt(string $id)
    {
        return $this->collection->findOne(['_id' => $id], ['projection' => ['updatedAt' => 1]]);
    }

    public function setUpdatedAt(string $id, UTCDateTime $updatedAt)
    {
        $this->collection->updateOne(['_id' => $id], ['$set' => ['updatedAt' => $updatedAt]]);
    }

    public function getNoOfQuestions()
    {
        return $this->collection->count();
    }

    public function checkTimeRegex(string $time)
    {
        return preg_match('/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/', $time);
    }

    public function getCollection()
    {
        return $this->collection;
    }

    public function setCollection($collection)
    {
        $this->collection = $collection;
    }

    public function awardMarks(string $student_id, int $marks)
    {
        // Update the database to award marks to the student
        $updateData = [
            '$addToSet' => ['attempted_by' => $student_id],
            '$inc' => ['marks' => $marks]
        ];

        $this->collection->updateOne(
            ['_id' => $this->_id],
            ['$setOnInsert' => ['marks' => 0], '$addToSet' => ['attempted_by' => $student_id], '$inc' => ['marks' => $marks]],
            ['upsert' => true]
        );
    }

    public function deductMarks(string $student_id, int $marks)
    {
        // Update the database to deduct marks from the student
        $updateData = [
            '$addToSet' => ['attempted_by' => $student_id],
            '$inc' => ['marks' => -$marks]
        ];

        $this->collection->updateOne(
            ['_id' => $this->_id],
            ['$setOnInsert' => ['marks' => 0], '$addToSet' => ['attempted_by' => $student_id], '$inc' => ['marks' => -$marks]],
            ['upsert' => true]
        );
    }
}
