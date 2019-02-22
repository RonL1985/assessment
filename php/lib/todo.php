<?php
namespace RonL1985\object-oriented1;
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
var_dump($rock)
