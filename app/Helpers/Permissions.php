<?php

    function check_user_permissions($request, $actionName = NULL, $id = NULL)
{
    //get current user
    $currentUser = $request->user();

    //get current Action Name

    if($actionName)
    {
        $currentActionName = $actionName;
    }

    else{
        $currentActionName = $request->route()->getActionName();
    }

    list($controller, $method) = explode('@', $currentActionName);
    $controller = str_replace(["App\\Http\\Controllers\\", "Controller"], "", $controller);
    
    $crudPermissionsMap = [

      // 'create' => ['create', 'store'],
      // 'update' => ['edit', 'update'],
       //  'delete' => ['destroy', 'restore', 'forceDestroy'],
       // 'read' => ['index', 'view', 'createPost', 'paymentIndex']

        'crud' => ['create', 'store', 'edit', 'home', 'userEdit', 'createPost','update', 'destroy', 'restore', 'forceDestroy', 'index', 'view']
        
    ];

    $classesMap = [
        'Admin' => 'post',
        'Post' => 'post',
        'Payment' => 'payment',
        'User' => 'post'
    ];

    foreach ($crudPermissionsMap as $permission => $methods)
    {

        // if the current method exists in the methods list
        // we'll check the permission

        if (in_array($method, $methods) && isset($classesMap[$controller]))
        {
            $className = $classesMap[$controller];

            //dd("{$permission}-{$className}");

            if ($className == 'post' && in_array($method, ['edit', 'index', 'createPost', 'update', 'destroy', 'restore', 'forceDestroy']) )
            {
                if(! $currentUser->can('member-index'))
                {
                   // alert()->info('Unauthorized access.')->autoclose(3000);

                    return false;
                    
                }
                
            }

            elseif ($className == 'payment' && in_array($method, ['edit', 'paymentIndex', 'index', 'createPost', 'update', 'destroy', 'restore', 'forceDestroy']) )
            {
                if( ! $currentUser->can('payment-index') )
                {
                    //alert()->info('Unauthorized access.')->autoclose(3000);

                    return false;
                    
                }
                
            }
        
           // if the user does not have permission don't allow next request
            elseif( ! $currentUser->can("{$permission}-{$className}"))
            {
                //alert()->info('You do not have permission for this action.')->autoclose(3000);

                return false;
            }

            break;
            

        }

    }
    
   

    return true;
}