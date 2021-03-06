<?php

/*
 * This file is part of PhpSpec, A php toolset to drive emergent
 * design by specification.
 *
 * (c) Marcello Duarte <marcello.duarte@gmail.com>
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpSpec\Formatter\Presenter;

final class TaggingPresenter implements PresenterInterface
{
    /**
     * @var Presenter
     */
    private $presenter;

    /**
     * @param Presenter $presenter
     */
    public function __construct(Presenter $presenter)
    {
        $this->presenter = $presenter;
    }

    /**
     * @param \Exception $exception
     * @param bool $verbose
     * @return string
     */
    public function presentException(\Exception $exception, $verbose = false)
    {
        return $this->presenter->presentException($exception, $verbose);
    }

    /**
     * @param string $string
     *
     * @return string
     */
    public function presentString($string)
    {
        return sprintf('<value>%s</value>', $string);
    }

    /**
     * @param mixed $value
     * @return string
     */
    public function presentValue($value)
    {
        return $this->presentString($this->presenter->presentValue($value));
    }
}
