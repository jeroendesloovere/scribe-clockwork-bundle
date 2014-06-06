<?php
/*
 * This file is part of the Scribe World Application.
 *
 * (c) Scribe Inc. <scribe@scribenet.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Scribe\ClockworkBundle\Exception;

/**
 * ClockworkException class
 */
class ClockworkException extends \RuntimeException implements \Serializable
{
    /**
     * @return array
     */
    public function serialize()
    {
        return serialize(array(
            $this->code,
            $this->message,
            $this->file,
            $this->line,
        ));
    }

    /**
     * @param string $string
     */
    public function unserialize($string)
    {
        list(
            $this->token,
            $this->code,
            $this->message,
            $this->file,
            $this->line
        ) = unserialize($string);
    }

    /**
     * @return string
     */
    public function getMessageKey()
    {
        return 'A clockwork exception occurred.';
    }

    /**
     * @return array
     */
    public function getMessageData()
    {
        return array();
    }
}