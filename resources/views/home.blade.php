@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @role('web-developer')
				Web Developer Panel
			 @endrole	
			@hello('Unai')
                <?php
                
             
                
                if(auth()->check() && auth()->user()->hasRole('web-developer')){
                    echo "dsaf";
                }
                
       
                $user = App\User::find(1);
      //          dd($user->hasRole('web-developer')); // will return true
//                dd($user->hasRole('project-manager'));// will return false
              //  dd($user->givePermissionsTo('manage-users'));
   //             dd($user->hasPermission('manage-users'));// will return true
                 
                dd($user->can('manage-users'));
                
                 ?>
         
      
				 </div>
            </div>
        </div>
    </div>
</div>
@endsection
