<?php

/**
 * Represents a MicroBlog configuration for the BlueSpiceSocial extension.
 *
 * This class provides configuration settings and methods specific to MicroBlogs.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * This file is part of BlueSpice MediaWiki
 * For further information visit https://bluespice.com
 *
 * @author     Patric Wirth
 * @package    BlueSpiceSocial
 * @subpackage BSSocial
 * @copyright  Copyright (C) 2017 Hallo Welt! GmbH, All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GPL-3.0-only
 * @filesource
 */

namespace BlueSpice\Social\MicroBlog\EntityConfig;

use BlueSpice\Social\EntityConfig\Text;

/**
 * Represents a MicroBlog configuration for the BlueSpiceSocial extension.
 *
 * @package BlueSpiceSocial
 * @subpackage BSSocial
 */
class MicroBlog extends Text {
    /**
     * Retrieves the default getter values.
     *
     * @return array An array of default getter values.
     */
    public function addGetterDefaults() {
        return [];
    }

    /**
     * Retrieves the entity class for MicroBlog.
     *
     * @return string The class name of the MicroBlog entity.
     */
    protected function get_EntityClass() {
        return "\\BlueSpice\\Social\\MicroBlog\\Entity\\MicroBlog";
    }

    /**
     * Retrieves the module scripts for MicroBlog.
     *
     * @return array An array of module scripts for MicroBlog.
     */
    protected function get_ModuleScripts() {
        return array_merge(parent::get_ModuleScripts(), [
            'ext.bluespice.social.entity.text',
            'ext.bluespice.social.entity.microblog',
        ]);
    }

    /**
     * Retrieves the module styles for MicroBlog.
     *
     * @return array An array of module styles for MicroBlog.
     */
    protected function get_ModuleStyles() {
        return array_merge(parent::get_ModuleStyles(), [
            'ext.bluespice.socialmicroblog.styles'
        ]);
    }

    /**
     * Retrieves the message key for MicroBlog type.
     *
     * @return string The message key for MicroBlog type.
     */
    protected function get_TypeMessageKey() {
        return 'bs-socialmicroblog-type';
    }

    /**
     * Retrieves the notification configurations for MicroBlog.
     *
     * @return array An array of notification configurations for MicroBlog.
     */
    protected function get_Notifications() {
        return [
            'socialentity-microblog-create' => "\\BlueSpice\\Social\\MicroBlog\\NotificationConfig\\Create",
        ];
    }

    /**
     * Retrieves the notification actions for MicroBlog.
     *
     * @return array An array of notification actions for MicroBlog.
     */
    protected function get_NotificationActions() {
        return [
            'create' => 'socialentity-microblog-create',
        ];
    }

    /**
     * Determines if MicroBlog is listable in extended search.
     *
     * @return bool True if MicroBlog is listable in extended search, false otherwise.
     */
    protected function get_ExtendedSearchListable() {
        return true;
    }

    /**
     * Determines if MicroBlog is selected in entity list special timeline type.
     *
     * @return bool True if MicroBlog is selected in entity list special timeline type, false otherwise.
     */
    protected function get_EntityListSpecialTimelineTypeSelected() {
        return true;
    }

    /**
     * Retrieves the permission for creating MicroBlogs.
     *
     * @return string The permission required for creating MicroBlogs.
     */
    protected function get_CreatePermission() {
        return 'social-microblog';
    }

    /**
     * Retrieves the permission for editing MicroBlogs.
     *
     * @return string The permission required for editing MicroBlogs.
     */
    protected function get_EditPermission() {
        return 'social-microblog';
    }

    /**
     * Retrieves the permission for deleting MicroBlogs.
     *
     * @return string The permission required for deleting MicroBlogs.
     */
    protected function get_DeletePermission() {
        return 'social-microblog';
    }

    /**
     * Retrieves the permission for commenting on MicroBlogs.
     *
     * @return string The permission required for commenting on MicroBlogs.
     */
    protected function get_CommentPermission() {
        return 'social-microblog-comment';
    }
}
