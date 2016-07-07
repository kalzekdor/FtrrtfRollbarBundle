<?php

namespace Ftrrtf\RollbarBundle\Helper;

class UserHelper
{
    /**
     * Get current user info.
     *
     * @param mixed|object $user
     *
     * @return null|array
     */
    public function buildUserData($user)
    {
        $userData = array();
        if(method_exists($user, 'getId'))
        {
            $userData['id']=$user->getUsername();  
        }
        else
        {
            $userData['id']=(string) $user;
        }
         // = method_exists($user, 'getId')
         //    ? 
         //    : 
        $userData['username'] = (string) $user;
        if (method_exists($user, 'getEmail')) {
            $userData['email'] = $user->getEmail();
        }
        return $userData;
    }
}
