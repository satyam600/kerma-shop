<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class LoginRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

    protected $passed;
    protected $errorMessage;

    public function __construct($passed, $errorMessage = 'Invalid credentials.')
    {
        $this->passed = $passed;
        $this->errorMessage = $errorMessage;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->passed;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->errorMessage;
    }
}
