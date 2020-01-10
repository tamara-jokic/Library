<?php

require_once './Library/DB/DBConnection.php';
require_once './Library/Exceptions/DBException.php';
require_once './Library/Repositories/ObjectRepository.php';
require_once './Library/Transformers/ObjectTransformer.php';
require_once './Library/Exceptions/ItemNotFoundException.php';
require_once './Library/Exceptions/ItemNotSavedException.php';
require_once './Library/Exceptions/ItemNotDeletedException.php';
require_once './Library/Validators/RequestValidator.php';
require_once './Library/Exceptions/ValidationException.php';

require_once './Books/Models/Books.php';
require_once './Books/Repositories/BooksRepository.php';
require_once './Books/Transformers/BooksTransformer.php';

require_once  './functions.php';

require_once './Authors/Models/Authors.php';
require_once './Authors/Repositories/AuthorsRepository.php';
require_once './Authors/Transformers/AuthorsTransformer.php';

require_once './Members/Models/Members.php';
require_once './Members/Repositories/MembersRepository.php';
require_once './Members/Transformers/MembersTransformer.php';

require_once './Publishers/Models/Publishers.php';
require_once './Publishers/Repositories/PublishersRepository.php';
require_once './Publishers/Transformers/PublishersTransformer.php';

require_once './Staff/Models/Staff.php';
require_once './Staff/Repositories/StaffRepository.php';
require_once './Staff/Transformers/StaffTransformer.php';