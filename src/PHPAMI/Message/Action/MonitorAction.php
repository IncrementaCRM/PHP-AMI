<?php
/**
 * Monitor action message. Will always record with .wav format and mixing the
 * input and output channels. Also, the filename is mandatory:
 *
 * Mix: true
 * Format: wav
 *
 * PHP Version 5
 *
 * @category   PHPAMI
 * @package    Message
 * @subpackage Action
 * @author     Jaime Ziga <jaime.ziga@gmail.com>
 * @license    http://github.com/Adrian0350/PHP-AMI/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://github.com/Adrian0350/PHP-AMI/
 *
 * Copyright 2011 Marcelo Gornstein <marcelog@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace PHPAMI\Message\Action;

/**
 * Monitor action message. Will always record with .wav format and mixing the
 * input and output channels. Also, the filename is mandatory:
 *
 * Mix: true
 * Format: wav
 *
 * PHP Version 5
 *
 * @category   PHPAMI
 * @package    Message
 * @subpackage Action
 * @author     Jaime Ziga <jaime.ziga@gmail.com>
 * @license    http://github.com/Adrian0350/PHP-AMI/ Apache License 2.0
 * @link       http://github.com/Adrian0350/PHP-AMI/
 */
class MonitorAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $channel  Channel to monitor.
     * @param string $filename Absolute path to target filename.
     *
     * @return void
     */
    public function __construct($channel, $filename)
    {
        parent::__construct('Monitor');
        $this->setKey('Channel', $channel);
        $this->setKey('Mix', 'true');
        $this->setKey('Format', 'wav');
        $this->setKey('File', $filename);
    }
}