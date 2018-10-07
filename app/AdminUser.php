<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    protected $table = 'admin_users';
    protected $rememberTokenName = '';
    protected $guarded = []; //不可以注入的字段
}
