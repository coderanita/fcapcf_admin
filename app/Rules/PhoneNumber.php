<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PhoneNumber implements ValidationRule
{
  /**
   * Run the validation rule.
   *
   * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
   */
  public function validate(string $attribute, mixed $value, Closure $fail): void
  {
    if (!preg_match('/^(?:\+?([0-9]{1,3}))?[\d\s()]{10,12}$/', $value)) {
      $fail('The :attribute is invalid. Please enter a phone number with an optional international code (up to 3 digits) followed by 10 to 12 digits, spaces, parentheses, or dashes.');
    }
  }
}
