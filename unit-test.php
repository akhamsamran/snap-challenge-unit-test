<?php
/**
/**
 * add namespace
 **/
namespace Edu\Cnm\DataDesign;
require_once("autoload.php");
require_once(dirname(__DIR__ . "autoload.php"));
/**
 * Full PHPUnit test for the Blog class
 *
 * This is a complete PHPUnit test of the Blog class. It is complete because *ALL* mySQL/PDO enabled methods
 * are tested for both invalid and valid inputs.Definition of SETUP:Setup: A function that sets up testing conditions to be run before the unit test is executed
 *
 * @see Blog
 * @author Dylan McDonald <dmcdonald21@cnm.edu>
 **/
class BlogTest extends DataDesignTest {
	/**
	 * Profile that created the Blog; this is for foreign key relations
	 * @var Profile profile
	 **/
	protected $profile = null;
	/**
	 * valid profile hash to create the profile object to own the test
	 * @var $VALID_HASH
	 */
	protected $VALID_PROFILE_HASH;
	/**
	 * valid salt to use to create the profile object to own the test
	 * @var string $VALID_SALT
	 */
	protected $VALID_PROFILE_SALT;
	/**
	 * content of the Blog
	 * @var string $VALID_BLOGCONTENT
	 **/
	protected $VALID_BLOGCONTENT = "PHPUnit test passing";

	/**
	 * content of the updated Blog
	 * @var string $VALID_BLOGCONTENT2
	 **/
	protected $VALID_BLOGCONTENT2 = "PHPUnit test still passing";
	/**
	 * timestamp of the Blog; this starts as null and is assigned later
	 * @var \DateTime $VALID_BLOGDATE
	 **/
	protected $VALID_BLOGDATE = null;
	/**
	 * Valid string to use as blogTitle
	 * @var string $VALID_BLOGTITLE
	 **/
	protected $VALID_blogTitle = null;

* create dependent objects before running each test
**/
	public final function setUp()  : void {
	// run the default setUp() method first
	parent::setUp();
	$password = "abc123";
	$this->VALID_PROFILE_SALT = bin2hex(random_bytes(32));
	$this->VALID_PROFILE_HASH = hash_pbkdf2("sha512", $password, $this->VALID_PROFILE_SALT, 262144);

?>