<?php

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('ru_RU');
        $user = User::whereType(2)->first();
        $tests = 5;
        $minQuestions = 5;
        $maxQuestions = 10;
        $minAnswers = 3;
        $maxAnswers = 5;

        for ($i = 0; $i < $tests; $i++)
        {
            $test = $user->tests()->create([
                'name' => $faker->realText(100),
            ]);

            for ($j = 0; $j < rand($minQuestions, $maxQuestions); $j++)
            {
                $multipleAnswers = $faker->boolean();
                $question = $test->questions()->create([
                    'question_text' => $faker->realText(rand(300, 400)),
                    'multiple_answers' => $multipleAnswers,
                ]);

                $hasRight = false;
                for ($k = 0; $k < rand($minAnswers, $maxAnswers); $k++)
                {
                    if ($multipleAnswers)
                    {
                        $isRight = $faker->boolean();
                    }
                    else
                    {
                        if ($hasRight)
                        {
                            $isRight = false;
                        }
                        else
                        {
                            $isRight = $faker->boolean();
                            if ($isRight)
                            {
                                $hasRight = true;
                            }
                        }
                    }
                    $question->answers()->create([
                        'answer_text' => $faker->realText(rand(150, 250)),
                        'is_right' => $isRight,
                    ]);
                }
            }
        }
    }
}
