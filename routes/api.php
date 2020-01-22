<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['command_name'])->group(function () {
    Route::post('/commands/register-user', [
        'as' => 'command::register-user',
        'uses' => 'ApiCommandController@postAction'
    ]);

    /**
     * ### Problem Commands
     */
    Route::post('/commands/create-problem', [
            'as' => 'command:create-problem',
            'uses' => 'ProblemController@create'
    ]);

    Route::put('/commands/update-problem-activity',
        [
            'as' => 'Command:update-problem-activity',
            'uses' => 'ProblemController@updateActivity'
        ]
    );

    Route::put('/commands/update-problem-difficulty',
        [
            'as' => 'Command:update-problem-difficulty',
            'uses' => 'ProblemController@updateDifficulty'
        ]
    );

    Route::put(
        '/commands/update-problem-reference-number',
        [
            'as' => 'command:update-problem-reference-number',
            'uses' => 'ProblemController@updateReferenceNumber'
        ]
    );

    Route::put(
        '/commands/update-problem-format',
        [
            'as' => 'command:update-problem-format',
            'uses' => 'ProblemController@updateFormat'
        ]
    );

    Route::put(
        '/commands/update-problem-notes',
        [
            'as' => 'command:update-problem-notes',
            'uses' => 'ProblemController@updateNotes'
        ]
    );

    Route::put(
        '/commands/update-problem-section',
        [
            'as' => 'command:update-problem-section',
            'uses' => 'ProblemController@updateSection'
        ]
    );

    Route::put(
        '/commands/update-problem-subject',
        [
            'as' => 'command:update-problem-subject',
            'uses' => 'ProblemController@updateSubject'
        ]
    );

    Route::put(
        '/commands/update-problem-text',
        [
            'as' => 'command:update-problem-text',
            'uses' => 'ProblemController@updateText'
        ]
    );

    Route::delete(
        '/commands/delete-problem',
        [
            'as' => 'command:delete-problem',
            'uses' => 'ProblemController@delete'
        ]
    );

    /**
     * Passage Routes
     */
    Route::post('/commands/create-passage',
        [
            'as' => 'command:create-passage',
            'uses' => 'PassageController@create'
        ]);

    Route::patch('/commands/update-passage-text',
        [
            'as' => 'command:update-passage-text',
            'uses' => 'PassageController@updateText'
        ]);

    Route::patch('/commands/update-passage-title',
        [
            'as' => 'command::update-passage-title',
            'uses' => 'PassageController@updateTitle'
        ]);

    Route::patch('/commands/update-passage-subject',
        [
            'as' => 'command::update-passage-subject',
            'uses' => 'PassageController@updateSubject'
        ]);

    Route::patch('/commands/update-passage-active',
        [
            'as' => 'command::update-passage-active',
            'uses' => 'PassageController@updateActive'
        ]);

    Route::patch('/commands/update-passage-notes',
        [
            'as' => 'command::update-passage-notes',
            'uses' => 'PassageController@updateNotes'
        ]);

    Route::patch(
        '/commands/add-problem-to-passage',
        'PassageController@addProblemToPassage'
    );

    Route::delete(
        'commands/delete-passage',
        'PassageController@delete'
    );


    /**
     * Lesson routes
     */
    Route::post('/commands/create-lesson', [
            'as' => 'command:create-lesson',
            'uses' => 'LessonController@create'
    ]);
    Route::post('/commands/create-unit',
        [
            'as' => 'command:create-unit',
            'uses' => 'UnitController@create'
        ]
    );
    Route::post('/commands/create-practice-test',
        [
            'as' => 'command:create-practice-test',
            'uses' => 'PracticeTestController@create'
        ]
    );

    Route::post('/commands/create-category',
        [
            'as' => 'command:create-category',
            'uses' => 'PracticeTestController@create'
        ]
    );

    /**
     * Answer endpoints
     */
    Route::post('/commands/create-answer',
        [
           'as' => 'command:create-answer',
           'uses' => 'AnswerController@create'
        ]);

    Route::delete('/commands/delete-answer',
        [
            'as' => 'command:delete-answer',
            'uses' => 'AnswerController@delete'
        ]
    );

    Route::patch(
        '/commands/answer-choice-changed',
        [
            'as' => 'command:answer-choice-changed',
            'uses' => 'AnswerController@answerChoiceChanged'
        ]
    );

    Route::patch(
        '/commands/change-answer-text',
        [
            'as' => 'command:change-answer-choice',
            'uses' => 'AnswerController@changeAnswerText'
        ]
    );

    Route::patch(
        '/commands/change-answer-sequence',
        [
            'as' => 'command:change-answer-sequence',
            'uses' => 'AnswerController@changeAnswerSequence'
        ]
    );

    /**
     * Subjet Endpoints
     */
    Route::post('/commands/create-subject',
        [
            'as' => 'command:create-subject',
            'uses' => 'SubjectController@create'
        ]
    );

    Route::post('commands/create-category',
        [
            'as' => 'command:create-category',
            'uses' => 'CategoryController@create'
        ]
    );

    Route::post(
        'commands/create-course',
        [
            'as' => 'command:create-course',
            'uses' => 'CourseController@create'
        ]
    );

    Route::post(
        'commands/create-problem-format',
        [
            'as' => 'command:create-problem-format',
            'uses' => 'ProblemFormatController@create'
        ]
    );

    Route::get(
        'commands/create-video',
        [
            'as' => 'command:create-video',
            'uses' => 'VideoController@create'
        ]
    );
});

Route::get(
    '/problems',
    'ProblemController@list'
);

Route::get(
    '/passages',
    'PassageController@list'
);


/**
 * Passage Subject
 */
Route::get(
    '/passage-subjects',
    'PassageSubjectController@list'
);

Route::get(
    '/lessons',
    'LessonController@list'
);

Route::patch(
    '/commands/update-lesson-reference-id',
    'LessonController@updateReferenceId'
);

Route::get(
    '/lesson-sections',
    'LessonSectionController@list'
);

Route::get(
    '/units',
    'UnitController@list'
);

Route::get(
    '/practiceTests',
    'PracticeTestController@list'
);

Route::get(
    '/categories',
    'CategoryController@list'
);

Route::get(
    '/answer',
    'AnswerController@list'
);

Route::get(
    '/subjects',
    'SubjectController@list'
);

Route::get(
    '/courses',
    'CourseController@list'
);

Route::get(
    '/problem-formats',
    'ProblemFormatController@list'
);

/**
 * @todo Student
 */
Route::get(
    '/students',
    'StudentsController@list'
);

Route::get(
    '/students/{student_id}/summaries',
    'StudentsController@summary'
);

Route::get(
    '/students/{student_id}/calendars',
    'StudentsController@calendars'
);

Route::get(
    'students/{student_id}/lessons',
    'StudentsController@lessons'
);

Route::get(
    'students/{student_id}/worksheets',
    'StudentsController@worksheets'
);

Route::get(
    'student/{student_id}/test_sections',
    'StudentsController@testSections'
);

Route::get(
    'student/{student_id}/accounts',
    'StudentsController@account'
);


/**
 * @TODO
 */
Route::get(
    '/instructors',
    'InstructorsController@list'
);


/**
 * @TODO
 */
Route::get(
    '/classes',
    'ClassesController@list'
);

Route::get(
    '/classes/{class_id}/summaries',
    'ClassesController@summaries'
);

Route::get(
    '/classes/{class_id}/calenders',
    'ClassesController@calendars'
);

Route::get(
    '/classes/{class_id}/lessons',
    'ClassesController@lessons'
);

Route::get(
    '/classes/{class_id}/worksheets',
    'ClassesController@worksheets'
);

Route::get(
    '/classes/{class_id}/test_sections',
    'ClassesController@testSections'
);

Route::get(
    '/classes/{class_id}/account',
    'ClassesController@account'
);

/**
 * @TODO
 */
Route::get(
    '/locations',
    'LocationsController@list'
);

Route::get(
    '/locations/{location_id}/summaries',
    'LocationsController@summaries'
);

Route::get(
    '/locations/{location_id}/accounts',
    'LocationsController@accounts'
);


Route::get(
    '/dashboards/upcoming_sessions',
    'DashboardsController@UpcomingSessions'
);

Route::get(
    '/dashboards/stats',
    'DashboardsController@stats'
);

Route::get(
    '/videos',
    'VideoController@list'
);

Route::get(
    '/problem_sections',
    'ProblemSectionController@list'
);



