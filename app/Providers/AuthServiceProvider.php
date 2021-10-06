<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\User;
use App\Models\Role_user;
use App\Models\Permission;
use App\Models\Permission_role;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */

    public function boot()
    {

        $this->registerPolicies();
        $permissions = $this->getPermissions();
        // $roles = $this->getRole();
         


        foreach ($permissions as $permission) {
            gate::define($permission->name, function ($user) use ($permission) {
                
                $permissionIdsOfUser = $this->getPermissionIdsOfUser($user);
              
                return in_array($permission->id, $permissionIdsOfUser);
            });
        }

        // foreach ($roles as $role) {
        //     gate::define($role->name, function ($user) use ($role) {
        //         $roleIds = $this->getRolesOfUser($user);
        //         return in_array($role->id, $roleIds);
        //     });
        // }
    }
    // check permissions
    
    private function getPermissionIdsOfUser($user)
    {
        $cachePermissionUser = Cache::get("permissionIdsOfUser$user->id");
        // dd(Cache::get("permissionIdsOfUser$user->id"));

        if (is_null($cachePermissionUser)) {
            $roleIds = collect(DB::table('role_users')->where('user_id', $user->id)->get())->pluck('role_id')->toArray();
            $permissionIdsOfUser = collect(DB::table('permission_roles')->whereIn('role_id', $roleIds)->get())->pluck('permission_id')->toArray();
            Cache::put("permissionIdsOfUser$user->id",  $permissionIdsOfUser,  $seconds = 3000);
            return $permissionIdsOfUser;
        } else {

            return  $cachePermissionUser;
        }
    }

    private function getPermissions()
    {
        $permission = Cache::get('permissionCache');
       
        if (is_null($permission)) {
            $permission =  Permission::all();
            Cache::put('permissionCache',  $permission, $seconds = 6000);
        }
        return $permission;
    }
}






















        // gate::define('create_comment' , function(User $user) {
        //     foreach(User::find(70)->Roles as $roleUser){  
        //         foreach($roleUser->permission as $permission){
        //               if($permission->id==7){
        //                   return true;
        //               }
        //         }
            
        //     }
        //     return false;
        // });
