<?php


namespace RonL1985\assessment;
require_once("../Classes/Todo.php");
require_once("../Classes/autoload.php");
//	require_once("../classes/autoload.php");
//	require_once(dirname(__DIR__, 1) . "/classes/todo.php");
// use autoload via composer (PHP's package manager:
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");
/**
simplified attribute names:
	todoId
	todoAuthor
	todoDate
	todoTask
**/
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
 * Small Cross Section of a todo
 *
 * This todo can be considered a small example of assessment. when todo are used in assessment. This can easily be extended to emulate more feature of assessment.
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
	 * @var string $todoAuthor
	 **/
	private $todoAuthor;
	/** Nickname of this todo/user
	 * @var string $todoDate
	 **/
	private $todoDate;
	/**
	 * Email linked to this todo,
	 * @var string $todoTask
	 **/
	private $todoTask;

	/**
	 * @param Uuid $newTodoId
	 * @param $newTodoAuthor
	 * @param $newTodoDate
	 * @param $newTodoTask
	 * @throws InvalidArgumentException
	 * @throws RangeException
	 * @throws Exception
	 * @throws TypeError
	 **/
	public function _construct(string $newTodoId, string $newTodoAuthor, string $newTodoDate, string $newTodoTask) {
		try {
			$this->setTodoId($newTodoId);
			$this->setTodoAvatarUrl($newTodoAuthor);
			$this->setTodoActivationToken($newTodoDate);
			$this->setTodoEmail($newTodoTask);
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
			$uuid = self ::validateUuid ($newTodoId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		// convert and store the todo id
		$this->todoId = $uuid;
	}
	/**
	 * accessor method for todo Author
	 *
	 * @return string value of todo Author
	 **/
	public function getTodoAuthor() : string {
		return($this->todoAuthor);
	}
	/**
	 * mutator method for todo Author
	 *
	 * @param string | string $newTodoAuthor new value of Todo Author
	 * @throws \ InvalidArgumentException if $newTodoAuthor is not a string or insecure
	 * @throws \TypeError if @newTodoAuthor is not an string
	 **/
	public function setTodoAuthor($newTodoAuthor) : void {
		try {
			$string = self::validateString($newTodoAuthor);
		} catch(\InvalidArgumentException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(),0,$exception));
		}
		// convert and store the todo id
		$this-> todoAuthor = $string;
	}
	/**
	 * accessor method for todo Date
	 *
	 * @return string value of todo Date
	 **/
	public function getTodoDate() : string {
		return($this->todoDate);
	}
	/**
	 * mutator method for todo Date
	 *
	 * @param string | string $newTodoDate new value of todo Date
	 * @throws \ InvalidArgumentException if $newTodoDate is not a string or insecure
	 * @throws \TypeError if @newTodoDate is not an string
	 **/
	public function setTodoDate( $newTodoDate) : void {
		try {
			$string = self::validateString($newTodoDate);
		} catch(\InvalidArgumentException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(),0,$exception));
		}
		// convert and store the todo id
		$this-> todoDate = $string;
	}
	/**
	 * accessor method for todo Task
	 *
	 * @return string value of todo Task
	 **/
	public function getTodoTask() : string {
		return($this->todoTask);
	}
	/**
	 * mutator method for todo Task
	 *
	 * @param string | string $newTodoEmail new value of todo Task
	 * @throws \ InvalidArgumentException if $newtodoTask is not a string or insecure
	 * @throws \TypeError if @newTodoTask is not an string
	 **/
	public function setTodoTask( $newTodoTask) : void {
		try {
			$string = self::validateString($newTodoTask);
		} catch(\InvalidArgumentException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(),0,$exception));
		}
		// convert and store the todo id
		$this-> todoTask = $string;
	}}
