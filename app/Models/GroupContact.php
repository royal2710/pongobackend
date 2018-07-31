<?php

namespace App\Models;


/**
 * 
 */
class GroupContact extends Model
{
	
	protected $fillable = [
         'user_id', 'group_room_id', 'is_admin', 'group_nickname'
    ];

    public function users(){
    	return $this->belongsToMany(User::class);
    }


    public function groupRooms(){
    	return $this->belongsToMany(GroupRoom::class);
    }
}