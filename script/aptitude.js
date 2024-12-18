import Ajax from './utils/Ajax.util.js';
import { generateQuestionsArray, convertTimeToSeconds } from "./utils/methods.util.js";

document.addEventListener("DOMContentLoaded", function () {

    const mainSection = document.querySelector('#main-section');
    const mockTestHeader = document.querySelector('#mock-text');
    const loadingScreen  = document.querySelector('#loading-screen');
    const skipQuestionButton = document.getElementById("skip-question");
    const aptitudeHeader = document.querySelector('#aptitude-header');
    const labels = document.querySelectorAll('.option-container ul li label');


    const requestUrl = `${window.location.origin}/api/assessment/get/?test=${testName}&ctg=${ctg}`

    Ajax.get(requestUrl, (response)=>{
        const data = JSON.parse(response);
        if(data.error){
            loadingScreen.innerHTML = `<h1>${data.message}</h1>`;
        }
        const assessment = data.data;
        console.log(assessment);

        const questions = generateQuestionsArray(assessment.questions);

        let currentQuestionIndex = 0;

        labels.forEach(function (label) {
            label.addEventListener('click', function () {
                const input = label.previousElementSibling.querySelector('input[type="radio"]');
                input.checked = true;
                handleOptionSelection(input.parentElement.querySelector("button"));
            });
        });
  

        skipQuestionButton.addEventListener("click", function () {
            skipCurrentQuestion();
        });
 
        function skipCurrentQuestion() {
            // Find the index of the next unanswered question
            const nextUnansweredIndex = questions.findIndex(question => !question.answered && !question.markedForReview && !question.answeredMarkedReview && !question.skipped);

            if (nextUnansweredIndex !== -1) {
                // Skip to the next unanswered question
                currentQuestionIndex = nextUnansweredIndex;
                questions[currentQuestionIndex].skipped = true; // Set the skipped property to true
                displayQuestion();
                clearResponse();
                restartTimer();
            } else {
                // Handle completion of the quiz
                alert("You have not attempted the question");
                console.log("Quiz completed!");
            }
        }

        function displayQuestion() {
            const currentQuestion = questions[currentQuestionIndex];
            const questionTitle = document.querySelector(".question-title");
            const optionLabels = document.querySelectorAll(".option-container ul li label");
            const questionProgress = document.getElementsByClassName("active-question");
            const questionNumbersContainer = document.querySelector(".current-question-progress");
            const answeredCountElement = document.querySelector(".answered-count");
            const unansweredCountElement = document.querySelector(".unanswered-count");
            const markedReviewCountElement = document.querySelector(".marked-review-count");
            const answeredMarkedReviewCountElement = document.querySelector(".answered-marked-review-count");

            questionProgress[0].textContent = 'Question ' + (currentQuestionIndex + 1) + ' of ' + questions.length;
            questionTitle.textContent = currentQuestion.question;

            optionLabels.forEach(function (label, index) {
                label.textContent = currentQuestion.options[index];
            });

            // Clear existing question numbers
            questionNumbersContainer.innerHTML = '';

            let answeredCount = 0;
            let unansweredCount = 0; // Initialize unanswered count to 0
            let markedReviewCount = 0;
            let skippedCount = 0;
            let answeredMarkedReviewCount=0

            // Create and append div elements for each question number
            questions.forEach(function (question, index) {
                const numberDiv = document.createElement('div');
                numberDiv.textContent = index + 1;
                numberDiv.classList.add("current-question-status");

                if (index === currentQuestionIndex) {
                    if (currentQuestion.answered) {
                        numberDiv.classList.add("answered");
                        answeredCount++;
                    } else if (currentQuestion.markedForReview) {
                        numberDiv.classList.add("marked-for-review");
                        markedReviewCount++;
                    } else if (currentQuestion.skipped) {
                        numberDiv.classList.add("skipped");
                        skippedCount++;
                    } else if(currentQuestion.answeredMarkedReview){
                        numberDiv.classList.add("answered-marked-review");
                        answeredMarkedReviewCount++
                    } else {
                        numberDiv.classList.add("not-answered");
                        if (!currentQuestion.skipped) { // Count as unanswered only if not skipped
                            unansweredCount++; // Increment unanswered count if the question is not answered
                        }
                    }
                } else {
                    if (question.answered) {
                        numberDiv.classList.add("answered");
                        answeredCount++;
                    } else if (question.markedForReview) {
                        numberDiv.classList.add("marked-for-review");
                        markedReviewCount++;
                    } else if (question.skipped) {
                        numberDiv.classList.add("skipped");
                        skippedCount++;
                    }  else if(question.answeredMarkedReview){
                        numberDiv.classList.add("answered-marked-review")
                        answeredMarkedReviewCount++
                    } else {
                        numberDiv.classList.add("not-answered");
                        unansweredCount++;
                    }
                
                }

                questionNumbersContainer.appendChild(numberDiv);
            });

            // Add event listener to each question number element
            questionNumbersContainer.addEventListener("click", function (event) {
                var clickedDiv = event.target;
                if (clickedDiv.classList.contains("current-question-status")) {
                    var clickedQuestionIndex = parseInt(clickedDiv.textContent) - 1;
                    currentQuestionIndex = clickedQuestionIndex;
                    displayQuestion();
                }
            });

            // Update count of unanswered questions
            unansweredCountElement.textContent = skippedCount;

            // Update count of answered questions
            answeredCountElement.textContent = answeredCount;

            // Update count of questions marked for review
            markedReviewCountElement.textContent = markedReviewCount;

            answeredMarkedReviewCountElement.textContent = answeredMarkedReviewCount
            // If the current question is the last one and it's answered, update its background color
            if (currentQuestionIndex === questions.length - 1 && currentQuestion.answered) {
                document.querySelector('.current-question-status:last-child').classList.add('answered');
            }
        }





        skipQuestionButton.addEventListener("click", function () {
            if (currentQuestionIndex < questions.length-1) {
                questions[currentQuestionIndex].answered = false;
                currentQuestionIndex++;
                displayQuestion();
                clearResponse();
                restartTimer();
            } else {
                alert("You have not attempted the question");
            }
        });


        function handleOptionSelection(element) {
            var selectedElement = element.tagName.toLowerCase() === 'button' ? element : element.querySelector('.option-container ul li label');
            var optionButtons = document.querySelectorAll(".select-option button");

            optionButtons.forEach(function (btn) {
                btn.classList.remove("option-selected");
            });

            selectedElement.classList.add("option-selected");


        }




        function isOptionSelected() {
            var optionButtons = document.querySelectorAll(".select-option button");
            var selected = false;
            optionButtons.forEach(function (btn) {
                if (btn.classList.contains("option-selected")) {
                    selected = true;
                }

            });
            return selected;
        }


        function clearResponse() {
            var optionButtons = document.querySelectorAll(".select-option button");
            optionButtons.forEach(function (btn) {
                btn.classList.remove("option-selected");
            });
        }

        function submitAnswer() {
            if (currentQuestionIndex < questions.length && isOptionSelected() && !questions[currentQuestionIndex].answered) {
                var selectedOptionIndex = Array.from(document.querySelectorAll('.select-option button')).findIndex(btn => btn.classList.contains('option-selected'));
                var selectedOption = questions[currentQuestionIndex].options[selectedOptionIndex];
                console.log("Selected option:", selectedOption); 
                questions[currentQuestionIndex].answered = true;
                console.log("Answer submitted for question index:", currentQuestionIndex);
                var answeredCountElement = document.querySelector(".answered-count");
                answeredCountElement.textContent = parseInt(answeredCountElement.textContent) + 1;
                
                // Update background color of the question number to green
                var questionNumberDiv = document.querySelector('.current-question-progress').children[currentQuestionIndex];
                questionNumberDiv.classList.remove('not-answered', 'marked-for-review', 'skipped');
                questionNumberDiv.classList.add('answered');
                
            } else {
                console.log("Cannot submit answer. Current question index exceeds the length of questions array or question already answered.");

            }
            
            // Check if all questions are answered, then update UI
            var allAnswered = questions.every(function (question) {
                return question.answered || question.markedForReview;
            });

            if (allAnswered) {
                displaySolution();
            }
        }


        const nextButton = document.querySelector(".next-btn");
        nextButton.addEventListener("click", submitAnswer);


        function enableNextButton() {
            var nextButton = document.querySelector(".next-btn");
            nextButton.disabled = !isOptionSelected();
        }

        var optionButtons = document.querySelectorAll(".select-option button");
        optionButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                handleOptionSelection(this);
                enableNextButton(); // Enable or disable next button when an option is selected
            });
        });

  
        function goToNextQuestion() {
            if (currentQuestionIndex < questions.length - 1) {
                if (questions[currentQuestionIndex].answered || questions[currentQuestionIndex].markedForReview || questions[currentQuestionIndex].answeredMarkedReview) {
                    currentQuestionIndex++;
                    displayQuestion();
                    clearResponse();
                    restartTimer();
                } else {
                    alert("Please select an option before proceeding to the next question.");
                }
            } else {
                var answeredQuestions = questions.filter(function (question) {
                    return question.answered;
                }).length;

                alert("You have completed the test successfully! Number of questions answered: " + answeredQuestions);
                console.log("Quiz completed!");
                // Optionally, you can add more actions to perform after the test is completed
            }
        }
        function calculateCorrectAnswers() {
            var correctCount = 0;
            questions.forEach(function (question) {
                if (question.answered) {
                    var selectedOptionIndex = question.options.findIndex((option) => option === question.answer);
                    if (selectedOptionIndex !== -1) {
                        correctCount++;
                    }
                }
            });
            return correctCount;
        }


        function stopTimer() {
            clearInterval(timerInterval);
        }

        function showAlertWithCorrectAnswers() {
            stopTimer();
            var correctCount = calculateCorrectAnswers();
            var totalQuestions = questions.length;
            var modalText = "You have completed the test successfully!";
            
            // Show the modal
            var modal = document.getElementById("modal");
            modal.style.display = "block";

            // Show solution for the current question
            var solutionContainer = document.querySelector('.solution-container');
            solutionContainer.style.display = 'block';
            solutionContainer.innerHTML = "<div class='container'><h2>Solution for Question " + (currentQuestionIndex + 1) + "</h2><p>" + questions[currentQuestionIndex].solution + "</p></div>";

            // Disable option buttons and other buttons except next button
            var optionButtons = document.querySelectorAll(".select-option button");
            optionButtons.forEach(function (button) {
                button.disabled = true;
            });

            skipQuestionButton.disabled = true;

            var markReviewButton = document.querySelector(".mark-review-btn");
            markReviewButton.disabled = true;

            var clearResponseButton = document.querySelector(".clear-response-btn");
            clearResponseButton.disabled = true;

            var closeButton = document.querySelector(".close");
            closeButton.disabled = true;
        }

        const closeButton = document.querySelector(".close");
        closeButton.addEventListener("click", function() {
            var modal = document.getElementById("modal");
            modal.style.display = "none";
        });



        function goToNextQuestion() {
            if (currentQuestionIndex < questions.length - 1) {
                if (questions[currentQuestionIndex].answered || questions[currentQuestionIndex].markedForReview || questions[currentQuestionIndex].answeredMarkedReview) {
                    currentQuestionIndex++;
                    displayQuestion();
                    clearResponse();
                    restartTimer();
                } else {
                    alert("Please select an option before proceeding to the next question.");
                }
            } else {
                showAlertWithCorrectAnswers();
            }
        }


        const markReviewButton = document.querySelector(".mark-review-btn")
        markReviewButton.addEventListener("click", function () {
            if (isOptionSelected()) {
                questions[currentQuestionIndex].answeredMarkedReview = true; // Set answeredMarkedReview to true
            } else {
                // If no option is selected, just mark the question for review
                questions[currentQuestionIndex].markedForReview = true;
            }
            goToNextQuestion();
            displayQuestion();
        });

  
        let timerInterval;

        function startTimer() {
            const timerElement = document.querySelector('.timer');
            let timeRemaining = convertTimeToSeconds(assessment.time);

            timerInterval = setInterval(function () {
                var minutes = Math.floor(timeRemaining / 60);
                var seconds = timeRemaining % 60;

                timerElement.textContent = minutes.toString().padStart(2, '0') + ':' + seconds.toString().padStart(2, '0');
                timeRemaining--;

                if (timeRemaining < 0) {
                    clearInterval(timerInterval);
                    goToNextQuestion();
                }
            }, 1000);
        }


        function restartTimer() {
            clearInterval(timerInterval);
            startTimer();
        }



        nextButton.addEventListener("click", function () {
            if (isOptionSelected()) {
                submitAnswer();
            }
            goToNextQuestion();
        });

        const clearResponseButton = document.querySelector(".clear-response-btn");
        clearResponseButton.addEventListener("click", function () {
            clearResponse();
        });

        displayQuestion();
        aptitudeHeader.innerHTML = assessment.category.name;
        mockTestHeader.innerHTML = assessment.name;
        mainSection.classList.remove('d-none');
        loadingScreen.classList.add('d-none');

        startTimer();

        function displaySolution() {
    var currentQuestion = questions[currentQuestionIndex];
    var solutionContainer = document.querySelector('.solution-container .container');
    solutionContainer.innerHTML = ''; // Clear previous content

    var solutionHTML = '';

    solutionHTML += '<div class="question">';
    solutionHTML += '<h3>Question:</h3>';
    solutionHTML += '<p>' + currentQuestion.question + '</p>';
    solutionHTML += '<p>Correct Answer: ' + currentQuestion.answer + '</p>';
    solutionHTML += '<p>Options:</p>';
    solutionHTML += '<ul>';

    // Loop through options to display all options
    currentQuestion.options.forEach(function (option, optionIndex) {
        var optionChar = String.fromCharCode(65 + optionIndex); // Convert index to option letter (A, B, C, D...)
        var isCorrect = optionChar === currentQuestion.answer.split(' ')[1];
        solutionHTML += '<li>' + optionChar + '. ' + option + (isCorrect ? ' (Correct)' : '') + '</li>';
    });

    solutionHTML += '</ul>';
    solutionHTML += '</div>';

    solutionContainer.innerHTML = solutionHTML; // Set the HTML content of the solution container

    // Display the solution container
    solutionContainer.style.display = 'block';

    // Disable option selection buttons in solution mode
    var optionButtons = document.querySelectorAll('.select-option button');
    optionButtons.forEach(function (button) {
        button.disabled = true;
    });
}
    });
});







