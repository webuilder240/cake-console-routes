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
	protected function _welcome()
	{
	}

    /**
     * @return void
     */
    public function main()
    {
        self::_loadRoutes();
        $formatter = "%15s  %-20s  %-20s  %-10s";
        $this->out(sprintf($formatter, 'Method', 'URI Pattern', 'Controller/Action','extensions'));
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

			if (isset($route->options['_ext']) && $route->options['_ext']){
				$ext = implode(',',$route->options['_ext']);
			} else {
				$ext = "none";
			}

			//そもそもControllerが定義されていないものに関しては表示しないようにしている。
			if (isset($route->defaults['controller'])){
				$this->out(
					sprintf($formatter,$outputMethod,$uriPattern,$route->defaults['controller'] .'/' .$route->defaults['action'],$ext)
				);
			}
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
