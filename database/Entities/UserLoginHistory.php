<?php

/*
 * Copyright (C) 2009 - 2019 Internet Neutral Exchange Association Company Limited By Guarantee.
 * All Rights Reserved.
 *
 * This file is part of IXP Manager.
 *
 * IXP Manager is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation, version v2.0 of the License.
 *
 * IXP Manager is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.  See the GpNU General Public License for
 * more details.
 *
 * You should have received a copy of the GNU General Public License v2.0
 * along with IXP Manager.  If not, see:
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLoginHistory
 */
class UserLoginHistory
{
    /**
     * @var string
     */
    protected $ip;

    /**
     * @var \DateTime
     */
    protected $at;

    /**
     * @var string
     */
    private $via;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var int Link to \Entities\User
     */
    protected $user_id;

    /**
     * @var \Entities\CustomerToUser
     */
    protected $customerToUser;


    /**
     * Set ip
     *
     * @param string $ip
     * @return UserLoginHistory
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set via
     *
     * @param string $via
     * @return UserLoginHistory
     */
    public function setVia($via)
    {
        $this->via = $via;

        return $this;
    }

    /**
     * Get via
     *
     * @return string
     */
    public function getVia()
    {
        return $this->via;
    }


    /**
     * Set at
     *
     * @param \DateTime $at
     * @return UserLoginHistory
     */
    public function setAt($at)
    {
        $this->at = $at;
    
        return $this;
    }

    /**
     * Get at
     *
     * @return \DateTime 
     */
    public function getAt()
    {
        return $this->at;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set User
     *
     * @param \Entities\CustomerToUser $c2u
     * @return UserLoginHistory
     */
    public function setCustomerToUser(\Entities\CustomerToUser $c2u)
    {
        $this->customerToUser = $c2u;

        return $this;
    }

    /**
     * Get User
     *
     * @return \Entities\CustomerToUser
     */
    public function getCustomerToUser()
    {
        return $this->customerToUser;
    }
}
