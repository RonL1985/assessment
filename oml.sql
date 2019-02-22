INSERT INTO customer (todoId, todoAuthor, todoDate, todoTask,)
VALUES(
  -- generated UUID for todo id converted to binary
   UNHEX(REPLACE('1c8e982f654e46aea06d8c1c0fe50f33','-', '')),
  -- todo author chosen by author
  'rluna41',
  -- Date
  '02/22/2019',
  -- task,
 '894e65fe9b536b64d7a1940e46ec9cb923fab7f1d63be350b43106851235cb23e798e19a85fee1ecd84e988dbbbf1c59881b003d94f9a23dcfd132fca5ef27bd', 'd79d674bb81c24fff3a8af16cb4c6c2b28eec296d4c05745d08e9178e3144f5d2478564'
);
SELECT todoId, todoAuthor, todoDate
  FROM customer
  WHERE todoDate LIKE '%ona%';

UPDATE todo
  SET todoAuthor = 'Todo'
  WHERE todoId = '1c8e982f654e46aea06d8c1c0fe50f33';

DELETE FROM todo
  WHERE todoId = '1c8e982f654e46aea06d8c1c0fe50f33';

DELETE FROM todo
  WHERE todoAuthor = '1c8e982f654e46aea06d8c1c0fe50f33';

SELECT todo.todoId,todo.todoAuthor, from customer inner join on todo.todoId = WHERE todoId = '1c8e982f654e46aea06d8c1c0fe50f33';
