<?php

namespace IXP\Http\Controllers\Customer;

/*
 * Copyright (C) 2009-2017 Internet Neutral Exchange Association Company Limited By Guarantee.
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

use Auth, D2EM, Redirect;

use IXP\Http\Controllers\Controller;
use Illuminate\Http\{
    RedirectResponse
};




/**
 * Customer Notes Controller
 * @author     Barry O'Donovan <barry@islandbridgenetworks.ie>
 * @author     Yann Robin <yann@islandbridgenetworks.ie>
 * @category   Interfaces
 * @copyright  Copyright (C) 2009-2017 Internet Neutral Exchange Association Company Limited By Guarantee
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU GPL V2.0
 */
class CustomerNotesController extends Controller {

    /**
     * @return RedirectResponse
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function readAll() : RedirectResponse{
        $lastReads = Auth::getUser()->getAssocPreference( 'customer-notes' )[0];
        foreach( $lastReads as $id => $data ) {
            if( is_numeric( $id ) )
                Auth::getUser()->deletePreference( "customer-notes.$id.last_read" );
        }

        Auth::getUser()->setPreference( 'customer-notes.read_upto', time() );
        D2EM::flush();

        return Redirect::to( '/customer/unread-notes' );
    }
}

