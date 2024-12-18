export const generateQuestionsArray = (questions) => {
    let questionsArray = [];
    questions.forEach((question) => {
        questionsArray.push({
            question: question.question,
            options: question.options,
            answer: question.answer,
            answered: false,
            skipped: false,
            markedForReview: false,
            solution: question.solution,
            answeredMarkedReview: false
        });
    });

    return questionsArray;
}

export const convertTimeToSeconds = (time) => {
    let timeArray = time.split(':');
    let hours = parseInt(timeArray[0]);
    let minutes = parseInt(timeArray[1]);
    let seconds = parseInt(timeArray[2]);

    return hours * 3600 + minutes * 60 + seconds;
}