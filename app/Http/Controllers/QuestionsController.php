<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Questions;
use App\Models\answer;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $questions = Questions::with('answer')->orderBy('id', 'desc')->paginate(5);

        return view('qustion.index', compact('questions'));
    }

    public function create()
    {
        return view('qustion.quiz');
    }

    public function store(Request $request)
    {
        $questions = $request->List_Classes;

        try {
            foreach ($questions as $question) {
                $My_questions = new Questions();
                $My_questions->qustion = $question['questions'];
                $My_questions->right_answer = $question['right_answer'];
                $My_questions->save();
            }
            toastr()->success(trans('messages.success'));
            return redirect()->route('questions.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function storeAnswer(Request $request)
    {
        $answers = $request->List_Classes;

        try {
            //$validated = $request->validate();
            foreach ($answers as $answer) {
                $My_answers = new answer();
                $My_answers->answer = $answer['answer'];
                $My_answers->qid = $answer['qustion_id'];
                $My_answers->save();
            }
            toastr()->success(trans('messages.success'));
            return redirect()->route('questions.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show()
    {
        return $questions = Questions::with('answer')->orderBy('id', 'desc')->get();
    }

    public function edit(Questions $questions)
    {
        //
    }

    public function update(Request $request, Questions $questions)
    {
        //
    }

    public function destroy(Questions $questions)
    {
        //
    }
}
