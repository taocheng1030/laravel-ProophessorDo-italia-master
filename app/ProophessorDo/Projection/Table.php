<?php
/**
 * This file is part of prooph/proophessor-do.
 * (c) 2014-2017 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2017 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\ProophessorDo\Projection;

final class Table
{
    const USER = 'read_user';
    const TODO = 'read_todo';
    const TODO_REMINDER = 'read_todo_reminder';
    const PROBLEM = 'read_problem';
    const PASSAGE = 'read_passage';
    const LESSON = 'read_lesson';
    const UNIT = 'read_unit';
    const PRACTICE_TEST = 'read_practice_test';
    const CATEGORY = 'read_category';
    const TEST = 'read_test';
    const SUBJECT = 'read_subject';
    const SECTION = 'read_section';
    const ANSWER = 'read_answer';
    const ProblemCategory = 'read_problem_category';
    const PROBLEM_CATEGORY = 'read_problem_category';
    const COURSE = 'read_course';
    const PROBLEM_FORMAT = 'read_problem_format';
    const VIDEO = 'read_video';
    const PROBLEM_STATS = 'read_problem_stats';
    const PASSAGE_SUBJECT = 'read_passage_subject';
    const PASSAGE_PROBLEM = 'read_passage_problems';
    const LESSON_TYPE = 'read_lesson_type';
    const LESSON_PROBLEM = 'read_lesson_problem';
    const LESSON_SECTION = 'read_lesson_section';
    const PROBLEM_SECTION = 'read_problem_section';
}
