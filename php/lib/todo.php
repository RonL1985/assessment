<?php


namespace RonL1985\assessment;
require_once("../Classes/Todo.php");
require_once("../Classes/autoload.php");
//	require_once("../classes/autoload.php");
//	require_once(dirname(__DIR__, 1) . "/classes/todo.php");
// use autoload via composer (PHP's package manager:
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");
/*
simplified attribute names:
	todoId
	todoAvatarUrl
	todoActivationToken
	todoEmail
	todoHash
	todoUsername
*/
/**
 * New Todo Generator
 *
 * A new instance of the todo class with all of the attributes the database requires.
 *
 */
$snape = new todo(
	generateUuidV4(),
	"www.Hogwarts.com/",
	"babababababababababababababababa",
	"professorSnape@gmail.com",
	"dsjflsjfheihgeukhfisnfsldhflkggsldfgehskdhgnsgukhsldhfkshglhseiugfsbdlkfahlfehldkjvhhgsjunslnjpodjwjghgsknfnvslkng",
	"ProfessorSnape"
);
//insert($snape);
var_dump($snape);
$spell = new todo(
	generateUuidV4(),
	"www.spellcasting.com/",
	"hahahahahahahahahahahahahahahaha",
	"CastSpell@gmail.com",
	"jgeuhfvkkldsljdjfilnledjavgtte74y4839y4ihtysih9405iowiehflksjguflwjdoilhwueotsigdihgwsgiswohgoheifj",
	"BadSpell"
);
//insert($spell);
var_dump($spell);
$rock = new todo(
	generateUuidV4(),
	"www.hardrock.com/",
	"rockrockrockrockrockrockrockrockrockrockrockrockrockrockrockrock",
	"WhatsTheRockCooking@gmail.com",
	"aherihyh3230u42040820903902ty8hwgherghwihefiufhikhsoihg049058309uoiejgslhgoidhslvkbklsdjlsjfghelkshgknkhdkfn",
	"DwayneTheRockJohnson"
);
//insert($rock);
var_dump($rock);

/**
 * Small Cross Section of a author
 *
 * This author can be considered a small example of object oriented phase 1 assigment. when author are used in object oriented. This can easily be extended to emulate more feature of object oriented.
 *
 * @author Ronald Luna <ronaldluna1@gmail.com
 * @version 1
 **/
class todo {
	/**
	 * id for this todo; this is the primary key
	 * @var Uuid $todoId
	 **/
	private $todoId;
	/** url of the todo that left this question
	 * @var string $todoAvatarUrl
	 **/
	private $todoAvatarUrl;
	/** Nickname of this todo/user
	 * @var string $todoActivationToken
	 **/
	private $todoActivationToken;
	/**
	 * Email linked to this todo,
	 * @var string $todoEmail
	 **/
	private $todoEmail;
	/** Username of this todo/username
	 * @var string $todoUsername
	 **/
	private $todoUsername;
	/**
	 * @param Uuid $newTodoId
	 * @param $newTodoAvatarUrl
	 * @param $newTodoActivationToken
	 * @param $newTodoEmail
	 * @param $newTodoUsername
	 * @throws InvalidArgumentException
	 * @throws RangeException
	 * @throws Exception
	 * @throws TypeError
	 **/
	public function _construct(string $newTodoId, string $newTodoAvatarUrl, string $newTodoActivationToken, string $newTodoEmail, string $newTodoUsername) {
		try {
			$this->setTodoId($newTodoId);
			$this->setTodoAvatarUrl($newTodoAvatarUrl);
			$this->setTodoActivationToken($newTodoActivationToken);
			$this->setTodoEmail($newTodoEmail);
			$this->setTodoUsername($newTodoUsername);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw (new $exceptionType($exception->getMessage(), 0, $exception)) ;
		}
	}
	/** accessor method for todo id
	 *
	 * @return Uuid value of todo id
	 *
	 **/
	public function getTodoId() : Uuid {
		return($this->todoId);
	}
	/**
	 * mutator method for todo id
	 *
	 * @param Uuid/string $newTodoId new value of todo id
	 * @throws \RangeExeption if $newTodoId is n
	 * @throws \TypeError if $newTodoId is not a Uuid
	 **/
	public function setTodoId( $newTodorId) : void {
		try {
			$uuid = self ::validateUuid($newTodoId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		// convert and store the todo id
		$this->todoId = $Uuid;
	}
	/**
	 * accessor method for todo Avatar Url
	 *
	 * @return string value of todo Avatar Url
	 **/
	public function getTodoAvatarUrl() : string {
		return($this->todoAvatarUrl);
	}
	/**
	 * mutator method for todo Avatar Url
	 *
	 * @param string | string $newTodoAvatarUrl new value of Todo Avatar Url
	 * @throws \ InvalidArgumentException if $newTodoAvatarUrl is not a string or insecure
	 * @throws \TypeError if @newTodoAvatarUrl is not an string
	 **/
	public function setTodoAvatarUrl( $newTodoAvatarUrl) : void {
		try {
			$string = self::validateString($newTodoAvatarUrl);
		} catch(\InvalidArgumentException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(),0,$exception));
		}
		// convert and store the todo id
		$this-> todoAvatarUrl = $string;
	}
	/**
	 * accessor method for todo ActivationToken
	 *
	 * @return string value of todo ActivationToken
	 **/
	public function getTodoActivationToken() : string {
		return($this->todoActivationToken);
	}
	/**
	 * mutator method for todo ActivationToken
	 *
	 * @param string | string $newTodoActivationToken new value of todo ActivationToken
	 * @throws \ InvalidArgumentException if $newTodoActivationToken is not a string or insecure
	 * @throws \TypeError if @newTodoActivationToken is not an string
	 **/
	public function setTodoActivationToken( $newTodoActivationToken) : void {
		try {
			$string = self::validateString($newTodoActivationToken);
		} catch(\InvalidArgumentException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(),0,$exception));
		}
		// convert and store the todo id
		$this-> todoActivationToken = $string;
	}
	/**
	 * accessor method for todo Email
	 *
	 * @return string value of todo Email
	 **/
	public function getTodoEmail() : string {
		return($this->todoEmail);
	}
	/**
	 * mutator method for todo Email
	 *
	 * @param string | string $newTodoEmail new value of todo Email
	 * @throws \ InvalidArgumentException if $newtodoEmail is not a string or insecure
	 * @throws \TypeError if @newTodoEmail is not an string
	 **/
	public function setTodoEmail( $newTodoEmail) : void {
		try {
			$string = self::validateString($newTodoEmail);
		} catch(\InvalidArgumentException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(),0,$exception));
		}
		// convert and store the todo id
		$this-> todoEmail = $string;
	}
	/**
	 * accessor method for todo Username
	 *
	 * @return string value of todo Username
	 **/
	public function getTodoUsername() : string {
		return($this->todoUsername);
	}
	/**
	 * mutator method for todo Username
	 *
	 * @param string | string $newTodoUsername new value of todo Username
	 * @throws \ InvalidArgumentException if $newTodoUsername is not a string or insecure
	 * @throws \TypeError if @newTodoUsername is not an string
	 **/
	public function setTodoUsername( $newTodoUsername) : void {
		try {
			$string = self::validateString($newTodoUsername);
		} catch(\InvalidArgumentException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(),0,$exception));
		}
		// convert and store the todo id
		$this-> todoUsername = $string;
	}
