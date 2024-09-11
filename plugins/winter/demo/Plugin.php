<?php namespace Winter\Demo;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

use Illuminate\Support\Facades\View;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Winter Demo',
            'description' => 'Provides features used by the provided demonstration theme.',
            'author'      => 'Alexey Bobkov, Samuel Georges',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            '\Winter\Demo\Components\Todo' => 'demoTodo'
        ];
    }

    public function register()
    {
        View::share('name', 'Школа №123');
        View::share('fullName', 'МОУ "Средняя школа №123"');
        View::share('orgName', 'Школа');
        View::share('orgNumber', '№123');
        View::share('phoneNumber', '+7(999)-999-9999');
        View::share('emailAddress', 'info@example.com');
    }
}
