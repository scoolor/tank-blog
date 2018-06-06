<?php
/**
 * User: liuhao
 * Date: 18-6-5
 * Time: 上午10:57
 */

namespace engine\application\base;


abstract class BaseApplication extends Component
{
    public function __construct(array $config = [])
    {
        $components = $this->coreComponents();
        if (!empty($config['components']) && is_array($config['components'])) {
            foreach ($config['components'] as $name => $eachItem) {
                if (isset($components[$name])) {
                    $components[$name] = array_merge($components[$name], $config['components'][$name]);
                } else {
                    $components[$name] = $config['components'][$name];
                }
            }
        }
        $this->loadComponents($components);
    }

    public function run()
    {
        try {

            $request = $this->getRequest();

            $response = $this->handle($request);

            $response->send();

        } catch (\Exception $e) {
            var_dump($e->getMessage());
            var_dump($e->getTrace());
        }

    }

    /**
     * @return BaseRequest
     */
    abstract public function getRequest();

    /**
     * @return BaseResponse
     */
    abstract public function getResponse();


    /**
     * @param BaseRequest $request
     * @return BaseResponse
     */
    abstract public function handle($request);

    abstract protected function coreComponents():array;


    public function runAction()
    {

    }
}