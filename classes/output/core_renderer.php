<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace theme_mooveu\output;

use theme_config;
use context_course;
use moodle_url;
use html_writer;
use theme_moove\output\core_course\activity_navigation;

class core_renderer extends \theme_moove\output\core_renderer {
    /**
     * The standard tags (meta tags, links to stylesheets and JavaScript, etc.)
     * that should be included in the <head> tag. Designed to be called in theme
     * layout.php files.
     *
     * @return string HTML fragment.
     */
    public function standard_head_html() {
        $output = \theme_boost\output\core_renderer::standard_head_html();
        return $output;
    }
    /**
     * Returns HTML attributes to use within the body tag. This includes an ID and classes.
     *
     * @param string|array $additionalclasses Any additional classes to give the body tag,
     *
     * @return string
     *
     * @throws \coding_exception
     *
     * @since Moodle 2.5.1 2.6
     */
    public function body_attributes($additionalclasses = array()) {
        return parent::body_attributes($additionalclasses);
    }

    /**
     * Whether we should display the main theme or site logo in the navbar.
     *
     * @return bool
     */
    public function should_display_logo() {
        return parent::should_display_logo();
    }

    /**
     * Whether we should display the main theme logo in the navbar.
     *
     * @return bool
     */
    public function should_display_theme_logo() {
        return parent::should_display_theme_logo();
    }

    /**
     * Get the main logo URL.
     *
     * @return string
     */
    public function get_logo() {
        return parent::get_logo();
    }

    /**
     * Get the main logo URL.
     *
     * @return string
     */
    public function get_theme_logo_url() {
        return parent::get_theme_logo_url();
    }

    /**
     * Renders the login form.
     *
     * @param \core_auth\output\login $form The renderable.
     * @return string
     */
    public function render_login(\core_auth\output\login $form) {
        return parent::render_login($form);
    }

    /**
     * Returns the HTML for the site support email link
     *
     * @param array $customattribs Array of custom attributes for the support email anchor tag.
     * @return string The html code for the support email link.
     */
    public function supportemail(array $customattribs = []): string {
        return parent::supportemail($customattribs);
    }

    /**
     * Returns the moodle_url for the favicon.
     *
     * @since Moodle 2.5.1 2.6
     * @return moodle_url The moodle_url for the favicon
     */
    public function favicon() {
        return parent::favicon();
    }

    /**
     * Renders the header bar.
     *
     * @param \context_header $contextheader Header bar object.
     * @return string HTML for the header bar.
     */
    protected function render_context_header(\context_header $contextheader) {
        return parent::render_context_header($contextheader);
    }

    /**
     * Returns standard navigation between activities in a course.
     *
     * @return string the navigation HTML.
     */
    public function activity_navigation() {
        return parent::activity_navigation();
    }

    /**
     * Returns plugins callback renderable data to be printed on navbar.
     *
     * @return string Final html code.
     */
    public function get_navbar_callbacks_data() {
        return parent::get_navbar_callbacks_data();
    }
}

