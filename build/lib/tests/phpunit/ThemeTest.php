<?php
/**
 *
 * @package    mahara
 * @subpackage tests
 * @author     Gilles-Philippe Leblanc <gilles-philippe.leblanc@umontreal.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

require_once(get_config('libroot') . 'web.php');

/**
 * Test the Theme class.
 */
class ThemeTest extends MaharaUnitTest {

    /** The id of the user created in setUp. */
    private $testuserid;

    /** The theme created in setUp. */
    private $theme;

    /**
     * Shared setUp method.
     * Require a test user, and
     * create a theme to test with.
     */
    public function setUp(): void {
        parent::setUp();
        $this->testuserid = $this->create_test_user();
        $this->theme = new Theme($this->testuserid);
    }

    /**
     * Test the get_image_url method.
     */
    public function test_get_image_url() {

        // Test the use of SVG image.
        $expectedsvg = $this->theme->get_url('images/site-logo.svg');
        $actualsvg = $this->theme->get_image_url('site-logo');
        $this->AssertEquals($expectedsvg, $actualsvg);

        // Test the use of PNG image.
        $expectedpng = $this->theme->get_url('images/no_userphoto.png');
        $actualpng = $this->theme->get_image_url('no_userphoto');
        $this->AssertEquals($expectedpng, $actualpng);

        // Test the use of GIF image.
        $expectedgif = $this->theme->get_url('images/select2/select2-spinner.gif');
        $actualgif = $this->theme->get_image_url('select2/select2-spinner');
        $this->AssertEquals($expectedgif, $actualgif);

        // Test the use of JPG image.
        // $expectedjpg = $this->theme->get_url('images/testimage.jpg');
        // $actualjpg = $this->theme->get_image_url('testimage');
        // $this->AssertEquals($expectedjpg, $actualjpg);

        // Test with the plugin directory.
        $expectedpluginpng = $this->theme->get_url('images/note.png', false, 'artefact/internal');
        $actualpluginpng = $this->theme->get_image_url('note', 'artefact/internal');
        $this->AssertEquals($expectedpluginpng, $actualpluginpng);

    }

}
