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
        var_dump(">>>>>>>>>>>>>>>>>>>>>C H E C K P O I N T R E A C H E D<<<<<<<<<<<<<<<<:".sprintf("%s|%s",__CLASS__, __LINE__));
        var_dump(get_class($user));
        $userData = array();
        var_dump(">>>>>>>>>>>>>>>>>>>>>C H E C K P O I N T R E A C H E D<<<<<<<<<<<<<<<<:".sprintf("%s|%s",__CLASS__, __LINE__));
        if(method_exists($user, 'getId'))
        {
            var_dump(">>>>>>>>>>>>>>>>>>>>>C H E C K P O I N T R E A C H E D<<<<<<<<<<<<<<<<:".sprintf("%s|%s",__CLASS__, __LINE__));
            $userData['id']=$user->getUsername();  
        }
        else
        {
            var_dump(">>>>>>>>>>>>>>>>>>>>>C H E C K P O I N T R E A C H E D<<<<<<<<<<<<<<<<:".sprintf("%s|%s",__CLASS__, __LINE__));
            $userData['id']=(string) $user;
        }
         // = method_exists($user, 'getId')
         //    ? 
         //    : 
        var_dump(">>>>>>>>>>>>>>>>>>>>>C H E C K P O I N T R E A C H E D<<<<<<<<<<<<<<<<:".sprintf("%s|%s",__CLASS__, __LINE__));        
        $userData['username'] = (string) $user;
        var_dump(">>>>>>>>>>>>>>>>>>>>>C H E C K P O I N T R E A C H E D<<<<<<<<<<<<<<<<:".sprintf("%s|%s",__CLASS__, __LINE__));
        if (method_exists($user, 'getEmail')) {
            $userData['email'] = $user->getEmail();
        }

        var_dump(">>>>>>>>>>>>>>>>>>>>>C H E C K P O I N T R E A C H E D<<<<<<<<<<<<<<<<:".sprintf("%s|%s",__CLASS__, __LINE__));
        return $userData;
    }
}
