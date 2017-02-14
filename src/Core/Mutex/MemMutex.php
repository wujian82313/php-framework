<?php
namespace Core\Mutex;

use Core\Cache\CacheInterface;

class MemMutex extends MutexAbstract
{
    /**
     * @var CacheInterface
     */
    public $cache;

    public $lockTime = 0;

    private $prefix = 'lock_';

    public function setCache(CacheInterface $cache)
    {
        $this->cache = $cache;
    }

    protected function doLock($name, $timeout)
    {
        $waitTime = 0;
        while (!$this->cache->add($this->prefix . $name, time(), $this->lockTime)) {
            if ($timeout && ++$waitTime > $timeout) {
                throw new GetLockTimeoutException($name, $timeout);
            }
            sleep(1);
        }
        return true;
    }

    protected function doUnlock($name)
    {
        return $this->cache->rm($this->prefix . $name);
    }

}
