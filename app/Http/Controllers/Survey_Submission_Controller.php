<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class Survey_Submission_Controller extends BaseController
{
	public function index(Request $request)
	{
		$language = empty($request->language) ? null : $request->language;
		$age = empty($request->age) ? null : $request->age;
		$office_located = empty($request->office_located) ? null : $request->office_located;
		$gender	 = empty($request->gender) ? null : $request->gender	;
		$joining_years = empty($request->joining_years) ? null : $request->joining_years;
		$department_size = empty($request->department_size) ? null : $request->department_size;
		$metro_organization_team = empty($request->metro_organization_team) ? null : $request->metro_organization_team;
		$intro_section_question1 = empty($request->intro_section_question1) ? null : $request->intro_section_question1;
		$intro_section_question2 = empty($request->intro_section_question2) ? null : $request->intro_section_question2;
		$intro_section_question3 = empty($request->intro_section_question3) ? null : $request->intro_section_question3;
		$personal_level_step1 = empty($request->personal_level_step1) ? null : $request->personal_level_step1;
		$personal_level_step2_organic = empty($request->personal_level_step2_organic) ? null : $request->personal_level_step2_organic;
		$personal_level_step2_bio = empty($request->personal_level_step2_bio) ? null : $request->personal_level_step2_bio;
		$personal_level_step2_allsame = empty($request->personal_level_step2_allsame) ? null : $request->personal_level_step2_allsame;
		$personal_level_step3 = empty($request->personal_level_step3) ? null : $request->personal_level_step3;
		$personal_level_step4 = empty($request->personal_level_step4) ? null : $request->personal_level_step4;
		$personal_level_step5 = empty($request->personal_level_step5) ? null : $request->personal_level_step5;
		$personal_level_step5_never = empty($request->personal_level_step5_never) ? null : $request->personal_level_step5_never;
		$personal_level_step6 = empty($request->personal_level_step6) ? null : $request->personal_level_step6;
		$personal_level_step6_never = empty($request->personal_level_step6_never) ? null : $request->personal_level_step6_never;
		$personal_level_step7 = empty($request->personal_level_step7) ? null : $request->personal_level_step7;
		$personal_level_step7_never = empty($request->personal_level_step7_never) ? null : $request->personal_level_step7_never;
		$personal_level_step8 = empty($request->personal_level_step8) ? null : $request->personal_level_step8;
		$personal_level_step8_never = empty($request->personal_level_step8_never) ? null : $request->personal_level_step8_never;
		$personal_level_step9 = empty($request->personal_level_step9) ? null : $request->personal_level_step9;
		$personal_level_step9_never = empty($request->personal_level_step9_never) ? null : $request->personal_level_step9_never;
		$personal_level_step10 = empty($request->personal_level_step10) ? null : $request->personal_level_step10;
		$personal_level_step10_never = empty($request->personal_level_step10_never) ? null : $request->personal_level_step10_never;
		$personal_level_step11 = empty($request->personal_level_step11) ? null : $request->personal_level_step11;
		$personal_level_step12 = empty($request->personal_level_step12) ? null : $request->personal_level_step12;
		$personal_level_step13 = empty($request->personal_level_step13) ? null : $request->personal_level_step13;
		$personal_level_step14 = empty($request->personal_level_step14) ? null : $request->personal_level_step14;
		$personal_level_step15 = empty($request->personal_level_step15) ? null : $request->personal_level_step15;
		$personal_level_step16 = empty($request->personal_level_step16) ? null : $request->personal_level_step16;
		$personal_level_step17 = empty($request->personal_level_step17) ? null : $request->personal_level_step17;
		$personal_level_step19 = empty($request->personal_level_step19) ? null : $request->personal_level_step19;
		$personal_level_step20 = empty($request->personal_level_step20) ? null : $request->personal_level_step20;
		$personal_level_step21 = empty($request->personal_level_step21) ? null : $request->personal_level_step21;
		$final_level_step1 = empty($request->final_level_step1) ? null : $request->final_level_step1;
		$final_level_step2_ques1 = empty($request->final_level_step2_ques1) ? null : $request->final_level_step2_ques1;
		$final_level_step2_ques2 = empty($request->final_level_step2_ques2) ? null : $request->final_level_step2_ques2;
		$final_level_step2_ques3 = empty($request->final_level_step2_ques3) ? null : $request->final_level_step2_ques3;
		$final_level_step2_ques4 = empty($request->final_level_step2_ques4) ? null : $request->final_level_step2_ques4;
		$final_level_step2_ques5 = empty($request->final_level_step2_ques5) ? null : $request->final_level_step2_ques5;
		$final_level_step2_ques6 = empty($request->final_level_step2_ques6) ? null : $request->final_level_step2_ques6;
		$final_level_step2_ques7 = empty($request->final_level_step2_ques7) ? null : $request->final_level_step2_ques7;
		$final_level_step2_ques8 = empty($request->final_level_step2_ques8) ? null : $request->final_level_step2_ques8;
		$final_level_step3 = empty($request->final_level_step3) ? null : $request->final_level_step3;
		$final_level_step4 = empty($request->final_level_step4) ? null : $request->final_level_step4;
		$final_level_step5 = empty($request->final_level_step5) ? null : $request->final_level_step5;
		$final_level_step6 = empty($request->final_level_step6) ? null : $request->final_level_step6;
		$final_level_step7_1 = empty($request->final_level_step7_1) ? null : $request->final_level_step7_1;
		$final_level_step7_2 = empty($request->final_level_step7_2) ? null : $request->final_level_step7_2;
		$final_level_step7_3 = empty($request->final_level_step7_3) ? null : $request->final_level_step7_3;
		$final_level_step7_4 = empty($request->final_level_step7_4) ? null : $request->final_level_step7_4;
		$final_level_step7_5 = empty($request->final_level_step7_5) ? null : $request->final_level_step7_5;
		$final_level_step7_6 = empty($request->final_level_step7_6) ? null : $request->final_level_step7_6;
		$final_level_step7_7 = empty($request->final_level_step7_7) ? null : $request->final_level_step7_7;
		$survey_rating = empty($request->survey_rating) ? null : $request->survey_rating;
		$badge_calculation_elements = [$intro_section_question2,$personal_level_step1,$personal_level_step3,$personal_level_step5,$personal_level_step6,$personal_level_step7,$personal_level_step8,$personal_level_step9,$personal_level_step10,$personal_level_step20,$final_level_step5];
		$total_badge_score = array_sum($badge_calculation_elements);
		$country_data = array(
                'age' => $age,
                'office_located' => $office_located,
                'gender' => $gender,
                'joining_years' => $joining_years,
                'department_size' => $department_size,
                'metro_organization_team' => $metro_organization_team,
                'intro_section_question1' => $intro_section_question1,
                'intro_section_question2' => $intro_section_question2,
                'intro_section_question3' => $intro_section_question3,
                'personal_level_step1' => $personal_level_step1,
                'personal_level_step2_organic' => $personal_level_step2_organic,
                'personal_level_step2_bio' => $personal_level_step2_bio,
                'personal_level_step2_allsame' => $personal_level_step2_allsame,
                'personal_level_step3' => $personal_level_step3,
                'personal_level_step4' => $personal_level_step4,
                'personal_level_step5' => $personal_level_step5,
                'personal_level_step6' => $personal_level_step6,
                'personal_level_step6_never' => $personal_level_step6_never,
                'personal_level_step7' => $personal_level_step7,
                'personal_level_step7_never' => $personal_level_step7_never,
                'personal_level_step8' => $personal_level_step8,
                'personal_level_step8_never' => $personal_level_step8_never,
                'personal_level_step9' => $personal_level_step9,
                'personal_level_step9_never' => $personal_level_step9_never,
                'personal_level_step10' => $personal_level_step10,
                'personal_level_step10_never' => $personal_level_step10_never,
                'personal_level_step11' => $personal_level_step11,
                'personal_level_step12' => $personal_level_step12,
                'personal_level_step13' => $personal_level_step13,
                'personal_level_step14' => $personal_level_step14,
                'personal_level_step15' => $personal_level_step15,
                'personal_level_step16' => $personal_level_step16,
                'personal_level_step17' => $personal_level_step17,
                'personal_level_step19' => $personal_level_step19,
                'personal_level_step20' => $personal_level_step20,
                'personal_level_step21' => $personal_level_step21,
                'final_level_step1' => $final_level_step1,
                'final_level_step2_ques1' => $final_level_step2_ques1,
                'final_level_step2_ques2' => $final_level_step2_ques2,
                'final_level_step2_ques3' => $final_level_step2_ques3,
                'final_level_step2_ques4' => $final_level_step2_ques4,
                'final_level_step2_ques5' => $final_level_step2_ques5,
                'final_level_step2_ques6' => $final_level_step2_ques6,
                'final_level_step2_ques7' => $final_level_step2_ques7,
                'final_level_step2_ques8' => $final_level_step2_ques8,
                'final_level_step3' => $final_level_step3,
                'final_level_step4' => $final_level_step4,
                'final_level_step5' => $final_level_step5,
                'final_level_step6' => $final_level_step6,
                'final_level_step7_1' => $final_level_step7_1,
                'final_level_step7_2' => $final_level_step7_2,
                'final_level_step7_3' => $final_level_step7_3,
                'final_level_step7_4' => $final_level_step7_4,
                'final_level_step7_5' => $final_level_step7_5,
                'final_level_step7_6' => $final_level_step7_6,
                'final_level_step7_7' => $final_level_step7_7,
                'survey_rating' => $survey_rating,
				'language' => $language,
				'total_badge_score' => $total_badge_score
                );
               $execution = DB::table('survey_data')->insert($country_data);
			   if(isset($execution)){
				echo json_encode(array(
				"status" => "success",
				"badge_score" => $total_badge_score
				),JSON_UNESCAPED_SLASHES);
			   }

	}
}
