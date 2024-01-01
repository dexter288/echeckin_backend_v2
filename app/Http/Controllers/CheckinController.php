<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckinController extends Controller
{
    /**
     * Saving a new checkin request.
     */
    public function apiCheckin(Request $request){

        //validate incoming request
        $rules = [
            'user_id' => 'required|integer',
            // 'department' => 'required|integer|exists:departments,id',
            'department_id' => 'required',
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'surname' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            // 'cellphone' => 'required|string|min:10|max:10',
            'cellphone' => 'required|string',
            'omang' => 'nullable|string|min:6|max:6',
            'passport_number' => 'nullable|string|max:255',
            'nationality' => 'required|string|max:255',
        ];

        $messages = [
            'user_id.required' => 'The user ID is required.',
            'user_id.integer' => 'The user ID must be an integer.',
            'department.required' => 'The department ID is required.',
            'department.integer' => 'The department ID must be an integer.',
            'department.exists' => 'The department ID does not exist.',
            'firstname.required' => 'The first name is required.',
            'firstname.string' => 'The first name must be a string.',
            'firstname.max' => 'The first name must be no more than 255 characters long.',
            'middlename.nullable' => 'The middle name is optional.',
            'middlename.string' => 'The middle name must be a string.',
            'middlename.max' => 'The middle name must be no more than 255 characters long.',
            'surname.required' => 'The surname is required.',
            'surname.string' => 'The surname must be a string.',
            'surname.max' => 'The surname must be no more than 255 characters long.',
            'status.required' => 'The status is required.',
            'status.string' => 'The status must be a string.',
            'status.max' => 'The status must be no more than 255 characters long.',
            'cellphone.required' => 'The cellphone number is required.',
            'cellphone.string' => 'The cellphone number must be a string.',
            'cellphone.min' => 'The cellphone number must be at least 10 characters long.',
            'cellphone.max' => 'The cellphone number must be no more than 10 characters long.',
            'omang.nullable' => 'The Omang number is optional.',
            'omang.string' => 'The Omang number must be a string.',
            'omang.min' => 'The Omang number must be at least 6 characters long.',
            'omang.max' => 'The Omang number must be no more than 6 characters long.',
            'passport_number.nullable' => 'The passport number is optional.',
            'passport_number.string' => 'The passport number must be a string.',
            'passport_number.max' => 'The passport number must be no more than 255 characters long.',
            'nationality.required' => 'The nationality is required.',
            'nationality.string' => 'The nationality must be a string.',
            'nationality.max' => 'The nationality must be no more than 255 characters long.',
        ];

        $validator = Validator::make(
            $request->all(),
            $rules,
            $messages
        );

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $visitor = Visitor::where('cellphone',$request->cellphone)->first();
        if(!Visitor::where('cellphone',$request->cellphone)->exists()){
            //create new visitor
            $visitor = new Visitor();
            $visitor->firstname = $request->firstname;
            $visitor->middlename = $request->middlename;
            $visitor->surname = $request->surname;
            // $visitor->status = $request->status ?? 'ok';
            $visitor->cellphone = $request->cellphone;
            $visitor->omang = $request->omang;
            $visitor->passport_number = $request->passport_number;
            $visitor->nationality = $request->nationality;
            $visitor->save();
        }

        //create new visitor log
        $visitor_log = new VisitorLog();
        $visitor_log->visitor_id = $visitor->id;
        $visitor_log->user_id = $request->user_id;
        $visitor_log->department_id = $request->department_id;
        $visitor_log->save();

        return response()->json([
            'message' => 'Visitor checked in successfully',
            'visitor' => $visitor,
            'visitor_log' => $visitor_log
        ], 201);

    }
}
