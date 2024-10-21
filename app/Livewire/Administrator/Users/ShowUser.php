<?php

namespace App\Livewire\Administrator\Users;

use App\Models\User;
use Livewire\Component;

class ShowUser extends Component
{
  public ProfileForm $profile;
  public User $user;
  public $identity_type;

  public function mount(User $user)
  {
    $this->profile->setProfile($user);
  }
  public function render()
  {
    return view('_administrator.users.show');
  }
}
