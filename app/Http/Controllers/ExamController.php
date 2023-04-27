<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Http\Requests\StoreExamRequest;
use App\Http\Requests\UpdateExamRequest;
use App\Models\Course;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $courses = Course::select('id', 'title')->get();

        $exams = Exam::with('course')->orderBy('id', 'DESC');
        if (isset($request['course_id']) && $request['course_id'] != null) {
            $course_id = $request['course_id'];
            $exams->whereHas('course', function ($q) use ($course_id) {
                $q->where('id', '=', $course_id);
            });
        }
        if (isset($request['search']['value'])) {
            $keyword = $request->search['value'];
            $exams->where('title', 'like', "%$keyword%");
        }

        if ($request->ajax()) {

            return DataTable::of($exams)
                ->addColumn('id', function ($row) {
                    return $row->id;
                })
                ->addColumn('course', function ($row) {
                    return $row->course->title;
                })
                ->addColumn('title', function ($row) {
                    return $row->title;
                })
                ->addColumn('date_time', function ($row) {
                    return $row->date_time;
                })
                ->addColumn('action', function ($row) {
                    return $row->id;
                })
                ->toJson();
        }

        return view('modules.exam.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExamRequest $request, Exam $exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        //
    }
}
