<?php



 
if (!function_exists('classActiveRoute')) {
    function classActiveRoute($route)
    {
        return Route::current()->getName() == $route ? 'act' : '';            
    }
}