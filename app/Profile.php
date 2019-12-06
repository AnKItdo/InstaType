<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

  protected $guarded = [];

  public function ProfileImage()
  {

  $imagePath = ($this->image) ? $this->image:'/profile/1gyC4DDCeeoM8IOTIoJ3cizMFxR6u1STJcfZCPNm.jpeg';
  return '/storage/'. $imagePath ;
  }

    public function followers()
    {
      return $this->belongsToMany(User::class);
    }

   public function user()
   {
     return $this->belongsTo(User::class);
   }
}
