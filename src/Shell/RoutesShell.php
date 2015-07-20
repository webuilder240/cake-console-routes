<?php
namespace CakeConsoleRoutes\Shell;

use Cake\Console\Shell;
use Cake\Routing\Router;

/**
 * Class RoutesShell
 * @package App\Shell
 * @todo Pluginで定義されているRouterにも対応する
 */
class RoutesShell extends Shell
{
    /**
     * @return void
     */
    public function main()
    {
        self::_loadRoutes();
        $formatter = "%15s %20s  %15s/%-15s";
        $this->out(sprintf($formatter, 'Method', 'URI Pattern', 'Controller','Action'));
        $this->hr();
        foreach (Router::routes() as $route) {
            if (isset($route->defaults['_method'])){
                if (is_array($route->defaults['_method'])){
                    $outputMethod = implode(',',$route->defaults['_method']);
                } else {
                    $outputMethod = $route->defaults['_method'];
                }
            } else {
                $outputMethod = 'GET';
            }
            $uriPattern = $route->template;
            $this->out(
                sprintf($formatter,$outputMethod,$uriPattern,$route->defaults['controller'],$route->defaults['action'])
            );
            $this->hr();
        }
    }

    /**
     * @todo includeしなくてもビルドインのメソッド使えば何とかなりそうな気がする。
     * @return void
     * @details config/routes.phpをincludeする
     */
    private static function _loadRoutes()
    {
        require_once CONFIG . 'routes.php';
    }
}
